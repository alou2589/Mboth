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

/* user/delete.html.twig */
class __TwigTemplate_8e210966b7f486bb00cf20b2d4cfe2dee92d70b5f3fa5b76edce2f7452dfb67d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/delete.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/delete.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Point Focal | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"row\">
  <div class=\"col-md-12 col-sm-12 \">
    <div class=\"x_panel\">
      <div class=\"x_title\">
        <h2>Point Focal</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
          <li>
              <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
          <li>
              <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" title=\"Accueil Point Focal\" ><i class=\"fas fa-fw fa-home\"></i></a>
          </li>
          <li>
              <a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
      <div class=\"x_content\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div class=\"card-box table-responsive\">
              <p class=\"text-muted font-13 m-b-30\">
                Suppression Point Focal
              </p>
              <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"row\">
                    <div class=\"col-md-5 col-xs-12 mr-2\">
                      <div class=\"card o-hidden border-0 shadow-lg my-5\">
                        <div class=\"card-body p-1\">
                          <div class=\"row\">
                            <div class=\"col-lg-10 mx-auto\">
                              <div class=\"p-5\">
                                <p>Supprimer le Point Focal <strong> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "Username", [], "any", false, false, false, 40), "html", null, true);
        echo " </strong></p>
                                <form method=\"post\" action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\" onsubmit=\"return confirm(??tes-vous s??r de vouloir supprimer cet Point Focal ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42))), "html", null, true);
        echo "\">
                                    <button class=\"btn btn-danger\">Delete <i class=\"fas fa-trash-alt\"></i></button>
                                    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Annuler <i class=\"fas fa-home\"></i></a>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 44,  136 => 42,  132 => 41,  128 => 40,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Point Focal | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">
  <div class=\"col-md-12 col-sm-12 \">
    <div class=\"x_panel\">
      <div class=\"x_title\">
        <h2>Point Focal</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
          <li>
              <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
          <li>
              <a href=\"{{ path('app_user_show', {'id':user.id}) }}\" title=\"Accueil Point Focal\" ><i class=\"fas fa-fw fa-home\"></i></a>
          </li>
          <li>
              <a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
          </li>
        </ul>
        <div class=\"clearfix\"></div>
      </div>
      <div class=\"x_content\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div class=\"card-box table-responsive\">
              <p class=\"text-muted font-13 m-b-30\">
                Suppression Point Focal
              </p>
              <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"row\">
                    <div class=\"col-md-5 col-xs-12 mr-2\">
                      <div class=\"card o-hidden border-0 shadow-lg my-5\">
                        <div class=\"card-body p-1\">
                          <div class=\"row\">
                            <div class=\"col-lg-10 mx-auto\">
                              <div class=\"p-5\">
                                <p>Supprimer le Point Focal <strong> {{user.Username}} </strong></p>
                                <form method=\"post\" action=\"{{ path('app_user_delete', {'id': user.id}) }}\" onsubmit=\"return confirm(??tes-vous s??r de vouloir supprimer cet Point Focal ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                                    <button class=\"btn btn-danger\">Delete <i class=\"fas fa-trash-alt\"></i></button>
                                    <a href=\"{{ path('app_user_show', {'id':user.id}) }}\" class=\"btn btn-primary\">Annuler <i class=\"fas fa-home\"></i></a>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "user/delete.html.twig", "C:\\Users\\Alou\\Desktop\\projets\\Mboth\\templates\\user\\delete.html.twig");
    }
}
