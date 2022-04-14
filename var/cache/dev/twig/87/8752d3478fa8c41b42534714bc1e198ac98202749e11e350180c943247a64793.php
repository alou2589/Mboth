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

/* ecole/listeeleve.html.twig */
class __TwigTemplate_6e189083e853d6f59d8d66a46877d98f800be15e67790cab013d64189aa99e9d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ecole/listeeleve.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ecole/listeeleve.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ecole/listeeleve.html.twig", 1);
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

        echo "Eleve | ";
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
    <h1 class=\"h3 mb-2 text-gray-800\">Classe ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 7, $this->source); })()), "NomClasse", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    <p class=\"mb-4\">Liste des élèves </p>
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">
                <a class=\"btn btn-success\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_new");
        echo "\">Ajout <i class=\"fas fa-fw fa-plus\"></i></a>
            </h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hovered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Nom Complet</th>
                            <th class=\"text-center\">Date et Lieu de Naissance</th>
                        </tr>
                    </thead>
                    <tbody>     
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ecole"]) || array_key_exists("ecole", $context) ? $context["ecole"] : (function () { throw new RuntimeError('Variable "ecole" does not exist.', 26, $this->source); })()), "eleves", [], "any", false, false, false, 26));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            echo "        
                                ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "classe", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27) == twig_get_attribute($this->env, $this->source, (isset($context["classe"]) || array_key_exists("classe", $context) ? $context["classe"] : (function () { throw new RuntimeError('Variable "classe" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27))) {
                // line 28
                echo "                                    <tr>
                                        <td class=\"text-center\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                                        <td class=\"text-center\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 30), "prenom", [], "any", false, false, false, 30), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                                        <td class=\"text-center\">";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 31), "DateNaissance", [], "any", false, false, false, 31), "d-m-Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 31), "LieuNaissance", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                                    </tr>                                   
                                ";
            }
            // line 33
            echo " 
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"4\">no records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </tbody>
                </table>
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
        return "ecole/listeeleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 39,  153 => 35,  147 => 33,  139 => 31,  133 => 30,  129 => 29,  126 => 28,  124 => 27,  117 => 26,  100 => 12,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eleve | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">    
    <h1 class=\"h3 mb-2 text-gray-800\">Classe {{classe.NomClasse}}</h1>
    <p class=\"mb-4\">Liste des élèves </p>
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">
                <a class=\"btn btn-success\" href=\"{{ path('app_eleve_new') }}\">Ajout <i class=\"fas fa-fw fa-plus\"></i></a>
            </h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hovered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Nom Complet</th>
                            <th class=\"text-center\">Date et Lieu de Naissance</th>
                        </tr>
                    </thead>
                    <tbody>     
                            {% for eleve in ecole.eleves %}        
                                {% if eleve.classe.id == classe.id %}
                                    <tr>
                                        <td class=\"text-center\">{{ eleve.id }}</td>
                                        <td class=\"text-center\">{{ eleve.personne.prenom }} {{eleve.personne.nom}}</td>
                                        <td class=\"text-center\">{{ eleve.personne.DateNaissance|date('d-m-Y') }} à {{eleve.personne.LieuNaissance}}</td>
                                    </tr>                                   
                                {% endif %} 
                            {% else %}
                                <tr>
                                    <td class=\"text-center\" colspan=\"4\">no records found</td>
                                </tr>
                            {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "ecole/listeeleve.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\ecole\\listeeleve.html.twig");
    }
}
