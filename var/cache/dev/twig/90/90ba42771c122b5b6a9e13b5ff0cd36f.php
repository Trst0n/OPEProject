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

/* dashboard/persons.html.twig */
class __TwigTemplate_c117ef0fc19b214a5784a17f0ad9e50b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/persons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/persons.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/persons.html.twig", 1);
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
        function search(val){
            let personlist = []
            personlist = ";
        // line 10
        echo json_encode((isset($context["jsvar"]) || array_key_exists("jsvar", $context) ? $context["jsvar"] : (function () { throw new RuntimeError('Variable "jsvar" does not exist.', 10, $this->source); })()));
        echo ";


            let startwith = [];
            let within = [];

            for(var personl in personlist){
                if((personlist[personl][\"firstname\"].toLowerCase()).startsWith(val.toLowerCase()) || (personlist[personl][\"lastname\"].toLowerCase()).startsWith(val.toLowerCase()) ){
                    startwith.push(personlist[personl]);
                }
                else if((personlist[personl][\"firstname\"].toLowerCase()).includes(val.toLowerCase()) || (personlist[personl][\"lastname\"].toLowerCase()).includes(val.toLowerCase())){
                    within.push(personlist[personl]);
                }
            }

            let personByName = startwith.concat(within)

            document.getElementById('persons').innerHTML = \"\";
            document.getElementById('noresult').innerHTML = \"\";

            if(personByName.length === 0){
                document.getElementById('noresult').innerHTML = \"<div><div class=\\\"container-fluid text-center\\\" style=\\\"margin-top: 10%\\\"> <h3> Aucun résulat pour la recherche \\\"\" + val +\"\\\" </h3></div></div>\";
            }

            console.log(personByName)
            for(var person in personByName){
                console.log(personByName[person])
                document.getElementById('persons').innerHTML +=  \"<tr> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\">\" + personByName[person][\"firstname\"] + \"&nbsp;\" + (personByName[person][\"lastname\"]).toUpperCase() +
                    \"</div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\"> \" + personByName[person][\"createAt\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\" style=\\\"color: cornflowerblue\\\">\" +
                    personByName[person][\"email\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\">\" + personByName[person][\"phonenumber\"] +
                    \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\" style=\\\"color: darkred\\\">\" + personByName[person][\"status\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\"> <a href=\\\"#\\\"><i style=\\\"font-size: 120%\\\" class=\\\"bi bi-info-circle\\\"></i></a> </div></td> </tr>\";
            }
        }
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
    <div class=\"ms-lg-3 d-none d-md-none d-lg-block\" style=\"margin-top: 5%\">
        <!-- Form -->
        <form class=\"d-flex align-items-center\">
            <input style=\"width: 70%; margin-left: 15%\" type=\"search\" class=\"form-control\" placeholder=\"Rechercher un utilisateur\" oninput=\"search(this.value)\"/>
        </form>
    </div>
";
        // line 62
        echo "
    <div class=\"table-responsive text-center\" style=\"margin-top: 3%\">
        <table class=\"table text-nowrap mb-0\">
            <thead class=\"table-light\">
            <tr>
                <th>Identité</th>
                <th>Date d'inscription</th>
                <th>Email</th>
                <th>N° Téléphone</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody id=\"persons\">
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) || array_key_exists("persons", $context) ? $context["persons"] : (function () { throw new RuntimeError('Variable "persons" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 77
            echo "                    <tr>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "firstname", [], "any", false, false, false, 80), "html", null, true);
            echo " &nbsp; ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "lastname", [], "any", false, false, false, 80)), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                ";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "createdAt", [], "any", false, false, false, 85), "d-m-Y"), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\" style=\"color: cornflowerblue\">
                                ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "email", [], "any", false, false, false, 90), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "phonenumber", [], "any", false, false, false, 95), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\" style=\"color: darkred\">
                                ";
            // line 100
            if ($this->extensions['App\Twig\AppExtension']->isInstanceof($context["person"], (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 100, $this->source); })()))) {
                // line 101
                echo "                                    Etudiant
                                ";
            } else {
                // line 103
                echo "                                    Parrain
                                ";
            }
            // line 105
            echo "                            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "            </tbody>
        </table>
        <p id=\"noresult\"></p>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/persons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 114,  229 => 105,  225 => 103,  221 => 101,  219 => 100,  211 => 95,  203 => 90,  195 => 85,  185 => 80,  180 => 77,  176 => 76,  160 => 62,  151 => 48,  141 => 47,  95 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block javascripts %}

    <script>
        function search(val){
            let personlist = []
            personlist = {{ jsvar | json_encode() | raw}};


            let startwith = [];
            let within = [];

            for(var personl in personlist){
                if((personlist[personl][\"firstname\"].toLowerCase()).startsWith(val.toLowerCase()) || (personlist[personl][\"lastname\"].toLowerCase()).startsWith(val.toLowerCase()) ){
                    startwith.push(personlist[personl]);
                }
                else if((personlist[personl][\"firstname\"].toLowerCase()).includes(val.toLowerCase()) || (personlist[personl][\"lastname\"].toLowerCase()).includes(val.toLowerCase())){
                    within.push(personlist[personl]);
                }
            }

            let personByName = startwith.concat(within)

            document.getElementById('persons').innerHTML = \"\";
            document.getElementById('noresult').innerHTML = \"\";

            if(personByName.length === 0){
                document.getElementById('noresult').innerHTML = \"<div><div class=\\\"container-fluid text-center\\\" style=\\\"margin-top: 10%\\\"> <h3> Aucun résulat pour la recherche \\\"\" + val +\"\\\" </h3></div></div>\";
            }

            console.log(personByName)
            for(var person in personByName){
                console.log(personByName[person])
                document.getElementById('persons').innerHTML +=  \"<tr> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\">\" + personByName[person][\"firstname\"] + \"&nbsp;\" + (personByName[person][\"lastname\"]).toUpperCase() +
                    \"</div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\"> \" + personByName[person][\"createAt\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\" style=\\\"color: cornflowerblue\\\">\" +
                    personByName[person][\"email\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\">\" + personByName[person][\"phonenumber\"] +
                    \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\" style=\\\"color: darkred\\\">\" + personByName[person][\"status\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\"> <a href=\\\"#\\\"><i style=\\\"font-size: 120%\\\" class=\\\"bi bi-info-circle\\\"></i></a> </div></td> </tr>\";
            }
        }
    </script>

{% endblock %}

{% block body %}

    <div class=\"ms-lg-3 d-none d-md-none d-lg-block\" style=\"margin-top: 5%\">
        <!-- Form -->
        <form class=\"d-flex align-items-center\">
            <input style=\"width: 70%; margin-left: 15%\" type=\"search\" class=\"form-control\" placeholder=\"Rechercher un utilisateur\" oninput=\"search(this.value)\"/>
        </form>
    </div>
{#    <div class=\"input-group ms-lg-3\" style=\"margin-top: 5%\" >#}
{#        <form autocomplete=\"off\" class=\"d-flex align-items-center container-fluid\">#}
{#                <div class=\"form-outline\">#}
{#                    <input id=\"myInput\"  type=\"search\" class=\"form-control\" name=\"person\" placeholder=\"Rechercher un utilisateur\"  \" >#}
{#                </div>#}
{#            </form>#}
{#    </div>#}

    <div class=\"table-responsive text-center\" style=\"margin-top: 3%\">
        <table class=\"table text-nowrap mb-0\">
            <thead class=\"table-light\">
            <tr>
                <th>Identité</th>
                <th>Date d'inscription</th>
                <th>Email</th>
                <th>N° Téléphone</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody id=\"persons\">
                {% for person in persons %}
                    <tr>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                {{ person.firstname }} &nbsp; {{ person.lastname | upper }}
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                {{ person.createdAt | date(\"d-m-Y\") }}
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\" style=\"color: cornflowerblue\">
                                {{ person.email }}
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                {{ person.phonenumber }}
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\" style=\"color: darkred\">
                                {% if person is instanceof(student) %}
                                    Etudiant
                                {% else %}
                                    Parrain
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
{% endblock %}
", "dashboard/persons.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/persons.html.twig");
    }
}
