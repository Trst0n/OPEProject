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

/* dashboard/index.html.twig */
class __TwigTemplate_9cf3cb6bb4198b8a7df710743e7e3386 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Hello DashboardController!";
        
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
        echo "                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-12\">
                                <!-- Page header -->
                                <div>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"mb-2 mb-lg-0\">
                                            <h3 class=\"mb-0 \">Projects</h3>
                                        </div>
                                        <div>
                                            <a href=\"#\" class=\"btn btn-white\">Create New Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-12 col-12 mt-6\">
                                <!-- card -->
                                <div class=\"card \">
                                    <!-- card body -->
                                    <div class=\"card-body\">
                                        <!-- heading -->
                                        <div class=\"d-flex justify-content-between align-items-center
                            mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Projects</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <i class=\"bi bi-briefcase fs-4\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">18</h1>
                                            <p class=\"mb-0\"><span class=\"text-dark me-2\">2</span>Completed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-12 col-12 mt-6\">
                                <!-- card -->
                                <div class=\"card \">
                                    <!-- card body -->
                                    <div class=\"card-body\">
                                        <!-- heading -->
                                        <div class=\"d-flex justify-content-between align-items-center
                            mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Active Task</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <i class=\"bi bi-list-task fs-4\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">132</h1>
                                            <p class=\"mb-0\"><span class=\"text-dark me-2\">28</span>Completed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-12 col-12 mt-6\">
                                <!-- card -->
                                <div class=\"card \">
                                    <!-- card body -->
                                    <div class=\"card-body\">
                                        <!-- heading -->
                                        <div class=\"d-flex justify-content-between align-items-center
                            mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Teams</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <i class=\"bi bi-people fs-4\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">12</h1>
                                            <p class=\"mb-0\"><span class=\"text-dark me-2\">1</span>Completed</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-12 col-12 mt-6\">
                                <!-- card -->
                                <div class=\"card \">
                                    <!-- card body -->
                                    <div class=\"card-body\">
                                        <!-- heading -->
                                        <div class=\"d-flex justify-content-between align-items-center
                            mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Productivity</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <i class=\"bi bi-bullseye fs-4\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">76%</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">5%</span>Completed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mt-6\">
                            <div class=\"col-md-12 col-12\">
                                <!-- card  -->
                                <div class=\"card\">
                                    <!-- card header  -->
                                    <div class=\"card-header bg-white  py-4\">
                                        <h4 class=\"mb-0\">Active Projects</h4>
                                    </div>
                                    <!-- table  -->
                                    <div class=\"table-responsive\">
                                        <table class=\"table text-nowrap mb-0\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>Project name</th>
                                                    <th>Hours</th>
                                                    <th>priority</th>
                                                    <th>Members</th>
                                                    <th>Progress</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div class=\"d-flex
                                    align-items-center\">
                                                            <div>
                                                                <div class=\"icon-shape icon-md border p-4
                                        rounded-1\">
                                                                    <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/brand/dropbox-logo.svg"), "html", null, true);
        echo "\" alt=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"ms-3 lh-1\">
                                                                <h5 class=\" mb-1\"> <a href=\"#\" class=\"text-inherit\">Dropbox Design
                                        System</a></h5>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">34</td>
                                                    <td class=\"align-middle\"><span class=\"badge
                                    bg-warning\">Medium</span></td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"avatar-group\">
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-1.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-2.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-3.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm avatar-primary\">
                                    <span class=\"avatar-initials rounded-circle
                                        fs-6\">+5</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-dark\">
                                                        <div class=\"float-start me-3\">15%</div>
                                                        <div class=\"mt-2\">
                                                            <div class=\"progress\" style=\"height: 5px;\">
                                                                <div class=\"progress-bar\" role=\"progressbar\" style=\"width:15%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div class=\"d-flex
                                    align-items-center\">
                                                            <div>
                                                                <div class=\"icon-shape icon-md border p-4
                                        rounded-1\">
                                                                    <img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/brand/slack-logo.svg"), "html", null, true);
        echo "\" alt=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"ms-3 lh-1\">
                                                                <h5 class=\" mb-1\"> <a href=\"#\" class=\"text-inherit\">Slack Team UI Design</a></h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">47</td>
                                                    <td class=\"align-middle\"><span class=\"badge
                                    bg-danger\">High</span></td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"avatar-group\">
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-4.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-5.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-6.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm avatar-primary\">
                                    <span class=\"avatar-initials rounded-circle
                                        fs-6\">+5</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-dark\">
                                                        <div class=\"float-start me-3\">35%</div>
                                                        <div class=\"mt-2\">
                                                            <div class=\"progress\" style=\"height: 5px;\">
                                                                <div class=\"progress-bar\" role=\"progressbar\" style=\"width:35%\" aria-valuenow=\"35\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div class=\"d-flex
                                    align-items-center\">
                                                            <div>
                                                                <div class=\"icon-shape icon-md border p-4
                                        rounded-1\">
                                                                    <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/brand/github-logo.svg"), "html", null, true);
        echo "\" alt=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"ms-3 lh-1\">
                                                                <h5 class=\" mb-1\"> <a href=\"#\" class=\"text-inherit\">GitHub Satellite</a></h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">120</td>
                                                    <td class=\"align-middle\"><span class=\"badge bg-info\">Low</span></td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"avatar-group\">
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-7.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-8.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-9.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm avatar-primary\">
                                    <span class=\"avatar-initials rounded-circle
                                        fs-6\">+1</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-dark\">
                                                        <div class=\"float-start me-3\">75%</div>
                                                        <div class=\"mt-2\">
                                                            <div class=\"progress\" style=\"height: 5px;\">
                                                                <div class=\"progress-bar\" role=\"progressbar\" style=\"width:75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div class=\"d-flex
                                    align-items-center\">
                                                            <div>
                                                                <div class=\"icon-shape icon-md border p-4
                                        rounded-1\">
                                                                    <img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/brand/3dsmax-logo.svg"), "html", null, true);
        echo "\" alt=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"ms-3 lh-1\">
                                                                <h5 class=\" mb-1\"> <a href=\"#\" class=\"text-inherit\">3D Character Modelling</a></h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">89</td>
                                                    <td class=\"align-middle\"><span class=\"badge
                                    bg-warning\">Medium</span></td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"avatar-group\">
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-10.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-11.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-12.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm avatar-primary\">
                                    <span class=\"avatar-initials rounded-circle
                                        fs-6\">+5</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-dark\">
                                                        <div class=\"float-start me-3\">63%</div>
                                                        <div class=\"mt-2\">
                                                            <div class=\"progress\" style=\"height: 5px;\">
                                                                <div class=\"progress-bar\" role=\"progressbar\" style=\"width:63%\" aria-valuenow=\"63\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div class=\"d-flex
                                    align-items-center\">
                                                            <div>
                                                                <div class=\"icon-shape icon-md border p-4 rounded
                                        bg-primary\">
                                                                    <img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/brand/layers-logo.svg"), "html", null, true);
        echo "\" alt=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"ms-3 lh-1\">
                                                                <h5 class=\" mb-1\"> <a href=\"#\" class=\"text-inherit\">Webapp Design System</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">108</td>
                                                    <td class=\"align-middle\"><span class=\"badge
                                    bg-success\">Track</span></td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"avatar-group\">
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-13.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-14.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-15.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm avatar-primary\">
                                    <span class=\"avatar-initials rounded-circle
                                        fs-6\">+5</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-dark\">
                                                        <div class=\"float-start me-3\">100%</div>
                                                        <div class=\"mt-2\">
                                                            <div class=\"progress\" style=\"height: 5px;\">
                                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width:100%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"align-middle border-bottom-0\">
                                                        <div class=\"d-flex
                                    align-items-center\">
                                                            <div>
                                                                <div class=\"icon-shape icon-md border p-4 rounded-1\">
                                                                    <img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/brand/github-logo.svg"), "html", null, true);
        echo "\" alt=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"ms-3 lh-1\">
                                                                <h5 class=\" mb-1\"> <a href=\"#\" class=\"text-inherit\">Github Event Design</a>
                                                                </h5>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle border-bottom-0\">120</td>
                                                    <td class=\"align-middle border-bottom-0\"><span class=\"badge bg-info\">Low</span></td>
                                                    <td class=\"align-middle border-bottom-0\">
                                                        <div class=\"avatar-group\">
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-13.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-14.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/avatar/avatar-15.jpg"), "html", null, true);
        echo "\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm avatar-primary\">
                                    <span class=\"avatar-initials rounded-circle
                                        fs-6\">+1</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-dark border-bottom-0\">
                                                        <div class=\"float-start me-3\">75%</div>
                                                        <div class=\"mt-2\">
                                                            <div class=\"progress\" style=\"height: 5px;\">
                                                                <div class=\"progress-bar\" role=\"progressbar\" style=\"width:75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- card footer  -->
                                    <div class=\"card-footer bg-white text-center\">
                                        <a href=\"#\" class=\"link-primary\">View All Projects</a>

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
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 424,  569 => 419,  561 => 414,  542 => 398,  514 => 373,  506 => 368,  498 => 363,  479 => 347,  451 => 322,  443 => 317,  435 => 312,  417 => 297,  389 => 272,  381 => 267,  373 => 262,  356 => 248,  328 => 223,  320 => 218,  312 => 213,  294 => 198,  266 => 173,  258 => 168,  250 => 163,  230 => 146,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello DashboardController!{% endblock %}

{% block body %}
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-12\">
                                <!-- Page header -->
                                <div>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"mb-2 mb-lg-0\">
                                            <h3 class=\"mb-0 \">Projects</h3>
                                        </div>
                                        <div>
                                            <a href=\"#\" class=\"btn btn-white\">Create New Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-12 col-12 mt-6\">
                                <!-- card -->
                                <div class=\"card \">
                                    <!-- card body -->
                                    <div class=\"card-body\">
                                        <!-- heading -->
                                        <div class=\"d-flex justify-content-between align-items-center
                            mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Projects</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <i class=\"bi bi-briefcase fs-4\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">18</h1>
                                            <p class=\"mb-0\"><span class=\"text-dark me-2\">2</span>Completed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-12 col-12 mt-6\">
                                <!-- card -->
                                <div class=\"card \">
                                    <!-- card body -->
                                    <div class=\"card-body\">
                                        <!-- heading -->
                                        <div class=\"d-flex justify-content-between align-items-center
                            mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Active Task</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <i class=\"bi bi-list-task fs-4\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">132</h1>
                                            <p class=\"mb-0\"><span class=\"text-dark me-2\">28</span>Completed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-12 col-12 mt-6\">
                                <!-- card -->
                                <div class=\"card \">
                                    <!-- card body -->
                                    <div class=\"card-body\">
                                        <!-- heading -->
                                        <div class=\"d-flex justify-content-between align-items-center
                            mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Teams</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <i class=\"bi bi-people fs-4\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">12</h1>
                                            <p class=\"mb-0\"><span class=\"text-dark me-2\">1</span>Completed</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-12 col-12 mt-6\">
                                <!-- card -->
                                <div class=\"card \">
                                    <!-- card body -->
                                    <div class=\"card-body\">
                                        <!-- heading -->
                                        <div class=\"d-flex justify-content-between align-items-center
                            mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Productivity</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <i class=\"bi bi-bullseye fs-4\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">76%</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">5%</span>Completed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mt-6\">
                            <div class=\"col-md-12 col-12\">
                                <!-- card  -->
                                <div class=\"card\">
                                    <!-- card header  -->
                                    <div class=\"card-header bg-white  py-4\">
                                        <h4 class=\"mb-0\">Active Projects</h4>
                                    </div>
                                    <!-- table  -->
                                    <div class=\"table-responsive\">
                                        <table class=\"table text-nowrap mb-0\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>Project name</th>
                                                    <th>Hours</th>
                                                    <th>priority</th>
                                                    <th>Members</th>
                                                    <th>Progress</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div class=\"d-flex
                                    align-items-center\">
                                                            <div>
                                                                <div class=\"icon-shape icon-md border p-4
                                        rounded-1\">
                                                                    <img src=\"{{ asset('build/images/brand/dropbox-logo.svg') }}\" alt=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"ms-3 lh-1\">
                                                                <h5 class=\" mb-1\"> <a href=\"#\" class=\"text-inherit\">Dropbox Design
                                        System</a></h5>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">34</td>
                                                    <td class=\"align-middle\"><span class=\"badge
                                    bg-warning\">Medium</span></td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"avatar-group\">
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-1.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-2.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-3.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm avatar-primary\">
                                    <span class=\"avatar-initials rounded-circle
                                        fs-6\">+5</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-dark\">
                                                        <div class=\"float-start me-3\">15%</div>
                                                        <div class=\"mt-2\">
                                                            <div class=\"progress\" style=\"height: 5px;\">
                                                                <div class=\"progress-bar\" role=\"progressbar\" style=\"width:15%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div class=\"d-flex
                                    align-items-center\">
                                                            <div>
                                                                <div class=\"icon-shape icon-md border p-4
                                        rounded-1\">
                                                                    <img src=\"{{ asset('build/images/brand/slack-logo.svg') }}\" alt=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"ms-3 lh-1\">
                                                                <h5 class=\" mb-1\"> <a href=\"#\" class=\"text-inherit\">Slack Team UI Design</a></h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">47</td>
                                                    <td class=\"align-middle\"><span class=\"badge
                                    bg-danger\">High</span></td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"avatar-group\">
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-4.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-5.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-6.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm avatar-primary\">
                                    <span class=\"avatar-initials rounded-circle
                                        fs-6\">+5</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-dark\">
                                                        <div class=\"float-start me-3\">35%</div>
                                                        <div class=\"mt-2\">
                                                            <div class=\"progress\" style=\"height: 5px;\">
                                                                <div class=\"progress-bar\" role=\"progressbar\" style=\"width:35%\" aria-valuenow=\"35\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div class=\"d-flex
                                    align-items-center\">
                                                            <div>
                                                                <div class=\"icon-shape icon-md border p-4
                                        rounded-1\">
                                                                    <img src=\"{{ asset('build/images/brand/github-logo.svg') }}\" alt=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"ms-3 lh-1\">
                                                                <h5 class=\" mb-1\"> <a href=\"#\" class=\"text-inherit\">GitHub Satellite</a></h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">120</td>
                                                    <td class=\"align-middle\"><span class=\"badge bg-info\">Low</span></td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"avatar-group\">
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-7.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-8.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-9.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm avatar-primary\">
                                    <span class=\"avatar-initials rounded-circle
                                        fs-6\">+1</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-dark\">
                                                        <div class=\"float-start me-3\">75%</div>
                                                        <div class=\"mt-2\">
                                                            <div class=\"progress\" style=\"height: 5px;\">
                                                                <div class=\"progress-bar\" role=\"progressbar\" style=\"width:75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div class=\"d-flex
                                    align-items-center\">
                                                            <div>
                                                                <div class=\"icon-shape icon-md border p-4
                                        rounded-1\">
                                                                    <img src=\"{{ asset('build/images/brand/3dsmax-logo.svg') }}\" alt=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"ms-3 lh-1\">
                                                                <h5 class=\" mb-1\"> <a href=\"#\" class=\"text-inherit\">3D Character Modelling</a></h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">89</td>
                                                    <td class=\"align-middle\"><span class=\"badge
                                    bg-warning\">Medium</span></td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"avatar-group\">
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-10.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-11.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-12.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm avatar-primary\">
                                    <span class=\"avatar-initials rounded-circle
                                        fs-6\">+5</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-dark\">
                                                        <div class=\"float-start me-3\">63%</div>
                                                        <div class=\"mt-2\">
                                                            <div class=\"progress\" style=\"height: 5px;\">
                                                                <div class=\"progress-bar\" role=\"progressbar\" style=\"width:63%\" aria-valuenow=\"63\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div class=\"d-flex
                                    align-items-center\">
                                                            <div>
                                                                <div class=\"icon-shape icon-md border p-4 rounded
                                        bg-primary\">
                                                                    <img src=\"{{ asset('build/images/brand/layers-logo.svg') }}\" alt=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"ms-3 lh-1\">
                                                                <h5 class=\" mb-1\"> <a href=\"#\" class=\"text-inherit\">Webapp Design System</a>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">108</td>
                                                    <td class=\"align-middle\"><span class=\"badge
                                    bg-success\">Track</span></td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"avatar-group\">
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-13.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-14.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-15.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm avatar-primary\">
                                    <span class=\"avatar-initials rounded-circle
                                        fs-6\">+5</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-dark\">
                                                        <div class=\"float-start me-3\">100%</div>
                                                        <div class=\"mt-2\">
                                                            <div class=\"progress\" style=\"height: 5px;\">
                                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width:100%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=\"align-middle border-bottom-0\">
                                                        <div class=\"d-flex
                                    align-items-center\">
                                                            <div>
                                                                <div class=\"icon-shape icon-md border p-4 rounded-1\">
                                                                    <img src=\"{{ asset('build/images/brand/github-logo.svg') }}\" alt=\"\">
                                                                </div>
                                                            </div>
                                                            <div class=\"ms-3 lh-1\">
                                                                <h5 class=\" mb-1\"> <a href=\"#\" class=\"text-inherit\">Github Event Design</a>
                                                                </h5>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle border-bottom-0\">120</td>
                                                    <td class=\"align-middle border-bottom-0\"><span class=\"badge bg-info\">Low</span></td>
                                                    <td class=\"align-middle border-bottom-0\">
                                                        <div class=\"avatar-group\">
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-13.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-14.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm\">
                                    <img alt=\"avatar\"
                                        src=\"{{ asset('build/images/avatar/avatar-15.jpg') }}\"
                                        class=\"rounded-circle\">
                                    </span>
                                                            <span class=\"avatar avatar-sm avatar-primary\">
                                    <span class=\"avatar-initials rounded-circle
                                        fs-6\">+1</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-dark border-bottom-0\">
                                                        <div class=\"float-start me-3\">75%</div>
                                                        <div class=\"mt-2\">
                                                            <div class=\"progress\" style=\"height: 5px;\">
                                                                <div class=\"progress-bar\" role=\"progressbar\" style=\"width:75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- card footer  -->
                                    <div class=\"card-footer bg-white text-center\">
                                        <a href=\"#\" class=\"link-primary\">View All Projects</a>

                                    </div>
                                </div>

                            </div>
                         </div>
{% endblock %}
", "dashboard/index.html.twig", "/home/tristan/PhpstormProjects/OpeWebApp/templates/dashboard/index.html.twig");
    }
}
