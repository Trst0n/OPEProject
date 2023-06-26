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

        /** TODO Display block/none filter boostrap */

        function search(val){
            let personlist = []
            personlist = ";
        // line 13
        echo json_encode((isset($context["jsvar"]) || array_key_exists("jsvar", $context) ? $context["jsvar"] : (function () { throw new RuntimeError('Variable "jsvar" does not exist.', 13, $this->source); })()));
        echo ";


            let startwith = [];
            let within = [];

            for(var personl in personlist){
                if((personlist[personl][\"firstname\"].toLowerCase()).startsWith(val.toLowerCase()) || (personlist[personl][\"lastname\"].toLowerCase()).startsWith(val.toLowerCase()) ){
                    startwith.push(personlist[personl]);
                }
                else if(((personlist[personl][\"firstname\"].toLowerCase()).concat(personlist[personl][\"lastname\"].toLowerCase())).includes(val.toLowerCase())){
                    within.push(personlist[personl]);
                }
            }

            let personByName = startwith.concat(within)

            document.getElementById('persons').innerHTML = \"\";
            document.getElementById('noresult').innerHTML = \"\";

            if(personByName.length === 0){
                document.getElementById('noresult').innerHTML = \"<div><div class=\\\"container-fluid text-center\\\" style=\\\"margin-top: 10%\\\"> <h3> Aucun résulat pour la recherche \\\"\" + val +\"\\\" </h3></div></div>\";
            }
            for(var person in personByName){
                document.getElementById('persons').innerHTML +=  \"<tr> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\">\" + personByName[person][\"firstname\"] + \"&nbsp;\" + (personByName[person][\"lastname\"]).toUpperCase() +
                    \"</div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\"> \" + personByName[person][\"createAt\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\" style=\\\"color: cornflowerblue\\\">\" +
                    personByName[person][\"email\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\">\" + personByName[person][\"phonenumber\"] +
                    \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\" style=\\\"color: mediumpurple\\\">\" + personByName[person][\"status\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\"> <a href=\\\"./user/\"+ personByName[person][\"id\"] +\"\\\"><i style=\\\"font-size: 120%\\\" class=\\\"bi bi-info-circle\\\"></i></a> </div></td> </tr>\";
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
        echo "    <div class=\"bg-primary pt-2 pb-4\">

    <div class=\"ms-lg-3 d-none d-md-none d-lg-block\" style=\"margin-top: 5%\">

        <!-- Form -->
        <form class=\"d-flex align-items-center\" autocomplete=\"off\">
            <input style=\"width: 70%; margin-left: 15%\" type=\"search\" class=\"form-control\" placeholder=\"Rechercher un utilisateur\" oninput=\"search(this.value)\"/>
        </form>
        <br>
        <div class=\"text-center\">
            <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Parrain &nbsp;</button>
            <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Etudiant &nbsp;</button>
            <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Primary &nbsp;</button>
            <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Primary &nbsp;</button>
            <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Primary &nbsp;</button>
            <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Primary &nbsp;</button>
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
                <th>Identité</th>
                <th><i class=\"bi bi-calendar\"></i> Date d'inscription</th>
                <th><i class=\"bi bi-envelope\"></i> Email</th>
                <th><i class=\"bi bi-telephone\"></i> N° Téléphone </th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody id=\"persons\">
                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) || array_key_exists("persons", $context) ? $context["persons"] : (function () { throw new RuntimeError('Variable "persons" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 85
            echo "                    <tr>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                ";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "firstname", [], "any", false, false, false, 88), "html", null, true);
            echo " &nbsp; ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "lastname", [], "any", false, false, false, 88)), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                ";
            // line 93
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "createdAt", [], "any", false, false, false, 93), "d-m-Y"), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\" style=\"color: cornflowerblue\">
                                ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "email", [], "any", false, false, false, 98), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "phonenumber", [], "any", false, false, false, 103), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\" style=\"color: mediumpurple\">
                                ";
            // line 108
            if ($this->extensions['App\Twig\AppExtension']->isInstanceof($context["person"], (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 108, $this->source); })()))) {
                // line 109
                echo "                                    Étudiant
                                ";
            } else {
                // line 111
                echo "                                    Parrain
                                ";
            }
            // line 113
            echo "                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_user", ["id" => twig_get_attribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 117)]), "html", null, true);
            echo "\"><i style=\"font-size: 120%\" class=\"bi bi-info-circle\"></i></a>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
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
        return "dashboard/persons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 122,  248 => 117,  242 => 113,  238 => 111,  234 => 109,  232 => 108,  224 => 103,  216 => 98,  208 => 93,  198 => 88,  193 => 85,  189 => 84,  151 => 48,  141 => 47,  98 => 13,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block javascripts %}

    <script>

        /** TODO Display block/none filter boostrap */

        function search(val){
            let personlist = []
            personlist = {{ jsvar | json_encode() | raw}};


            let startwith = [];
            let within = [];

            for(var personl in personlist){
                if((personlist[personl][\"firstname\"].toLowerCase()).startsWith(val.toLowerCase()) || (personlist[personl][\"lastname\"].toLowerCase()).startsWith(val.toLowerCase()) ){
                    startwith.push(personlist[personl]);
                }
                else if(((personlist[personl][\"firstname\"].toLowerCase()).concat(personlist[personl][\"lastname\"].toLowerCase())).includes(val.toLowerCase())){
                    within.push(personlist[personl]);
                }
            }

            let personByName = startwith.concat(within)

            document.getElementById('persons').innerHTML = \"\";
            document.getElementById('noresult').innerHTML = \"\";

            if(personByName.length === 0){
                document.getElementById('noresult').innerHTML = \"<div><div class=\\\"container-fluid text-center\\\" style=\\\"margin-top: 10%\\\"> <h3> Aucun résulat pour la recherche \\\"\" + val +\"\\\" </h3></div></div>\";
            }
            for(var person in personByName){
                document.getElementById('persons').innerHTML +=  \"<tr> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\">\" + personByName[person][\"firstname\"] + \"&nbsp;\" + (personByName[person][\"lastname\"]).toUpperCase() +
                    \"</div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\"> \" + personByName[person][\"createAt\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\" style=\\\"color: cornflowerblue\\\">\" +
                    personByName[person][\"email\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\">\" + personByName[person][\"phonenumber\"] +
                    \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\" style=\\\"color: mediumpurple\\\">\" + personByName[person][\"status\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\"> <a href=\\\"./user/\"+ personByName[person][\"id\"] +\"\\\"><i style=\\\"font-size: 120%\\\" class=\\\"bi bi-info-circle\\\"></i></a> </div></td> </tr>\";
            }
        }
    </script>

{% endblock %}

{% block body %}
    <div class=\"bg-primary pt-2 pb-4\">

    <div class=\"ms-lg-3 d-none d-md-none d-lg-block\" style=\"margin-top: 5%\">

        <!-- Form -->
        <form class=\"d-flex align-items-center\" autocomplete=\"off\">
            <input style=\"width: 70%; margin-left: 15%\" type=\"search\" class=\"form-control\" placeholder=\"Rechercher un utilisateur\" oninput=\"search(this.value)\"/>
        </form>
        <br>
        <div class=\"text-center\">
            <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Parrain &nbsp;</button>
            <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Etudiant &nbsp;</button>
            <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Primary &nbsp;</button>
            <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Primary &nbsp;</button>
            <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Primary &nbsp;</button>
            <button type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\">&nbsp; Primary &nbsp;</button>
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
                <th>Identité</th>
                <th><i class=\"bi bi-calendar\"></i> Date d'inscription</th>
                <th><i class=\"bi bi-envelope\"></i> Email</th>
                <th><i class=\"bi bi-telephone\"></i> N° Téléphone </th>
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
                            <div class=\"text-center\" style=\"color: mediumpurple\">
                                {% if person is instanceof(student) %}
                                    Étudiant
                                {% else %}
                                    Parrain
                                {% endif %}
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                <a href=\"{{ path('app_dashboard_user', {'id': person.id}) }}\"><i style=\"font-size: 120%\" class=\"bi bi-info-circle\"></i></a>
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

{% endblock %}
", "dashboard/persons.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/persons.html.twig");
    }
}
