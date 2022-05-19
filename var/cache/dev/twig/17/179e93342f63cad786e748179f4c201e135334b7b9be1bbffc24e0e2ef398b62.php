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

/* personne/index.html.twig */
class __TwigTemplate_d43211f56236cf5ae66ee2a5811bd0a781abdf3c3b60ecf8d9246cdb7b012782 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personne/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personne/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "personne/index.html.twig", 1);
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
        echo "
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 \">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Personne</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
              <li>
                  <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
              </li>
              <li>
                  <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_new");
        echo "\" title=\"Ajout Maison\" ><i class=\"fas fa-fw fa-plus-circle\"></i></a>
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
                    La liste des personnes existant à Mboth et l'ensemble des informations.
                  </p>
                  <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Nom Complet</th>
                            <th class=\"text-center\">Date et Lieu de Naissance</th>
                            <th class=\"text-center\">Sexe</th>
                            <th class=\"text-center\">Adresse</th>
                            <th class=\"text-center\">Situation matrimoniale</th>
                            <th class=\"text-center\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 46
            echo "                            <tr>
                                <td class=\"text-center\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom", [], "any", false, false, false, 48), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">";
            // line 49
            ((twig_get_attribute($this->env, $this->source, $context["personne"], "dateNaissance", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "dateNaissance", [], "any", false, false, false, 49), "Y-m-d"), "html", null, true))) : (print ("")));
            echo " à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "lieuNaissance", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "sexe", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["personne"], "maison", [], "any", false, false, false, 51), "NomMaison", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "situationMatrimoniale", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">
                                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_show", ["id" => twig_get_attribute($this->env, $this->source, $context["personne"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye text-info\"></i></a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "                            <tr>
                                <td class=\"text-center\" colspan=\"5\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </tbody>
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
        return "personne/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 62,  179 => 58,  170 => 54,  165 => 52,  161 => 51,  157 => 50,  151 => 49,  145 => 48,  141 => 47,  138 => 46,  133 => 45,  102 => 17,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Population | {{ parent() }}{% endblock %}

{% block body %}

    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 \">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Personne</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
              <li>
                  <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
              </li>
              <li>
                  <a href=\"{{ path('app_personne_new') }}\" title=\"Ajout Maison\" ><i class=\"fas fa-fw fa-plus-circle\"></i></a>
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
                    La liste des personnes existant à Mboth et l'ensemble des informations.
                  </p>
                  <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Nom Complet</th>
                            <th class=\"text-center\">Date et Lieu de Naissance</th>
                            <th class=\"text-center\">Sexe</th>
                            <th class=\"text-center\">Adresse</th>
                            <th class=\"text-center\">Situation matrimoniale</th>
                            <th class=\"text-center\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for personne in personnes %}
                            <tr>
                                <td class=\"text-center\">{{ personne.id }}</td>
                                <td class=\"text-center\">{{ personne.prenom }} {{ personne.nom }}</td>
                                <td class=\"text-center\">{{ personne.dateNaissance ? personne.dateNaissance|date('Y-m-d') : '' }} à {{ personne.lieuNaissance }}</td>
                                <td class=\"text-center\">{{ personne.sexe }}</td>
                                <td class=\"text-center\">{{ personne.maison.NomMaison }}</td>
                                <td class=\"text-center\">{{ personne.situationMatrimoniale }}</td>
                                <td class=\"text-center\">
                                    <a href=\"{{ path('app_personne_show', {'id': personne.id}) }}\"><i class=\"fas fa-eye text-info\"></i></a>
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
        </div>
      </div>
    </div>
{% endblock %}
", "personne/index.html.twig", "C:\\Users\\Alou\\Mboth\\templates\\personne\\index.html.twig");
    }
}
