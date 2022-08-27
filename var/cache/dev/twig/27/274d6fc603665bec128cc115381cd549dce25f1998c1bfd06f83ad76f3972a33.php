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

/* plat_jour/show.html.twig */
class __TwigTemplate_66363f4cf2a073b900a96eefe182c7ec293354e23596d2f4b44d2fb3769125c8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat_jour/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat_jour/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "plat_jour/show.html.twig", 1);
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

        echo "Plat du jour";
        
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
        echo "    <h1>Plat du jour : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat_jour"]) || array_key_exists("plat_jour", $context) ? $context["plat_jour"] : (function () { throw new RuntimeError('Variable "plat_jour" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <table class=\"table\">
        <tbody>
            ";
        // line 14
        echo "            <tr>
                <th>Nom plat du jour</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat_jour"]) || array_key_exists("plat_jour", $context) ? $context["plat_jour"] : (function () { throw new RuntimeError('Variable "plat_jour" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat_jour"]) || array_key_exists("plat_jour", $context) ? $context["plat_jour"] : (function () { throw new RuntimeError('Variable "plat_jour" does not exist.', 20, $this->source); })()), "price", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_creation</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["plat_jour"]) || array_key_exists("plat_jour", $context) ? $context["plat_jour"] : (function () { throw new RuntimeError('Variable "plat_jour" does not exist.', 24, $this->source); })()), "dateCreation", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat_jour"]) || array_key_exists("plat_jour", $context) ? $context["plat_jour"] : (function () { throw new RuntimeError('Variable "plat_jour" does not exist.', 24, $this->source); })()), "dateCreation", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>";
        // line 28
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["plat_jour"]) || array_key_exists("plat_jour", $context) ? $context["plat_jour"] : (function () { throw new RuntimeError('Variable "plat_jour" does not exist.', 28, $this->source); })()), "status", [], "any", false, false, false, 28)) ? ("Visible") : ("Non visible"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_jour_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/retour_icon.png"), "html", null, true);
        echo "\" alt=\"Retour à la liste\" class=\"icon\"></a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_jour_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["plat_jour"]) || array_key_exists("plat_jour", $context) ? $context["plat_jour"] : (function () { throw new RuntimeError('Variable "plat_jour" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/edit_icon.png"), "html", null, true);
        echo "\" alt=\"Modifier\" class=\"icon\"></a>

    ";
        // line 37
        echo twig_include($this->env, $context, "plat_jour/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "plat_jour/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 37,  136 => 35,  129 => 33,  121 => 28,  114 => 24,  107 => 20,  100 => 16,  96 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Plat du jour{% endblock %}

{% block body %}
    <h1>Plat du jour : {{ plat_jour.name }}</h1>

    <table class=\"table\">
        <tbody>
            {# <tr>
                <th>Id</th>
                <td>{{ plat_jour.id }}</td>
            </tr> #}
            <tr>
                <th>Nom plat du jour</th>
                <td>{{ plat_jour.name }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ plat_jour.price }}</td>
            </tr>
            <tr>
                <th>Date_creation</th>
                <td>{{ plat_jour.dateCreation ? plat_jour.dateCreation|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>{{ plat_jour.status ? 'Visible' : 'Non visible' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_plat_jour_index') }}\"><img src=\"{{ asset('images/retour_icon.png') }}\" alt=\"Retour à la liste\" class=\"icon\"></a>

    <a href=\"{{ path('app_plat_jour_edit', {'id': plat_jour.id}) }}\"><img src=\"{{ asset('images/edit_icon.png') }}\" alt=\"Modifier\" class=\"icon\"></a>

    {{ include('plat_jour/_delete_form.html.twig') }}
{% endblock %}
", "plat_jour/show.html.twig", "C:\\xampp\\htdocs\\angeline_majida_bistrot-symfony\\templates\\plat_jour\\show.html.twig");
    }
}
