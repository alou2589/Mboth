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

/* quartier/listepersonne.html.twig */
class __TwigTemplate_491a40735356d9fe81cea757e188badce7d37c65ef6c1fb2ed8bb05e9febfafb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quartier/listepersonne.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quartier/listepersonne.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quartier/listepersonne.html.twig", 1);
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
    <h1 class=\"h3 mb-2 text-gray-800\">Maison</h1>
    <p class=\"mb-4\">Population: <strong class=\"text-primary\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 8, $this->source); })()), "NomQuartier", [], "any", false, false, false, 8), "html", null, true);
        echo "</strong> </p>
    <div class=\"card shadow mb-4\">
        <div class=\"card-header\">
            <a class=\"float-right\" href=\"#\"> <i class=\"fas fa-fw fa-plus-circle text-success\"></i></a>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hovered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Prenom</th>
                            <th class=\"text-center\">Nom</th>
                            <th class=\"text-center\">Date et Lieu de Naissance</th>
                            <th class=\"text-center\">Sexe</th>
                            <th class=\"text-center\">Maison</th>
                            <th class=\"text-center\">Situation matrimoniale</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 28, $this->source); })()), "cellules", [], "any", false, false, false, 28));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cellule"]) {
            // line 29
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cellule"], "secteurs", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["secteur"]) {
                // line 30
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["secteur"], "maisons", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["maison"]) {
                    // line 31
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["maison"], "personnes", [], "any", false, false, false, 31));
                    foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
                        // line 32
                        echo "                                    <tr>
                                        <td class=\"text-center\">";
                        // line 33
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 33), "html", null, true);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 34
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom", [], "any", false, false, false, 34), "html", null, true);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 35
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom", [], "any", false, false, false, 35), "html", null, true);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 36
                        ((twig_get_attribute($this->env, $this->source, $context["personne"], "dateNaissance", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "dateNaissance", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
                        echo " à ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "lieuNaissance", [], "any", false, false, false, 36), "html", null, true);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 37
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "sexe", [], "any", false, false, false, 37), "html", null, true);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 38
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["personne"], "maison", [], "any", false, false, false, 38), "NomMaison", [], "any", false, false, false, 38), "html", null, true);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 39
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "situationMatrimoniale", [], "any", false, false, false, 39), "html", null, true);
                        echo "</td>
                                    </tr>                                    
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "                                
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                            
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secteur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "                        <tr>
                            <td colspan=\"10\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cellule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
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
        return "quartier/listepersonne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 50,  193 => 46,  188 => 45,  181 => 43,  174 => 42,  165 => 39,  161 => 38,  157 => 37,  151 => 36,  147 => 35,  143 => 34,  139 => 33,  136 => 32,  131 => 31,  126 => 30,  121 => 29,  116 => 28,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quartier | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">    
    <h1 class=\"h3 mb-2 text-gray-800\">Maison</h1>
    <p class=\"mb-4\">Population: <strong class=\"text-primary\">{{quartier.NomQuartier}}</strong> </p>
    <div class=\"card shadow mb-4\">
        <div class=\"card-header\">
            <a class=\"float-right\" href=\"#\"> <i class=\"fas fa-fw fa-plus-circle text-success\"></i></a>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hovered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Prenom</th>
                            <th class=\"text-center\">Nom</th>
                            <th class=\"text-center\">Date et Lieu de Naissance</th>
                            <th class=\"text-center\">Sexe</th>
                            <th class=\"text-center\">Maison</th>
                            <th class=\"text-center\">Situation matrimoniale</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for cellule in quartier.cellules %}
                        {% for secteur in cellule.secteurs %}
                            {% for maison in secteur.maisons %}
                                {% for personne in maison.personnes %}
                                    <tr>
                                        <td class=\"text-center\">{{ personne.id }}</td>
                                        <td class=\"text-center\">{{ personne.prenom }}</td>
                                        <td class=\"text-center\">{{ personne.nom }}</td>
                                        <td class=\"text-center\">{{ personne.dateNaissance ? personne.dateNaissance|date('Y-m-d') : '' }} à {{ personne.lieuNaissance }}</td>
                                        <td class=\"text-center\">{{ personne.sexe }}</td>
                                        <td class=\"text-center\">{{ personne.maison.NomMaison }}</td>
                                        <td class=\"text-center\">{{ personne.situationMatrimoniale }}</td>
                                    </tr>                                    
                                {% endfor %}
                                
                            {% endfor %}                            
                        {% endfor %}
                        {% else %}
                        <tr>
                            <td colspan=\"10\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "quartier/listepersonne.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\quartier\\listepersonne.html.twig");
    }
}
