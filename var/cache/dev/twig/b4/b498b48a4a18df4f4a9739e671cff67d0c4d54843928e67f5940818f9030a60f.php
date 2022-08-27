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

/* home/index.html.twig */
class __TwigTemplate_0d553a1d26daaa9ccf47ef4ae8cb485ea265b0e4d955d08e79bb4f80dd46d662 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <h3 class=\"mb-3\">
        
             Bienvenue ";
            // line 10
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "firstname", [], "any", false, false, false, 10), "html", null, true);
            echo " !

             ";
            // line 13
            echo "        </h3>
    ";
        }
        // line 15
        echo "    
                ";
        // line 17
        echo "            

            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/salle.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/plat.png"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/carpaccio.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Précédent</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Suivant</span>
            </button>
            </div>
          
        <div class=\"descriptionhome\">
            <p>Le bistrot symfony est un lieu plutôt populaire où l’on sert des plats simples, copieux et traditionnels à des prix abordables. La restauration est traditionnelle composée d'apéritifs, d'entrées, de plats ,de plats du jour et de desserts. Les repas sont servis sur place ou à emporter. Le bistrot propose une ambiance chaleureuse avec un espace terrasse et bénéficie d’une accessibilité au fauteuil roulant.
            </p>
            <div class=\"blocinfobistrottop\">
                <p class=\"blocinfobistrot\">Les horaires d'ouvertures :<br/>
                du Lundi au Dimanche<br/>
                de 7 h 00 à 23 h 00.</p>
                <p class=\"blocinfobistrot\">L'enseigne se trouve au <br/>
                5, rue Angéline dans le 11ème arrondissement de Paris.</p>
                <p class=\"blocinfobistrot\">Les prestations de l'établissement :<br/>
                Service de restauration en ligne, sur place et à emporter.</p>
            </div>
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  104 => 25,  98 => 22,  91 => 17,  88 => 15,  84 => 13,  77 => 10,  73 => 8,  71 => 7,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# {% block title %}Hello HomeController!{% endblock %} #}

{% block body %}

    {% if app.user %}
        <h3 class=\"mb-3\">
        
             Bienvenue {{ app.user.name|capitalize }} {{ app.user.firstname }} !

             {# <a href=\"{{ path('app_logout') }}\"> (Me déconnecter)</a>  #}
        </h3>
    {% endif %}
    
                {# <h1><a href=\"{{ path (\"app_carte_restaurant\") }}\" class=\"nav-link\">Carte du restaurant</a></h1> #}
            

            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                <img src=\"{{ asset('images/salle.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                <img src=\"{{ asset('images/plat.png') }}\" class=\"d-block w-100\" alt=\"...\">
                </div>
                <div class=\"carousel-item\">
                <img src=\"{{ asset('images/carpaccio.jpg') }}\" class=\"d-block w-100\" alt=\"...\">
                </div>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Précédent</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"visually-hidden\">Suivant</span>
            </button>
            </div>
          
        <div class=\"descriptionhome\">
            <p>Le bistrot symfony est un lieu plutôt populaire où l’on sert des plats simples, copieux et traditionnels à des prix abordables. La restauration est traditionnelle composée d'apéritifs, d'entrées, de plats ,de plats du jour et de desserts. Les repas sont servis sur place ou à emporter. Le bistrot propose une ambiance chaleureuse avec un espace terrasse et bénéficie d’une accessibilité au fauteuil roulant.
            </p>
            <div class=\"blocinfobistrottop\">
                <p class=\"blocinfobistrot\">Les horaires d'ouvertures :<br/>
                du Lundi au Dimanche<br/>
                de 7 h 00 à 23 h 00.</p>
                <p class=\"blocinfobistrot\">L'enseigne se trouve au <br/>
                5, rue Angéline dans le 11ème arrondissement de Paris.</p>
                <p class=\"blocinfobistrot\">Les prestations de l'établissement :<br/>
                Service de restauration en ligne, sur place et à emporter.</p>
            </div>
        </div>

{% endblock %}", "home/index.html.twig", "C:\\xampp\\htdocs\\angeline_majida_bistrot-symfony\\templates\\home\\index.html.twig");
    }
}
