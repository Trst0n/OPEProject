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

/* mail/sponsor-match.html.twig */
class __TwigTemplate_c797f7231de4d6f31f43e42d4b181eef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/sponsor-match.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/sponsor-match.html.twig"));

        // line 1
        echo "<div>
    Bonjour ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["civility"]) || array_key_exists("civility", $context) ? $context["civility"] : (function () { throw new RuntimeError('Variable "civility" does not exist.', 2, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastname"]) || array_key_exists("lastname", $context) ? $context["lastname"] : (function () { throw new RuntimeError('Variable "lastname" does not exist.', 2, $this->source); })()), "html", null, true);
        echo ",<br>
    <br>
    Faisant suite à votre inscription sur la plateforme de parrainage Ôpe, nous avons le plaisir de
    vous transmettre les coordonnées de l’étudiant que nous vous proposons :<br>
    ";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 6, $this->source); })()), "civility", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6) == "MEN")) ? ("Mr.") : ("Mme."));
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 6, $this->source); })()), "person", [], "any", false, false, false, 6), "lastname", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 6, $this->source); })()), "person", [], "any", false, false, false, 6), "firstname", [], "any", false, false, false, 6), "html", null, true);
        echo "<br>
    ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 7, $this->source); })()), "person", [], "any", false, false, false, 7), "phonenumber", [], "any", false, false, false, 7), "html", null, true);
        echo "<br>
    ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 8, $this->source); })()), "person", [], "any", false, false, false, 8), "email", [], "any", false, false, false, 8), "html", null, true);
        echo "<br>
    <br>
    Vous avez une semaine pour contacter l’étudiant et nous en informer.<br>
    Contact établi : <a href=\"#\"> OUI </a><br>
    <br>
    Espérant que vous partagerez de très bons moments grâce à notre plate-forme.<br>
    <br>
    Cordialement,
    <br>
    L'équipe Ôpe
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mail/sponsor-match.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  63 => 7,  55 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    Bonjour {{ civility }} {{ lastname }},<br>
    <br>
    Faisant suite à votre inscription sur la plateforme de parrainage Ôpe, nous avons le plaisir de
    vous transmettre les coordonnées de l’étudiant que nous vous proposons :<br>
    {{ student.civility.value == \"MEN\" ? \"Mr.\" : \"Mme.\"}} {{ student.person.lastname }} {{ student.person.firstname }}<br>
    {{ student.person.phonenumber }}<br>
    {{ student.person.email }}<br>
    <br>
    Vous avez une semaine pour contacter l’étudiant et nous en informer.<br>
    Contact établi : <a href=\"#\"> OUI </a><br>
    <br>
    Espérant que vous partagerez de très bons moments grâce à notre plate-forme.<br>
    <br>
    Cordialement,
    <br>
    L'équipe Ôpe
</div>", "mail/sponsor-match.html.twig", "C:\\Courses\\OPE5\\OPEProject\\templates\\mail\\sponsor-match.html.twig");
    }
}
