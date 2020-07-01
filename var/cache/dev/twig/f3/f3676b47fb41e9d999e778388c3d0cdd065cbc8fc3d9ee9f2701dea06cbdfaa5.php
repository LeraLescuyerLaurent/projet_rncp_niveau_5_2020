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

/* admin/elements/_paginator.html.twig */
class __TwigTemplate_d357dee8b8d37692bc4d1efe012de5edeea2cfc4e8a280677991bd93165370a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/elements/_paginator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/elements/_paginator.html.twig"));

        // line 1
        if (1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 1, $this->source); })()), "nbPages", [], "any", false, false, false, 1), 0)) {
            // line 2
            echo "<ul class=\"pagination\">
    ";
            // line 3
            if (1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 3, $this->source); })()), "page", [], "any", false, false, false, 3), 1)) {
                // line 4
                echo "        <li>
            <a href=\"";
                // line 5
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 5, $this->source); })()), "nomRoute", [], "any", false, false, false, 5), ["page" => 1]);
                echo "\">
                <<
            </a>
        </li>
        <li>
            <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 10, $this->source); })()), "nomRoute", [], "any", false, false, false, 10), ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 10, $this->source); })()), "page", [], "any", false, false, false, 10) - 1)]), "html", null, true);
                echo "\">
                <
            </a>
        </li>
    ";
            }
            // line 15
            echo "    ";
            // line 16
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()), "page", [], "any", false, false, false, 16) - 4), 1), min((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()), "page", [], "any", false, false, false, 16) + 4), twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()), "nbPages", [], "any", false, false, false, 16))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 17
                echo "        <li ";
                if (0 === twig_compare($context["p"], twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 17, $this->source); })()), "page", [], "any", false, false, false, 17))) {
                    echo "class=\"active\"";
                }
                echo " >
            <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), "nomRoute", [], "any", false, false, false, 18), ["page" => $context["p"]]), "html", null, true);
                echo "\">
                ";
                // line 19
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
            </a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
            if (-1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 23, $this->source); })()), "page", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 23, $this->source); })()), "nbPages", [], "any", false, false, false, 23))) {
                // line 24
                echo "        <li>
            <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 25, $this->source); })()), "nomRoute", [], "any", false, false, false, 25), ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 25, $this->source); })()), "page", [], "any", false, false, false, 25) + 1)]), "html", null, true);
                echo "\">
                >
            </a>
        </li>
        <li>
            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 30, $this->source); })()), "nomRoute", [], "any", false, false, false, 30), ["page" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 30, $this->source); })()), "nbPages", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\">
                >>
            </a>
        </li>
    ";
            }
            // line 35
            echo "</ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/elements/_paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  111 => 30,  103 => 25,  100 => 24,  97 => 23,  87 => 19,  83 => 18,  76 => 17,  71 => 16,  69 => 15,  61 => 10,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pagination.nbPages > 0 %}
<ul class=\"pagination\">
    {% if pagination.page > 1 %}
        <li>
            <a href=\"{{ path(pagination.nomRoute,{'page': 1}) }}\">
                <<
            </a>
        </li>
        <li>
            <a href=\"{{  path(pagination.nomRoute,{'page':  pagination.page-1}) }}\">
                <
            </a>
        </li>
    {% endif %}
    {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}
    {% for p in range(max(pagination.page-4, 1), min(pagination.page+4, pagination.nbPages)) %}
        <li {% if p == pagination.page %}class=\"active\"{% endif %} >
            <a href=\"{{ path(pagination.nomRoute,{'page': p}) }}\">
                {{ p }}
            </a>
        </li>
    {% endfor %}
    {% if pagination.page < pagination.nbPages %}
        <li>
            <a href=\"{{  path(pagination.nomRoute,{'page':pagination.page +1}) }}\">
                >
            </a>
        </li>
        <li>
            <a href=\"{{  path(pagination.nomRoute,{ 'page':pagination.nbPages}) }}\">
                >>
            </a>
        </li>
    {% endif %}
</ul>
{% endif %}", "admin/elements/_paginator.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/admin/elements/_paginator.html.twig");
    }
}
