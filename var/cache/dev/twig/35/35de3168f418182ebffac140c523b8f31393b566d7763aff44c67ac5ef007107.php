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

/* personne/show.html.twig */
class __TwigTemplate_2f6beae3570daace3428ac32c4fdd6855b4c2b28283ff3efe9220fd3915a184e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personne/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personne/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "personne/show.html.twig", 1);
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

        echo "Population | ";
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"text-decoration-none\" title=\"Supprimer\"><i class=\"fas fa-trash-alt text-danger float-right\"></i> </a> 
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\"  class=\"text-decoration-none\" title=\"Modifier\"><i class=\"fas fa-edit text-warning float-right\"></i> </a>
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_index");
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
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo image\">
                                            </div>
                                            <ul class=\"list-group\">
                                                <li class=\"list-group-item\">
                                                    <p><strong>Id</strong>: ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Maison</strong>: ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 30, $this->source); })()), "maison", [], "any", false, false, false, 30), "NomMaison", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Secteur/Cellule</strong>: ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 33, $this->source); })()), "maison", [], "any", false, false, false, 33), "secteur", [], "any", false, false, false, 33), "NomSecteur", [], "any", false, false, false, 33), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 33, $this->source); })()), "maison", [], "any", false, false, false, 33), "secteur", [], "any", false, false, false, 33), "cellule", [], "any", false, false, false, 33), "NomCellule", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Quartier</strong>: ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 36, $this->source); })()), "maison", [], "any", false, false, false, 36), "secteur", [], "any", false, false, false, 36), "cellule", [], "any", false, false, false, 36), "quartier", [], "any", false, false, false, 36), "NomQuartier", [], "any", false, false, false, 36), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Prénom</strong>: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 39, $this->source); })()), "prenom", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Nom</strong>: ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 42, $this->source); })()), "nom", [], "any", false, false, false, 42), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Date et Lieu de Naissance</strong>: ";
        // line 45
        ((twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 45, $this->source); })()), "dateNaissance", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 45, $this->source); })()), "dateNaissance", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true))) : (print ("")));
        echo " à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 45, $this->source); })()), "lieuNaissance", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Sexe</strong> : ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 48, $this->source); })()), "sexe", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Situation Matrimoniale</strong> : ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 51, $this->source); })()), "situationMatrimoniale", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>
                                                </li>
                                                <li class=\"list-group-item\"></li>
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
        return "personne/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 51,  170 => 48,  162 => 45,  156 => 42,  150 => 39,  144 => 36,  136 => 33,  130 => 30,  124 => 27,  117 => 23,  103 => 12,  99 => 11,  95 => 10,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Population | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-12 m-1\">
        <div class=\"card\">
            <div class=\"card-header\"> 
                <a href=\"{{ path('app_personne_delete', {'id': personne.id}) }}\" class=\"text-decoration-none\" title=\"Supprimer\"><i class=\"fas fa-trash-alt text-danger float-right\"></i> </a> 
                <a href=\"{{ path('app_personne_edit', {'id': personne.id}) }}\"  class=\"text-decoration-none\" title=\"Modifier\"><i class=\"fas fa-edit text-warning float-right\"></i> </a>
                <a href=\"{{ path('app_personne_index') }}\" class=\"text-decoration-none\" title=\"Accueil\"><i class=\"fas fa-home text-primary float-right\"></i></a>
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
                                                    <p><strong>Id</strong>: {{ personne.id }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Maison</strong>: {{ personne.maison.NomMaison }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Secteur/Cellule</strong>: {{ personne.maison.secteur.NomSecteur }}/{{personne.maison.secteur.cellule.NomCellule}}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Quartier</strong>: {{ personne.maison.secteur.cellule.quartier.NomQuartier }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Prénom</strong>: {{ personne.prenom }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Nom</strong>: {{  personne.nom }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p><strong>Date et Lieu de Naissance</strong>: {{ personne.dateNaissance ? personne.dateNaissance|date('Y-m-d') : '' }} à {{ personne.lieuNaissance }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Sexe</strong> : {{ personne.sexe }}</p>
                                                </li>
                                                <li class=\"list-group-item\">
                                                    <p> <strong>Situation Matrimoniale</strong> : {{ personne.situationMatrimoniale }}</p>
                                                </li>
                                                <li class=\"list-group-item\"></li>
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
", "personne/show.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\personne\\show.html.twig");
    }
}
