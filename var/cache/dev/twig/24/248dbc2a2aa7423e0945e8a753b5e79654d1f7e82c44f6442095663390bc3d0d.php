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

/* /element/_populaire_posts.html.twig */
class __TwigTemplate_03b344753995626cb263eefc15fcbde186e77bf6b08a8978efc33e241c5586c8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/element/_populaire_posts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/element/_populaire_posts.html.twig"));

        // line 1
        echo "<aside class=\"populaires_posts col-14 col-l-4 col-xl-4\">
    <h6 class=\"uppercase bold\">Articles populaires</h6>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "        <article>
            <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-article", ["categorie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "subCategory", [], "any", false, false, false, 5), "categories", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 5), "slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 5)]), "html", null, true);
            echo " \">
                <div class=\"post_aside col-7 col-l-4 col-xl-5\">
                    <div class=\"image_post_sidebare \">
                        <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "imagesUne", [], "any", false, false, false, 8), "html", null, true);
            echo "\" alt=\"\" class=\" col-2 height-2 col-l-1 height-l-1 col-xl-1 height-xl-1 col-xl-1 height-xl-1\">
                    </div>
                    <div class=\"info_post_sidebare col-5  col-l-3 col-xl-4\">
                        <h6 class=\"text_red\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 11), "html", null, true);
            echo "</h6>
                        <div class=\"info_post\">
                            ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 13), "d/m/Y", "Europe/Paris"), "html", null, true);
            echo " <br><span class=\"text_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "subCategory", [], "any", false, false, false, 13), "categories", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "subCategory", [], "any", false, false, false, 13), "categories", [], "any", false, false, false, 13), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                </div>
            </a>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  
</aside>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/element/_populaire_posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  71 => 13,  66 => 11,  60 => 8,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"populaires_posts col-14 col-l-4 col-xl-4\">
    <h6 class=\"uppercase bold\">Articles populaires</h6>
    {% for post in posts %}
        <article>
            <a href=\"{{ path('show-article',{'categorie':  post.subCategory.categories.name, 'id': post.id, 'slug': post.slug })}} \">
                <div class=\"post_aside col-7 col-l-4 col-xl-5\">
                    <div class=\"image_post_sidebare \">
                        <img src=\"{{ post.imagesUne }}\" alt=\"\" class=\" col-2 height-2 col-l-1 height-l-1 col-xl-1 height-xl-1 col-xl-1 height-xl-1\">
                    </div>
                    <div class=\"info_post_sidebare col-5  col-l-3 col-xl-4\">
                        <h6 class=\"text_red\">{{ post.title }}</h6>
                        <div class=\"info_post\">
                            {{ post.createdAt | date(\"d/m/Y\", \"Europe/Paris\")  }} <br><span class=\"text_{{ post.subCategory.categories }}\">{{ post.subCategory.categories}}</span>
                        </div>
                    </div>
                </div>
            </a>
        </article>
    {% endfor %}
  
</aside>
", "/element/_populaire_posts.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/element/_populaire_posts.html.twig");
    }
}
