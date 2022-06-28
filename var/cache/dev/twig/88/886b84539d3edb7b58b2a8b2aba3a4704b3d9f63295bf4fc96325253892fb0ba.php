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
                <div class=\"col-md-4 col-sm-4  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Cellules / Quartier</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_index");
        echo "\">Quartier</a>
                              <a class=\"dropdown-item\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_index");
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
                          <canvas id=\"CellulesChart\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"col-md-4 col-sm-4 \">
                    <div class=\"x_title\">
                      <h2>Secteurs / Cellule</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_index");
        echo "\">Cellule</a>
                              <a class=\"dropdown-item\" href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secteur_index");
        echo "\">Secteur</a>
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
                          <canvas id=\"SecteursChart\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-4 col-sm-4  \">
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
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_index");
        echo "\">Quartier</a>
                              <a class=\"dropdown-item\" href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maison_index");
        echo "\">Maisons</a>
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
                          <canvas id=\"MaisonsQuartierChart\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-4  \">
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
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_index");
        echo "\">Quartier</a>
                              <a class=\"dropdown-item\" href=\"";
        // line 178
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_index");
        echo "\">Population</a>
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
                          <canvas id=\"PopulationsQuartierChart\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-4 col-sm-4  \">
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
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_index");
        echo "\">Cellule</a>
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
                        <div class=\"col-10 mx-auto\">
                          <canvas id=\"MaisonsCelluleChart\"></canvas>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-4  \">
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
        // line 236
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_index");
        echo "\">Cellule</a>
                              <a class=\"dropdown-item\" href=\"";
        // line 237
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_index");
        echo "\">Population</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-10 mx-auto\">
                          <canvas id=\"PopulationsCelluleChart\"></canvas>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-4 col-sm-4  \">
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
        // line 267
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secteur_index");
        echo "\">Secteur</a>
                              <a class=\"dropdown-item\" href=\"";
        // line 268
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
                        <div class=\"col-10 mx-auto\">
                          <canvas id=\"MaisonsChart\"></canvas>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-4  \">
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
        // line 296
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secteur_index");
        echo "\">Secteur</a>
                              <a class=\"dropdown-item\" href=\"";
        // line 297
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_index");
        echo "\">Population</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-10 mx-auto\">
                          <canvas id=\"PopulationsSecteurChart\"></canvas>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
                <div class=\"row\">
                  <div class=\"col-md-4 col-sm-4  \">
                    <div class=\"x_panel\">
                      <div class=\"x_title\">
                        <h2>Sexe</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                          </li>
                          <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <a class=\"dropdown-item\" href=\"";
        // line 327
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_index");
        echo "\">Population</a>
                              </div>
                          </li>
                          <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                          </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                      </div>
                      <div class=\"x_content\">
                        <div class=\"row\">
                          <div class=\"col-10 mx-auto\">
                            <canvas id=\"GenderChart\"></canvas>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class=\"col-md-4 col-sm-4  \">
                    <div class=\"x_panel\">
                      <div class=\"x_title\">
                        <h2>Situatin Matrimoniale</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                          </li>
                          <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <a class=\"dropdown-item\" href=\"";
        // line 355
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_index");
        echo "\">Population</a>
                              </div>
                          </li>
                          <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                          </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                      </div>
                      <div class=\"x_content\">
                        <div class=\"row\">
                          <div class=\"col-10 mx-auto\">
                            <canvas id=\"MatrimonialeChart\"></canvas>
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
        // line 380
        $this->loadTemplate("partials/_footer.html.twig", "statistique/index.html.twig", 380)->display($context);
        // line 381
        echo "        <!-- /footer content -->
      </div>
    </div> 
        <script src=\"https://kit.fontawesome.com/112362d990.js\" crossorigin=\"anonymous\"></script>  
        <!-- jQuery -->
        <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->
        <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FastClick -->
        <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
        <!-- NProgress -->
        <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/nprogress/nprogress.j"), "html", null, true);
        echo "s\"></script>
        <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Chart.js -->
        <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <!-- gauge.js -->
        <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
        <!-- bootstrap-progressbar -->
        <script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Skycons -->
        <script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
        <!-- Flot -->
        <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <!-- Flot plugins -->
        <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
        <!-- DateJS -->
        <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
        <!-- JQVMap -->
        <script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
        <!-- bootstrap-daterangepicker -->
        <script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- Datatables -->
        <script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <!-- Custom Theme Scripts -->
        <script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
        <script src=\"";
        // line 442
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

          graph('pie',\"CellulesChart\",";
        // line 479
        echo (isset($context["quartier_name"]) || array_key_exists("quartier_name", $context) ? $context["quartier_name"] : (function () { throw new RuntimeError('Variable "quartier_name" does not exist.', 479, $this->source); })());
        echo ",\"Cellules par quartier\",";
        echo (isset($context["cellule_count"]) || array_key_exists("cellule_count", $context) ? $context["cellule_count"] : (function () { throw new RuntimeError('Variable "cellule_count" does not exist.', 479, $this->source); })());
        echo ",";
        echo (isset($context["nb_quartier"]) || array_key_exists("nb_quartier", $context) ? $context["nb_quartier"] : (function () { throw new RuntimeError('Variable "nb_quartier" does not exist.', 479, $this->source); })());
        echo "); 
          graph('pie',\"SecteursChart\",";
        // line 480
        echo (isset($context["cellule_name"]) || array_key_exists("cellule_name", $context) ? $context["cellule_name"] : (function () { throw new RuntimeError('Variable "cellule_name" does not exist.', 480, $this->source); })());
        echo ",\"Secteurs par cellule\",";
        echo (isset($context["secteur_count"]) || array_key_exists("secteur_count", $context) ? $context["secteur_count"] : (function () { throw new RuntimeError('Variable "secteur_count" does not exist.', 480, $this->source); })());
        echo ",";
        echo (isset($context["nb_cellule"]) || array_key_exists("nb_cellule", $context) ? $context["nb_cellule"] : (function () { throw new RuntimeError('Variable "nb_cellule" does not exist.', 480, $this->source); })());
        echo "); 
          graph('pie',\"MaisonsChart\",";
        // line 481
        echo (isset($context["secteur_name"]) || array_key_exists("secteur_name", $context) ? $context["secteur_name"] : (function () { throw new RuntimeError('Variable "secteur_name" does not exist.', 481, $this->source); })());
        echo ",\"Maisons par Secteur\",";
        echo (isset($context["maison_count"]) || array_key_exists("maison_count", $context) ? $context["maison_count"] : (function () { throw new RuntimeError('Variable "maison_count" does not exist.', 481, $this->source); })());
        echo ",";
        echo (isset($context["nb_secteur"]) || array_key_exists("nb_secteur", $context) ? $context["nb_secteur"] : (function () { throw new RuntimeError('Variable "nb_secteur" does not exist.', 481, $this->source); })());
        echo "); 
          graph('pie',\"PopulationsSecteurChart\",";
        // line 482
        echo (isset($context["secteur_name"]) || array_key_exists("secteur_name", $context) ? $context["secteur_name"] : (function () { throw new RuntimeError('Variable "secteur_name" does not exist.', 482, $this->source); })());
        echo ",\"Populations par Secteur\",";
        echo (isset($context["populations"]) || array_key_exists("populations", $context) ? $context["populations"] : (function () { throw new RuntimeError('Variable "populations" does not exist.', 482, $this->source); })());
        echo ",";
        echo (isset($context["nb_secteur"]) || array_key_exists("nb_secteur", $context) ? $context["nb_secteur"] : (function () { throw new RuntimeError('Variable "nb_secteur" does not exist.', 482, $this->source); })());
        echo "); 
          graph('pie',\"MaisonsCelluleChart\",";
        // line 483
        echo (isset($context["cellule_name"]) || array_key_exists("cellule_name", $context) ? $context["cellule_name"] : (function () { throw new RuntimeError('Variable "cellule_name" does not exist.', 483, $this->source); })());
        echo ",\"Maisons par Cellule\",";
        echo (isset($context["nb_maison"]) || array_key_exists("nb_maison", $context) ? $context["nb_maison"] : (function () { throw new RuntimeError('Variable "nb_maison" does not exist.', 483, $this->source); })());
        echo ",";
        echo (isset($context["nb_cellule"]) || array_key_exists("nb_cellule", $context) ? $context["nb_cellule"] : (function () { throw new RuntimeError('Variable "nb_cellule" does not exist.', 483, $this->source); })());
        echo "); 
          graph('pie',\"MaisonsQuartierChart\",";
        // line 484
        echo (isset($context["quartier_name"]) || array_key_exists("quartier_name", $context) ? $context["quartier_name"] : (function () { throw new RuntimeError('Variable "quartier_name" does not exist.', 484, $this->source); })());
        echo ",\"Maisons par Quartier\",";
        echo (isset($context["nb_maison"]) || array_key_exists("nb_maison", $context) ? $context["nb_maison"] : (function () { throw new RuntimeError('Variable "nb_maison" does not exist.', 484, $this->source); })());
        echo ",";
        echo (isset($context["nb_quartier"]) || array_key_exists("nb_quartier", $context) ? $context["nb_quartier"] : (function () { throw new RuntimeError('Variable "nb_quartier" does not exist.', 484, $this->source); })());
        echo "); 
          graph('pie',\"PopulationsQuartierChart\",";
        // line 485
        echo (isset($context["quartier_name"]) || array_key_exists("quartier_name", $context) ? $context["quartier_name"] : (function () { throw new RuntimeError('Variable "quartier_name" does not exist.', 485, $this->source); })());
        echo ",\"Populations par Quartier\",";
        echo (isset($context["populations"]) || array_key_exists("populations", $context) ? $context["populations"] : (function () { throw new RuntimeError('Variable "populations" does not exist.', 485, $this->source); })());
        echo ",";
        echo (isset($context["nb_quartier"]) || array_key_exists("nb_quartier", $context) ? $context["nb_quartier"] : (function () { throw new RuntimeError('Variable "nb_quartier" does not exist.', 485, $this->source); })());
        echo "); 
          graph('pie',\"PopulationsCelluleChart\",";
        // line 486
        echo (isset($context["cellule_name"]) || array_key_exists("cellule_name", $context) ? $context["cellule_name"] : (function () { throw new RuntimeError('Variable "cellule_name" does not exist.', 486, $this->source); })());
        echo ",\"Maisons par Cellule\",";
        echo (isset($context["populations"]) || array_key_exists("populations", $context) ? $context["populations"] : (function () { throw new RuntimeError('Variable "populations" does not exist.', 486, $this->source); })());
        echo ",";
        echo (isset($context["nb_cellule"]) || array_key_exists("nb_cellule", $context) ? $context["nb_cellule"] : (function () { throw new RuntimeError('Variable "nb_cellule" does not exist.', 486, $this->source); })());
        echo "); 
          graph('pie',\"GenderChart\",['Hommes', 'Femmes'],\"Sexe\",[";
        // line 487
        echo twig_escape_filter($this->env, (isset($context["hommes"]) || array_key_exists("hommes", $context) ? $context["hommes"] : (function () { throw new RuntimeError('Variable "hommes" does not exist.', 487, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["femmes"]) || array_key_exists("femmes", $context) ? $context["femmes"] : (function () { throw new RuntimeError('Variable "femmes" does not exist.', 487, $this->source); })()), "html", null, true);
        echo "],2); 
          graph('pie',\"MatrimonialeChart\",['Célibataire', 'Marié', 'Divorcé'],\"Sexe\",[";
        // line 488
        echo twig_escape_filter($this->env, (isset($context["celibataires"]) || array_key_exists("celibataires", $context) ? $context["celibataires"] : (function () { throw new RuntimeError('Variable "celibataires" does not exist.', 488, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["mariés"]) || array_key_exists("mariés", $context) ? $context["mariés"] : (function () { throw new RuntimeError('Variable "mariés" does not exist.', 488, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["divorces"]) || array_key_exists("divorces", $context) ? $context["divorces"] : (function () { throw new RuntimeError('Variable "divorces" does not exist.', 488, $this->source); })()), "html", null, true);
        echo "],3); 
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
        return array (  868 => 9,  849 => 488,  843 => 487,  835 => 486,  827 => 485,  819 => 484,  811 => 483,  803 => 482,  795 => 481,  787 => 480,  779 => 479,  739 => 442,  734 => 440,  729 => 438,  725 => 437,  721 => 436,  717 => 435,  713 => 434,  709 => 433,  705 => 432,  701 => 431,  697 => 430,  693 => 429,  689 => 428,  685 => 427,  681 => 426,  677 => 425,  673 => 424,  668 => 422,  664 => 421,  659 => 419,  655 => 418,  651 => 417,  646 => 415,  641 => 413,  637 => 412,  633 => 411,  628 => 409,  624 => 408,  620 => 407,  616 => 406,  612 => 405,  607 => 403,  602 => 401,  597 => 399,  592 => 397,  587 => 395,  582 => 393,  578 => 392,  573 => 390,  568 => 388,  563 => 386,  556 => 381,  554 => 380,  526 => 355,  495 => 327,  462 => 297,  458 => 296,  427 => 268,  423 => 267,  390 => 237,  386 => 236,  355 => 208,  351 => 207,  319 => 178,  315 => 177,  285 => 150,  281 => 149,  249 => 120,  245 => 119,  215 => 92,  211 => 91,  183 => 66,  174 => 59,  172 => 58,  167 => 55,  165 => 54,  154 => 46,  150 => 45,  145 => 43,  141 => 42,  137 => 41,  132 => 39,  128 => 38,  124 => 37,  119 => 35,  114 => 33,  109 => 31,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  81 => 21,  76 => 19,  72 => 18,  67 => 16,  62 => 14,  54 => 9,  44 => 1,);
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
                <div class=\"col-md-4 col-sm-4  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Cellules / Quartier</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"{{ path('app_quartier_index') }}\">Quartier</a>
                              <a class=\"dropdown-item\" href=\"{{ path('app_cellule_index') }}\">Cellule</a>
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
                          <canvas id=\"CellulesChart\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=\"col-md-4 col-sm-4 \">
                    <div class=\"x_title\">
                      <h2>Secteurs / Cellule</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"{{ path('app_cellule_index') }}\">Cellule</a>
                              <a class=\"dropdown-item\" href=\"{{ path('app_secteur_index') }}\">Secteur</a>
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
                          <canvas id=\"SecteursChart\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-4 col-sm-4  \">
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
                              <a class=\"dropdown-item\" href=\"{{ path('app_maison_index') }}\">Maisons</a>
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
                          <canvas id=\"MaisonsQuartierChart\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-4  \">
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
                              <a class=\"dropdown-item\" href=\"{{ path('app_personne_index') }}\">Population</a>
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
                          <canvas id=\"PopulationsQuartierChart\"></canvas> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-4 col-sm-4  \">
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
                        <div class=\"col-10 mx-auto\">
                          <canvas id=\"MaisonsCelluleChart\"></canvas>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-4  \">
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
                              <a class=\"dropdown-item\" href=\"{{ path('app_personne_index') }}\">Population</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-10 mx-auto\">
                          <canvas id=\"PopulationsCelluleChart\"></canvas>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-4 col-sm-4  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Maisons / Secteur</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"{{ path('app_secteur_index') }}\">Secteur</a>
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
                        <div class=\"col-10 mx-auto\">
                          <canvas id=\"MaisonsChart\"></canvas>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-4  \">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Populations / Secteur</h2>
                      <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                              <a class=\"dropdown-item\" href=\"{{ path('app_secteur_index') }}\">Secteur</a>
                              <a class=\"dropdown-item\" href=\"{{ path('app_personne_index') }}\">Population</a>
                            </div>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                      </ul>
                      <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                      <div class=\"row\">
                        <div class=\"col-10 mx-auto\">
                          <canvas id=\"PopulationsSecteurChart\"></canvas>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
                <div class=\"row\">
                  <div class=\"col-md-4 col-sm-4  \">
                    <div class=\"x_panel\">
                      <div class=\"x_title\">
                        <h2>Sexe</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                          </li>
                          <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <a class=\"dropdown-item\" href=\"{{ path('app_personne_index') }}\">Population</a>
                              </div>
                          </li>
                          <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                          </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                      </div>
                      <div class=\"x_content\">
                        <div class=\"row\">
                          <div class=\"col-10 mx-auto\">
                            <canvas id=\"GenderChart\"></canvas>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class=\"col-md-4 col-sm-4  \">
                    <div class=\"x_panel\">
                      <div class=\"x_title\">
                        <h2>Situatin Matrimoniale</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                          <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                          </li>
                          <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-info-circle\"></i></a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                <a class=\"dropdown-item\" href=\"{{ path('app_personne_index') }}\">Population</a>
                              </div>
                          </li>
                          <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                          </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                      </div>
                      <div class=\"x_content\">
                        <div class=\"row\">
                          <div class=\"col-10 mx-auto\">
                            <canvas id=\"MatrimonialeChart\"></canvas>
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

          graph('pie',\"CellulesChart\",{{quartier_name|raw}},\"Cellules par quartier\",{{cellule_count|raw}},{{nb_quartier|raw}}); 
          graph('pie',\"SecteursChart\",{{cellule_name|raw}},\"Secteurs par cellule\",{{secteur_count|raw}},{{nb_cellule|raw}}); 
          graph('pie',\"MaisonsChart\",{{secteur_name|raw}},\"Maisons par Secteur\",{{maison_count|raw}},{{nb_secteur|raw}}); 
          graph('pie',\"PopulationsSecteurChart\",{{secteur_name|raw}},\"Populations par Secteur\",{{populations|raw}},{{nb_secteur|raw}}); 
          graph('pie',\"MaisonsCelluleChart\",{{cellule_name|raw}},\"Maisons par Cellule\",{{nb_maison|raw}},{{nb_cellule|raw}}); 
          graph('pie',\"MaisonsQuartierChart\",{{quartier_name|raw}},\"Maisons par Quartier\",{{nb_maison|raw}},{{nb_quartier|raw}}); 
          graph('pie',\"PopulationsQuartierChart\",{{quartier_name|raw}},\"Populations par Quartier\",{{populations|raw}},{{nb_quartier|raw}}); 
          graph('pie',\"PopulationsCelluleChart\",{{cellule_name|raw}},\"Maisons par Cellule\",{{populations|raw}},{{nb_cellule|raw}}); 
          graph('pie',\"GenderChart\",['Hommes', 'Femmes'],\"Sexe\",[{{hommes}}, {{femmes}}],2); 
          graph('pie',\"MatrimonialeChart\",['Célibataire', 'Marié', 'Divorcé'],\"Sexe\",[{{celibataires}}, {{mariés}}, {{divorces}}],3); 
        </script>
  </body>
</html>
", "statistique/index.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\MbothDataBase\\templates\\statistique\\index.html.twig");
    }
}
