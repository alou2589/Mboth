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

/* cellule/listepersonne.html.twig */
class __TwigTemplate_27004781091b9eae86e5425c646be6414f27ff0efa58cdf74328147696c4af7f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cellule/listepersonne.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cellule/listepersonne.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cellule/listepersonne.html.twig", 1);
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
        echo "    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 \">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Cellule</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
              <li>
                  <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
              </li>
              <li>
                  <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cellule_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" title=\"Ajout Cellule\" ><i class=\"fas fa-fw fa-home\"></i></a>
              </li>
              <li>
                  <a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
              </li>
            </ul>
            <div class=\"clearfix\"></div>
          </div>
          <div class=\"x_content\">
            <div class=\"row\">
              <div class=\"col-sm-12\">
                <div class=\"card-box table-responsive\">
                    <p class=\"text-muted font-13 m-b-30\">
                      Population de la cellule ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 29, $this->source); })()), "NomCellule", [], "any", false, false, false, 29), "html", null, true);
        echo ".
                    </p>
                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                        <thead>
                            <tr>
                                <th class=\"text-center\">Id</th>
                                <th class=\"text-center\">Prenom</th>
                                <th class=\"text-center\">Nom</th>
                                <th class=\"text-center\">Date et Lieu de Naissance</th>
                                <th class=\"text-center\">Sexe</th>
                                <th class=\"text-center\">Situation matrimoniale</th>
                                <th class=\"text-center\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cellule"]) || array_key_exists("cellule", $context) ? $context["cellule"] : (function () { throw new RuntimeError('Variable "cellule" does not exist.', 44, $this->source); })()), "secteurs", [], "any", false, false, false, 44));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["secteur"]) {
            // line 45
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["secteur"], "maisons", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["maison"]) {
                // line 46
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["maison"], "personnes", [], "any", false, false, false, 46));
                foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
                    // line 47
                    echo "                                    <tr>
                                        <td class=\"text-center\">";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 48), "html", null, true);
                    echo "</td>
                                        <td class=\"text-center\">";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom", [], "any", false, false, false, 49), "html", null, true);
                    echo "</td>
                                        <td class=\"text-center\">";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom", [], "any", false, false, false, 50), "html", null, true);
                    echo "</td>
                                        <td class=\"text-center\">";
                    // line 51
                    ((twig_get_attribute($this->env, $this->source, $context["personne"], "dateNaissance", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "dateNaissance", [], "any", false, false, false, 51), "Y-m-d"), "html", null, true))) : (print ("")));
                    echo " à ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "lieuNaissance", [], "any", false, false, false, 51), "html", null, true);
                    echo "</td>
                                        <td class=\"text-center\">";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "sexe", [], "any", false, false, false, 52), "html", null, true);
                    echo "</td>
                                        <td class=\"text-center\">";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "situationMatrimoniale", [], "any", false, false, false, 53), "html", null, true);
                    echo "</td>
                                        <td class=\"text-center\">
                                            <a href=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_show", ["id" => twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                    echo "\"><i class=\"fas fa-eye text-info\"></i></a>
                                        </td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maison'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "                                <tr>
                                  <td colspan=\"10\">no records found</td>
                                </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                        </tbody>
                    </table>
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
        return "cellule/listepersonne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 65,  201 => 61,  196 => 60,  190 => 59,  180 => 55,  175 => 53,  171 => 52,  165 => 51,  161 => 50,  157 => 49,  153 => 48,  150 => 47,  145 => 46,  140 => 45,  135 => 44,  117 => 29,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Secteur | {{ parent() }}{% endblock %}

{% block body %}
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 \">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Cellule</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
              <li>
                  <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
              </li>
              <li>
                  <a href=\"{{ path('app_cellule_show', {'id':cellule.id}) }}\" title=\"Ajout Cellule\" ><i class=\"fas fa-fw fa-home\"></i></a>
              </li>
              <li>
                  <a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
              </li>
            </ul>
            <div class=\"clearfix\"></div>
          </div>
          <div class=\"x_content\">
            <div class=\"row\">
              <div class=\"col-sm-12\">
                <div class=\"card-box table-responsive\">
                    <p class=\"text-muted font-13 m-b-30\">
                      Population de la cellule {{ cellule.NomCellule }}.
                    </p>
                    <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                        <thead>
                            <tr>
                                <th class=\"text-center\">Id</th>
                                <th class=\"text-center\">Prenom</th>
                                <th class=\"text-center\">Nom</th>
                                <th class=\"text-center\">Date et Lieu de Naissance</th>
                                <th class=\"text-center\">Sexe</th>
                                <th class=\"text-center\">Situation matrimoniale</th>
                                <th class=\"text-center\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for secteur in cellule.secteurs %}
                            {% for maison in secteur.maisons %}
                                {% for personne in maison.personnes %}
                                    <tr>
                                        <td class=\"text-center\">{{ personne.id }}</td>
                                        <td class=\"text-center\">{{ personne.prenom }}</td>
                                        <td class=\"text-center\">{{ personne.nom }}</td>
                                        <td class=\"text-center\">{{ personne.dateNaissance ? personne.dateNaissance|date('Y-m-d') : '' }} à {{ personne.lieuNaissance }}</td>
                                        <td class=\"text-center\">{{ personne.sexe }}</td>
                                        <td class=\"text-center\">{{ personne.situationMatrimoniale }}</td>
                                        <td class=\"text-center\">
                                            <a href=\"{{ path('app_personne_show', {'id':personne.id}) }}\"><i class=\"fas fa-eye text-info\"></i></a>
                                        </td>
                                    </tr>
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
        </div>
      </div>
    </div>
{% endblock %}
", "cellule/listepersonne.html.twig", "C:\\Users\\Alou\\Mboth\\templates\\cellule\\listepersonne.html.twig");
    }
}
