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

/* dashboard/match/sponsorship.html.twig */
class __TwigTemplate_cdd96b5ce21e7e543714a6cadaa309d6 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/match/sponsorship.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/match/sponsorship.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/match/sponsorship.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Parrainage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"row mt-6\">
        <div class=\"col-md-12 col-12\">
            <div class=\"container-fluid mt-2 px-6\">

                <div class=\"card\">
                    <div class=\"card-header bg-white  py-3\">Résumé de l'étudiant</div>
                    <div class=\"table-responsive text-center\" style=\"font-size: 17px\">
                        <table class=\"table text-nowrap mb-0\">
                            <thead class=\"table-light\" >
                            <tr>
                                <th>Etudiant</th>
                                <th>Genre</th>
                                <th>Souhaits</th>
                                <th>Langues</th>
                                <th>Activités</th>
                                <th>Ville</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=\"align-middle\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 28, $this->source); })()), "person", [], "any", false, false, false, 28), "firstname", [], "any", false, false, false, 28), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 28, $this->source); })()), "person", [], "any", false, false, false, 28), "lastname", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                                    <td class=\"align-middle\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 29, $this->source); })()), "civility", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                                    <td class=\"align-middle\">
                                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 31, $this->source); })()), "wishes", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["wish"]) {
            // line 32
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wish"], "value", [], "any", false, false, false, 32), "html", null, true);
            echo "
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wish'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                                    </td>
                                    <td class=\"align-middle\">
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 36, $this->source); })()), "languages", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 37
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                    </td>
                                    <td class=\"align-middle\">
                                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 41, $this->source); })()), "curriculum", [], "any", false, false, false, 41), "fields", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 42
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                                    </td>
                                    <td class=\"align-middle\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 45, $this->source); })()), "city", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
                                <tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mt-6\">
        <div class=\"col-md-12 col-12\">
            <div class=\"container-fluid mt-2 px-6\">
                <div class=\"card\" style=\"margin-top: 3%\">
                <div class=\"card-header bg-white  py-4\">
                    <h4 class=\"mb-0\">Parrainages potentiels</h4>
                </div>
                    <div class=\"table-responsive text-center\" style=\"font-size: 17px\">
                        <table class=\"table text-nowrap mb-0\">
                            <thead class=\"table-light\" >
                            <tr>
                            <th>Parrain</th>
                            <th>Score</th>
                            <th>Souhaits</th>
                            <th>Valeurs</th>
                            <th>Ville</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sponsorships"]) || array_key_exists("sponsorships", $context) ? $context["sponsorships"] : (function () { throw new RuntimeError('Variable "sponsorships" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sponsorship"]) {
            // line 76
            echo "                            <tr>
                                <td class=\"align-middle\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 77), "person", [], "any", false, false, false, 77), "firstname", [], "any", false, false, false, 77), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 77), "person", [], "any", false, false, false, 77), "lastname", [], "any", false, false, false, 77), "html", null, true);
            echo "
                                ";
            // line 78
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 78, $this->source); })()), "civility", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 78), "civility", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78))) {
                // line 79
                echo "                                    <i style=\"color: red; font-size: 120%\" class=\"bi bi-exclamation-triangle\"></i>
                                ";
            }
            // line 81
            echo "
                                </td>
                                <td class=\"align-middle\">";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "score", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                                <td class=\"align-middle\">
                                    Langues : ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "scoreIndicators", [], "any", false, false, false, 85), "language", [], "array", false, false, false, 85), "html", null, true);
            echo " <br>
                                    Genre : ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "scoreIndicators", [], "any", false, false, false, 86), "gender", [], "array", false, false, false, 86), "html", null, true);
            echo " <br>
                                    Souhaits : ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "scoreIndicators", [], "any", false, false, false, 87), "objective", [], "array", false, false, false, 87), "html", null, true);
            echo " <br>
                                    Domaine : ";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "scoreIndicators", [], "any", false, false, false, 88), "domain", [], "array", false, false, false, 88), "html", null, true);
            echo " <br>
                                    Localisation : ";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "scoreIndicators", [], "any", false, false, false, 89), "location", [], "array", false, false, false, 89), "html", null, true);
            echo " <br>
                                </td>
                                <td class=\"align-middle\">
                                    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 92), "languages", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 93
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "value", [], "any", false, false, false, 93), "html", null, true);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                                    <br>
                                    ";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 96), "civility", [], "any", false, false, false, 96), "value", [], "any", false, false, false, 96), "html", null, true);
            echo "
                                    <br>

                                    ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 99), "wishes", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["wish"]) {
                // line 100
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wish"], "value", [], "any", false, false, false, 100), "html", null, true);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wish'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                                    <br>


                                    ";
            // line 105
            $context["cpt"] = 0;
            // line 106
            echo "
                                    ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 107), "workfields", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 108
                echo "                                        ";
                $context["cpt"] = ((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 108, $this->source); })()) + 1);
                // line 109
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 109), "html", null, true);
                echo "
                                        ";
                // line 110
                if (((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 110, $this->source); })()) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 110), "workfields", [], "any", false, false, false, 110)))) {
                    // line 111
                    echo "                                            ,
                                        ";
                }
                // line 113
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                                    <br>

                                    ";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 116), "city", [], "any", false, false, false, 116), "name", [], "any", false, false, false, 116), "html", null, true);
            echo "
                                </td>
                                <td class=\"align-middle\">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 118), "city", [], "any", false, false, false, 118), "name", [], "any", false, false, false, 118), "html", null, true);
            echo "</td>

                                <td class=\"align-middle\">
                                    <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_validate", ["sponsorship" => twig_get_attribute($this->env, $this->source, $context["sponsorship"], "id", [], "any", false, false, false, 121)]), "html", null, true);
            echo "\" ><i style=\"font-size: 150%; color: limegreen\" class=\"bi bi-check-circle\"></i></a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 125
            echo "                            <tr>
                                <td colspan=\"9\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsorship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                        </tbody>
                    </table>
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
        return "dashboard/match/sponsorship.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 129,  348 => 125,  339 => 121,  333 => 118,  328 => 116,  324 => 114,  318 => 113,  314 => 111,  312 => 110,  307 => 109,  304 => 108,  300 => 107,  297 => 106,  295 => 105,  290 => 102,  281 => 100,  277 => 99,  271 => 96,  268 => 95,  259 => 93,  255 => 92,  249 => 89,  245 => 88,  241 => 87,  237 => 86,  233 => 85,  228 => 83,  224 => 81,  220 => 79,  218 => 78,  213 => 77,  210 => 76,  205 => 75,  172 => 45,  169 => 44,  160 => 42,  156 => 41,  152 => 39,  143 => 37,  139 => 36,  135 => 34,  126 => 32,  122 => 31,  117 => 29,  111 => 28,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Parrainage{% endblock %}

{% block body %}

    <div class=\"row mt-6\">
        <div class=\"col-md-12 col-12\">
            <div class=\"container-fluid mt-2 px-6\">

                <div class=\"card\">
                    <div class=\"card-header bg-white  py-3\">Résumé de l'étudiant</div>
                    <div class=\"table-responsive text-center\" style=\"font-size: 17px\">
                        <table class=\"table text-nowrap mb-0\">
                            <thead class=\"table-light\" >
                            <tr>
                                <th>Etudiant</th>
                                <th>Genre</th>
                                <th>Souhaits</th>
                                <th>Langues</th>
                                <th>Activités</th>
                                <th>Ville</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=\"align-middle\">{{ student.person.firstname }} {{ student.person.lastname }}</td>
                                    <td class=\"align-middle\">{{ student.civility.value }}</td>
                                    <td class=\"align-middle\">
                                        {% for wish in student.wishes %}
                                            {{ wish.value }}
                                        {% endfor %}
                                    </td>
                                    <td class=\"align-middle\">
                                        {% for language in student.languages %}
                                            {{ language.name }}
                                        {% endfor %}
                                    </td>
                                    <td class=\"align-middle\">
                                        {% for field in student.curriculum.fields %}
                                            {{ field.name }}
                                        {% endfor %}
                                    </td>
                                    <td class=\"align-middle\">{{ student.city.name }}</td>
                                <tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mt-6\">
        <div class=\"col-md-12 col-12\">
            <div class=\"container-fluid mt-2 px-6\">
                <div class=\"card\" style=\"margin-top: 3%\">
                <div class=\"card-header bg-white  py-4\">
                    <h4 class=\"mb-0\">Parrainages potentiels</h4>
                </div>
                    <div class=\"table-responsive text-center\" style=\"font-size: 17px\">
                        <table class=\"table text-nowrap mb-0\">
                            <thead class=\"table-light\" >
                            <tr>
                            <th>Parrain</th>
                            <th>Score</th>
                            <th>Souhaits</th>
                            <th>Valeurs</th>
                            <th>Ville</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for sponsorship in sponsorships %}
                            <tr>
                                <td class=\"align-middle\">{{ sponsorship.sponsorProposal.person.firstname }}{{ sponsorship.sponsorProposal.person.lastname }}
                                {% if student.civility.value != sponsorship.sponsorProposal.civility.value %}
                                    <i style=\"color: red; font-size: 120%\" class=\"bi bi-exclamation-triangle\"></i>
                                {% endif %}

                                </td>
                                <td class=\"align-middle\">{{ sponsorship.score }}</td>
                                <td class=\"align-middle\">
                                    Langues : {{ sponsorship.scoreIndicators['language'] }} <br>
                                    Genre : {{ sponsorship.scoreIndicators['gender'] }} <br>
                                    Souhaits : {{ sponsorship.scoreIndicators['objective'] }} <br>
                                    Domaine : {{ sponsorship.scoreIndicators['domain'] }} <br>
                                    Localisation : {{ sponsorship.scoreIndicators['location'] }} <br>
                                </td>
                                <td class=\"align-middle\">
                                    {% for language in  sponsorship.sponsorProposal.languages %}
                                        {{ language.value }}
                                    {% endfor %}
                                    <br>
                                    {{ sponsorship.sponsorProposal.civility.value }}
                                    <br>

                                    {% for wish in  sponsorship.sponsorProposal.wishes %}
                                        {{ wish.value }}
                                    {% endfor %}
                                    <br>


                                    {% set cpt = 0 %}

                                    {% for field in sponsorship.sponsorProposal.workfields %}
                                        {% set cpt = cpt + 1 %}
                                        {{ field.name }}
                                        {% if cpt < sponsorship.sponsorProposal.workfields | length %}
                                            ,
                                        {% endif %}
                                    {% endfor %}
                                    <br>

                                    {{ sponsorship.sponsorProposal.city.name }}
                                </td>
                                <td class=\"align-middle\">{{ sponsorship.sponsorProposal.city.name }}</td>

                                <td class=\"align-middle\">
                                    <a href=\"{{ path('app_sponsorship_validate', {'sponsorship' : sponsorship.id}) }}\" ><i style=\"font-size: 150%; color: limegreen\" class=\"bi bi-check-circle\"></i></a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"9\">no records found</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "dashboard/match/sponsorship.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/match/sponsorship.html.twig");
    }
}
