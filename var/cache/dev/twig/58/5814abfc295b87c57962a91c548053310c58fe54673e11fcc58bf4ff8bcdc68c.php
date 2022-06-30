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

/* partials/_sidebar.html.twig */
class __TwigTemplate_f64613c64436c341295944cdb0ae4cbea9c7215e5cc4f602251364842f4c205d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_sidebar.html.twig"));

        // line 1
        echo "          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\" class=\"site_title\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.png"), "html", null, true);
        echo "\" alt=\"\" width=\"25\" > <span>A.D.M</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Bienvenu,</span>
                <h2>
                  ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "User", [], "any", false, false, false, 16)) {
            // line 17
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "Username", [], "any", false, false, false, 17), "html", null, true);
            echo "
                  ";
        } else {
            // line 19
            echo "                    Inconnu
                  ";
        }
        // line 21
        echo "                </h2>
              </div>
              <div class=\"clearfix\"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>General</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-dashboard\"></i> Tableau de Bord <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">Tableau de Bord</a></li>
                      <li><a href=\"#\">Cartographie</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-city\"></i> Localité <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_index");
        echo "\">Quartier</a></li>
                      <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_index");
        echo "\">Cellule</a></li>
                      <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secteur_index");
        echo "\">Secteur</a></li>
                      <li><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maison_index");
        echo "\">Maison</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-users\"></i> Population <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_index");
        echo "\">Population</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-user-graduate\"></i> Education <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_etude_index");
        echo "\">Niveau Etude</a></li>
                      <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ecole_index");
        echo "\">Ecole</a></li>
                      <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index");
        echo "\">Classe</a></li>
                      <li><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_index");
        echo "\">Eleve</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-leaf\"></i> Hygiène & Environ... <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_arbre_index");
        echo "\">Type d'arbre</a></li>
                      <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_arbre_index");
        echo "\">Arbre</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-heartbeat\"></i> Santé <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_maladie_index");
        echo "\">Type Maladie</a></li>
                      <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maladie_index");
        echo "\">Maladie</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-hand-holding-usd\"></i>Economie <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                      <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-chart-bar\"></i> Statistiques <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_statistique");
        echo "\">Global</a></li>
                      <li><a href=\"#\">Education</a></li>
                      <li><a href=\"#\">Santé</a></li>
                      <li><a href=\"#\">Economie</a></li>
                      <li><a href=\"#\">Environnement</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bug\"></i> Points Focaux <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">Points Focaux</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 90,  184 => 81,  170 => 70,  166 => 69,  158 => 64,  154 => 63,  146 => 58,  142 => 57,  138 => 56,  134 => 55,  126 => 50,  118 => 45,  114 => 44,  110 => 43,  106 => 42,  97 => 36,  80 => 21,  76 => 19,  70 => 17,  68 => 16,  60 => 11,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"{{ path('app_dashboard') }}\" class=\"site_title\"><img src=\"{{asset('assets/images/logo-mini.png')}}\" alt=\"\" width=\"25\" > <span>A.D.M</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"{{asset('assets/images/img.jpg')}}\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Bienvenu,</span>
                <h2>
                  {% if app.User %}
                    {{app.user.Username}}
                  {% else %}
                    Inconnu
                  {% endif %}
                </h2>
              </div>
              <div class=\"clearfix\"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>General</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-dashboard\"></i> Tableau de Bord <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"{{ path('app_dashboard') }}\">Tableau de Bord</a></li>
                      <li><a href=\"#\">Cartographie</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-city\"></i> Localité <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"{{ path('app_quartier_index') }}\">Quartier</a></li>
                      <li><a href=\"{{ path('app_cellule_index') }}\">Cellule</a></li>
                      <li><a href=\"{{ path('app_secteur_index') }}\">Secteur</a></li>
                      <li><a href=\"{{ path('app_maison_index') }}\">Maison</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-users\"></i> Population <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"{{(path('app_personne_index'))}}\">Population</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-user-graduate\"></i> Education <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"{{ path('app_niveau_etude_index') }}\">Niveau Etude</a></li>
                      <li><a href=\"{{ path('app_ecole_index') }}\">Ecole</a></li>
                      <li><a href=\"{{ path('app_classe_index') }}\">Classe</a></li>
                      <li><a href=\"{{ path('app_eleve_index') }}\">Eleve</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-leaf\"></i> Hygiène & Environ... <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"{{ path('app_type_arbre_index') }}\">Type d'arbre</a></li>
                      <li><a href=\"{{ path('app_arbre_index') }}\">Arbre</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-heartbeat\"></i> Santé <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"{{ path('app_type_maladie_index') }}\">Type Maladie</a></li>
                      <li><a href=\"{{ path('app_maladie_index') }}\">Maladie</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-hand-holding-usd\"></i>Economie <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                      <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-chart-bar\"></i> Statistiques <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"{{ path('app_statistique') }}\">Global</a></li>
                      <li><a href=\"#\">Education</a></li>
                      <li><a href=\"#\">Santé</a></li>
                      <li><a href=\"#\">Economie</a></li>
                      <li><a href=\"#\">Environnement</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bug\"></i> Points Focaux <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"{{path('app_user_index')}}\">Points Focaux</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>", "partials/_sidebar.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\partials\\_sidebar.html.twig");
    }
}
