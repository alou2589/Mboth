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

/* base.html.twig */
class __TwigTemplate_2bc714ba229ec059f067eab9cbd13849f1b7d00713276b13f584ecbfa128e24a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 49
        echo "
    </head>
  <body class=\"nav-md footer_fixed\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col menu_fixed\">
            ";
        // line 55
        $this->loadTemplate("partials/_sidebar.html.twig", "base.html.twig", 55)->display($context);
        // line 56
        echo "        </div>

        <!-- top navigation -->
            ";
        // line 59
        $this->loadTemplate("partials/_navbar.html.twig", "base.html.twig", 59)->display($context);
        // line 60
        echo "        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3><img src=\"";
        // line 67
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
            ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        ";
        // line 87
        $this->loadTemplate("partials/_footer.html.twig", "base.html.twig", 87)->display($context);
        // line 88
        echo "        <!-- /footer content -->
      </div>
    </div>
    ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 150
        echo "  </body>
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

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <!-- Bootstrap -->
            <link href=\"cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- Font Awesome -->
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- NProgress -->
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <!-- iCheck -->
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- Datatables -->

            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- bootstrap-progressbar -->
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- JQVMap -->
            <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <!-- bootstrap-daterangepicker -->
            <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- PNotify -->
            <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pnotify/dist/pnotify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pnotify/dist/pnotify.buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pnotify/dist/pnotify.nonblock.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- PNotify -->
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pnotify/dist/pnotify.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pnotify/dist/pnotify.buttons.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pnotify/dist/pnotify.nonblock.js"), "html", null, true);
        echo "\"></script>
            <!-- Custom Theme Style -->
            <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link rel=\"shortcut icon\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.png"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
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

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "  
        <script src=\"https://kit.fontawesome.com/112362d990.js\" crossorigin=\"anonymous\"></script>  
        <!-- jQuery -->
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FastClick -->
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
        <!-- NProgress -->
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/nprogress/nprogress.j"), "html", null, true);
        echo "s\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Chart.js -->
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <!-- gauge.js -->
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
        <!-- bootstrap-progressbar -->
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Skycons -->
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
        <!-- Flot -->
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <!-- Flot plugins -->
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
        <!-- DateJS -->
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
        <!-- JQVMap -->
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
        <!-- bootstrap-daterangepicker -->
        <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- Datatables -->
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <!-- Custom Theme Scripts -->
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 148,  473 => 146,  469 => 145,  465 => 144,  461 => 143,  457 => 142,  453 => 141,  449 => 140,  445 => 139,  441 => 138,  437 => 137,  433 => 136,  429 => 135,  425 => 134,  421 => 133,  417 => 132,  412 => 130,  408 => 129,  403 => 127,  399 => 126,  395 => 125,  390 => 123,  385 => 121,  381 => 120,  377 => 119,  372 => 117,  368 => 116,  364 => 115,  360 => 114,  356 => 113,  351 => 111,  346 => 109,  341 => 107,  336 => 105,  331 => 103,  326 => 101,  322 => 100,  317 => 98,  312 => 96,  307 => 94,  293 => 91,  275 => 81,  263 => 47,  259 => 46,  254 => 44,  250 => 43,  246 => 42,  241 => 40,  237 => 39,  233 => 38,  228 => 36,  223 => 34,  218 => 32,  212 => 29,  208 => 28,  204 => 27,  200 => 26,  196 => 25,  190 => 22,  185 => 20,  181 => 19,  176 => 17,  171 => 15,  167 => 13,  157 => 12,  138 => 9,  126 => 150,  124 => 91,  119 => 88,  117 => 87,  110 => 82,  108 => 81,  91 => 67,  82 => 60,  80 => 59,  75 => 56,  73 => 55,  65 => 49,  63 => 12,  57 => 9,  47 => 1,);
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
        {% block stylesheets %}
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
        {% endblock %}

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
            {% block body %}{% endblock %}
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        {% include \"partials/_footer.html.twig\" %}
        <!-- /footer content -->
      </div>
    </div>
    {% block javascripts %}  
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
    {% endblock %}
  </body>
</html>
", "base.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\base.html.twig");
    }
}
