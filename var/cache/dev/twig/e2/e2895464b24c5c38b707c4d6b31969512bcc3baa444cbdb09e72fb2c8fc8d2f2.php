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

/* quartier/education.html.twig */
class __TwigTemplate_d019751a849affccec2936bcfa2f40a7ec00587c4593cb8325c8588c8700a97a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quartier/education.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quartier/education.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quartier/education.html.twig", 1);
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
    <h1 class=\"h3 mb-2 text-gray-800\">Secteur</h1>
    <p class=\"mb-4\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 8, $this->source); })()), "NomQuartier", [], "any", false, false, false, 8), "html", null, true);
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
                            <th class=\"text-center\">Nom Complet</th>
                            <th class=\"text-center\">Adresse</th>
                            <th class=\"text-center\">Ecole</th>
                            <th class=\"text-center\">Classe</th>
                            <th class=\"text-center\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 29, $this->source); })()), "cellules", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["cellule"]) {
            // line 30
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cellule"], "secteurs", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["secteur"]) {
                // line 31
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["secteur"], "maisons", [], "any", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["maison"]) {
                    // line 32
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["maison"], "personnes", [], "any", false, false, false, 32));
                    foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
                        // line 33
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["personne"], "eleves", [], "any", false, false, false, 33));
                        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
                            // line 34
                            echo "                                        <tr>
                                            <td class=\"text-center\">";
                            // line 35
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "id", [], "any", false, false, false, 35), "html", null, true);
                            echo "</td>
                                            <td class=\"text-center\">";
                            // line 36
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 36), "prenom", [], "any", false, false, false, 36), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true);
                            echo "</td>
                                            <td class=\"text-center\">";
                            // line 37
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 37), "maison", [], "any", false, false, false, 37), "secteur", [], "any", false, false, false, 37), "NomSecteur", [], "any", false, false, false, 37), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 37), "maison", [], "any", false, false, false, 37), "secteur", [], "any", false, false, false, 37), "cellule", [], "any", false, false, false, 37), "NomCellule", [], "any", false, false, false, 37), "html", null, true);
                            echo "</td>
                                            <td class=\"text-center\">";
                            // line 38
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "ecole", [], "any", false, false, false, 38), "NomEcole", [], "any", false, false, false, 38), "html", null, true);
                            echo "</td>
                                            <td class=\"text-center\">";
                            // line 39
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "classe", [], "any", false, false, false, 39), "NomClasse", [], "any", false, false, false, 39), "html", null, true);
                            echo "</td>
                                            <td class=\"text-center\">
                                                <a href=\"";
                            // line 41
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_show", ["id" => twig_get_attribute($this->env, $this->source, $context["eleve"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                            echo "\"><i class=\"fas fa-eye text-info\"></i></a>
                                            </td>
                                        </tr>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 44
                        echo "                            
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secteur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cellule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        return "quartier/education.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 49,  198 => 48,  192 => 47,  186 => 46,  179 => 44,  169 => 41,  164 => 39,  160 => 38,  154 => 37,  148 => 36,  144 => 35,  141 => 34,  136 => 33,  131 => 32,  126 => 31,  121 => 30,  117 => 29,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quartier | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">    
    <h1 class=\"h3 mb-2 text-gray-800\">Secteur</h1>
    <p class=\"mb-4\">{{quartier.NomQuartier}} / <strong class=\"text-primary\">Education</strong>  </p>
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
                            <th class=\"text-center\">Nom Complet</th>
                            <th class=\"text-center\">Adresse</th>
                            <th class=\"text-center\">Ecole</th>
                            <th class=\"text-center\">Classe</th>
                            <th class=\"text-center\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for cellule in quartier.cellules %}
                        {% for secteur in cellule.secteurs %}
                            {% for maison in secteur.maisons %}
                                {% for personne in maison.personnes %}
                                    {% for eleve in personne.eleves %}
                                        <tr>
                                            <td class=\"text-center\">{{ eleve.id }}</td>
                                            <td class=\"text-center\">{{ eleve.personne.prenom }} {{ eleve.personne.nom }}</td>
                                            <td class=\"text-center\">{{ eleve.personne.maison.secteur.NomSecteur }}/{{eleve.personne.maison.secteur.cellule.NomCellule}}</td>
                                            <td class=\"text-center\">{{eleve.ecole.NomEcole}}</td>
                                            <td class=\"text-center\">{{eleve.classe.NomClasse}}</td>
                                            <td class=\"text-center\">
                                                <a href=\"{{ path('app_eleve_show', {'id':eleve.id}) }}\"><i class=\"fas fa-eye text-info\"></i></a>
                                            </td>
                                        </tr>
                                    {% endfor %}                            
                                {% endfor %}
                            {% endfor %}
                        {% endfor %}
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "quartier/education.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\quartier\\education.html.twig");
    }
}
