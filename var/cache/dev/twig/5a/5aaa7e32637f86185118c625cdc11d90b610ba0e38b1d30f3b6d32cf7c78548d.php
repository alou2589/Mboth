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

/* eleve/show.html.twig */
class __TwigTemplate_d7810c1aa045240e539a9ca7dc5ace54e57b35051105f29689fe3b855da1310a extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "eleve/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"row\">
      <div class=\"col-md-12 col-sm-12 \">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Elève</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\"  class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_index");
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
                           Informations <strong class=\"text-primary\"> ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 36, $this->source); })()), "personne", [], "any", false, false, false, 36), "prenom", [], "any", false, false, false, 36), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 36, $this->source); })()), "personne", [], "any", false, false, false, 36), "Nom", [], "any", false, false, false, 36), "html", null, true);
        echo "</strong>.
                        </p>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-5 col-xs-12 mr-2\">
                                        <div class=\"card o-hidden border-0 shadow-lg my-5\">
                                            <div class=\"card-body p-1\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-10 col-xs-12 mx-auto\">
                                                        <div class=\"p-1\">
                                                            <ul class=\"list-group\">
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Id</strong>: ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Nom Complet Elève</strong>: ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 52, $this->source); })()), "personne", [], "any", false, false, false, 52), "Prenom", [], "any", false, false, false, 52), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 52, $this->source); })()), "personne", [], "any", false, false, false, 52), "Nom", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Date et Lieu de Naissance</strong>: ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 55, $this->source); })()), "personne", [], "any", false, false, false, 55), "dateNaissance", [], "any", false, false, false, 55), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 55, $this->source); })()), "personne", [], "any", false, false, false, 55), "lieuNaissance", [], "any", false, false, false, 55), "html", null, true);
        echo "</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Ecole</strong>: ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 58, $this->source); })()), "ecole", [], "any", false, false, false, 58), "NomEcole", [], "any", false, false, false, 58), "html", null, true);
        echo "</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Classe</strong>: ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 61, $this->source); })()), "classe", [], "any", false, false, false, 61), "NomClasse", [], "any", false, false, false, 61), "html", null, true);
        echo "</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Fiche</strong>: <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 64, $this->source); })()), "personne", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64)]), "html", null, true);
        echo "\" class=\"text-decoration-none\" title=\"Information Personnelle\"><i class=\"fas fa-info-circle text-info\"></i></a></p>
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
        return "eleve/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 64,  175 => 61,  169 => 58,  161 => 55,  153 => 52,  147 => 49,  129 => 36,  113 => 23,  107 => 20,  101 => 17,  89 => 7,  79 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Eleve | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">
      <div class=\"col-md-12 col-sm-12 \">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Elève</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_eleve_delete', {'id': eleve.id}) }}\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_eleve_edit', {'id': eleve.id}) }}\"  class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_eleve_index') }}\" class=\"text-decoration-none float-left m-1\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>
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
                           Informations <strong class=\"text-primary\"> {{ eleve.personne.prenom}} {{ eleve.personne.Nom}}</strong>.
                        </p>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-5 col-xs-12 mr-2\">
                                        <div class=\"card o-hidden border-0 shadow-lg my-5\">
                                            <div class=\"card-body p-1\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-10 col-xs-12 mx-auto\">
                                                        <div class=\"p-1\">
                                                            <ul class=\"list-group\">
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Id</strong>: {{ eleve.id }}</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Nom Complet Elève</strong>: {{ eleve.personne.Prenom }} {{eleve.personne.Nom}}</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Date et Lieu de Naissance</strong>: {{ eleve.personne.dateNaissance|date('Y-m-d') }} à {{eleve.personne.lieuNaissance}}</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Ecole</strong>: {{ eleve.ecole.NomEcole }}</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Classe</strong>: {{ eleve.classe.NomClasse }}</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Fiche</strong>: <a href=\"{{path('app_personne_show', {'id':eleve.personne.id})}}\" class=\"text-decoration-none\" title=\"Information Personnelle\"><i class=\"fas fa-info-circle text-info\"></i></a></p>
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
", "eleve/show.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\eleve\\show.html.twig");
    }
}
