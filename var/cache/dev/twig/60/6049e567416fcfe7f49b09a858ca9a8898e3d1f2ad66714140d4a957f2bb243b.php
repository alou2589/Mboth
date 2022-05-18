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

/* cellule/show.html.twig */
class __TwigTemplate_bad9feed729730d106e592cf7b9b00941cb7e8b0f410edb28c2b7c6d0c7ef182 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cellule/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cellule/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cellule/show.html.twig", 1);
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

        echo "Cellule | ";
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
    <div class=\"col-12 m-1\">
        <div class=\"card\">
            <div class=\"card-header\">    
                <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_liste_secteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Liste\"><i class=\"fas fa-list text-info\"></i> </a>                                   
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"><i class=\"fas fa-trash-alt text-danger\"></i> </a>
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_index");
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-xs-12 mr-2\">
                        <div class=\"card o-hidden border-0 shadow-lg\">
                            <div class=\"card-body p-0\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 mx-auto\">
                                        <div class=\"p-2\">
                                            <ul class=\"list-group\">
                                                <li class=\"list-group-item\">
                                                    <p><strong>Id</strong>: ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Cellule</strong>: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 28, $this->source); })()), "Nomcellule", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Quartier</strong>: ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 31, $this->source); })()), "quartier", [], "any", false, false, false, 31), "NomQuartier", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Dernière modification</strong> : ";
        // line 34
        ((twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 34, $this->source); })()), "updatedAt", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 34, $this->source); })()), "updatedAt", [], "any", false, false, false, 34), "Y-m-d à H:i:s"), "html", null, true))) : (print ("")));
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Création</strong> : ";
        // line 37
        ((twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37), "Y-m-d à H:i:s"), "html", null, true))) : (print ("")));
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p>
                                                        <strong>Fiche Information:</strong> : 
                                                        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_personne", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\" class=\"text-decoration-none\" title=\"Liste Personnes\"><i class=\"fas fa-users text-info\"></i> </a>
                                                        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_education", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cellule/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 43,  154 => 42,  146 => 37,  140 => 34,  134 => 31,  128 => 28,  122 => 25,  107 => 13,  103 => 12,  99 => 11,  95 => 10,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cellule | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-12 m-1\">
        <div class=\"card\">
            <div class=\"card-header\">    
                <a href=\"{{ path('app_cellule_liste_secteur', {'id': cellule.id}) }}\" class=\"text-decoration-none float-left m-1\" title=\"Liste\"><i class=\"fas fa-list text-info\"></i> </a>                                   
                <a href=\"{{ path('app_cellule_delete', {'id': cellule.id}) }}\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"><i class=\"fas fa-trash-alt text-danger\"></i> </a>
                <a href=\"{{ path('app_cellule_edit', {'id': cellule.id}) }}\" class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                <a href=\"{{ path('app_cellule_index') }}\" class=\"text-decoration-none float-left m-1\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-xs-12 mr-2\">
                        <div class=\"card o-hidden border-0 shadow-lg\">
                            <div class=\"card-body p-0\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 mx-auto\">
                                        <div class=\"p-2\">
                                            <ul class=\"list-group\">
                                                <li class=\"list-group-item\">
                                                    <p><strong>Id</strong>: {{ cellule.id }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Cellule</strong>: {{ cellule.Nomcellule }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Quartier</strong>: {{ cellule.quartier.NomQuartier }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Dernière modification</strong> : {{ cellule.updatedAt ? cellule.updatedAt|date('Y-m-d à H:i:s') : '' }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Création</strong> : {{ cellule.createdAt ? cellule.createdAt|date('Y-m-d à H:i:s') : '' }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p>
                                                        <strong>Fiche Information:</strong> : 
                                                        <a href=\"{{ path('app_cellule_personne', {'id':cellule.id}) }}\" class=\"text-decoration-none\" title=\"Liste Personnes\"><i class=\"fas fa-users text-info\"></i> </a>
                                                        <a href=\"{{ path('app_cellule_education', {'id':cellule.id}) }}\" class=\"text-decoration-none\" title=\"Education\"><i class=\"fas fa-user-graduate text-primary\"></i> </a>
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

{% endblock %}


", "cellule/show.html.twig", "C:\\Users\\Alou\\Mboth\\templates\\cellule\\show.html.twig");
    }
}
