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
class __TwigTemplate_c297fcea1f1fb1b4372c45adaa75075f4b21d97ffff5bf2316daa508d8f6fa06 extends Template
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
        echo "\" alt=\"\">John Doe
                    </a>
                    <div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
                      <a class=\"dropdown-item\"  href=\"javascript:;\"> Profile</a>
                        <a class=\"dropdown-item\"  href=\"javascript:;\">
                          <span class=\"badge bg-red pull-right\">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class=\"dropdown-item\"  href=\"javascript:;\">Help</a>
                      <a class=\"dropdown-item\"  href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
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
        // line 31
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
        // line 43
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
        // line 55
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
        // line 67
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
        return array (  123 => 67,  108 => 55,  93 => 43,  78 => 31,  54 => 10,  43 => 1,);
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
                      <img src=\"{{asset('assets/images/img.jpg')}}\" alt=\"\">John Doe
                    </a>
                    <div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
                      <a class=\"dropdown-item\"  href=\"javascript:;\"> Profile</a>
                        <a class=\"dropdown-item\"  href=\"javascript:;\">
                          <span class=\"badge bg-red pull-right\">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class=\"dropdown-item\"  href=\"javascript:;\">Help</a>
                      <a class=\"dropdown-item\"  href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
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
          </div>", "partials/_navbar.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\partials\\_navbar.html.twig");
    }
}
