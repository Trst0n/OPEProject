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

/* mail/student-ending.html.twig */
class __TwigTemplate_5d4319592869bca4c5b02d5fa16e041c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/student-ending.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/student-ending.html.twig"));

        // line 1
        echo "<div>
    Bonjour,<br>
    <br>
    Vous avez été accompagné dans le cadre d’un parrainage de la plateforme OPE. Votre
    parrain/marraine nous a informé qu’il n’était pas en mesure de poursuivre le parrainage. Vous avez
    la possibilité de rester inscrit pour bénéficier d’un autre parrainage.<br>
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
        return "mail/student-ending.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    Bonjour,<br>
    <br>
    Vous avez été accompagné dans le cadre d’un parrainage de la plateforme OPE. Votre
    parrain/marraine nous a informé qu’il n’était pas en mesure de poursuivre le parrainage. Vous avez
    la possibilité de rester inscrit pour bénéficier d’un autre parrainage.<br>
    <br>
    Cordialement,<br>
    <br>
    L'équipe Ôpe
</div>", "mail/student-ending.html.twig", "C:\\Courses\\OPE5\\OPEProject\\templates\\mail\\student-ending.html.twig");
    }
}
