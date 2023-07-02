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

/* dashboard/users/sponsors.html.twig */
class __TwigTemplate_ba29473e578ebed125b3c4e6d4d3a13b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/users/sponsors.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/users/sponsors.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/users/sponsors.html.twig", 1);
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

        echo "Parrains";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "
    <script>

        function search(val, table){
            var value = val.toLowerCase();
            \$(\"#\"+ table +\" tr\").filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
            });
        }

    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    <div class=\"bg-primary pt-2 pb-5\">

        <div class=\"ms-lg-3 d-none d-md-none d-lg-block\" style=\"margin-top: 5%\">

            <!-- Form -->
            <form class=\"d-flex align-items-center\" autocomplete=\"off\">
                <input style=\"width: 70%; margin-left: 15%\" type=\"search\" class=\"form-control\" placeholder=\"Rechercher un utilisateur\" oninput=\"search(this.value, 'sponsors')\"/>
            </form>
            <br><br>
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
                        <th>Identité</th>
                        <th><i class=\"bi bi-calendar\"></i> Date d'inscription</th>
                        <th><i class=\"bi bi-envelope\"></i> Email</th>
                        <th><i class=\"bi bi-telephone\"></i> N° Téléphone </th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody id=\"sponsors\">
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 49
            echo "                        <tr>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "firstname", [], "any", false, false, false, 52), "html", null, true);
            echo " &nbsp; ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "lastname", [], "any", false, false, false, 52)), "html", null, true);
            echo "
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    ";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "createdAt", [], "any", false, false, false, 57), "d-m-Y"), "html", null, true);
            echo "
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\" style=\"color: cornflowerblue\">
                                    ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "email", [], "any", false, false, false, 62), "html", null, true);
            echo "
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsor"], "phonenumber", [], "any", false, false, false, 67), "html", null, true);
            echo "
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_user", ["id" => twig_get_attribute($this->env, $this->source, $context["sponsor"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\"><i style=\"font-size: 120%\" class=\"bi bi-info-circle\"></i></a>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </tbody>
                </table>
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
        return "dashboard/users/sponsors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 77,  193 => 72,  185 => 67,  177 => 62,  169 => 57,  159 => 52,  154 => 49,  150 => 48,  121 => 21,  111 => 20,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Parrains{% endblock %}

{% block javascripts %}

    <script>

        function search(val, table){
            var value = val.toLowerCase();
            \$(\"#\"+ table +\" tr\").filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
            });
        }

    </script>

{% endblock %}

{% block body %}
    <div class=\"bg-primary pt-2 pb-5\">

        <div class=\"ms-lg-3 d-none d-md-none d-lg-block\" style=\"margin-top: 5%\">

            <!-- Form -->
            <form class=\"d-flex align-items-center\" autocomplete=\"off\">
                <input style=\"width: 70%; margin-left: 15%\" type=\"search\" class=\"form-control\" placeholder=\"Rechercher un utilisateur\" oninput=\"search(this.value, 'sponsors')\"/>
            </form>
            <br><br>
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
                        <th>Identité</th>
                        <th><i class=\"bi bi-calendar\"></i> Date d'inscription</th>
                        <th><i class=\"bi bi-envelope\"></i> Email</th>
                        <th><i class=\"bi bi-telephone\"></i> N° Téléphone </th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody id=\"sponsors\">
                    {% for sponsor in sponsors %}
                        <tr>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    {{ sponsor.firstname }} &nbsp; {{ sponsor.lastname | upper }}
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    {{ sponsor.createdAt | date(\"d-m-Y\") }}
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\" style=\"color: cornflowerblue\">
                                    {{ sponsor.email }}
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    {{ sponsor.phonenumber }}
                                </div>
                            </td>
                            <td class=\"align-middle\">
                                <div class=\"text-center\">
                                    <a href=\"{{ path('app_dashboard_user', {'id': sponsor.id}) }}\"><i style=\"font-size: 120%\" class=\"bi bi-info-circle\"></i></a>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <p style=\"margin-bottom: 7%\"></p>

{% endblock %}
", "dashboard/users/sponsors.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/users/sponsors.html.twig");
    }
}
