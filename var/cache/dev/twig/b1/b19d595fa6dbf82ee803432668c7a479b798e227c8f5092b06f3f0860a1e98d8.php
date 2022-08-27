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

/* plat_jour/index.html.twig */
class __TwigTemplate_7259b3aff66f67e5d30ed0fc4fd2448909ff49a8455c030ab6e3d3d266200e5e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat_jour/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat_jour/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "plat_jour/index.html.twig", 1);
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

        echo "Liste des Plats du jour";
        
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
        echo "    <h1>Liste des Plats du jour</h1>

    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_jour_new");
        echo "\">Créer un nouveau plat du jour.</a>
    
    <table class=\"table\">
        <thead>
            <tr>
                ";
        // line 14
        echo "                <th>Plat du jour</th>
                <th>Prix</th>
                <th>Date de création</th>
                <th>Statut</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plat_jours"]) || array_key_exists("plat_jours", $context) ? $context["plat_jours"] : (function () { throw new RuntimeError('Variable "plat_jours" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plat_jour"]) {
            // line 23
            echo "            <tr>
                ";
            // line 25
            echo "                ";
            // line 28
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat_jour"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat_jour"], "price", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            ((twig_get_attribute($this->env, $this->source, $context["plat_jour"], "dateCreation", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat_jour"], "dateCreation", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 31
            echo ((twig_get_attribute($this->env, $this->source, $context["plat_jour"], "status", [], "any", false, false, false, 31)) ? ("Visible") : ("Non visible"));
            echo "</td>
                <td>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_jour_show", ["id" => twig_get_attribute($this->env, $this->source, $context["plat_jour"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/show_boutto.png"), "html", null, true);
            echo "\" alt=\"Afficher\" class=\"icon\"></a>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_jour_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["plat_jour"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/edit_icon.png"), "html", null, true);
            echo "\" alt=\"Editer\" class=\"icon\"></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "            <tr>
                <td colspan=\"5\">Aucun Plat du jour enregistré...</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat_jour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "plat_jour/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 42,  155 => 38,  144 => 34,  138 => 33,  133 => 31,  129 => 30,  125 => 29,  120 => 28,  118 => 25,  115 => 23,  110 => 22,  100 => 14,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Plats du jour{% endblock %}

{% block body %}
    <h1>Liste des Plats du jour</h1>

    <a href=\"{{ path('app_plat_jour_new') }}\">Créer un nouveau plat du jour.</a>
    
    <table class=\"table\">
        <thead>
            <tr>
                {# <th>Id</th> #}
                <th>Plat du jour</th>
                <th>Prix</th>
                <th>Date de création</th>
                <th>Statut</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for plat_jour in plat_jours %}
            <tr>
                {# <td>{{ plat_jour.id }}</td> #}
                {# {% for plat in plats %}
                    <td>{{ plat.platJourNumber }}</td>
                {% endfor %} #}
                <td>{{ plat_jour.name }}</td>
                <td>{{ plat_jour.price }}</td>
                <td>{{ plat_jour.dateCreation ? plat_jour.dateCreation|date('Y-m-d') : '' }}</td>
                <td>{{ plat_jour.status ? 'Visible' : 'Non visible' }}</td>
                <td>
                    <a href=\"{{ path('app_plat_jour_show', {'id': plat_jour.id}) }}\"><img src=\"{{ asset('images/show_boutto.png') }}\" alt=\"Afficher\" class=\"icon\"></a>
                    <a href=\"{{ path('app_plat_jour_edit', {'id': plat_jour.id}) }}\"><img src=\"{{ asset('images/edit_icon.png') }}\" alt=\"Editer\" class=\"icon\"></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">Aucun Plat du jour enregistré...</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "plat_jour/index.html.twig", "C:\\xampp\\htdocs\\angeline_majida_bistrot-symfony\\templates\\plat_jour\\index.html.twig");
    }
}
