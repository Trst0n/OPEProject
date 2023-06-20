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
                                            <p class=\"mb-0\">En cours</p>
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
        echo twig_escape_filter($this->env, (isset($context["sponsoratdate"]) || array_key_exists("sponsoratdate", $context) ? $context["sponsoratdate"] : (function () { throw new RuntimeError('Variable "sponsoratdate" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">";
        // line 58
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 58, $this->source); })())), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["studentatdate"]) || array_key_exists("studentatdate", $context) ? $context["studentatdate"] : (function () { throw new RuntimeError('Variable "studentatdate" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">";
        // line 82
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 82, $this->source); })())), "html", null, true);
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
                                                <h4 class=\"mb-0\">Demande de Parrainage</h4>
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["nomatchstudents"]) || array_key_exists("nomatchstudents", $context) ? $context["nomatchstudents"] : (function () { throw new RuntimeError('Variable "nomatchstudents" does not exist.', 106, $this->source); })())), "html", null, true);
        echo "</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["nomatchsponsor"]) || array_key_exists("nomatchsponsor", $context) ? $context["nomatchsponsor"] : (function () { throw new RuntimeError('Variable "nomatchsponsor" does not exist.', 107, $this->source); })()), "html", null, true);
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
                                        <h4 class=\"mb-0\">Etudiants sans parrainage</h4>
                                    </div>
                                    <!-- table  -->
                                    <div class=\"table-responsive text-center\">
                                        <table class=\"table text-nowrap mb-0\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>Identité</th>
                                                    <th>Date inscription</th>
                                                    <th>Ville</th>
                                                    <th>Demande(s)</th>
                                                    <th>Langues(s) parlée(s)</th>
                                                    <th>Matching</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nomatchstudents"]) || array_key_exists("nomatchstudents", $context) ? $context["nomatchstudents"] : (function () { throw new RuntimeError('Variable "nomatchstudents" does not exist.', 135, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 136
            echo "                                                <tr>
                                                    <td class=\"align-middle\">
                                                            <div style=\"text-align: left; margin-left: 27%\">
                                                                ";
            // line 139
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "person", [], "any", false, false, false, 139), "civility", [], "any", false, false, false, 139) == "Men")) {
                echo " MR. ";
            } else {
                echo " MME. ";
            }
            // line 140
            echo "                                                               ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "person", [], "any", false, false, false, 140), "lastname", [], "any", false, false, false, 140), "html", null, true);
            echo "
                                                            </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                        ";
            // line 145
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "person", [], "any", false, false, false, 145), "updatedAt", [], "any", false, false, false, 145), "d-m-Y"), "html", null, true);
            echo "
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                        ";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["student"], "city", [], "any", false, false, false, 150), "name", [], "any", false, false, false, 150), "html", null, true);
            echo "
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            ";
            // line 155
            $context["cpt"] = 0;
            // line 156
            echo "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["student"], "wishes", [], "any", false, false, false, 156));
            foreach ($context['_seq'] as $context["_key"] => $context["wish"]) {
                // line 157
                echo "                                                                ";
                if (((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 157, $this->source); })()) < 3)) {
                    // line 158
                    echo "                                                                    Wish
                                                                ";
                }
                // line 160
                echo "                                                                    ";
                $context["cpt"] = ((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 160, $this->source); })()) + 1);
                // line 161
                echo "                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wish'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "                                                            ";
            if (((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 162, $this->source); })()) >= 3)) {
                // line 163
                echo "                                                                ";
                $context["cpt"] = ((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 163, $this->source); })()) - 2);
                // line 164
                echo "                                                                + ";
                echo twig_escape_filter($this->env, (isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 164, $this->source); })()), "html", null, true);
                echo "
                                                            ";
            }
            // line 166
            echo "                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle text-dark\">
                                                        <div class=\"text-center\">
                                                            ";
            // line 170
            $context["cpt"] = 0;
            // line 171
            echo "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["student"], "languages", [], "any", false, false, false, 171));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 172
                echo "                                                                ";
                if (((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 172, $this->source); })()) < 3)) {
                    // line 173
                    echo "                                                                    language
                                                                ";
                }
                // line 175
                echo "                                                                ";
                $context["cpt"] = ((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 175, $this->source); })()) + 1);
                // line 176
                echo "                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                                                            ";
            if (((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 177, $this->source); })()) >= 3)) {
                // line 178
                echo "                                                                ";
                $context["cpt"] = ((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 178, $this->source); })()) - 2);
                // line 179
                echo "                                                                + ";
                echo twig_escape_filter($this->env, (isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 179, $this->source); })()), "html", null, true);
                echo "
                                                            ";
            }
            // line 181
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- card footer  -->
                                    <div  class=\"card-footer bg-white text-center\">
                                        <a href=\"#\" class=\"link-primary\">Voir tous les étudiants </a>

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
        return array (  370 => 190,  356 => 181,  350 => 179,  347 => 178,  344 => 177,  338 => 176,  335 => 175,  331 => 173,  328 => 172,  323 => 171,  321 => 170,  315 => 166,  309 => 164,  306 => 163,  303 => 162,  297 => 161,  294 => 160,  290 => 158,  287 => 157,  282 => 156,  280 => 155,  272 => 150,  264 => 145,  255 => 140,  249 => 139,  244 => 136,  240 => 135,  209 => 107,  205 => 106,  178 => 82,  174 => 81,  148 => 58,  144 => 57,  117 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                                            <p class=\"mb-0\">En cours</p>
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
                                            <h1 class=\"fw-bold\">{{ sponsoratdate }}</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">{{ sponsors  | length }}</span>Inscrits</p>
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
                                            <h1 class=\"fw-bold\">{{ studentatdate }}</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">{{ students | length }}</span>Inscrits</p>
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
                                                <h4 class=\"mb-0\">Demande de Parrainage</h4>
                                            </div>
                                            <div class=\"icon-shape icon-md bg-light-primary text-primary
                            rounded-2\">
                                                <i class=\"bi bi bi-inboxes-fill\"></i>
                                            </div>
                                        </div>
                                        <!-- project number -->
                                        <div>
                                            <h1 class=\"fw-bold\">{{ nomatchstudents | length }}</h1>
                                            <p class=\"mb-0\"><span class=\"text-success me-2\">{{ nomatchsponsor }}</span>Parrain(s) disponible(s)</p>
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
                                        <h4 class=\"mb-0\">Etudiants sans parrainage</h4>
                                    </div>
                                    <!-- table  -->
                                    <div class=\"table-responsive text-center\">
                                        <table class=\"table text-nowrap mb-0\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>Identité</th>
                                                    <th>Date inscription</th>
                                                    <th>Ville</th>
                                                    <th>Demande(s)</th>
                                                    <th>Langues(s) parlée(s)</th>
                                                    <th>Matching</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {% for student in nomatchstudents %}
                                                <tr>
                                                    <td class=\"align-middle\">
                                                            <div style=\"text-align: left; margin-left: 27%\">
                                                                {% if student.person.civility == \"Men\"  %} MR. {% else %} MME. {% endif %}
                                                               {{ student.person.lastname }}
                                                            </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                        {{ student.person.updatedAt | date('d-m-Y') }}
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                        {{ student.city.name }}
                                                        </div>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <div class=\"text-center\">
                                                            {% set cpt = 0 %}
                                                            {% for wish in student.wishes %}
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
                                                    <td class=\"align-middle text-dark\">
                                                        <div class=\"text-center\">
                                                            {% set cpt = 0 %}
                                                            {% for language in student.languages %}
                                                                {% if cpt < 3 %}
                                                                    language
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
                                        <a href=\"#\" class=\"link-primary\">Voir tous les étudiants </a>

                                    </div>
                                </div>

                            </div>
                         </div>
                        <p style=\"margin-bottom: 7%\"></p>
{% endblock %}
", "dashboard/index.html.twig", "/home/tristan/PhpstormProjects/OpeWebApp/templates/dashboard/index.html.twig");
    }
}
