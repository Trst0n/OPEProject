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

/* mail/student-match-reminder.html.twig */
class __TwigTemplate_dea5305fe349a5e421e45408397b623e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/student-match-reminder.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/student-match-reminder.html.twig"));

        // line 1
        echo "<div>
    Bonjour ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new RuntimeError('Variable "firstname" does not exist.', 2, $this->source); })()), "html", null, true);
        echo ",<br>
    <br>
    Faisant suite à votre inscription sur la plateforme de parrainage Ôpe, merci de nous indiquer si
    le contact avec votre parrain ou votre marraine est bien établi.<br>
    [OUI] [NON]<br>
    <br>
    Cordialement,<br>
    <br>
    L'équipe Ôpe.
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mail/student-match-reminder.html.twig";
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
    Bonjour {{ firstname }},<br>
    <br>
    Faisant suite à votre inscription sur la plateforme de parrainage Ôpe, merci de nous indiquer si
    le contact avec votre parrain ou votre marraine est bien établi.<br>
    [OUI] [NON]<br>
    <br>
    Cordialement,<br>
    <br>
    L'équipe Ôpe.
</div>", "mail/student-match-reminder.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/mail/student-match-reminder.html.twig");
    }
}
