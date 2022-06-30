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

/* statistique/index.html.twig */
class __TwigTemplate_7be0ef944b02898c4806916427288d9ca5b8a3206566f8aeadddd2ec3c22aa87 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistique/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistique/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
        <!-- Custom fonts for this template-->
            <!-- Bootstrap -->
            <link href=\"cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- Font Awesome -->
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- NProgress -->
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <!-- iCheck -->
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- Datatables -->

            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- bootstrap-progressbar -->
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- JQVMap -->
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <!-- bootstrap-daterangepicker -->
            <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- PNotify -->
            <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pnotify/dist/pnotify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pnotify/dist/pnotify.buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pnotify/dist/pnotify.nonblock.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- PNotify -->
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pnotify/dist/pnotify.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pnotify/dist/pnotify.buttons.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pnotify/dist/pnotify.nonblock.js"), "html", null, true);
        echo "\"></script>
            <!-- Custom Theme Style -->
            <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link rel=\"shortcut icon\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.png"), "html", null, true);
        echo "\" />
            <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />

    </head>
  <body class=\"nav-md footer_fixed\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col menu_fixed\">
            ";
        // line 54
        $this->loadTemplate("partials/_sidebar.html.twig", "statistique/index.html.twig", 54)->display($context);
        // line 55
        echo "        </div>

        <!-- top navigation -->
            ";
        // line 58
        $this->loadTemplate("partials/_navbar.html.twig", "statistique/index.html.twig", 58)->display($context);
        // line 59
        echo "        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" width=\"100\"></h3>
              </div>
              <div class=\"title_right\">
                <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-secondary\" type=\"button\">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"clearfix\"></div>
              <div class=\"row\">
                <div class=\"col-md-6 col-sm-12  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Maisons / Secteur</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secteur_index");
        echo "\">Quartier</a>
                              <a class=\"dropdown-item\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_index");
        echo "\">Cellule</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-8 mx-auto\">
                          <canvas id=\"MaisonsSecteur\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-6 col-sm-12  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Populations / Secteur</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secteur_index");
        echo "\">Quartier</a>
                              <a class=\"dropdown-item\" href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_index");
        echo "\">Cellule</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-8 mx-auto\">
                          <canvas id=\"PopulationsSecteur\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-6 col-sm-12  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Maisons / Cellule</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_index");
        echo "\">Cellule</a>
                              <a class=\"dropdown-item\" href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maison_index");
        echo "\">Maison</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-8 mx-auto\">
                          <canvas id=\"MaisonsCellule\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-6 col-sm-12  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Populations / Cellule</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_index");
        echo "\">Cellule</a>
                              <a class=\"dropdown-item\" href=\"";
        // line 178
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_index");
        echo "\">Personne</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-8 mx-auto\">
                          <canvas id=\"PopulationsCellule\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-6 col-sm-12  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Maisons / Quartier</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_index");
        echo "\">Quartier</a>
                              <a class=\"dropdown-item\" href=\"";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maison_index");
        echo "\">Maison</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-8 mx-auto\">
                          <canvas id=\"MaisonsQuartier\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-6 col-sm-12  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Populations / Quartier</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"";
        // line 235
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_index");
        echo "\">Quartier</a>
                              <a class=\"dropdown-item\" href=\"";
        // line 236
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_index");
        echo "\">Personne</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-8 mx-auto\">
                          <canvas id=\"PopulationsQuartier\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        ";
        // line 260
        $this->loadTemplate("partials/_footer.html.twig", "statistique/index.html.twig", 260)->display($context);
        // line 261
        echo "        <!-- /footer content -->
      </div>
    </div> 
        <script src=\"https://kit.fontawesome.com/112362d990.js\" crossorigin=\"anonymous\"></script>  
        <!-- jQuery -->
        <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->
        <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FastClick -->
        <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
        <!-- NProgress -->
        <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/nprogress/nprogress.j"), "html", null, true);
        echo "s\"></script>
        <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Chart.js -->
        <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <!-- gauge.js -->
        <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
        <!-- bootstrap-progressbar -->
        <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Skycons -->
        <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
        <!-- Flot -->
        <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <!-- Flot plugins -->
        <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
        <!-- DateJS -->
        <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
        <!-- JQVMap -->
        <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
        <!-- bootstrap-daterangepicker -->
        <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- Datatables -->
        <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <!-- Custom Theme Scripts -->
        <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
        <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/build/js/select2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.esm.min.js\" integrity=\"sha512-yPOQ2pPoQ9JtP0/jDKpXiKyWNCJWT5OI+6r1EqZmTg+afKQOBpy08VYboeq+Tt9kl9/FOCueEhH6cmHN3nAdJA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js\" integrity=\"sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
        <script> 
          function getRandomColor(nb) {
              var colors = [];
              for (var i = 0; i < nb; i++) {
                  var color = '#' + (0x1000000 + (Math.random()) * 0xffffff).toString(16).substr(1, 6);
                  colors.push(color);
              }
              return colors;
          }
          function graph(mytype,idelement, nomlabels, titleelement, dataelement, nbelement) {
              var ctx = document.getElementById(idelement);
              var CelluleChart = new Chart(ctx, {
                  type: mytype,
                  data: {
                      labels: nomlabels,
                      datasets: [{
                          label: titleelement,
                          data: dataelement,
                          backgroundColor: getRandomColor(nbelement),
                          datalabels: {
                              color: 'black'
                          }
                      }]
                  },
                  options: {
                      plugins: {
                          legend: {
                              position: 'right'
                          }
                      }
                  }
              });
          }

          graph('pie',\"MaisonsSecteur\",";
        // line 359
        echo (isset($context["name_secteur"]) || array_key_exists("name_secteur", $context) ? $context["name_secteur"] : (function () { throw new RuntimeError('Variable "name_secteur" does not exist.', 359, $this->source); })());
        echo ",\"Maisons par Secteur\",";
        echo (isset($context["maison_count"]) || array_key_exists("maison_count", $context) ? $context["maison_count"] : (function () { throw new RuntimeError('Variable "maison_count" does not exist.', 359, $this->source); })());
        echo ",";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["secteurs"]) || array_key_exists("secteurs", $context) ? $context["secteurs"] : (function () { throw new RuntimeError('Variable "secteurs" does not exist.', 359, $this->source); })())), "html", null, true);
        echo "); 
          graph('pie',\"PopulationsSecteur\",";
        // line 360
        echo (isset($context["secteur_name"]) || array_key_exists("secteur_name", $context) ? $context["secteur_name"] : (function () { throw new RuntimeError('Variable "secteur_name" does not exist.', 360, $this->source); })());
        echo ",\"Habitants par Secteur\",";
        echo (isset($context["population_count"]) || array_key_exists("population_count", $context) ? $context["population_count"] : (function () { throw new RuntimeError('Variable "population_count" does not exist.', 360, $this->source); })());
        echo ",";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["secteurs"]) || array_key_exists("secteurs", $context) ? $context["secteurs"] : (function () { throw new RuntimeError('Variable "secteurs" does not exist.', 360, $this->source); })())), "html", null, true);
        echo "); 
          graph('pie',\"MaisonsCellule\",";
        // line 361
        echo (isset($context["name_cellule"]) || array_key_exists("name_cellule", $context) ? $context["name_cellule"] : (function () { throw new RuntimeError('Variable "name_cellule" does not exist.', 361, $this->source); })());
        echo ",\"Maisons par Cellule\",";
        echo (isset($context["cellule_maison_count"]) || array_key_exists("cellule_maison_count", $context) ? $context["cellule_maison_count"] : (function () { throw new RuntimeError('Variable "cellule_maison_count" does not exist.', 361, $this->source); })());
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["cellule_elements"]) || array_key_exists("cellule_elements", $context) ? $context["cellule_elements"] : (function () { throw new RuntimeError('Variable "cellule_elements" does not exist.', 361, $this->source); })()), "html", null, true);
        echo ");  
          graph('pie',\"PopulationsCellule\",";
        // line 362
        echo (isset($context["cellule_name"]) || array_key_exists("cellule_name", $context) ? $context["cellule_name"] : (function () { throw new RuntimeError('Variable "cellule_name" does not exist.', 362, $this->source); })());
        echo ",\"Habitants par Secteur\",";
        echo (isset($context["cellule_population_count"]) || array_key_exists("cellule_population_count", $context) ? $context["cellule_population_count"] : (function () { throw new RuntimeError('Variable "cellule_population_count" does not exist.', 362, $this->source); })());
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["cellule_element"]) || array_key_exists("cellule_element", $context) ? $context["cellule_element"] : (function () { throw new RuntimeError('Variable "cellule_element" does not exist.', 362, $this->source); })()), "html", null, true);
        echo "); 
          graph('pie',\"MaisonsQuartier\",";
        // line 363
        echo (isset($context["name_quartier"]) || array_key_exists("name_quartier", $context) ? $context["name_quartier"] : (function () { throw new RuntimeError('Variable "name_quartier" does not exist.', 363, $this->source); })());
        echo ",\"Maisons par Cellule\",";
        echo (isset($context["quartier_maison_count"]) || array_key_exists("quartier_maison_count", $context) ? $context["quartier_maison_count"] : (function () { throw new RuntimeError('Variable "quartier_maison_count" does not exist.', 363, $this->source); })());
        echo ",";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["quartiers"]) || array_key_exists("quartiers", $context) ? $context["quartiers"] : (function () { throw new RuntimeError('Variable "quartiers" does not exist.', 363, $this->source); })())), "html", null, true);
        echo ");  
          graph('pie',\"PopulationsQuartier\",";
        // line 364
        echo (isset($context["quartier_name"]) || array_key_exists("quartier_name", $context) ? $context["quartier_name"] : (function () { throw new RuntimeError('Variable "quartier_name" does not exist.', 364, $this->source); })());
        echo ",\"Habitants par Secteur\",";
        echo (isset($context["quartier_population_count"]) || array_key_exists("quartier_population_count", $context) ? $context["quartier_population_count"] : (function () { throw new RuntimeError('Variable "quartier_population_count" does not exist.', 364, $this->source); })());
        echo ",";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["quartiers"]) || array_key_exists("quartiers", $context) ? $context["quartiers"] : (function () { throw new RuntimeError('Variable "quartiers" does not exist.', 364, $this->source); })())), "html", null, true);
        echo "); 
        </script>
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
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

    public function getTemplateName()
    {
        return "statistique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  700 => 9,  681 => 364,  673 => 363,  665 => 362,  657 => 361,  649 => 360,  641 => 359,  601 => 322,  596 => 320,  591 => 318,  587 => 317,  583 => 316,  579 => 315,  575 => 314,  571 => 313,  567 => 312,  563 => 311,  559 => 310,  555 => 309,  551 => 308,  547 => 307,  543 => 306,  539 => 305,  535 => 304,  530 => 302,  526 => 301,  521 => 299,  517 => 298,  513 => 297,  508 => 295,  503 => 293,  499 => 292,  495 => 291,  490 => 289,  486 => 288,  482 => 287,  478 => 286,  474 => 285,  469 => 283,  464 => 281,  459 => 279,  454 => 277,  449 => 275,  444 => 273,  440 => 272,  435 => 270,  430 => 268,  425 => 266,  418 => 261,  416 => 260,  389 => 236,  385 => 235,  355 => 208,  351 => 207,  319 => 178,  315 => 177,  285 => 150,  281 => 149,  249 => 120,  245 => 119,  215 => 92,  211 => 91,  183 => 66,  174 => 59,  172 => 58,  167 => 55,  165 => 54,  154 => 46,  150 => 45,  145 => 43,  141 => 42,  137 => 41,  132 => 39,  128 => 38,  124 => 37,  119 => 35,  114 => 33,  109 => 31,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  81 => 21,  76 => 19,  72 => 18,  67 => 16,  62 => 14,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}A.D.M{% endblock %}</title>
    
        <!-- Custom fonts for this template-->
            <!-- Bootstrap -->
            <link href=\"cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">
            <link href=\"{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
            <!-- Font Awesome -->
            <link href=\"{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
            <!-- NProgress -->
            <link href=\"{{asset('assets/vendors/nprogress/nprogress.css')}}\" rel=\"stylesheet\">
            <link href=\"{{asset('assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}\" rel=\"stylesheet\"/>
            <!-- iCheck -->
            <link href=\"{{asset('assets/vendors/iCheck/skins/flat/green.css')}}\" rel=\"stylesheet\">
            <!-- Datatables -->

            <link href=\"{{asset('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}\" rel=\"stylesheet\">
            <link href=\"{{asset('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}\" rel=\"stylesheet\">
            <link href=\"{{asset('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}\" rel=\"stylesheet\">
            <link href=\"{{asset('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}\" rel=\"stylesheet\">
            <link href=\"{{asset('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}\" rel=\"stylesheet\">

            <!-- bootstrap-progressbar -->
            <link href=\"{{asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}\" rel=\"stylesheet\">
            <!-- JQVMap -->
            <link href=\"{{asset('assets/vendors/jqvmap/dist/jqvmap.min.css')}}\" rel=\"stylesheet\"/>
            <!-- bootstrap-daterangepicker -->
            <link href=\"{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}\" rel=\"stylesheet\">
            <!-- PNotify -->
            <link href=\"{{asset('assets/vendors/pnotify/dist/pnotify.css')}}\" rel=\"stylesheet\">
            <link href=\"{{asset('assets/vendors/pnotify/dist/pnotify.buttons.css')}}\" rel=\"stylesheet\">
            <link href=\"{{asset('assets/vendors/pnotify/dist/pnotify.nonblock.css')}}\" rel=\"stylesheet\">
            <!-- PNotify -->
            <script src=\"{{asset('assets/vendors/pnotify/dist/pnotify.js')}}\"></script>
            <script src=\"{{asset('assets/vendors/pnotify/dist/pnotify.buttons.js')}}\"></script>
            <script src=\"{{asset('assets/vendors/pnotify/dist/pnotify.nonblock.js')}}\"></script>
            <!-- Custom Theme Style -->
            <link href=\"{{asset('assets/build/css/custom.min.css')}}\" rel=\"stylesheet\" />
            <link rel=\"shortcut icon\" href=\"{{asset('assets/images/logo-mini.png')}}\" />
            <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />

    </head>
  <body class=\"nav-md footer_fixed\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col menu_fixed\">
            {% include \"partials/_sidebar.html.twig\" %}
        </div>

        <!-- top navigation -->
            {% include \"partials/_navbar.html.twig\" %}
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3><img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"Logo\" width=\"100\"></h3>
              </div>
              <div class=\"title_right\">
                <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-secondary\" type=\"button\">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"clearfix\"></div>
              <div class=\"row\">
                <div class=\"col-md-6 col-sm-12  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Maisons / Secteur</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"{{ path('app_secteur_index') }}\">Quartier</a>
                              <a class=\"dropdown-item\" href=\"{{ path('app_personne_index') }}\">Cellule</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-8 mx-auto\">
                          <canvas id=\"MaisonsSecteur\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-6 col-sm-12  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Populations / Secteur</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"{{ path('app_secteur_index') }}\">Quartier</a>
                              <a class=\"dropdown-item\" href=\"{{ path('app_personne_index') }}\">Cellule</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-8 mx-auto\">
                          <canvas id=\"PopulationsSecteur\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-6 col-sm-12  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Maisons / Cellule</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"{{ path('app_cellule_index') }}\">Cellule</a>
                              <a class=\"dropdown-item\" href=\"{{ path('app_maison_index') }}\">Maison</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-8 mx-auto\">
                          <canvas id=\"MaisonsCellule\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-6 col-sm-12  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Populations / Cellule</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"{{ path('app_cellule_index') }}\">Cellule</a>
                              <a class=\"dropdown-item\" href=\"{{ path('app_personne_index') }}\">Personne</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-8 mx-auto\">
                          <canvas id=\"PopulationsCellule\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-6 col-sm-12  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Maisons / Quartier</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"{{ path('app_quartier_index') }}\">Quartier</a>
                              <a class=\"dropdown-item\" href=\"{{ path('app_maison_index') }}\">Maison</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-8 mx-auto\">
                          <canvas id=\"MaisonsQuartier\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-6 col-sm-12  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Populations / Quartier</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"{{ path('app_quartier_index') }}\">Quartier</a>
                              <a class=\"dropdown-item\" href=\"{{ path('app_personne_index') }}\">Personne</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-8 mx-auto\">
                          <canvas id=\"PopulationsQuartier\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        {% include \"partials/_footer.html.twig\" %}
        <!-- /footer content -->
      </div>
    </div> 
        <script src=\"https://kit.fontawesome.com/112362d990.js\" crossorigin=\"anonymous\"></script>  
        <!-- jQuery -->
        <script src=\"{{asset('assets/vendors/jquery/dist/jquery.min.js')}}\"></script>
        <!-- Bootstrap -->
        <script src=\"{{asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}\"></script>
        <!-- FastClick -->
        <script src=\"{{asset('assets/vendors/fastclick/lib/fastclick.js')}}\"></script>
        <!-- NProgress -->
        <script src=\"{{asset('assets/vendors/nprogress/nprogress.j')}}s\"></script>
        <script src=\"{{asset('assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}\"></script>
        <!-- Chart.js -->
        <script src=\"{{asset('assets/vendors/Chart.js/dist/Chart.min.js')}}\"></script>
        <!-- gauge.js -->
        <script src=\"{{asset('assets/vendors/gauge.js/dist/gauge.min.js')}}\"></script>
        <!-- bootstrap-progressbar -->
        <script src=\"{{asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}\"></script>
        <!-- iCheck -->
        <script src=\"{{asset('assets/vendors/iCheck/icheck.min.js')}}\"></script>
        <!-- Skycons -->
        <script src=\"{{asset('assets/vendors/skycons/skycons.js')}}\"></script>
        <!-- Flot -->
        <script src=\"{{asset('assets/vendors/Flot/jquery.flot.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/Flot/jquery.flot.pie.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/Flot/jquery.flot.time.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/Flot/jquery.flot.stack.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/Flot/jquery.flot.resize.js')}}\"></script>
        <!-- Flot plugins -->
        <script src=\"{{asset('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/flot-spline/js/jquery.flot.spline.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/flot.curvedlines/curvedLines.js')}}\"></script>
        <!-- DateJS -->
        <script src=\"{{asset('assets/vendors/DateJS/build/date.js')}}\"></script>
        <!-- JQVMap -->
        <script src=\"{{asset('assets/vendors/jqvmap/dist/jquery.vmap.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}\"></script>
        <!-- bootstrap-daterangepicker -->
        <script src=\"{{asset('assets/vendors/moment/min/moment.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}\"></script>
        <!-- Datatables -->
        <script src=\"{{asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/datatables.net-buttons/js/buttons.print.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/jszip/dist/jszip.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/pdfmake/build/pdfmake.min.js')}}\"></script>
        <script src=\"{{asset('assets/vendors/pdfmake/build/vfs_fonts.js')}}\"></script>
        <!-- Custom Theme Scripts -->
        <script src=\"{{asset('assets/build/js/custom.min.js')}}\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
        <script src=\"{{asset('assets/build/js/select2.js')}}\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.esm.min.js\" integrity=\"sha512-yPOQ2pPoQ9JtP0/jDKpXiKyWNCJWT5OI+6r1EqZmTg+afKQOBpy08VYboeq+Tt9kl9/FOCueEhH6cmHN3nAdJA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js\" integrity=\"sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
        <script> 
          function getRandomColor(nb) {
              var colors = [];
              for (var i = 0; i < nb; i++) {
                  var color = '#' + (0x1000000 + (Math.random()) * 0xffffff).toString(16).substr(1, 6);
                  colors.push(color);
              }
              return colors;
          }
          function graph(mytype,idelement, nomlabels, titleelement, dataelement, nbelement) {
              var ctx = document.getElementById(idelement);
              var CelluleChart = new Chart(ctx, {
                  type: mytype,
                  data: {
                      labels: nomlabels,
                      datasets: [{
                          label: titleelement,
                          data: dataelement,
                          backgroundColor: getRandomColor(nbelement),
                          datalabels: {
                              color: 'black'
                          }
                      }]
                  },
                  options: {
                      plugins: {
                          legend: {
                              position: 'right'
                          }
                      }
                  }
              });
          }

          graph('pie',\"MaisonsSecteur\",{{name_secteur|raw}},\"Maisons par Secteur\",{{maison_count|raw}},{{secteurs|length}}); 
          graph('pie',\"PopulationsSecteur\",{{secteur_name|raw}},\"Habitants par Secteur\",{{population_count|raw}},{{secteurs|length}}); 
          graph('pie',\"MaisonsCellule\",{{name_cellule|raw}},\"Maisons par Cellule\",{{cellule_maison_count|raw}},{{cellule_elements}});  
          graph('pie',\"PopulationsCellule\",{{cellule_name|raw}},\"Habitants par Secteur\",{{cellule_population_count|raw}},{{cellule_element}}); 
          graph('pie',\"MaisonsQuartier\",{{name_quartier|raw}},\"Maisons par Cellule\",{{quartier_maison_count|raw}},{{quartiers|length}});  
          graph('pie',\"PopulationsQuartier\",{{quartier_name|raw}},\"Habitants par Secteur\",{{quartier_population_count|raw}},{{quartiers|length}}); 
        </script>
  </body>
</html>
", "statistique/index.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\statistique\\index.html.twig");
    }
}
