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

/* partials/head.html */
class __TwigTemplate_de211708a39e632a76665200d301250f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/head.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/head.html"));

        // line 1
        echo "<!-- Required meta tags -->
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">



<!-- Favicon icon-->
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"@@webRoot/assets/images/favicon/favicon.ico\">

<!-- Libs CSS -->


<link href=\"@@webRoot/node_modules/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">
<link href=\"@@webRoot/node_modules/dropzone/dist/dropzone.css\"  rel=\"stylesheet\">
<link href=\"@@webRoot/node_modules/@mdi/font/css/materialdesignicons.min.css\" rel=\"stylesheet\" />
<link href=\"@@webRoot/node_modules/prismjs/themes/prism-okaidia.css\" rel=\"stylesheet\">








<!-- Theme CSS -->
<!-- build:css @@webRoot/assets/css/theme.min.css -->
<link rel=\"stylesheet\" href=\"@@webRoot/assets/css/theme.css\">
<!-- endbuild -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/head.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Required meta tags -->
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">



<!-- Favicon icon-->
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"@@webRoot/assets/images/favicon/favicon.ico\">

<!-- Libs CSS -->


<link href=\"@@webRoot/node_modules/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">
<link href=\"@@webRoot/node_modules/dropzone/dist/dropzone.css\"  rel=\"stylesheet\">
<link href=\"@@webRoot/node_modules/@mdi/font/css/materialdesignicons.min.css\" rel=\"stylesheet\" />
<link href=\"@@webRoot/node_modules/prismjs/themes/prism-okaidia.css\" rel=\"stylesheet\">








<!-- Theme CSS -->
<!-- build:css @@webRoot/assets/css/theme.min.css -->
<link rel=\"stylesheet\" href=\"@@webRoot/assets/css/theme.css\">
<!-- endbuild -->", "partials/head.html", "/home/tristan/Desktop/OPE/OPEProject/templates/partials/head.html");
    }
}
