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

/* dashboard/person.html.twig */
class __TwigTemplate_1bc63db66a4ac41efa9bef6d059b3be5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/person.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/person.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/person.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile-cover.jpg"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/men_avatar.png"), "html", null, true);
            echo "\" class=\"avatar-xxl rounded-circle border border-4 border-white-color-40\" alt=\"\">
                                        ";
        } else {
            // line 78
            echo "                                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/women_avatar.png"), "html", null, true);
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
                                    <h4 class=\"card-title\">Informations</h4>
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
                                                                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                                                        mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                                                        dignissim
                                                                        per, habeo iusto primis ea eam.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
                        } else {
                            // line 201
                            echo "                                                        <div class=\"timeline-4 right-4\">
                                                            <div class=\"card gradient-custom-4\">
                                                                <div class=\"card-body p-4\">
                                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                                    <h4>";
                            // line 205
                            echo (($this->extensions['App\Twig\AppExtension']->isInstanceof($context["lead"], (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 205, $this->source); })()))) ? ("Profil étudiant") : ("Profil parrain"));
                            echo "</h4>
                                                                    <p class=\"small text-white-50 mb-4\">";
                            // line 206
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "state", [], "any", false, false, false, 206), "value", [], "any", false, false, false, 206), "html", null, true);
                            echo "</p>
                                                                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                                                        mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                                                        dignissim
                                                                        per, habeo iusto primis ea eam.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    ";
                        }
                        // line 217
                        echo "
                                                    ";
                        // line 218
                        $context["altern"] = ((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 218, $this->source); })()) + 1);
                        // line 219
                        echo "                                                ";
                    }
                    // line 220
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsorship'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 221
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "                                    </div>
                                </div>
                            ";
        } else {
            // line 225
            echo "                                <div>
                                    <h3> Aucun parrainage ou match </h3>
                                </div>
                            ";
        }
        // line 229
        echo "                        </div>
                    </div>
                </div>
                <div class=\"py-6\" id=\"divActivity\" style=\"display: none\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"container py-5\">
                                <div class=\"main-timeline-4 text-white\">

                                    ";
        // line 238
        $context["altern"] = 0;
        // line 239
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 239, $this->source); })()), "leads", [], "any", false, false, false, 239)));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 240
            echo "
                                    ";
            // line 241
            if ((((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 241, $this->source); })()) % 2) == 0)) {
                // line 242
                echo "                                        <div class=\"timeline-4 left-4\">
                                            <div class=\"card gradient-custom\">
                                                <div class=\"card-body p-4\">
                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                    <h4>";
                // line 246
                echo (($this->extensions['App\Twig\AppExtension']->isInstanceof($context["lead"], (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 246, $this->source); })()))) ? ("Profil étudiant") : ("Profil parrain"));
                echo "</h4>
                                                    <p class=\"small text-white-50 mb-4\">";
                // line 247
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "state", [], "any", false, false, false, 247), "value", [], "any", false, false, false, 247), "html", null, true);
                echo "</p>
                                                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                                        mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                                        dignissim
                                                        per, habeo iusto primis ea eam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            } else {
                // line 257
                echo "                                     <div class=\"timeline-4 right-4\">
                                            <div class=\"card gradient-custom-4\">
                                                <div class=\"card-body p-4\">
                                                    <i class=\"fas fa-brain fa-2x mb-3\"></i>
                                                    <h4>";
                // line 261
                echo (($this->extensions['App\Twig\AppExtension']->isInstanceof($context["lead"], (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 261, $this->source); })()))) ? ("Profil étudiant") : ("Profil parrain"));
                echo "</h4>
                                                    <p class=\"small text-white-50 mb-4\">";
                // line 262
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lead"], "state", [], "any", false, false, false, 262), "value", [], "any", false, false, false, 262), "html", null, true);
                echo "</p>
                                                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                                        mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                                        dignissim
                                                        per, habeo iusto primis ea eam.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 272
            echo "                                    ";
            $context["altern"] = ((isset($context["altern"]) || array_key_exists("altern", $context) ? $context["altern"] : (function () { throw new RuntimeError('Variable "altern" does not exist.', 272, $this->source); })()) + 1);
            // line 273
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>





























";
        // line 385
        echo "
";
        // line 668
        echo "
";
        // line 680
        echo "
";
        // line 682
        echo "
";
        // line 790
        echo "
";
        // line 837
        echo "            </div>


    



";
        // line 847
        echo "
";
        // line 859
        echo "
";
        // line 867
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/person.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 867,  612 => 859,  609 => 847,  600 => 837,  597 => 790,  594 => 682,  591 => 680,  588 => 668,  585 => 385,  547 => 274,  541 => 273,  538 => 272,  525 => 262,  521 => 261,  515 => 257,  502 => 247,  498 => 246,  492 => 242,  490 => 241,  487 => 240,  482 => 239,  480 => 238,  469 => 229,  463 => 225,  458 => 222,  452 => 221,  446 => 220,  443 => 219,  441 => 218,  438 => 217,  424 => 206,  420 => 205,  414 => 201,  401 => 191,  397 => 190,  391 => 186,  388 => 185,  385 => 184,  380 => 183,  375 => 182,  373 => 181,  368 => 178,  366 => 177,  355 => 168,  352 => 167,  343 => 165,  338 => 164,  335 => 163,  326 => 161,  321 => 160,  319 => 159,  312 => 154,  303 => 152,  299 => 151,  291 => 146,  279 => 137,  272 => 133,  265 => 129,  259 => 125,  250 => 123,  246 => 122,  205 => 84,  199 => 83,  194 => 80,  188 => 78,  182 => 76,  180 => 75,  169 => 67,  155 => 55,  145 => 54,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
                        <div class=\"pt-20 rounded-top\" style=\"background: url({{ asset('images/profile-cover.jpg') }}) no-repeat; background-size: cover;\"></div>
                        <div class=\"bg-white rounded-bottom smooth-shadow-sm \">
                            <div class=\"d-flex align-items-center justify-content-between
                  pt-4 pb-6 px-4\">
                                <div class=\"d-flex align-items-center\">
                                    <!-- avatar -->

                                    <div class=\"avatar-xxl avatar-indicators avatar-online me-2 position-relative d-flex justify-content-end align-items-end mt-n10\">
                                        {% if civility.value == \"MEN\" %}
                                            <img src=\"{{ asset('images/men_avatar.png') }}\" class=\"avatar-xxl rounded-circle border border-4 border-white-color-40\" alt=\"\">
                                        {% else %}
                                            <img src=\"{{ asset('images/women_avatar.png') }}\" class=\"avatar-xxl rounded-circle border border-4 border-white-color-40\" alt=\"\">
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
                                    <h4 class=\"card-title\">Informations</h4>
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
                                                                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                                                        mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                                                        dignissim
                                                                        per, habeo iusto primis ea eam.
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
                                                                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                                                        mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                                                        dignissim
                                                                        per, habeo iusto primis ea eam.
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
                                    <h3> Aucun parrainage ou match </h3>
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
                                                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                                        mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                                        dignissim
                                                        per, habeo iusto primis ea eam.
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
                                                    <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                                        mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                                        dignissim
                                                        per, habeo iusto primis ea eam.
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





























{#                        <div class=\"col-xl-6 col-lg-12 col-md-12 col-12 mb-6\">#}
{#                            <!-- card -->#}
{#                            <div class=\"card\">#}
{#                                <!-- card body -->#}
{#                                <div class=\"card-body\">#}
{#                                    <!-- card title -->#}
{#                                    <h4 class=\"card-title\">Projects Contributions</h4>#}
{#                                    <div class=\"d-md-flex justify-content-between#}
{#                      align-items-center mb-4\">#}
{#                                        <div class=\"d-flex align-items-center\">#}
{#                                            <div>#}
{#                                                <div class=\"icon-shape icon-lg border p-4 rounded-1\">#}
{#                                                    <img src=\"/assets/images/brand/slack-logo.svg\" alt=\"\">#}
{#                                                </div>#}
{#                                            </div>#}
{#                                            <!-- text -->#}
{#                                            <div class=\"ms-3 \">#}
{#                                                <h5 class=\"mb-1\"><a href=\"#\" class=\"text-inherit\">Slack Figma Design#}
{#                                                        UI</a></h5>#}
{#                                                <p class=\"mb-0 fs-5 text-muted\">Project description and details about...</p>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                        <div class=\"d-flex align-items-center ms-10 ms-md-0 mt-3\">#}
{#                                            <!-- avatar group -->#}
{#                                            <div class=\"avatar-group me-2\">#}
{#                                                <!-- img -->#}
{#                                                <span class=\"avatar avatar-sm\">#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-1.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                                <!-- img -->#}
{#                                                <span class=\"avatar avatar-sm\">#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-2.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                                <!-- img -->#}
{#                                                <span class=\"avatar avatar-sm\">#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-3.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                            </div>#}
{#                                            <div>#}
{#                                                <!-- dropdown -->#}
{#                                                <div class=\"dropdown dropstart\">#}
{#                                                    <a href=\"#\" class=\"text-muted text-primary-hover\" id=\"dropdownprojectOne\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
{#                                                        <i data-feather=\"more-vertical\" class=\"icon-xxs\"></i>#}
{#                                                    </a>#}
{#                                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownprojectOne\">#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Action</a>#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Something else#}
{#                                                            here</a>#}
{#                                                    </div>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div class=\"d-md-flex justify-content-between#}
{#                      align-items-center mb-4\">#}
{#                                        <div class=\"d-flex align-items-center\">#}
{#                                            <div>#}
{#                                                <!-- icon shape -->#}
{#                                                <div class=\"icon-shape icon-lg border p-4 rounded-1\">#}
{#                                                    <img src=\"/assets/images/brand/3dsmax-logo.svg\" alt=\"\">#}
{#                                                </div>#}
{#                                            </div>#}
{#                                            <!-- text -->#}
{#                                            <div class=\"ms-3 \">#}
{#                                                <h5 class=\"mb-1\"><a href=\"#\" class=\"text-inherit\">Design 3d Character</a></h5>#}
{#                                                <p class=\"mb-0 fs-5 text-muted\">Project description and details about...</p>#}
{#                                            </div>#}
{#                                        </div>#}

{#                                        <div class=\"d-flex align-items-center ms-10 ms-md-0 mt-3\">#}
{#                                            <!-- avatar group -->#}
{#                                            <div class=\"avatar-group me-2\">#}
{#                        <span class=\"avatar avatar-sm\">#}
{#                             <!-- img -->#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-4.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                                <span class=\"avatar avatar-sm\">#}
{#                             <!-- img -->#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-5.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                                <span class=\"avatar avatar-sm\">#}
{#                             <!-- img -->#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-6.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                            </div>#}
{#                                            <div>#}
{#                                                <!-- dropdown -->#}
{#                                                <div class=\"dropdown dropstart\">#}
{#                                                    <a href=\"#\" class=\"text-muted text-primary-hover\" id=\"dropdownprojectTwo\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
{#                                                        <i data-feather=\"more-vertical\" class=\"icon-xxs\"></i>#}
{#                                                    </a>#}
{#                                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownprojectTwo\">#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Action</a>#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Something else#}
{#                                                            here</a>#}
{#                                                    </div>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div class=\"d-md-flex justify-content-between#}
{#                      align-items-center mb-4\">#}
{#                                        <div class=\"d-flex align-items-center\">#}
{#                                            <div>#}
{#                                                <!-- icon shape -->#}
{#                                                <div class=\"icon-shape icon-lg border p-4 rounded-1\">#}
{#                                                    <img src=\"/assets/images/brand/github-logo.svg\" alt=\"\">#}
{#                                                </div>#}
{#                                            </div>#}
{#                                            <!-- text -->#}
{#                                            <div class=\"ms-3 \">#}
{#                                                <h5 class=\"mb-1\"><a href=\"#\" class=\"text-inherit\">Github Development</a></h5>#}
{#                                                <p class=\"mb-0 fs-5 text-muted\">Project description and details about...</p>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                        <div class=\"d-flex align-items-center ms-10 ms-md-0 mt-3\">#}
{#                                            <!-- avatar group -->#}
{#                                            <div class=\"avatar-group me-2\">#}
{#                        <span class=\"avatar avatar-sm\">#}
{#                             <!-- img -->#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-7.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                                <span class=\"avatar avatar-sm\">#}
{#                             <!-- img -->#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-8.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                                <span class=\"avatar avatar-sm\">#}
{#                             <!-- img -->#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-9.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                            </div>#}
{#                                            <div>#}
{#                                                <!-- dropdown -->#}
{#                                                <div class=\"dropdown dropstart\">#}
{#                                                    <a href=\"#\" class=\"text-muted text-primary-hover\" id=\"dropdownprojectThree\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
{#                                                        <i data-feather=\"more-vertical\" class=\"icon-xxs\"></i>#}
{#                                                    </a>#}
{#                                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownprojectThree\">#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Action</a>#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Something else#}
{#                                                            here</a>#}
{#                                                    </div>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div class=\"d-md-flex justify-content-between#}
{#                      align-items-center mb-4\">#}
{#                                        <div class=\"d-flex align-items-center\">#}
{#                                            <!-- icon shape -->#}
{#                                            <div>#}
{#                                                <div class=\"icon-shape icon-lg border p-4 rounded-1\">#}
{#                                                    <img src=\"/assets/images/brand/dropbox-logo.svg\" alt=\"\">#}
{#                                                </div>#}
{#                                            </div>#}
{#                                            <!-- text -->#}
{#                                            <div class=\"ms-3 \">#}
{#                                                <h5 class=\"mb-1\"><a href=\"#\" class=\"text-inherit\">Dropbox Design#}
{#                                                        System</a></h5>#}
{#                                                <p class=\"mb-0 fs-5 text-muted\">Project description and details about...</p>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                        <div class=\"d-flex align-items-center ms-10 ms-md-0 mt-3\">#}
{#                                            <!-- avatar group -->#}
{#                                            <div class=\"avatar-group me-2\">#}
{#                                                <!-- img -->#}
{#                                                <span class=\"avatar avatar-sm\">#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-10.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                                <!-- img -->#}
{#                                                <span class=\"avatar avatar-sm\">#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-11.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                                <!-- img -->#}
{#                                                <span class=\"avatar avatar-sm\">#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-12.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                            </div>#}
{#                                            <div>#}
{#                                                <!-- dropdown -->#}
{#                                                <div class=\"dropdown dropstart\">#}
{#                                                    <a href=\"#\" class=\"text-muted text-primary-hover\" id=\"dropdownprojectFour\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
{#                                                        <i data-feather=\"more-vertical\" class=\"icon-xxs\"></i>#}
{#                                                    </a>#}
{#                                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownprojectFour\">#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Action</a>#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Something else#}
{#                                                            here</a>#}
{#                                                    </div>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div class=\"d-md-flex justify-content-between#}
{#                      align-items-center\">#}
{#                                        <div class=\"d-flex align-items-center\">#}
{#                                            <!-- icon shape -->#}
{#                                            <div>#}
{#                                                <div class=\"icon-shape icon-lg border p-4 rounded-1#}
{#                            bg-primary\">#}
{#                                                    <img src=\"/assets/images/brand/layers-logo.svg\" alt=\"\">#}
{#                                                </div>#}
{#                                            </div>#}
{#                                            <!-- text -->#}
{#                                            <div class=\"ms-3 \">#}
{#                                                <h5 class=\"mb-1\"><a href=\"#\" class=\"text-inherit\">Project Management</a></h5>#}
{#                                                <p class=\"mb-0 fs-5 text-muted\">Project description and details about...</p>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                        <div class=\"d-flex align-items-center ms-10 ms-md-0 mt-3\">#}
{#                                            <!-- avatar group -->#}
{#                                            <div class=\"avatar-group me-2\">#}
{#                                                <!-- img -->#}
{#                                                <span class=\"avatar avatar-sm\">#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-13.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                                <!-- img -->#}
{#                                                <span class=\"avatar avatar-sm\">#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-14.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                                <!-- img -->#}
{#                                                <span class=\"avatar avatar-sm\">#}
{#                            <img alt=\"avatar\"#}
{#                                 src=\"/assets/images/avatar/avatar-15.jpg\"#}
{#                                 class=\"rounded-circle\">#}
{#                          </span>#}
{#                                            </div>#}
{#                                            <div>#}
{#                                                <!-- dropdown -->#}
{#                                                <div class=\"dropdown dropstart\">#}
{#                                                    <a href=\"#\" class=\"text-muted text-primary-hover\" id=\"dropdownprojectFoufive\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
{#                                                        <i data-feather=\"more-vertical\" class=\"icon-xxs\"></i>#}
{#                                                    </a>#}
{#                                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownprojectFoufive\">#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Action</a>#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>#}
{#                                                        <a class=\"dropdown-item\" href=\"#\">Something else#}
{#                                                            here</a>#}
{#                                                    </div>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                </div>#}
{#                            </div>#}
{#                        </div>#}
{#                        <div class=\"col-xl-6 col-md-12 col-12 mb-6\">#}
{#                            <!-- card -->#}
{#                            <div class=\"card\">#}
{#                                <!-- card body -->#}
{#                                <div class=\"card-body\">#}
{#                                    <div class=\"d-flex justify-content-between mb-5#}
{#                      align-items-center\">#}
{#                                        <!-- avatar -->#}
{#                                        <div class=\"d-flex align-items-center\">#}
{#                                            <div>#}
{#                                                <img src=\"/assets/images/avatar/avatar-1.jpg\" alt=\"\" class=\"avatar avatar-md rounded-circle\">#}
{#                                            </div>#}
{#                                            <div class=\"ms-3\">#}
{#                                                <h5 class=\"mb-0 fw-bold\">Jitu Chauhan</h5>#}
{#                                                <p class=\"mb-0\">19 minutes ago</p>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                        <div>#}
{#                                            <!-- dropdown -->#}
{#                                            <div class=\"dropdown dropstart\">#}
{#                                                <a href=\"#\" class=\"text-muted text-primary-hover\" id=\"dropdownprojectFive\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
{#                                                    <i data-feather=\"more-vertical\" class=\"icon-xxs\"></i>#}
{#                                                </a>#}
{#                                                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownprojectFive\">#}
{#                                                    <a class=\"dropdown-item\" href=\"#\">Action</a>#}
{#                                                    <a class=\"dropdown-item\" href=\"#\">Another action</a>#}
{#                                                    <a class=\"dropdown-item\" href=\"#\">Something else#}
{#                                                        here</a>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div class=\"mb-4\">#}
{#                                        <!-- text -->#}
{#                                        <p class=\"mb-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspen disse var ius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>#}
{#                                        <img src=\"/assets/images/blog/blog-img-1.jpg\" class=\"rounded-3 w-100\" alt=\"\">#}
{#                                    </div>#}
{#                                    <!-- icons -->#}
{#                                    <div class=\"mb-4\">#}
{#                    <span class=\"me-1 me-md-4\"><i data-feather=\"heart\"#}
{#                                                  class=\"icon-xxs text-muted me-2\"></i><span>20 Like</span></span>#}
{#                                        <span class=\"me-1 me-md-4\"><i#}
{#                                                    data-feather=\"message-square\" class=\"icon-xxs#}
{#                          text-muted me-2\"></i><span>12 Comment</span></span>#}
{#                                        <span><i data-feather=\"share-2\" class=\"icon-xxs#}
{#                          text-muted me-2\"></i><span>Share</span></span>#}
{#                                    </div>#}
{#                                    <div class=\"border-bottom border-top py-5 d-flex#}
{#                      align-items-center mb-4\">#}
{#                                        <!-- avatar group -->#}
{#                                        <div class=\"avatar-group me-2 me-md-3\">#}
{#                      <span class=\"avatar avatar-sm\">#}
{#                            <!-- img -->#}
{#                          <img alt=\"avatar\"#}
{#                               src=\"/assets/images/avatar/avatar-7.jpg\"#}
{#                               class=\"rounded-circle\">#}
{#                        </span>#}
{#                                            <span class=\"avatar avatar-sm\">#}
{#                             <!-- img -->#}
{#                          <img alt=\"avatar\"#}
{#                               src=\"/assets/images/avatar/avatar-8.jpg\"#}
{#                               class=\"rounded-circle\">#}
{#                        </span>#}
{#                                            <span class=\"avatar avatar-sm\">#}
{#                             <!-- img -->#}
{#                          <img alt=\"avatar\"#}
{#                               src=\"/assets/images/avatar/avatar-9.jpg\"#}
{#                               class=\"rounded-circle\">#}
{#                        </span>#}
{#                                        </div>#}
{#                                        <div><span>You and 20 more liked this</span></div>#}
{#                                    </div>#}
{#                                    <!-- row -->#}
{#                                    <div class=\"row\">#}
{#                                        <div class=\"col-xl-1 col-lg-2 col-md-2 col-12 mb-3 mb-lg-0\">#}
{#                                            <!-- avatar -->#}
{#                                            <img src=\"/assets/images/avatar/avatar-1.jpg\" class=\"avatar avatar-md rounded-circle\" alt=\"\">#}
{#                                        </div>#}
{#                                        <!-- input -->#}
{#                                        <div class=\"col-xl-11 col-lg-10 col-md-9 col-12 \">#}

{#                                            <div class=\"row g-3 align-items-center\">#}
{#                                                <div class=\"col-md-2 col-xxl-1\">#}
{#                                                    <label for=\"name\" class=\"col-form-label \">Name</label>#}
{#                                                </div>#}
{#                                                <div class=\"col-md-8 col-xxl-9  mt-0 mt-md-3\">#}
{#                                                    <input type=\"password\" id=\"name\" class=\"form-control\" aria-describedby=\"name\">#}
{#                                                </div>#}
{#                                                <div class=\"col-md-2 col-xxl-2\">#}
{#                                                    <button type=\"submit\" class=\"btn btn-primary\">Post</button>#}
{#                                                </div>#}
{#                                            </div>#}

{#                                        </div>#}

{#                                    </div>#}
{#                                </div>#}
{#                            </div>#}
{#                        </div>#}
{#                        <div class=\"col-xl-6 col-lg-12 col-md-12 col-12 mb-6\">#}
{#                            <!-- card -->#}
{#                            <div class=\"card mb-4\">#}
{#                                <!-- card body -->#}
{#                                <div class=\"card-body\">#}
{#                                    <!-- card title -->#}
{#                                    <h4 class=\"card-title\">My Team</h4>#}
{#                                    <div class=\"d-flex justify-content-between#}
{#                      align-items-center mb-4\">#}
{#                                        <div class=\"d-flex align-items-center\">#}
{#                                            <!-- img -->#}
{#                                            <div>#}
{#                                                <img src=\"/assets/images/avatar/avatar-1.jpg\" class=\"rounded-circle avatar-md\" alt=\"\">#}
{#                                            </div>#}
{#                                            <!-- text -->#}
{#                                            <div class=\"ms-3 \">#}
{#                                                <h5 class=\"mb-1\">Dianna Smiley</h5>#}
{#                                                <p class=\"text-muted mb-0 fs-5 text-muted\">UI / UX Designer#}
{#                                                </p>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                        <div>#}
{#                                            <a href=\"#\" class=\"text-muted text-primary-hover\"><i#}
{#                                                        class=\"me-4 icon-xs\" data-feather=\"phone-call\"></i></a>#}
{#                                            <a href=\"#\" class=\"text-muted text-primary-hover\"><i#}
{#                                                        class=\"icon-xs\" data-feather=\"video\"></i></a>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div class=\"d-flex justify-content-between#}
{#                      align-items-center mb-4\">#}
{#                                        <div class=\"d-flex align-items-center\">#}
{#                                            <!-- img -->#}
{#                                            <div>#}
{#                                                <img src=\"/assets/images/avatar/avatar-2.jpg\" class=\"rounded-circle avatar-md\" alt=\"\">#}
{#                                            </div>#}
{#                                            <!-- content -->#}
{#                                            <div class=\"ms-3 \">#}
{#                                                <h5 class=\"mb-1\">Anne Brewer</h5>#}
{#                                                <p class=\"text-muted mb-0 fs-5 text-muted\">Senior UX Designer#}
{#                                                </p>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                        <div>#}
{#                                            <!-- icons -->#}
{#                                            <a href=\"#\" class=\"text-muted text-primary-hover\"><i#}
{#                                                        class=\"me-4 icon-xs\" data-feather=\"phone-call\"></i></a>#}
{#                                            <a href=\"#\" class=\"text-muted text-primary-hover\"><i#}
{#                                                        class=\"icon-xs\" data-feather=\"video\"></i></a>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div class=\"d-flex justify-content-between#}
{#                      align-items-center mb-4\">#}
{#                                        <div class=\"d-flex align-items-center\">#}
{#                                            <!-- img -->#}
{#                                            <div>#}
{#                                                <img src=\"/assets/images/avatar/avatar-3.jpg\" class=\"rounded-circle avatar-md\" alt=\"\">#}
{#                                            </div>#}
{#                                            <!-- text -->#}
{#                                            <div class=\"ms-3 \">#}
{#                                                <h5 class=\"mb-1\">Richard Christmas#}
{#                                                </h5>#}
{#                                                <p class=\"text-muted mb-0 \">Front-End Engineer</p>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                        <div>#}
{#                                            <!-- icons -->#}
{#                                            <a href=\"#\" class=\"text-muted text-primary-hover\"><i#}
{#                                                        class=\"me-4 icon-xs\" data-feather=\"phone-call\"></i></a>#}
{#                                            <a href=\"#\" class=\"text-muted text-primary-hover\"><i#}
{#                                                        class=\"icon-xs\" data-feather=\"video\"></i></a>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                    <div class=\"d-flex justify-content-between#}
{#                      align-items-center\">#}
{#                                        <!-- img -->#}
{#                                        <div class=\"d-flex align-items-center\">#}
{#                                            <div>#}
{#                                                <img src=\"/assets/images/avatar/avatar-4.jpg\" class=\"rounded-circle avatar-md\" alt=\"\">#}
{#                                            </div>#}
{#                                            <!-- text -->#}
{#                                            <div class=\"ms-3 \">#}
{#                                                <h5 class=\"mb-1\">Nicholas Binder#}
{#                                                </h5>#}
{#                                                <p class=\"text-muted mb-0 fs-5 \">Content Marketing Manager</p>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                        <div>#}
{#                                            <a href=\"#\" class=\"text-muted text-primary-hover\"><i#}
{#                                                        class=\"me-4 icon-xs\" data-feather=\"phone-call\"></i></a>#}
{#                                            <a href=\"#\" class=\"text-muted text-primary-hover\"><i#}
{#                                                        class=\"icon-xs\" data-feather=\"video\"></i></a>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                </div>#}
{#                            </div>#}
{#                            <div class=\"row\">#}
{#                                <div class=\"col-12\">#}
{#                                    <!-- card -->#}
{#                                    <div class=\"card\">#}
{#                                        <!-- card body -->#}
{#                                        <div class=\"card-body\">#}
{#                                            <!-- card title -->#}
{#                                            <h4 class=\"card-title\">Activity Feed</h4>#}

{#                                            <div class=\"d-flex mb-5\">#}
{#                                                <!-- img -->#}
{#                                                <div>#}
{#                                                    <img src=\"/assets/images/avatar/avatar-6.jpg\" class=\"rounded-circle avatar-md\" alt=\"\">#}
{#                                                </div>#}
{#                                                <!-- content -->#}
{#                                                <div class=\"ms-3 \">#}
{#                                                    <h5 class=\"mb-1\">Dianna Smiley</h5>#}
{#                                                    <p class=\"text-muted mb-2\">Just create a new Project in Dashui...#}
{#                                                    </p>#}
{#                                                    <p class=\"fs-5 mb-0\">2m ago</p>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                            <div class=\"d-flex mb-5\">#}
{#                                                <!-- img -->#}
{#                                                <div>#}
{#                                                    <img src=\"/assets/images/avatar/avatar-7.jpg\" class=\"rounded-circle avatar-md\" alt=\"\">#}
{#                                                </div>#}
{#                                                <!-- content -->#}
{#                                                <div class=\"ms-3 \">#}
{#                                                    <h5 class=\"mb-1\">Irene Hargrove</h5>#}
{#                                                    <p class=\"text-muted mb-2\">Comment on Bootstrap Tutorial Says Hi, I m irene...#}
{#                                                    </p>#}
{#                                                    <p class=\"fs-5 mb-0\">1hour ago</p>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                            <div class=\"d-flex\">#}
{#                                                <!-- img -->#}
{#                                                <div>#}
{#                                                    <img src=\"/assets/images/avatar/avatar-9.jpg\" class=\"rounded-circle avatar-md\" alt=\"\">#}
{#                                                </div>#}
{#                                                <!-- content -->#}
{#                                                <div class=\"ms-3 \">#}
{#                                                    <h5 class=\"mb-1\">Trevor Bradley</h5>#}
{#                                                    <p class=\"text-muted mb-2\">Just share your article on Social Media..#}
{#                                                    </p>#}
{#                                                    <p class=\"mb-0 fs-5 text-muted\">2month ago</p>#}
{#                                                </div>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                    </div>#}
{#                                </div>#}
{#                            </div>#}
{#                        </div>#}
{#                    </div>#}
{#                </div>#}
            </div>


    



{#    <h1>{{ person.firstname }} {{ person.lastname }}</h1>#}
{#    <p>{{ person.email }} <br>#}
{#    {{ status }}</p>#}

{#    <div class=\"table-responsive text-center\" style=\"margin-top: 3%; font-size: 17px\">#}
{#        <table class=\"table text-nowrap mb-0\">#}
{#            <thead class=\"table-light\" >#}
{#            <tr>#}
{#                <th>Vue générale</th>#}
{#                <th>Match(s)</th>#}
{#                <th>Parrainage(s)</th>#}
{#                <th>Historique</th>#}
{#            </tr>#}
{#            </thead>#}
{#            <tbody id=\"persons\">#}

{#                <tr>#}
{#                </tr>#}
{#            </tbody>#}
{#        </table>#}
{#        <p id=\"noresult\"></p>#}
{#    </div>#}
{#    <p style=\"margin-bottom: 7%\"></p>#}



{% endblock %}", "dashboard/person.html.twig", "/home/tristan/Desktop/OPE/OPEProject/templates/dashboard/person.html.twig");
    }
}
