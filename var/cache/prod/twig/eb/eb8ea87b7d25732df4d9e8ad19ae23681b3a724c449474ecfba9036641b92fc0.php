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

/* admin/pages/index.html.twig */
class __TwigTemplate_13ae36dff9a9aa9b0123b4bcf78ad362047c126b12a9dcdea6cfa91e00f0120f extends Template
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
        $this->parent = $this->loadTemplate("administration.html.twig", "admin/pages/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pages | Liste";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <section class=\"contentAdmin \">
      ";
        // line 6
        $this->loadTemplate("/element/_flash_messages.html.twig", "admin/pages/index.html.twig", 6)->display($context);
        // line 7
        echo "      <table>
        <caption>
          <h1>Liste des Pages</h1>
        </caption>
        <thead>
          <tr>
            <th>#</th>
            <th>Titre</th>
            <th>Slug</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["pages"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pages"]) {
            // line 21
            echo "          <tr>
            <th>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pages"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo " </th>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pages"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo " </td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pages"], "slug", [], "any", false, false, false, 24), "html", null, true);
            echo " </td>
            <td>
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-page-edit", ["id" => twig_get_attribute($this->env, $this->source, $context["pages"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"btn-success\">Edit</a>
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin-pages-delete", ["id" => twig_get_attribute($this->env, $this->source, $context["pages"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"btn-danger\">Delete</a>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "          <tr>
            <td colspan=\"4\">no records found</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
      </table>
    </section>
";
    }

    public function getTemplateName()
    {
        return "admin/pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 35,  112 => 31,  103 => 27,  99 => 26,  94 => 24,  90 => 23,  86 => 22,  83 => 21,  78 => 20,  63 => 7,  61 => 6,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/pages/index.html.twig", "/var/www/html/projet_rncp_niveau_5/templates/admin/pages/index.html.twig");
    }
}
