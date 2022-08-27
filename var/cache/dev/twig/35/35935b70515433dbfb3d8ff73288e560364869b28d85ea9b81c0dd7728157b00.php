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

/* partials/header.html.twig */
class __TwigTemplate_6493ad77221c9ad9ad51ad9aff7958a8a21a0eb345c8ae898b73d7aabd5cb02c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<header>

<div class=\"gauche\">
    <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/LogoBistrotSymfony.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo\">
    <div class=\"headerlogo\">Bistrot<br/>Symfony</div></a>
</div>

<div class=\"droite\">
    <ul class=\"nav justify-content-end\">
            <li class=\"nav-item\" class=\"carterestohome\">
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_restaurant");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/carte.png"), "html", null, true);
        echo "\" alt=\"Icon carte du restaurant\" class=\"iconheader\">Carte du restaurant</a>  
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_a_emporter_new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sac.png"), "html", null, true);
        echo "\" alt=\"Icon A Emporter\" class=\"iconheader\">A Emporter</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/calendrier.png"), "html", null, true);
        echo "\" alt=\"Icon Réservation\" class=\"iconheader\">Réserver</a>
            </li>
            
        ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 21
            echo "        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Administrateur</a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            <li><a class=\"dropdown-item\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            echo "\">Gestion des Inscrits</a></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_a_emporter_index");
            echo "\">Gestion des Commandes</a></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reservation_index");
            echo "\">Gestion des Réservations</a></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_index");
            echo "\">Gestion de la Carte du restaurant</a></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_jour_index");
            echo "\">Gestion du Plat du jour</a></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formule_index");
            echo "\">Gestion des Formules</a></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index");
            echo "\">Gestion des Catégories</a></li>
          </ul>
        </li>
        ";
        }
        // line 34
        echo "
            ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "            <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ConnexionIcon.png"), "html", null, true);
            echo "\" alt=\"Icon Connexion\" class=\"iconconnexion\"></a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            <li><a class=\"dropdown-item\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profil");
            echo "\">Mon Profil</a></li>
            <li><a class=\"dropdown-item\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Me déconnecter</a></li>
          </ul>
            ";
        } else {
            // line 44
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link\">
                <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ConnexionIcon.png"), "html", null, true);
            echo "\" alt=\"Icon Connexion\"></a>
            ";
        }
        // line 47
        echo "        </li>

    </ul>
</div>

</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 47,  151 => 45,  146 => 44,  140 => 41,  136 => 40,  131 => 38,  127 => 36,  125 => 35,  122 => 34,  115 => 30,  111 => 29,  107 => 28,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  86 => 21,  84 => 20,  76 => 17,  68 => 14,  60 => 11,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>

<div class=\"gauche\">
    <a href=\"{{ path (\"app_home\")}}\"><img src=\"{{ asset('images/LogoBistrotSymfony.png') }}\" alt=\"logo\" class=\"logo\">
    <div class=\"headerlogo\">Bistrot<br/>Symfony</div></a>
</div>

<div class=\"droite\">
    <ul class=\"nav justify-content-end\">
            <li class=\"nav-item\" class=\"carterestohome\">
                <a href=\"{{ path (\"app_carte_restaurant\") }}\"><img src=\"{{ asset('images/carte.png')}}\" alt=\"Icon carte du restaurant\" class=\"iconheader\">Carte du restaurant</a>  
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path ('app_commande_a_emporter_new') }}\"><img src=\"{{ asset('images/sac.png')}}\" alt=\"Icon A Emporter\" class=\"iconheader\">A Emporter</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path ('app_admin_reservation_new') }}\"><img src=\"{{ asset('images/calendrier.png')}}\" alt=\"Icon Réservation\" class=\"iconheader\">Réserver</a>
            </li>
            
        {% if is_granted('ROLE_ADMIN') %}
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Administrateur</a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            <li><a class=\"dropdown-item\" href=\"{{ path ('app_user_index') }}\">Gestion des Inscrits</a></li>
            <li><a class=\"dropdown-item\" href=\"{{ path ('app_commande_a_emporter_index') }}\">Gestion des Commandes</a></li>
            <li><a class=\"dropdown-item\" href=\"{{ path ('app_admin_reservation_index') }}\">Gestion des Réservations</a></li>
            <li><a class=\"dropdown-item\" href=\"{{ path ('app_plat_index') }}\">Gestion de la Carte du restaurant</a></li>
            <li><a class=\"dropdown-item\" href=\"{{ path ('app_plat_jour_index') }}\">Gestion du Plat du jour</a></li>
            <li><a class=\"dropdown-item\" href=\"{{ path ('app_formule_index') }}\">Gestion des Formules</a></li>
            <li><a class=\"dropdown-item\" href=\"{{ path ('app_category_index') }}\">Gestion des Catégories</a></li>
          </ul>
        </li>
        {% endif %}

            {% if app.user %}
            <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            <img src=\"{{ asset('images/ConnexionIcon.png')}}\" alt=\"Icon Connexion\" class=\"iconconnexion\"></a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            <li><a class=\"dropdown-item\" href=\"{{ path ('app_user_profil') }}\">Mon Profil</a></li>
            <li><a class=\"dropdown-item\" href=\"{{ path ('app_logout') }}\">Me déconnecter</a></li>
          </ul>
            {% else %}
                <a href=\"{{ path (\"app_login\") }}\" class=\"nav-link\">
                <img src=\"{{ asset('images/ConnexionIcon.png')}}\" alt=\"Icon Connexion\"></a>
            {% endif %}
        </li>

    </ul>
</div>

</header>", "partials/header.html.twig", "C:\\xampp\\htdocs\\angeline_majida_bistrot-symfony\\templates\\partials\\header.html.twig");
    }
}
