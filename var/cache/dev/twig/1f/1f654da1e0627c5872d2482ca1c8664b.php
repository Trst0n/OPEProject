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

/* partials/navbar-vertical.html.twig */
class __TwigTemplate_0789c8eb5a8cdfa42b62049b2c57da9c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar-vertical.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar-vertical.html.twig"));

        // line 1
        echo " <!-- Sidebar -->
 <nav class=\"navbar-vertical navbar\">
    <div class=\"nav-scroller\">
        <!-- Brand logo -->
";
        // line 8
        echo "        <br><br>
        <!-- Navbar nav -->
        <ul class=\"navbar-nav flex-column\" id=\"sideNavbar\">
            <li class=\"nav-item\">
                <a class=\"nav-link has-arrow @@if (context.page ===  'dashboard') { active }\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
                    <i data-feather=\"home\" class=\"nav-icon icon-xs me-2\" style=\"font-size: 20px\">DASHBOARD</i>
                </a>
            </li>


         <!-- Nav item -->
         <li class=\"nav-item\">
            <div class=\"navbar-heading\">Entités</div>
        </li>


             <!-- Nav item -->
             <li class=\"nav-item\">
                <a class=\"nav-link has-arrow @@if (context.page_group !== 'pages') { collapsed }\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users");
        echo "\" data-bs-toggle=\"collapse\" data-bs-target=\"#navPages\" aria-expanded=\"false\" aria-controls=\"navPages\">
                    <i
                    data-feather=\"layers\"

                    class=\"nav-icon icon-xs me-2\">
                </i> Utilisateurs
                </a>

                <div id=\"navPages\" class=\"collapse @@if (context.page_group === 'pages') { show }\" data-bs-parent=\"#sideNavbar\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow  @@if (context.page === 'settings') { active } \"  href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_users");
        echo "\" >Tous les utilisateurs </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow  @@if (context.page === 'settings') { active } \"  href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_students");
        echo "\" >Etudiants </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow  @@if (context.page === 'settings') { active } \"  href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_sponsors");
        echo "\" >Parrains </a>
                        </li>
                    </ul>
                </div>

                </li>
                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page_group !== 'authentication') { collapsed }\" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navAuthentication\" aria-expanded=\"false\" aria-controls=\"navAuthentication\">
                                <i data-feather=\"lock\" class=\"nav-icon icon-xs me-2\">
                                </i> Matchs & Parrainages
                            </a>
                            <div id=\"navAuthentication\" class=\"collapse @@if (context.page_group === 'authentication') { show }\" data-bs-parent=\"#sideNavbar\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link @@if (context.page === 'signin') { active }\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_sponsorships");
        echo "\"> Parrainages</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link @@if (context.page === 'signup') { active } \" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_matches");
        echo "\"> Matchs</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <div class=\"navbar-heading\">Gestion données</div>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/accordions.html\" >
                                <i data-feather=\"package\" class=\"nav-icon icon-xs me-2\" ></i>  Cursus
                            </a>
                         </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/accordions.html\" >
                                <i data-feather=\"package\" class=\"nav-icon icon-xs me-2\" ></i>  Etablissement
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/accordions.html\" >
                                <i data-feather=\"package\" class=\"nav-icon icon-xs me-2\" ></i>  Langues
                            </a>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <div class=\"navbar-heading\">Accessibilité</div>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/index.html\" >
                                <i data-feather=\"clipboard\" class=\"nav-icon icon-xs me-2\" ></i>  Administrateurs
                            </a>
                         </li>
                         <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/changelog.html\" >
                                <i data-feather=\"git-pull-request\" class=\"nav-icon icon-xs me-2\" ></i>  Docs
                            </a>
                         </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/changelog.html\" >
                                <i data-feather=\"git-pull-request\" class=\"nav-icon icon-xs me-2\" ></i>  Historique
                            </a>
                        </li>




                    </ul>

                </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/navbar-vertical.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 61,  116 => 58,  98 => 43,  92 => 40,  86 => 37,  72 => 26,  55 => 12,  49 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- Sidebar -->
 <nav class=\"navbar-vertical navbar\">
    <div class=\"nav-scroller\">
        <!-- Brand logo -->
{#        <a class=\"navbar-brand\" href=\"@@webRoot/index.html\">#}
{#            <img src=\"{{ asset('build/images/brand/logo/logo.svg') }}\" alt=\"\" />#}
{#        </a>#}
        <br><br>
        <!-- Navbar nav -->
        <ul class=\"navbar-nav flex-column\" id=\"sideNavbar\">
            <li class=\"nav-item\">
                <a class=\"nav-link has-arrow @@if (context.page ===  'dashboard') { active }\" href=\"{{ path('app_dashboard') }}\">
                    <i data-feather=\"home\" class=\"nav-icon icon-xs me-2\" style=\"font-size: 20px\">DASHBOARD</i>
                </a>
            </li>


         <!-- Nav item -->
         <li class=\"nav-item\">
            <div class=\"navbar-heading\">Entités</div>
        </li>


             <!-- Nav item -->
             <li class=\"nav-item\">
                <a class=\"nav-link has-arrow @@if (context.page_group !== 'pages') { collapsed }\" href=\"{{ path('app_dashboard_users') }}\" data-bs-toggle=\"collapse\" data-bs-target=\"#navPages\" aria-expanded=\"false\" aria-controls=\"navPages\">
                    <i
                    data-feather=\"layers\"

                    class=\"nav-icon icon-xs me-2\">
                </i> Utilisateurs
                </a>

                <div id=\"navPages\" class=\"collapse @@if (context.page_group === 'pages') { show }\" data-bs-parent=\"#sideNavbar\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow  @@if (context.page === 'settings') { active } \"  href=\"{{ path('app_dashboard_users') }}\" >Tous les utilisateurs </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow  @@if (context.page === 'settings') { active } \"  href=\"{{ path('app_dashboard_students') }}\" >Etudiants </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow  @@if (context.page === 'settings') { active } \"  href=\"{{ path('app_dashboard_sponsors')}}\" >Parrains </a>
                        </li>
                    </ul>
                </div>

                </li>
                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page_group !== 'authentication') { collapsed }\" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navAuthentication\" aria-expanded=\"false\" aria-controls=\"navAuthentication\">
                                <i data-feather=\"lock\" class=\"nav-icon icon-xs me-2\">
                                </i> Matchs & Parrainages
                            </a>
                            <div id=\"navAuthentication\" class=\"collapse @@if (context.page_group === 'authentication') { show }\" data-bs-parent=\"#sideNavbar\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link @@if (context.page === 'signin') { active }\" href=\"{{ path('app_sponsorship_sponsorships')}}\"> Parrainages</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link @@if (context.page === 'signup') { active } \" href=\"{{ path('app_dashboard_matches')}}\"> Matchs</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <div class=\"navbar-heading\">Gestion données</div>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/accordions.html\" >
                                <i data-feather=\"package\" class=\"nav-icon icon-xs me-2\" ></i>  Cursus
                            </a>
                         </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/accordions.html\" >
                                <i data-feather=\"package\" class=\"nav-icon icon-xs me-2\" ></i>  Etablissement
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/accordions.html\" >
                                <i data-feather=\"package\" class=\"nav-icon icon-xs me-2\" ></i>  Langues
                            </a>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <div class=\"navbar-heading\">Accessibilité</div>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/index.html\" >
                                <i data-feather=\"clipboard\" class=\"nav-icon icon-xs me-2\" ></i>  Administrateurs
                            </a>
                         </li>
                         <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/changelog.html\" >
                                <i data-feather=\"git-pull-request\" class=\"nav-icon icon-xs me-2\" ></i>  Docs
                            </a>
                         </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/changelog.html\" >
                                <i data-feather=\"git-pull-request\" class=\"nav-icon icon-xs me-2\" ></i>  Historique
                            </a>
                        </li>




                    </ul>

                </div>
</nav>", "partials/navbar-vertical.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/partials/navbar-vertical.html.twig");
    }
}
