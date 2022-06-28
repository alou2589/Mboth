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

/* niveau_etude/show.html.twig */
class __TwigTemplate_98e8288909e346ab23ea040805dc042359e291714e431b658886daef62fea037 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau_etude/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "niveau_etude/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "niveau_etude/show.html.twig", 1);
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

        echo "Niveau Etude | ";
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
      <div class=\"col-md-12 col-sm-12 \">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Niveau Etude</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_etude_liste_ecole", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["niveau_etude"]) || array_key_exists("niveau_etude", $context) ? $context["niveau_etude"] : (function () { throw new RuntimeError('Variable "niveau_etude" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Liste Ecole\"><i class=\"fas fa-list text-info\"></i> </a> 
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_etude_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["niveau_etude"]) || array_key_exists("niveau_etude", $context) ? $context["niveau_etude"] : (function () { throw new RuntimeError('Variable "niveau_etude" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_etude_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["niveau_etude"]) || array_key_exists("niveau_etude", $context) ? $context["niveau_etude"] : (function () { throw new RuntimeError('Variable "niveau_etude" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\"  class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_niveau_etude_index");
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>
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
                          Niveau d'Etude ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["niveau_etude"]) || array_key_exists("niveau_etude", $context) ? $context["niveau_etude"] : (function () { throw new RuntimeError('Variable "niveau_etude" does not exist.', 38, $this->source); })()), "nomNiveauEtude", [], "any", false, false, false, 38), "html", null, true);
        echo ".
                        </p>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-5 col-xs-12 mr-2\">
                                        <div class=\"card o-hidden border-0 shadow-lg my-5\">
                                            <div class=\"card-body p-1\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-10 col-xs-12 mx-auto\">
                                                        <div class=\"p-1\">
                                                            <ul class=\"list-group\">
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Id</strong>: ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["niveau_etude"]) || array_key_exists("niveau_etude", $context) ? $context["niveau_etude"] : (function () { throw new RuntimeError('Variable "niveau_etude" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Niveau Etude</strong>: ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["niveau_etude"]) || array_key_exists("niveau_etude", $context) ? $context["niveau_etude"] : (function () { throw new RuntimeError('Variable "niveau_etude" does not exist.', 54, $this->source); })()), "NomNiveauEtude", [], "any", false, false, false, 54), "html", null, true);
        echo "</p>
                                                                </li>
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
        return "niveau_etude/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 54,  151 => 51,  135 => 38,  119 => 25,  113 => 22,  107 => 19,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Niveau Etude | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">
      <div class=\"col-md-12 col-sm-12 \">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Niveau Etude</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
                <li>
                    <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_niveau_etude_liste_ecole', {'id':niveau_etude.id}) }}\" class=\"text-decoration-none float-left m-1\" title=\"Liste Ecole\"><i class=\"fas fa-list text-info\"></i> </a> 
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_niveau_etude_delete', {'id': niveau_etude.id}) }}\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_niveau_etude_edit', {'id': niveau_etude.id}) }}\"  class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                </li>
                <li>
                    <a class=\"collapse-link\" href=\"{{ path('app_niveau_etude_index') }}\" class=\"text-decoration-none float-left m-1\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>
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
                          Niveau d'Etude {{ niveau_etude.nomNiveauEtude}}.
                        </p>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-5 col-xs-12 mr-2\">
                                        <div class=\"card o-hidden border-0 shadow-lg my-5\">
                                            <div class=\"card-body p-1\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-10 col-xs-12 mx-auto\">
                                                        <div class=\"p-1\">
                                                            <ul class=\"list-group\">
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Id</strong>: {{ niveau_etude.id }}</p>
                                                                </li>
                                                                <li class=\"list-group-item\">
                                                                    <p><strong>Niveau Etude</strong>: {{ niveau_etude.NomNiveauEtude }}</p>
                                                                </li>
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
            </div>
          </div>
        </div>
      </div>
    </div>

{% endblock %}

", "niveau_etude/show.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\niveau_etude\\show.html.twig");
    }
}
