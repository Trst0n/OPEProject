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

/* partials/doc-sidenav.html */
class __TwigTemplate_6d5ee7e8aef9319563f86344332f3747 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/doc-sidenav.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/doc-sidenav.html"));

        // line 1
        echo "<div class=\"doc-sidebar\">
  <div class=\"nav-scroller mt-n4 mt-lg-0\" >
  <nav class=\"navbar navbar-expand-lg navbar-light\">
        <div class=\"collapse navbar-collapse\">
          <ul class=\"navbar-nav flex-column\" id=\"sidebarnav\">
              <li class=\"nav-item\"><a href=\"index.html\" class=\"nav-link\">Introduction</a></li>
              <li class=\"nav-item\"><a href=\"gulp.html\" class=\"nav-link\">Gulp</a></li>

              <li class=\"nav-item\"><a href=\"changelog.html\" class=\"nav-link\">Changelog</a>
              </li>
              <li class=\"nav-item\"><a href=\"credits.html\" class=\"nav-link\">Credits</a></li>

              <li class=\"navbar-header\">
                <h5 class=\"heading\">Utilities</h5>
              </li>
              <li class=\"nav-item\">
                <a href=\"borders.html\" class=\"nav-link\">
                  Borders
                </a>
              </li>
              <li class=\"nav-item\"><a href=\"colored-links.html\" class=\"nav-link\"> Colored Links </a></li>
              <li class=\"nav-item\"><a href=\"opacity.html\" class=\"nav-link\"> Opacity </a></li>
              <li class=\"nav-item\"><a href=\"ratio.html\" class=\"nav-link\"> Ratio </a></li>
              <li class=\"nav-item\"><a href=\"stacks.html\" class=\"nav-link\"> Stacks </a></li>             
              <li class=\"nav-item\"><a href=\"text.html\" class=\"nav-link\"> Text </a></li>
              <li class=\"nav-item\"><a href=\"text-truncation.html\" class=\"nav-link\"> Text truncation </a></li>
              <li class=\"nav-item\"><a href=\"vertical-rule.html\" class=\"nav-link\"> Vertical rule </a></li>
              <li class=\"nav-item\"><a href=\"colors.html\" class=\"nav-link\">Colors</a></li>
              <li class=\"nav-item\"><a href=\"shadows.html\" class=\"nav-link\">Shadows</a></li>
              <li class=\"nav-item\"><a href=\"typography.html\" class=\"nav-link\">Typography</a></li>
              <li class=\"navbar-header\">
                <h5 class=\"heading\">Components</h5>
              </li>
              <li class=\"nav-item\">
                <a href=\"accordions.html\" class=\"nav-link\">
                  Accordions
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"alerts.html\" class=\"nav-link\">
                  Alerts
                </a>
              </li>
              
              <li class=\"nav-item\">
                <a href=\"badge.html\" class=\"nav-link\">
                  Badge
                </a>
              </li>
    
              <li class=\"nav-item\">
                <a href=\"breadcrumb.html\" class=\"nav-link\">
                  Breadcrumb
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"buttons.html\" class=\"nav-link\">
                  Buttons
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"button-group.html\" class=\"nav-link\">
                  Button group
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"card.html\" class=\"nav-link\">
                  Card
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"carousel.html\" class=\"nav-link\">
                  Carousel
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"close-button.html\" class=\"nav-link\">
                  Close Button
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"collapse.html\" class=\"nav-link\">
                  Collapse
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"dropdowns.html\" class=\"nav-link\">
                  Dropdowns
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"forms.html\" class=\"nav-link\">
                  Forms
                </a>
              </li>
           
              <li class=\"nav-item\">
                <a href=\"list-group.html\" class=\"nav-link\">
                  List group
                </a>
              </li>
    
              <li class=\"nav-item\">
                <a href=\"modal.html\" class=\"nav-link\">
                  Modal
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"navs-tabs.html\" class=\"nav-link\">
                  Navs and tabs
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"navbar.html\" class=\"nav-link\">
                  Navbar
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"offcanvas.html\" class=\"nav-link\">
                  Offcanvas
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pagination.html\" class=\"nav-link\">
                  Pagination
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"placeholders.html\" class=\"nav-link\">
                  Placeholders
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"popovers.html\" class=\"nav-link\">
                  Popovers
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"progress.html\" class=\"nav-link\">
                  Progress
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"scrollspy.html\" class=\"nav-link\">
                  Scrollspy
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"spinners.html\" class=\"nav-link\">
                  Spinners
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"tables.html\" class=\"nav-link\">
                  Tables
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"toasts.html\" class=\"nav-link\">
                  Toasts
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"tooltips.html\" class=\"nav-link\">
                  Tooltips
                </a>
              </li>
             
          </ul>

        </div>

    </nav>
  </div>
  </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/doc-sidenav.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"doc-sidebar\">
  <div class=\"nav-scroller mt-n4 mt-lg-0\" >
  <nav class=\"navbar navbar-expand-lg navbar-light\">
        <div class=\"collapse navbar-collapse\">
          <ul class=\"navbar-nav flex-column\" id=\"sidebarnav\">
              <li class=\"nav-item\"><a href=\"index.html\" class=\"nav-link\">Introduction</a></li>
              <li class=\"nav-item\"><a href=\"gulp.html\" class=\"nav-link\">Gulp</a></li>

              <li class=\"nav-item\"><a href=\"changelog.html\" class=\"nav-link\">Changelog</a>
              </li>
              <li class=\"nav-item\"><a href=\"credits.html\" class=\"nav-link\">Credits</a></li>

              <li class=\"navbar-header\">
                <h5 class=\"heading\">Utilities</h5>
              </li>
              <li class=\"nav-item\">
                <a href=\"borders.html\" class=\"nav-link\">
                  Borders
                </a>
              </li>
              <li class=\"nav-item\"><a href=\"colored-links.html\" class=\"nav-link\"> Colored Links </a></li>
              <li class=\"nav-item\"><a href=\"opacity.html\" class=\"nav-link\"> Opacity </a></li>
              <li class=\"nav-item\"><a href=\"ratio.html\" class=\"nav-link\"> Ratio </a></li>
              <li class=\"nav-item\"><a href=\"stacks.html\" class=\"nav-link\"> Stacks </a></li>             
              <li class=\"nav-item\"><a href=\"text.html\" class=\"nav-link\"> Text </a></li>
              <li class=\"nav-item\"><a href=\"text-truncation.html\" class=\"nav-link\"> Text truncation </a></li>
              <li class=\"nav-item\"><a href=\"vertical-rule.html\" class=\"nav-link\"> Vertical rule </a></li>
              <li class=\"nav-item\"><a href=\"colors.html\" class=\"nav-link\">Colors</a></li>
              <li class=\"nav-item\"><a href=\"shadows.html\" class=\"nav-link\">Shadows</a></li>
              <li class=\"nav-item\"><a href=\"typography.html\" class=\"nav-link\">Typography</a></li>
              <li class=\"navbar-header\">
                <h5 class=\"heading\">Components</h5>
              </li>
              <li class=\"nav-item\">
                <a href=\"accordions.html\" class=\"nav-link\">
                  Accordions
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"alerts.html\" class=\"nav-link\">
                  Alerts
                </a>
              </li>
              
              <li class=\"nav-item\">
                <a href=\"badge.html\" class=\"nav-link\">
                  Badge
                </a>
              </li>
    
              <li class=\"nav-item\">
                <a href=\"breadcrumb.html\" class=\"nav-link\">
                  Breadcrumb
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"buttons.html\" class=\"nav-link\">
                  Buttons
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"button-group.html\" class=\"nav-link\">
                  Button group
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"card.html\" class=\"nav-link\">
                  Card
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"carousel.html\" class=\"nav-link\">
                  Carousel
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"close-button.html\" class=\"nav-link\">
                  Close Button
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"collapse.html\" class=\"nav-link\">
                  Collapse
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"dropdowns.html\" class=\"nav-link\">
                  Dropdowns
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"forms.html\" class=\"nav-link\">
                  Forms
                </a>
              </li>
           
              <li class=\"nav-item\">
                <a href=\"list-group.html\" class=\"nav-link\">
                  List group
                </a>
              </li>
    
              <li class=\"nav-item\">
                <a href=\"modal.html\" class=\"nav-link\">
                  Modal
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"navs-tabs.html\" class=\"nav-link\">
                  Navs and tabs
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"navbar.html\" class=\"nav-link\">
                  Navbar
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"offcanvas.html\" class=\"nav-link\">
                  Offcanvas
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pagination.html\" class=\"nav-link\">
                  Pagination
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"placeholders.html\" class=\"nav-link\">
                  Placeholders
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"popovers.html\" class=\"nav-link\">
                  Popovers
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"progress.html\" class=\"nav-link\">
                  Progress
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"scrollspy.html\" class=\"nav-link\">
                  Scrollspy
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"spinners.html\" class=\"nav-link\">
                  Spinners
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"tables.html\" class=\"nav-link\">
                  Tables
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"toasts.html\" class=\"nav-link\">
                  Toasts
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"tooltips.html\" class=\"nav-link\">
                  Tooltips
                </a>
              </li>
             
          </ul>

        </div>

    </nav>
  </div>
  </div>", "partials/doc-sidenav.html", "/home/tristan/Desktop/OPE/OPEProject/templates/partials/doc-sidenav.html");
    }
}
