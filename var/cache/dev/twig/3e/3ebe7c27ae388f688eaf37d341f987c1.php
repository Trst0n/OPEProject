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

/* mail/student-reminder.html.twig */
class __TwigTemplate_33aec550c81ab0b141c6e21696f68860 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/student-reminder.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/student-reminder.html.twig"));

        // line 1
        echo "<div>
    Bonjour ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new RuntimeError('Variable "firstname" does not exist.', 2, $this->source); })()), "html", null, true);
        echo ", <br>
    <br>
    Vous avez bénéficié d’une mise en relation avec un parrain ou une marraine, merci de bien
    vouloir nous indiquer si les échanges se poursuivent.<br>
    <a href=\"http://127.0.0.1:8100/yes/";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["idsponsorship"]) || array_key_exists("idsponsorship", $context) ? $context["idsponsorship"] : (function () { throw new RuntimeError('Variable "idsponsorship" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">OUI</a> <a href=\"http://127.0.0.1:8100/end/";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["idsponsorship"]) || array_key_exists("idsponsorship", $context) ? $context["idsponsorship"] : (function () { throw new RuntimeError('Variable "idsponsorship" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">NON</a><br>
    <br>
    Cordialement,<br>
    <br>
    L'équipe Ôpe
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mail/student-reminder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    Bonjour {{ firstname }}, <br>
    <br>
    Vous avez bénéficié d’une mise en relation avec un parrain ou une marraine, merci de bien
    vouloir nous indiquer si les échanges se poursuivent.<br>
    <a href=\"http://127.0.0.1:8100/yes/{{id}}/{{ idsponsorship }}\">OUI</a> <a href=\"http://127.0.0.1:8100/end/{{id}}/{{ idsponsorship }}\">NON</a><br>
    <br>
    Cordialement,<br>
    <br>
    L'équipe Ôpe
</div>", "mail/student-reminder.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/mail/student-reminder.html.twig");
    }
}
