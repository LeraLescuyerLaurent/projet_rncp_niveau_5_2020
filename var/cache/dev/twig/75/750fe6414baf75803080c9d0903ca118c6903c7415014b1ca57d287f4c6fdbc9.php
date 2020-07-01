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

/* element/_header.html.twig */
class __TwigTemplate_d5d42667a092103e0c240ca970f16c346fd264c53f3ec4b5681685437c49a9ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/_header.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "<header>
    <div class=\"logo  \">
        <span class=\"img_logo\">
            <img src=\"/dist/images/logo.png\" alt=\"logo tips and news\">
        </span>
        <a href=\"/ \" class=\"text_no_decoration pLeft1\">
            <span class=\"text_tips  text_logo text32\">Tips</span>
            <span class=\"text_ressources text_logo text32\">&</span>
            <span class=\"text_news text_logo text32\">New's</span>
        </a>
    </div>
    <i class=\"fas fa-bars menu-toggle textWhite text30 mRight3\"></i>
    <nav>
        <ul class=\"nav\">
            <li class=\"lnav \">
                <a href=\"/ \">
                    <span class=\"textNav_init text18 oswald uppercase textHover_home verticalCenter\">Home</span>
                </a>
            </li>

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 24
            echo "            <li class=\"lnav \">
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste-articles-par-categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 25), "slug" => twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" >
                    <span class=\" textNav_init text18 oswald uppercase text_";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "_hover\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</span>
                </a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            <li>
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo " \" >
                    <span class=\"textNav_init text18 oswald uppercase textHover_home\">Contact</span>
                </a>
            </li>
            ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "            <li class=\"lnav\">
                <a href=\"#\" id=\"madmin\" >
                    <span class=\"textNav_init text18 oswald uppercase text_hover_admin  \"> <i class=\"fas fa-user textWhite pRight1\"></i>Laurent <i class=\"fas fa-chevron-down chevron textWhite pLeft1\"></i></span>
                </a>
                <ul class=\"navadmin\">
                    <li>
                        <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-post-index");
            echo "\">
                            <span class=\"textNav_init text18 oswald uppercase text_hover_admin\">
                                Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security-logout");
            echo "\">
                            <span class=\"textNav_init text18 oswald uppercase textHover_deconnect\">Déconnexion</span>
                        </a>
                    </li>
                </ul>
            </li>
            ";
        }
        // line 55
        echo "        </ul>
    </nav>
</header>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "element/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 55,  120 => 48,  111 => 42,  103 => 36,  101 => 35,  94 => 31,  91 => 30,  79 => 26,  75 => 25,  72 => 24,  68 => 23,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# liste-articles-par-categorie #}
<header>
    <div class=\"logo  \">
        <span class=\"img_logo\">
            <img src=\"/dist/images/logo.png\" alt=\"logo tips and news\">
        </span>
        <a href=\"/ \" class=\"text_no_decoration pLeft1\">
            <span class=\"text_tips  text_logo text32\">Tips</span>
            <span class=\"text_ressources text_logo text32\">&</span>
            <span class=\"text_news text_logo text32\">New's</span>
        </a>
    </div>
    <i class=\"fas fa-bars menu-toggle textWhite text30 mRight3\"></i>
    <nav>
        <ul class=\"nav\">
            <li class=\"lnav \">
                <a href=\"/ \">
                    <span class=\"textNav_init text18 oswald uppercase textHover_home verticalCenter\">Home</span>
                </a>
            </li>

            {% for cat  in category %}
            <li class=\"lnav \">
                <a href=\"{{ path('liste-articles-par-categorie',{'id': cat.id , 'slug': cat.slug}) }}\" >
                    <span class=\" textNav_init text18 oswald uppercase text_{{cat.name}}_hover\">{{cat.name}}</span>
                </a>
            </li>
            {% endfor %}
            <li>
                <a href=\"{{ path(\"contact\")}} \" >
                    <span class=\"textNav_init text18 oswald uppercase textHover_home\">Contact</span>
                </a>
            </li>
            {% if app.user %}
            <li class=\"lnav\">
                <a href=\"#\" id=\"madmin\" >
                    <span class=\"textNav_init text18 oswald uppercase text_hover_admin  \"> <i class=\"fas fa-user textWhite pRight1\"></i>Laurent <i class=\"fas fa-chevron-down chevron textWhite pLeft1\"></i></span>
                </a>
                <ul class=\"navadmin\">
                    <li>
                        <a href=\"{{ path('admin-post-index')}}\">
                            <span class=\"textNav_init text18 oswald uppercase text_hover_admin\">
                                Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('security-logout') }}\">
                            <span class=\"textNav_init text18 oswald uppercase textHover_deconnect\">Déconnexion</span>
                        </a>
                    </li>
                </ul>
            </li>
            {% endif %}
        </ul>
    </nav>
</header>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ", "element/_header.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/element/_header.html.twig");
    }
}
