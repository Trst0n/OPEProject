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

/* dashboard/error/error404.html.twig */
class __TwigTemplate_ab570c128c4e951ba0fdc62b6b8a7a79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/error/error404.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/error/error404.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "dashboard/error/error404.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Parrains";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Error page -->
    <div class=\"container min-vh-100 d-flex justify-content-center
      align-items-center\">
        <!-- row -->
        <div class=\"row\">
            <!-- col -->
            <div class=\"col-12\">
                <!-- content -->
                <div class=\"text-center\">
                    <div class=\"mb-3\">
                        <!-- img -->
                        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/error/404-error-img.e939d109.png"), "html", null, true);
        echo "\" alt=\"\"
                             class=\"img-fluid\">
                    </div>
                    <!-- text -->
                    <h1 class=\"display-4 fw-bold\">Oops! cette page n'existe pas.</h1>
                    <p class=\"mb-4\">Or simply leverage the expertise of our consultation
                        team.</p>
                    <!-- button -->
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\" class=\"btn btn-primary\">Retour</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/error/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  107 => 17,  94 => 6,  84 => 5,  65 => 3,  55 => 5,  52 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include('base.html.twig') %}

{% block title %}Parrains{% endblock %}

{% block body %}
    <!-- Error page -->
    <div class=\"container min-vh-100 d-flex justify-content-center
      align-items-center\">
        <!-- row -->
        <div class=\"row\">
            <!-- col -->
            <div class=\"col-12\">
                <!-- content -->
                <div class=\"text-center\">
                    <div class=\"mb-3\">
                        <!-- img -->
                        <img src=\"{{ asset('build/images/error/404-error-img.e939d109.png') }}\" alt=\"\"
                             class=\"img-fluid\">
                    </div>
                    <!-- text -->
                    <h1 class=\"display-4 fw-bold\">Oops! cette page n'existe pas.</h1>
                    <p class=\"mb-4\">Or simply leverage the expertise of our consultation
                        team.</p>
                    <!-- button -->
                    <a href=\"{{ path('app_dashboard') }}\" class=\"btn btn-primary\">Retour</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "dashboard/error/error404.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/error/error404.html.twig");
    }
}
