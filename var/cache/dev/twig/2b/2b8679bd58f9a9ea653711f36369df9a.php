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
        echo " &nbsp; ";
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
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["sponsorships"]) || array_key_exists("sponsorships", $context) ? $context["sponsorships"] : (function () { throw new RuntimeError('Variable "sponsorships" does not exist.', 74, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 74, $this->source); })()), "score", [], "any", false, false, false, 74) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 74, $this->source); })()), "score", [], "any", false, false, false, 74)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sponsorship"]) {
            // line 75
            echo "                            <tr>
                                <td class=\"align-middle\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 76), "person", [], "any", false, false, false, 76), "firstname", [], "any", false, false, false, 76), "html", null, true);
            echo " &nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 76), "person", [], "any", false, false, false, 76), "lastname", [], "any", false, false, false, 76), "html", null, true);
            echo "
                                ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 77, $this->source); })()), "civility", [], "any", false, false, false, 77), "value", [], "any", false, false, false, 77) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 77), "civility", [], "any", false, false, false, 77), "value", [], "any", false, false, false, 77))) {
                // line 78
                echo "                                    <i style=\"color: red; font-size: 120%\" class=\"bi bi-exclamation-triangle\"></i>
                                ";
            }
            // line 80
            echo "
                                </td>
                                <td class=\"align-middle\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "score", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                                <td class=\"align-middle\">
                                    Langues : ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "scoreIndicators", [], "any", false, false, false, 84), "language", [], "array", false, false, false, 84), "html", null, true);
            echo " <br>
                                    Genre : ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "scoreIndicators", [], "any", false, false, false, 85), "gender", [], "array", false, false, false, 85), "html", null, true);
            echo " <br>
                                    Souhaits : ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "scoreIndicators", [], "any", false, false, false, 86), "objective", [], "array", false, false, false, 86), "html", null, true);
            echo " <br>
                                    Domaine : ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "scoreIndicators", [], "any", false, false, false, 87), "domain", [], "array", false, false, false, 87), "html", null, true);
            echo " <br>
                                    Localisation : ";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "scoreIndicators", [], "any", false, false, false, 88), "location", [], "array", false, false, false, 88), "html", null, true);
            echo " <br>
                                </td>
                                <td class=\"align-middle\">
                                    ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 91), "languages", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 92
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "value", [], "any", false, false, false, 92), "html", null, true);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                    <br>
                                    ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 95), "civility", [], "any", false, false, false, 95), "value", [], "any", false, false, false, 95), "html", null, true);
            echo "
                                    <br>

                                    ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 98), "wishes", [], "any", false, false, false, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["wish"]) {
                // line 99
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wish"], "value", [], "any", false, false, false, 99), "html", null, true);
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wish'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                                    <br>


                                    ";
            // line 104
            $context["cpt"] = 0;
            // line 105
            echo "
                                    ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 106), "workfields", [], "any", false, false, false, 106));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 107
                echo "                                        ";
                $context["cpt"] = ((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 107, $this->source); })()) + 1);
                // line 108
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 108), "html", null, true);
                echo "
                                        ";
                // line 109
                if (((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 109, $this->source); })()) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 109), "workfields", [], "any", false, false, false, 109)))) {
                    // line 110
                    echo "                                            ,
                                        ";
                }
                // line 112
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                                    <br>

                                    ";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 115), "city", [], "any", false, false, false, 115), "name", [], "any", false, false, false, 115), "html", null, true);
            echo "
                                </td>
                                <td class=\"align-middle\">
                                    <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_validate", ["sponsorship" => twig_get_attribute($this->env, $this->source, $context["sponsorship"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\" ><i style=\"font-size: 150%; color: limegreen\" class=\"bi bi-check-circle\"></i></a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 122
            echo "                            <tr>
                                <td colspan=\"9\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsorship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
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
        return array (  352 => 126,  343 => 122,  334 => 118,  328 => 115,  324 => 113,  318 => 112,  314 => 110,  312 => 109,  307 => 108,  304 => 107,  300 => 106,  297 => 105,  295 => 104,  290 => 101,  281 => 99,  277 => 98,  271 => 95,  268 => 94,  259 => 92,  255 => 91,  249 => 88,  245 => 87,  241 => 86,  237 => 85,  233 => 84,  228 => 82,  224 => 80,  220 => 78,  218 => 77,  212 => 76,  209 => 75,  204 => 74,  172 => 45,  169 => 44,  160 => 42,  156 => 41,  152 => 39,  143 => 37,  139 => 36,  135 => 34,  126 => 32,  122 => 31,  117 => 29,  111 => 28,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
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
                                    <td class=\"align-middle\">{{ student.person.firstname }} &nbsp; {{ student.person.lastname }}</td>
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
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for sponsorship in sponsorships | sort((a, b) => b.score <=> a.score ) %}
                            <tr>
                                <td class=\"align-middle\">{{ sponsorship.sponsorProposal.person.firstname }} &nbsp;{{ sponsorship.sponsorProposal.person.lastname }}
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
