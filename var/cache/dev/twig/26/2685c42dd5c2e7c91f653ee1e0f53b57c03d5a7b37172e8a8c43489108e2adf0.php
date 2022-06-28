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
class __TwigTemplate_6324fa3b398750036e60bbc68f9a29c34b0e1842c21a19f9acc80877edce7dad extends Template
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
            'body' => [$this, 'block_body'],
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
        echo "          <div class=\"pcoded-main-container\">
              <div class=\"pcoded-wrapper\">
                ";
        // line 105
        $this->loadTemplate("point_focal/partials/_sidebar.html.twig", "point_focal/basepf.html.twig", 105)->display($context);
        // line 106
        echo "                  <div class=\"pcoded-content\">
                      <!-- Page-header start -->
                        ";
        // line 108
        $this->loadTemplate("point_focal/partials/_header.html.twig", "point_focal/basepf.html.twig", 108)->display($context);
        // line 109
        echo "                      <!-- Page-header end -->
                        <div class=\"pcoded-inner-content\">
                            <!-- Main-body start -->
                            <div class=\"main-body\">
                                <div class=\"page-wrapper\">
                                    <!-- Page-body start -->
                                    <div class=\"page-body\">
                                        ";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "                                    </div>
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
        // line 172
        $this->displayBlock('javascripts', $context, $blocks);
        // line 204
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

    // line 116
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 173
        echo "        <!-- Required Jquery -->
        <script type=\"text/javascript\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo " \"></script>
        <script type=\"text/javascript\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/popper.js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo " \"></script>
        <script type=\"text/javascript\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/widget/excanvas.js"), "html", null, true);
        echo " \"></script>
        <!-- waves js -->
        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/waves/js/waves.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jquery slimscroll js -->
        <script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo " \"></script>
        <!-- modernizr js -->
        <script type=\"text/javascript\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/modernizr/modernizr.js"), "html", null, true);
        echo " \"></script>
        <!-- slimscroll js -->
        <script type=\"text/javascript\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/SmoothScroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo " \"></script>
        <!-- Chart js -->
        <script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ks/point_focal/assets/js/chart.js/Chart.js"), "html", null, true);
        echo "\"></script>
        <!-- amchart js -->
        <script src=\"https://www.amcharts.com/lib/3/amcharts.js\"></script>
        <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/widget/amchart/gauge.j"), "html", null, true);
        echo "s\"></script>
        <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/widget/amchart/serial.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/widget/amchart/light.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/widget/amchart/pie.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://www.amcharts.com/lib/3/plugins/export/export.min.js\"></script>
        <!-- menu js -->
        <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/pcoded.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/js/vertical-layout.min.js"), "html", null, true);
        echo " \"></script>
        <!-- custom js -->
        <script type=\"text/javascript\" src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/point_focal/assets/pages/dashboard/custom-dashboard.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 202
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
        return array (  429 => 202,  425 => 201,  420 => 199,  416 => 198,  410 => 195,  406 => 194,  402 => 193,  398 => 192,  392 => 189,  387 => 187,  383 => 186,  378 => 184,  373 => 182,  368 => 180,  363 => 178,  359 => 177,  355 => 176,  351 => 175,  347 => 174,  344 => 173,  334 => 172,  316 => 116,  304 => 39,  297 => 35,  292 => 33,  287 => 31,  282 => 29,  277 => 27,  272 => 25,  265 => 21,  262 => 20,  252 => 19,  233 => 5,  219 => 204,  217 => 172,  160 => 117,  158 => 116,  149 => 109,  147 => 108,  143 => 106,  141 => 105,  137 => 103,  135 => 102,  72 => 41,  70 => 19,  53 => 5,  47 => 1,);
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
                {% include \"point_focal/partials/_sidebar.html.twig\" %}
                  <div class=\"pcoded-content\">
                      <!-- Page-header start -->
                        {% include \"point_focal/partials/_header.html.twig\" %}
                      <!-- Page-header end -->
                        <div class=\"pcoded-inner-content\">
                            <!-- Main-body start -->
                            <div class=\"main-body\">
                                <div class=\"page-wrapper\">
                                    <!-- Page-body start -->
                                    <div class=\"page-body\">
                                        {% block body %}{% endblock %}
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
", "point_focal/basepf.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\MbothDataBase\\templates\\point_focal\\basepf.html.twig");
    }
}
