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

/* partials/_navbar.html.twig */
class __TwigTemplate_75aa45443540c5b96095fa85163352a8e21faae26595825780dbc425458cc144 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navbar.html.twig"));

        // line 1
        echo "        <div class=\"top_nav\">
            <div class=\"nav_menu\">
                <div class=\"nav toggle\">
                  <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                </div>
                <nav class=\"nav navbar-nav\">
                <ul class=\" navbar-right\">
                  <li class=\"nav-item dropdown open\" style=\"padding-left: 15px;\">
                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" aria-haspopup=\"true\" id=\"navbarDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                      <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"\">                      
                      ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "User", [], "any", false, false, false, 11)) {
            // line 12
            echo "                        ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "Username", [], "any", false, false, false, 12)), "html", null, true);
            echo "
                      ";
        } else {
            // line 14
            echo "                        Inconnu
                      ";
        }
        // line 16
        echo "                    </a>
                    <div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
                      <a class=\"dropdown-item\"  href=\"javascript:;\"> Profile</a>
                        <a class=\"dropdown-item\"  href=\"javascript:;\">
                          <span class=\"badge bg-red pull-right\">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class=\"dropdown-item\"  href=\"javascript:;\">Help</a>
                      <a class=\"dropdown-item\"  href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role=\"presentation\" class=\"nav-item dropdown open\">
                    <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" id=\"navbarDropdown1\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                      <i class=\"fa fa-envelope-o\"></i>
                      <span class=\"badge bg-green\">6</span>
                    </a>
                    <ul class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\" aria-labelledby=\"navbarDropdown1\">
                      <li class=\"nav-item\">
                        <a class=\"dropdown-item\">
                          <span class=\"image\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class=\"time\">3 mins ago</span>
                          </span>
                          <span class=\"message\">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"dropdown-item\">
                          <span class=\"image\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class=\"time\">3 mins ago</span>
                          </span>
                          <span class=\"message\">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"dropdown-item\">
                          <span class=\"image\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class=\"time\">3 mins ago</span>
                          </span>
                          <span class=\"message\">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"dropdown-item\">
                          <span class=\"image\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class=\"time\">3 mins ago</span>
                          </span>
                          <span class=\"message\">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class=\"nav-item\">
                        <div class=\"text-center\">
                          <a class=\"dropdown-item\">
                            <strong>See All Alerts</strong>
                            <i class=\"fa fa-angle-right\"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 72,  125 => 60,  110 => 48,  95 => 36,  80 => 24,  70 => 16,  66 => 14,  60 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <div class=\"top_nav\">
            <div class=\"nav_menu\">
                <div class=\"nav toggle\">
                  <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                </div>
                <nav class=\"nav navbar-nav\">
                <ul class=\" navbar-right\">
                  <li class=\"nav-item dropdown open\" style=\"padding-left: 15px;\">
                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" aria-haspopup=\"true\" id=\"navbarDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                      <img src=\"{{asset('assets/images/img.jpg')}}\" alt=\"\">                      
                      {% if app.User %}
                        {{app.user.Username|lower}}
                      {% else %}
                        Inconnu
                      {% endif %}
                    </a>
                    <div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
                      <a class=\"dropdown-item\"  href=\"javascript:;\"> Profile</a>
                        <a class=\"dropdown-item\"  href=\"javascript:;\">
                          <span class=\"badge bg-red pull-right\">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class=\"dropdown-item\"  href=\"javascript:;\">Help</a>
                      <a class=\"dropdown-item\"  href=\"{{ path('app_logout') }}\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role=\"presentation\" class=\"nav-item dropdown open\">
                    <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" id=\"navbarDropdown1\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                      <i class=\"fa fa-envelope-o\"></i>
                      <span class=\"badge bg-green\">6</span>
                    </a>
                    <ul class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\" aria-labelledby=\"navbarDropdown1\">
                      <li class=\"nav-item\">
                        <a class=\"dropdown-item\">
                          <span class=\"image\"><img src=\"{{asset('assets/images/img.jpg')}}\" alt=\"Profile Image\" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class=\"time\">3 mins ago</span>
                          </span>
                          <span class=\"message\">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"dropdown-item\">
                          <span class=\"image\"><img src=\"{{asset('assets/images/img.jpg')}}\" alt=\"Profile Image\" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class=\"time\">3 mins ago</span>
                          </span>
                          <span class=\"message\">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"dropdown-item\">
                          <span class=\"image\"><img src=\"{{asset('assets/images/img.jpg')}}\" alt=\"Profile Image\" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class=\"time\">3 mins ago</span>
                          </span>
                          <span class=\"message\">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class=\"nav-item\">
                        <a class=\"dropdown-item\">
                          <span class=\"image\"><img src=\"{{asset('assets/images/img.jpg')}}\" alt=\"Profile Image\" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class=\"time\">3 mins ago</span>
                          </span>
                          <span class=\"message\">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class=\"nav-item\">
                        <div class=\"text-center\">
                          <a class=\"dropdown-item\">
                            <strong>See All Alerts</strong>
                            <i class=\"fa fa-angle-right\"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>", "partials/_navbar.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\partials\\_navbar.html.twig");
    }
}
