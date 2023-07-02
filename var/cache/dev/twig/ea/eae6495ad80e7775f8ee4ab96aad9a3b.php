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
                   document.getElementById(\"activity\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('activity')\\\">Activité</a>\"

                   // display des divs
                   document.getElementById(\"divOverview\").style.display = \"block\";
                   document.getElementById(\"divSponsorship\").style.display = \"none\";
                   document.getElementById(\"divActivity\").style.display = \"none\";

                   break;
               case \"sponsorships\":
                   document.getElementById(val).innerHTML = \"<a class=\\\"nav-link active\\\" href=\\\"#\\\" onclick=\\\"views('sponsorships')\\\">Parrainages</a>\"
                   document.getElementById(\"activity\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('activity')\\\">Activité</a>\"
                   document.getElementById(\"overview\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('overview')\\\">Informations</a>\"

                   // display des divs
                   document.getElementById(\"divOverview\").style.display = \"none\";
                   document.getElementById(\"divSponsorship\").style.display = \"block\";
                   document.getElementById(\"divActivity\").style.display = \"none\";

                   break;
               case \"activity\":

                   // active link navbar
                   document.getElementById(val).innerHTML = \"<a class=\\\"nav-link active\\\" href=\\\"#\\\" onclick=\\\"views('activity')\\\">Activité</a>\"
                   document.getElementById(\"overview\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('overview')\\\">Informations</a>\"
                   document.getElementById(\"sponsorships\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('sponsorships')\\\">Parrainages</a>\"

                   // display des divs
                   document.getElementById(\"divOverview\").style.display = \"none\";
                   document.getElementById(\"divSponsorship\").style.display = \"none\";
                   document.getElementById(\"divActivity\").style.display = \"block\";

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
                                <div>
                                    <a href=\"#\" class=\"btn btn-outline-primary d-none d-md-block\">Edit Profile</a>
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

                                <li class=\"nav-item\" id=\"activity\">
                                    <a class=\"nav-link\" style=\"cursor: pointer\" onclick=\"views('activity')\">Activité</a>
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
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 122, $this->source); })()), "leads", [], "any", false, false, false, 122), "last", [], "any", false, false, false, 122), "wishes", [], "any", false, false, false, 122));
        foreach ($context['_seq'] as $context["_key"] => $context["wish"]) {
            // line 123
            echo "                                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wish"], "value", [], "any", false, false, false, 123), "html", null, true);
            echo "
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wish'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                                            </p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Ville</h6>
                                            <p class=\"mb-0\">";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 129, $this->source); })()), "leads", [], "any", false, false, false, 129), "last", [], "any", false, false, false, 129), "city", [], "any", false, false, false, 129), "name", [], "any", false, false, false, 129), "html", null, true);
        echo "</p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">N° Téléphone</h6>
                                            <p class=\"mb-0\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 133, $this->source); })()), "phonenumber", [], "any", false, false, false, 133), "html", null, true);
        echo "</p>
                                        </div>
                                        <div class=\"col-6  mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Email </h6>
                                            <p class=\"mb-0\">";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 137, $this->source); })()), "email", [], "any", false, false, false, 137), "html", null, true);
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
        // line 146
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 146, $this->source); })()), "createdAt", [], "any", false, false, false, 146), "d-m-Y"), "html", null, true);
        echo "</p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Langue(s) parlée(s)</h6>
                                            <p class=\"mb-0\">
                                                ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 151, $this->source); })()), "leads", [], "any", false, false, false, 151), "last", [], "any", false, false, false, 151), "languages", [], "any", false, false, false, 151));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 152
            echo "                                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "value", [], "any", false, false, false, 152), "html", null, true);
            echo "
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                                            </p>
                                        </div>
                                        <div class=\"col-6 mb-5\">
                                            <h6 class=\"text-uppercase fs-5 ls-2\">Domaines d'activités:</h6>
                                            <p class=\"mb-0\">
                                                ";
        // line 159
        if ($this->extensions['App\Twig\AppExtension']->isInstanceof(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 159, $this->source); })()), "leads", [], "any", false, false, false, 159), "last", [], "any", false, false, false, 159), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 159, $this->source); })()))) {
            // line 160
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 160, $this->source); })()), "leads", [], "any", false, false, false, 160), "last", [], "any", false, false, false, 160), "curriculum", [], "any", false, false, false, 160), "fields", [], "any", false, false, false, 160));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 161
                echo "                                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 161), "html", null, true);
                echo "
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "                                                ";
        } else {
            // line 164
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 164, $this->source); })()), "leads", [], "any", false, false, false, 164), "last", [], "any", false, false, false, 164), "workfields", [], "any", false, false, false, 164));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 165
                echo "                                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 165), "html", null, true);
                echo "
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                                                ";
        }
        // line 168
        echo "                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class=\"py-6\" id=\"divSponsorship\" style=\"display: none\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            ";
        // line 177
        if ((isset($context["hasSponsorship"]) || array_key_exists("hasSponsorship", $context) ? $context["hasSponsorship"] : (function () { throw new RuntimeError('Variable "hasSponsorship" does not exist.', 177, $this->source); })())) {
            // line 178
            echo "                                <div class=\"container py-5\">
                                    <div class=\"main-timeline-4 text-white\">

                                        ";
            // line 181
            $context["altern"] = 0;
            // line 182
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 182, $this->source); })()), "leads", [], "any", false, false, false, 182)));
            foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
                // line 183
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lead"], "sponsorship", [], "any", false, false, false, 183));
                foreach ($context['_seq'] as $context["_key"] => $context["sponsorship"]) {
                    // line 184
                    echo "                                                ";
                    if (($context["sponsorship"] != null)) {
                        // line 185
                        echo "                                                    ";
                        if ((((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 185, $this->source); })()) % 2) == 0)) {
                            // line 186
                            echo "                                                        <div class=\"timeline-4 left-4\">
                                                            <div class=\"card gradient-custom\">
                                                                <div class=\"card-body p-4\">
                                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                                    <h4>";
                            // line 190
                            echo (((twig_get_attribute($this->env, $this->source, $context["sponsorship"], "state", [], "any", false, false, false, 190) == "sponsorship")) ? ("Parrainage") : ("Match"));
                            echo "</h4>
                                                                    <p class=\"small text-white-50 mb-4\">Créé le : ";
                            // line 191
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "createdAt", [], "any", false, false, false, 191), "d-m-Y"), "html", null, true);
                            echo "</p>
                                                                    <p>Parrain : ";
                            // line 192
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 192), "person", [], "any", false, false, false, 192), "firstname", [], "any", false, false, false, 192), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 192), "person", [], "any", false, false, false, 192), "lastname", [], "any", false, false, false, 192), "html", null, true);
                            echo "
                                                                        <br>
                                                                        Etudiant : ";
                            // line 194
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorRequest", [], "any", false, false, false, 194), "person", [], "any", false, false, false, 194), "firstname", [], "any", false, false, false, 194), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorRequest", [], "any", false, false, false, 194), "person", [], "any", false, false, false, 194), "lastname", [], "any", false, false, false, 194), "html", null, true);
                            echo "
                                                                        <br>
                                                                        Statut :
                                                                        ";
                            // line 197
                            if ((twig_get_attribute($this->env, $this->source, $context["sponsorship"], "state", [], "any", false, false, false, 197) == "sponsorship")) {
                                // line 198
                                echo "                                                                            Parrainage en cours.
                                                                        ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 199
$context["sponsorship"], "state", [], "any", false, false, false, 199) == "match")) {
                                // line 200
                                echo "                                                                            Match validé par l'admin.
                                                                        ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 201
$context["sponsorship"], "state", [], "any", false, false, false, 201) == "sponsor_approved")) {
                                // line 202
                                echo "                                                                            En attente de la réponse du parrain
                                                                        ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 203
$context["sponsorship"], "state", [], "any", false, false, false, 203) == "student_approved")) {
                                // line 204
                                echo "                                                                            En attente de la réponse de l'étudiant.
                                                                        ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 205
$context["sponsorship"], "state", [], "any", false, false, false, 205) == "ended")) {
                                // line 206
                                echo "                                                                            Parrainage terminé.
                                                                        ";
                            }
                            // line 208
                            echo "                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
                        } else {
                            // line 213
                            echo "                                                        <div class=\"timeline-4 right-4\">
                                                            <div class=\"card gradient-custom-4\">
                                                                <div class=\"card-body p-4\">
                                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                                    <h4>";
                            // line 217
                            echo (((twig_get_attribute($this->env, $this->source, $context["sponsorship"], "state", [], "any", false, false, false, 217) == "sponsorship")) ? ("Parrainage") : ("Match"));
                            echo "</h4>
                                                                    <p class=\"small text-white-50 mb-4\">";
                            // line 218
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "createdAt", [], "any", false, false, false, 218), "d-m-Y"), "html", null, true);
                            echo "</p>
                                                                    <p>Parrain : ";
                            // line 219
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 219), "person", [], "any", false, false, false, 219), "firstname", [], "any", false, false, false, 219), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorProposal", [], "any", false, false, false, 219), "person", [], "any", false, false, false, 219), "lastname", [], "any", false, false, false, 219), "html", null, true);
                            echo "
                                                                        <br>
                                                                        Etudiant : ";
                            // line 221
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorRequest", [], "any", false, false, false, 221), "person", [], "any", false, false, false, 221), "firstname", [], "any", false, false, false, 221), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "sponsorRequest", [], "any", false, false, false, 221), "person", [], "any", false, false, false, 221), "lastname", [], "any", false, false, false, 221), "html", null, true);
                            echo "
                                                                        <br>
                                                                        Statut : ";
                            // line 223
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "state", [], "any", false, false, false, 223), "html", null, true);
                            echo "
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    ";
                        }
                        // line 230
                        echo "
                                                    ";
                        // line 231
                        $context["altern"] = ((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 231, $this->source); })()) + 1);
                        // line 232
                        echo "                                                ";
                    }
                    // line 233
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsorship'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 234
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "                                    </div>
                                </div>
                            ";
        } else {
            // line 238
            echo "                                <div>
                                    <h3> Aucun parrainage ou match [TODO aff !!]</h3>
                                </div>
                            ";
        }
        // line 242
        echo "                        </div>
                    </div>
                </div>
                <div class=\"py-6\" id=\"divActivity\" style=\"display: none\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"container py-5\">
                                <div class=\"main-timeline-4 text-white\">

                                    ";
        // line 251
        $context["altern"] = 0;
        // line 252
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 252, $this->source); })()), "leads", [], "any", false, false, false, 252)));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 253
            echo "
                                    ";
            // line 254
            if ((((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 254, $this->source); })()) % 2) == 0)) {
                // line 255
                echo "                                        <div class=\"timeline-4 left-4\">
                                            <div class=\"card gradient-custom\">
                                                <div class=\"card-body p-4\">
                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                    <h4>";
                // line 259
                echo (($this->extensions['App\Twig\AppExtension']->isInstanceof($context["lead"], (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 259, $this->source); })()))) ? ("Profil étudiant") : ("Profil parrain"));
                echo "</h4>
                                                    <p class=\"small text-white-50 mb-4\">";
                // line 260
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "state", [], "any", false, false, false, 260), "value", [], "any", false, false, false, 260), "html", null, true);
                echo "</p>
                                                    <p>[Descritpion ici .... ]
                                                        Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                                        mnesarchum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            } else {
                // line 269
                echo "                                     <div class=\"timeline-4 right-4\">
                                            <div class=\"card gradient-custom-4\">
                                                <div class=\"card-body p-4\">
                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                    <h4>";
                // line 273
                echo (($this->extensions['App\Twig\AppExtension']->isInstanceof($context["lead"], (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 273, $this->source); })()))) ? ("Profil étudiant") : ("Profil parrain"));
                echo "</h4>
                                                    <p class=\"small text-white-50 mb-4\">";
                // line 274
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "state", [], "any", false, false, false, 274), "value", [], "any", false, false, false, 274), "html", null, true);
                echo "</p>
                                                    <p>[Descritpion ici .... ]
                                                        Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                                        mnesarchum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 283
            echo "                                    ";
            $context["altern"] = ((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 283, $this->source); })()) + 1);
            // line 284
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "                                        </div>
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
        return array (  598 => 285,  592 => 284,  589 => 283,  577 => 274,  573 => 273,  567 => 269,  555 => 260,  551 => 259,  545 => 255,  543 => 254,  540 => 253,  535 => 252,  533 => 251,  522 => 242,  516 => 238,  511 => 235,  505 => 234,  499 => 233,  496 => 232,  494 => 231,  491 => 230,  481 => 223,  474 => 221,  467 => 219,  463 => 218,  459 => 217,  453 => 213,  446 => 208,  442 => 206,  440 => 205,  437 => 204,  435 => 203,  432 => 202,  430 => 201,  427 => 200,  425 => 199,  422 => 198,  420 => 197,  412 => 194,  405 => 192,  401 => 191,  397 => 190,  391 => 186,  388 => 185,  385 => 184,  380 => 183,  375 => 182,  373 => 181,  368 => 178,  366 => 177,  355 => 168,  352 => 167,  343 => 165,  338 => 164,  335 => 163,  326 => 161,  321 => 160,  319 => 159,  312 => 154,  303 => 152,  299 => 151,  291 => 146,  279 => 137,  272 => 133,  265 => 129,  259 => 125,  250 => 123,  246 => 122,  205 => 84,  199 => 83,  194 => 80,  188 => 78,  182 => 76,  180 => 75,  169 => 67,  155 => 55,  145 => 54,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
                   document.getElementById(\"activity\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('activity')\\\">Activité</a>\"

                   // display des divs
                   document.getElementById(\"divOverview\").style.display = \"block\";
                   document.getElementById(\"divSponsorship\").style.display = \"none\";
                   document.getElementById(\"divActivity\").style.display = \"none\";

                   break;
               case \"sponsorships\":
                   document.getElementById(val).innerHTML = \"<a class=\\\"nav-link active\\\" href=\\\"#\\\" onclick=\\\"views('sponsorships')\\\">Parrainages</a>\"
                   document.getElementById(\"activity\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('activity')\\\">Activité</a>\"
                   document.getElementById(\"overview\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('overview')\\\">Informations</a>\"

                   // display des divs
                   document.getElementById(\"divOverview\").style.display = \"none\";
                   document.getElementById(\"divSponsorship\").style.display = \"block\";
                   document.getElementById(\"divActivity\").style.display = \"none\";

                   break;
               case \"activity\":

                   // active link navbar
                   document.getElementById(val).innerHTML = \"<a class=\\\"nav-link active\\\" href=\\\"#\\\" onclick=\\\"views('activity')\\\">Activité</a>\"
                   document.getElementById(\"overview\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('overview')\\\">Informations</a>\"
                   document.getElementById(\"sponsorships\").innerHTML = \"<a class=\\\"nav-link \\\" href=\\\"#\\\" onclick=\\\"views('sponsorships')\\\">Parrainages</a>\"

                   // display des divs
                   document.getElementById(\"divOverview\").style.display = \"none\";
                   document.getElementById(\"divSponsorship\").style.display = \"none\";
                   document.getElementById(\"divActivity\").style.display = \"block\";

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
                                <div>
                                    <a href=\"#\" class=\"btn btn-outline-primary d-none d-md-block\">Edit Profile</a>
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

                                <li class=\"nav-item\" id=\"activity\">
                                    <a class=\"nav-link\" style=\"cursor: pointer\" onclick=\"views('activity')\">Activité</a>
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
                        <div class=\"card-body\">
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
                                <div>
                                    <h3> Aucun parrainage ou match [TODO aff !!]</h3>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <div class=\"py-6\" id=\"divActivity\" style=\"display: none\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"container py-5\">
                                <div class=\"main-timeline-4 text-white\">

                                    {% set altern = 0 %}
                                    {% for lead in person.leads | reverse %}

                                    {% if altern%2 == 0 %}
                                        <div class=\"timeline-4 left-4\">
                                            <div class=\"card gradient-custom\">
                                                <div class=\"card-body p-4\">
                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                    <h4>{{ lead is instanceof(request) ? \"Profil étudiant\" : \"Profil parrain\" }}</h4>
                                                    <p class=\"small text-white-50 mb-4\">{{ lead.state.value }}</p>
                                                    <p>[Descritpion ici .... ]
                                                        Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                                        mnesarchum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    {% else %}
                                     <div class=\"timeline-4 right-4\">
                                            <div class=\"card gradient-custom-4\">
                                                <div class=\"card-body p-4\">
                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                    <h4>{{ lead is instanceof(request) ? \"Profil étudiant\" : \"Profil parrain\" }}</h4>
                                                    <p class=\"small text-white-50 mb-4\">{{ lead.state.value }}</p>
                                                    <p>[Descritpion ici .... ]
                                                        Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                                        mnesarchum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% set altern = altern + 1 %}
                                    {% endfor %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

{% endblock %}", "dashboard/users/person.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/users/person.html.twig");
    }
}
