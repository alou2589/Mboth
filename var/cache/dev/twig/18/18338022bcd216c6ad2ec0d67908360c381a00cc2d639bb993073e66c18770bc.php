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

/* cellule/education.html.twig */
class __TwigTemplate_13fcfc3d31705fea76d3eaeacbc70b970311c246fed018fcc7dbbc1b2f5e263a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cellule/education.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cellule/education.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cellule/education.html.twig", 1);
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
    <h1 class=\"h3 mb-2 text-gray-800\">Cellule</h1>
    <p class=\"mb-4\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 8, $this->source); })()), "NomCellule", [], "any", false, false, false, 8), "html", null, true);
        echo " / <strong class=\"text-primary\">Education</strong>  </p>
    <div class=\"card shadow mb-4\">
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
                            <th class=\"text-center\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["secteurs"]) || array_key_exists("secteurs", $context) ? $context["secteurs"] : (function () { throw new RuntimeError('Variable "secteurs" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["secteur"]) {
            // line 27
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["secteur"], "maisons", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["maison"]) {
                // line 28
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["maison"], "personnes", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
                    // line 29
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["personne"], "eleves", [], "any", false, false, false, 29));
                    foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
                        // line 30
                        echo "                                    <tr>
                                        <td class=\"text-center\">";
                        // line 31
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "id", [], "any", false, false, false, 31), "html", null, true);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 32
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 32), "prenom", [], "any", false, false, false, 32), "html", null, true);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 33
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 34
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 34), "DateNaissance", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true);
                        echo " à ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 34), "LieuNaissance", [], "any", false, false, false, 34), "html", null, true);
                        echo " </td>
                                        <td class=\"text-center\">";
                        // line 35
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "personne", [], "any", false, false, false, 35), "sexe", [], "any", false, false, false, 35), "html", null, true);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 36
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "ecole", [], "any", false, false, false, 36), "NomEcole", [], "any", false, false, false, 36), "html", null, true);
                        echo "</td>
                                        <td class=\"text-center\">";
                        // line 37
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "classe", [], "any", false, false, false, 37), "NomClasse", [], "any", false, false, false, 37), "html", null, true);
                        echo "</td>
                                        <td class=\"text-center\">
                                            <a href=\"";
                        // line 39
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_show", ["id" => twig_get_attribute($this->env, $this->source, $context["eleve"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                        echo "\"><i class=\"fas fa-eye text-info\"></i></a>
                                        </td>
                                    </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "                            
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "                        
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        return "cellule/education.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 46,  184 => 44,  177 => 42,  167 => 39,  162 => 37,  158 => 36,  154 => 35,  148 => 34,  144 => 33,  140 => 32,  136 => 31,  133 => 30,  128 => 29,  123 => 28,  118 => 27,  114 => 26,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cellule | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">    
    <h1 class=\"h3 mb-2 text-gray-800\">Cellule</h1>
    <p class=\"mb-4\">{{cellule.NomCellule}} / <strong class=\"text-primary\">Education</strong>  </p>
    <div class=\"card shadow mb-4\">
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
                            <th class=\"text-center\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for secteur in secteurs %}
                        {% for maison in secteur.maisons %}
                            {% for personne in maison.personnes %}
                                {% for eleve in personne.eleves %}
                                    <tr>
                                        <td class=\"text-center\">{{ eleve.id }}</td>
                                        <td class=\"text-center\">{{ eleve.personne.prenom }}</td>
                                        <td class=\"text-center\">{{ eleve.personne.nom }}</td>
                                        <td class=\"text-center\">{{ eleve.personne.DateNaissance|date('Y-m-d') }} à {{eleve.personne.LieuNaissance}} </td>
                                        <td class=\"text-center\">{{ eleve.personne.sexe }}</td>
                                        <td class=\"text-center\">{{eleve.ecole.NomEcole}}</td>
                                        <td class=\"text-center\">{{eleve.classe.NomClasse}}</td>
                                        <td class=\"text-center\">
                                            <a href=\"{{ path('app_eleve_show', {'id': eleve.id}) }}\"><i class=\"fas fa-eye text-info\"></i></a>
                                        </td>
                                    </tr>
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
", "cellule/education.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\cellule\\education.html.twig");
    }
}
