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

/* type_arbre/show.html.twig */
class __TwigTemplate_6c30efb8e2b9757660d0b1c90da4b707379445f617a411994ad025efdbbe4a3e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_arbre/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_arbre/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "type_arbre/show.html.twig", 1);
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

        echo "Type Arbre | ";
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
        echo "    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 \">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Type Arbre</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_arbre_liste_arbre", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["type_arbre"]) || array_key_exists("type_arbre", $context) ? $context["type_arbre"] : (function () { throw new RuntimeError('Variable "type_arbre" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Liste Arbres\"><i class=\"fas fa-list text-info\"></i> </a> 
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_arbre_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["type_arbre"]) || array_key_exists("type_arbre", $context) ? $context["type_arbre"] : (function () { throw new RuntimeError('Variable "type_arbre" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_arbre_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["type_arbre"]) || array_key_exists("type_arbre", $context) ? $context["type_arbre"] : (function () { throw new RuntimeError('Variable "type_arbre" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\"  class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_arbre_index");
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>
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
                          Type Arbre ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["type_arbre"]) || array_key_exists("type_arbre", $context) ? $context["type_arbre"] : (function () { throw new RuntimeError('Variable "type_arbre" does not exist.', 38, $this->source); })()), "NomTypeArbre", [], "any", false, false, false, 38), "html", null, true);
        echo ".
                        </p>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 col-xs-12 mr-2\">
                                        <div class=\"card o-hidden border-0 shadow-lg my-5\">
                                            <div class=\"card-body p-1\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-10 col-xs-12 mx-auto\">
                                                        <div class=\"p-1\">
                                                            <ul class=\"list-group\">
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Id</strong>: ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["type_arbre"]) || array_key_exists("type_arbre", $context) ? $context["type_arbre"] : (function () { throw new RuntimeError('Variable "type_arbre" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Type Arbre</strong>: ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["type_arbre"]) || array_key_exists("type_arbre", $context) ? $context["type_arbre"] : (function () { throw new RuntimeError('Variable "type_arbre" does not exist.', 54, $this->source); })()), "NomTypeArbre", [], "any", false, false, false, 54), "html", null, true);
        echo "</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Description</strong>:</p>
                                                                    ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["type_arbre"]) || array_key_exists("type_arbre", $context) ? $context["type_arbre"] : (function () { throw new RuntimeError('Variable "type_arbre" does not exist.', 58, $this->source); })()), "Description", [], "any", false, false, false, 58), "html", null, true);
        echo "
                                                                </li>
                                                            </ul>                            
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
        return "type_arbre/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 58,  157 => 54,  151 => 51,  135 => 38,  119 => 25,  113 => 22,  107 => 19,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Type Arbre | {{ parent() }}{% endblock %}

{% block body %}
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 \">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Type Arbre</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_type_arbre_liste_arbre', {'id':type_arbre.id}) }}\" class=\"text-decoration-none float-left m-1\" title=\"Liste Arbres\"><i class=\"fas fa-list text-info\"></i> </a> 
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_type_arbre_delete', {'id': type_arbre.id}) }}\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_type_arbre_edit', {'id': type_arbre.id}) }}\"  class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_type_arbre_index') }}\" class=\"text-decoration-none float-left m-1\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>
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
                          Type Arbre {{ type_arbre.NomTypeArbre}}.
                        </p>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 col-xs-12 mr-2\">
                                        <div class=\"card o-hidden border-0 shadow-lg my-5\">
                                            <div class=\"card-body p-1\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-10 col-xs-12 mx-auto\">
                                                        <div class=\"p-1\">
                                                            <ul class=\"list-group\">
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Id</strong>: {{ type_arbre.id }}</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Type Arbre</strong>: {{ type_arbre.NomTypeArbre }}</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Description</strong>:</p>
                                                                    {{ type_arbre.Description }}
                                                                </li>
                                                            </ul>                            
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

", "type_arbre/show.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\type_arbre\\show.html.twig");
    }
}
