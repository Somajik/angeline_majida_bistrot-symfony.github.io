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

/* carte_restaurant/index.html.twig */
class __TwigTemplate_70db6efae9d698ebcd2927da2e6be9825cee410b8deb47e3f5938497760be59f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte_restaurant/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte_restaurant/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "carte_restaurant/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "

<div class=\"d-flex align-items-start\">
    <div class=\"nav flex-column nav-pills me-3 carteresto\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "                <button class=\"nav-link\" id=\"v-pills-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idname", [], "any", false, false, false, 11), "html", null, true);
            echo "-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idname", [], "any", false, false, false, 11), "html", null, true);
            echo "\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idname", [], "any", false, false, false, 11), "html", null, true);
            echo "\" aria-selected=\"true\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "
                    <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "basepath", [], "any", false, false, false, 13), "html", null, true);
            echo "/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 13), "html", null, true);
            echo "\" alt=\"logo ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
                </button>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            ";
        // line 17
        echo "                <button class=\"nav-link\" id=\"v-pills-formule-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-formule\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-formule\" aria-selected=\"false\">
                    Formules
                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/formules-icon.png"), "html", null, true);
        echo "\" alt=\"logo formule\"></button>
            ";
        // line 21
        echo "    </div>

  <div class=\"tab-content\" id=\"v-pills-tabContent\">


    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            echo "        <div class=\"tab-pane fade\" id=\"v-pills-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idname", [], "any", false, false, false, 27), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"v-pills-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idname", [], "any", false, false, false, 27), "html", null, true);
            echo "-tab\" tabindex=\"0\">
            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
                // line 29
                echo "                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "categoryNumber", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29)))) {
                    // line 30
                    echo "                    <div class=\"card minicarteresto\"><img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "basepath", [], "any", false, false, false, 30), "html", null, true);
                    echo "/images/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "image", [], "any", false, false, false, 30), "html", null, true);
                    echo "\" alt=\"logo ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "name", [], "any", false, false, false, 30), "html", null, true);
                    echo "\">
                        <div class=\"card-body\"><h5 class=\"card-title\">";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "name", [], "any", false, false, false, 31), "html", null, true);
                    echo "</h5>
                            <p class=\"card-detail\">";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "description", [], "any", false, false, false, 32), "html", null, true);
                    echo "</p>
                            <p class=\"card-price\"> ";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "price", [], "any", false, false, false, 33), "html", null, true);
                    echo " €</p>
                        </div>
                    </div>
                ";
                }
                // line 37
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    ";
        // line 42
        echo "            <div class=\"tab-pane fade\" id=\"v-pills-formule\" role=\"tabpanel\" aria-labelledby=\"v-pills-formule-tab\" tabindex=\"0\">
            
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formules"]) || array_key_exists("formules", $context) ? $context["formules"] : (function () { throw new RuntimeError('Variable "formules" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
            echo "           
                    ";
            // line 45
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["formule"], "status", [], "any", false, false, false, 45), true))) {
                echo " 
                        <div class=\"card minicarteresto\"><img src=\"";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "basepath", [], "any", false, false, false, 46), "html", null, true);
                echo "/images/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "image", [], "any", false, false, false, 46), "html", null, true);
                echo "\" alt=\"menu ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 46), "html", null, true);
                echo "\">
                            <div class=\"card-body\"><h5 class=\"card-title\">";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 47), "html", null, true);
                echo "</h5>
                                <p class=\"card-detail\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "description", [], "any", false, false, false, 48), "html", null, true);
                echo "</p>
                                <p class=\"card-price\"> ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formule"], "price", [], "any", false, false, false, 49), "html", null, true);
                echo " €</p>
                            </div>
                        </div>
                    ";
            }
            // line 53
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
    ";
        // line 56
        echo "  
    </div>
</div>


        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "carte_restaurant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 56,  222 => 54,  216 => 53,  209 => 49,  205 => 48,  201 => 47,  193 => 46,  189 => 45,  183 => 44,  179 => 42,  176 => 40,  169 => 38,  163 => 37,  156 => 33,  152 => 32,  148 => 31,  139 => 30,  136 => 29,  132 => 28,  125 => 27,  121 => 26,  114 => 21,  110 => 19,  106 => 17,  104 => 16,  91 => 13,  87 => 12,  78 => 11,  74 => 10,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# {% block title %}Hello CarteRestaurantController!{% endblock %} #}

{% block body %}


<div class=\"d-flex align-items-start\">
    <div class=\"nav flex-column nav-pills me-3 carteresto\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
            {% for category in categories %}
                <button class=\"nav-link\" id=\"v-pills-{{category.idname}}-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-{{category.idname}}\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-{{category.idname}}\" aria-selected=\"true\">
                    {{category.name}}
                    <img src=\"{{app.request.basepath}}/images/{{ category.image }}\" alt=\"logo {{category.name}}\">
                </button>
            {% endfor %}
            {# DEBUT BOUTON FORMULE #}
                <button class=\"nav-link\" id=\"v-pills-formule-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#v-pills-formule\" type=\"button\" role=\"tab\" aria-controls=\"v-pills-formule\" aria-selected=\"false\">
                    Formules
                    <img src=\"{{ asset('images/formules-icon.png') }}\" alt=\"logo formule\"></button>
            {# FIN BOUTON FORMULE #}
    </div>

  <div class=\"tab-content\" id=\"v-pills-tabContent\">


    {% for category in categories %}
        <div class=\"tab-pane fade\" id=\"v-pills-{{category.idname}}\" role=\"tabpanel\" aria-labelledby=\"v-pills-{{category.idname}}-tab\" tabindex=\"0\">
            {% for plat in plats %}
                    {% if plat.categoryNumber.name == category.name %}
                    <div class=\"card minicarteresto\"><img src=\"{{app.request.basepath}}/images/{{ plat.image }}\" alt=\"logo {{plat.name}}\">
                        <div class=\"card-body\"><h5 class=\"card-title\">{{plat.name}}</h5>
                            <p class=\"card-detail\">{{plat.description}}</p>
                            <p class=\"card-price\"> {{plat.price}} €</p>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endfor %}

    {# DEBUT LISTE FORMULE #}
            <div class=\"tab-pane fade\" id=\"v-pills-formule\" role=\"tabpanel\" aria-labelledby=\"v-pills-formule-tab\" tabindex=\"0\">
            
                {% for formule in formules %}           
                    {% if formule.status == true %} 
                        <div class=\"card minicarteresto\"><img src=\"{{app.request.basepath}}/images/{{ formule.image }}\" alt=\"menu {{formule.name}}\">
                            <div class=\"card-body\"><h5 class=\"card-title\">{{formule.name}}</h5>
                                <p class=\"card-detail\">{{formule.description}}</p>
                                <p class=\"card-price\"> {{formule.price}} €</p>
                            </div>
                        </div>
                    {% endif %}
                {% endfor %}
            </div>
    {# FIN LISTE FORMULE #}
  
    </div>
</div>


        </div>
    </div>
</div>

{% endblock %}
", "carte_restaurant/index.html.twig", "C:\\xampp\\htdocs\\angeline_majida_bistrot-symfony\\templates\\carte_restaurant\\index.html.twig");
    }
}
