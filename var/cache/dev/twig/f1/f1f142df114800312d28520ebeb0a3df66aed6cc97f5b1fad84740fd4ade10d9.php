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

/* classe/show.html.twig */
class __TwigTemplate_841028e8eec93a01d411a8ef20eba5bf804ea55f8bb4e1aab1a96036833bc846 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "classe/show.html.twig", 1);
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

        echo "Classe | ";
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"text-decoration-none\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger float-right\"></i> </a>
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\"  class=\"text-decoration-none\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning float-right\"></i> </a>
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_index");
        echo "\" class=\"text-decoration-none\" title=\"Accueil\"><i class=\"fas fa-home text-primary float-right\"></i></a>
            </div>
        </div>
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
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo image\">
                                    </div>
                                        <ul class=\"list-group\">
                                            <li class=\"list-group-item\">
                                                <p><strong>Id</strong>: ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
                                            </li>
                                            <li class=\"list-group-item\">
                                                <p><strong>Classe</strong>: ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 32, $this->source); })()), "NomClasse", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
                                            </li>
                                            <li class=\"list-group-item\">
                                                <p><strong>Niveau</strong>: ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 35, $this->source); })()), "niveauEtude", [], "any", false, false, false, 35), "NomNiveauEtude", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>
                                            </li>
                                            <li class=\"list-group-item\">
                                                <p> <strong>Dernière modification</strong> : ";
        // line 38
        ((twig_get_attribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 38, $this->source); })()), "updatedAt", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 38, $this->source); })()), "updatedAt", [], "any", false, false, false, 38), "Y-m-d à H:i:s"), "html", null, true))) : (print ("")));
        echo "</p>
                                            </li>
                                            <li class=\"list-group-item\">
                                                <p> <strong>Création</strong> : ";
        // line 41
        ((twig_get_attribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 41, $this->source); })()), "createdAt", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 41, $this->source); })()), "createdAt", [], "any", false, false, false, 41), "Y-m-d à H:i:s"), "html", null, true))) : (print ("")));
        echo "</p>
                                            </li>
                                            <li class=\"list-group-item\">  
                                                <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe_liste_eleve", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-right\" title=\"Liste Eleve\"><i class=\"fas fa-user-graduate text-info\"></i> </a>
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "classe/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 44,  150 => 41,  144 => 38,  138 => 35,  132 => 32,  126 => 29,  119 => 25,  103 => 12,  99 => 11,  95 => 10,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Classe | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-12 m-1\">
        <div class=\"card\">
            <div class=\"card-header\">
                <a href=\"{{ path('app_classe_delete', {'id': classe.id}) }}\" class=\"text-decoration-none\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger float-right\"></i> </a>
                <a href=\"{{ path('app_classe_edit', {'id': classe.id}) }}\"  class=\"text-decoration-none\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning float-right\"></i> </a>
                <a href=\"{{ path('app_classe_index') }}\" class=\"text-decoration-none\" title=\"Accueil\"><i class=\"fas fa-home text-primary float-right\"></i></a>
            </div>
        </div>
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
                                                <p><strong>Id</strong>: {{ classe.id }}</p>
                                            </li>
                                            <li class=\"list-group-item\">
                                                <p><strong>Classe</strong>: {{ classe.NomClasse }}</p>
                                            </li>
                                            <li class=\"list-group-item\">
                                                <p><strong>Niveau</strong>: {{ classe.niveauEtude.NomNiveauEtude }}</p>
                                            </li>
                                            <li class=\"list-group-item\">
                                                <p> <strong>Dernière modification</strong> : {{ classe.updatedAt ? classe.updatedAt|date('Y-m-d à H:i:s') : '' }}</p>
                                            </li>
                                            <li class=\"list-group-item\">
                                                <p> <strong>Création</strong> : {{ classe.createdAt ? classe.createdAt|date('Y-m-d à H:i:s') : '' }}</p>
                                            </li>
                                            <li class=\"list-group-item\">  
                                                <a href=\"{{ path('app_classe_liste_eleve', {'id':classe.id}) }}\" class=\"text-decoration-none float-right\" title=\"Liste Eleve\"><i class=\"fas fa-user-graduate text-info\"></i> </a>
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

{% endblock %}", "classe/show.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\classe\\show.html.twig");
    }
}
