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

/* admin/posts/add.html.twig */
class __TwigTemplate_733c25ad1c4457fe309997b30118032dcda6612d0f089c3cf561d27121b3997d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/add.html.twig"));

        $this->parent = $this->loadTemplate("administration.html.twig", "admin/posts/add.html.twig", 1);
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

        echo "Posts | Add";
        
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
        $this->loadTemplate("/element/_flash_messages.html.twig", "admin/posts/add.html.twig", 5)->display($context);
        // line 6
        echo "    <div class=\"row\">
        <section class=\"contentAdmin  col-14 col-m-14 col-l-14 col-xl-14   col-push-1 col-m-push-1 col-l-push-1 col-xl-push-1\">
            <h1>ajout d'un article</h1>
            <div class=\"row\">
                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adminAddPost"]) || array_key_exists("adminAddPost", $context) ? $context["adminAddPost"] : (function () { throw new RuntimeError('Variable "adminAddPost" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "col-13 col-m-13 col-l-13 col-xl-13"]]);
        echo "
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminAddPost"]) || array_key_exists("adminAddPost", $context) ? $context["adminAddPost"] : (function () { throw new RuntimeError('Variable "adminAddPost" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), 'row', ["attr" => ["placeholder" => "Titre de l'article", "class" => "col-13 col-m-13 col-l-13 col-xl-13"]]);
        echo "
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminAddPost"]) || array_key_exists("adminAddPost", $context) ? $context["adminAddPost"] : (function () { throw new RuntimeError('Variable "adminAddPost" does not exist.', 12, $this->source); })()), "slug", [], "any", false, false, false, 12), 'row', ["attr" => ["placeholder" => "Slug de l'article", "class" => "col-13 col-m-13 col-l-13 col-xl-13"]]);
        echo "
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminAddPost"]) || array_key_exists("adminAddPost", $context) ? $context["adminAddPost"] : (function () { throw new RuntimeError('Variable "adminAddPost" does not exist.', 13, $this->source); })()), "Category", [], "any", false, false, false, 13), 'row');
        echo "
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminAddPost"]) || array_key_exists("adminAddPost", $context) ? $context["adminAddPost"] : (function () { throw new RuntimeError('Variable "adminAddPost" does not exist.', 14, $this->source); })()), "subCategory", [], "any", false, false, false, 14), 'row');
        echo "
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminAddPost"]) || array_key_exists("adminAddPost", $context) ? $context["adminAddPost"] : (function () { throw new RuntimeError('Variable "adminAddPost" does not exist.', 15, $this->source); })()), "hat", [], "any", false, false, false, 15), 'row', ["attr" => ["placeholder" => "Chapeau de l'article", "class" => "col-13 col-m-13 col-l-13 col-xl-13 height-4 height-m-2 height-l-1"], "label" => "Chapeau (max 250 Charactères)"]);
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminAddPost"]) || array_key_exists("adminAddPost", $context) ? $context["adminAddPost"] : (function () { throw new RuntimeError('Variable "adminAddPost" does not exist.', 16, $this->source); })()), "imagesUne", [], "any", false, false, false, 16), 'row', ["attr" => ["placeholder" => "click pour ajouter une image", "class" => "col-13 col-m-13 col-l-13 col-xl-13"]]);
        echo "
                    <div data-mdeditor>
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminAddPost"]) || array_key_exists("adminAddPost", $context) ? $context["adminAddPost"] : (function () { throw new RuntimeError('Variable "adminAddPost" does not exist.', 18, $this->source); })()), "content", [], "any", false, false, false, 18), 'row');
        echo "</div>
                    <div class=\"btn_radio_form_admin\">
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminAddPost"]) || array_key_exists("adminAddPost", $context) ? $context["adminAddPost"] : (function () { throw new RuntimeError('Variable "adminAddPost" does not exist.', 20, $this->source); })()), "online", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "groupeform"]]);
        echo "
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adminAddPost"]) || array_key_exists("adminAddPost", $context) ? $context["adminAddPost"] : (function () { throw new RuntimeError('Variable "adminAddPost" does not exist.', 21, $this->source); })()), "slider", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "groupeform"]]);
        echo "
                    </div>

                    <button class=\"btn_validation_fom_admin_post uppercase primaire btn\">envoyer</button> 
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adminAddPost"]) || array_key_exists("adminAddPost", $context) ? $context["adminAddPost"] : (function () { throw new RuntimeError('Variable "adminAddPost" does not exist.', 25, $this->source); })()), 'form_end');
        echo "
            </div>
        </section>  
    </div>    
    <input type=\"hidden\" name=\"\" id=\"patch_image\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-gestion-media", ["id" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 29, $this->source); })())]), "html", null, true);
        echo "\" >
<div id=\"modal\" class=\"modal modalNone\">
    <div id=\"closeModal\" class=\"close\" onclick = \"addClass()\">
        x
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "    <script src=\"/dist/js/eventFormSubCategorie.js\"></script>
    <script src=\"/dist/js/closeModal.js\"></script>
    <script src=\"/dist/js/imageUne.js\"></script>
    <script src=\"/dist/js/scriptImage.js\"></script>
    <script>
        let image = '";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-gestion-media", ["id" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 42, $this->source); })())]), "html", null, true);
        echo "';
    </script>
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/posts/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 42,  176 => 37,  166 => 36,  149 => 29,  142 => 25,  135 => 21,  131 => 20,  126 => 18,  121 => 16,  117 => 15,  113 => 14,  109 => 13,  105 => 12,  101 => 11,  97 => 10,  91 => 6,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"administration.html.twig\" %}
{% block title %}Posts | Add{% endblock %}

{% block body %}
{% include \"/element/_flash_messages.html.twig\" %}
    <div class=\"row\">
        <section class=\"contentAdmin  col-14 col-m-14 col-l-14 col-xl-14   col-push-1 col-m-push-1 col-l-push-1 col-xl-push-1\">
            <h1>ajout d'un article</h1>
            <div class=\"row\">
                {{ form_start(adminAddPost,{ 'attr' :{'class': 'col-13 col-m-13 col-l-13 col-xl-13'}}) }}
                    {{ form_row(adminAddPost.title,{ 'attr' :{'placeholder': \"Titre de l'article\",'class': 'col-13 col-m-13 col-l-13 col-xl-13'}})}}
                    {{ form_row(adminAddPost.slug,{ 'attr' :{'placeholder': \"Slug de l'article\",'class': 'col-13 col-m-13 col-l-13 col-xl-13'}})}}
                    {{ form_row(adminAddPost.Category)}}
                    {{ form_row(adminAddPost.subCategory)}}
                    {{ form_row(adminAddPost.hat,{ 'attr' :{'placeholder': \"Chapeau de l'article\",'class': 'col-13 col-m-13 col-l-13 col-xl-13 height-4 height-m-2 height-l-1'},'label':'Chapeau (max 250 Charactères)'})}}
                    {{ form_row(adminAddPost.imagesUne,{ 'attr' :{'placeholder': \"click pour ajouter une image\",'class': 'col-13 col-m-13 col-l-13 col-xl-13'}})}}
                    <div data-mdeditor>
                        {{ form_row(adminAddPost.content)}}</div>
                    <div class=\"btn_radio_form_admin\">
                        {{ form_row(adminAddPost.online,{ 'attr' :{'class':'groupeform'}})}}
                        {{ form_row(adminAddPost.slider,{ 'attr' :{'class':'groupeform'}})}}
                    </div>

                    <button class=\"btn_validation_fom_admin_post uppercase primaire btn\">envoyer</button> 
                {{ form_end(adminAddPost) }}
            </div>
        </section>  
    </div>    
    <input type=\"hidden\" name=\"\" id=\"patch_image\" value=\"{{ path(\"admin-gestion-media\", {id : token}) }}\" >
<div id=\"modal\" class=\"modal modalNone\">
    <div id=\"closeModal\" class=\"close\" onclick = \"addClass()\">
        x
    </div>
</div>
{% endblock %}
{% block javascripts %}
    <script src=\"/dist/js/eventFormSubCategorie.js\"></script>
    <script src=\"/dist/js/closeModal.js\"></script>
    <script src=\"/dist/js/imageUne.js\"></script>
    <script src=\"/dist/js/scriptImage.js\"></script>
    <script>
        let image = '{{ path(\"admin-gestion-media\", {id : token}) }}';
    </script>
 
{% endblock %}
", "admin/posts/add.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/admin/posts/add.html.twig");
    }
}
