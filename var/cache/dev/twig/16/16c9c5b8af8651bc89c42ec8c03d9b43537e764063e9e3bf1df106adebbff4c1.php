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

/* commande_a_emporter/new.html.twig */
class __TwigTemplate_3e9e748289326f167d850a10d4d072c7a3ebade79308406c7b5cd015267183eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande_a_emporter/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande_a_emporter/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande_a_emporter/new.html.twig", 1);
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

        echo "Nouvelle commande à emporter
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>Nouvelle commande à emporter</h1>


\t";
        // line 11
        echo "
<div class=\"carteemporter d-flex align-items-start\">

    <div class=\"cadrepanier\">
        ";
        // line 15
        echo twig_include($this->env, $context, "commande_a_emporter/_form.html.twig");
        echo "
    </div>

\t
\t\t<div class=\"nav flex-column nav-pills me-3 carteresto\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
            echo "\t\t\t\t<button class=\"nav-link\" id=\"v-pills-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idname", [], "any", false, false, false, 21), "html", null, true);
            echo "-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idname", [], "any", false, false, false, 21), "html", null, true);
            echo "\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idname", [], "any", false, false, false, 21), "html", null, true);
            echo "\" aria-selected=\"true\">
\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "
\t\t\t\t\t<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "basepath", [], "any", false, false, false, 23), "html", null, true);
            echo "/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 23), "html", null, true);
            echo "\" alt=\"logo ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
\t\t\t\t</button>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t";
        // line 27
        echo "\t\t\t<button class=\"nav-link\" id=\"v-pills-formule-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-formule\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-formule\" aria-selected=\"false\">
\t\t\t\tFormules
\t\t\t\t<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/formules-icon.png"), "html", null, true);
        echo "\" alt=\"logo formule\"></button>
\t\t\t";
        // line 31
        echo "\t\t</div>

\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">


\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 37
            echo "\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idname", [], "any", false, false, false, 37), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"v-pills-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idname", [], "any", false, false, false, 37), "html", null, true);
            echo "-tab\" tabindex=\"0\">
\t\t\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
                // line 39
                echo "\t\t\t\t\t\t";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "categoryNumber", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 39)))) {
                    // line 40
                    echo "\t\t\t\t\t\t\t<div class=\"card minicarteresto\"><img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "basepath", [], "any", false, false, false, 40), "html", null, true);
                    echo "/images/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "image", [], "any", false, false, false, 40), "html", null, true);
                    echo "\" alt=\"logo ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "name", [], "any", false, false, false, 40), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "name", [], "any", false, false, false, 42), "html", null, true);
                    echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-detail\">";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "description", [], "any", false, false, false, 43), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-price\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "price", [], "any", false, false, false, 45), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
\t\t\t";
        // line 55
        echo "\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-formule\" role=\"tabpanel\" aria-labelledby=\"v-pills-formule-tab\" tabindex=\"0\">

\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formules"]) || array_key_exists("formules", $context) ? $context["formules"] : (function () { throw new RuntimeError('Variable "formules" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
            // line 58
            echo "\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["formule"], "status", [], "any", false, false, false, 58), true))) {
                // line 59
                echo "\t\t\t\t\t\t<div class=\"card minicarteresto\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "basepath", [], "any", false, false, false, 59), "html", null, true);
                echo "/images/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "image", [], "any", false, false, false, 59), "html", null, true);
                echo "\" alt=\"menu ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 59), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 61), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t<p class=\"card-detail\">";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "description", [], "any", false, false, false, 62), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p class=\"card-price\">
\t\t\t\t\t\t\t\t\t";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "price", [], "any", false, false, false, 64), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t</div>
\t\t\t";
        // line 72
        echo "           
\t\t</div>
       
\t</div>
    


</div></div></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commande_a_emporter/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 72,  260 => 70,  254 => 69,  246 => 64,  241 => 62,  237 => 61,  227 => 59,  224 => 58,  220 => 57,  216 => 55,  213 => 53,  206 => 51,  200 => 50,  192 => 45,  187 => 43,  183 => 42,  173 => 40,  170 => 39,  166 => 38,  159 => 37,  155 => 36,  148 => 31,  144 => 29,  140 => 27,  138 => 26,  125 => 23,  121 => 22,  112 => 21,  108 => 20,  100 => 15,  94 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle commande à emporter
{% endblock %}

{% block body %}
\t<h1>Nouvelle commande à emporter</h1>


\t{# <button class=\"btn\">{{ button_label|default('Enregistrer') }}</button> #}

<div class=\"carteemporter d-flex align-items-start\">

    <div class=\"cadrepanier\">
        {{ include('commande_a_emporter/_form.html.twig') }}
    </div>

\t
\t\t<div class=\"nav flex-column nav-pills me-3 carteresto\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t{% for category in categories %}
\t\t\t\t<button class=\"nav-link\" id=\"v-pills-{{category.idname}}-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-{{category.idname}}\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-{{category.idname}}\" aria-selected=\"true\">
\t\t\t\t\t{{category.name}}
\t\t\t\t\t<img src=\"{{app.request.basepath}}/images/{{ category.image }}\" alt=\"logo {{category.name}}\">
\t\t\t\t</button>
\t\t\t{% endfor %}
\t\t\t{# DEBUT BOUTON FORMULE #}
\t\t\t<button class=\"nav-link\" id=\"v-pills-formule-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-formule\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-formule\" aria-selected=\"false\">
\t\t\t\tFormules
\t\t\t\t<img src=\"{{ asset('images/formules-icon.png') }}\" alt=\"logo formule\"></button>
\t\t\t{# FIN BOUTON FORMULE #}
\t\t</div>

\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">


\t\t\t{% for category in categories %}
\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-{{category.idname}}\" role=\"tabpanel\" aria-labelledby=\"v-pills-{{category.idname}}-tab\" tabindex=\"0\">
\t\t\t\t\t{% for plat in plats %}
\t\t\t\t\t\t{% if plat.categoryNumber.name == category.name %}
\t\t\t\t\t\t\t<div class=\"card minicarteresto\"><img src=\"{{app.request.basepath}}/images/{{ plat.image }}\" alt=\"logo {{plat.name}}\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{plat.name}}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-detail\">{{plat.description}}</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-price\">
\t\t\t\t\t\t\t\t\t\t{{plat.price}}
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t{% endfor %}

\t\t\t{# DEBUT LISTE FORMULE #}
\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-formule\" role=\"tabpanel\" aria-labelledby=\"v-pills-formule-tab\" tabindex=\"0\">

\t\t\t\t{% for formule in formules %}
\t\t\t\t\t{% if formule.status == true %}
\t\t\t\t\t\t<div class=\"card minicarteresto\"><img src=\"{{app.request.basepath}}/images/{{ formule.image }}\" alt=\"menu {{formule.name}}\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{formule.name}}</h5>
\t\t\t\t\t\t\t\t<p class=\"card-detail\">{{formule.description}}</p>
\t\t\t\t\t\t\t\t<p class=\"card-price\">
\t\t\t\t\t\t\t\t\t{{formule.price}}
\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t{# FIN LISTE FORMULE #}
           
\t\t</div>
       
\t</div>
    


</div></div></div>{% endblock %}
", "commande_a_emporter/new.html.twig", "C:\\xampp\\htdocs\\angeline_majida_bistrot-symfony\\templates\\commande_a_emporter\\new.html.twig");
    }
}
