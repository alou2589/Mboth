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

/* quartier/index.html.twig */
class __TwigTemplate_48d47f834cb313e891f32cc0806f004ced78a29f5a925cb0198aeb2bec044949 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quartier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quartier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quartier/index.html.twig", 1);
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
        echo "    <div class=\"page-title\">
      <div class=\"title_left\">
        <h3>A.D.M <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" width=\"100\"></h3>
      </div>
      <div class=\"title_right\">
        <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-secondary\" type=\"button\">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 \">
          <div class=\"x_panel\">
            <div class=\"x_title\">
              <h2>Quartier</h2>
              <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                </li>
                <li>
                    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_new");
        echo "\" title=\"Ajout Quartier\" ><i class=\"fas fa-fw fa-plus-circle\"></i></a>
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
                              La liste des quartiers existant à Mboth et l'ensemble des informations.
                            </p>
                            <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                <thead>
                                    <tr>
                                        <th class=\"text-center\">Id</th>
                                        <th class=\"text-center\">Quartier</th>
                                        <th class=\"text-center\">Dernière Modification</th>
                                        <th class=\"text-center\">Création</th>
                                        <th class=\"text-center\">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quartiers"]) || array_key_exists("quartiers", $context) ? $context["quartiers"] : (function () { throw new RuntimeError('Variable "quartiers" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["quartier"]) {
            // line 59
            echo "                                    <tr>
                                        <td class=\"text-center\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quartier"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                        <td class=\"text-center\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quartier"], "nomQuartier", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                        <td class=\"text-center\">";
            // line 62
            ((twig_get_attribute($this->env, $this->source, $context["quartier"], "updatedAt", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quartier"], "updatedAt", [], "any", false, false, false, 62), "Y-m-d à H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                        <td class=\"text-center\">";
            // line 63
            ((twig_get_attribute($this->env, $this->source, $context["quartier"], "createdAt", [], "any", false, false, false, 63)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quartier"], "createdAt", [], "any", false, false, false, 63), "Y-m-d à H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                        <td class=\"text-center\">
                                            <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_show", ["id" => twig_get_attribute($this->env, $this->source, $context["quartier"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye text-info\" title=\"Détails\"></i></a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "                                    <tr>
                                        <td class=\"text-center\" colspan=\"5\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quartier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                </tbody>
                            </table>
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
        return "quartier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 73,  183 => 69,  174 => 65,  169 => 63,  165 => 62,  161 => 61,  157 => 60,  154 => 59,  149 => 58,  120 => 32,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quartier | {{ parent() }}{% endblock %}

{% block body %}
    <div class=\"page-title\">
      <div class=\"title_left\">
        <h3>A.D.M <img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"Logo\" width=\"100\"></h3>
      </div>
      <div class=\"title_right\">
        <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-secondary\" type=\"button\">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 \">
          <div class=\"x_panel\">
            <div class=\"x_title\">
              <h2>Quartier</h2>
              <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                </li>
                <li>
                    <a href=\"{{ path('app_quartier_new') }}\" title=\"Ajout Quartier\" ><i class=\"fas fa-fw fa-plus-circle\"></i></a>
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
                              La liste des quartiers existant à Mboth et l'ensemble des informations.
                            </p>
                            <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                                <thead>
                                    <tr>
                                        <th class=\"text-center\">Id</th>
                                        <th class=\"text-center\">Quartier</th>
                                        <th class=\"text-center\">Dernière Modification</th>
                                        <th class=\"text-center\">Création</th>
                                        <th class=\"text-center\">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for quartier in quartiers %}
                                    <tr>
                                        <td class=\"text-center\">{{ quartier.id }}</td>
                                        <td class=\"text-center\">{{ quartier.nomQuartier }}</td>
                                        <td class=\"text-center\">{{ quartier.updatedAt ? quartier.updatedAt|date('Y-m-d à H:i:s') : '' }}</td>
                                        <td class=\"text-center\">{{ quartier.createdAt ? quartier.createdAt|date('Y-m-d à H:i:s') : '' }}</td>
                                        <td class=\"text-center\">
                                            <a href=\"{{ path('app_quartier_show', {'id': quartier.id}) }}\"><i class=\"fas fa-eye text-info\" title=\"Détails\"></i></a>
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
{% endblock %}
", "quartier/index.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\quartier\\index.html.twig");
    }
}
