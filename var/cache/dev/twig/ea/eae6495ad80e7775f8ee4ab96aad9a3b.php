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

/* dashboard/users/person.html.twig */
class __TwigTemplate_5b92f7fa610c74a49b9d41e9ad16244b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/users/person.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/users/person.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/users/person.html.twig", 1);
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

        echo "Utilisateur";
        
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
       function views(val){
           switch (val){
               case \"overview\":
                   document.getElementById(val).innerHTML = \"<a class=\\\"nav-link active\\\" href=\\\"#\\\" onclick=\\\"views('overview')\\\">Informations</a>\"
                   document.getElementById(\"sponsorships\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('sponsorships')\\\">Parrainages</a>\"
                   document.getElementById(\"activities\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('activities')\\\">Activité</a>\"

                   // display des divs
                   document.getElementById(\"divOverview\").style.display = \"block\";
                   document.getElementById(\"divSponsorship\").style.display = \"none\";
                   document.getElementById(\"divActivities\").style.display = \"none\";

                   break;
               case \"sponsorships\":
                   document.getElementById(val).innerHTML = \"<a class=\\\"nav-link active\\\" href=\\\"#\\\" onclick=\\\"views('sponsorships')\\\">Parrainages</a>\"
                   document.getElementById(\"activities\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('activities')\\\">Activité</a>\"
                   document.getElementById(\"overview\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('overview')\\\">Informations</a>\"

                   // display des divs
                   document.getElementById(\"divOverview\").style.display = \"none\";
                   document.getElementById(\"divSponsorship\").style.display = \"block\";
                   document.getElementById(\"divActivities\").style.display = \"none\";

                   break;
               case \"activities\":

                   // active link navbar
                   document.getElementById(val).innerHTML = \"<a class=\\\"nav-link active\\\" href=\\\"#\\\" onclick=\\\"views('activities')\\\">Activité</a>\"
                   document.getElementById(\"overview\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('overview')\\\">Informations</a>\"
                   document.getElementById(\"sponsorships\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('sponsorships')\\\">Parrainages</a>\"

                   // display des divs
                   document.getElementById(\"divOverview\").style.display = \"none\";
                   document.getElementById(\"divSponsorship\").style.display = \"none\";
                   document.getElementById(\"divActivities\").style.display = \"block\";

                   break;

           }
       }
   </script>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "            <div class=\"container-fluid p-6\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-12\">
                        <!-- Page header -->
                        <div class=\"border-bottom pb-4 mb-4 \">
                            <h2 class=\"mb-0 fw-bold\">Vue générale</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-12\">
                        <!-- Bg -->
                        <div class=\"pt-20 rounded-top\" style=\"background: url(";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/profile-cover.d8b85219.jpg"), "html", null, true);
        echo ") no-repeat; background-size: cover;\"></div>
                        <div class=\"bg-white rounded-bottom smooth-shadow-sm \">
                            <div class=\"d-flex align-items-center justify-content-between
                  pt-4 pb-6 px-4\">
                                <div class=\"d-flex align-items-center\">
                                    <!-- avatar -->

                                    <div class=\"avatar-xxl avatar-indicators avatar-online me-2 position-relative d-flex justify-content-end align-items-end mt-n10\">
                                        ";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, (isset($context["civility"]) || array_key_exists("civility", $context) ? $context["civility"] : (function () { throw new RuntimeError('Variable "civility" does not exist.', 75, $this->source); })()), "value", [], "any", false, false, false, 75) == "MEN")) {
            // line 76
            echo "                                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/men_avatar.1086b426.png"), "html", null, true);
            echo "\" class=\"avatar-xxl rounded-circle border border-4 border-white-color-40\" alt=\"\">
                                        ";
        } else {
            // line 78
            echo "                                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/women_avatar.c9a1bebd.png"), "html", null, true);
            echo "\" class=\"avatar-xxl rounded-circle border border-4 border-white-color-40\" alt=\"\">
                                        ";
        }
        // line 80
        echo "                                    </div>
                                    <!-- text -->
                                    <div class=\"lh-1\">
                                        <h2 class=\"mb-0\">";
        // line 83
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 83, $this->source); })()), "lastname", [], "any", false, false, false, 83)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 83, $this->source); })()), "firstname", [], "any", false, false, false, 83), "html", null, true);
        echo "</h2>
                                        <p class=\"mb-0 d-block\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 84, $this->source); })()), "email", [], "any", false, false, false, 84), "html", null, true);
        echo "</p>
                                    </div>
                                </div>

                            </div>
                            <!-- nav -->
                            <ul class=\"nav nav-lt-tab px-4\" id=\"pills-tab\" role=\"tablist\">
                                <li class=\"nav-item\" id=\"overview\">
                                    <a class=\"nav-link active\" style=\"cursor: pointer\" onclick=\"views('overview')\">Informations</a>
                                </li>
                                <li class=\"nav-item\" id=\"sponsorships\">
                                    <a class=\"nav-link\" style=\"cursor: pointer\" onclick=\"views('sponsorships')\">Parrainages</a>
                                </li>

                                <li class=\"nav-item\" id=\"activities\">
                                    <a class=\"nav-link\" style=\"cursor: pointer\" onclick=\"views('activities')\">Activité</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- content -->
                <div class=\"py-6\" id=\"divOverview\" style=\"display: block\">
                    <!-- row -->
                            <!-- card -->
                            <div class=\"card\">
                                <!-- card body -->
                                <div class=\"card-body\">
                                    <!-- card title -->
                                    <h4 class=\"card-title\">Informations  [TODO affichage !]</h4>
                                    <span class=\"text-uppercase fw-medium text-dark fs-5 ls-2\"></span>
                                    <div class=\"row\">
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Souhait(s):</h6>
                                            <p class=\"mb-0\">
                                                ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 120, $this->source); })()), "leads", [], "any", false, false, false, 120), "last", [], "any", false, false, false, 120), "wishes", [], "any", false, false, false, 120));
        foreach ($context['_seq'] as $context["_key"] => $context["wish"]) {
            // line 121
            echo "                                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wish"], "value", [], "any", false, false, false, 121), "html", null, true);
            echo "
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wish'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                                            </p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Ville</h6>
                                            <p class=\"mb-0\">";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 127, $this->source); })()), "leads", [], "any", false, false, false, 127), "last", [], "any", false, false, false, 127), "city", [], "any", false, false, false, 127), "name", [], "any", false, false, false, 127), "html", null, true);
        echo "</p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">N° Téléphone</h6>
                                            <p class=\"mb-0\">";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 131, $this->source); })()), "phonenumber", [], "any", false, false, false, 131), "html", null, true);
        echo "</p>
                                        </div>
                                        <div class=\"col-6  mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Email </h6>
                                            <p class=\"mb-0\">";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 135, $this->source); })()), "email", [], "any", false, false, false, 135), "html", null, true);
        echo "</p>
                                        </div>
                                        <div class=\"col-6  mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Location
                                            </h6>
                                            <p class=\"mb-0\">Ahmedabad, India</p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Inscrit le:</h6>
                                            <p class=\"mb-0\">";
        // line 144
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 144, $this->source); })()), "createdAt", [], "any", false, false, false, 144), "d-m-Y"), "html", null, true);
        echo "</p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Langue(s) parlée(s)</h6>
                                            <p class=\"mb-0\">
                                                ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 149, $this->source); })()), "leads", [], "any", false, false, false, 149), "last", [], "any", false, false, false, 149), "languages", [], "any", false, false, false, 149));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 150
            echo "                                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "value", [], "any", false, false, false, 150), "html", null, true);
            echo "
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                                            </p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Domaines d'activités:</h6>
                                            <p class=\"mb-0\">
                                                ";
        // line 157
        if ($this->extensions['App\Twig\AppExtension']->isInstanceof(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 157, $this->source); })()), "leads", [], "any", false, false, false, 157), "last", [], "any", false, false, false, 157), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 157, $this->source); })()))) {
            // line 158
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 158, $this->source); })()), "leads", [], "any", false, false, false, 158), "last", [], "any", false, false, false, 158), "curriculum", [], "any", false, false, false, 158), "fields", [], "any", false, false, false, 158));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 159
                echo "                                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 159), "html", null, true);
                echo "
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                                                ";
        } else {
            // line 162
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 162, $this->source); })()), "leads", [], "any", false, false, false, 162), "last", [], "any", false, false, false, 162), "workfields", [], "any", false, false, false, 162));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 163
                echo "                                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 163), "html", null, true);
                echo "
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                                                ";
        }
        // line 166
        echo "                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class=\"py-6\" id=\"divSponsorship\" style=\"display: none\">
                    <div class=\"card\">
                        <div class=\"card-body\" >
                            ";
        // line 175
        if ((isset($context["hasSponsorship"]) || array_key_exists("hasSponsorship", $context) ? $context["hasSponsorship"] : (function () { throw new RuntimeError('Variable "hasSponsorship" does not exist.', 175, $this->source); })())) {
            // line 176
            echo "                                <div class=\"container py-5\">
                                    <div class=\"main-timeline-4 text-white\">

                                        ";
            // line 179
            $context["altern"] = 0;
            // line 180
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 180, $this->source); })()), "leads", [], "any", false, false, false, 180)));
            foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
                // line 181
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lead"], "sponsorship", [], "any", false, false, false, 181));
                foreach ($context['_seq'] as $context["_key"] => $context["sponsorship"]) {
                    // line 182
                    echo "                                                ";
                    if (($context["sponsorship"] != null)) {
                        // line 183
                        echo "                                                    ";
                        if ((((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 183, $this->source); })()) % 2) == 0)) {
                            // line 184
                            echo "                                                        <div class=\"timeline-4 left-4\">
                                                            <div class=\"card gradient-custom\">
                                                                <div class=\"card-body p-4\">
                                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                                    <h4>";
                            // line 188
                            echo (((twig_get_attribute($this->env, $this->source, $context["sponsorship"], "state", [], "any", false, false, false, 188) == "sponsorship")) ? ("Parrainage") : ("Match"));
                            echo "</h4>
                                                                    <p class=\"small text-white-50 mb-4\">Créé le : ";
                            // line 189
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "createdAt", [], "any", false, false, false, 189), "d-m-Y"), "html", null, true);
                            echo "</p>
                                                                    <p>Parrain : ";
                            // line 190
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 190), "person", [], "any", false, false, false, 190), "firstname", [], "any", false, false, false, 190), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 190), "person", [], "any", false, false, false, 190), "lastname", [], "any", false, false, false, 190), "html", null, true);
                            echo "
                                                                        <br>
                                                                        Etudiant : ";
                            // line 192
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorRequest", [], "any", false, false, false, 192), "person", [], "any", false, false, false, 192), "firstname", [], "any", false, false, false, 192), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorRequest", [], "any", false, false, false, 192), "person", [], "any", false, false, false, 192), "lastname", [], "any", false, false, false, 192), "html", null, true);
                            echo "
                                                                        <br>
                                                                        Statut :
                                                                        ";
                            // line 195
                            if ((twig_get_attribute($this->env, $this->source, $context["sponsorship"], "state", [], "any", false, false, false, 195) == "sponsorship")) {
                                // line 196
                                echo "                                                                            Parrainage en cours.
                                                                        ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 197
$context["sponsorship"], "state", [], "any", false, false, false, 197) == "match")) {
                                // line 198
                                echo "                                                                            Match validé par l'admin.
                                                                        ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 199
$context["sponsorship"], "state", [], "any", false, false, false, 199) == "sponsor_approved")) {
                                // line 200
                                echo "                                                                            En attente de la réponse du parrain
                                                                        ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 201
$context["sponsorship"], "state", [], "any", false, false, false, 201) == "student_approved")) {
                                // line 202
                                echo "                                                                            En attente de la réponse de l'étudiant.
                                                                        ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 203
$context["sponsorship"], "state", [], "any", false, false, false, 203) == "ended")) {
                                // line 204
                                echo "                                                                            Parrainage terminé.
                                                                        ";
                            }
                            // line 206
                            echo "                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
                        } else {
                            // line 211
                            echo "                                                        <div class=\"timeline-4 right-4\">
                                                            <div class=\"card gradient-custom-4\">
                                                                <div class=\"card-body p-4\">
                                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                                    <h4>";
                            // line 215
                            echo (((twig_get_attribute($this->env, $this->source, $context["sponsorship"], "state", [], "any", false, false, false, 215) == "sponsorship")) ? ("Parrainage") : ("Match"));
                            echo "</h4>
                                                                    <p class=\"small text-white-50 mb-4\">";
                            // line 216
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "createdAt", [], "any", false, false, false, 216), "d-m-Y"), "html", null, true);
                            echo "</p>
                                                                    <p>Parrain : ";
                            // line 217
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 217), "person", [], "any", false, false, false, 217), "firstname", [], "any", false, false, false, 217), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 217), "person", [], "any", false, false, false, 217), "lastname", [], "any", false, false, false, 217), "html", null, true);
                            echo "
                                                                        <br>
                                                                        Etudiant : ";
                            // line 219
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorRequest", [], "any", false, false, false, 219), "person", [], "any", false, false, false, 219), "firstname", [], "any", false, false, false, 219), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorRequest", [], "any", false, false, false, 219), "person", [], "any", false, false, false, 219), "lastname", [], "any", false, false, false, 219), "html", null, true);
                            echo "
                                                                        <br>
                                                                        Statut : ";
                            // line 221
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "state", [], "any", false, false, false, 221), "html", null, true);
                            echo "
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    ";
                        }
                        // line 228
                        echo "
                                                    ";
                        // line 229
                        $context["altern"] = ((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 229, $this->source); })()) + 1);
                        // line 230
                        echo "                                                ";
                    }
                    // line 231
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsorship'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 232
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "                                    </div>
                                </div>
                            ";
        } else {
            // line 236
            echo "                                <div class=\"text-center \" style=\"margin-bottom: 15%; margin-top: 12%\">
                                    <h3 class=\"text-muted\"> Aucun parrainage ou match.</h3>
                                </div>
                            ";
        }
        // line 240
        echo "                        </div>
                    </div>
                </div>
                <div class=\"py-6\" id=\"divActivities\" style=\"display: none\">
                    <div class=\"card\">
                        <div class=\"card-body\" style=\"margin-bottom: 8%; margin-top: 5%\">
                            <div class=\"container py-5\">
                                <div class=\"main-timeline-4 text-white\">

                                    ";
        // line 249
        $context["altern"] = 0;
        // line 250
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 250, $this->source); })()), "leads", [], "any", false, false, false, 250)));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 251
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 251, $this->source); })()), "leads", [], "any", false, false, false, 251), "last", [], "any", false, false, false, 251), "activity", [], "any", false, false, false, 251)));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 252
                echo "
                                        ";
                // line 253
                if ((((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 253, $this->source); })()) % 2) == 0)) {
                    // line 254
                    echo "                                            <div class=\"timeline-4 left-4\">
                                                <div class=\"card gradient-custom\">
                                                    <div class=\"card-body p-4 text-center\">
                                                        <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                        <p>";
                    // line 258
                    echo twig_escape_filter($this->env, $context["info"], "html", null, true);
                    echo "</p>
    ";
                    // line 260
                    echo "    ";
                    // line 261
                    echo "    ";
                    // line 262
                    echo "    ";
                    // line 263
                    echo "    ";
                    // line 264
                    echo "                                                    </div>
                                                </div>
                                            </div>
                                        ";
                } else {
                    // line 268
                    echo "                                         <div class=\"timeline-4 right-4\">
                                                <div class=\"card gradient-custom-4\">
                                                    <div class=\"card-body p-4\">
                                                        <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                        <p>";
                    // line 272
                    echo twig_escape_filter($this->env, $context["info"], "html", null, true);
                    echo "</p>
    ";
                    // line 274
                    echo "    ";
                    // line 275
                    echo "    ";
                    // line 276
                    echo "    ";
                    // line 277
                    echo "    ";
                    // line 278
                    echo "                                                    </div>
                                                </div>
                                            </div>
                                        ";
                }
                // line 282
                echo "                                        ";
                $context["altern"] = ((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 282, $this->source); })()) + 1);
                // line 283
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "                                    <div class=\"timeline-4 left-4\">
                                        <div class=\"card gradient-custom\">
                                                <div class=\"card-body p-4 text-center\">
                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                    <p>Création du compte le ";
        // line 289
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 289, $this->source); })()), "createdAt", [], "any", false, false, false, 289), "d-m-Y"), "html", null, true);
        echo "</p>
                                                </div>
                                            </div>
                                        </div>
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
        return "dashboard/users/person.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 289,  611 => 285,  605 => 284,  599 => 283,  596 => 282,  590 => 278,  588 => 277,  586 => 276,  584 => 275,  582 => 274,  578 => 272,  572 => 268,  566 => 264,  564 => 263,  562 => 262,  560 => 261,  558 => 260,  554 => 258,  548 => 254,  546 => 253,  543 => 252,  538 => 251,  533 => 250,  531 => 249,  520 => 240,  514 => 236,  509 => 233,  503 => 232,  497 => 231,  494 => 230,  492 => 229,  489 => 228,  479 => 221,  472 => 219,  465 => 217,  461 => 216,  457 => 215,  451 => 211,  444 => 206,  440 => 204,  438 => 203,  435 => 202,  433 => 201,  430 => 200,  428 => 199,  425 => 198,  423 => 197,  420 => 196,  418 => 195,  410 => 192,  403 => 190,  399 => 189,  395 => 188,  389 => 184,  386 => 183,  383 => 182,  378 => 181,  373 => 180,  371 => 179,  366 => 176,  364 => 175,  353 => 166,  350 => 165,  341 => 163,  336 => 162,  333 => 161,  324 => 159,  319 => 158,  317 => 157,  310 => 152,  301 => 150,  297 => 149,  289 => 144,  277 => 135,  270 => 131,  263 => 127,  257 => 123,  248 => 121,  244 => 120,  205 => 84,  199 => 83,  194 => 80,  188 => 78,  182 => 76,  180 => 75,  169 => 67,  155 => 55,  145 => 54,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Utilisateur{% endblock %}

{% block javascripts %}

   <script>
       function views(val){
           switch (val){
               case \"overview\":
                   document.getElementById(val).innerHTML = \"<a class=\\\"nav-link active\\\" href=\\\"#\\\" onclick=\\\"views('overview')\\\">Informations</a>\"
                   document.getElementById(\"sponsorships\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('sponsorships')\\\">Parrainages</a>\"
                   document.getElementById(\"activities\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('activities')\\\">Activité</a>\"

                   // display des divs
                   document.getElementById(\"divOverview\").style.display = \"block\";
                   document.getElementById(\"divSponsorship\").style.display = \"none\";
                   document.getElementById(\"divActivities\").style.display = \"none\";

                   break;
               case \"sponsorships\":
                   document.getElementById(val).innerHTML = \"<a class=\\\"nav-link active\\\" href=\\\"#\\\" onclick=\\\"views('sponsorships')\\\">Parrainages</a>\"
                   document.getElementById(\"activities\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('activities')\\\">Activité</a>\"
                   document.getElementById(\"overview\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('overview')\\\">Informations</a>\"

                   // display des divs
                   document.getElementById(\"divOverview\").style.display = \"none\";
                   document.getElementById(\"divSponsorship\").style.display = \"block\";
                   document.getElementById(\"divActivities\").style.display = \"none\";

                   break;
               case \"activities\":

                   // active link navbar
                   document.getElementById(val).innerHTML = \"<a class=\\\"nav-link active\\\" href=\\\"#\\\" onclick=\\\"views('activities')\\\">Activité</a>\"
                   document.getElementById(\"overview\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('overview')\\\">Informations</a>\"
                   document.getElementById(\"sponsorships\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('sponsorships')\\\">Parrainages</a>\"

                   // display des divs
                   document.getElementById(\"divOverview\").style.display = \"none\";
                   document.getElementById(\"divSponsorship\").style.display = \"none\";
                   document.getElementById(\"divActivities\").style.display = \"block\";

                   break;

           }
       }
   </script>



{% endblock %}

{% block body %}
            <div class=\"container-fluid p-6\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-12\">
                        <!-- Page header -->
                        <div class=\"border-bottom pb-4 mb-4 \">
                            <h2 class=\"mb-0 fw-bold\">Vue générale</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-12\">
                        <!-- Bg -->
                        <div class=\"pt-20 rounded-top\" style=\"background: url({{ asset('build/images/profile-cover.d8b85219.jpg') }}) no-repeat; background-size: cover;\"></div>
                        <div class=\"bg-white rounded-bottom smooth-shadow-sm \">
                            <div class=\"d-flex align-items-center justify-content-between
                  pt-4 pb-6 px-4\">
                                <div class=\"d-flex align-items-center\">
                                    <!-- avatar -->

                                    <div class=\"avatar-xxl avatar-indicators avatar-online me-2 position-relative d-flex justify-content-end align-items-end mt-n10\">
                                        {% if civility.value == \"MEN\" %}
                                            <img src=\"{{ asset('build/images/men_avatar.1086b426.png') }}\" class=\"avatar-xxl rounded-circle border border-4 border-white-color-40\" alt=\"\">
                                        {% else %}
                                            <img src=\"{{ asset('build/images/women_avatar.c9a1bebd.png') }}\" class=\"avatar-xxl rounded-circle border border-4 border-white-color-40\" alt=\"\">
                                        {% endif %}
                                    </div>
                                    <!-- text -->
                                    <div class=\"lh-1\">
                                        <h2 class=\"mb-0\">{{ person.lastname | upper }} {{ person.firstname }}</h2>
                                        <p class=\"mb-0 d-block\">{{ person.email }}</p>
                                    </div>
                                </div>

                            </div>
                            <!-- nav -->
                            <ul class=\"nav nav-lt-tab px-4\" id=\"pills-tab\" role=\"tablist\">
                                <li class=\"nav-item\" id=\"overview\">
                                    <a class=\"nav-link active\" style=\"cursor: pointer\" onclick=\"views('overview')\">Informations</a>
                                </li>
                                <li class=\"nav-item\" id=\"sponsorships\">
                                    <a class=\"nav-link\" style=\"cursor: pointer\" onclick=\"views('sponsorships')\">Parrainages</a>
                                </li>

                                <li class=\"nav-item\" id=\"activities\">
                                    <a class=\"nav-link\" style=\"cursor: pointer\" onclick=\"views('activities')\">Activité</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- content -->
                <div class=\"py-6\" id=\"divOverview\" style=\"display: block\">
                    <!-- row -->
                            <!-- card -->
                            <div class=\"card\">
                                <!-- card body -->
                                <div class=\"card-body\">
                                    <!-- card title -->
                                    <h4 class=\"card-title\">Informations  [TODO affichage !]</h4>
                                    <span class=\"text-uppercase fw-medium text-dark fs-5 ls-2\"></span>
                                    <div class=\"row\">
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Souhait(s):</h6>
                                            <p class=\"mb-0\">
                                                {% for wish in person.leads.last.wishes %}
                                                    {{ wish.value }}
                                                {% endfor %}
                                            </p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Ville</h6>
                                            <p class=\"mb-0\">{{ person.leads.last.city.name }}</p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">N° Téléphone</h6>
                                            <p class=\"mb-0\">{{ person.phonenumber }}</p>
                                        </div>
                                        <div class=\"col-6  mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Email </h6>
                                            <p class=\"mb-0\">{{person.email}}</p>
                                        </div>
                                        <div class=\"col-6  mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Location
                                            </h6>
                                            <p class=\"mb-0\">Ahmedabad, India</p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Inscrit le:</h6>
                                            <p class=\"mb-0\">{{ person.createdAt | date(\"d-m-Y\") }}</p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Langue(s) parlée(s)</h6>
                                            <p class=\"mb-0\">
                                                {% for language in person.leads.last.languages %}
                                                    {{ language.value }}
                                                {% endfor %}
                                            </p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Domaines d'activités:</h6>
                                            <p class=\"mb-0\">
                                                {% if person.leads.last is instanceof(request) %}
                                                    {% for field in person.leads.last.curriculum.fields %}
                                                        {{ field.name }}
                                                    {% endfor %}
                                                {% else %}
                                                    {% for field in person.leads.last.workfields %}
                                                        {{ field.name }}
                                                    {% endfor %}
                                                {% endif %}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class=\"py-6\" id=\"divSponsorship\" style=\"display: none\">
                    <div class=\"card\">
                        <div class=\"card-body\" >
                            {% if hasSponsorship %}
                                <div class=\"container py-5\">
                                    <div class=\"main-timeline-4 text-white\">

                                        {% set altern = 0 %}
                                        {% for lead in person.leads | reverse %}
                                            {% for sponsorship in lead.sponsorship %}
                                                {% if sponsorship != null %}
                                                    {% if altern%2 == 0 %}
                                                        <div class=\"timeline-4 left-4\">
                                                            <div class=\"card gradient-custom\">
                                                                <div class=\"card-body p-4\">
                                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                                    <h4>{{ sponsorship.state == \"sponsorship\"? \"Parrainage\" : \"Match\" }}</h4>
                                                                    <p class=\"small text-white-50 mb-4\">Créé le : {{ sponsorship.createdAt | date(\"d-m-Y\") }}</p>
                                                                    <p>Parrain : {{ sponsorship.sponsorProposal.person.firstname }} {{ sponsorship.sponsorProposal.person.lastname }}
                                                                        <br>
                                                                        Etudiant : {{ sponsorship.sponsorRequest.person.firstname }} {{ sponsorship.sponsorRequest.person.lastname }}
                                                                        <br>
                                                                        Statut :
                                                                        {% if sponsorship.state == \"sponsorship\" %}
                                                                            Parrainage en cours.
                                                                        {% elseif sponsorship.state == \"match\" %}
                                                                            Match validé par l'admin.
                                                                        {% elseif sponsorship.state == \"sponsor_approved\" %}
                                                                            En attente de la réponse du parrain
                                                                        {% elseif sponsorship.state == \"student_approved\" %}
                                                                            En attente de la réponse de l'étudiant.
                                                                        {% elseif sponsorship.state == \"ended\" %}
                                                                            Parrainage terminé.
                                                                        {% endif %}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    {% else %}
                                                        <div class=\"timeline-4 right-4\">
                                                            <div class=\"card gradient-custom-4\">
                                                                <div class=\"card-body p-4\">
                                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                                    <h4>{{ sponsorship.state == \"sponsorship\"? \"Parrainage\" : \"Match\" }}</h4>
                                                                    <p class=\"small text-white-50 mb-4\">{{ sponsorship.createdAt | date(\"d-m-Y\") }}</p>
                                                                    <p>Parrain : {{ sponsorship.sponsorProposal.person.firstname }} {{ sponsorship.sponsorProposal.person.lastname }}
                                                                        <br>
                                                                        Etudiant : {{ sponsorship.sponsorRequest.person.firstname }} {{ sponsorship.sponsorRequest.person.lastname }}
                                                                        <br>
                                                                        Statut : {{ sponsorship.state }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    {% endif %}

                                                    {% set altern = altern + 1 %}
                                                {% endif %}
                                            {% endfor %}
                                        {% endfor %}
                                    </div>
                                </div>
                            {% else %}
                                <div class=\"text-center \" style=\"margin-bottom: 15%; margin-top: 12%\">
                                    <h3 class=\"text-muted\"> Aucun parrainage ou match.</h3>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <div class=\"py-6\" id=\"divActivities\" style=\"display: none\">
                    <div class=\"card\">
                        <div class=\"card-body\" style=\"margin-bottom: 8%; margin-top: 5%\">
                            <div class=\"container py-5\">
                                <div class=\"main-timeline-4 text-white\">

                                    {% set altern = 0 %}
                                    {% for lead in person.leads | reverse %}
                                        {% for info in person.leads.last.activity | reverse %}

                                        {% if altern%2 == 0 %}
                                            <div class=\"timeline-4 left-4\">
                                                <div class=\"card gradient-custom\">
                                                    <div class=\"card-body p-4 text-center\">
                                                        <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                        <p>{{ info }}</p>
    {#                                                    <p class=\"small text-white-50 mb-4\">{{ lead.state.value }}</p>#}
    {#                                                    <p>[Descritpion ici .... ]#}
    {#                                                        Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto#}
    {#                                                        mnesarchum.#}
    {#                                                    </p>#}
                                                    </div>
                                                </div>
                                            </div>
                                        {% else %}
                                         <div class=\"timeline-4 right-4\">
                                                <div class=\"card gradient-custom-4\">
                                                    <div class=\"card-body p-4\">
                                                        <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                        <p>{{ info }}</p>
    {#                                                    <p class=\"small text-white-50 mb-4\">{{ lead.state.value }}</p>#}
    {#                                                    <p>[Descritpion ici .... ]#}
    {#                                                        Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto#}
    {#                                                        mnesarchum.#}
    {#                                                    </p>#}
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                        {% set altern = altern + 1 %}
                                        {% endfor %}
                                    {% endfor %}
                                    <div class=\"timeline-4 left-4\">
                                        <div class=\"card gradient-custom\">
                                                <div class=\"card-body p-4 text-center\">
                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                    <p>Création du compte le {{ person.createdAt | date(\"d-m-Y\") }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

{% endblock %}", "dashboard/users/person.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/users/person.html.twig");
    }
}
