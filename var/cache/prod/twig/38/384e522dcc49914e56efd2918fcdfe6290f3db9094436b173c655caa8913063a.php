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
class __TwigTemplate_9fec7dd56baa1feb0783c9db94415590f2bdc432eda10e0ada27e817c27900a0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/posts/postShow.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "TipsAndNews ";
    }

    // line 4
    public function block_stylesheetsPage($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<article>
    <div class=\"row\">
        <div class=\"col-14 col-m-14 col-l-14 col-xl-14 col-push-1 col-l-push-1 col-m-push-1 col-l-push-1 col-xl-push-1\">
            <div class=\"image_une_show\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["PostShow"] ?? null), "imagesUne", [], "any", false, false, false, 12), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["PostShow"] ?? null), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</h1>
                        <div class=\"info_show_article\">
                            ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["PostShow"] ?? null), "createdAt", [], "any", false, false, false, 24), "d/m/Y "), "html", null, true);
        echo " Catégorie: <span class=\"text_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PostShow"] ?? null), "subCategory", [], "any", false, false, false, 24), "categories", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["PostShow"] ?? null), "subCategory", [], "any", false, false, false, 24), "categories", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</span> 
                                ";
        // line 25
        if (0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["PostShow"] ?? null), "comments", [], "any", false, false, false, 25)), 1)) {
            // line 26
            echo "                                    (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["PostShow"] ?? null), "comments", [], "any", false, false, false, 26)), "html", null, true);
            echo " Commentaire)
                                ";
        } elseif (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 27
($context["PostShow"] ?? null), "comments", [], "any", false, false, false, 27)), 1)) {
            // line 28
            echo "                                    (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["PostShow"] ?? null), "comments", [], "any", false, false, false, 28)), "html", null, true);
            echo " Commentaires)
                                ";
        }
        // line 30
        echo "                        </div>
                        <div class=\"sharethis-inline-reaction-buttons\"></div>
                        <div class=\"hat\">
                            <p> ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["PostShow"] ?? null), "hat", [], "any", false, false, false, 33);
        echo "</p>
                        </div>
                        ";
        // line 35
        echo $this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, ($context["PostShow"] ?? null), "content", [], "any", false, false, false, 35));
        echo "
                    </article>
                   
                    <aside class=\"comments col-14 col-m-12 col-l-10 col-xl-12\">
                        <div class=\"row\">
                            <h2 class=\"uppercase\">Ajouter un commentaires</h2>
                            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["commentForm"] ?? null), 'form_start', ["attr" => ["class" => "col-14 col-m-12 col-l-10 col-xl-8"]]);
        echo "
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["commentForm"] ?? null), "pseudo", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "col-14 col-m-14 col-l-11 col-xl-8 ", "id" => "pseudo", "name" => "pseudo"], "value" => ""]);
        echo "
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["commentForm"] ?? null), "email", [], "any", false, false, false, 43), 'row', ["attr" => ["class" => "col-14 col-m-14 col-l-11 col-xl-8 ", "id" => "email", "name" => "email"], "value" => ""]);
        echo "
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["commentForm"] ?? null), "comment", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "col-14 col-m-13 col-l-9 col-xl-8 height-xl-3 height-3 height-m-2 height-l-2", "id" => "comment", "name" => "comment"], "value" => ""]);
        echo "
                            </div>
                            <button class=\"uppercase primaire btn\" aria-label=\"Poster Commentaire\">Poster</button>
                            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["commentForm"] ?? null), 'form_end');
        echo "
                            
                    </aside>
                    <aside class=\"comments_list col-14 col-m-14 col-l-10 col-xl-8\">
                        <h2 class=\"uppercase\">Liste des commentaires</h2>
                            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentaires"] ?? null));
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
    }

    // line 65
    public function block_sidebare($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  191 => 65,  183 => 60,  175 => 58,  170 => 56,  165 => 54,  162 => 53,  158 => 52,  150 => 47,  144 => 44,  140 => 43,  136 => 42,  132 => 41,  123 => 35,  118 => 33,  113 => 30,  107 => 28,  105 => 27,  100 => 26,  98 => 25,  90 => 24,  85 => 22,  72 => 12,  66 => 8,  62 => 7,  56 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/posts/postShow.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/posts/postShow.html.twig");
    }
}
