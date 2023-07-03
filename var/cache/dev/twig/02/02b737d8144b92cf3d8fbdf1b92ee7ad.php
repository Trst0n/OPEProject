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

/* mail/account.html.twig */
class __TwigTemplate_3a4f7a9edd3e650efb0ee909a764f2c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/account.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/account.html.twig"));

        // line 1
        echo "<div>
    Bonjour,<br>
    <br>
    Voici les identifiants pour vous connecter sur la plateforme de gestion de parrainage OPE. <br>
    Votre identifiant : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "<br>
    Votre mot de passe : ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["pwd"]) || array_key_exists("pwd", $context) ? $context["pwd"] : (function () { throw new RuntimeError('Variable "pwd" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "<br>
    <br>
    Ces identifiants ne peuvent pas être modifiés. <br>
    <br>
    Bonne journée, <br>
    <br>
    L'équipe OPE.
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mail/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    Bonjour,<br>
    <br>
    Voici les identifiants pour vous connecter sur la plateforme de gestion de parrainage OPE. <br>
    Votre identifiant : {{ username }}<br>
    Votre mot de passe : {{ pwd }}<br>
    <br>
    Ces identifiants ne peuvent pas être modifiés. <br>
    <br>
    Bonne journée, <br>
    <br>
    L'équipe OPE.
</div>", "mail/account.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/mail/account.html.twig");
    }
}
