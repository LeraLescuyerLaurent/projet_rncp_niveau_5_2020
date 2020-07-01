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

/* admin/categories/add.html.twig */
class __TwigTemplate_b63bb3035af38209867e9ca9750faaf272e49368d15a4b816adadd1078f6cd52 extends Template
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
        return "administration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/add.html.twig"));

        $this->parent = $this->loadTemplate("administration.html.twig", "admin/categories/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Categories | Add";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        <div class=\"row\">
            <section class=\"contentAdmin  col-15 col-m-15 col-l-15 col-xl-15   col-push-1 col-m-push-1 col-l-push-1 col-xl-push-1\">
                ";
        // line 7
        $this->loadTemplate("/element/_flash_messages.html.twig", "admin/categories/add.html.twig", 7)->display($context);
        // line 8
        echo "                <h1>Ajouter une catégorie</h1>
                <div class=\"row\">
                    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCat"]) || array_key_exists("formCat", $context) ? $context["formCat"] : (function () { throw new RuntimeError('Variable "formCat" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "col-13 col-m-13 col-l-10 col-xl-10"]]);
        echo "
                        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCat"]) || array_key_exists("formCat", $context) ? $context["formCat"] : (function () { throw new RuntimeError('Variable "formCat" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), 'row', ["attr" => ["placeholder" => "Titre de la catégorie", "class" => "col-13 col-m-13 col-l-10 col-xl-10"]]);
        echo "
                        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCat"]) || array_key_exists("formCat", $context) ? $context["formCat"] : (function () { throw new RuntimeError('Variable "formCat" does not exist.', 12, $this->source); })()), "slug", [], "any", false, false, false, 12), 'row', ["attr" => ["placeholder" => "slug de la catégorie", "class" => "col-13 col-m-13 col-l-10 col-xl-10 "]]);
        echo "
                        <button class=\"uppercase primaire btn\">";
        // line 13
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 13, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
                    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCat"]) || array_key_exists("formCat", $context) ? $context["formCat"] : (function () { throw new RuntimeError('Variable "formCat" does not exist.', 14, $this->source); })()), 'form_end');
        echo "
                </div>
            </section>  
        </div> 
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/categories/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 14,  110 => 13,  106 => 12,  102 => 11,  98 => 10,  94 => 8,  92 => 7,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"administration.html.twig\" %}
{% block title %}Categories | Add{% endblock %}

    {% block body %}
        <div class=\"row\">
            <section class=\"contentAdmin  col-15 col-m-15 col-l-15 col-xl-15   col-push-1 col-m-push-1 col-l-push-1 col-xl-push-1\">
                {% include \"/element/_flash_messages.html.twig\" %}
                <h1>Ajouter une catégorie</h1>
                <div class=\"row\">
                    {{ form_start(formCat,{ 'attr' :{'class': 'col-13 col-m-13 col-l-10 col-xl-10'}}) }}
                        {{ form_row(formCat.name,{ 'attr' :{'placeholder': \"Titre de la catégorie\",'class': 'col-13 col-m-13 col-l-10 col-xl-10'}} ) }}
                        {{ form_row(formCat.slug,{ 'attr' :{'placeholder': \"slug de la catégorie\",'class': 'col-13 col-m-13 col-l-10 col-xl-10 '}} ) }}
                        <button class=\"uppercase primaire btn\">{{ button_label|default('Modifier') }}</button>
                    {{ form_end(formCat) }}
                </div>
            </section>  
        </div> 
    {% endblock %}", "admin/categories/add.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/admin/categories/add.html.twig");
    }
}
