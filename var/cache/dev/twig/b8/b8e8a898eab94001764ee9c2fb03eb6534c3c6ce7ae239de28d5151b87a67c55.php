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

/* eleve/edit.html.twig */
class __TwigTemplate_379f880c7c58dd4bd9d1d920b953c47ff601d79bcd4135172bdb7f3ceab24b05 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "eleve/edit.html.twig", 1);
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

        echo "Eleve | ";
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
            <h2>El??ve</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
              <li>
                  <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
              </li>
              <li>
                  <a class=\"collapse-link\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" title=\"Accueil El??ve\" ><i class=\"fas fa-fw fa-home\"></i></a>
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
                    Modification El??ve
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
                                    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        echo "
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "personne", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-control js-example-basic-single", "placeholder" => "Ecole", "required" => "required", "autofocus" => "autofocus"]]);
        echo "
                                        </div>
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "classe", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control js-example-basic-single", "placeholder" => "Ecole", "required" => "required", "autofocus" => "autofocus"]]);
        echo "
                                        </div>
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "ecole", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "form-control js-example-basic-single", "placeholder" => "Ecole", "required" => "required", "autofocus" => "autofocus"]]);
        echo "
                                        </div>                                                                                    
                                        <div class=\"form-floating mb-3\">
                                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "nom_classe", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Classe", "required" => "required", "autofocus" => "autofocus"]]);
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-warning\">Modifier <i class=\"fas fa-edit\"></i> </button>
                                        </div>
                                    ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        echo "
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
        return "eleve/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 56,  151 => 51,  145 => 48,  139 => 45,  133 => 42,  128 => 40,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eleve | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">
      <div class=\"col-md-12 col-sm-12 \">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>El??ve</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
              <li>
                  <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
              </li>
              <li>
                  <a class=\"collapse-link\" href=\"{{ path('app_eleve_show', {'id':eleve.id}) }}\" title=\"Accueil El??ve\" ><i class=\"fas fa-fw fa-home\"></i></a>
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
                    Modification El??ve
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
                                    {{form_start(form, {'attr':{'class':'form'}})}}
                                        <div class=\"form-floating mb-3\">
                                            {{form_row(form.personne, {'attr':{'class':\"form-control js-example-basic-single\", 'placeholder':\"Ecole\", 'required':\"required\", 'autofocus':\"autofocus\"}})}}
                                        </div>
                                        <div class=\"form-floating mb-3\">
                                            {{form_row(form.classe, {'attr':{'class':\"form-control js-example-basic-single\", 'placeholder':\"Ecole\", 'required':\"required\", 'autofocus':\"autofocus\"}})}}
                                        </div>
                                        <div class=\"form-floating mb-3\">
                                            {{form_row(form.ecole, {'attr':{'class':\"form-control js-example-basic-single\", 'placeholder':\"Ecole\", 'required':\"required\", 'autofocus':\"autofocus\"}})}}
                                        </div>                                                                                    
                                        <div class=\"form-floating mb-3\">
                                            {{form_row(form.nom_classe, {'attr':{'class':\"form-control\", 'placeholder':\"Classe\", 'required':\"required\", 'autofocus':\"autofocus\"}})}}
                                        </div>
                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-warning\">Modifier <i class=\"fas fa-edit\"></i> </button>
                                        </div>
                                    {{ form_end(form) }}
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

{% endblock %}

", "eleve/edit.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\eleve\\edit.html.twig");
    }
}
