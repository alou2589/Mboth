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

/* user/show.html.twig */
class __TwigTemplate_c17bb3a55f530a1a9397a1d962bbf0e0cfcfbbf2f6fd94013b1abad655e2458c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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

        echo "Utilisateur | ";
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
                    <div class=\"col-lg-12 mx-auto\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h6 class=\"h6 text-gray-900 mb-4\">Andeu Defar <strong>Mboth</strong></h6>
                            </div>
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item\">
                                        <p><strong>Id</strong>: ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <p><strong>Email</strong>: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <p><strong>Roles</strong>:  
                                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "roles", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 26
            echo "                                                ";
            if (($context["role"] == "ROLE_SUPER_ADMIN")) {
                // line 27
                echo "                                                    Super Administrateur 
                                                ";
            } elseif ((            // line 28
$context["role"] == "ROLE_POINT_FOCAL")) {
                // line 29
                echo "                                                    Point Focal
                                                ";
            } elseif ((            // line 30
$context["role"] == "ROLE_ADMIN")) {
                // line 31
                echo "                                                    Administrateur
                                                ";
            }
            // line 32
            echo "                                            
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  
                                        </p>                                     
                                    </li>
                                    <li class=\"list-group-item\">
                                        <p> <strong>Nom d'Utilisteur</strong> : ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "username", [], "any", false, false, false, 37), "html", null, true);
        echo "</p>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"form-check form-switch\">                                            
                                            ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "active", [], "any", false, false, false, 41) == false)) {
            // line 42
            echo "                                                <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                                                <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Statut:</label>
                                            ";
        } else {
            // line 44
            echo "                               
                                                <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked>
                                                <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\">Statut</label>
                                            ";
        }
        // line 48
        echo "                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">  
                                        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\" class=\"text-decoration-none\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>
                                        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
        echo "\"  class=\"text-decoration-none\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                                        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" class=\"text-decoration-none\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                                    </li>
                                </ul>
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
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 53,  179 => 52,  175 => 51,  170 => 48,  164 => 44,  159 => 42,  157 => 41,  150 => 37,  144 => 33,  137 => 32,  133 => 31,  131 => 30,  128 => 29,  126 => 28,  123 => 27,  120 => 26,  116 => 25,  109 => 21,  103 => 18,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Utilisateur | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"row\">
    <div class=\"col-md-8 col-xs-12 mx-auto\">
        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <div class=\"row\">
                    <div class=\"col-lg-12 mx-auto\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h6 class=\"h6 text-gray-900 mb-4\">Andeu Defar <strong>Mboth</strong></h6>
                            </div>
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item\">
                                        <p><strong>Id</strong>: {{ user.id }}</p>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <p><strong>Email</strong>: {{ user.email }}</p>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <p><strong>Roles</strong>:  
                                            {% for role in user.roles %}
                                                {% if role== \"ROLE_SUPER_ADMIN\" %}
                                                    Super Administrateur 
                                                {% elseif role==\"ROLE_POINT_FOCAL\" %}
                                                    Point Focal
                                                {% elseif role== \"ROLE_ADMIN\" %}
                                                    Administrateur
                                                {% endif %}                                            
                                            {% endfor %}  
                                        </p>                                     
                                    </li>
                                    <li class=\"list-group-item\">
                                        <p> <strong>Nom d'Utilisteur</strong> : {{ user.username }}</p>
                                    </li>
                                    <li class=\"list-group-item\">
                                        <div class=\"form-check form-switch\">                                            
                                            {% if user.active == false %}
                                                <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                                                <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Statut:</label>
                                            {% else %}                               
                                                <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked>
                                                <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\">Statut</label>
                                            {% endif %}
                                        </div>
                                    </li>
                                    <li class=\"list-group-item\">  
                                        <a href=\"{{ path('app_user_index') }}\" class=\"text-decoration-none\" title=\"Accueil\"><i class=\"fas fa-home text-primary\"></i></a>
                                        <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\"  class=\"text-decoration-none\" title=\"Modifier\"> <i class=\"fas fa-edit text-warning\"></i> </a>
                                        <a href=\"{{ path('app_user_delete', {'id': user.id}) }}\" class=\"text-decoration-none\" title=\"Supprimer\"> <i class=\"fas fa-trash-alt text-danger\"></i> </a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "user/show.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\BaseMboth\\templates\\user\\show.html.twig");
    }
}
