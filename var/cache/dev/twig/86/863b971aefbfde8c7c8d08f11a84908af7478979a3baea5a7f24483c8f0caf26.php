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

/* admin_reservation/index.html.twig */
class __TwigTemplate_97a948baa576d5be06e467280bc7ef137ac250bb33a568f9a832bfef3350fde0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_reservation/index.html.twig", 1);
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

        echo "Liste des Réservations";
        
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
        echo "    <h1>Liste des Réservations</h1>

    <table class=\"table\">
        <thead>
            <tr>
                ";
        // line 12
        echo "                <th>Date réservée</th>
                <th>Nombre d'invités</th>
                ";
        // line 15
        echo "                <th>Options</th>
                <th>Message</th>
                <th>Nom</th>
                <th>Status</th>
                ";
        // line 20
        echo "                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admin_reservations"]) || array_key_exists("admin_reservations", $context) ? $context["admin_reservations"] : (function () { throw new RuntimeError('Variable "admin_reservations" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["admin_reservation"]) {
            // line 25
            echo "            <tr>
                ";
            // line 27
            echo "                <td>";
            ((twig_get_attribute($this->env, $this->source, $context["admin_reservation"], "dateReservation", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_reservation"], "dateReservation", [], "any", false, false, false, 27), "d.m.Y"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_reservation"], "guestNumber", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_reservation"], "options", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_reservation"], "message", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["admin_reservation"], "referenceReservation", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_reservation"], "status", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                ";
            // line 34
            echo "                <td>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["admin_reservation"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/show_boutto.png"), "html", null, true);
            echo "\" alt=\"Afficher\" class=\"icon\"></a>
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["admin_reservation"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/edit_icon.png"), "html", null, true);
            echo "\" alt=\"Editer\" class=\"icon\"></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "            <tr>
                <td colspan=\"9\">Aucune réservation trouvée pour le moment...</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin_reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 44,  164 => 40,  153 => 36,  147 => 35,  144 => 34,  140 => 32,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  119 => 27,  116 => 25,  111 => 24,  105 => 20,  99 => 15,  95 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Réservations{% endblock %}

{% block body %}
    <h1>Liste des Réservations</h1>

    <table class=\"table\">
        <thead>
            <tr>
                {# <th>Id</th> #}
                <th>Date réservée</th>
                <th>Nombre d'invités</th>
                {# <th>Créneau</th> #}
                <th>Options</th>
                <th>Message</th>
                <th>Nom</th>
                <th>Status</th>
                {# <th>Date</th> #}
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for admin_reservation in admin_reservations %}
            <tr>
                {# <td>{{ admin_reservation.id }}</td> #}
                <td>{{ admin_reservation.dateReservation ? admin_reservation.dateReservation|date('d.m.Y') : '' }}</td>
                <td>{{ admin_reservation.guestNumber }}</td>
                <td>{{ admin_reservation.options }}</td>
                <td>{{ admin_reservation.message }}</td>
                <td>{{ admin_reservation.referenceReservation.name }}</td>
                <td>{{ admin_reservation.status }}</td>
                {# <td>{{ admin_reservation.dateCreation ? admin_reservation.dateCreation|date('d.m.Y') : '-' }}</td> #}
                <td>
                    <a href=\"{{ path('app_admin_reservation_show', {'id': admin_reservation.id}) }}\"><img src=\"{{ asset('images/show_boutto.png') }}\" alt=\"Afficher\" class=\"icon\"></a>
                    <a href=\"{{ path('app_admin_reservation_edit', {'id': admin_reservation.id}) }}\"><img src=\"{{ asset('images/edit_icon.png') }}\" alt=\"Editer\" class=\"icon\"></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">Aucune réservation trouvée pour le moment...</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {# <a href=\"{{ path('app_admin_reservation_new') }}\">Create new</a> #}
{% endblock %}
", "admin_reservation/index.html.twig", "C:\\xampp\\htdocs\\angeline_majida_bistrot-symfony\\templates\\admin_reservation\\index.html.twig");
    }
}
