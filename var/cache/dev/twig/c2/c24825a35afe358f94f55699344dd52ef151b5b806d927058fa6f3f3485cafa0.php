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

/* point_focal/partials/_sidebar.html.twig */
class __TwigTemplate_fc12287bf538e7d404f1bf89eab24a1e663d0c18861a2b72ff7e45622a0e59bb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_focal/partials/_sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_focal/partials/_sidebar.html.twig"));

        // line 1
        echo "                  <nav class=\"pcoded-navbar\">
                      <div class=\"sidebar_toggle\"><a href=\"#\"><i class=\"icon-close icons\"></i></a></div>
                      <div class=\"pcoded-inner-navbar main-menu\">
                          <div class=\"\">
                              <div class=\"main-menu-header\">
                                    <i class=\"ti-user text-white\"></i>
                                    <div class=\"user-details\">
                                        <span id=\"more-details\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "Username", [], "any", false, false, false, 8), "html", null, true);
        echo "<i class=\"fa fa-caret-down\"></i></span>
                                    </div>
                              </div>
        
                              <div class=\"main-menu-content\">
                                  <ul>
                                      <li class=\"more-details\">
                                          <a href=\"user-profile.html\"><i class=\"ti-user\"></i>View Profile</a>
                                          <a href=\"#!\"><i class=\"ti-settings\"></i>Settings</a>
                                          <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"ti-power-off\"></i>Logout</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class=\"p-15 p-b-0\">
                              <form class=\"form-material\">
                                  <div class=\"form-group form-primary\">
                                      <input type=\"text\" name=\"footer-email\" class=\"form-control\" required=\"\">
                                      <span class=\"form-bar\"></span>
                                      <label class=\"float-label\"><i class=\"fa fa-search m-r-10\"></i>Search Friend</label>
                                  </div>
                              </form>
                          </div>
                          <div class=\"pcoded-navigation-label\" data-i18n=\"nav.category.navigation\">Layout</div>
                          <ul class=\"pcoded-item pcoded-left-item\">
                              <li class=\"active\">
                                  <a href=\"index.html\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-home\"></i><b>D</b></span>
                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.dash.main\">Dashboard</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                              </li>
                              <li class=\"pcoded-hasmenu\">
                                  <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-layout-grid2-alt\"></i></span>
                                      <span class=\"pcoded-mtext\"  data-i18n=\"nav.basic-components.main\">Components</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                                  <ul class=\"pcoded-submenu\">
                                      <li class=\" \">
                                          <a href=\"accordion.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.alert\">Accordion</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"breadcrumb.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Breadcrumbs</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"button.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.alert\">Button</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"tabs.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Tabs</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"color.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.alert\">Color</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"label-badge.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Label Badge</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"tooltip.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.alert\">Tooltip</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"typography.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Typography</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"notification.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.alert\">Notification</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"icon-themify.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Themify</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                
                                  </ul>
                              </li>
                          </ul>
                          <div class=\"pcoded-navigation-label\" data-i18n=\"nav.category.forms\">Forms &amp; Tables</div>
                          <ul class=\"pcoded-item pcoded-left-item\">
                              <li>
                                  <a href=\"form-elements-component.html\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-layers\"></i><b>FC</b></span>
                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.form-components.main\">Form Components</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href=\"bs-basic-table.html\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-layers\"></i><b>FC</b></span>
                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.form-components.main\">Basic Table</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                              </li>
        
                          </ul>
        
                          <div class=\"pcoded-navigation-label\" data-i18n=\"nav.category.forms\">Chart &amp; Maps</div>
                          <ul class=\"pcoded-item pcoded-left-item\">
                              <li>
                                  <a href=\"chart.html\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-layers\"></i><b>FC</b></span>
                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.form-components.main\">Chart</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href=\"map-google.html\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-layers\"></i><b>FC</b></span>
                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.form-components.main\">Maps</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                              </li>
                              <li class=\"pcoded-hasmenu\">
                                  <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-layout-grid2-alt\"></i></span>
                                      <span class=\"pcoded-mtext\"  data-i18n=\"nav.basic-components.main\">Pages</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                                  <ul class=\"pcoded-submenu\">
                                      <li class=\" \">
                                          <a href=\"auth-normal-sign-in.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.alert\">Login</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"auth-sign-up.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Register</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"sample-page.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Sample Page</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
        
                          </ul>
        
                          <div class=\"pcoded-navigation-label\" data-i18n=\"nav.category.other\">Other</div>
                          <ul class=\"pcoded-item pcoded-left-item\">
                              <li class=\"pcoded-hasmenu \">
                                  <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-direction-alt\"></i><b>M</b></span>
                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.menu-levels.main\">Menu Levels</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                                  <ul class=\"pcoded-submenu\">
                                      <li class=\"\">
                                          <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.menu-levels.menu-level-21\">Menu Level 2.1</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\"pcoded-hasmenu \">
                                          <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-direction-alt\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.menu-levels.menu-level-22.main\">Menu Level 2.2</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                          <ul class=\"pcoded-submenu\">
                                              <li class=\"\">
                                                  <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                                      <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.menu-levels.menu-level-22.menu-level-31\">Menu Level 3.1</span>
                                                      <span class=\"pcoded-mcaret\"></span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </li>
                                      <li class=\"\">
                                          <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.menu-levels.menu-level-23\">Menu Level 2.3</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "point_focal/partials/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("                  <nav class=\"pcoded-navbar\">
                      <div class=\"sidebar_toggle\"><a href=\"#\"><i class=\"icon-close icons\"></i></a></div>
                      <div class=\"pcoded-inner-navbar main-menu\">
                          <div class=\"\">
                              <div class=\"main-menu-header\">
                                    <i class=\"ti-user text-white\"></i>
                                    <div class=\"user-details\">
                                        <span id=\"more-details\">{{app.user.Username}}<i class=\"fa fa-caret-down\"></i></span>
                                    </div>
                              </div>
        
                              <div class=\"main-menu-content\">
                                  <ul>
                                      <li class=\"more-details\">
                                          <a href=\"user-profile.html\"><i class=\"ti-user\"></i>View Profile</a>
                                          <a href=\"#!\"><i class=\"ti-settings\"></i>Settings</a>
                                          <a href=\"{{path('app_logout')}}\"><i class=\"ti-power-off\"></i>Logout</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class=\"p-15 p-b-0\">
                              <form class=\"form-material\">
                                  <div class=\"form-group form-primary\">
                                      <input type=\"text\" name=\"footer-email\" class=\"form-control\" required=\"\">
                                      <span class=\"form-bar\"></span>
                                      <label class=\"float-label\"><i class=\"fa fa-search m-r-10\"></i>Search Friend</label>
                                  </div>
                              </form>
                          </div>
                          <div class=\"pcoded-navigation-label\" data-i18n=\"nav.category.navigation\">Layout</div>
                          <ul class=\"pcoded-item pcoded-left-item\">
                              <li class=\"active\">
                                  <a href=\"index.html\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-home\"></i><b>D</b></span>
                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.dash.main\">Dashboard</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                              </li>
                              <li class=\"pcoded-hasmenu\">
                                  <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-layout-grid2-alt\"></i></span>
                                      <span class=\"pcoded-mtext\"  data-i18n=\"nav.basic-components.main\">Components</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                                  <ul class=\"pcoded-submenu\">
                                      <li class=\" \">
                                          <a href=\"accordion.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.alert\">Accordion</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"breadcrumb.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Breadcrumbs</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"button.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.alert\">Button</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"tabs.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Tabs</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"color.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.alert\">Color</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"label-badge.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Label Badge</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"tooltip.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.alert\">Tooltip</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"typography.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Typography</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"notification.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.alert\">Notification</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"icon-themify.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Themify</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                
                                  </ul>
                              </li>
                          </ul>
                          <div class=\"pcoded-navigation-label\" data-i18n=\"nav.category.forms\">Forms &amp; Tables</div>
                          <ul class=\"pcoded-item pcoded-left-item\">
                              <li>
                                  <a href=\"form-elements-component.html\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-layers\"></i><b>FC</b></span>
                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.form-components.main\">Form Components</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href=\"bs-basic-table.html\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-layers\"></i><b>FC</b></span>
                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.form-components.main\">Basic Table</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                              </li>
        
                          </ul>
        
                          <div class=\"pcoded-navigation-label\" data-i18n=\"nav.category.forms\">Chart &amp; Maps</div>
                          <ul class=\"pcoded-item pcoded-left-item\">
                              <li>
                                  <a href=\"chart.html\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-layers\"></i><b>FC</b></span>
                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.form-components.main\">Chart</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href=\"map-google.html\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-layers\"></i><b>FC</b></span>
                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.form-components.main\">Maps</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                              </li>
                              <li class=\"pcoded-hasmenu\">
                                  <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-layout-grid2-alt\"></i></span>
                                      <span class=\"pcoded-mtext\"  data-i18n=\"nav.basic-components.main\">Pages</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                                  <ul class=\"pcoded-submenu\">
                                      <li class=\" \">
                                          <a href=\"auth-normal-sign-in.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.alert\">Login</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"auth-sign-up.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Register</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\" \">
                                          <a href=\"sample-page.html\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.basic-components.breadcrumbs\">Sample Page</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
        
                          </ul>
        
                          <div class=\"pcoded-navigation-label\" data-i18n=\"nav.category.other\">Other</div>
                          <ul class=\"pcoded-item pcoded-left-item\">
                              <li class=\"pcoded-hasmenu \">
                                  <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                      <span class=\"pcoded-micon\"><i class=\"ti-direction-alt\"></i><b>M</b></span>
                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.menu-levels.main\">Menu Levels</span>
                                      <span class=\"pcoded-mcaret\"></span>
                                  </a>
                                  <ul class=\"pcoded-submenu\">
                                      <li class=\"\">
                                          <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.menu-levels.menu-level-21\">Menu Level 2.1</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                                      <li class=\"pcoded-hasmenu \">
                                          <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-direction-alt\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.menu-levels.menu-level-22.main\">Menu Level 2.2</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                          <ul class=\"pcoded-submenu\">
                                              <li class=\"\">
                                                  <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                                      <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                                      <span class=\"pcoded-mtext\" data-i18n=\"nav.menu-levels.menu-level-22.menu-level-31\">Menu Level 3.1</span>
                                                      <span class=\"pcoded-mcaret\"></span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </li>
                                      <li class=\"\">
                                          <a href=\"javascript:void(0)\" class=\"waves-effect waves-dark\">
                                              <span class=\"pcoded-micon\"><i class=\"ti-angle-right\"></i></span>
                                              <span class=\"pcoded-mtext\" data-i18n=\"nav.menu-levels.menu-level-23\">Menu Level 2.3</span>
                                              <span class=\"pcoded-mcaret\"></span>
                                          </a>
                                      </li>
                
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </nav>", "point_focal/partials/_sidebar.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\MbothDataBase\\templates\\point_focal\\partials\\_sidebar.html.twig");
    }
}
