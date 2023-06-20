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
class __TwigTemplate_ae54e206c1f2867ecdb313a7de6fa014 extends Template
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
            <div class=\"navbar-heading\">Entité</div>
        </li>


             <!-- Nav item -->
             <li class=\"nav-item\">
                <a class=\"nav-link has-arrow @@if (context.page_group !== 'pages') { collapsed }\" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navPages\" aria-expanded=\"false\" aria-controls=\"navPages\">
                    <i
                    data-feather=\"layers\"

                    class=\"nav-icon icon-xs me-2\">
                </i> Student
                </a>

                <div id=\"navPages\" class=\"collapse @@if (context.page_group === 'pages') { show }\" data-bs-parent=\"#sideNavbar\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link @@if (context.page === 'profile') { active }\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_index");
        echo "\">
                                List
                </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow  @@if (context.page === 'settings') { active } \"  href=\"@@webRoot/pages/settings.html\" >
                                Settings
                                </a>

                        </li>
                    </ul>
                </div>

                </li>


                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page_group !== 'authentication') { collapsed }\" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navAuthentication\" aria-expanded=\"false\" aria-controls=\"navAuthentication\">
                                <i data-feather=\"lock\" class=\"nav-icon icon-xs me-2\">
                                </i> Authentication
                            </a>
                            <div id=\"navAuthentication\" class=\"collapse @@if (context.page_group === 'authentication') { show }\" data-bs-parent=\"#sideNavbar\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link @@if (context.page === 'signin') { active }\" href=\"@@webRoot/pages/sign-in.html\"> Sign In</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link @@if (context.page === 'signup') { active } \" href=\"@@webRoot/pages/sign-up.html\"> Sign Up</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link @@if (context.page === 'forgetpassword') { active }\" href=\"@@webRoot/pages/forget-password.html\">
                                             Forget Password
                                </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link @@if (context.page === 'layouts') { active }\" href=\"@@webRoot/pages/layout.html\">
                                <i
                                    data-feather=\"sidebar\"

                                    class=\"nav-icon icon-xs me-2\"
                                >
                                </i
                                      >
                                Layouts
                            </a>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <div class=\"navbar-heading\">UI Components</div>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/accordions.html\" >
                                <i data-feather=\"package\" class=\"nav-icon icon-xs me-2\" >
                            </i>  Components
                            </a>
                         </li>
                  

                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page_group !== 'menulevel') { collapsed }\" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navMenuLevel\" aria-expanded=\"false\" aria-controls=\"navMenuLevel\">
                                <i
                                data-feather=\"corner-left-down\"

                                class=\"nav-icon icon-xs me-2\"
                            >
                            </i
                                      > Menu Level
                            </a>
                            <div id=\"navMenuLevel\" class=\"collapse @@if (context.page_group === 'menulevel') { show }\" data-bs-parent=\"#sideNavbar\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link has-arrow @@if (context.page === 'twolevel') { active }\" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navMenuLevelSecond\" aria-expanded=\"false\" aria-controls=\"navMenuLevelSecond\">
                                    Two Level
                                </a>
                                        <div id=\"navMenuLevelSecond\" class=\"collapse\" data-bs-parent=\"#navMenuLevel\">
                                            <ul class=\"nav flex-column\">
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link @@if (context.page === 'navitem1') { active }\" href=\"#!\">  NavItem 1</a>
                                                </li>
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link @@if (context.page === 'navitem2') { active }\" href=\"#!\">  NavItem 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link has-arrow @@if (context.page_group !== 'threelevel') { collapsed } \" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navMenuLevelThree\" aria-expanded=\"false\" aria-controls=\"navMenuLevelThree\">
                                    Three Level
                                </a>
                                        <div id=\"navMenuLevelThree\" class=\"collapse @@if (context.page_group === 'threelevel') { show }\" data-bs-parent=\"#navMenuLevel\">
                                            <ul class=\"nav flex-column\">
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link @@if (context.page_group !== 'navitemthree1') { collapsed }\" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navMenuLevelThreeOne\" aria-expanded=\"false\" aria-controls=\"navMenuLevelThreeOne\">
                                                         NavItem 1
                                            </a>
                                                    <div id=\"navMenuLevelThreeOne\" class=\"collapse collapse @@if (context.page_group === 'navitemthree1') { show }\" data-bs-parent=\"#navMenuLevelThree\">
                                                        <ul class=\"nav flex-column\">
                                                            <li class=\"nav-item\">
                                                                <a class=\"nav-link @@if (context.page === 'navchilitem') { active }\" href=\"#!\">
                                                                     NavChild Item 1
                                                        </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link @@if (context.page === 'navitem2') { active }\" href=\"#!\">  Nav Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                                         <!-- Nav item -->
                        <li class=\"nav-item\">
                            <div class=\"navbar-heading\">Documentation</div>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/index.html\" >
                                <i data-feather=\"clipboard\" class=\"nav-icon icon-xs me-2\" >
                            </i>  Docs
                            </a>
                         </li>
                         <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/changelog.html\" >
                                <i data-feather=\"git-pull-request\" class=\"nav-icon icon-xs me-2\" >
                            </i>  Changelog
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
        return array (  83 => 37,  55 => 12,  49 => 8,  43 => 1,);
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
            <div class=\"navbar-heading\">Entité</div>
        </li>


             <!-- Nav item -->
             <li class=\"nav-item\">
                <a class=\"nav-link has-arrow @@if (context.page_group !== 'pages') { collapsed }\" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navPages\" aria-expanded=\"false\" aria-controls=\"navPages\">
                    <i
                    data-feather=\"layers\"

                    class=\"nav-icon icon-xs me-2\">
                </i> Student
                </a>

                <div id=\"navPages\" class=\"collapse @@if (context.page_group === 'pages') { show }\" data-bs-parent=\"#sideNavbar\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link @@if (context.page === 'profile') { active }\" href=\"{{ path('app_student_index') }}\">
                                List
                </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow  @@if (context.page === 'settings') { active } \"  href=\"@@webRoot/pages/settings.html\" >
                                Settings
                                </a>

                        </li>
                    </ul>
                </div>

                </li>


                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page_group !== 'authentication') { collapsed }\" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navAuthentication\" aria-expanded=\"false\" aria-controls=\"navAuthentication\">
                                <i data-feather=\"lock\" class=\"nav-icon icon-xs me-2\">
                                </i> Authentication
                            </a>
                            <div id=\"navAuthentication\" class=\"collapse @@if (context.page_group === 'authentication') { show }\" data-bs-parent=\"#sideNavbar\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link @@if (context.page === 'signin') { active }\" href=\"@@webRoot/pages/sign-in.html\"> Sign In</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link @@if (context.page === 'signup') { active } \" href=\"@@webRoot/pages/sign-up.html\"> Sign Up</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link @@if (context.page === 'forgetpassword') { active }\" href=\"@@webRoot/pages/forget-password.html\">
                                             Forget Password
                                </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link @@if (context.page === 'layouts') { active }\" href=\"@@webRoot/pages/layout.html\">
                                <i
                                    data-feather=\"sidebar\"

                                    class=\"nav-icon icon-xs me-2\"
                                >
                                </i
                                      >
                                Layouts
                            </a>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <div class=\"navbar-heading\">UI Components</div>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/accordions.html\" >
                                <i data-feather=\"package\" class=\"nav-icon icon-xs me-2\" >
                            </i>  Components
                            </a>
                         </li>
                  

                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page_group !== 'menulevel') { collapsed }\" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navMenuLevel\" aria-expanded=\"false\" aria-controls=\"navMenuLevel\">
                                <i
                                data-feather=\"corner-left-down\"

                                class=\"nav-icon icon-xs me-2\"
                            >
                            </i
                                      > Menu Level
                            </a>
                            <div id=\"navMenuLevel\" class=\"collapse @@if (context.page_group === 'menulevel') { show }\" data-bs-parent=\"#sideNavbar\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link has-arrow @@if (context.page === 'twolevel') { active }\" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navMenuLevelSecond\" aria-expanded=\"false\" aria-controls=\"navMenuLevelSecond\">
                                    Two Level
                                </a>
                                        <div id=\"navMenuLevelSecond\" class=\"collapse\" data-bs-parent=\"#navMenuLevel\">
                                            <ul class=\"nav flex-column\">
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link @@if (context.page === 'navitem1') { active }\" href=\"#!\">  NavItem 1</a>
                                                </li>
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link @@if (context.page === 'navitem2') { active }\" href=\"#!\">  NavItem 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link has-arrow @@if (context.page_group !== 'threelevel') { collapsed } \" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navMenuLevelThree\" aria-expanded=\"false\" aria-controls=\"navMenuLevelThree\">
                                    Three Level
                                </a>
                                        <div id=\"navMenuLevelThree\" class=\"collapse @@if (context.page_group === 'threelevel') { show }\" data-bs-parent=\"#navMenuLevel\">
                                            <ul class=\"nav flex-column\">
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link @@if (context.page_group !== 'navitemthree1') { collapsed }\" href=\"#!\" data-bs-toggle=\"collapse\" data-bs-target=\"#navMenuLevelThreeOne\" aria-expanded=\"false\" aria-controls=\"navMenuLevelThreeOne\">
                                                         NavItem 1
                                            </a>
                                                    <div id=\"navMenuLevelThreeOne\" class=\"collapse collapse @@if (context.page_group === 'navitemthree1') { show }\" data-bs-parent=\"#navMenuLevelThree\">
                                                        <ul class=\"nav flex-column\">
                                                            <li class=\"nav-item\">
                                                                <a class=\"nav-link @@if (context.page === 'navchilitem') { active }\" href=\"#!\">
                                                                     NavChild Item 1
                                                        </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class=\"nav-item\">
                                                    <a class=\"nav-link @@if (context.page === 'navitem2') { active }\" href=\"#!\">  Nav Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                                         <!-- Nav item -->
                        <li class=\"nav-item\">
                            <div class=\"navbar-heading\">Documentation</div>
                        </li>

                        <!-- Nav item -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/index.html\" >
                                <i data-feather=\"clipboard\" class=\"nav-icon icon-xs me-2\" >
                            </i>  Docs
                            </a>
                         </li>
                         <li class=\"nav-item\">
                            <a class=\"nav-link has-arrow @@if (context.page === 'docs') { active }\" href=\"@@webRoot/docs/changelog.html\" >
                                <i data-feather=\"git-pull-request\" class=\"nav-icon icon-xs me-2\" >
                            </i>  Changelog
                            </a>
                         </li>




                    </ul>

                </div>
</nav>", "partials/navbar-vertical.html.twig", "/home/tristan/PhpstormProjects/OpeWebApp/templates/partials/navbar-vertical.html.twig");
    }
}
