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

/* security/login.html.twig */
class __TwigTemplate_7c02b7c5e2cf51aa9bae98a77e12397567bcc0a8a2de278e457da1d9a0eab902 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Login </title>

  <!-- Bootstrap -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- Font Awesome -->
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- NProgress -->
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- Animate.css -->
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- Custom Theme Style -->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.png"), "html", null, true);
        echo "\" />
</head>

<body class=\"login\">
  <div>
    <a class=\"hiddenanchor\" id=\"signup\"></a>
    <a class=\"hiddenanchor\" id=\"signin\"></a>

    <div class=\"login_wrapper\">
      <div class=\"animate form login_form\">
        <section class=\"login_content\">
          ";
        // line 33
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">Utilisateur non valide</div>
\t\t\t\t\t";
        }
        // line 36
        echo "
\t\t\t\t\t";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37)) {
            // line 38
            echo "\t\t\t\t\t\t<h1 class=\"h2\">Tu étais connecté qur ce compte ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnecter</a></h1>
\t\t\t\t\t\t<p class=\"lead\">Continuer sur ce compte</p>
\t\t\t\t\t";
        }
        // line 41
        echo "            <div class=\" row brand-logo\">
                <img class=\"col-12 mx-auto\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
            </div>
            <form method=\"POST\" class=\"pt-3\">
              <div class=\"form-group\">
                  <input type=\"email\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"exampleInputEmail1\" class=\"form-control form-control-lg\" placeholder=\"Adresse Email\" autocomplete=\"email\" required autofocus>
              </div>
              <div class=\"form-group\">
                  <input type=\"password\" name=\"password\" id=\"exampleInputPassword1\" class=\"form-control form-control-lg\" placeholder=\"Password\" autocomplete=\"current-password\" required>
                  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" >
              </div>
              <div>
                <button type=\"submit\" class=\"btn btn-outline-primary submit\">Se Connecter</button>
              </div>
              <div class=\"clearfix\"></div>
              <div class=\"separator\">
                <p class=\"change_link\">
                  <a class=\"reset_pass\" href=\"#\">Mot de passe oublié ?</a>
                  <a href=\"#signup\" class=\"to_register\"> Creer un compte </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h1><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.png"), "html", null, true);
        echo "\" alt=\"Logo\" width=\"25\"> And Defar Mboth</h1>
                  <p>©2022 Tous droits réservés. And Defar Mboth . Privacy and Terms</p>
                </div>
              </div>
            </form>
        </section>
      </div>

      <div id=\"register\" class=\"animate form registration_form\">
        <section class=\"login_content\">
          <form>
            <h1>Create Account</h1>
            <div>
              <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
            </div>
            <div>
              <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\" />
            </div>
            <div>
              <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
            </div>
            <div>
              <a class=\"btn btn-default submit\" href=\"index.html\">Submit</a>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"separator\">
              <p class=\"change_link\">Already a member ?
                <a href=\"#signin\" class=\"to_register\"> Log in </a>
              </p>
              <div class=\"clearfix\"></div>
              <br />
              <div>
                <h1><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.png"), "html", null, true);
        echo "\" alt=\"Logo\" width=\"15\"> And Defar Mboth</h1>
                <p>©2022 Tous droits réservés. And Defar Mboth . Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>

                ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 98,  151 => 66,  132 => 50,  125 => 46,  118 => 42,  115 => 41,  106 => 38,  104 => 37,  101 => 36,  97 => 34,  95 => 33,  81 => 22,  77 => 21,  72 => 19,  67 => 17,  62 => 15,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Login </title>

  <!-- Bootstrap -->
  <link href=\"{{asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <!-- Font Awesome -->
  <link href=\"{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
  <!-- NProgress -->
  <link href=\"{{asset('assets/vendors/nprogress/nprogress.css')}}\" rel=\"stylesheet\">
  <!-- Animate.css -->
  <link href=\"{{asset('assets/vendors/animate.css/animate.min.css')}}\" rel=\"stylesheet\">
  <!-- Custom Theme Style -->
  <link href=\"{{asset('assets/build/css/custom.min.css')}}\" rel=\"stylesheet\">
  <link rel=\"shortcut icon\" href=\"{{asset('assets/images/logo-mini.png')}}\" />
</head>

<body class=\"login\">
  <div>
    <a class=\"hiddenanchor\" id=\"signup\"></a>
    <a class=\"hiddenanchor\" id=\"signin\"></a>

    <div class=\"login_wrapper\">
      <div class=\"animate form login_form\">
        <section class=\"login_content\">
          {% if error %}
\t\t\t\t\t\t<div class=\"alert alert-danger\">Utilisateur non valide</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<h1 class=\"h2\">Tu étais connecté qur ce compte {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Déconnecter</a></h1>
\t\t\t\t\t\t<p class=\"lead\">Continuer sur ce compte</p>
\t\t\t\t\t{% endif %}
            <div class=\" row brand-logo\">
                <img class=\"col-12 mx-auto\" src=\"{{asset('assets/images/logo.png')}}\" alt=\"logo\">
            </div>
            <form method=\"POST\" class=\"pt-3\">
              <div class=\"form-group\">
                  <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"exampleInputEmail1\" class=\"form-control form-control-lg\" placeholder=\"Adresse Email\" autocomplete=\"email\" required autofocus>
              </div>
              <div class=\"form-group\">
                  <input type=\"password\" name=\"password\" id=\"exampleInputPassword1\" class=\"form-control form-control-lg\" placeholder=\"Password\" autocomplete=\"current-password\" required>
                  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" >
              </div>
              <div>
                <button type=\"submit\" class=\"btn btn-outline-primary submit\">Se Connecter</button>
              </div>
              <div class=\"clearfix\"></div>
              <div class=\"separator\">
                <p class=\"change_link\">
                  <a class=\"reset_pass\" href=\"#\">Mot de passe oublié ?</a>
                  <a href=\"#signup\" class=\"to_register\"> Creer un compte </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h1><img src=\"{{asset('assets/images/logo-mini.png')}}\" alt=\"Logo\" width=\"25\"> And Defar Mboth</h1>
                  <p>©2022 Tous droits réservés. And Defar Mboth . Privacy and Terms</p>
                </div>
              </div>
            </form>
        </section>
      </div>

      <div id=\"register\" class=\"animate form registration_form\">
        <section class=\"login_content\">
          <form>
            <h1>Create Account</h1>
            <div>
              <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
            </div>
            <div>
              <input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\" />
            </div>
            <div>
              <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
            </div>
            <div>
              <a class=\"btn btn-default submit\" href=\"index.html\">Submit</a>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"separator\">
              <p class=\"change_link\">Already a member ?
                <a href=\"#signin\" class=\"to_register\"> Log in </a>
              </p>
              <div class=\"clearfix\"></div>
              <br />
              <div>
                <h1><img src=\"{{asset('assets/images/logo-mini.png')}}\" alt=\"Logo\" width=\"15\"> And Defar Mboth</h1>
                <p>©2022 Tous droits réservés. And Defar Mboth . Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>

                ", "security/login.html.twig", "C:\\Users\\Alou\\Mboth\\templates\\security\\login.html.twig");
    }
}
