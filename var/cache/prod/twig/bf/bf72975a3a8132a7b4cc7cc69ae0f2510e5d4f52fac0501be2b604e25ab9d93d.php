<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_af3de33df698013e9184b9b77578b39a0dd420345bfb2025732eacdb37f572b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'cat' => [$this, 'block_cat'],
            'subcat' => [$this, 'block_subcat'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5efce6ab347d420012964b0d&product=inline-share-buttons&cms=sop' async='async'></script>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5efce6ab347d420012964b0d&product=sticky-share-buttons&cms=sop' async='async'></script>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5efce6ab347d420012964b0d&product=inline-follow-buttons&cms=sop' async='async'></script>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5efce6ab347d420012964b0d&product=inline-share-buttons&cms=sop' async='async'></script>


        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    </head>
    <body>
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CategoriesController::header"));
        echo "
                ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "            <section class=\"sidebare col-14 col-m-14 col-l-4 col-xl-4 \">
                <aside class=\"recherche col-14 col-m-14 col-l-4 col-xl-4\">
                    <label for=\"recherche\" >
                        <h6 class=\" bold uppercase \" >Rechercher</h6>
                    </label>
                    <form action=\" ";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche-article");
        echo " \" method=\"POST\">
                        <input type=\"text\" name=\"recherche\" id=\"search\" placeholder=\"Rechercher\" class=\"col-13 col-m-13 col-l-3 col-xl-3 \" autocomplete=\"off\" >
                        <button class=\"col-1 col-m-1 col-l-1 col-xl-1 search\" aria-label=\"Search\"><i class=\"fas fa-search\"></i></button>
                    </form>
                </aside>
                <aside class=\"profil  col-14 col-m-14 col-l-4 col-xl-4\">
                    <div class=\"profil_image col-2 height-2 col-m-2 height-m-2 col-l-2 height-l-2 col-l-center  col-xl-2  col-xl-center height-xl-2  \">
                        <img src=\"/dist/images/logo.png\" alt=\"image profil\">
                    </div>
                        <div class=\"info_profil col-11 col-m-11 col-l-4 col-xl-3 col-xl-center\">
                            <h2>LERA LESCUYER Laurent</h2>
                            <h4>Développeur Web</h4>
                            <p>
                                Développeur web HTML, CSS , Js, PHP, Java .
                            </p>
                        </div>
                </aside>
                <aside class=\"sociaux_general col-14 col-m-14 col-l-4 col-xl-4\">
                    <h6 class=\"uppercase\">rejoint nous sur nos réseau sociaux</h6>
                    <div class=\"resaux col-14 col-l-4 col-xl-5\">
                        <div class=\"sharethis-inline-follow-buttons\"></div>
                    </div>
                </aside>


                            ";
        // line 52
        $this->displayBlock('cat', $context, $blocks);
        // line 53
        echo "                            ";
        $this->displayBlock('subcat', $context, $blocks);
        // line 54
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PostsController::PopulairePosts"));
        echo "


            </section>
            </section>
        </div>
        <footer>
            <p>
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PagesController::pagesList"));
        echo "
            <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">contact</a>
        </p>
            <p>
                2020 © copyright Laurent Lera Lescuyer tips and news
            </p>
        </footer>
        ";
        // line 69
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("index");
        echo "
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"/dist/js/nav.js\"></script>
        <script src=\"/dist/js/monscript.js\"></script>
        ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <script src=\"https://kit.fontawesome.com/81cdd09cfd.js\" crossorigin=\"anonymous\"></script>
        ";
        // line 15
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("index");
        echo "
        ";
        // line 17
        echo "        ";
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 52
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PostsController::countPostsByCategorie"));
    }

    // line 53
    public function block_subcat($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 73,  187 => 53,  180 => 52,  174 => 21,  170 => 17,  166 => 15,  163 => 14,  159 => 13,  152 => 6,  146 => 74,  144 => 73,  137 => 69,  128 => 63,  124 => 62,  112 => 54,  109 => 53,  107 => 52,  79 => 27,  72 => 22,  70 => 21,  66 => 20,  62 => 18,  60 => 13,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/base.html.twig");
    }
}
