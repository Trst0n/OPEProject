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

/* dashboard/users/persons.html.twig */
class __TwigTemplate_64dad5fb9f17b7e76062f8628ce0e74f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/users/persons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/users/persons.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/users/persons.html.twig", 1);
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

        /** TODO Display block/none search */

        function search(val, table){
            ";
        // line 13
        echo "            ";
        // line 14
        echo "

            ";
        // line 17
        echo "            ";
        // line 18
        echo "
            ";
        // line 20
        echo "            ";
        // line 21
        echo "            ";
        // line 22
        echo "            ";
        // line 23
        echo "            ";
        // line 24
        echo "            ";
        // line 25
        echo "            ";
        // line 26
        echo "            ";
        // line 27
        echo "
            ";
        // line 29
        echo "
            ";
        // line 31
        echo "            ";
        // line 32
        echo "
            ";
        // line 34
        echo "            ";
        // line 35
        echo "            ";
        // line 36
        echo "            ";
        // line 37
        echo "            ";
        // line 38
        echo "            ";
        // line 39
        echo "            ";
        // line 40
        echo "            ";
        // line 41
        echo "            ";
        // line 42
        echo "
            var value = val.toLowerCase();
            \$(\"#\"+ table +\" tr\").filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
            });
        }


        function filter(val, table){
            var value = val.toLowerCase();
            \$(\"#\"+ table+\" tr\").filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
            });

            switch (val){
                case \"parrain\":
                    if(document.getElementById('sponsorFilter').className === \"btn btn-dark-secondary btn-sm rounded-5\" ){
                        document.getElementById('sponsorFilter').className = \"btn btn-dark-primary btn-sm rounded-5\"

                        //réaffichage des lignes display none
                        \$(\"#\"+ table+\" tr\").filter(function() {
                            \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -2)
                        });

                    }
                    else{
                        document.getElementById('studentFilter').className = \"btn btn-dark-primary btn-sm rounded-5\"
                        document.getElementById('sponsorFilter').className = \"btn btn-dark-secondary btn-sm rounded-5\"
                    }

                    break;
                case \"étudiant\":
                    if(document.getElementById('studentFilter').className === \"btn btn-dark-secondary btn-sm rounded-5\" ){
                        document.getElementById('studentFilter').className = \"btn btn-dark-primary btn-sm rounded-5\"

                        \$(\"#\"+ table+\" tr\").filter(function() {
                            \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -2)
                        });

                    }
                    else {
                        document.getElementById('sponsorFilter').className = \"btn btn-dark-primary btn-sm rounded-5\"
                        document.getElementById('studentFilter').className = \"btn btn-dark-secondary btn-sm rounded-5\"
                    }
                    break;

                case \"parrainage\":
                    if(document.getElementById('sponsorshipFilter').className === \"btn btn-dark-secondary btn-sm rounded-5\" ){
                        document.getElementById('sponsorshipFilter').className = \"btn btn-dark-primary btn-sm rounded-5\"

                        \$(\"#\"+ table+\" tr\").filter(function() {
                            \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -2)
                        });
                    }
                    else {
                        document.getElementById('sponsorshipFilter').className = \"btn btn-dark-secondary btn-sm rounded-5\"
                    }
                    break;
            }
    }
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 107
        echo "    <div class=\"bg-primary pt-2 pb-4\">
        <div class=\"ms-lg-3 d-none d-md-none d-lg-block\" style=\"margin-top: 5%\">

        <!-- Form -->
            <form class=\"d-flex align-items-center\" autocomplete=\"off\">
                <input style=\"width: 70%; margin-left: 15%\" type=\"search\" class=\"form-control\" placeholder=\"Rechercher un utilisateur\" oninput=\"search(this.value, 'persons')\"/>
            </form>
            <br>
            <div class=\"text-center\" id=\"buttons\">
                <button id=\"sponsorFilter\" type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\" onclick=\"filter('parrain', 'persons')\">&nbsp; Parrain &nbsp;</button>
                <button id=\"studentFilter\" type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\" onclick=\"filter('étudiant', 'persons')\">&nbsp; Etudiant &nbsp;</button>
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
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) || array_key_exists("persons", $context) ? $context["persons"] : (function () { throw new RuntimeError('Variable "persons" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 139
            echo "                    <tr>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "firstname", [], "any", false, false, false, 142), "html", null, true);
            echo " &nbsp; ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "lastname", [], "any", false, false, false, 142)), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                ";
            // line 147
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "createdAt", [], "any", false, false, false, 147), "d-m-Y"), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\" style=\"color: cornflowerblue\">
                                ";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "email", [], "any", false, false, false, 152), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "phonenumber", [], "any", false, false, false, 157), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\" style=\"color: mediumpurple\">
                                ";
            // line 162
            if ($this->extensions['App\Twig\AppExtension']->isInstanceof($context["person"], (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 162, $this->source); })()))) {
                // line 163
                echo "                                    Étudiant
                                ";
            } else {
                // line 165
                echo "                                    Parrain
                                ";
            }
            // line 167
            echo "                            </div>
                        </td>
                        <td class=\"align-middle\">
                            <div class=\"text-center\">
                                <a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_user", ["id" => twig_get_attribute($this->env, $this->source, $context["person"], "id", [], "any", false, false, false, 171)]), "html", null, true);
            echo "\"><i style=\"font-size: 120%\" class=\"bi bi-info-circle\"></i></a>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
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
        return "dashboard/users/persons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 176,  323 => 171,  317 => 167,  313 => 165,  309 => 163,  307 => 162,  299 => 157,  291 => 152,  283 => 147,  273 => 142,  268 => 139,  264 => 138,  231 => 107,  221 => 106,  149 => 42,  147 => 41,  145 => 40,  143 => 39,  141 => 38,  139 => 37,  137 => 36,  135 => 35,  133 => 34,  130 => 32,  128 => 31,  125 => 29,  122 => 27,  120 => 26,  118 => 25,  116 => 24,  114 => 23,  112 => 22,  110 => 21,  108 => 20,  105 => 18,  103 => 17,  99 => 14,  97 => 13,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block javascripts %}

    <script>

        /** TODO Display block/none search */

        function search(val, table){
            {#let personlist = []#}
            {#personlist = {{ jsvar | json_encode() | raw}};#}


            {#let startwith = [];#}
            {#let within = [];#}

            {#for(var personl in personlist){#}
            {#    if((personlist[personl][\"firstname\"].toLowerCase()).startsWith(val.toLowerCase()) || (personlist[personl][\"lastname\"].toLowerCase()).startsWith(val.toLowerCase()) ){#}
            {#        startwith.push(personlist[personl]);#}
            {#    }#}
            {#    else if(((personlist[personl][\"firstname\"].toLowerCase()).concat(personlist[personl][\"lastname\"].toLowerCase())).includes(val.toLowerCase())){#}
            {#        within.push(personlist[personl]);#}
            {#    }#}
            {#}#}

            {#let personByName = startwith.concat(within)#}

            {#document.getElementById('persons').innerHTML = \"\";#}
            {#document.getElementById('noresult').innerHTML = \"\";#}

            {#if(personByName.length === 0){#}
            {#    document.getElementById('noresult').innerHTML = \"<div><div class=\\\"container-fluid text-center\\\" style=\\\"margin-top: 15%\\\"> <h3> Aucun résulat pour la recherche \\\"\" + val +\"\\\" </h3></div></div><p style=\\\"margin-bottom: 20%\\\"><p>\";#}
            {#}#}
            {#for(var person in personByName){#}
            {#    document.getElementById('persons').innerHTML +=  \"<tr> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\">\" + personByName[person][\"firstname\"] + \"&nbsp;\" + (personByName[person][\"lastname\"]).toUpperCase() +#}
            {#        \"</div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\"> \" + personByName[person][\"createAt\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\" style=\\\"color: cornflowerblue\\\">\" +#}
            {#        personByName[person][\"email\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\">\" + personByName[person][\"phonenumber\"] +#}
            {#        \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\" style=\\\"color: mediumpurple\\\">\" + personByName[person][\"status\"] + \" </div> </td> <td class=\\\"align-middle\\\"> <div class=\\\"text-center\\\"> <a href=\\\"./user/\"+ personByName[person][\"id\"] +\"\\\"><i style=\\\"font-size: 120%\\\" class=\\\"bi bi-info-circle\\\"></i></a> </div></td> </tr>\";#}
            {#}#}

            var value = val.toLowerCase();
            \$(\"#\"+ table +\" tr\").filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
            });
        }


        function filter(val, table){
            var value = val.toLowerCase();
            \$(\"#\"+ table+\" tr\").filter(function() {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
            });

            switch (val){
                case \"parrain\":
                    if(document.getElementById('sponsorFilter').className === \"btn btn-dark-secondary btn-sm rounded-5\" ){
                        document.getElementById('sponsorFilter').className = \"btn btn-dark-primary btn-sm rounded-5\"

                        //réaffichage des lignes display none
                        \$(\"#\"+ table+\" tr\").filter(function() {
                            \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -2)
                        });

                    }
                    else{
                        document.getElementById('studentFilter').className = \"btn btn-dark-primary btn-sm rounded-5\"
                        document.getElementById('sponsorFilter').className = \"btn btn-dark-secondary btn-sm rounded-5\"
                    }

                    break;
                case \"étudiant\":
                    if(document.getElementById('studentFilter').className === \"btn btn-dark-secondary btn-sm rounded-5\" ){
                        document.getElementById('studentFilter').className = \"btn btn-dark-primary btn-sm rounded-5\"

                        \$(\"#\"+ table+\" tr\").filter(function() {
                            \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -2)
                        });

                    }
                    else {
                        document.getElementById('sponsorFilter').className = \"btn btn-dark-primary btn-sm rounded-5\"
                        document.getElementById('studentFilter').className = \"btn btn-dark-secondary btn-sm rounded-5\"
                    }
                    break;

                case \"parrainage\":
                    if(document.getElementById('sponsorshipFilter').className === \"btn btn-dark-secondary btn-sm rounded-5\" ){
                        document.getElementById('sponsorshipFilter').className = \"btn btn-dark-primary btn-sm rounded-5\"

                        \$(\"#\"+ table+\" tr\").filter(function() {
                            \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -2)
                        });
                    }
                    else {
                        document.getElementById('sponsorshipFilter').className = \"btn btn-dark-secondary btn-sm rounded-5\"
                    }
                    break;
            }
    }
    </script>

{% endblock %}

{% block body %}
    <div class=\"bg-primary pt-2 pb-4\">
        <div class=\"ms-lg-3 d-none d-md-none d-lg-block\" style=\"margin-top: 5%\">

        <!-- Form -->
            <form class=\"d-flex align-items-center\" autocomplete=\"off\">
                <input style=\"width: 70%; margin-left: 15%\" type=\"search\" class=\"form-control\" placeholder=\"Rechercher un utilisateur\" oninput=\"search(this.value, 'persons')\"/>
            </form>
            <br>
            <div class=\"text-center\" id=\"buttons\">
                <button id=\"sponsorFilter\" type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\" onclick=\"filter('parrain', 'persons')\">&nbsp; Parrain &nbsp;</button>
                <button id=\"studentFilter\" type=\"button\" class=\"btn btn-dark-primary btn-sm rounded-5\" onclick=\"filter('étudiant', 'persons')\">&nbsp; Etudiant &nbsp;</button>
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
", "dashboard/users/persons.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/users/persons.html.twig");
    }
}
