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

/* /element/_countPostsByCategorie.html.twig */
class __TwigTemplate_dca4c012b5ef53ebed77a057b56a05abb0feb698fa03e9ff5ffb3b5bb938fdcd extends Template
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
        // line 1
        echo " <aside class=\"categorie_sidebare  col-14 col-m-14 col-l-4 col-xl-4\">
    <h6 class=\"uppercase bold\">catégories</h6>
    <div class=\"row\">
        <div class=\"categorie_list col-14 col-l-4 col-xl-4\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "            <div class=\"categorie col-14 col-l-4 col-xl-4\">
                    <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste-articles-par-categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 7), "slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 7)]), "html", null, true);
            echo " \" >
                        <span class=\"categorie_name col-12 col-l-3 col-xl-3 uppercase text18 text_";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</span>
                        <span class=\"categorie_count col-1 col-l-1 col-xl-1 bgc-";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo " text18 textWhite \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "total", [], "any", false, false, false, 9), "html", null, true);
            echo " </span>
                    </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </div> 
        </div>
</aside>";
    }

    public function getTemplateName()
    {
        return "/element/_countPostsByCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  60 => 9,  54 => 8,  50 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/element/_countPostsByCategorie.html.twig", "/home/lera/Bureau/projet_rncp_niveau_5/templates/element/_countPostsByCategorie.html.twig");
    }
}
