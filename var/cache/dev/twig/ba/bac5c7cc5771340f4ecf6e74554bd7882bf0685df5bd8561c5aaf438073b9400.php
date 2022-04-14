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

/* quartier/show.html.twig */
class __TwigTemplate_53801be8f4909ef46b7399140f6c0753254dfdd28b1e582e3656e884f5092959 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quartier/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quartier/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quartier/show.html.twig", 1);
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

        echo "Quartier | ";
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_liste_cellule", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"text-decoration-none flaot-right\" title=\"Liste Cellule\"><i class=\"fas fa-list text-info\"></i> </a> 
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-right\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\"  class=\"text-decoration-none float-right\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_index");
        echo "\" class=\"text-decoration-none float-right\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>                
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-xs-12 mr-2\">
                        <div class=\"card o-hidden border-0 shadow-lg my-5\">
                            <div class=\"card-body p-1\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 mx-auto\">
                                        <div class=\"p-5\">
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Quartier</strong>: ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 31, $this->source); })()), "NomQuartier", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Dernière modification</strong> : ";
        // line 34
        ((twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 34, $this->source); })()), "updatedAt", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 34, $this->source); })()), "updatedAt", [], "any", false, false, false, 34), "Y-m-d à H:i:s"), "html", null, true))) : (print ("")));
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Création</strong> : ";
        // line 37
        ((twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37), "Y-m-d à H:i:s"), "html", null, true))) : (print ("")));
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">  
                                                    
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p>
                                                        <strong>Fiche Information:</strong> :                                                                                            
                                                        
                                                        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_personne", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" class=\"text-decoration-none\" title=\"Population\"><i class=\"fas fa-users text-info\"></i> </a>
                                                        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_education", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
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
        return "quartier/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 47,  158 => 46,  146 => 37,  140 => 34,  134 => 31,  128 => 28,  121 => 24,  107 => 13,  103 => 12,  99 => 11,  95 => 10,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quartier | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-12 m-1\">
        <div class=\"card\">
            <div class=\"card-header\"> 
                <a href=\"{{ path('app_quartier_liste_cellule', {'id':quartier.id}) }}\" class=\"text-decoration-none flaot-right\" title=\"Liste Cellule\"><i class=\"fas fa-list text-info\"></i> </a> 
                <a href=\"{{ path('app_quartier_delete', {'id': quartier.id}) }}\" class=\"text-decoration-none float-right\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                <a href=\"{{ path('app_quartier_edit', {'id': quartier.id}) }}\"  class=\"text-decoration-none float-right\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                <a href=\"{{ path('app_quartier_index') }}\" class=\"text-decoration-none float-right\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>                
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-xs-12 mr-2\">
                        <div class=\"card o-hidden border-0 shadow-lg my-5\">
                            <div class=\"card-body p-1\">
                                <div class=\"row\">
                                    <div class=\"col-lg-10 mx-auto\">
                                        <div class=\"p-5\">
                                            <div class=\"text-center\">
                                                <img class=\"col-md-4 mx-auto\" src=\"{{ asset('assets/images/logo.png') }}\" alt=\"logo image\">
                                            </div>
                                            <ul class=\"list-group\">
                                                <li class=\"list-group-item\">
                                                    <p><strong>Id</strong>: {{ quartier.id }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Quartier</strong>: {{ quartier.NomQuartier }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Dernière modification</strong> : {{ quartier.updatedAt ? quartier.updatedAt|date('Y-m-d à H:i:s') : '' }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Création</strong> : {{ quartier.createdAt ? quartier.createdAt|date('Y-m-d à H:i:s') : '' }}</p>
                                                </li>
                                                <li class=\"list-group-item\">  
                                                    
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p>
                                                        <strong>Fiche Information:</strong> :                                                                                            
                                                        
                                                        <a href=\"{{ path('app_quartier_personne', {'id':quartier.id}) }}\" class=\"text-decoration-none\" title=\"Population\"><i class=\"fas fa-users text-info\"></i> </a>
                                                        <a href=\"{{ path('app_quartier_education', {'id':quartier.id}) }}\" class=\"text-decoration-none\" title=\"Education\"><i class=\"fas fa-user-graduate text-primary\"></i> </a>
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

", "quartier/show.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\quartier\\show.html.twig");
    }
}
