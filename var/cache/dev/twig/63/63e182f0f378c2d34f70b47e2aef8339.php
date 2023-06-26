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

/* dashboard/matches.html.twig */
class __TwigTemplate_92f165f9fc3341fdb0eab3c780ab6f74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/matches.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/matches.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/matches.html.twig", 1);
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

        echo "Matchs";
        
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
        echo "    <div class=\"table-responsive text-center\" style=\"margin-top: 3%; font-size: 17px\">
        <table class=\"table text-nowrap mb-0\">
            <thead class=\"table-light\" >
            <tr>
                <th>Etudiant</th>
                <th>Parrain</th>
                <th><i class=\"bi bi-calendar\"></i> Date de création</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 19
            echo "                <tr>
                    <td class=\"align-middle\">
                        <div class=\"text-center\">
                            ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "sponsorRequest", [], "any", false, false, false, 22), "person", [], "any", false, false, false, 22), "firstname", [], "any", false, false, false, 22), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "sponsorRequest", [], "any", false, false, false, 22), "person", [], "any", false, false, false, 22), "lastname", [], "any", false, false, false, 22)), "html", null, true);
            echo "
                        </div>
                    </td>
                    <td class=\"align-middle\">
                        <div class=\"text-center\">
                            ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "sponsorProposal", [], "any", false, false, false, 27), "person", [], "any", false, false, false, 27), "firstname", [], "any", false, false, false, 27), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "sponsorProposal", [], "any", false, false, false, 27), "person", [], "any", false, false, false, 27), "lastname", [], "any", false, false, false, 27)), "html", null, true);
            echo "
                        </div>
                    </td>
                    <td class=\"align-middle\">
                        <div class=\"text-center\" style=\"color: cornflowerblue\">
                            ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "createdAt", [], "any", false, false, false, 32), "d-m-Y"), "html", null, true);
            echo "
                        </div>
                    </td>
                    <td class=\"align-middle\">
                        <div class=\"text-center\">
                            ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, $context["match"], "state", [], "any", false, false, false, 37) == "initialized")) {
                // line 38
                echo "                                Attente réponse
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 39
$context["match"], "state", [], "any", false, false, false, 39) == "sponsor_approved")) {
                // line 40
                echo "                                Attente réponse (étudiant)
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 41
$context["match"], "state", [], "any", false, false, false, 41) == "student_approved")) {
                // line 42
                echo "                                Attente réponse (parrain)
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 43
$context["match"], "state", [], "any", false, false, false, 43) == "approved")) {
                // line 44
                echo "                                Attente prise de contact
                            ";
            }
            // line 46
            echo "                        </div>
                    </td>
                    <td class=\"align-middle\">
                        <div class=\"text-center\">
                            <a href=\"#\"><i style=\"font-size: 120%\" class=\"bi bi-info-circle\"></i></a>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </tbody>
        </table>
        <p id=\"noresult\"></p>
    </div>
    <p style=\"margin-bottom: 7%\"></p>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/matches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 55,  160 => 46,  156 => 44,  154 => 43,  151 => 42,  149 => 41,  146 => 40,  144 => 39,  141 => 38,  139 => 37,  131 => 32,  121 => 27,  111 => 22,  106 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Matchs{% endblock %}

{% block body %}
    <div class=\"table-responsive text-center\" style=\"margin-top: 3%; font-size: 17px\">
        <table class=\"table text-nowrap mb-0\">
            <thead class=\"table-light\" >
            <tr>
                <th>Etudiant</th>
                <th>Parrain</th>
                <th><i class=\"bi bi-calendar\"></i> Date de création</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for match in matches %}
                <tr>
                    <td class=\"align-middle\">
                        <div class=\"text-center\">
                            {{ match.sponsorRequest.person.firstname }} {{match.sponsorRequest.person.lastname | upper }}
                        </div>
                    </td>
                    <td class=\"align-middle\">
                        <div class=\"text-center\">
                            {{ match.sponsorProposal.person.firstname }} {{match.sponsorProposal.person.lastname | upper }}
                        </div>
                    </td>
                    <td class=\"align-middle\">
                        <div class=\"text-center\" style=\"color: cornflowerblue\">
                            {{ match.createdAt | date(\"d-m-Y\") }}
                        </div>
                    </td>
                    <td class=\"align-middle\">
                        <div class=\"text-center\">
                            {% if match.state == \"initialized\"  %}
                                Attente réponse
                            {% elseif match.state == \"sponsor_approved\" %}
                                Attente réponse (étudiant)
                            {% elseif match.state == \"student_approved\" %}
                                Attente réponse (parrain)
                            {% elseif match.state == \"approved\" %}
                                Attente prise de contact
                            {% endif %}
                        </div>
                    </td>
                    <td class=\"align-middle\">
                        <div class=\"text-center\">
                            <a href=\"#\"><i style=\"font-size: 120%\" class=\"bi bi-info-circle\"></i></a>
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <p id=\"noresult\"></p>
    </div>
    <p style=\"margin-bottom: 7%\"></p>



{% endblock %}", "dashboard/matches.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/matches.html.twig");
    }
}
