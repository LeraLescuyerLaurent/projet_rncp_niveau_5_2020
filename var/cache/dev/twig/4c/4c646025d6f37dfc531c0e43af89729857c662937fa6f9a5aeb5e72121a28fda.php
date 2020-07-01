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
class __TwigTemplate_e13fae5d9b499c46a0d5500d79d066b3564db5aeb4a9fcb3e0328d7e902d41e6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <script src=\"https://kit.fontawesome.com/81cdd09cfd.js\" crossorigin=\"anonymous\"></script>
        ";
        // line 15
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("index");
        echo "
        ";
        // line 17
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_cat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cat"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cat"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PostsController::countPostsByCategorie"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_subcat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcat"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subcat"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  265 => 73,  247 => 53,  228 => 52,  210 => 21,  200 => 17,  196 => 15,  193 => 14,  183 => 13,  164 => 6,  152 => 74,  150 => 73,  143 => 69,  134 => 63,  130 => 62,  118 => 54,  115 => 53,  113 => 52,  85 => 27,  78 => 22,  76 => 21,  72 => 20,  68 => 18,  66 => 13,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5efce6ab347d420012964b0d&product=inline-share-buttons&cms=sop' async='async'></script>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5efce6ab347d420012964b0d&product=sticky-share-buttons&cms=sop' async='async'></script>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5efce6ab347d420012964b0d&product=inline-follow-buttons&cms=sop' async='async'></script>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5efce6ab347d420012964b0d&product=inline-share-buttons&cms=sop' async='async'></script>


        {% block stylesheets %}
        <script src=\"https://kit.fontawesome.com/81cdd09cfd.js\" crossorigin=\"anonymous\"></script>
        {{ encore_entry_link_tags('index') }}
        {# <link rel=\"stylesheet\" href=\"/dist/css/generale.css\"> #}
        {% endblock %}
    </head>
    <body>
        {{ render(controller('App\\\\Controller\\\\CategoriesController::header') ) }}
                {% block body %}{% endblock %}
            <section class=\"sidebare col-14 col-m-14 col-l-4 col-xl-4 \">
                <aside class=\"recherche col-14 col-m-14 col-l-4 col-xl-4\">
                    <label for=\"recherche\" >
                        <h6 class=\" bold uppercase \" >Rechercher</h6>
                    </label>
                    <form action=\" {{ path(\"recherche-article\")}} \" method=\"POST\">
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


                            {% block cat %}{{ render(controller('App\\\\Controller\\\\PostsController::countPostsByCategorie') ) }}{% endblock %}
                            {% block subcat %}{% endblock %}
                            {{ render(controller('App\\\\Controller\\\\PostsController::PopulairePosts') ) }}


            </section>
            </section>
        </div>
        <footer>
            <p>
            {{ render(controller('App\\\\Controller\\\\PagesController::pagesList') ) }}
            <a href=\"{{ path('contact') }}\">contact</a>
        </p>
            <p>
                2020 © copyright Laurent Lera Lescuyer tips and news
            </p>
        </footer>
        {{ encore_entry_script_tags('index') }}
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"/dist/js/nav.js\"></script>
        <script src=\"/dist/js/monscript.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/base.html.twig");
    }
}
