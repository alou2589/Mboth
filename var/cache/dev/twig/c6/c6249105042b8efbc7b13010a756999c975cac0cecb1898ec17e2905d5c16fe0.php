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

/* maison/education.html.twig */
class __TwigTemplate_72f3cea9d8bce451ac7b8ea41726ca1d98f512131baad5063b980e9252c62701 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/education.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/education.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maison/education.html.twig", 1);
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
    <h1 class=\"h3 mb-2 text-gray-800\">Maison</h1>
    <p class=\"mb-4\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 8, $this->source); })()), "NomMaison", [], "any", false, false, false, 8), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 8, $this->source); })()), "CodeMaison", [], "any", false, false, false, 8), "html", null, true);
        echo " / <strong class=\"text-primary\">Education</strong>  </p>
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">
                <a class=\"btn btn-success\" href=\"#\">Ajout <i class=\"fas fa-fw fa-plus\"></i></a>
            </h6>
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
                            <th class=\"text-center\">Ecole</th>
                            <th class=\"text-center\">Classe</th>
                            <th class=\"text-center\">Dernière Modification</th>
                            <th class=\"text-center\">Date de Création</th>
                            <th class=\"text-center\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 34
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["personne"], "eleves", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
                // line 35
                echo "                            <tr>
                                <td class=\"text-center\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 37), "prenom", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 38), "nom", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 39), "DateNaissance", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 39), "LieuNaissance", [], "any", false, false, false, 39), "html", null, true);
                echo " </td>
                                <td class=\"text-center\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 40), "sexe", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "ecole", [], "any", false, false, false, 41), "NomEcole", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "classe", [], "any", false, false, false, 42), "NomClasse", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 43
                ((twig_get_attribute($this->env, $this->source, $context["eleve"], "updatedAt", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "updatedAt", [], "any", false, false, false, 43), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</td>
                                <td class=\"text-center\">";
                // line 44
                ((twig_get_attribute($this->env, $this->source, $context["eleve"], "createdAt", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "createdAt", [], "any", false, false, false, 44), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</td>
                                <td class=\"text-center\">
                                    <a href=\"#\"><i class=\"fas fa-eye text-info\"></i></a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        return "maison/education.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 51,  181 => 50,  169 => 44,  165 => 43,  161 => 42,  157 => 41,  153 => 40,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  132 => 35,  127 => 34,  123 => 33,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Maison | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">    
    <h1 class=\"h3 mb-2 text-gray-800\">Maison</h1>
    <p class=\"mb-4\">{{maison.NomMaison}}/{{maison.CodeMaison}} / <strong class=\"text-primary\">Education</strong>  </p>
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">
                <a class=\"btn btn-success\" href=\"#\">Ajout <i class=\"fas fa-fw fa-plus\"></i></a>
            </h6>
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
                            <th class=\"text-center\">Ecole</th>
                            <th class=\"text-center\">Classe</th>
                            <th class=\"text-center\">Dernière Modification</th>
                            <th class=\"text-center\">Date de Création</th>
                            <th class=\"text-center\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for personne in personnes %}
                        {% for eleve in personne.eleves %}
                            <tr>
                                <td class=\"text-center\">{{ eleve.id }}</td>
                                <td class=\"text-center\">{{ eleve.personne.prenom }}</td>
                                <td class=\"text-center\">{{ eleve.personne.nom }}</td>
                                <td class=\"text-center\">{{ eleve.personne.DateNaissance|date('Y-m-d') }} à {{eleve.personne.LieuNaissance}} </td>
                                <td class=\"text-center\">{{ eleve.personne.sexe }}</td>
                                <td class=\"text-center\">{{eleve.ecole.NomEcole}}</td>
                                <td class=\"text-center\">{{eleve.classe.NomClasse}}</td>
                                <td class=\"text-center\">{{ eleve.updatedAt ? eleve.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                                <td class=\"text-center\">{{ eleve.createdAt ? eleve.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                                <td class=\"text-center\">
                                    <a href=\"#\"><i class=\"fas fa-eye text-info\"></i></a>
                                </td>
                            </tr>
                        {% endfor %}
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "maison/education.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\maison\\education.html.twig");
    }
}
