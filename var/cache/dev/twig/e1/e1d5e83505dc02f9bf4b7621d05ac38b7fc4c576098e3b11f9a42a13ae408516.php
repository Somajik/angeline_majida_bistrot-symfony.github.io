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

/* partials/footer.html.twig */
class __TwigTemplate_71662320051307e2ac959a113c8bb6f084d34295087d1e9592be52b2ac8f80bd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "<footer>
<div class=\"blocfooter\">
    <div class=\"info\">
        <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mentions_legales");
        echo "\">Mentions Légales</a>
    </div>

    <div class=\"info\">
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\"><p>Le Bistrot Symfony</p>
        <p>5, rue Angéline, 75011 Paris</p>
        <p>01 64 90 26 59</p></a>
    </div>

    <div class=\"info\"> <a href=\"#\">Nous contacter</a> </div>

</div>
</footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
<div class=\"blocfooter\">
    <div class=\"info\">
        <a href=\"{{ path ('app_mentions_legales') }}\">Mentions Légales</a>
    </div>

    <div class=\"info\">
    <a href=\"{{ path ('app_map') }}\"><p>Le Bistrot Symfony</p>
        <p>5, rue Angéline, 75011 Paris</p>
        <p>01 64 90 26 59</p></a>
    </div>

    <div class=\"info\"> <a href=\"#\">Nous contacter</a> </div>

</div>
</footer>
", "partials/footer.html.twig", "C:\\xampp\\htdocs\\angeline_majida_bistrot-symfony\\templates\\partials\\footer.html.twig");
    }
}
