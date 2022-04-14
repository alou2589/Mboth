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

/* user/index.html.twig */
class __TwigTemplate_1a167baf359f61a3c3847a2baa42bf791b2d5ba7f99279bb98ab4215853d7e62 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo "Utilisateur| ";
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
    <h1 class=\"h3 mb-2 text-gray-800\">Utilisateurs</h1>
    <p class=\"mb-4\">Les utilisateurs de l'application</p>
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">
                <a class=\"btn btn-success\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Ajout <i class=\"fas fa-fw fa-plus\"></i></a>
            </h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hovered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Email</th>
                            <th class=\"text-center\">Roles</th>
                            <th class=\"text-center\">Pseudo</th>
                            <th class=\"text-center\">Utilisateur</th>
                            <th class=\"text-center\">Active</th>
                            <th class=\"text-center\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 31
            echo "                        ";
            if ((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 31, $this->source); })())) {
                echo "                        
                            <tr>
                                <td class=\"text-center\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">
                                ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 37
                    echo "                                    ";
                    if (($context["role"] == "ROLE_ADMIN")) {
                        // line 38
                        echo "                                        Administrateur
                                    ";
                    } elseif ((                    // line 39
$context["role"] == "ROLE_POINT_FOCAL")) {
                        // line 40
                        echo "                                        Point Focal
                                    ";
                    } elseif ((                    // line 41
$context["role"] == "ROLE_SUPER_ADMIN")) {
                        // line 42
                        echo "                                        Super Administrateur
                                    ";
                    }
                    // line 43
                    echo "                                    
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                                </td>
                                <td class=\"text-center\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "personne", [], "any", false, false, false, 47), "Prenom", [], "any", false, false, false, 47), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "personne", [], "any", false, false, false, 47), "Nom", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                                <td class=\"form-check form-switch text-center\">
                                    ";
                // line 49
                if ((twig_get_attribute($this->env, $this->source, $context["user"], "active", [], "any", false, false, false, 49) == true)) {
                    // line 50
                    echo "                                        <input class=\"form-check-input text-success\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked>
                                    ";
                } else {
                    // line 52
                    echo "                                        <input class=\"form-check-input text-danger\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                                    ";
                }
                // line 54
                echo "                                </td>
                                <td class=\"text-center\">
                                    <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\"><i class=\"fas fa-fw fa-eye text-info\"></i></a>
                                    ";
                // line 59
                echo "                                </td>
                            </tr>
                        ";
            } else {
                // line 62
                echo "                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    ";
            }
            // line 66
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 67,  208 => 66,  202 => 62,  197 => 59,  193 => 56,  189 => 54,  185 => 52,  181 => 50,  179 => 49,  172 => 47,  168 => 46,  165 => 45,  158 => 43,  154 => 42,  152 => 41,  149 => 40,  147 => 39,  144 => 38,  141 => 37,  137 => 36,  132 => 34,  128 => 33,  122 => 31,  118 => 30,  97 => 12,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Utilisateur| {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">    
    <h1 class=\"h3 mb-2 text-gray-800\">Utilisateurs</h1>
    <p class=\"mb-4\">Les utilisateurs de l'application</p>
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">
                <a class=\"btn btn-success\" href=\"{{ path('app_user_new') }}\">Ajout <i class=\"fas fa-fw fa-plus\"></i></a>
            </h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hovered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Email</th>
                            <th class=\"text-center\">Roles</th>
                            <th class=\"text-center\">Pseudo</th>
                            <th class=\"text-center\">Utilisateur</th>
                            <th class=\"text-center\">Active</th>
                            <th class=\"text-center\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for user in users %}
                        {% if users %}                        
                            <tr>
                                <td class=\"text-center\">{{ user.id }}</td>
                                <td class=\"text-center\">{{ user.email }}</td>
                                <td class=\"text-center\">
                                {% for role in user.roles %}
                                    {% if role == 'ROLE_ADMIN' %}
                                        Administrateur
                                    {% elseif role == 'ROLE_POINT_FOCAL' %}
                                        Point Focal
                                    {% elseif role == 'ROLE_SUPER_ADMIN' %}
                                        Super Administrateur
                                    {% endif %}                                    
                                {% endfor %}
                                </td>
                                <td class=\"text-center\">{{ user.username }}</td>
                                <td class=\"text-center\">{{user.personne.Prenom}} {{user.personne.Nom}}</td>
                                <td class=\"form-check form-switch text-center\">
                                    {% if user.active == true %}
                                        <input class=\"form-check-input text-success\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked>
                                    {% else %}
                                        <input class=\"form-check-input text-danger\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                                    {% endif %}
                                </td>
                                <td class=\"text-center\">
                                    <a href=\"{{ path('app_user_show', {'id': user.id}) }}\"><i class=\"fas fa-fw fa-eye text-info\"></i></a>
                                    {#<a href=\"{{ path('app_user_edit', {'id': user.id}) }}\"><i class=\"fas fa-fw fa-edit text-warning\"></i></a>
                                    <a href=\"{{ path('app_user_delete', {'id': user.id}) }}\"><i class=\"fas fa-fw fa-trash-alt text-danger\"></i></a>#}
                                </td>
                            </tr>
                        {% else %}
                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    {% endif %}
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "user/index.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\user\\index.html.twig");
    }
}
