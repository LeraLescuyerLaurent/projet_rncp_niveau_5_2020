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

/* /posts/index.html.twig */
class __TwigTemplate_bbf599cd407b6f5f34c358319119291b5d679a9091859898f5bcd1c84b7ce30a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheetsPage' => [$this, 'block_stylesheetsPage'],
            'body' => [$this, 'block_body'],
            'sidebare' => [$this, 'block_sidebare'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/posts/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/posts/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TipsAndNews | index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheetsPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheetsPage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PostsController::slideShow"));
        echo "
<div class=\"row\">
    <section class=\"container col-14  col-m-14 col-l-14 col-xl-14 col-l-push-1 col-m-push-1 col-push-1 col-xl-push-1\">
        <main>
            <div class=\" principal col-14 col-m-14 col-l-10 col-xl-9\">
                    <div class=\"row\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 15
            echo "                            <article class=\"card col-14 col-m-14 col-l-5 col-xl-3\">
                                <div class=\"image_card\">
                                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "imagesUne", [], "any", false, false, false, 17), "html", null, true);
            echo "\" alt=\"\">
                                </div>
                                <div class=\"content\">
                                    <h1>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</h1>
                                    <div class=\"info_article\">
                                        ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 22), "d/m/Y", "Europe/Paris"), "html", null, true);
            echo " 
                                        <span class=\"text_";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "subCategory", [], "any", false, false, false, 23), "categories", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "subCategory", [], "any", false, false, false, 23), "categories", [], "any", false, false, false, 23), "html", null, true);
            echo "</span> 
                                        ";
            // line 24
            if (0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 24)), 1)) {
                // line 25
                echo "                                            (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 25)), "html", null, true);
                echo " Commentaire)
                                        ";
            } elseif (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 26
$context["post"], "comments", [], "any", false, false, false, 26)), 1)) {
                // line 27
                echo "                                            (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 27)), "html", null, true);
                echo " Commentaires)
                                        ";
            }
            // line 29
            echo "                                    </div>
                                    <p>
                                        ";
            // line 31
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "hat", [], "any", false, false, false, 31), 0, 100), "html", null, true);
            echo " ...
                                    </p>
                                    <button>
                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-article", ["categorie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "subCategory", [], "any", false, false, false, 34), "categories", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 34), "slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 34)]), "html", null, true);
            echo " \" class=\"btn btn_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "subCategory", [], "any", false, false, false, 34), "categories", [], "any", false, false, false, 34), "html", null, true);
            echo " textWhite\">
                                            read more
                                        </a>
                                    </button>
                                </div>
                            </article>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </div>
            </div>
        </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_sidebare($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebare"));

        // line 46
        $this->loadTemplate("element/sidebare.html.twig", "/posts/index.html.twig", 46)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "        <script src=\" /dist/js/carroussel.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/posts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 49,  190 => 48,  183 => 46,  176 => 45,  166 => 41,  151 => 34,  145 => 31,  141 => 29,  135 => 27,  133 => 26,  128 => 25,  126 => 24,  120 => 23,  116 => 22,  111 => 20,  105 => 17,  101 => 15,  97 => 14,  88 => 8,  81 => 7,  69 => 4,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}TipsAndNews | index{% endblock %}
{% block stylesheetsPage %}
{% endblock %}

{% block body %}
{{ render(controller('App\\\\Controller\\\\PostsController::slideShow' )) }}
<div class=\"row\">
    <section class=\"container col-14  col-m-14 col-l-14 col-xl-14 col-l-push-1 col-m-push-1 col-push-1 col-xl-push-1\">
        <main>
            <div class=\" principal col-14 col-m-14 col-l-10 col-xl-9\">
                    <div class=\"row\">
                        {% for post in posts %}
                            <article class=\"card col-14 col-m-14 col-l-5 col-xl-3\">
                                <div class=\"image_card\">
                                    <img src=\"{{ post.imagesUne }}\" alt=\"\">
                                </div>
                                <div class=\"content\">
                                    <h1>{{ post.title }}</h1>
                                    <div class=\"info_article\">
                                        {{ post.createdAt | date(\"d/m/Y\", \"Europe/Paris\")  }} 
                                        <span class=\"text_{{ post.subCategory.categories }}\">{{ post.subCategory.categories}}</span> 
                                        {% if  post.comments | length ==1  %}
                                            ({{ post.comments | length }} Commentaire)
                                        {% elseif  post.comments | length > 1  %}
                                            ({{ post.comments | length }} Commentaires)
                                        {% endif %}
                                    </div>
                                    <p>
                                        {{ post.hat | slice(0, 100) }} ...
                                    </p>
                                    <button>
                                        <a href=\"{{ path('show-article',{'categorie':  post.subCategory.categories.name, 'id': post.id, 'slug': post.slug })}} \" class=\"btn btn_{{ post.subCategory.categories }} textWhite\">
                                            read more
                                        </a>
                                    </button>
                                </div>
                            </article>
                        {% endfor %}
                    </div>
            </div>
        </main>
{% endblock %}
{% block sidebare %}
{% include 'element/sidebare.html.twig' %}
{% endblock %}
{% block javascripts %}
        <script src=\" /dist/js/carroussel.js\"></script>
{% endblock %}", "/posts/index.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/posts/index.html.twig");
    }
}
