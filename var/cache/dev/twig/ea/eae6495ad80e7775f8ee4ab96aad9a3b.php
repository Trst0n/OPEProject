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
                                                                    <p class=\"small text-white-50 mb-4\">";
                            // line 191
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sponsorship"], "createdAt", [], "any", false, false, false, 191), "d-m-Y"), "html", null, true);
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
                            // line 200
                            echo "                                                        <div class=\"timeline-4 right-4\">
                                                            <div class=\"card gradient-custom-4\">
                                                                <div class=\"card-body p-4\">
                                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                                    <h4>";
                            // line 204
                            echo (($this->extensions['App\Twig\AppExtension']->isInstanceof($context["lead"], (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 204, $this->source); })()))) ? ("Profil étudiant") : ("Profil parrain"));
                            echo "</h4>
                                                                    <p class=\"small text-white-50 mb-4\">";
                            // line 205
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "state", [], "any", false, false, false, 205), "value", [], "any", false, false, false, 205), "html", null, true);
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
                        // line 215
                        echo "
                                                    ";
                        // line 216
                        $context["altern"] = ((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 216, $this->source); })()) + 1);
                        // line 217
                        echo "                                                ";
                    }
                    // line 218
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsorship'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "                                    </div>
                                </div>
                            ";
        } else {
            // line 223
            echo "                                <div>
                                    <h3> Aucun parrainage ou match [TODO aff !!]</h3>
                                </div>
                            ";
        }
        // line 227
        echo "                        </div>
                    </div>
                </div>
                <div class=\"py-6\" id=\"divActivity\" style=\"display: none\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"container py-5\">
                                <div class=\"main-timeline-4 text-white\">

                                    ";
        // line 236
        $context["altern"] = 0;
        // line 237
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 237, $this->source); })()), "leads", [], "any", false, false, false, 237)));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 238
            echo "
                                    ";
            // line 239
            if ((((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 239, $this->source); })()) % 2) == 0)) {
                // line 240
                echo "                                        <div class=\"timeline-4 left-4\">
                                            <div class=\"card gradient-custom\">
                                                <div class=\"card-body p-4\">
                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                    <h4>";
                // line 244
                echo (($this->extensions['App\Twig\AppExtension']->isInstanceof($context["lead"], (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 244, $this->source); })()))) ? ("Profil étudiant") : ("Profil parrain"));
                echo "</h4>
                                                    <p class=\"small text-white-50 mb-4\">";
                // line 245
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "state", [], "any", false, false, false, 245), "value", [], "any", false, false, false, 245), "html", null, true);
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
                // line 254
                echo "                                     <div class=\"timeline-4 right-4\">
                                            <div class=\"card gradient-custom-4\">
                                                <div class=\"card-body p-4\">
                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                    <h4>";
                // line 258
                echo (($this->extensions['App\Twig\AppExtension']->isInstanceof($context["lead"], (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 258, $this->source); })()))) ? ("Profil étudiant") : ("Profil parrain"));
                echo "</h4>
                                                    <p class=\"small text-white-50 mb-4\">";
                // line 259
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "state", [], "any", false, false, false, 259), "value", [], "any", false, false, false, 259), "html", null, true);
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
            // line 268
            echo "                                    ";
            $context["altern"] = ((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 268, $this->source); })()) + 1);
            // line 269
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
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
        return array (  543 => 270,  537 => 269,  534 => 268,  522 => 259,  518 => 258,  512 => 254,  500 => 245,  496 => 244,  490 => 240,  488 => 239,  485 => 238,  480 => 237,  478 => 236,  467 => 227,  461 => 223,  456 => 220,  450 => 219,  444 => 218,  441 => 217,  439 => 216,  436 => 215,  423 => 205,  419 => 204,  413 => 200,  401 => 191,  397 => 190,  391 => 186,  388 => 185,  385 => 184,  380 => 183,  375 => 182,  373 => 181,  368 => 178,  366 => 177,  355 => 168,  352 => 167,  343 => 165,  338 => 164,  335 => 163,  326 => 161,  321 => 160,  319 => 159,  312 => 154,  303 => 152,  299 => 151,  291 => 146,  279 => 137,  272 => 133,  265 => 129,  259 => 125,  250 => 123,  246 => 122,  205 => 84,  199 => 83,  194 => 80,  188 => 78,  182 => 76,  180 => 75,  169 => 67,  155 => 55,  145 => 54,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
                                                                    <p class=\"small text-white-50 mb-4\">{{ sponsorship.createdAt | date(\"d-m-Y\") }}</p>
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
