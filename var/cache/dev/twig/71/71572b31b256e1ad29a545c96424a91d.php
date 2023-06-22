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
class __TwigTemplate_bd3c772238237497c87cca9c1c544741 extends Template
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
                                        <div class=\"mb-2 mb-lg-0\" style=\"margin-top: 2%\">
                                            <h2 class=\"mb-0 \"> Parrainages </h2>
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
                                                <i class=\"bi bi-people-fill\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["sponsorship"]) || array_key_exists("sponsorship", $context) ? $context["sponsorship"] : (function () { throw new RuntimeError('Variable "sponsorship" does not exist.', 33, $this->source); })())), "html", null, true);
        echo "</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">";
        // line 34
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["nomatchrequests"]) || array_key_exists("nomatchrequests", $context) ? $context["nomatchrequests"] : (function () { throw new RuntimeError('Variable "nomatchrequests" does not exist.', 34, $this->source); })())), "html", null, true);
        echo "</span>Demande(s) en attente</p>
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
                                                <i class=\"bi bi-person\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["proposalsatdate"]) || array_key_exists("proposalsatdate", $context) ? $context["proposalsatdate"] : (function () { throw new RuntimeError('Variable "proposalsatdate" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["nbproposals"]) || array_key_exists("nbproposals", $context) ? $context["nbproposals"] : (function () { throw new RuntimeError('Variable "nbproposals" does not exist.', 58, $this->source); })()), "html", null, true);
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
                                        <div class=\"d-flex justify-content-between align-items-center
                            mb-3\">
                                            <div>
                                                <h4 class=\"mb-0\">Etudiants</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <i class=\"bi bi-person-fill\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["requestsatdate"]) || array_key_exists("requestsatdate", $context) ? $context["requestsatdate"] : (function () { throw new RuntimeError('Variable "requestsatdate" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">12</span>Inscrits</p>
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
                                                <h4 class=\"mb-0\">Match en Attente</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <i class=\"bi bi bi-inboxes-fill\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">";
        // line 106
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["nomatchrequests"]) || array_key_exists("nomatchrequests", $context) ? $context["nomatchrequests"] : (function () { throw new RuntimeError('Variable "nomatchrequests" does not exist.', 106, $this->source); })())), "html", null, true);
        echo "</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["nomatchproposal"]) || array_key_exists("nomatchproposal", $context) ? $context["nomatchproposal"] : (function () { throw new RuntimeError('Variable "nomatchproposal" does not exist.', 107, $this->source); })()), "html", null, true);
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
                                                    <th>Etudiant</th>
                                                    <th>Parrain</th>
                                                    <th>Ville</th>
                                                    <th>Demande(s)</th>
                                                    <th>Matching</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchencours"]) || array_key_exists("matchencours", $context) ? $context["matchencours"] : (function () { throw new RuntimeError('Variable "matchencours" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 135
            echo "                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div style=\"text-align: left; margin-left: 27%\">
                                                            ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "sponsorRequest", [], "any", false, false, false, 138), "person", [], "any", false, false, false, 138), "firstname", [], "any", false, false, false, 138), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "sponsorRequest", [], "any", false, false, false, 138), "person", [], "any", false, false, false, 138), "lastname", [], "any", false, false, false, 138)), "html", null, true);
            echo "
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            ";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "sponsorProposal", [], "any", false, false, false, 143), "person", [], "any", false, false, false, 143), "firstname", [], "any", false, false, false, 143), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "sponsorProposal", [], "any", false, false, false, 143), "person", [], "any", false, false, false, 143), "lastname", [], "any", false, false, false, 143)), "html", null, true);
            echo "
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                        test
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            ";
            // line 153
            $context["cpt"] = 0;
            // line 154
            echo "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["match"], "wishes", [], "any", false, false, false, 154));
            foreach ($context['_seq'] as $context["_key"] => $context["wish"]) {
                // line 155
                echo "                                                                ";
                if (((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 155, $this->source); })()) < 3)) {
                    // line 156
                    echo "                                                                    Wish
                                                                ";
                }
                // line 158
                echo "                                                                    ";
                $context["cpt"] = ((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 158, $this->source); })()) + 1);
                // line 159
                echo "                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wish'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                                                            ";
            if (((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 160, $this->source); })()) >= 3)) {
                // line 161
                echo "                                                                ";
                $context["cpt"] = ((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 161, $this->source); })()) - 2);
                // line 162
                echo "                                                                + ";
                echo twig_escape_filter($this->env, (isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 162, $this->source); })()), "html", null, true);
                echo "
                                                            ";
            }
            // line 164
            echo "                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            <a href=\"#\"><i style=\"font-size: 120%\" class=\"bi bi-person-plus\"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- card footer  -->
                                    <div  class=\"card-footer bg-white text-center\">
                                        <a href=\"#\" class=\"link-primary\">Voir tous les matchs </a>

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
        return array (  322 => 173,  308 => 164,  302 => 162,  299 => 161,  296 => 160,  290 => 159,  287 => 158,  283 => 156,  280 => 155,  275 => 154,  273 => 153,  258 => 143,  248 => 138,  243 => 135,  239 => 134,  209 => 107,  205 => 106,  177 => 81,  151 => 58,  147 => 57,  121 => 34,  117 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                                        <div class=\"mb-2 mb-lg-0\" style=\"margin-top: 2%\">
                                            <h2 class=\"mb-0 \"> Parrainages </h2>
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
                                                <i class=\"bi bi-people-fill\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">{{ sponsorship | length }}</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">{{  nomatchrequests | length }}</span>Demande(s) en attente</p>
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
                                                <i class=\"bi bi-person\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">{{ proposalsatdate }}</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">{{ nbproposals }}</span>Inscrits</p>
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
                                                <h4 class=\"mb-0\">Etudiants</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <i class=\"bi bi-person-fill\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">{{ requestsatdate }}</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">12</span>Inscrits</p>
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
                                                <h4 class=\"mb-0\">Match en Attente</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <i class=\"bi bi bi-inboxes-fill\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">{{ nomatchrequests | length }}</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">{{ nomatchproposal }}</span>Parrain(s) disponible(s)</p>
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
                                                    <th>Etudiant</th>
                                                    <th>Parrain</th>
                                                    <th>Ville</th>
                                                    <th>Demande(s)</th>
                                                    <th>Matching</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for match in matchencours %}
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        <div style=\"text-align: left; margin-left: 27%\">
                                                            {{ match.sponsorRequest.person.firstname }} {{ match.sponsorRequest.person.lastname | upper }}
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            {{ match.sponsorProposal.person.firstname }} {{ match.sponsorProposal.person.lastname | upper }}
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                        test
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            {% set cpt = 0 %}
                                                            {% for wish in match.wishes %}
                                                                {% if cpt < 3 %}
                                                                    Wish
                                                                {% endif %}
                                                                    {% set cpt = cpt +1 %}
                                                            {% endfor %}
                                                            {% if cpt >= 3 %}
                                                                {% set cpt = cpt - 2 %}
                                                                + {{ cpt }}
                                                            {% endif %}
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            <a href=\"#\"><i style=\"font-size: 120%\" class=\"bi bi-person-plus\"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- card footer  -->
                                    <div  class=\"card-footer bg-white text-center\">
                                        <a href=\"#\" class=\"link-primary\">Voir tous les matchs </a>

                                    </div>
                                </div>

                            </div>
                         </div>
                        <p style=\"margin-bottom: 7%\"></p>
{% endblock %}
", "dashboard/index.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/index.html.twig");
    }
}
