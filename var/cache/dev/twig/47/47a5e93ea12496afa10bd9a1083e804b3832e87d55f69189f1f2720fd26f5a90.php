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

/* /posts/postShow.html.twig */
class __TwigTemplate_f926ccca6035af40e4c245b9d6cd1ce64f53f01f6ae740ec3dac26179411fc14 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/posts/postShow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/posts/postShow.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "/posts/postShow.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TipsAndNews ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheetsPage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheetsPage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheetsPage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<article>
    <div class=\"row\">
        <div class=\"col-14 col-m-14 col-l-14 col-xl-14 col-push-1 col-l-push-1 col-m-push-1 col-l-push-1 col-xl-push-1\">
            <div class=\"image_une_show\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PostShow"]) || array_key_exists("PostShow", $context) ? $context["PostShow"] : (function () { throw new RuntimeError('Variable "PostShow" does not exist.', 12, $this->source); })()), "imagesUne", [], "any", false, false, false, 12), "html", null, true);
        echo " \" alt=\"ma supert image\">
            </div>
        </div>
    </div>
<div class=\"row\">
    <section class=\"container col-14  col-m-14 col-l-14 col-xl-14 col-l-push-1 col-m-push-1 col-push-1\">
        <main>
            <section class=\" principal col-14 col-m-14 col-l-10 col-xl-9\">
                <div class=\"row\">
                    <article class=\"show  col-14 col-m-14 col-l-10 col-xl-9\">
                        <h1  class=\"uppercase\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PostShow"]) || array_key_exists("PostShow", $context) ? $context["PostShow"] : (function () { throw new RuntimeError('Variable "PostShow" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</h1>
                        <div class=\"info_show_article\">
                            ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PostShow"]) || array_key_exists("PostShow", $context) ? $context["PostShow"] : (function () { throw new RuntimeError('Variable "PostShow" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24), "d/m/Y "), "html", null, true);
        echo " Catégorie: <span class=\"text_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["PostShow"]) || array_key_exists("PostShow", $context) ? $context["PostShow"] : (function () { throw new RuntimeError('Variable "PostShow" does not exist.', 24, $this->source); })()), "subCategory", [], "any", false, false, false, 24), "categories", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["PostShow"]) || array_key_exists("PostShow", $context) ? $context["PostShow"] : (function () { throw new RuntimeError('Variable "PostShow" does not exist.', 24, $this->source); })()), "subCategory", [], "any", false, false, false, 24), "categories", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</span> 
                                ";
        // line 25
        if (0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PostShow"]) || array_key_exists("PostShow", $context) ? $context["PostShow"] : (function () { throw new RuntimeError('Variable "PostShow" does not exist.', 25, $this->source); })()), "comments", [], "any", false, false, false, 25)), 1)) {
            // line 26
            echo "                                    (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PostShow"]) || array_key_exists("PostShow", $context) ? $context["PostShow"] : (function () { throw new RuntimeError('Variable "PostShow" does not exist.', 26, $this->source); })()), "comments", [], "any", false, false, false, 26)), "html", null, true);
            echo " Commentaire)
                                ";
        } elseif (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["PostShow"]) || array_key_exists("PostShow", $context) ? $context["PostShow"] : (function () { throw new RuntimeError('Variable "PostShow" does not exist.', 27, $this->source); })()), "comments", [], "any", false, false, false, 27)), 1)) {
            // line 28
            echo "                                    (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["PostShow"]) || array_key_exists("PostShow", $context) ? $context["PostShow"] : (function () { throw new RuntimeError('Variable "PostShow" does not exist.', 28, $this->source); })()), "comments", [], "any", false, false, false, 28)), "html", null, true);
            echo " Commentaires)
                                ";
        }
        // line 30
        echo "                        </div>
                        <div class=\"sharethis-inline-reaction-buttons\"></div>
                        <div class=\"hat\">
                            <p> ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, (isset($context["PostShow"]) || array_key_exists("PostShow", $context) ? $context["PostShow"] : (function () { throw new RuntimeError('Variable "PostShow" does not exist.', 33, $this->source); })()), "hat", [], "any", false, false, false, 33);
        echo "</p>
                        </div>
                        ";
        // line 35
        echo $this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, (isset($context["PostShow"]) || array_key_exists("PostShow", $context) ? $context["PostShow"] : (function () { throw new RuntimeError('Variable "PostShow" does not exist.', 35, $this->source); })()), "content", [], "any", false, false, false, 35));
        echo "
                    </article>
                   
                    <aside class=\"comments col-14 col-m-12 col-l-10 col-xl-12\">
                        <div class=\"row\">
                            <h2 class=\"uppercase\">Ajouter un commentaires</h2>
                            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 41, $this->source); })()), 'form_start', ["attr" => ["class" => "col-14 col-m-12 col-l-10 col-xl-8"]]);
        echo "
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 42, $this->source); })()), "pseudo", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "col-14 col-m-14 col-l-11 col-xl-8 ", "id" => "pseudo", "name" => "pseudo"], "value" => ""]);
        echo "
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'row', ["attr" => ["class" => "col-14 col-m-14 col-l-11 col-xl-8 ", "id" => "email", "name" => "email"], "value" => ""]);
        echo "
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 44, $this->source); })()), "comment", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "col-14 col-m-13 col-l-9 col-xl-8 height-xl-3 height-3 height-m-2 height-l-2", "id" => "comment", "name" => "comment"], "value" => ""]);
        echo "
                            </div>
                            <button class=\"uppercase primaire btn\" aria-label=\"Poster Commentaire\">Poster</button>
                            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
                            
                    </aside>
                    <aside class=\"comments_list col-14 col-m-14 col-l-10 col-xl-8\">
                        <h2 class=\"uppercase\">Liste des commentaires</h2>
                            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 53
            echo "                        <div class=\"comment\">
                        <h3>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "pseudo", [], "any", false, false, false, 54), "html", null, true);
            echo "</h3>
                        <div class=\"info_show_comments\">
                            ";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 56), "d/m/Y à h:i"), "html", null, true);
            echo "
                        </div>
                        <p>";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 58);
            echo "</p></div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </aside>
                </div>
            </section>
        </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_sidebare($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebare"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebare"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/posts/postShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 65,  225 => 60,  217 => 58,  212 => 56,  207 => 54,  204 => 53,  200 => 52,  192 => 47,  186 => 44,  182 => 43,  178 => 42,  174 => 41,  165 => 35,  160 => 33,  155 => 30,  149 => 28,  147 => 27,  142 => 26,  140 => 25,  132 => 24,  127 => 22,  114 => 12,  108 => 8,  98 => 7,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}TipsAndNews {% endblock %}
{% block stylesheetsPage %}
{% endblock %}

{% block body %}
<article>
    <div class=\"row\">
        <div class=\"col-14 col-m-14 col-l-14 col-xl-14 col-push-1 col-l-push-1 col-m-push-1 col-l-push-1 col-xl-push-1\">
            <div class=\"image_une_show\">
                <img src=\"{{ PostShow.imagesUne }} \" alt=\"ma supert image\">
            </div>
        </div>
    </div>
<div class=\"row\">
    <section class=\"container col-14  col-m-14 col-l-14 col-xl-14 col-l-push-1 col-m-push-1 col-push-1\">
        <main>
            <section class=\" principal col-14 col-m-14 col-l-10 col-xl-9\">
                <div class=\"row\">
                    <article class=\"show  col-14 col-m-14 col-l-10 col-xl-9\">
                        <h1  class=\"uppercase\">{{ PostShow.title }}</h1>
                        <div class=\"info_show_article\">
                            {{ PostShow.createdAt |  date(\"d/m/Y \") }} Catégorie: <span class=\"text_{{ PostShow.subCategory.categories.name }}\">{{ PostShow.subCategory.categories.name }}</span> 
                                {% if  PostShow.comments | length ==1  %}
                                    ({{ PostShow.comments | length }} Commentaire)
                                {% elseif  PostShow.comments | length > 1  %}
                                    ({{ PostShow.comments | length }} Commentaires)
                                {% endif %}
                        </div>
                        <div class=\"sharethis-inline-reaction-buttons\"></div>
                        <div class=\"hat\">
                            <p> {{ PostShow.hat | raw}}</p>
                        </div>
                        {{ PostShow.content | markdown_to_html}}
                    </article>
                   
                    <aside class=\"comments col-14 col-m-12 col-l-10 col-xl-12\">
                        <div class=\"row\">
                            <h2 class=\"uppercase\">Ajouter un commentaires</h2>
                            {{ form_start(commentForm,{ 'attr' :{'class': \"col-14 col-m-12 col-l-10 col-xl-8\"}}) }}
                                {{ form_row(commentForm.pseudo,{ 'attr' :{'class': \"col-14 col-m-14 col-l-11 col-xl-8 \", \"id\":\"pseudo\",\"name\":\"pseudo\"},'value': ''})}}
                                {{ form_row(commentForm.email,{ 'attr' :{'class': \"col-14 col-m-14 col-l-11 col-xl-8 \", \"id\":\"email\",\"name\":\"email\"},'value': ''})}}
                                {{ form_row(commentForm.comment,{ 'attr' :{'class': \"col-14 col-m-13 col-l-9 col-xl-8 height-xl-3 height-3 height-m-2 height-l-2\", \"id\":\"comment\",\"name\":\"comment\"},'value': ''})}}
                            </div>
                            <button class=\"uppercase primaire btn\" aria-label=\"Poster Commentaire\">Poster</button>
                            {{ form_end(commentForm) }}
                            
                    </aside>
                    <aside class=\"comments_list col-14 col-m-14 col-l-10 col-xl-8\">
                        <h2 class=\"uppercase\">Liste des commentaires</h2>
                            {% for comment in commentaires %}
                        <div class=\"comment\">
                        <h3>{{comment.pseudo}}</h3>
                        <div class=\"info_show_comments\">
                            {{comment.createdAt | date ('d/m/Y à h:i')}}
                        </div>
                        <p>{{comment.comment | raw}}</p></div>
                        {% endfor %}
                    </aside>
                </div>
            </section>
        </main>
{% endblock %}
{% block sidebare %}{% endblock %}", "/posts/postShow.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/posts/postShow.html.twig");
    }
}
