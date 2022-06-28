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

/* maladie/show.html.twig */
class __TwigTemplate_b20b19eea5e2da3c64c012e036f99198074635fb6d46144362f221ef01f4610e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maladie/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maladie/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maladie/show.html.twig", 1);
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

        echo "Maladie | ";
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
                <h2>Maladie</h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                    <li>
                        <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                    <li>
                        <a class=\"collapse-link\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maladie_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["maladie"]) || array_key_exists("maladie", $context) ? $context["maladie"] : (function () { throw new RuntimeError('Variable "maladie" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                    </li>
                    <li>
                        <a class=\"collapse-link\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maladie_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["maladie"]) || array_key_exists("maladie", $context) ? $context["maladie"] : (function () { throw new RuntimeError('Variable "maladie" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\"  class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                    </li>
                    <li>
                        <a class=\"collapse-link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maladie_index");
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
                              Maladie ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maladie"]) || array_key_exists("maladie", $context) ? $context["maladie"] : (function () { throw new RuntimeError('Variable "maladie" does not exist.', 35, $this->source); })()), "NomMaladie", [], "any", false, false, false, 35), "html", null, true);
        echo ".
                            </p>
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-xs-12 mr-2\">
                                            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                                                <div class=\"card-body p-1\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-10 col-xs-12 mx-auto\">
                                                            <div class=\"p-1\">
                                                                <ul class=\"list-group\">
                                                                    <li class=\"list-group-item\">
                                                                        <p><strong>Id</strong>: ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maladie"]) || array_key_exists("maladie", $context) ? $context["maladie"] : (function () { throw new RuntimeError('Variable "maladie" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                                                                    </li>
                                                                    <li class=\"list-group-item\">
                                                                        <p><strong>Maladie</strong>: ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maladie"]) || array_key_exists("maladie", $context) ? $context["maladie"] : (function () { throw new RuntimeError('Variable "maladie" does not exist.', 51, $this->source); })()), "NomMaladie", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>
                                                                    </li>
                                                                    <li class=\"list-group-item\">
                                                                        <p><strong>Type Maladie</strong>: ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["maladie"]) || array_key_exists("maladie", $context) ? $context["maladie"] : (function () { throw new RuntimeError('Variable "maladie" does not exist.', 54, $this->source); })()), "TypeMaladie", [], "any", false, false, false, 54), "NomTypeMaladie", [], "any", false, false, false, 54), "html", null, true);
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
        return "maladie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 54,  151 => 51,  145 => 48,  129 => 35,  113 => 22,  107 => 19,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Maladie | {{ parent() }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 \">
            <div class=\"x_panel\">
              <div class=\"x_title\">
                <h2>Maladie</h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                    <li>
                        <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                    <li>
                        <a class=\"collapse-link\" href=\"{{ path('app_maladie_delete', {'id': maladie.id}) }}\" class=\"text-decoration-none float-left m-1\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                    </li>
                    <li>
                        <a class=\"collapse-link\" href=\"{{ path('app_maladie_edit', {'id': maladie.id}) }}\"  class=\"text-decoration-none float-left m-1\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                    </li>
                    <li>
                        <a class=\"collapse-link\" href=\"{{ path('app_maladie_index') }}\" class=\"text-decoration-none float-left m-1\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>
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
                              Maladie {{ maladie.NomMaladie}}.
                            </p>
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-xs-12 mr-2\">
                                            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                                                <div class=\"card-body p-1\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-10 col-xs-12 mx-auto\">
                                                            <div class=\"p-1\">
                                                                <ul class=\"list-group\">
                                                                    <li class=\"list-group-item\">
                                                                        <p><strong>Id</strong>: {{ maladie.id }}</p>
                                                                    </li>
                                                                    <li class=\"list-group-item\">
                                                                        <p><strong>Maladie</strong>: {{ maladie.NomMaladie }}</p>
                                                                    </li>
                                                                    <li class=\"list-group-item\">
                                                                        <p><strong>Type Maladie</strong>: {{ maladie.TypeMaladie.NomTypeMaladie }}</p>
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

", "maladie/show.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\maladie\\show.html.twig");
    }
}
