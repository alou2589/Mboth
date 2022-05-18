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

/* quartier/edit.html.twig */
class __TwigTemplate_f0a139c86c865a4eab9a068e552d147117b73a6a8b665c67e8bf3811ae778fdb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quartier/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quartier/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quartier/edit.html.twig", 1);
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
        echo "    <div class=\"row\">
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
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_index");
        echo "\" title=\"Ajout Quartier\" ><i class=\"fas fa-fw fa-home\"></i></a>
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
                                    Edition Quartier ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 29, $this->source); })()), "NomQuartier", [], "any", false, false, false, 29), "html", null, true);
        echo ".
                                </p>
                                <div class=\"row\">
                                    <div class=\"col-md-8 col-xs-12 mx-auto\">
                                        <div class=\"card o-hidden border-0 shadow-lg my-5\">
                                            <div class=\"card-body p-0\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-6 mx-auto\">
                                                        <div class=\"p-5\">
                                                            <div class=\"text-center\">
                                                                <img class=\"col-md-4 mx-auto\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo image\">
                                                            </div>
                                                        </div>
                                                        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        echo "
                                                            <div class=\"form-floating mb-3\">
                                                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "nom_quartier", [], "any", false, false, false, 44), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Quartier", "required" => "required", "autofocus" => "autofocus"]]);
        echo "
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <button type=\"submit\" class=\"btn btn-warning\">Modifier <i class=\"fas fa-edit\"></i></button>
                                                                <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quartier_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["quartier"]) || array_key_exists("quartier", $context) ? $context["quartier"] : (function () { throw new RuntimeError('Variable "quartier" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Accueil <i class=\"fas fa-home\"></i> </a>
                                                            </div>
                                                        ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
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
        return "quartier/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 50,  148 => 48,  141 => 44,  136 => 42,  130 => 39,  117 => 29,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quartier | {{ parent() }}{% endblock %}

{% block body %}
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
                            <a href=\"{{ path('app_quartier_index') }}\" title=\"Ajout Quartier\" ><i class=\"fas fa-fw fa-home\"></i></a>
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
                                    Edition Quartier {{ quartier.NomQuartier}}.
                                </p>
                                <div class=\"row\">
                                    <div class=\"col-md-8 col-xs-12 mx-auto\">
                                        <div class=\"card o-hidden border-0 shadow-lg my-5\">
                                            <div class=\"card-body p-0\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-6 mx-auto\">
                                                        <div class=\"p-5\">
                                                            <div class=\"text-center\">
                                                                <img class=\"col-md-4 mx-auto\" src=\"{{ asset('assets/images/logo.png') }}\" alt=\"logo image\">
                                                            </div>
                                                        </div>
                                                        {{form_start(form, {'attr':{'class':'form'}})}}
                                                            <div class=\"form-floating mb-3\">
                                                                {{form_row(form.nom_quartier, {'attr':{'class':\"form-control\", 'placeholder':\"Quartier\", 'required':\"required\", 'autofocus':\"autofocus\"}})}}
                                                            </div>
                                                            <div class=\"form-group\">
                                                                <button type=\"submit\" class=\"btn btn-warning\">Modifier <i class=\"fas fa-edit\"></i></button>
                                                                <a href=\"{{ path('app_quartier_show', {'id':quartier.id}) }}\" class=\"btn btn-primary\">Accueil <i class=\"fas fa-home\"></i> </a>
                                                            </div>
                                                        {{ form_end(form) }}
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
", "quartier/edit.html.twig", "C:\\Users\\Alou\\Mboth\\templates\\quartier\\edit.html.twig");
    }
}
