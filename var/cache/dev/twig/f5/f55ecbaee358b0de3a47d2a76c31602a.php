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

/* partials/doc-navbar.html */
class __TwigTemplate_73e1a7f70e58ea24f956c68273329c1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/doc-navbar.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/doc-navbar.html"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-white border-bottom position-fixed w-100  \" style=\"z-index: 2;\">
   <div class=\"container-fluid \">
     <a class=\"navbar-brand\" href=\"@@webRoot/index.html\"><img src=\"/assets/images/brand/logo/logo-primary.svg\" alt=\"\"></a>
     <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
       <span class=\"navbar-toggler-icon\"></span>
     </button>


     <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
       <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
         <li class=\"nav-item\">
           <a class=\"nav-link active\" href=\"/index.html\">Home</a>
         </li>
         <li class=\"nav-item\">
           <a class=\"nav-link\" href=\"@@webRoot/docs/accordions.html\">Components</a>
         </li>

         <li class=\"nav-item\">
           <a class=\"nav-link\" href=\"@@webRoot/docs/index.html\">Docs</a>
         </li>
       </ul>
       <div class=\"ms-auto d-flex\">
         <a href=\"https://github.com/codescandy/Dash-UI\" class=\"btn btn-primary d-flex align-items-center\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" class=\"bi bi-github me-2\" viewBox=\"0 0 16 16\">
          <path d=\"M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z\"/>
        </svg>Github</a>

       </div>

     </div>
   </div>
 </nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/doc-navbar.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-white border-bottom position-fixed w-100  \" style=\"z-index: 2;\">
   <div class=\"container-fluid \">
     <a class=\"navbar-brand\" href=\"@@webRoot/index.html\"><img src=\"/assets/images/brand/logo/logo-primary.svg\" alt=\"\"></a>
     <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
       <span class=\"navbar-toggler-icon\"></span>
     </button>


     <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
       <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
         <li class=\"nav-item\">
           <a class=\"nav-link active\" href=\"/index.html\">Home</a>
         </li>
         <li class=\"nav-item\">
           <a class=\"nav-link\" href=\"@@webRoot/docs/accordions.html\">Components</a>
         </li>

         <li class=\"nav-item\">
           <a class=\"nav-link\" href=\"@@webRoot/docs/index.html\">Docs</a>
         </li>
       </ul>
       <div class=\"ms-auto d-flex\">
         <a href=\"https://github.com/codescandy/Dash-UI\" class=\"btn btn-primary d-flex align-items-center\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" class=\"bi bi-github me-2\" viewBox=\"0 0 16 16\">
          <path d=\"M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z\"/>
        </svg>Github</a>

       </div>

     </div>
   </div>
 </nav>", "partials/doc-navbar.html", "/home/tristan/Desktop/OPE/OPEProject/templates/partials/doc-navbar.html");
    }
}
