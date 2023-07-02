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

/* dashboard/match/sponsorships.html.twig */
class __TwigTemplate_de3c1c2c6e3ca452d50632fa91d655f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/match/sponsorships.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/match/sponsorships.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/match/sponsorships.html.twig", 1);
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

        echo "Parrainages";
        
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
<script>
    function search(val){
        var value = val.toLowerCase();
        \$(\"#sponsorships tr\").filter(function() {
        \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
        });
    }
</script>

    <div class=\"bg-primary pt-2 pb-4\">
        <div class=\"ms-lg-3 d-none d-md-none d-lg-block\" style=\"margin-top: 5%\">

            <!-- Form -->
            <form class=\"d-flex align-items-center\" autocomplete=\"off\">
                <input style=\"width: 70%; margin-left: 15%\" type=\"search\" class=\"form-control\" placeholder=\"Rechercher un utilisateur\" oninput=\"search(this.value, 'sponsorships')\"/>
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
                        <th>Date de début</th>
                        <th>Administrateur</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody id=\"sponsorships\">
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sponsorships"]) || array_key_exists("sponsorships", $context) ? $context["sponsorships"] : (function () { throw new RuntimeError('Variable "sponsorships" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sponsorship"]) {
            // line 52
            echo "                        <tr>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorRequest", [], "any", false, false, false, 55), "person", [], "any", false, false, false, 55), "firstname", [], "any", false, false, false, 55), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorRequest", [], "any", false, false, false, 55), "person", [], "any", false, false, false, 55), "lastname", [], "any", false, false, false, 55)), "html", null, true);
            echo "
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 60), "person", [], "any", false, false, false, 60), "firstname", [], "any", false, false, false, 60), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 60), "person", [], "any", false, false, false, 60), "lastname", [], "any", false, false, false, 60)), "html", null, true);
            echo "
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\" style=\"color: cornflowerblue\">
                                    ";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "createdAt", [], "any", false, false, false, 65), "d-m-Y"), "html", null, true);
            echo "
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "updatedAt", [], "any", false, false, false, 70), "d-m-Y"), "html", null, true);
            echo "
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    nom admin
                                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsorship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    </tbody>
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
        return "dashboard/match/sponsorships.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 85,  172 => 70,  164 => 65,  154 => 60,  144 => 55,  139 => 52,  135 => 51,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Parrainages{% endblock %}

{% block body %}

<script>
    function search(val){
        var value = val.toLowerCase();
        \$(\"#sponsorships tr\").filter(function() {
        \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
        });
    }
</script>

    <div class=\"bg-primary pt-2 pb-4\">
        <div class=\"ms-lg-3 d-none d-md-none d-lg-block\" style=\"margin-top: 5%\">

            <!-- Form -->
            <form class=\"d-flex align-items-center\" autocomplete=\"off\">
                <input style=\"width: 70%; margin-left: 15%\" type=\"search\" class=\"form-control\" placeholder=\"Rechercher un utilisateur\" oninput=\"search(this.value, 'sponsorships')\"/>
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
                        <th>Date de début</th>
                        <th>Administrateur</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody id=\"sponsorships\">
                    {% for sponsorship in sponsorships %}
                        <tr>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    {{ sponsorship.sponsorRequest.person.firstname }} {{sponsorship.sponsorRequest.person.lastname | upper }}
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    {{ sponsorship.sponsorProposal.person.firstname }} {{sponsorship.sponsorProposal.person.lastname | upper }}
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\" style=\"color: cornflowerblue\">
                                    {{ sponsorship.createdAt | date(\"d-m-Y\") }}
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    {{ sponsorship.updatedAt | date(\"d-m-Y\") }}
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    nom admin
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

{% endblock %}", "dashboard/match/sponsorships.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/match/sponsorships.html.twig");
    }
}
