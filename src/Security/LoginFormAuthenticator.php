<?php

namespace App\Security;

use App\Repository\UserRepository;
use App\Controller\SecurityController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\PassportInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;

/**
 * LoginFormAuthenticator
 */
class LoginFormAuthenticator extends AbstractAuthenticator
{

    private $userRepository;
    private $urlGenerator;

    public function __construct(UserRepository $userRepository, UrlGeneratorInterface $urlGenerator)
    {
        $this->userRepository = $userRepository;
        $this->urlGenerator = $urlGenerator;
    }
    
    /**
     * supports
     *
     * @param  mixed $request
     * @return bool
     */
    public function supports(Request $request): ?bool
    {
        return $request->attributes->get('_route') === "security_login"
        && $request->isMethod('POST');
    }

    /**
     * authenticate
     *
     * @param  mixed $request
     * @return PassportInterface
     * @throws AuthenticationException
     * 
     */
    public function authenticate(Request $request): PassportInterface
    {
        $user = $this->userRepository->findOneByEmail($request->request->get('email'));

        $request->getSession()->set(
            SecurityController::LAST_EMAIL,
            $request->request->get('email')
            );
        if (!$user) {
            throw new CustomUserMessageAuthenticationException('invalid Credential');
        }
        return new Passport(
            $user,
            new PasswordCredentials($request->request->get('password')),[
            new CsrfTokenBadge('login_token',$request->request->get('csrf_token')),
            new RememberMeBadge
            ]
        );
    }


    
    /**
     * onAuthenticationSuccess
     *
     * @param  mixed $request
     * @param  mixed $token
     * @param  mixed $firewallName
     * @return Response
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName):Response
    {
        $request->getSession()->remove(SecurityController::LAST_EMAIL);
        return new RedirectResponse($this->urlGenerator->generate('admin-post-index'));
    }

    
    /**
     * onAuthenticationFailure
     *
     * @param  mixed $request
     * @param  mixed $exception
     * @return Response
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $request->getSession()->getFlashBag()->add('error', "Invalid credentials");
        return new RedirectResponse($this->urlGenerator->generate('security_login'));
    }
    }