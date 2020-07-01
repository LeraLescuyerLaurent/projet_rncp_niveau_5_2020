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

/* admin/posts/index.html.twig */
class __TwigTemplate_58521f7bb36d8de662f883330561d4219c5ac2bc330146125562db853e941fac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/index.html.twig"));

        $this->parent = $this->loadTemplate("administration.html.twig", "admin/posts/index.html.twig", 1);
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

        echo "Posts | Liste";
        
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
        echo "    <section class=\"contentAdmin \">
      ";
        // line 5
        $this->loadTemplate("/element/_flash_messages.html.twig", "admin/posts/index.html.twig", 5)->display($context);
        // line 6
        echo "      <table>
        <caption>
          <h1>Liste des Articles</h1>
        </caption>
        <thead>
          <tr>
            <th>#</th>
            <th>Titre</th>
            <th>Catégorie</th>
            <th>Sous-Catégorie</th>
            <th>Date de création</th>
            <th>En ligne</th>
            <th>Slideshow</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["posts"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["posts"]) {
            // line 24
            echo "            <tr>
              <th>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posts"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo " </th>
              <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posts"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo " </td>
              <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["posts"], "subCategory", [], "any", false, false, false, 27), "categories", [], "any", false, false, false, 27), "html", null, true);
            echo " </td>
              <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posts"], "subCategory", [], "any", false, false, false, 28), "html", null, true);
            echo " </td>
              <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posts"], "createdAt", [], "any", false, false, false, 29), "m/d/Y"), "html", null, true);
            echo " </td>
              <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posts"], "online", [], "any", false, false, false, 30), "html", null, true);
            echo " </td>
              <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posts"], "slider", [], "any", false, false, false, 31), "html", null, true);
            echo " </td>
              <td>
                  <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-post-edit", ["id" => twig_get_attribute($this->env, $this->source, $context["posts"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"btn-success\">Edit</a>
                  <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-post-delete", ["id" => twig_get_attribute($this->env, $this->source, $context["posts"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn-danger\">Delete</a>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "          <tr>
            <td colspan=\"4\">no records found</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['posts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
      </table>
      <div class=\"row\">
        <div class=\"pagination\" >
            ";
        // line 46
        $this->loadTemplate("admin/elements/_paginator.html.twig", "admin/posts/index.html.twig", 46)->display($context);
        // line 47
        echo "        </div>
    </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/posts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 47,  177 => 46,  171 => 42,  162 => 38,  153 => 34,  149 => 33,  144 => 31,  140 => 30,  136 => 29,  132 => 28,  128 => 27,  124 => 26,  120 => 25,  117 => 24,  112 => 23,  93 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"administration.html.twig\" %}
{% block title %}Posts | Liste{% endblock %}
{% block body %}
    <section class=\"contentAdmin \">
      {% include \"/element/_flash_messages.html.twig\" %}
      <table>
        <caption>
          <h1>Liste des Articles</h1>
        </caption>
        <thead>
          <tr>
            <th>#</th>
            <th>Titre</th>
            <th>Catégorie</th>
            <th>Sous-Catégorie</th>
            <th>Date de création</th>
            <th>En ligne</th>
            <th>Slideshow</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          {% for posts in posts %}
            <tr>
              <th>{{ posts.id}} </th>
              <td>{{ posts.title}} </td>
              <td>{{ posts.subCategory.categories}} </td>
              <td>{{ posts.subCategory}} </td>
              <td>{{ posts.createdAt |date(\"m/d/Y\") }} </td>
              <td>{{ posts.online}} </td>
              <td>{{ posts.slider}} </td>
              <td>
                  <a href=\"{{ path('admin-post-edit', {'id': posts.id}) }}\" class=\"btn-success\">Edit</a>
                  <a href=\"{{ path('admin-post-delete', {'id': posts.id}) }}\" class=\"btn-danger\">Delete</a>
              </td>
            </tr>
          {% else %}
          <tr>
            <td colspan=\"4\">no records found</td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
      <div class=\"row\">
        <div class=\"pagination\" >
            {% include 'admin/elements/_paginator.html.twig' %}
        </div>
    </div>
    </section>

{% endblock %}", "admin/posts/index.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/admin/posts/index.html.twig");
    }
}
