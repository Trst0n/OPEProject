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

/* partials/header.html.twig */
class __TwigTemplate_f8fd44ad9266c88a865f881ab2c04508 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<div class=\"header @@classList\">
  <!-- navbar -->
  <nav class=\"navbar-classic navbar navbar-expand-lg\">
    <a id=\"nav-toggle\" href=\"#\"><i style=\"font-size: 130%\" class=\"bi bi-list\"></i></a>
    <div class=\"ms-lg-3 d-none d-md-none d-lg-block\">
      <!-- Form -->
      <form class=\"d-flex align-items-center\">
        <input type=\"search\" class=\"form-control\" placeholder=\"Search\" />
      </form>
    </div>
    <!--Navbar nav -->
    <ul class=\"navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap\">
      <li class=\"dropdown stopevent\">
        <a  class=\"
          indicator-primary text-muted\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_log");
        echo "\" role=\"button\"
          id=\"dropdownNotification\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\"
          aria-expanded=\"false\">
            <i style=\"font-size: 140%\" class=\"bi bi-bell-fill\">   &nbsp; </i>

          <i class=\"icon-xs\" data-feather=\"bell\"></i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end\"
          aria-labelledby=\"dropdownNotification\">
          <div>
            <div class=\"border-bottom px-3 pt-2 pb-3 d-flex
              justify-content-between align-items-center\">
              <p class=\"mb-0 text-dark fw-medium fs-4\">Notifications</p>
              <a href=\"#\" class=\"text-muted\">
                <span>
                  <i class=\"me-1 icon-xxs\" data-feather=\"settings\"></i>
                </span>
              </a>
            </div>
            <!-- List group -->
            <ul class=\"list-group list-group-flush notification-list-scroll\"  style=\"cursor: pointer\">
              <!-- List group item -->

              ";
        // line 38
        $context["logs"] = $this->extensions['App\Twig\AppExtension']->getFile("../var/log/history.log");
        // line 39
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 40
            echo "                <li class=\"list-group-item bg-light\">
                    <h5 class=\" mb-1\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], 0, [], "array", false, false, false, 41), "html", null, true);
            echo "</h5>
                    <p class=\"mb-0 text-muted\">
                      ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], 1, [], "array", false, false, false, 43), "html", null, true);
            echo "
                    </p>
                 </li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                  <li class=\"list-group-item bg-light text-center pb-10 pt-10\" >
                    <h4 class=\" mb-1\">Aucune notification</h4>
                  </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </ul>
            <div class=\"border-top px-3 py-2 text-center\">
              <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_log");
        echo "\" class=\"text-inherit fw-semi-bold\">
                Voir toutes les notifications
              </a>
            </div>
          </div>
        </div>
      </li>
      <!-- List -->
      <li class=\"dropdown ms-2\">
        <a  href=\"#\" role=\"button\" id=\"dropdownUser\"
          data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

            <i style=\"font-size: 140%\" class=\"bi bi-person-circle\"> &nbsp; </i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-end\"
          aria-labelledby=\"dropdownUser\">
          <div class=\"px-4 pb-0 pt-2\">


            <div class=\"lh-1 \">
              <h5 class=\"mb-1\"> ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "userIdentifier", [], "any", false, false, false, 73), "html", null, true);
        echo "</h5>
              <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_profile");
        echo "\" class=\"text-inherit fs-6\">Voir le profil</a>
            </div>
            <div class=\" dropdown-divider mt-3 mb-2\"></div>
          </div>

          <ul class=\"list-unstyled\">
            <li>
              <a class=\"dropdown-item\"
                href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_log");
        echo "\">
                <i class=\"me-2 icon-xxs dropdown-item-icon\"
                  data-feather=\"activity\"></i>Historique
              </a>
            </li>


            <li>
              <a class=\"dropdown-item\" href=\"#\">
                <i class=\"me-2 icon-xxs dropdown-item-icon\"
                  data-feather=\"settings\"></i>Paramètres
              </a>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                <i class=\"me-2 icon-xxs dropdown-item-icon\"
                  data-feather=\"power\"></i>Déconnexion
              </a>
            </li>
          </ul>

        </div>
      </li>
    </ul>
  </nav>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 96,  161 => 82,  150 => 74,  146 => 73,  123 => 53,  119 => 51,  110 => 47,  101 => 43,  96 => 41,  93 => 40,  87 => 39,  85 => 38,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header @@classList\">
  <!-- navbar -->
  <nav class=\"navbar-classic navbar navbar-expand-lg\">
    <a id=\"nav-toggle\" href=\"#\"><i style=\"font-size: 130%\" class=\"bi bi-list\"></i></a>
    <div class=\"ms-lg-3 d-none d-md-none d-lg-block\">
      <!-- Form -->
      <form class=\"d-flex align-items-center\">
        <input type=\"search\" class=\"form-control\" placeholder=\"Search\" />
      </form>
    </div>
    <!--Navbar nav -->
    <ul class=\"navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap\">
      <li class=\"dropdown stopevent\">
        <a  class=\"
          indicator-primary text-muted\" href=\"{{ path('app_dashboard_log') }}\" role=\"button\"
          id=\"dropdownNotification\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\"
          aria-expanded=\"false\">
            <i style=\"font-size: 140%\" class=\"bi bi-bell-fill\">   &nbsp; </i>

          <i class=\"icon-xs\" data-feather=\"bell\"></i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end\"
          aria-labelledby=\"dropdownNotification\">
          <div>
            <div class=\"border-bottom px-3 pt-2 pb-3 d-flex
              justify-content-between align-items-center\">
              <p class=\"mb-0 text-dark fw-medium fs-4\">Notifications</p>
              <a href=\"#\" class=\"text-muted\">
                <span>
                  <i class=\"me-1 icon-xxs\" data-feather=\"settings\"></i>
                </span>
              </a>
            </div>
            <!-- List group -->
            <ul class=\"list-group list-group-flush notification-list-scroll\"  style=\"cursor: pointer\">
              <!-- List group item -->

              {% set logs = getfile('../var/log/history.log') %}
              {% for log in logs %}
                <li class=\"list-group-item bg-light\">
                    <h5 class=\" mb-1\">{{ log[0] }}</h5>
                    <p class=\"mb-0 text-muted\">
                      {{ log[1] }}
                    </p>
                 </li>
                {% else %}
                  <li class=\"list-group-item bg-light text-center pb-10 pt-10\" >
                    <h4 class=\" mb-1\">Aucune notification</h4>
                  </li>
              {% endfor %}
            </ul>
            <div class=\"border-top px-3 py-2 text-center\">
              <a href=\"{{ path('app_dashboard_log') }}\" class=\"text-inherit fw-semi-bold\">
                Voir toutes les notifications
              </a>
            </div>
          </div>
        </div>
      </li>
      <!-- List -->
      <li class=\"dropdown ms-2\">
        <a  href=\"#\" role=\"button\" id=\"dropdownUser\"
          data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">

            <i style=\"font-size: 140%\" class=\"bi bi-person-circle\"> &nbsp; </i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-end\"
          aria-labelledby=\"dropdownUser\">
          <div class=\"px-4 pb-0 pt-2\">


            <div class=\"lh-1 \">
              <h5 class=\"mb-1\"> {{ app.user.userIdentifier }}</h5>
              <a href=\"{{ path('app_dashboard_profile') }}\" class=\"text-inherit fs-6\">Voir le profil</a>
            </div>
            <div class=\" dropdown-divider mt-3 mb-2\"></div>
          </div>

          <ul class=\"list-unstyled\">
            <li>
              <a class=\"dropdown-item\"
                href=\"{{ path('app_dashboard_log') }}\">
                <i class=\"me-2 icon-xxs dropdown-item-icon\"
                  data-feather=\"activity\"></i>Historique
              </a>
            </li>


            <li>
              <a class=\"dropdown-item\" href=\"#\">
                <i class=\"me-2 icon-xxs dropdown-item-icon\"
                  data-feather=\"settings\"></i>Paramètres
              </a>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                <i class=\"me-2 icon-xxs dropdown-item-icon\"
                  data-feather=\"power\"></i>Déconnexion
              </a>
            </li>
          </ul>

        </div>
      </li>
    </ul>
  </nav>
</div>", "partials/header.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/partials/header.html.twig");
    }
}
