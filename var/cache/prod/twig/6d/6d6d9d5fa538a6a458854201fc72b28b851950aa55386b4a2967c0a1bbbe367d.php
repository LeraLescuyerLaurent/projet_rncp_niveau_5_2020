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

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_b0f251bb9d127a7b3723b4c09873a0507dfc9926eedbd1e84eb35bdea63f8cbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    page non trouvé
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"row\">
    <section class=\"container col-14  col-m-14 col-l-14 col-xl-14 col-l-push-1 col-m-push-1 col-push-1 col-xl-push-1\">
        <main>
            <div class=\" principal col-14 col-m-14 col-l-10 col-xl-9 \">
                <div class=\"errorPage col-center  \">
                  <h1 class=\"HTTPerror col-center\">page non trouvée</h1>
                  <p>Quel dommage mais la page n'existe pas</p>
                    <div class=\"col-center\">
                        <span class=\"bigText\">4</span>
                        <span class=\"bigImage\"><img src=\"/dist/image/logo.png\" alt=\"\"></span>
                        <span class=\"bigText\">4</span>
                    </div>
                </div>
            </div>
        </main>

";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  56 => 6,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error404.html.twig", "/home/lera/Bureau/projet_rncp_niveau_5/templates/bundles/TwigBundle/Exception/error404.html.twig");
    }
}
