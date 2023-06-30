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

/* dashboard/match/matches.html.twig */
class __TwigTemplate_09aff5448d2c3cb6cd9073da074fc881 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/match/matches.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/match/matches.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/match/matches.html.twig", 1);
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
        echo "    <div class=\"bg-primary pt-2 pb-4\">
        <div class=\"ms-lg-3 d-none d-md-none d-lg-block\" style=\"margin-top: 5%\">

            <!-- Form -->
            <form class=\"d-flex align-items-center\" autocomplete=\"off\">
                <input style=\"width: 70%; margin-left: 15%\" type=\"search\" class=\"form-control\" placeholder=\"Rechercher un utilisateur\" oninput=\"search(this.value)\"/>
            </form>
            <br>
            <div class=\"text-center\">
                <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Filtre.. &nbsp;</button>
                <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Filtre.. &nbsp;</button>
                <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Filtre.. &nbsp;</button>
                <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Filtre.. &nbsp;</button>
                <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Filtre.. &nbsp;</button>
                <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Filtre.. &nbsp;</button>
            </div>
        </div>
    </div>
    <div class=\"container-fluid mt-2 px-6\">
    <div class=\"card\" style=\"margin-top: 3%\">
    <div class=\"card-header bg-white  py-4\">
    </div>
    <div class=\"table-responsive text-center\" style=\"font-size: 17px\">
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
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 41
            echo "                <tr>
                    <td class=\"align-middle\">
                        <div class=\"text-center\">
                            ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "sponsorRequest", [], "any", false, false, false, 44), "person", [], "any", false, false, false, 44), "firstname", [], "any", false, false, false, 44), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "sponsorRequest", [], "any", false, false, false, 44), "person", [], "any", false, false, false, 44), "lastname", [], "any", false, false, false, 44)), "html", null, true);
            echo "
                        </div>
                    </td>
                    <td class=\"align-middle\">
                        <div class=\"text-center\">
                            ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "sponsorProposal", [], "any", false, false, false, 49), "person", [], "any", false, false, false, 49), "firstname", [], "any", false, false, false, 49), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["match"], "sponsorProposal", [], "any", false, false, false, 49), "person", [], "any", false, false, false, 49), "lastname", [], "any", false, false, false, 49)), "html", null, true);
            echo "
                        </div>
                    </td>
                    <td class=\"align-middle\">
                        <div class=\"text-center\" style=\"color: cornflowerblue\">
                            ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["match"], "createdAt", [], "any", false, false, false, 54), "d-m-Y"), "html", null, true);
            echo "
                        </div>
                    </td>
                    <td class=\"align-middle\">
                        <div class=\"text-center\">
                            ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, $context["match"], "state", [], "any", false, false, false, 59) == "match")) {
                // line 60
                echo "                                Attente réponse
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 61
$context["match"], "state", [], "any", false, false, false, 61) == "sponsor_approved")) {
                // line 62
                echo "                                Attente réponse (étudiant)
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 63
$context["match"], "state", [], "any", false, false, false, 63) == "student_approved")) {
                // line 64
                echo "                                Attente réponse (parrain)
                            ";
            }
            // line 66
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
        // line 75
        echo "            </tbody>
        </table>
        <p id=\"noresult\"></p>
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
        return "dashboard/match/matches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 75,  177 => 66,  173 => 64,  171 => 63,  168 => 62,  166 => 61,  163 => 60,  161 => 59,  153 => 54,  143 => 49,  133 => 44,  128 => 41,  124 => 40,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Matchs{% endblock %}

{% block body %}
    <div class=\"bg-primary pt-2 pb-4\">
        <div class=\"ms-lg-3 d-none d-md-none d-lg-block\" style=\"margin-top: 5%\">

            <!-- Form -->
            <form class=\"d-flex align-items-center\" autocomplete=\"off\">
                <input style=\"width: 70%; margin-left: 15%\" type=\"search\" class=\"form-control\" placeholder=\"Rechercher un utilisateur\" oninput=\"search(this.value)\"/>
            </form>
            <br>
            <div class=\"text-center\">
                <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Filtre.. &nbsp;</button>
                <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Filtre.. &nbsp;</button>
                <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Filtre.. &nbsp;</button>
                <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Filtre.. &nbsp;</button>
                <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Filtre.. &nbsp;</button>
                <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Filtre.. &nbsp;</button>
            </div>
        </div>
    </div>
    <div class=\"container-fluid mt-2 px-6\">
    <div class=\"card\" style=\"margin-top: 3%\">
    <div class=\"card-header bg-white  py-4\">
    </div>
    <div class=\"table-responsive text-center\" style=\"font-size: 17px\">
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
                            {% if match.state == \"match\"  %}
                                Attente réponse
                            {% elseif match.state == \"sponsor_approved\" %}
                                Attente réponse (étudiant)
                            {% elseif match.state == \"student_approved\" %}
                                Attente réponse (parrain)
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
    </div>
    </div>
    <p style=\"margin-bottom: 7%\"></p>



{% endblock %}", "dashboard/match/matches.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/match/matches.html.twig");
    }
}
