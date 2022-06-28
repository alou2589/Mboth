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

/* maison/show.html.twig */
class __TwigTemplate_6c49384e6e5d15236a66dba8e5344b27c7d93e3d5c8c0c303b5ef7f3d844b734 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maison/show.html.twig", 1);
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

        echo "Maison | ";
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
            <h2>Maison</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maison_liste_personne", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Liste Personne\"><i class=\"fas fa-list text-info\"></i> </a> 
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maison_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maison_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\"  class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maison_new");
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Ajout Maison\"><i class=\"fas fa-plus-circle text-success\"></i></a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maison_index");
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
                          Maison ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 41, $this->source); })()), "NomMaison", [], "any", false, false, false, 41), "html", null, true);
        echo ".
                        </p>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-5 col-xs-12 mr-2\">
                                        <div class=\"card o-hidden border-0 shadow-lg my-5\">
                                            <div class=\"card-body p-1\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-10 col-xs-12 mx-auto\">
                                                        <div class=\"p-5\">
                                                            <ul class=\"list-group\">
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Id</strong>: ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
        echo "</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Maison</strong>: ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 57, $this->source); })()), "NomMaison", [], "any", false, false, false, 57), "html", null, true);
        echo "</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Code Maison</strong>: ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 60, $this->source); })()), "CodeMaison", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Cellule</strong>: ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 63, $this->source); })()), "secteur", [], "any", false, false, false, 63), "NomSecteur", [], "any", false, false, false, 63), "html", null, true);
        echo "</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p>
                                                                        <strong>Fiche Information:</strong> :
                                                                        <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 68, $this->source); })()), "Localisation", [], "any", false, false, false, 68), "html", null, true);
        echo "\" class=\"text-decoration-none\" title=\"Localisation\" target=\"_blank\"><i class=\"fas fa-location-dot text-danger\"></i> </a>
                                                                        <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maison_liste_personne", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\" class=\"text-decoration-none\" title=\"Liste Personne\"><i class=\"fas fa-users text-info\"></i> </a>
                                                                        <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maison_education", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
        echo "\" class=\"text-decoration-none\" title=\"Education\"><i class=\"fas fa-user-graduate text-primary\"></i> </a>
                                                                        <a href=\"#\" class=\"text-decoration-none\" title=\"Santé\"><i class=\"fas fa-heartbeat text-danger\"></i> </a>
                                                                        <a href=\"#\" class=\"text-decoration-none\" title=\"Environnement\"><i class=\"fas fa-leaf text-success\"></i> </a>
                                                                        <a href=\"#\" class=\"text-decoration-none\" title=\"Economie\"><i class=\"fas fa-hand-holding-usd text-secondary\"></i> </a>
                                                                    </p>
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
        return "maison/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 70,  187 => 69,  183 => 68,  175 => 63,  169 => 60,  163 => 57,  157 => 54,  141 => 41,  125 => 28,  119 => 25,  113 => 22,  107 => 19,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Maison | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">
      <div class=\"col-md-12 col-sm-12 \">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Maison</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_maison_liste_personne', {'id':maison.id}) }}\" class=\"text-decoration-none float-left m-1\" title=\"Liste Personne\"><i class=\"fas fa-list text-info\"></i> </a> 
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_maison_delete', {'id': maison.id}) }}\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_maison_edit', {'id': maison.id}) }}\"  class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_maison_new') }}\" class=\"text-decoration-none float-left m-1\" title=\"Ajout Maison\"><i class=\"fas fa-plus-circle text-success\"></i></a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_maison_index') }}\" class=\"text-decoration-none float-left m-1\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>
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
                          Maison {{ maison.NomMaison}}.
                        </p>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-5 col-xs-12 mr-2\">
                                        <div class=\"card o-hidden border-0 shadow-lg my-5\">
                                            <div class=\"card-body p-1\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-10 col-xs-12 mx-auto\">
                                                        <div class=\"p-5\">
                                                            <ul class=\"list-group\">
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Id</strong>: {{ maison.id }}</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Maison</strong>: {{ maison.NomMaison }}</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Code Maison</strong>: {{ maison.CodeMaison }}</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Cellule</strong>: {{ maison.secteur.NomSecteur }}</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p>
                                                                        <strong>Fiche Information:</strong> :
                                                                        <a href=\"{{ maison.Localisation}}\" class=\"text-decoration-none\" title=\"Localisation\" target=\"_blank\"><i class=\"fas fa-location-dot text-danger\"></i> </a>
                                                                        <a href=\"{{ path('app_maison_liste_personne', {'id':maison.id}) }}\" class=\"text-decoration-none\" title=\"Liste Personne\"><i class=\"fas fa-users text-info\"></i> </a>
                                                                        <a href=\"{{ path('app_maison_education', {'id':maison.id}) }}\" class=\"text-decoration-none\" title=\"Education\"><i class=\"fas fa-user-graduate text-primary\"></i> </a>
                                                                        <a href=\"#\" class=\"text-decoration-none\" title=\"Santé\"><i class=\"fas fa-heartbeat text-danger\"></i> </a>
                                                                        <a href=\"#\" class=\"text-decoration-none\" title=\"Environnement\"><i class=\"fas fa-leaf text-success\"></i> </a>
                                                                        <a href=\"#\" class=\"text-decoration-none\" title=\"Economie\"><i class=\"fas fa-hand-holding-usd text-secondary\"></i> </a>
                                                                    </p>
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

", "maison/show.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\MbothDataBase\\templates\\maison\\show.html.twig");
    }
}
