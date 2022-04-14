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

/* secteur/index.html.twig */
class __TwigTemplate_e16fb5c3e09db1e133816a51e0366954bd144b3ac8ff4c6352f49d470a21ba76 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "secteur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "secteur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "secteur/index.html.twig", 1);
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

        echo "Secteur | ";
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
    <p class=\"mb-4\">Les secteurs se situant à Mboth </p>
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <a class=\"float-right\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secteur_new");
        echo "\"><i class=\"fas fa-fw fa-plus-circle text-success\"></i></a>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hovered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Secteur</th>
                            <th class=\"text-center\">Cellule</th>
                            <th class=\"text-center\">UpdatedAt</th>
                            <th class=\"text-center\">CreatedAt</th>
                            <th class=\"text-center\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["secteurs"]) || array_key_exists("secteurs", $context) ? $context["secteurs"] : (function () { throw new RuntimeError('Variable "secteurs" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["secteur"]) {
            // line 28
            echo "                        <tr>
                            <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["secteur"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["secteur"], "NomSecteur", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["secteur"], "cellule", [], "any", false, false, false, 31), "NomCellule", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 32
            ((twig_get_attribute($this->env, $this->source, $context["secteur"], "updatedAt", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["secteur"], "updatedAt", [], "any", false, false, false, 32), "Y-m-d à H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td class=\"text-center\">";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["secteur"], "createdAt", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["secteur"], "createdAt", [], "any", false, false, false, 33), "Y-m-d à H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_secteur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["secteur"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye text-info\" title=\"Détails\"></i></a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "                        <tr>
                            <td class=\"text-center\" colspan=\"5\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        return "secteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 43,  153 => 39,  144 => 35,  139 => 33,  135 => 32,  131 => 31,  127 => 30,  123 => 29,  120 => 28,  115 => 27,  96 => 11,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Secteur | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">    
    <h1 class=\"h3 mb-2 text-gray-800\">Secteur</h1>
    <p class=\"mb-4\">Les secteurs se situant à Mboth </p>
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <a class=\"float-right\" href=\"{{ path('app_secteur_new') }}\"><i class=\"fas fa-fw fa-plus-circle text-success\"></i></a>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hovered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Secteur</th>
                            <th class=\"text-center\">Cellule</th>
                            <th class=\"text-center\">UpdatedAt</th>
                            <th class=\"text-center\">CreatedAt</th>
                            <th class=\"text-center\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for secteur in secteurs %}
                        <tr>
                            <td class=\"text-center\">{{ secteur.id }}</td>
                            <td class=\"text-center\">{{ secteur.NomSecteur }}</td>
                            <td class=\"text-center\">{{ secteur.cellule.NomCellule }}</td>
                            <td class=\"text-center\">{{ secteur.updatedAt ? secteur.updatedAt|date('Y-m-d à H:i:s') : '' }}</td>
                            <td class=\"text-center\">{{ secteur.createdAt ? secteur.createdAt|date('Y-m-d à H:i:s') : '' }}</td>
                            <td class=\"text-center\">
                                <a href=\"{{ path('app_secteur_show', {'id': secteur.id}) }}\"><i class=\"fas fa-eye text-info\" title=\"Détails\"></i></a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td class=\"text-center\" colspan=\"5\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "secteur/index.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\secteur\\index.html.twig");
    }
}
