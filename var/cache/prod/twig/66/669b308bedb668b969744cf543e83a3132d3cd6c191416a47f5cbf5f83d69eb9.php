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

/* /element/_slideShow.html.twig */
class __TwigTemplate_4fc8bfdbd511cf8702d75461fdf65ee3a76d9d59fa4a8b0103523394b963535c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/element/_slideShow.html.twig"));

        // line 2
        echo "<div class=\"base\">
    <div class=\"row\">
        <section class=\" slider  col-16 col-m-16 col-l-14 col-xl-14 col-xl-push-1 col-l-push-1\">
            <section class=\"slideshow-container \">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) || array_key_exists("slides", $context) ? $context["slides"] : (function () { throw new RuntimeError('Variable "slides" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 7
            echo "                    <article id=\"slideshow\" class=\"slides fade\">
                        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-article", ["categorie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "subCategory", [], "any", false, false, false, 8), "categories", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "id" => twig_get_attribute($this->env, $this->source, $context["slide"], "id", [], "any", false, false, false, 8), "slug" => twig_get_attribute($this->env, $this->source, $context["slide"], "slug", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\">
                            <div class=\"image-carroussel \">
                                <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "imagesUne", [], "any", false, false, false, 10), "html", null, true);
            echo "\" alt=\"ma supert image\">
                            </div>
                            <div class=\"content_carroussel col-l-push-2 col-m-push-1 col-push-1\">
                                <div class=\"row\">
                                    <div class=\"categorie_carroussel  roboto text24  col-l-3 col-m-7 col-7 bgc_";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "subCategory", [], "any", false, false, false, 14), "categories", [], "any", false, false, false, 14), "html", null, true);
            echo "_light\">
                                        <h2 class=\"mTop3 textWhite\">Catégorie:";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "subCategory", [], "any", false, false, false, 15), "categories", [], "any", false, false, false, 15), "html", null, true);
            echo "</h2>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"categorie_content textWhite col-xl-5 col-l-7 col-m-11 col-14\">
                                        <h1 class=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "subCategory", [], "any", false, false, false, 20), "categories", [], "any", false, false, false, 20), "html", null, true);
            echo "\">  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</h1>
                                        <p class=\"p\">
                                            ";
            // line 22
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "hat", [], "any", false, false, false, 22), 0, 100), "html", null, true);
            echo "
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </section>
        </section>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/element/_slideShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  84 => 22,  77 => 20,  69 => 15,  65 => 14,  58 => 10,  53 => 8,  50 => 7,  46 => 6,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# -slideShow.html.twig #}
<div class=\"base\">
    <div class=\"row\">
        <section class=\" slider  col-16 col-m-16 col-l-14 col-xl-14 col-xl-push-1 col-l-push-1\">
            <section class=\"slideshow-container \">
                {% for slide in slides %}
                    <article id=\"slideshow\" class=\"slides fade\">
                        <a href=\"{{ path('show-article',{'categorie':  slide.subCategory.categories.name, 'id': slide.id, 'slug': slide.slug })}}\">
                            <div class=\"image-carroussel \">
                                <img src=\"{{ slide.imagesUne }}\" alt=\"ma supert image\">
                            </div>
                            <div class=\"content_carroussel col-l-push-2 col-m-push-1 col-push-1\">
                                <div class=\"row\">
                                    <div class=\"categorie_carroussel  roboto text24  col-l-3 col-m-7 col-7 bgc_{{ slide.subCategory.categories }}_light\">
                                        <h2 class=\"mTop3 textWhite\">Catégorie:{{ slide.subCategory.categories }}</h2>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"categorie_content textWhite col-xl-5 col-l-7 col-m-11 col-14\">
                                        <h1 class=\"{{ slide.subCategory.categories }}\">  {{ slide.title }}</h1>
                                        <p class=\"p\">
                                            {{ slide.hat | slice(0, 100)}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                {% endfor %}
            </section>
        </section>
    </div>
</div>
", "/element/_slideShow.html.twig", "/home/lera/Bureau/projet_rncp_niveau_5/templates/element/_slideShow.html.twig");
    }
}
