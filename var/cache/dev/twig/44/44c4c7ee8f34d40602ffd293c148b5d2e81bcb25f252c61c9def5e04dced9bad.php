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

/* admin_reservation/show.html.twig */
class __TwigTemplate_68a66cf712d120b0dd82a24b9fba8a8bdbc7cab3b2286cda0f38b1d9aa905e9a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_reservation/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_reservation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_reservation/show.html.twig", 1);
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

        echo "Liste des réservations";
        
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
        echo "    <h1>Liste des réservations</h1>

    <table class=\"table\">
        <tbody>
            ";
        // line 14
        echo "            <tr>
                <th>Date réservée</th>
                <td>";
        // line 16
        ((twig_get_attribute($this->env, $this->source, (isset($context["admin_reservation"]) || array_key_exists("admin_reservation", $context) ? $context["admin_reservation"] : (function () { throw new RuntimeError('Variable "admin_reservation" does not exist.', 16, $this->source); })()), "date", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_reservation"]) || array_key_exists("admin_reservation", $context) ? $context["admin_reservation"] : (function () { throw new RuntimeError('Variable "admin_reservation" does not exist.', 16, $this->source); })()), "date", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Nombre de convives</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_reservation"]) || array_key_exists("admin_reservation", $context) ? $context["admin_reservation"] : (function () { throw new RuntimeError('Variable "admin_reservation" does not exist.', 20, $this->source); })()), "guestNumber", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Créneau horaire</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["admin_reservation"]) || array_key_exists("admin_reservation", $context) ? $context["admin_reservation"] : (function () { throw new RuntimeError('Variable "admin_reservation" does not exist.', 24, $this->source); })()), "hour", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_reservation"]) || array_key_exists("admin_reservation", $context) ? $context["admin_reservation"] : (function () { throw new RuntimeError('Variable "admin_reservation" does not exist.', 24, $this->source); })()), "hour", [], "any", false, false, false, 24), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Options</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_reservation"]) || array_key_exists("admin_reservation", $context) ? $context["admin_reservation"] : (function () { throw new RuntimeError('Variable "admin_reservation" does not exist.', 28, $this->source); })()), "options", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_reservation"]) || array_key_exists("admin_reservation", $context) ? $context["admin_reservation"] : (function () { throw new RuntimeError('Variable "admin_reservation" does not exist.', 32, $this->source); })()), "message", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>";
        // line 36
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["admin_reservation"]) || array_key_exists("admin_reservation", $context) ? $context["admin_reservation"] : (function () { throw new RuntimeError('Variable "admin_reservation" does not exist.', 36, $this->source); })()), "status", [], "any", false, false, false, 36)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Date de la demande</th>
                <td>";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["admin_reservation"]) || array_key_exists("admin_reservation", $context) ? $context["admin_reservation"] : (function () { throw new RuntimeError('Variable "admin_reservation" does not exist.', 40, $this->source); })()), "dateCreation", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin_reservation"]) || array_key_exists("admin_reservation", $context) ? $context["admin_reservation"] : (function () { throw new RuntimeError('Variable "admin_reservation" does not exist.', 40, $this->source); })()), "dateCreation", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/retour_icon.png"), "html", null, true);
        echo "\" alt=\"Retour\" class=\"icon\"></a>
    <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["admin_reservation"]) || array_key_exists("admin_reservation", $context) ? $context["admin_reservation"] : (function () { throw new RuntimeError('Variable "admin_reservation" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/edit_icon.png"), "html", null, true);
        echo "\" alt=\"Modifier\" class=\"icon\"></a>


    ";
        // line 49
        echo twig_include($this->env, $context, "admin_reservation/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_reservation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 49,  154 => 46,  148 => 45,  140 => 40,  133 => 36,  126 => 32,  119 => 28,  112 => 24,  105 => 20,  98 => 16,  94 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des réservations{% endblock %}

{% block body %}
    <h1>Liste des réservations</h1>

    <table class=\"table\">
        <tbody>
            {# <tr>
                <th>Id</th>
                <td>{{ admin_reservation.id }}</td>
            </tr> #}
            <tr>
                <th>Date réservée</th>
                <td>{{ admin_reservation.date ? admin_reservation.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Nombre de convives</th>
                <td>{{ admin_reservation.guestNumber }}</td>
            </tr>
            <tr>
                <th>Créneau horaire</th>
                <td>{{ admin_reservation.hour ? admin_reservation.hour|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Options</th>
                <td>{{ admin_reservation.options }}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{ admin_reservation.message }}</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>{{ admin_reservation.status ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Date de la demande</th>
                <td>{{ admin_reservation.dateCreation ? admin_reservation.dateCreation|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_admin_reservation_index') }}\"><img src=\"{{ asset('images/retour_icon.png') }}\" alt=\"Retour\" class=\"icon\"></a>
    <a href=\"{{ path('app_admin_reservation_edit', {'id': admin_reservation.id}) }}\"><img src=\"{{ asset('images/edit_icon.png') }}\" alt=\"Modifier\" class=\"icon\"></a>


    {{ include('admin_reservation/_delete_form.html.twig') }}
{% endblock %}
", "admin_reservation/show.html.twig", "C:\\xampp\\htdocs\\angeline_majida_bistrot-symfony\\templates\\admin_reservation\\show.html.twig");
    }
}
