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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/match/sponsorship.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/match/sponsorship.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/match/sponsorship.html.twig", 1);
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

        echo "Parrainage";
        
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
                            <th>Secteur</th>
                            <th>Ville</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 27
        $context["score"] = 100;
        // line 28
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sponsorships"]) || array_key_exists("sponsorships", $context) ? $context["sponsorships"] : (function () { throw new RuntimeError('Variable "sponsorships" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sponsorship"]) {
            // line 29
            echo "                            ";
            $context["score"] = ((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 29, $this->source); })()) - twig_random($this->env, 0, 4));
            // line 30
            echo "                            <tr>
                                <td class=\"align-middle\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 31), "person", [], "any", false, false, false, 31), "firstname", [], "any", false, false, false, 31), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 31), "person", [], "any", false, false, false, 31), "lastname", [], "any", false, false, false, 31), "html", null, true);
            echo "
                                ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 32, $this->source); })()), "civility", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 32), "civility", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32))) {
                // line 33
                echo "                                    <i style=\"color: red; font-size: 120%\" class=\"bi bi-exclamation-triangle\"></i>


                                ";
            }
            // line 37
            echo "
                                </td>
                                <td class=\"align-middle\">";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "%</td>
                                <td class=\"align-middle\">
                                    ";
            // line 41
            $context["cpt"] = 0;
            // line 42
            echo "
                                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sponsorship"], "wishes", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["wish"]) {
                // line 44
                echo "                                        ";
                $context["cpt"] = ((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 44, $this->source); })()) + 1);
                // line 45
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wish"], "value", [], "any", false, false, false, 45), "html", null, true);
                echo "
                                        ";
                // line 46
                if (((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 46, $this->source); })()) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "wishes", [], "any", false, false, false, 46)))) {
                    // line 47
                    echo "                                            ,
                                        ";
                }
                // line 49
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wish'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                                </td>
                                <td class=\"align-middle\">
                                    ";
            // line 52
            $context["cpt"] = 0;
            // line 53
            echo "
                                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 54), "workfields", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 55
                echo "                                        ";
                $context["cpt"] = ((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 55, $this->source); })()) + 1);
                // line 56
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 56), "html", null, true);
                echo "
                                        ";
                // line 57
                if (((isset($context["cpt"]) || array_key_exists("cpt", $context) ? $context["cpt"] : (function () { throw new RuntimeError('Variable "cpt" does not exist.', 57, $this->source); })()) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 57), "workfields", [], "any", false, false, false, 57)))) {
                    // line 58
                    echo "                                            ,
                                        ";
                }
                // line 60
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                                </td>
                                <td class=\"align-middle\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 62), "city", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>

                                <td class=\"align-middle\">
                                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_validate", ["sponsorship" => twig_get_attribute($this->env, $this->source, $context["sponsorship"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" ><i style=\"font-size: 150%; color: limegreen\" class=\"bi bi-check-circle\"></i></a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "                            <tr>
                                <td colspan=\"9\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsorship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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
        return array (  236 => 73,  227 => 69,  218 => 65,  212 => 62,  209 => 61,  203 => 60,  199 => 58,  197 => 57,  192 => 56,  189 => 55,  185 => 54,  182 => 53,  180 => 52,  176 => 50,  170 => 49,  166 => 47,  164 => 46,  159 => 45,  156 => 44,  152 => 43,  149 => 42,  147 => 41,  142 => 39,  138 => 37,  132 => 33,  130 => 32,  125 => 31,  122 => 30,  119 => 29,  113 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Parrainage{% endblock %}

{% block body %}

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
                            <th>Secteur</th>
                            <th>Ville</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% set score = 100 %}
                        {% for sponsorship in sponsorships %}
                            {% set score = score - random(0,4) %}
                            <tr>
                                <td class=\"align-middle\">{{ sponsorship.sponsorProposal.person.firstname }}{{ sponsorship.sponsorProposal.person.lastname }}
                                {% if student.civility.value != sponsorship.sponsorProposal.civility.value %}
                                    <i style=\"color: red; font-size: 120%\" class=\"bi bi-exclamation-triangle\"></i>


                                {% endif %}

                                </td>
                                <td class=\"align-middle\">{{ score }}%</td>
                                <td class=\"align-middle\">
                                    {% set cpt = 0 %}

                                    {% for wish in sponsorship.wishes %}
                                        {% set cpt = cpt + 1 %}
                                        {{ wish.value }}
                                        {% if cpt < sponsorship.wishes | length %}
                                            ,
                                        {% endif %}
                                    {% endfor %}
                                </td>
                                <td class=\"align-middle\">
                                    {% set cpt = 0 %}

                                    {% for field in sponsorship.sponsorProposal.workfields %}
                                        {% set cpt = cpt + 1 %}
                                        {{ field.name }}
                                        {% if cpt < sponsorship.sponsorProposal.workfields | length %}
                                            ,
                                        {% endif %}
                                    {% endfor %}
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
