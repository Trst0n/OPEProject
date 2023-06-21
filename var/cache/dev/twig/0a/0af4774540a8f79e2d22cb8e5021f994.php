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

/* partials/scripts.html */
class __TwigTemplate_b1751be92f3ae71b914dde8d74e6ae5c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scripts.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scripts.html"));

        // line 1
        echo "<!-- Libs JS -->
<script src=\"@@webRoot/node_modules/jquery/dist/jquery.min.js\"></script>
<script src=\"@@webRoot/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"@@webRoot/node_modules/jquery-slimscroll/jquery.slimscroll.min.js\"></script>
<script src=\"@@webRoot/node_modules/feather-icons/dist/feather.min.js\"></script>
<script src=\"@@webRoot/node_modules/prismjs/prism.js\"></script>
<script src=\"@@webRoot/node_modules/apexcharts/dist/apexcharts.min.js\"></script>
<script src=\"@@webRoot/node_modules/dropzone/dist/min/dropzone.min.js\"></script>
<script src=\"@@webRoot/node_modules/prismjs/plugins/toolbar/prism-toolbar.min.js\"></script>
<script src=\"@@webRoot/node_modules/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js\"></script>




<!-- Theme JS -->
<!-- build:js @@webRoot/assets/js/theme.min.js -->
<script src=\"@@webRoot/assets/js/main.js\"></script>
<script src=\"@@webRoot/assets/js/feather.js\"></script>
<script src=\"@@webRoot/assets/js/sidebarMenu.js\"></script>



<!-- endbuild -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/scripts.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Libs JS -->
<script src=\"@@webRoot/node_modules/jquery/dist/jquery.min.js\"></script>
<script src=\"@@webRoot/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"@@webRoot/node_modules/jquery-slimscroll/jquery.slimscroll.min.js\"></script>
<script src=\"@@webRoot/node_modules/feather-icons/dist/feather.min.js\"></script>
<script src=\"@@webRoot/node_modules/prismjs/prism.js\"></script>
<script src=\"@@webRoot/node_modules/apexcharts/dist/apexcharts.min.js\"></script>
<script src=\"@@webRoot/node_modules/dropzone/dist/min/dropzone.min.js\"></script>
<script src=\"@@webRoot/node_modules/prismjs/plugins/toolbar/prism-toolbar.min.js\"></script>
<script src=\"@@webRoot/node_modules/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js\"></script>




<!-- Theme JS -->
<!-- build:js @@webRoot/assets/js/theme.min.js -->
<script src=\"@@webRoot/assets/js/main.js\"></script>
<script src=\"@@webRoot/assets/js/feather.js\"></script>
<script src=\"@@webRoot/assets/js/sidebarMenu.js\"></script>



<!-- endbuild -->", "partials/scripts.html", "/home/tristan/Desktop/OPE/OPEProject/templates/partials/scripts.html");
    }
}
