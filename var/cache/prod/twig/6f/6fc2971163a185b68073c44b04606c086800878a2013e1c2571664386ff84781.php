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
class __TwigTemplate_db4693e97589ea30522e987c87b4f32d6652b30210a180c5f4331f80b6fe1201 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/element/_countPostsByCategorie.html.twig"));

        // line 1
        echo " <aside class=\"categorie_sidebare  col-14 col-m-14 col-l-4 col-xl-4\">
    <h6 class=\"uppercase bold\">catégories</h6>
    <div class=\"row\">
        <div class=\"categorie_list col-14 col-l-4 col-xl-4\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 5, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  75 => 13,  63 => 9,  57 => 8,  53 => 7,  50 => 6,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <aside class=\"categorie_sidebare  col-14 col-m-14 col-l-4 col-xl-4\">
    <h6 class=\"uppercase bold\">catégories</h6>
    <div class=\"row\">
        <div class=\"categorie_list col-14 col-l-4 col-xl-4\">
            {% for post in posts  %}
            <div class=\"categorie col-14 col-l-4 col-xl-4\">
                    <a href=\"{{ path('liste-articles-par-categorie',{ 'id': post.id, 'slug': post.slug })}} \" >
                        <span class=\"categorie_name col-12 col-l-3 col-xl-3 uppercase text18 text_{{ post.name }}\">{{ post.name }}</span>
                        <span class=\"categorie_count col-1 col-l-1 col-xl-1 bgc-{{ post.name }} text18 textWhite \">{{ post.total }} </span>
                    </a>
                </div>
                {% endfor %}
            </div> 
        </div>
</aside>", "/element/_countPostsByCategorie.html.twig", "/home/lera/Bureau/projet_rncp_niveau_5/templates/element/_countPostsByCategorie.html.twig");
    }
}
