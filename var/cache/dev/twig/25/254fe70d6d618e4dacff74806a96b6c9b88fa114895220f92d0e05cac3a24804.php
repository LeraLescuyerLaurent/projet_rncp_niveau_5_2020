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

/* admin/pages/edit.html.twig */
class __TwigTemplate_0d13a4d6822aa1d617ac0adb3f51d3a6824011f04920cbb17327934d2a82eed7 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages/edit.html.twig"));

        $this->parent = $this->loadTemplate("administration.html.twig", "admin/pages/edit.html.twig", 1);
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

        echo "Pages | Edit";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row\">
    ";
        // line 5
        $this->loadTemplate("/element/_flash_messages.html.twig", "admin/pages/edit.html.twig", 5)->display($context);
        // line 6
        echo "    <section class=\"contentAdmin  col-15 col-m-15 col-l-15 col-xl-15 col-push-1 col-m-push-1 col-l-push-1 col-xl-push-1\">
        <h1>Modification d'une page</h1>
        <div class=\"row\">
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adminEditPage"]) || array_key_exists("adminEditPage", $context) ? $context["adminEditPage"] : (function () { throw new RuntimeError('Variable "adminEditPage" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["class" => "col-14 col-m-14 col-l-14 col-xl-14"]]);
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminEditPage"]) || array_key_exists("adminEditPage", $context) ? $context["adminEditPage"] : (function () { throw new RuntimeError('Variable "adminEditPage" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), 'row', ["attr" => ["placeholder" => "Titre de l'article", "class" => "col-14 col-m-14 col-l-14 col-xl-14"]]);
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminEditPage"]) || array_key_exists("adminEditPage", $context) ? $context["adminEditPage"] : (function () { throw new RuntimeError('Variable "adminEditPage" does not exist.', 11, $this->source); })()), "slug", [], "any", false, false, false, 11), 'row', ["attr" => ["placeholder" => "Slug de l'article", "class" => "col-14 col-m-14 col-l-14 col-xl-14"]]);
        echo "
            <div data-mdeditor>
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminEditPage"]) || array_key_exists("adminEditPage", $context) ? $context["adminEditPage"] : (function () { throw new RuntimeError('Variable "adminEditPage" does not exist.', 13, $this->source); })()), "content", [], "any", false, false, false, 13), 'row');
        echo "</div>
            <button class=\"btn_validation_fom_admin_post uppercase primaire btn\">envoyer</button> 
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adminEditPage"]) || array_key_exists("adminEditPage", $context) ? $context["adminEditPage"] : (function () { throw new RuntimeError('Variable "adminEditPage" does not exist.', 15, $this->source); })()), 'form_end');
        echo "
        </div>
    </section>  
</div>
<div id=\"modal\" class=\"modal modalNone\">
    <div id=\"closeModal\" class=\"close\" onclick = \"addClass()\">
        x
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "<script src=\"/dist/js/closeModal.js\"></script>
<script src=\"/dist/js/imageUne.js\"></script>
<script src=\"/dist/js/scriptImage.js\"></script>
    <script>

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 27,  137 => 26,  117 => 15,  112 => 13,  107 => 11,  103 => 10,  99 => 9,  94 => 6,  92 => 5,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"administration.html.twig\" %}
{% block title %}Pages | Edit{% endblock %}
{% block body %}
<div class=\"row\">
    {% include \"/element/_flash_messages.html.twig\" %}
    <section class=\"contentAdmin  col-15 col-m-15 col-l-15 col-xl-15 col-push-1 col-m-push-1 col-l-push-1 col-xl-push-1\">
        <h1>Modification d'une page</h1>
        <div class=\"row\">
            {{ form_start(adminEditPage,{ 'attr' :{'class': 'col-14 col-m-14 col-l-14 col-xl-14'}}) }}
            {{ form_row(adminEditPage.title,{ 'attr' :{'placeholder': \"Titre de l'article\",'class': 'col-14 col-m-14 col-l-14 col-xl-14'}})}}
            {{ form_row(adminEditPage.slug,{ 'attr' :{'placeholder': \"Slug de l'article\",'class': 'col-14 col-m-14 col-l-14 col-xl-14'}})}}
            <div data-mdeditor>
                {{ form_row(adminEditPage.content)}}</div>
            <button class=\"btn_validation_fom_admin_post uppercase primaire btn\">envoyer</button> 
            {{ form_end(adminEditPage) }}
        </div>
    </section>  
</div>
<div id=\"modal\" class=\"modal modalNone\">
    <div id=\"closeModal\" class=\"close\" onclick = \"addClass()\">
        x
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script src=\"/dist/js/closeModal.js\"></script>
<script src=\"/dist/js/imageUne.js\"></script>
<script src=\"/dist/js/scriptImage.js\"></script>
    <script>

    </script>
{% endblock %}
", "admin/pages/edit.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/admin/pages/edit.html.twig");
    }
}
