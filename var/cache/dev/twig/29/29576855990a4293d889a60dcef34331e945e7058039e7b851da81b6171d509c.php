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

/* arbre/edit.html.twig */
class __TwigTemplate_9b960acf37374d8f4b5e36795b7f7ce3360c9b0724da776bbdeca1c23e8198ae extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arbre/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arbre/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "arbre/edit.html.twig", 1);
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

        echo "Arbre | ";
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
        <h2>Arbre</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
          <li>
              <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
          <li>
              <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_arbre_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["arbre"]) || array_key_exists("arbre", $context) ? $context["arbre"] : (function () { throw new RuntimeError('Variable "arbre" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" title=\"Accueil Arbre\" ><i class=\"fas fa-fw fa-home\"></i></a>
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
                Modification Arbre
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "type_arbre", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-control js-example-basic-single", "required" => "required"]]);
        echo "
                                    </div>
                                    <div class=\"form-floating mb-3\">
                                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "nom_arbre", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Arbre", "required" => "required", "autofocus" => "autofocus"]]);
        echo "
                                    </div>
                                    <div class=\"form-floating mb-3\">
                                      ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "maison", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "form-control js-example-basic-single", "required" => "required"]]);
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-warning\">Modifier <i class=\"fas fa-edit\"></i></button>
                                    </div>
                                ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
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
        return "arbre/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 53,  145 => 48,  139 => 45,  133 => 42,  128 => 40,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Arbre | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">
  <div class=\"col-md-12 col-sm-12 \">
    <div class=\"x_panel\">
      <div class=\"x_title\">
        <h2>Arbre</h2>
        <ul class=\"nav navbar-right panel_toolbox\">
          <li>
              <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
          </li>
          <li>
              <a href=\"{{ path('app_arbre_show', {'id':arbre.id}) }}\" title=\"Accueil Arbre\" ><i class=\"fas fa-fw fa-home\"></i></a>
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
                Modification Arbre
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
                                        {{form_row(form.type_arbre, {'attr':{'class':\"form-control js-example-basic-single\", 'required':\"required\"}})}}
                                    </div>
                                    <div class=\"form-floating mb-3\">
                                        {{form_row(form.nom_arbre, {'attr':{'class':\"form-control\", 'placeholder':\"Arbre\", 'required':\"required\", 'autofocus':\"autofocus\"}})}}
                                    </div>
                                    <div class=\"form-floating mb-3\">
                                      {{form_row(form.maison, {'attr':{'class':\"form-control js-example-basic-single\",'required':\"required\"}})}}
                                    </div>
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-warning\">Modifier <i class=\"fas fa-edit\"></i></button>
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
", "arbre/edit.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\arbre\\edit.html.twig");
    }
}
