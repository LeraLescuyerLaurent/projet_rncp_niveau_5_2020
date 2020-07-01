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

/* administration.html.twig */
class __TwigTemplate_ad68a18fa7adcd464ac33f6121480ded485fd2884c3a0a2c960c14bb65909054 extends Template
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
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CategoriesController::header"));
        echo "

        <section class=\"container_admin \">
            <aside id=\"sidebaAdmin\" class=\"sidebar_admin \" >
                <div class=\"toggle__menu__administration\" id=\"toggleAdminBtn\">
                    <span></span>
                    <span></span>
                    <span></span>
\t\t\t\t</div>
\t\t\t\t<span id=\"closeMenuAdmin\" class=\"close_menu_admin\">X</span>
                <h3>administration </h3>
                <ul >
                    <p>Articles</p>
                    <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-post-index");
        echo " \">liste des articles</a></li>
                    <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-post-add");
        echo " \">Ajouter un article</a></li>
\t\t\t\t</ul>
                <ul>
                    <p>Catégories Principales</p>
                    <li><a href=\" ";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-index-categories");
        echo " \">liste des catégories</a></li>
                    <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-category-add");
        echo "\">Ajouter une catégorie</a></li>
                </ul>\t
                <ul>
                    <p>Sous-Catégories</p>
                    <li><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-index-subcategorie");
        echo "\">liste des sous-catégories</a></li>
                    <li><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-sub-categories-add");
        echo "\">Ajouter une sous-catégorie</a></li>
                </ul>
                <ul>
                    <p>Pages</p>
                    <li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-pages-index");
        echo "\">liste des pages</a></li>
                    <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-pages-add");
        echo "\">Ajouter une page</a></li>
                </ul>
                <ul>
                    <p>Commentaires</p>
                    <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-comment-index");
        echo "\">liste des messages</a></li>
                </ul>
\t\t\t\t<ul>
                    <p>Contact</p>
                    <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-contact-index");
        echo "\">liste des messages</a></li>
                </ul>
            </aside>
    ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "</section>
<footer></footer>
        ";
        // line 56
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("index");
        echo "
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"/dist/js/monscript.js\"></script>
        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "administration";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"/dist/css/generale.css\">
            ";
        // line 9
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("index");
        echo "
        ";
    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  172 => 53,  166 => 9,  163 => 8,  159 => 7,  152 => 5,  145 => 60,  143 => 59,  137 => 56,  133 => 54,  131 => 53,  125 => 50,  118 => 46,  111 => 42,  107 => 41,  100 => 37,  96 => 36,  89 => 32,  85 => 31,  78 => 27,  74 => 26,  58 => 13,  54 => 11,  52 => 7,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "administration.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/administration.html.twig");
    }
}
