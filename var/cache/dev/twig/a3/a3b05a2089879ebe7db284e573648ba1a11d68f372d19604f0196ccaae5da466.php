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
class __TwigTemplate_2545a886a89b2d246a23328e2c93e06cb3841480966ab1d1e6874393d355c9bc extends Template
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
        // line 40
        echo "
    </head>
  <body class=\"nav-md\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
            ";
        // line 46
        $this->loadTemplate("partials/_sidebar.html.twig", "base.html.twig", 46)->display($context);
        // line 47
        echo "        </div>

        <!-- top navigation -->
            ";
        // line 50
        $this->loadTemplate("partials/_navbar.html.twig", "base.html.twig", 50)->display($context);
        // line 51
        echo "        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        ";
        // line 62
        $this->loadTemplate("partials/_footer.html.twig", "base.html.twig", 62)->display($context);
        // line 63
        echo "        <!-- /footer content -->
      </div>
    </div>
    ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 124
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
            <!-- Custom Theme Style -->
            <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link rel=\"shortcut icon\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.png"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
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

    // line 66
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
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FastClick -->
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
        <!-- NProgress -->
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/nprogress/nprogress.j"), "html", null, true);
        echo "s\"></script>
        <!-- Chart.js -->
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <!-- gauge.js -->
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
        <!-- bootstrap-progressbar -->
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Skycons -->
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
        <!-- Flot -->
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <!-- Flot plugins -->
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
        <!-- DateJS -->
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
        <!-- JQVMap -->
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
        <!-- bootstrap-daterangepicker -->
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- Datatables -->
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <!-- Custom Theme Scripts -->
        <script src=\"";
        // line 122
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
        return array (  425 => 122,  420 => 120,  416 => 119,  412 => 118,  408 => 117,  404 => 116,  400 => 115,  396 => 114,  392 => 113,  388 => 112,  384 => 111,  380 => 110,  376 => 109,  372 => 108,  368 => 107,  364 => 106,  359 => 104,  355 => 103,  350 => 101,  346 => 100,  342 => 99,  337 => 97,  332 => 95,  328 => 94,  324 => 93,  319 => 91,  315 => 90,  311 => 89,  307 => 88,  303 => 87,  298 => 85,  293 => 83,  288 => 81,  283 => 79,  278 => 77,  273 => 75,  268 => 73,  263 => 71,  258 => 69,  244 => 66,  226 => 56,  214 => 38,  210 => 37,  205 => 35,  200 => 33,  195 => 31,  189 => 28,  185 => 27,  181 => 26,  177 => 25,  173 => 24,  167 => 21,  162 => 19,  157 => 17,  152 => 15,  148 => 13,  138 => 12,  119 => 9,  107 => 124,  105 => 66,  100 => 63,  98 => 62,  91 => 57,  89 => 56,  82 => 51,  80 => 50,  75 => 47,  73 => 46,  65 => 40,  63 => 12,  57 => 9,  47 => 1,);
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
            <!-- Custom Theme Style -->
            <link href=\"{{asset('assets/build/css/custom.min.css')}}\" rel=\"stylesheet\" />
            <link rel=\"shortcut icon\" href=\"{{asset('assets/images/logo-mini.png')}}\" />
        {% endblock %}

    </head>
  <body class=\"nav-md\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
            {% include \"partials/_sidebar.html.twig\" %}
        </div>

        <!-- top navigation -->
            {% include \"partials/_navbar.html.twig\" %}
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
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
