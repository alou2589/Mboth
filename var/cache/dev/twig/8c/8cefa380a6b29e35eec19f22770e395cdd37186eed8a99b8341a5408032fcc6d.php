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
class __TwigTemplate_3b78ec96db1382302cdfc116e7237bfda6382633db08d836787b6a9318d29063 extends Template
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
    <div class=\"col-12 m-1\">
        <div class=\"card\">
            <div class=\"card-header\">                
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" class=\"text-decoration-none\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger float-right\"></i> </a>
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\"  class=\"text-decoration-none\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning float-right\"></i> </a>
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_index");
        echo "\" class=\"text-decoration-none\" title=\"Accueil\"><i class=\"fas fa-home text-primary float-right\"></i></a>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-xs-12 mr-2\">
                        <div class=\"card o-hidden border-0 shadow-lg\">
                            <div class=\"card-body p-0\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 mx-auto\">
                                        <div class=\"p-2\">
                                            <div class=\"text-center\">
                                                <img class=\"col-md-4 mx-auto\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo image\">
                                            </div>
                                            <ul class=\"list-group\">
                                                <li class=\"list-group-item\">
                                                    <p><strong>Id</strong>: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Nom Complet Elève</strong>: ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 31, $this->source); })()), "personne", [], "any", false, false, false, 31), "Prenom", [], "any", false, false, false, 31), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 31, $this->source); })()), "personne", [], "any", false, false, false, 31), "Nom", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Date et Lieu de Naissance</strong>: ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 34, $this->source); })()), "personne", [], "any", false, false, false, 34), "dateNaissance", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 34, $this->source); })()), "personne", [], "any", false, false, false, 34), "lieuNaissance", [], "any", false, false, false, 34), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Ecole</strong>: ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 37, $this->source); })()), "ecole", [], "any", false, false, false, 37), "NomEcole", [], "any", false, false, false, 37), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Classe</strong>: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 40, $this->source); })()), "classe", [], "any", false, false, false, 40), "NomClasse", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Dernière modification</strong> : ";
        // line 43
        ((twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 43, $this->source); })()), "updatedAt", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 43, $this->source); })()), "updatedAt", [], "any", false, false, false, 43), "Y-m-d à H:i:s"), "html", null, true))) : (print ("")));
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Création</strong> : ";
        // line 46
        ((twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 46, $this->source); })()), "createdAt", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 46, $this->source); })()), "createdAt", [], "any", false, false, false, 46), "Y-m-d à H:i:s"), "html", null, true))) : (print ("")));
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
        return array (  164 => 46,  158 => 43,  152 => 40,  146 => 37,  138 => 34,  130 => 31,  124 => 28,  117 => 24,  103 => 13,  99 => 12,  95 => 11,  89 => 7,  79 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Eleve | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-12 m-1\">
        <div class=\"card\">
            <div class=\"card-header\">                
                <a href=\"{{ path('app_eleve_delete', {'id': eleve.id}) }}\" class=\"text-decoration-none\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger float-right\"></i> </a>
                <a href=\"{{ path('app_eleve_edit', {'id': eleve.id}) }}\"  class=\"text-decoration-none\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning float-right\"></i> </a>
                <a href=\"{{ path('app_eleve_index') }}\" class=\"text-decoration-none\" title=\"Accueil\"><i class=\"fas fa-home text-primary float-right\"></i></a>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-xs-12 mr-2\">
                        <div class=\"card o-hidden border-0 shadow-lg\">
                            <div class=\"card-body p-0\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 mx-auto\">
                                        <div class=\"p-2\">
                                            <div class=\"text-center\">
                                                <img class=\"col-md-4 mx-auto\" src=\"{{ asset('assets/images/logo.png') }}\" alt=\"logo image\">
                                            </div>
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
                                                    <p> <strong>Dernière modification</strong> : {{ eleve.updatedAt ? eleve.updatedAt|date('Y-m-d à H:i:s') : '' }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Création</strong> : {{ eleve.createdAt ? eleve.createdAt|date('Y-m-d à H:i:s') : '' }}</p>
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


{% endblock %}
", "eleve/show.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\eleve\\show.html.twig");
    }
}
