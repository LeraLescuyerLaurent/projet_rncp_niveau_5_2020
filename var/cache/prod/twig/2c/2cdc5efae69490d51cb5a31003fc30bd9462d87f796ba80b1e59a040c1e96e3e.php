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
class __TwigTemplate_f0e596de909ca50848540e906cdacc7e63cd9dc1d38c3d846a205dfc5d5fe460 extends Template
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
        $this->parent = $this->loadTemplate("administration.html.twig", "admin/pages/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pages | Edit";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["adminEditPage"] ?? null), 'form_start', ["attr" => ["class" => "col-14 col-m-14 col-l-14 col-xl-14"]]);
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditPage"] ?? null), "title", [], "any", false, false, false, 10), 'row', ["attr" => ["placeholder" => "Titre de l'article", "class" => "col-14 col-m-14 col-l-14 col-xl-14"]]);
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditPage"] ?? null), "slug", [], "any", false, false, false, 11), 'row', ["attr" => ["placeholder" => "Slug de l'article", "class" => "col-14 col-m-14 col-l-14 col-xl-14"]]);
        echo "
            <div data-mdeditor>
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["adminEditPage"] ?? null), "content", [], "any", false, false, false, 13), 'row');
        echo "</div>
            <button class=\"btn_validation_fom_admin_post uppercase primaire btn\">envoyer</button> 
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["adminEditPage"] ?? null), 'form_end');
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
    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "<script src=\"/dist/js/closeModal.js\"></script>
<script src=\"/dist/js/imageUne.js\"></script>
<script src=\"/dist/js/scriptImage.js\"></script>
    <script>

    </script>
";
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
        return array (  105 => 27,  101 => 26,  87 => 15,  82 => 13,  77 => 11,  73 => 10,  69 => 9,  64 => 6,  62 => 5,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/pages/edit.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/admin/pages/edit.html.twig");
    }
}
