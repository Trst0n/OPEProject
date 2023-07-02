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

/* mail/sponsor-registration.html.twig */
class __TwigTemplate_2147d6ce05ae693c1705c6b64e700877 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/sponsor-registration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/sponsor-registration.html.twig"));

        // line 1
        echo "<div>
    Bonjour ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["civility"]) || array_key_exists("civility", $context) ? $context["civility"] : (function () { throw new RuntimeError('Variable "civility" does not exist.', 2, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastname"]) || array_key_exists("lastname", $context) ? $context["lastname"] : (function () { throw new RuntimeError('Variable "lastname" does not exist.', 2, $this->source); })()), "html", null, true);
        echo ",<br>
    <br>
    Nous avons bien pris en compte votre inscription sur la plateforme de parrainage Ôpe, nous
    avons le plaisir de vous indiquer que nous recherchons un étudiant correspondant à vos
    critères, nous ne manquerons pas de revenir vers vous très rapidement.<br>
    Belle journée.<br>
    <br>
    Cordialement,<br>
    <br>
    L'équipe Ôpe
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mail/sponsor-registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    Bonjour {{ civility }} {{ lastname }},<br>
    <br>
    Nous avons bien pris en compte votre inscription sur la plateforme de parrainage Ôpe, nous
    avons le plaisir de vous indiquer que nous recherchons un étudiant correspondant à vos
    critères, nous ne manquerons pas de revenir vers vous très rapidement.<br>
    Belle journée.<br>
    <br>
    Cordialement,<br>
    <br>
    L'équipe Ôpe
</div>

", "mail/sponsor-registration.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/mail/sponsor-registration.html.twig");
    }
}
