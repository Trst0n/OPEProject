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

/* mail/student-match.html.twig */
class __TwigTemplate_89e7c8723835c65bb1711a08f9f7a6fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/student-match.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/student-match.html.twig"));

        // line 1
        echo "<div>
    Bonjour ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new RuntimeError('Variable "firstname" does not exist.', 2, $this->source); })()), "html", null, true);
        echo ",<br>
    <br>
    Faisant suite à votre inscription sur la plateforme de parrainage Ôpe, nous avons le plaisir de
    vous transmettre les coordonnées du parrain ou de la marraine que nous vous proposons :<br>
    ";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 6, $this->source); })()), "civility", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6) == "MEN")) ? ("Mr.") : ("Mme."));
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 6, $this->source); })()), "person", [], "any", false, false, false, 6), "lastname", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 6, $this->source); })()), "person", [], "any", false, false, false, 6), "firstname", [], "any", false, false, false, 6), "html", null, true);
        echo "<br>
    ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 7, $this->source); })()), "person", [], "any", false, false, false, 7), "phonenumber", [], "any", false, false, false, 7), "html", null, true);
        echo "<br>
    ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 8, $this->source); })()), "person", [], "any", false, false, false, 8), "email", [], "any", false, false, false, 8), "html", null, true);
        echo "<br>
    <br>
    Vous avez une semaine pour contacter votre parrain/marraine et nous en informer.<br>
    Contact établi : <a href=\"http://127.0.0.1:8100/yes/";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["idsponsorship"]) || array_key_exists("idsponsorship", $context) ? $context["idsponsorship"] : (function () { throw new RuntimeError('Variable "idsponsorship" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\"> OUI </a><br>
    <br>
    Espérant que vous partagerez de très bons moments grâce à notre plate-forme.<br>
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
        return "mail/student-match.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  65 => 8,  61 => 7,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    Bonjour {{firstname}},<br>
    <br>
    Faisant suite à votre inscription sur la plateforme de parrainage Ôpe, nous avons le plaisir de
    vous transmettre les coordonnées du parrain ou de la marraine que nous vous proposons :<br>
    {{ sponsor.civility.value == \"MEN\" ? \"Mr.\" : \"Mme.\" }} {{ sponsor.person.lastname }} {{ sponsor.person.firstname}}<br>
    {{ sponsor.person.phonenumber }}<br>
    {{ sponsor.person.email }}<br>
    <br>
    Vous avez une semaine pour contacter votre parrain/marraine et nous en informer.<br>
    Contact établi : <a href=\"http://127.0.0.1:8100/yes/{{id}}/{{ idsponsorship }}\"> OUI </a><br>
    <br>
    Espérant que vous partagerez de très bons moments grâce à notre plate-forme.<br>
    <br>
    Cordialement,<br>
    <br>
    L'équipe Ôpe
</div>", "mail/student-match.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/mail/student-match.html.twig");
    }
}
