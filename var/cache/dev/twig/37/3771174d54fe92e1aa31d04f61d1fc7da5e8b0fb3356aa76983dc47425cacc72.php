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

/* commande_a_emporter/show.html.twig */
class __TwigTemplate_6aa0f138a584112efd2f2b2f359ac7c6af08bc5a5232cd3f050adb455ad0cfb7 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande_a_emporter/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande_a_emporter/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande_a_emporter/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Commandes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Liste des Commandes à Emporter</h1>

    <table class=\"table\">
        <tbody>
            ";
        // line 14
        echo "            <tr>
                <th>Heure</th>
                <td>";
        // line 16
        ((twig_get_attribute($this->env, $this->source, (isset($context["commande_a_emporter"]) || array_key_exists("commande_a_emporter", $context) ? $context["commande_a_emporter"] : (function () { throw new RuntimeError('Variable "commande_a_emporter" does not exist.', 16, $this->source); })()), "hour", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande_a_emporter"]) || array_key_exists("commande_a_emporter", $context) ? $context["commande_a_emporter"] : (function () { throw new RuntimeError('Variable "commande_a_emporter" does not exist.', 16, $this->source); })()), "hour", [], "any", false, false, false, 16), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande_a_emporter"]) || array_key_exists("commande_a_emporter", $context) ? $context["commande_a_emporter"] : (function () { throw new RuntimeError('Variable "commande_a_emporter" does not exist.', 20, $this->source); })()), "status", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de la demande</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["commande_a_emporter"]) || array_key_exists("commande_a_emporter", $context) ? $context["commande_a_emporter"] : (function () { throw new RuntimeError('Variable "commande_a_emporter" does not exist.', 24, $this->source); })()), "dateCreation", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande_a_emporter"]) || array_key_exists("commande_a_emporter", $context) ? $context["commande_a_emporter"] : (function () { throw new RuntimeError('Variable "commande_a_emporter" does not exist.', 24, $this->source); })()), "dateCreation", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_a_emporter_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/retour_icon.png"), "html", null, true);
        echo "\" alt=\"Retour à la liste\" class=\"icon\"></a>

    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_a_emporter_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["commande_a_emporter"]) || array_key_exists("commande_a_emporter", $context) ? $context["commande_a_emporter"] : (function () { throw new RuntimeError('Variable "commande_a_emporter" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/edit_icon.png"), "html", null, true);
        echo "\" alt=\"Modifier\" class=\"icon\"></a>

    ";
        // line 33
        echo twig_include($this->env, $context, "commande_a_emporter/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commande_a_emporter/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 33,  127 => 31,  120 => 29,  112 => 24,  105 => 20,  98 => 16,  94 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Commandes{% endblock %}

{% block body %}
    <h1>Liste des Commandes à Emporter</h1>

    <table class=\"table\">
        <tbody>
            {# <tr>
                <th>Id</th>
                <td>{{ commande_a_emporter.id }}</td>
            </tr> #}
            <tr>
                <th>Heure</th>
                <td>{{ commande_a_emporter.hour ? commande_a_emporter.hour|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>{{ commande_a_emporter.status }}</td>
            </tr>
            <tr>
                <th>Date de la demande</th>
                <td>{{ commande_a_emporter.dateCreation ? commande_a_emporter.dateCreation|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_commande_a_emporter_index') }}\"><img src=\"{{ asset('images/retour_icon.png') }}\" alt=\"Retour à la liste\" class=\"icon\"></a>

    <a href=\"{{ path('app_commande_a_emporter_edit', {'id': commande_a_emporter.id}) }}\"><img src=\"{{ asset('images/edit_icon.png') }}\" alt=\"Modifier\" class=\"icon\"></a>

    {{ include('commande_a_emporter/_delete_form.html.twig') }}
{% endblock %}
", "commande_a_emporter/show.html.twig", "C:\\xampp\\htdocs\\angeline_majida_bistrot-symfony\\templates\\commande_a_emporter\\show.html.twig");
    }
}
