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

/* personne/edit.html.twig */
class __TwigTemplate_b0007c93c72e6ee0dce6954e5fef4f0816fb8a12ec7176d7f1a6e4bea86b1106 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personne/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personne/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "personne/edit.html.twig", 1);
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
        echo "<div class=\"row\">
    <div class=\"col-md-8 col-xs-12 mx-auto\">
        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <div class=\"row\">
                    <div class=\"col-lg-6 mx-auto\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <img class=\"col-md-4 mx-auto\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo image\">
                            </div>
                            </div>
                            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        echo "
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "maison", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control js-example-basic-single", "placeholder" => "Maison", "required" => "required", "autofocus" => "autofocus"]]);
        echo "
                                </div>
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom d'utilisateur", "required" => "required", "autofocus" => "autofocus"]]);
        echo "
                                </div>
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom d'utilisateur", "required" => "required", "autofocus" => "autofocus"]]);
        echo "
                                </div>
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "date_naissance", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control js-datepicker", "required" => "required", "autofocus" => "autofocus"]]);
        echo "
                                </div>
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "lieu_naissance", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Lieu de Naissance", "required" => "required", "autofocus" => "autofocus"]]);
        echo "
                                </div>
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "sexe", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control js-example-basic-single", "required" => "required", "autofocus" => "autofocus"]]);
        echo "
                                </div>
                                <div class=\"form-floating mb-3\">
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "situation_matrimoniale", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control js-example-basic-single", "required" => "required", "autofocus" => "autofocus"]]);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-warning\">Modifier <i class=\"fas fa-edit\"></i></button>
                                    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_index");
        echo "\" class=\"btn btn-primary\">Accueil <i class=\"fas fa-home\"></i></a>
                                </div>
                            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
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
        return "personne/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 43,  153 => 41,  146 => 37,  140 => 34,  134 => 31,  128 => 28,  122 => 25,  116 => 22,  110 => 19,  105 => 17,  99 => 14,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Population | {{ parent() }}{% endblock %}

{% block body %}
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
                                    {{form_row(form.maison, {'attr':{'class':\"form-control js-example-basic-single\", 'placeholder':\"Maison\", 'required':\"required\", 'autofocus':\"autofocus\"}})}}
                                </div>
                                <div class=\"form-floating mb-3\">
                                    {{form_row(form.prenom, {'attr':{'class':\"form-control\", 'placeholder':\"Nom d'utilisateur\", 'required':\"required\", 'autofocus':\"autofocus\"}})}}
                                </div>
                                <div class=\"form-floating mb-3\">
                                    {{form_row(form.nom, {'attr':{'class':\"form-control\", 'placeholder':\"Nom d'utilisateur\", 'required':\"required\", 'autofocus':\"autofocus\"}})}}
                                </div>
                                <div class=\"form-floating mb-3\">
                                    {{form_row(form.date_naissance, {'attr':{'class':\"form-control js-datepicker\", 'required':\"required\", 'autofocus':\"autofocus\"}})}}
                                </div>
                                <div class=\"form-floating mb-3\">
                                    {{form_row(form.lieu_naissance, {'attr':{'class':\"form-control\", 'placeholder':\"Lieu de Naissance\", 'required':\"required\", 'autofocus':\"autofocus\"}})}}
                                </div>
                                <div class=\"form-floating mb-3\">
                                    {{form_row(form.sexe, {'attr':{'class':\"form-control js-example-basic-single\", 'required':\"required\", 'autofocus':\"autofocus\"}})}}
                                </div>
                                <div class=\"form-floating mb-3\">
                                    {{form_row(form.situation_matrimoniale, {'attr':{'class':\"form-control js-example-basic-single\", 'required':\"required\", 'autofocus':\"autofocus\"}})}}
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-warning\">Modifier <i class=\"fas fa-edit\"></i></button>
                                    <a href=\"{{ path('app_personne_index') }}\" class=\"btn btn-primary\">Accueil <i class=\"fas fa-home\"></i></a>
                                </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "personne/edit.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\personne\\edit.html.twig");
    }
}
