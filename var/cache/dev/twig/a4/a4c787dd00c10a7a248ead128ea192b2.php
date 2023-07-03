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
class __TwigTemplate_7bb3268b532edd714c18e769d2339e34 extends Template
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

        echo "Dashboard";
        
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
        echo "
";
        // line 8
        echo "                    <div class=\"bg-primary pt-10 pb-21\"></div>
                    <div class=\"container-fluid mt-n22 px-6\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-12\">
                                <!-- Page header -->
                                <div>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"mb-2 mb-lg-0\" style=\"margin-top: 2%\">
                                            <h1 class=\"mb-0  text-white\" style=\"font-weight: bolder\"> Dashboard </h1>
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
                                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Parrainages</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary rounded-2\">
                                                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_sponsorships");
        echo "\"><i class=\"bi bi-people-fill\"></i></a>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["numValidSponsorship"]) || array_key_exists("numValidSponsorship", $context) ? $context["numValidSponsorship"] : (function () { throw new RuntimeError('Variable "numValidSponsorship" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["numSponsorship"]) || array_key_exists("numSponsorship", $context) ? $context["numSponsorship"] : (function () { throw new RuntimeError('Variable "numSponsorship" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</span>Au total</p>
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
                                                <h4 class=\"mb-0\">Parrains</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_students");
        echo "\"><i class=\"bi bi-person\"></i></a>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["numValidProposals"]) || array_key_exists("numValidProposals", $context) ? $context["numValidProposals"] : (function () { throw new RuntimeError('Variable "numValidProposals" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["numProposals"]) || array_key_exists("numProposals", $context) ? $context["numProposals"] : (function () { throw new RuntimeError('Variable "numProposals" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "</span>Inscrits</p>
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
                                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Etudiants</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary rounded-2\">
                                                <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_students");
        echo "\"><i class=\"bi bi-person-fill\"></i></a>
                                            </div>
                                        </div>
                                        <div>
                                            <h1 class=\"fw-bold\">";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["numValidRequests"]) || array_key_exists("numValidRequests", $context) ? $context["numValidRequests"] : (function () { throw new RuntimeError('Variable "numValidRequests" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["numRequests"]) || array_key_exists("numRequests", $context) ? $context["numRequests"] : (function () { throw new RuntimeError('Variable "numRequests" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "</span>Inscrits</p>
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
                                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Match en attente</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary rounded-2\">
                                                <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_matches");
        echo "\"><i class=\"bi bi bi-inboxes-fill\"></i></a>
                                            </div>
                                        </div>
                                        <div>
                                            <h1 class=\"fw-bold\">";
        // line 104
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["onHoldMatches"]) || array_key_exists("onHoldMatches", $context) ? $context["onHoldMatches"] : (function () { throw new RuntimeError('Variable "onHoldMatches" does not exist.', 104, $this->source); })())), "html", null, true);
        echo "</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["numNoMatchSponsor"]) || array_key_exists("numNoMatchSponsor", $context) ? $context["numNoMatchSponsor"] : (function () { throw new RuntimeError('Variable "numNoMatchSponsor" does not exist.', 105, $this->source); })()), "html", null, true);
        echo "</span>Parrain(s) disponible(s)</p>
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
                                        <h4 class=\"mb-0\">Match en attente</h4>
                                    </div>
                                    <!-- table  -->
                                    <div class=\"table-responsive text-center\">
                                        <table class=\"table text-nowrap mb-0\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Prenom</th>
                                                    <th>Date d'inscription</th>
                                                    <th>Statut</th>
                                                    <th>Priorité</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["onHoldMatches"]) || array_key_exists("onHoldMatches", $context) ? $context["onHoldMatches"] : (function () { throw new RuntimeError('Variable "onHoldMatches" does not exist.', 133, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
            // line 134
            echo "                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            ";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "person", [], "any", false, false, false, 137), "lastname", [], "any", false, false, false, 137), "html", null, true);
            echo "
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            ";
            // line 142
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "person", [], "any", false, false, false, 142), "firstname", [], "any", false, false, false, 142)), "html", null, true);
            echo "
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            ";
            // line 147
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "person", [], "any", false, false, false, 147), "updatedAt", [], "any", false, false, false, 147), "Y-m-d"), "html", null, true);
            echo "
                                                        </div>
                                                    </td>

                                                        ";
            // line 151
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "state", [], "any", false, false, false, 151), "value", [], "any", false, false, false, 151) == "registered")) {
                // line 152
                echo "                                                            <td class=\"align-middle\">
                                                                <div class=\"text-center\">
                                                                    VALIDATION ADMIN
                                                                </div>
                                                            </td>
                                                            <td class=\"align-middle\">
                                                                <div class=\"text-center\">
                                                                    <span class=\"badge bg-danger\">High</span>
                                                                </div>
                                                            </td>

                                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 163
$context["request"], "state", [], "any", false, false, false, 163), "value", [], "any", false, false, false, 163) == "matched")) {
                // line 164
                echo "                                                            <td class=\"align-middle\">
                                                                <div class=\"text-center\">
                                                                    VALIDATION PERSONNES
                                                                </div>
                                                            </td>
                                                            <td class=\"align-middle\">
                                                                <div class=\"text-center\">
                                                                    <span class=\"badge bg-warning\">Medium</span>
                                                                </div>
                                                            </td>

                                                        ";
            }
            // line 176
            echo "                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            ";
            // line 178
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "state", [], "any", false, false, false, 178), "value", [], "any", false, false, false, 178) == "matched")) {
                // line 179
                echo "                                                                <a href=\"#\"><i style=\"font-size: 130%\" class=\"bi bi-arrow-up-square\"></i></a>
                                                            ";
            } else {
                // line 181
                echo "                                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_sponsorship_validation", ["id" => twig_get_attribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 181)]), "html", null, true);
                echo "\"><i style=\"font-size: 130%\" class=\"bi bi-plus-square\"></i></a>
                                                            ";
            }
            // line 183
            echo "                                                            &nbsp; &nbsp;
                                                            <a href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "person", [], "any", false, false, false, 184), "id", [], "any", false, false, false, 184)]), "html", null, true);
            echo "\"><i style=\"font-size: 130%\" class=\"bi bi-info-circle\"></i></a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- card footer  -->
                                    <div  class=\"card-footer bg-white text-center\">
                                        <a href=\"";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_matches");
        echo "\" class=\"link-primary\">Voir tous les matchs </a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <p style=\"margin-bottom: 7%\"></p>
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
        return array (  355 => 195,  348 => 190,  336 => 184,  333 => 183,  327 => 181,  323 => 179,  321 => 178,  317 => 176,  303 => 164,  301 => 163,  288 => 152,  286 => 151,  279 => 147,  271 => 142,  263 => 137,  258 => 134,  254 => 133,  223 => 105,  219 => 104,  212 => 100,  192 => 83,  188 => 82,  181 => 78,  162 => 62,  158 => 61,  150 => 56,  129 => 38,  125 => 37,  117 => 32,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}

{#                <div id=\"page-content\">#}
                    <div class=\"bg-primary pt-10 pb-21\"></div>
                    <div class=\"container-fluid mt-n22 px-6\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-md-12 col-12\">
                                <!-- Page header -->
                                <div>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"mb-2 mb-lg-0\" style=\"margin-top: 2%\">
                                            <h1 class=\"mb-0  text-white\" style=\"font-weight: bolder\"> Dashboard </h1>
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
                                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Parrainages</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary rounded-2\">
                                                <a href=\"{{ path('app_dashboard_sponsorships') }}\"><i class=\"bi bi-people-fill\"></i></a>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">{{ numValidSponsorship }}</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">{{ numSponsorship }}</span>Au total</p>
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
                                                <h4 class=\"mb-0\">Parrains</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <a href=\"{{ path('app_dashboard_students') }}\"><i class=\"bi bi-person\"></i></a>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">{{ numValidProposals }}</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">{{ numProposals }}</span>Inscrits</p>
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
                                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Etudiants</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary rounded-2\">
                                                <a href=\"{{ path('app_dashboard_students') }}\"><i class=\"bi bi-person-fill\"></i></a>
                                            </div>
                                        </div>
                                        <div>
                                            <h1 class=\"fw-bold\">{{ numValidRequests }}</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">{{ numRequests }}</span>Inscrits</p>
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
                                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Match en attente</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary rounded-2\">
                                                <a href=\"{{ path('app_dashboard_matches') }}\"><i class=\"bi bi bi-inboxes-fill\"></i></a>
                                            </div>
                                        </div>
                                        <div>
                                            <h1 class=\"fw-bold\">{{ onHoldMatches | length }}</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">{{ numNoMatchSponsor }}</span>Parrain(s) disponible(s)</p>
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
                                        <h4 class=\"mb-0\">Match en attente</h4>
                                    </div>
                                    <!-- table  -->
                                    <div class=\"table-responsive text-center\">
                                        <table class=\"table text-nowrap mb-0\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Prenom</th>
                                                    <th>Date d'inscription</th>
                                                    <th>Statut</th>
                                                    <th>Priorité</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for request in onHoldMatches %}
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            {{ request.person.lastname }}
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            {{ request.person.firstname | upper }}
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            {{ request.person.updatedAt | date('Y-m-d')  }}
                                                        </div>
                                                    </td>

                                                        {% if request.state.value == \"registered\" %}
                                                            <td class=\"align-middle\">
                                                                <div class=\"text-center\">
                                                                    VALIDATION ADMIN
                                                                </div>
                                                            </td>
                                                            <td class=\"align-middle\">
                                                                <div class=\"text-center\">
                                                                    <span class=\"badge bg-danger\">High</span>
                                                                </div>
                                                            </td>

                                                        {% elseif request.state.value == \"matched\"%}
                                                            <td class=\"align-middle\">
                                                                <div class=\"text-center\">
                                                                    VALIDATION PERSONNES
                                                                </div>
                                                            </td>
                                                            <td class=\"align-middle\">
                                                                <div class=\"text-center\">
                                                                    <span class=\"badge bg-warning\">Medium</span>
                                                                </div>
                                                            </td>

                                                        {% endif %}
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            {% if request.state.value == \"matched\" %}
                                                                <a href=\"#\"><i style=\"font-size: 130%\" class=\"bi bi-arrow-up-square\"></i></a>
                                                            {% else %}
                                                                <a href=\"{{ path('app_dashboard_sponsorship_validation', {'id': request.id}) }}\"><i style=\"font-size: 130%\" class=\"bi bi-plus-square\"></i></a>
                                                            {% endif %}
                                                            &nbsp; &nbsp;
                                                            <a href=\"{{ path('app_dashboard_user', {'id': request.person.id}) }}\"><i style=\"font-size: 130%\" class=\"bi bi-info-circle\"></i></a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- card footer  -->
                                    <div  class=\"card-footer bg-white text-center\">
                                        <a href=\"{{ path('app_dashboard_matches') }}\" class=\"link-primary\">Voir tous les matchs </a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <p style=\"margin-bottom: 7%\"></p>
{% endblock %}
", "dashboard/index.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/index.html.twig");
    }
}
