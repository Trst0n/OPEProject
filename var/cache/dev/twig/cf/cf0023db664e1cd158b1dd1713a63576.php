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

/* dashboard/users/administrator.html.twig */
class __TwigTemplate_1777fe06c50a7e98b42d1d85a2bfe7c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/users/administrator.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/users/administrator.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/users/administrator.html.twig", 1);
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
        echo "<div class=\"m-4 mt-6\">
    <div class=\"py-6\">
    <!-- row -->
    <div class=\"row\">
    <div class=\"col-xl-7 col-lg-12 col-md-12 col-12 mb-6\">
        <div class=\"card smooth-shadow-md\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">Listes des Administrateurs</h3>

                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["administrators"]) || array_key_exists("administrators", $context) ? $context["administrators"] : (function () { throw new RuntimeError('Variable "administrators" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 16
            echo "
                    <div class=\"d-md-flex justify-content-between align-items-center mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div>
                                <div class=\"icon-shape icon-lg border p-4 rounded-1\">
                                    <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/brand/logo/brand-logo.png"), "html", null, true);
            echo "\" alt=\"\">
                                </div>
                            </div>
                            <!-- text -->
                            <div class=\"ms-3 \">
                                <h5 class=\"mb-1\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "username", [], "any", false, false, false, 26), "html", null, true);
            echo "</h5>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center ms-10 ms-md-0 mt-3\">
                            ";
            // line 30
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, $context["admin"], "roles", [], "any", false, false, false, 30))) {
                // line 31
                echo "                                <button class=\"btn btn-dark-danger btn-sm\" disabled> Supprimer</button>

                            ";
            } else {
                // line 34
                echo "                                <a class=\"btn btn-dark-danger btn-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_admin_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\">Supprimer</a>
                            ";
            }
            // line 36
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "

            </div>
        </div>
    </div>

    <div class=\"col-xl-5 col-lg-12 col-md-12 col-12 mb-6\">
                <div class=\"card smooth-shadow-md\">
                    <!-- Card body -->
                    <div class=\"card-body p-6\">
                        <div class=\"mb-4\">
                            <h3 class=\"card-title\">Nouveau compte administrateur</h3>
                            <p class=\"mb-6\">Entrez les informations du nouvel Administrateur.</p>
                        </div>
                        <form action=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_admin_create");
        echo "\" method=\"post\">
                            <!-- Username -->
                            <div class=\"mb-3\">
                                <label for=\"username\" class=\"form-label\">Username</label>
                                <input type=\"text\" autocomplete=\"off\" id=\"username\" class=\"form-control\" name=\"username\" placeholder=\"User Name\" required>
                            </div>
                            <!-- Email -->
                            <div class=\"mb-3\">
                                <label for=\"email\" class=\"form-label\">Email</label>
                                <input type=\"email\" autocomplete=\"off\" id=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email address here\" required>
                            </div>
                            <!-- Password -->
                            <div class=\"mb-3\">
                                <label for=\"password\" class=\"form-label\">Mot de passe</label>
                                <input type=\"password\" autocomplete=\"off\" id=\"password\" class=\"form-control\" name=\"password\" placeholder=\"**************\" required>
                            </div>
";
        // line 74
        echo "                            <div>
                                <!-- Button -->
                                <div class=\"d-grid mb-3 mt-6\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        Creer un nouveau compte
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
        return "dashboard/users/administrator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 74,  162 => 53,  146 => 39,  138 => 36,  132 => 34,  127 => 31,  125 => 30,  118 => 26,  110 => 21,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Parrainages{% endblock %}

{% block body %}
<div class=\"m-4 mt-6\">
    <div class=\"py-6\">
    <!-- row -->
    <div class=\"row\">
    <div class=\"col-xl-7 col-lg-12 col-md-12 col-12 mb-6\">
        <div class=\"card smooth-shadow-md\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">Listes des Administrateurs</h3>

                {% for admin in administrators %}

                    <div class=\"d-md-flex justify-content-between align-items-center mb-4\">
                        <div class=\"d-flex align-items-center\">
                            <div>
                                <div class=\"icon-shape icon-lg border p-4 rounded-1\">
                                    <img src=\"{{ asset('build/images/brand/logo/brand-logo.png') }}\" alt=\"\">
                                </div>
                            </div>
                            <!-- text -->
                            <div class=\"ms-3 \">
                                <h5 class=\"mb-1\">{{ admin.username }}</h5>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center ms-10 ms-md-0 mt-3\">
                            {% if \"ROLE_SUPER_ADMIN\" in admin.roles  %}
                                <button class=\"btn btn-dark-danger btn-sm\" disabled> Supprimer</button>

                            {% else %}
                                <a class=\"btn btn-dark-danger btn-sm\" href=\"{{ path('app_dashboard_admin_delete', {'id' : admin.id}) }}\">Supprimer</a>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}


            </div>
        </div>
    </div>

    <div class=\"col-xl-5 col-lg-12 col-md-12 col-12 mb-6\">
                <div class=\"card smooth-shadow-md\">
                    <!-- Card body -->
                    <div class=\"card-body p-6\">
                        <div class=\"mb-4\">
                            <h3 class=\"card-title\">Nouveau compte administrateur</h3>
                            <p class=\"mb-6\">Entrez les informations du nouvel Administrateur.</p>
                        </div>
                        <form action=\"{{ path('app_dashboard_admin_create') }}\" method=\"post\">
                            <!-- Username -->
                            <div class=\"mb-3\">
                                <label for=\"username\" class=\"form-label\">Username</label>
                                <input type=\"text\" autocomplete=\"off\" id=\"username\" class=\"form-control\" name=\"username\" placeholder=\"User Name\" required>
                            </div>
                            <!-- Email -->
                            <div class=\"mb-3\">
                                <label for=\"email\" class=\"form-label\">Email</label>
                                <input type=\"email\" autocomplete=\"off\" id=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email address here\" required>
                            </div>
                            <!-- Password -->
                            <div class=\"mb-3\">
                                <label for=\"password\" class=\"form-label\">Mot de passe</label>
                                <input type=\"password\" autocomplete=\"off\" id=\"password\" class=\"form-control\" name=\"password\" placeholder=\"**************\" required>
                            </div>
{#                            <!-- Password -->#}
{#                            <div class=\"mb-3\">#}
{#                                <label for=\"confirm-password\" class=\"form-label\">Confirmation mot de passe</label>#}
{#                                <input type=\"password\" id=\"confirm-password\" class=\"form-control \" name=\"password\" placeholder=\"**************\" required>#}
{#                            </div>#}
                            <div>
                                <!-- Button -->
                                <div class=\"d-grid mb-3 mt-6\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        Creer un nouveau compte
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>

{% endblock %}", "dashboard/users/administrator.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/users/administrator.html.twig");
    }
}
