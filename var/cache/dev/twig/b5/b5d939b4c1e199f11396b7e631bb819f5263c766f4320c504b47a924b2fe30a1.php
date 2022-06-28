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

/* arbre/show.html.twig */
class __TwigTemplate_d1ea0263bef69770a0ba7fc021ead4870b3bbd40cc72f438f2359741b0c15fb6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arbre/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arbre/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "arbre/show.html.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 \">
            <div class=\"x_panel\">
              <div class=\"x_title\">
                <h2>Arbre</h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                    <li>
                        <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                    <li>
                        <a class=\"collapse-link\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_arbre_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["arbre"]) || array_key_exists("arbre", $context) ? $context["arbre"] : (function () { throw new RuntimeError('Variable "arbre" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                    </li>
                    <li>
                        <a class=\"collapse-link\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_arbre_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["arbre"]) || array_key_exists("arbre", $context) ? $context["arbre"] : (function () { throw new RuntimeError('Variable "arbre" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\"  class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                    </li>
                    <li>
                        <a class=\"collapse-link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_arbre_index");
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
                              Arbre ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arbre"]) || array_key_exists("arbre", $context) ? $context["arbre"] : (function () { throw new RuntimeError('Variable "arbre" does not exist.', 35, $this->source); })()), "NomArbre", [], "any", false, false, false, 35), "html", null, true);
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
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arbre"]) || array_key_exists("arbre", $context) ? $context["arbre"] : (function () { throw new RuntimeError('Variable "arbre" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                                                                    </li>
                                                                    <li class=\"list-group-item\">
                                                                        ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, (isset($context["arbre"]) || array_key_exists("arbre", $context) ? $context["arbre"] : (function () { throw new RuntimeError('Variable "arbre" does not exist.', 51, $this->source); })()), "maison", [], "any", false, false, false, 51)) {
            // line 52
            echo "                                                                            <p><strong>Maison</strong>: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["arbre"]) || array_key_exists("arbre", $context) ? $context["arbre"] : (function () { throw new RuntimeError('Variable "arbre" does not exist.', 52, $this->source); })()), "maison", [], "any", false, false, false, 52), "NomMaison", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
                                                                        ";
        } else {
            // line 54
            echo "                                                                            <p><strong>Maison</strong>: \"Pas encore enregistré</p>
                                                                        ";
        }
        // line 56
        echo "                                                                        
                                                                    </li>
                                                                    <li class=\"list-group-item\">
                                                                        <p><strong>Arbre</strong>: ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arbre"]) || array_key_exists("arbre", $context) ? $context["arbre"] : (function () { throw new RuntimeError('Variable "arbre" does not exist.', 59, $this->source); })()), "NomArbre", [], "any", false, false, false, 59), "html", null, true);
        echo "</p>
                                                                    </li>
                                                                    <li class=\"list-group-item\">
                                                                        <p><strong>Type Arbre</strong>: ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["arbre"]) || array_key_exists("arbre", $context) ? $context["arbre"] : (function () { throw new RuntimeError('Variable "arbre" does not exist.', 62, $this->source); })()), "TypeArbre", [], "any", false, false, false, 62), "NomTypeArbre", [], "any", false, false, false, 62), "html", null, true);
        echo "</p>
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
        return "arbre/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 62,  168 => 59,  163 => 56,  159 => 54,  153 => 52,  151 => 51,  145 => 48,  129 => 35,  113 => 22,  107 => 19,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
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
                        <a class=\"collapse-link\" href=\"{{ path('app_arbre_delete', {'id': arbre.id}) }}\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                    </li>
                    <li>
                        <a class=\"collapse-link\" href=\"{{ path('app_arbre_edit', {'id': arbre.id}) }}\"  class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                    </li>
                    <li>
                        <a class=\"collapse-link\" href=\"{{ path('app_arbre_index') }}\" class=\"text-decoration-none float-left m-1\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>
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
                              Arbre {{ arbre.NomArbre}}.
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
                                                                        <p><strong>Id</strong>: {{ arbre.id }}</p>
                                                                    </li>
                                                                    <li class=\"list-group-item\">
                                                                        {% if arbre.maison %}
                                                                            <p><strong>Maison</strong>: {{ arbre.maison.NomMaison }}</p>
                                                                        {% else %}
                                                                            <p><strong>Maison</strong>: \"Pas encore enregistré</p>
                                                                        {% endif %}
                                                                        
                                                                    </li>
                                                                    <li class=\"list-group-item\">
                                                                        <p><strong>Arbre</strong>: {{ arbre.NomArbre }}</p>
                                                                    </li>
                                                                    <li class=\"list-group-item\">
                                                                        <p><strong>Type Arbre</strong>: {{ arbre.TypeArbre.NomTypeArbre }}</p>
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

", "arbre/show.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\arbre\\show.html.twig");
    }
}
