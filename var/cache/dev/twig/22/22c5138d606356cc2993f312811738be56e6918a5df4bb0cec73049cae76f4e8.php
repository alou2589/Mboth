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

/* point_focal/basepf.html.twig */
class __TwigTemplate_f38d5815991aab7eac3a7c8d34b333873cea7fffe021ba63ee2797ef2119e389 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_focal/basepf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_focal/basepf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 10]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <!-- Meta -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"description\" content=\"Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs.\" />
        <meta name=\"keywords\" content=\"bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive\" />
        <meta name=\"author\" content=\"codedthemes\" />
        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "
  </head>

  <body>
  <!-- Pre-loader start -->
  <div class=\"theme-loader\">
      <div class=\"loader-track\">
          <div class=\"preloader-wrapper\">
              <div class=\"spinner-layer spinner-blue\">
                  <div class=\"circle-clipper left\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"gap-patch\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"circle-clipper right\">
                      <div class=\"circle\"></div>
                  </div>
              </div>
              <div class=\"spinner-layer spinner-red\">
                  <div class=\"circle-clipper left\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"gap-patch\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"circle-clipper right\">
                      <div class=\"circle\"></div>
                  </div>
              </div>
            
              <div class=\"spinner-layer spinner-yellow\">
                  <div class=\"circle-clipper left\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"gap-patch\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"circle-clipper right\">
                      <div class=\"circle\"></div>
                  </div>
              </div>
            
              <div class=\"spinner-layer spinner-green\">
                  <div class=\"circle-clipper left\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"gap-patch\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"circle-clipper right\">
                      <div class=\"circle\"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id=\"pcoded\" class=\"pcoded\">
      <div class=\"pcoded-overlay-box\"></div>
      <div class=\"pcoded-container navbar-wrapper\">
                ";
        // line 102
        $this->loadTemplate("point_focal/partials/_navbar.html.twig", "point_focal/basepf.html.twig", 102)->display($context);
        // line 103
        echo "
          <div class=\"pcoded-main-container\">
              <div class=\"pcoded-wrapper\">
                  <nav class=\"pcoded-navbar\">
                      <div class=\"sidebar_toggle\"><a href=\"#\"><i class=\"icon-close icons\"></i></a></div>
                      <div class=\"pcoded-inner-navbar main-menu\">
                          <div class=\"\">
                              <div class=\"main-menu-header\">
                                    <i class=\"ti-user text-white\"></i>
                                    <div class=\"user-details\">
                                        <span id=\"more-details\">John Doe<i class=\"fa fa-caret-down\"></i></span>
                                    </div>
                              </div>
        
                              <div class=\"main-menu-content\">
                                  <ul>
                                      <li class=\"more-details\">
                                          <a href=\"user-profile.html\"><i class=\"ti-user\"></i>View Profile</a>
                                          <a href=\"#!\"><i class=\"ti-settings\"></i>Settings</a>
                                          <a href=\"auth-normal-sign-in.html\"><i class=\"ti-layout-sidebar-left\"></i>Logout</a>
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
                  </nav>
                  <div class=\"pcoded-content\">
                      <!-- Page-header start -->
                      <div class=\"page-header\">
                          <div class=\"page-block\">
                              <div class=\"row align-items-center\">
                                  <div class=\"col-md-8\">
                                      <div class=\"page-header-title\">
                                          <h5 class=\"m-b-10\">Dashboard</h5>
                                          <p class=\"m-b-0\">Welcome to Mega Able</p>
                                      </div>
                                  </div>
                                  <div class=\"col-md-4\">
                                      <ul class=\"breadcrumb-title\">
                                          <li class=\"breadcrumb-item\">
                                              <a href=\"index.html\"> <i class=\"fa fa-home\"></i> </a>
                                          </li>
                                          <li class=\"breadcrumb-item\"><a href=\"#!\">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Page-header end -->
                        <div class=\"pcoded-inner-content\">
                            <!-- Main-body start -->
                            <div class=\"main-body\">
                                <div class=\"page-wrapper\">
                                    <!-- Page-body start -->
                                    <div class=\"page-body\">
                                        <div class=\"row\">
                                            <!-- task, page, download counter  start -->
                                            <div class=\"col-xl-3 col-md-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-block\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-8\">
                                                                <h4 class=\"text-c-purple\">\$30200</h4>
                                                                <h6 class=\"text-muted m-b-0\">All Earnings</h6>
                                                            </div>
                                                            <div class=\"col-4 text-right\">
                                                                <i class=\"fa fa-bar-chart f-28\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer bg-c-purple\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-9\">
                                                                <p class=\"text-white m-b-0\">% change</p>
                                                            </div>
                                                            <div class=\"col-3 text-right\">
                                                                <i class=\"fa fa-line-chart text-white f-16\"></i>
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xl-3 col-md-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-block\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-8\">
                                                                <h4 class=\"text-c-green\">290+</h4>
                                                                <h6 class=\"text-muted m-b-0\">Page Views</h6>
                                                            </div>
                                                            <div class=\"col-4 text-right\">
                                                                <i class=\"fa fa-file-text-o f-28\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer bg-c-green\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-9\">
                                                                <p class=\"text-white m-b-0\">% change</p>
                                                            </div>
                                                            <div class=\"col-3 text-right\">
                                                                <i class=\"fa fa-line-chart text-white f-16\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xl-3 col-md-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-block\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-8\">
                                                                <h4 class=\"text-c-red\">145</h4>
                                                                <h6 class=\"text-muted m-b-0\">Task Completed</h6>
                                                            </div>
                                                            <div class=\"col-4 text-right\">
                                                                <i class=\"fa fa-calendar-check-o f-28\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer bg-c-red\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-9\">
                                                                <p class=\"text-white m-b-0\">% change</p>
                                                            </div>
                                                            <div class=\"col-3 text-right\">
                                                                <i class=\"fa fa-line-chart text-white f-16\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xl-3 col-md-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-block\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-8\">
                                                                <h4 class=\"text-c-blue\">500</h4>
                                                                <h6 class=\"text-muted m-b-0\">Downloads</h6>
                                                            </div>
                                                            <div class=\"col-4 text-right\">
                                                                <i class=\"fa fa-hand-o-down f-28\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer bg-c-blue\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-9\">
                                                                <p class=\"text-white m-b-0\">% change</p>
                                                            </div>
                                                            <div class=\"col-3 text-right\">
                                                                <i class=\"fa fa-line-chart text-white f-16\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- task, page, download counter  end -->
    
                                            <!--  sale analytics start -->
                                            <div class=\"col-xl-8 col-md-12\">
                                                <div class=\"card\">
                                                    <div class=\"card-header\">
                                                        <h5>Sales Analytics</h5>
                                                        <span class=\"text-muted\">Get 15% Off on <a href=\"https://www.amcharts.com/\" target=\"_blank\">amCharts</a> licences. Use code \"codedthemes\" and get the discount.</span>
                                                        <div class=\"card-header-right\">
                                                            <ul class=\"list-unstyled card-option\">
                                                                <li><i class=\"fa fa fa-wrench open-card-option\"></i></li>
                                                                <li><i class=\"fa fa-window-maximize full-card\"></i></li>
                                                                <li><i class=\"fa fa-minus minimize-card\"></i></li>
                                                                <li><i class=\"fa fa-refresh reload-card\"></i></li>
                                                                <li><i class=\"fa fa-trash close-card\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-block\">
                                                        <div id=\"sales-analytics\" style=\"height: 400px;\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xl-4 col-md-12\">
                                                <div class=\"card\">
                                                    <div class=\"card-block\">
                                                        <div class=\"row\">
                                                            <div class=\"col\">
                                                                <h4>\$256.23</h4>
                                                                <p class=\"text-muted\">This Month</p>
                                                            </div>
                                                            <div class=\"col-auto\">
                                                                <label class=\"label label-success\">+20%</label>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-sm-8\">
                                                                <canvas id=\"this-month\" style=\"height: 150px;\"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"card quater-card\">
                                                    <div class=\"card-block\">
                                                        <h6 class=\"text-muted m-b-15\">This Quarter</h6>
                                                        <h4>\$3,9452.50</h4>
                                                        <p class=\"text-muted\">\$3,9452.50</p>
                                                        <h5>87</h5>
                                                        <p class=\"text-muted\">Online Revenue<span class=\"f-right\">80%</span></p>
                                                        <div class=\"progress\"><div class=\"progress-bar bg-c-blue\" style=\"width: 80%\"></div></div>
                                                        <h5 class=\"m-t-15\">68</h5>
                                                        <p class=\"text-muted\">Offline Revenue<span class=\"f-right\">50%</span></p>
                                                        <div class=\"progress\"><div class=\"progress-bar bg-c-green\" style=\"width: 50%\"></div></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  sale analytics end -->
    
                                            <!--  project and team member start -->
                                            <div class=\"col-xl-8 col-md-12\">
                                                <div class=\"card table-card\">
                                                    <div class=\"card-header\">
                                                        <h5>Projects</h5>
                                                        <div class=\"card-header-right\">
                                                            <ul class=\"list-unstyled card-option\">
                                                                <li><i class=\"fa fa fa-wrench open-card-option\"></i></li>
                                                                <li><i class=\"fa fa-window-maximize full-card\"></i></li>
                                                                <li><i class=\"fa fa-minus minimize-card\"></i></li>
                                                                <li><i class=\"fa fa-refresh reload-card\"></i></li>
                                                                <li><i class=\"fa fa-trash close-card\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-block\">
                                                        <div class=\"table-responsive\">
                                                            <table class=\"table table-hover\">
                                                                <thead>
                                                                <tr>
                                                                    <th>
                                                                        <div class=\"chk-option\">
                                                                            <div class=\"checkbox-fade fade-in-primary\">
                                                                                <label class=\"check-task\">
                                                                                    <input type=\"checkbox\" value=\"\">
                                                                                    <span class=\"cr\">
                                                                                            <i class=\"cr-icon fa fa-check txt-default\"></i>
                                                                                        </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        Assigned</th>
                                                                    <th>Name</th>
                                                                    <th>Due Date</th>
                                                                    <th class=\"text-right\">Priority</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"chk-option\">
                                                                            <div class=\"checkbox-fade fade-in-primary\">
                                                                                <label class=\"check-task\">
                                                                                    <input type=\"checkbox\" value=\"\">
                                                                                    <span class=\"cr\">
                                                                                                <i class=\"cr-icon fa fa-check txt-default\"></i>
                                                                                            </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"d-inline-block align-middle\">
                                                                            <img src=\"assets/images/avatar-4.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                                            <div class=\"d-inline-block\">
                                                                                <h6>John Deo</h6>
                                                                                <p class=\"text-muted m-b-0\">Graphics Designer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>Able Pro</td>
                                                                    <td>Jun, 26</td>
                                                                    <td class=\"text-right\"><label class=\"label label-danger\">Low</label></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"chk-option\">
                                                                            <div class=\"checkbox-fade fade-in-primary\">
                                                                                <label class=\"check-task\">
                                                                                    <input type=\"checkbox\" value=\"\">
                                                                                    <span class=\"cr\">
                                                                                                <i class=\"cr-icon fa fa-check txt-default\"></i>
                                                                                            </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"d-inline-block align-middle\">
                                                                            <img src=\"assets/images/avatar-5.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                                            <div class=\"d-inline-block\">
                                                                                <h6>Jenifer Vintage</h6>
                                                                                <p class=\"text-muted m-b-0\">Web Designer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>Mashable</td>
                                                                    <td>March, 31</td>
                                                                    <td class=\"text-right\"><label class=\"label label-primary\">high</label></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"chk-option\">
                                                                            <div class=\"checkbox-fade fade-in-primary\">
                                                                                <label class=\"check-task\">
                                                                                    <input type=\"checkbox\" value=\"\">
                                                                                    <span class=\"cr\">
                                                                                                <i class=\"cr-icon fa fa-check txt-default\"></i>
                                                                                            </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"d-inline-block align-middle\">
                                                                            <img src=\"assets/images/avatar-3.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                                            <div class=\"d-inline-block\">
                                                                                <h6>William Jem</h6>
                                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>Flatable</td>
                                                                    <td>Aug, 02</td>
                                                                    <td class=\"text-right\"><label class=\"label label-success\">medium</label></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"chk-option\">
                                                                            <div class=\"checkbox-fade fade-in-primary\">
                                                                                <label class=\"check-task\">
                                                                                    <input type=\"checkbox\" value=\"\">
                                                                                    <span class=\"cr\">
                                                                                                <i class=\"cr-icon fa fa-check txt-default\"></i>
                                                                                            </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"d-inline-block align-middle\">
                                                                            <img src=\"assets/images/avatar-2.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                                            <div class=\"d-inline-block\">
                                                                                <h6>David Jones</h6>
                                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>Guruable</td>
                                                                    <td>Sep, 22</td>
                                                                    <td class=\"text-right\"><label class=\"label label-primary\">high</label></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class=\"text-right m-r-20\">
                                                                <a href=\"#!\" class=\" b-b-primary text-primary\">View all Projects</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xl-4 col-md-12\">
                                                <div class=\"card \">
                                                    <div class=\"card-header\">
                                                        <h5>Team Members</h5>
                                                        <div class=\"card-header-right\">
                                                            <ul class=\"list-unstyled card-option\">
                                                                <li><i class=\"fa fa fa-wrench open-card-option\"></i></li>
                                                                <li><i class=\"fa fa-window-maximize full-card\"></i></li>
                                                                <li><i class=\"fa fa-minus minimize-card\"></i></li>
                                                                <li><i class=\"fa fa-refresh reload-card\"></i></li>
                                                                <li><i class=\"fa fa-trash close-card\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-block\">
                                                        <div class=\"align-middle m-b-30\">
                                                            <img src=\"assets/images/avatar-2.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                            <div class=\"d-inline-block\">
                                                                <h6>David Jones</h6>
                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"align-middle m-b-30\">
                                                            <img src=\"assets/images/avatar-1.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                            <div class=\"d-inline-block\">
                                                                <h6>David Jones</h6>
                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"align-middle m-b-30\">
                                                            <img src=\"assets/images/avatar-3.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                            <div class=\"d-inline-block\">
                                                                <h6>David Jones</h6>
                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"align-middle m-b-30\">
                                                            <img src=\"assets/images/avatar-4.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                            <div class=\"d-inline-block\">
                                                                <h6>David Jones</h6>
                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"align-middle m-b-10\">
                                                            <img src=\"assets/images/avatar-5.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                            <div class=\"d-inline-block\">
                                                                <h6>David Jones</h6>
                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"text-center\">
                                                            <a href=\"#!\" class=\"b-b-primary text-primary\">View all Projects</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  project and team member end -->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id=\"styleSelector\"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class=\"ie-warning\">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class=\"iew-container\">
            <ul class=\"iew-download\">
                <li>
                    <a href=\"http://www.google.com/chrome/\">
                        <img src=\"assets/images/browser/chrome.png\" alt=\"Chrome\">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href=\"https://www.mozilla.org/en-US/firefox/new/\">
                        <img src=\"assets/images/browser/firefox.png\" alt=\"Firefox\">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href=\"http://www.opera.com\">
                        <img src=\"assets/images/browser/opera.png\" alt=\"Opera\">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href=\"https://www.apple.com/safari/\">
                        <img src=\"assets/images/browser/safari.png\" alt=\"Safari\">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">
                        <img src=\"assets/images/browser/ie.png\" alt=\"\">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    ";
        // line 786
        $this->displayBlock('javascripts', $context, $blocks);
        // line 818
        echo "
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "A.D.M";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "            <!-- Favicon icon -->
            <link rel=\"icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
            <!-- Google font-->
            <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,500\" rel=\"stylesheet\">
            <!-- waves.css -->
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/waves/css/waves.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
            <!-- Required Fremwork -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/css/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <!-- waves.css -->
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/waves/css/waves.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
            <!-- themify icon -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/icon/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
            <!-- Font Awesome -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/icon/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <!-- scrollbar.css -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/css/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\">
            <!-- am chart export.css -->
            <link rel=\"stylesheet\" href=\"https://www.amcharts.com/lib/3/plugins/export/export.css\" type=\"text/css\" media=\"all\" />
            <!-- Style.css -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 786
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 787
        echo "        <!-- Required Jquery -->
        <script type=\"text/javascript\" src=\"";
        // line 788
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 789
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo " \"></script>
        <script type=\"text/javascript\" src=\"";
        // line 790
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/popper.js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 791
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo " \"></script>
        <script type=\"text/javascript\" src=\"";
        // line 792
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/widget/excanvas.js"), "html", null, true);
        echo " \"></script>
        <!-- waves js -->
        <script src=\"";
        // line 794
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/waves/js/waves.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jquery slimscroll js -->
        <script type=\"text/javascript\" src=\"";
        // line 796
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo " \"></script>
        <!-- modernizr js -->
        <script type=\"text/javascript\" src=\"";
        // line 798
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/modernizr/modernizr.js"), "html", null, true);
        echo " \"></script>
        <!-- slimscroll js -->
        <script type=\"text/javascript\" src=\"";
        // line 800
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/SmoothScroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 801
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo " \"></script>
        <!-- Chart js -->
        <script type=\"text/javascript\" src=\"";
        // line 803
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ks/point_focal/assets/js/chart.js/Chart.js"), "html", null, true);
        echo "\"></script>
        <!-- amchart js -->
        <script src=\"https://www.amcharts.com/lib/3/amcharts.js\"></script>
        <script src=\"";
        // line 806
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/widget/amchart/gauge.j"), "html", null, true);
        echo "s\"></script>
        <script src=\"";
        // line 807
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/widget/amchart/serial.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 808
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/widget/amchart/light.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 809
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/widget/amchart/pie.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://www.amcharts.com/lib/3/plugins/export/export.min.js\"></script>
        <!-- menu js -->
        <script src=\"";
        // line 812
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/pcoded.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 813
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/vertical-layout.min.js"), "html", null, true);
        echo " \"></script>
        <!-- custom js -->
        <script type=\"text/javascript\" src=\"";
        // line 815
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/dashboard/custom-dashboard.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 816
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/script.js"), "html", null, true);
        echo " \"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "point_focal/basepf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1015 => 816,  1011 => 815,  1006 => 813,  1002 => 812,  996 => 809,  992 => 808,  988 => 807,  984 => 806,  978 => 803,  973 => 801,  969 => 800,  964 => 798,  959 => 796,  954 => 794,  949 => 792,  945 => 791,  941 => 790,  937 => 789,  933 => 788,  930 => 787,  920 => 786,  908 => 39,  901 => 35,  896 => 33,  891 => 31,  886 => 29,  881 => 27,  876 => 25,  869 => 21,  866 => 20,  856 => 19,  837 => 5,  823 => 818,  821 => 786,  136 => 103,  134 => 102,  71 => 41,  69 => 19,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
        <title>{% block title %}A.D.M{% endblock %}</title>
        <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 10]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <!-- Meta -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"description\" content=\"Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs.\" />
        <meta name=\"keywords\" content=\"bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive\" />
        <meta name=\"author\" content=\"codedthemes\" />
        {% block stylesheets %}
            <!-- Favicon icon -->
            <link rel=\"icon\" href=\"{{asset('assets/images/logo-mini.png')}}\" type=\"image/x-icon\">
            <!-- Google font-->
            <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,500\" rel=\"stylesheet\">
            <!-- waves.css -->
            <link rel=\"stylesheet\" href=\"{{asset('assets/point_focal/assets/pages/waves/css/waves.min.css')}}\" type=\"text/css\" media=\"all\">
            <!-- Required Fremwork -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/point_focal/assets/css/bootstrap/css/bootstrap.min.css')}}\">
            <!-- waves.css -->
            <link rel=\"stylesheet\" href=\"{{asset('assets/point_focal/assets/pages/waves/css/waves.min.css')}}\" type=\"text/css\" media=\"all\">
            <!-- themify icon -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/point_focal/assets/icon/themify-icons/themify-icons.css')}}\">
            <!-- Font Awesome -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/point_focal/assets/icon/font-awesome/css/font-awesome.min.css')}}\">
            <!-- scrollbar.css -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/point_focal/assets/css/jquery.mCustomScrollbar.css')}}\">
            <!-- am chart export.css -->
            <link rel=\"stylesheet\" href=\"https://www.amcharts.com/lib/3/plugins/export/export.css\" type=\"text/css\" media=\"all\" />
            <!-- Style.css -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/point_focal/assets/css/style.css')}}\">
        {% endblock %}

  </head>

  <body>
  <!-- Pre-loader start -->
  <div class=\"theme-loader\">
      <div class=\"loader-track\">
          <div class=\"preloader-wrapper\">
              <div class=\"spinner-layer spinner-blue\">
                  <div class=\"circle-clipper left\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"gap-patch\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"circle-clipper right\">
                      <div class=\"circle\"></div>
                  </div>
              </div>
              <div class=\"spinner-layer spinner-red\">
                  <div class=\"circle-clipper left\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"gap-patch\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"circle-clipper right\">
                      <div class=\"circle\"></div>
                  </div>
              </div>
            
              <div class=\"spinner-layer spinner-yellow\">
                  <div class=\"circle-clipper left\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"gap-patch\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"circle-clipper right\">
                      <div class=\"circle\"></div>
                  </div>
              </div>
            
              <div class=\"spinner-layer spinner-green\">
                  <div class=\"circle-clipper left\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"gap-patch\">
                      <div class=\"circle\"></div>
                  </div>
                  <div class=\"circle-clipper right\">
                      <div class=\"circle\"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id=\"pcoded\" class=\"pcoded\">
      <div class=\"pcoded-overlay-box\"></div>
      <div class=\"pcoded-container navbar-wrapper\">
                {% include \"point_focal/partials/_navbar.html.twig\" %}

          <div class=\"pcoded-main-container\">
              <div class=\"pcoded-wrapper\">
                  <nav class=\"pcoded-navbar\">
                      <div class=\"sidebar_toggle\"><a href=\"#\"><i class=\"icon-close icons\"></i></a></div>
                      <div class=\"pcoded-inner-navbar main-menu\">
                          <div class=\"\">
                              <div class=\"main-menu-header\">
                                    <i class=\"ti-user text-white\"></i>
                                    <div class=\"user-details\">
                                        <span id=\"more-details\">John Doe<i class=\"fa fa-caret-down\"></i></span>
                                    </div>
                              </div>
        
                              <div class=\"main-menu-content\">
                                  <ul>
                                      <li class=\"more-details\">
                                          <a href=\"user-profile.html\"><i class=\"ti-user\"></i>View Profile</a>
                                          <a href=\"#!\"><i class=\"ti-settings\"></i>Settings</a>
                                          <a href=\"auth-normal-sign-in.html\"><i class=\"ti-layout-sidebar-left\"></i>Logout</a>
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
                  </nav>
                  <div class=\"pcoded-content\">
                      <!-- Page-header start -->
                      <div class=\"page-header\">
                          <div class=\"page-block\">
                              <div class=\"row align-items-center\">
                                  <div class=\"col-md-8\">
                                      <div class=\"page-header-title\">
                                          <h5 class=\"m-b-10\">Dashboard</h5>
                                          <p class=\"m-b-0\">Welcome to Mega Able</p>
                                      </div>
                                  </div>
                                  <div class=\"col-md-4\">
                                      <ul class=\"breadcrumb-title\">
                                          <li class=\"breadcrumb-item\">
                                              <a href=\"index.html\"> <i class=\"fa fa-home\"></i> </a>
                                          </li>
                                          <li class=\"breadcrumb-item\"><a href=\"#!\">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Page-header end -->
                        <div class=\"pcoded-inner-content\">
                            <!-- Main-body start -->
                            <div class=\"main-body\">
                                <div class=\"page-wrapper\">
                                    <!-- Page-body start -->
                                    <div class=\"page-body\">
                                        <div class=\"row\">
                                            <!-- task, page, download counter  start -->
                                            <div class=\"col-xl-3 col-md-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-block\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-8\">
                                                                <h4 class=\"text-c-purple\">\$30200</h4>
                                                                <h6 class=\"text-muted m-b-0\">All Earnings</h6>
                                                            </div>
                                                            <div class=\"col-4 text-right\">
                                                                <i class=\"fa fa-bar-chart f-28\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer bg-c-purple\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-9\">
                                                                <p class=\"text-white m-b-0\">% change</p>
                                                            </div>
                                                            <div class=\"col-3 text-right\">
                                                                <i class=\"fa fa-line-chart text-white f-16\"></i>
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xl-3 col-md-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-block\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-8\">
                                                                <h4 class=\"text-c-green\">290+</h4>
                                                                <h6 class=\"text-muted m-b-0\">Page Views</h6>
                                                            </div>
                                                            <div class=\"col-4 text-right\">
                                                                <i class=\"fa fa-file-text-o f-28\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer bg-c-green\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-9\">
                                                                <p class=\"text-white m-b-0\">% change</p>
                                                            </div>
                                                            <div class=\"col-3 text-right\">
                                                                <i class=\"fa fa-line-chart text-white f-16\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xl-3 col-md-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-block\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-8\">
                                                                <h4 class=\"text-c-red\">145</h4>
                                                                <h6 class=\"text-muted m-b-0\">Task Completed</h6>
                                                            </div>
                                                            <div class=\"col-4 text-right\">
                                                                <i class=\"fa fa-calendar-check-o f-28\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer bg-c-red\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-9\">
                                                                <p class=\"text-white m-b-0\">% change</p>
                                                            </div>
                                                            <div class=\"col-3 text-right\">
                                                                <i class=\"fa fa-line-chart text-white f-16\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xl-3 col-md-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-block\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-8\">
                                                                <h4 class=\"text-c-blue\">500</h4>
                                                                <h6 class=\"text-muted m-b-0\">Downloads</h6>
                                                            </div>
                                                            <div class=\"col-4 text-right\">
                                                                <i class=\"fa fa-hand-o-down f-28\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-footer bg-c-blue\">
                                                        <div class=\"row align-items-center\">
                                                            <div class=\"col-9\">
                                                                <p class=\"text-white m-b-0\">% change</p>
                                                            </div>
                                                            <div class=\"col-3 text-right\">
                                                                <i class=\"fa fa-line-chart text-white f-16\"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- task, page, download counter  end -->
    
                                            <!--  sale analytics start -->
                                            <div class=\"col-xl-8 col-md-12\">
                                                <div class=\"card\">
                                                    <div class=\"card-header\">
                                                        <h5>Sales Analytics</h5>
                                                        <span class=\"text-muted\">Get 15% Off on <a href=\"https://www.amcharts.com/\" target=\"_blank\">amCharts</a> licences. Use code \"codedthemes\" and get the discount.</span>
                                                        <div class=\"card-header-right\">
                                                            <ul class=\"list-unstyled card-option\">
                                                                <li><i class=\"fa fa fa-wrench open-card-option\"></i></li>
                                                                <li><i class=\"fa fa-window-maximize full-card\"></i></li>
                                                                <li><i class=\"fa fa-minus minimize-card\"></i></li>
                                                                <li><i class=\"fa fa-refresh reload-card\"></i></li>
                                                                <li><i class=\"fa fa-trash close-card\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-block\">
                                                        <div id=\"sales-analytics\" style=\"height: 400px;\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xl-4 col-md-12\">
                                                <div class=\"card\">
                                                    <div class=\"card-block\">
                                                        <div class=\"row\">
                                                            <div class=\"col\">
                                                                <h4>\$256.23</h4>
                                                                <p class=\"text-muted\">This Month</p>
                                                            </div>
                                                            <div class=\"col-auto\">
                                                                <label class=\"label label-success\">+20%</label>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-sm-8\">
                                                                <canvas id=\"this-month\" style=\"height: 150px;\"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"card quater-card\">
                                                    <div class=\"card-block\">
                                                        <h6 class=\"text-muted m-b-15\">This Quarter</h6>
                                                        <h4>\$3,9452.50</h4>
                                                        <p class=\"text-muted\">\$3,9452.50</p>
                                                        <h5>87</h5>
                                                        <p class=\"text-muted\">Online Revenue<span class=\"f-right\">80%</span></p>
                                                        <div class=\"progress\"><div class=\"progress-bar bg-c-blue\" style=\"width: 80%\"></div></div>
                                                        <h5 class=\"m-t-15\">68</h5>
                                                        <p class=\"text-muted\">Offline Revenue<span class=\"f-right\">50%</span></p>
                                                        <div class=\"progress\"><div class=\"progress-bar bg-c-green\" style=\"width: 50%\"></div></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  sale analytics end -->
    
                                            <!--  project and team member start -->
                                            <div class=\"col-xl-8 col-md-12\">
                                                <div class=\"card table-card\">
                                                    <div class=\"card-header\">
                                                        <h5>Projects</h5>
                                                        <div class=\"card-header-right\">
                                                            <ul class=\"list-unstyled card-option\">
                                                                <li><i class=\"fa fa fa-wrench open-card-option\"></i></li>
                                                                <li><i class=\"fa fa-window-maximize full-card\"></i></li>
                                                                <li><i class=\"fa fa-minus minimize-card\"></i></li>
                                                                <li><i class=\"fa fa-refresh reload-card\"></i></li>
                                                                <li><i class=\"fa fa-trash close-card\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-block\">
                                                        <div class=\"table-responsive\">
                                                            <table class=\"table table-hover\">
                                                                <thead>
                                                                <tr>
                                                                    <th>
                                                                        <div class=\"chk-option\">
                                                                            <div class=\"checkbox-fade fade-in-primary\">
                                                                                <label class=\"check-task\">
                                                                                    <input type=\"checkbox\" value=\"\">
                                                                                    <span class=\"cr\">
                                                                                            <i class=\"cr-icon fa fa-check txt-default\"></i>
                                                                                        </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        Assigned</th>
                                                                    <th>Name</th>
                                                                    <th>Due Date</th>
                                                                    <th class=\"text-right\">Priority</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"chk-option\">
                                                                            <div class=\"checkbox-fade fade-in-primary\">
                                                                                <label class=\"check-task\">
                                                                                    <input type=\"checkbox\" value=\"\">
                                                                                    <span class=\"cr\">
                                                                                                <i class=\"cr-icon fa fa-check txt-default\"></i>
                                                                                            </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"d-inline-block align-middle\">
                                                                            <img src=\"assets/images/avatar-4.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                                            <div class=\"d-inline-block\">
                                                                                <h6>John Deo</h6>
                                                                                <p class=\"text-muted m-b-0\">Graphics Designer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>Able Pro</td>
                                                                    <td>Jun, 26</td>
                                                                    <td class=\"text-right\"><label class=\"label label-danger\">Low</label></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"chk-option\">
                                                                            <div class=\"checkbox-fade fade-in-primary\">
                                                                                <label class=\"check-task\">
                                                                                    <input type=\"checkbox\" value=\"\">
                                                                                    <span class=\"cr\">
                                                                                                <i class=\"cr-icon fa fa-check txt-default\"></i>
                                                                                            </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"d-inline-block align-middle\">
                                                                            <img src=\"assets/images/avatar-5.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                                            <div class=\"d-inline-block\">
                                                                                <h6>Jenifer Vintage</h6>
                                                                                <p class=\"text-muted m-b-0\">Web Designer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>Mashable</td>
                                                                    <td>March, 31</td>
                                                                    <td class=\"text-right\"><label class=\"label label-primary\">high</label></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"chk-option\">
                                                                            <div class=\"checkbox-fade fade-in-primary\">
                                                                                <label class=\"check-task\">
                                                                                    <input type=\"checkbox\" value=\"\">
                                                                                    <span class=\"cr\">
                                                                                                <i class=\"cr-icon fa fa-check txt-default\"></i>
                                                                                            </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"d-inline-block align-middle\">
                                                                            <img src=\"assets/images/avatar-3.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                                            <div class=\"d-inline-block\">
                                                                                <h6>William Jem</h6>
                                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>Flatable</td>
                                                                    <td>Aug, 02</td>
                                                                    <td class=\"text-right\"><label class=\"label label-success\">medium</label></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"chk-option\">
                                                                            <div class=\"checkbox-fade fade-in-primary\">
                                                                                <label class=\"check-task\">
                                                                                    <input type=\"checkbox\" value=\"\">
                                                                                    <span class=\"cr\">
                                                                                                <i class=\"cr-icon fa fa-check txt-default\"></i>
                                                                                            </span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"d-inline-block align-middle\">
                                                                            <img src=\"assets/images/avatar-2.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                                            <div class=\"d-inline-block\">
                                                                                <h6>David Jones</h6>
                                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>Guruable</td>
                                                                    <td>Sep, 22</td>
                                                                    <td class=\"text-right\"><label class=\"label label-primary\">high</label></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class=\"text-right m-r-20\">
                                                                <a href=\"#!\" class=\" b-b-primary text-primary\">View all Projects</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xl-4 col-md-12\">
                                                <div class=\"card \">
                                                    <div class=\"card-header\">
                                                        <h5>Team Members</h5>
                                                        <div class=\"card-header-right\">
                                                            <ul class=\"list-unstyled card-option\">
                                                                <li><i class=\"fa fa fa-wrench open-card-option\"></i></li>
                                                                <li><i class=\"fa fa-window-maximize full-card\"></i></li>
                                                                <li><i class=\"fa fa-minus minimize-card\"></i></li>
                                                                <li><i class=\"fa fa-refresh reload-card\"></i></li>
                                                                <li><i class=\"fa fa-trash close-card\"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class=\"card-block\">
                                                        <div class=\"align-middle m-b-30\">
                                                            <img src=\"assets/images/avatar-2.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                            <div class=\"d-inline-block\">
                                                                <h6>David Jones</h6>
                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"align-middle m-b-30\">
                                                            <img src=\"assets/images/avatar-1.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                            <div class=\"d-inline-block\">
                                                                <h6>David Jones</h6>
                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"align-middle m-b-30\">
                                                            <img src=\"assets/images/avatar-3.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                            <div class=\"d-inline-block\">
                                                                <h6>David Jones</h6>
                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"align-middle m-b-30\">
                                                            <img src=\"assets/images/avatar-4.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                            <div class=\"d-inline-block\">
                                                                <h6>David Jones</h6>
                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"align-middle m-b-10\">
                                                            <img src=\"assets/images/avatar-5.jpg\" alt=\"user image\" class=\"img-radius img-40 align-top m-r-15\">
                                                            <div class=\"d-inline-block\">
                                                                <h6>David Jones</h6>
                                                                <p class=\"text-muted m-b-0\">Developer</p>
                                                            </div>
                                                        </div>
                                                        <div class=\"text-center\">
                                                            <a href=\"#!\" class=\"b-b-primary text-primary\">View all Projects</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  project and team member end -->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id=\"styleSelector\"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class=\"ie-warning\">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class=\"iew-container\">
            <ul class=\"iew-download\">
                <li>
                    <a href=\"http://www.google.com/chrome/\">
                        <img src=\"assets/images/browser/chrome.png\" alt=\"Chrome\">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href=\"https://www.mozilla.org/en-US/firefox/new/\">
                        <img src=\"assets/images/browser/firefox.png\" alt=\"Firefox\">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href=\"http://www.opera.com\">
                        <img src=\"assets/images/browser/opera.png\" alt=\"Opera\">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href=\"https://www.apple.com/safari/\">
                        <img src=\"assets/images/browser/safari.png\" alt=\"Safari\">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href=\"http://windows.microsoft.com/en-us/internet-explorer/download-ie\">
                        <img src=\"assets/images/browser/ie.png\" alt=\"\">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    {% block javascripts %}
        <!-- Required Jquery -->
        <script type=\"text/javascript\" src=\"{{asset('assets/point_focal/assets/js/jquery/jquery.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('assets/point_focal/assets/js/jquery-ui/jquery-ui.min.js')}} \"></script>
        <script type=\"text/javascript\" src=\"{{asset('assets/point_focal/assets/js/popper.js/popper.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('assets/point_focal/assets/js/bootstrap/js/bootstrap.min.js')}} \"></script>
        <script type=\"text/javascript\" src=\"{{asset('assets/point_focal/assets/pages/widget/excanvas.js')}} \"></script>
        <!-- waves js -->
        <script src=\"{{asset('assets/point_focal/assets/pages/waves/js/waves.min.js')}}\"></script>
        <!-- jquery slimscroll js -->
        <script type=\"text/javascript\" src=\"{{asset('assets/point_focal/assets/js/jquery-slimscroll/jquery.slimscroll.js')}} \"></script>
        <!-- modernizr js -->
        <script type=\"text/javascript\" src=\"{{asset('assets/point_focal/assets/js/modernizr/modernizr.js')}} \"></script>
        <!-- slimscroll js -->
        <script type=\"text/javascript\" src=\"{{asset('assets/point_focal/assets/js/SmoothScroll.js')}}\"></script>
        <script src=\"{{asset('assets/point_focal/assets/js/jquery.mCustomScrollbar.concat.min.js')}} \"></script>
        <!-- Chart js -->
        <script type=\"text/javascript\" src=\"{{asset('ks/point_focal/assets/js/chart.js/Chart.js')}}\"></script>
        <!-- amchart js -->
        <script src=\"https://www.amcharts.com/lib/3/amcharts.js\"></script>
        <script src=\"{{asset('assets/point_focal/assets/pages/widget/amchart/gauge.j')}}s\"></script>
        <script src=\"{{asset('assets/point_focal/assets/pages/widget/amchart/serial.js')}}\"></script>
        <script src=\"{{asset('assets/point_focal/assets/pages/widget/amchart/light.js')}}\"></script>
        <script src=\"{{asset('assets/point_focal/assets/pages/widget/amchart/pie.min.js')}}\"></script>
        <script src=\"https://www.amcharts.com/lib/3/plugins/export/export.min.js\"></script>
        <!-- menu js -->
        <script src=\"{{asset('assets/point_focal/assets/js/pcoded.min.js')}}\"></script>
        <script src=\"{{asset('assets/point_focal/assets/js/vertical-layout.min.js')}} \"></script>
        <!-- custom js -->
        <script type=\"text/javascript\" src=\"{{asset('assets/point_focal/assets/pages/dashboard/custom-dashboard.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('assets/point_focal/assets/js/script.js')}} \"></script>
    {% endblock %}

</body>

</html>
", "point_focal/basepf.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\point_focal\\basepf.html.twig");
    }
}
