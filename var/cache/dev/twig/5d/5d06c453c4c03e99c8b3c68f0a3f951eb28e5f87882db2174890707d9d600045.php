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

/* mentions_legales/index.html.twig */
class __TwigTemplate_06bcc148476f1616f2a529cb37f1faef4a16acf2910db8ecedbfc27d088ee5a8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions_legales/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions_legales/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mentions_legales/index.html.twig", 1);
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
    <h1>Mentions legales</h1>
<p>
Les pr??sentes conditions g??n??rales ont pour objet de d??finir les modalit??s de mise ?? disposition des services du site www.bistrot_symfony.com, ci-apr??s nomm?? ???le service??? et les conditions d???utilisation du service par l???utilisateur.</p>
<p>
Tout acc??s et/ou utilisation du site www.bistrot_symfony.com suppose l???acceptation et le respect de l???ensemble des termes des pr??sentes conditions et leur acceptation inconditionnelle. Elles constituent donc un contrat entre Bistrot Symfony et l???utilisateur.</p>
<p>
Dans le cas o?? l???utilisateur ne souhaite pas accepter tout ou partie des pr??sentes conditions g??n??rales, il lui est demand?? de renoncer ?? tout usage du service.</p>
<p>
Le site www.bistrot_symfony.com est ??dit?? et h??berg?? par :
ESRP BEAUVOIR </p>
<p>
SAS au capital de 10 069 020 ???
RCS PARIS 424 761 419 00045
Code APE 2620Z
N?? TVA : FR 22 424 761 419
Si??ge social : 5, rue Ang??line dans le 11??me arrondissement de Paris.</p>
<h4>Acc??s au service</h4>
<p>
Le service est accessible gratuitement ?? tout utilisateur disposant d???un acc??s ?? Internet. Tous les co??ts aff??rents ?? l???acc??s au service, que ce soient les frais mat??riels, logiciels ou d???acc??s ?? Internet sont exclusivement ?? la charge de l???utilisateur. Il est seul responsable du bon fonctionnement de son ??quipement informatique ainsi que de son acc??s ?? Internet.</p>
<p>
Bistrot Symfony met en ??uvre tous les moyens raisonnables ?? sa disposition pour assurer un acc??s de qualit?? au service, mais n???est tenu ?? aucune obligation d???y parvenir.</p>
<p>
Bistrot Symfony ne peut, en outre, ??tre tenu responsable de tout dysfonctionnement du r??seau ou des serveurs ou de tout autre ??v??nement ??chappant au contr??le raisonnable, qui emp??cherait ou d??graderait l???acc??s au service.</p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mentions_legales/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# {% block title %}Hello MentionsLegalesController!{% endblock %} #}

{% block body %}

    <h1>Mentions legales</h1>
<p>
Les pr??sentes conditions g??n??rales ont pour objet de d??finir les modalit??s de mise ?? disposition des services du site www.bistrot_symfony.com, ci-apr??s nomm?? ???le service??? et les conditions d???utilisation du service par l???utilisateur.</p>
<p>
Tout acc??s et/ou utilisation du site www.bistrot_symfony.com suppose l???acceptation et le respect de l???ensemble des termes des pr??sentes conditions et leur acceptation inconditionnelle. Elles constituent donc un contrat entre Bistrot Symfony et l???utilisateur.</p>
<p>
Dans le cas o?? l???utilisateur ne souhaite pas accepter tout ou partie des pr??sentes conditions g??n??rales, il lui est demand?? de renoncer ?? tout usage du service.</p>
<p>
Le site www.bistrot_symfony.com est ??dit?? et h??berg?? par :
ESRP BEAUVOIR </p>
<p>
SAS au capital de 10 069 020 ???
RCS PARIS 424 761 419 00045
Code APE 2620Z
N?? TVA : FR 22 424 761 419
Si??ge social : 5, rue Ang??line dans le 11??me arrondissement de Paris.</p>
<h4>Acc??s au service</h4>
<p>
Le service est accessible gratuitement ?? tout utilisateur disposant d???un acc??s ?? Internet. Tous les co??ts aff??rents ?? l???acc??s au service, que ce soient les frais mat??riels, logiciels ou d???acc??s ?? Internet sont exclusivement ?? la charge de l???utilisateur. Il est seul responsable du bon fonctionnement de son ??quipement informatique ainsi que de son acc??s ?? Internet.</p>
<p>
Bistrot Symfony met en ??uvre tous les moyens raisonnables ?? sa disposition pour assurer un acc??s de qualit?? au service, mais n???est tenu ?? aucune obligation d???y parvenir.</p>
<p>
Bistrot Symfony ne peut, en outre, ??tre tenu responsable de tout dysfonctionnement du r??seau ou des serveurs ou de tout autre ??v??nement ??chappant au contr??le raisonnable, qui emp??cherait ou d??graderait l???acc??s au service.</p>

{% endblock %}
", "mentions_legales/index.html.twig", "C:\\xampp\\htdocs\\angeline_majida_bistrot-symfony\\templates\\mentions_legales\\index.html.twig");
    }
}
