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
class __TwigTemplate_4e4ede5b258beb92a713c4f9bec1e6e308d907c6024a3b3279127ab7eadc9c41 extends Template
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

        echo "Point Focal| ";
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
            <h2>Point Focal</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
              <li>
                  <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
              </li>
              <li>
                  <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\" title=\"Ajout Point Focal\" ><i class=\"fas fa-fw fa-plus-circle\"></i></a>
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
                    La liste des cellules existant à Mboth et l'ensemble des informations.
                  </p>
                  <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Email</th>
                            <th class=\"text-center\">Roles</th>
                            <th class=\"text-center\">Pseudo</th>
                            <th class=\"text-center\">Point Focal</th>
                            <th class=\"text-center\">Active</th>
                            <th class=\"text-center\">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 45
            echo "                        ";
            if ((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 45, $this->source); })())) {
                echo "                        
                            <tr>
                                <td class=\"text-center\">";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">
                                ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 51
                    echo "                                    ";
                    if (($context["role"] == "ROLE_ADMIN")) {
                        // line 52
                        echo "                                        Administrateur
                                    ";
                    } elseif ((                    // line 53
$context["role"] == "ROLE_POINT_FOCAL")) {
                        // line 54
                        echo "                                        Point Focal
                                    ";
                    } elseif ((                    // line 55
$context["role"] == "ROLE_SUPER_ADMIN")) {
                        // line 56
                        echo "                                        Super Administrateur
                                    ";
                    }
                    // line 57
                    echo "                                    
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                                </td>
                                <td class=\"text-center\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "personne", [], "any", false, false, false, 61), "Prenom", [], "any", false, false, false, 61), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "personne", [], "any", false, false, false, 61), "Nom", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                                <td class=\"text-center\">
                                    ";
                // line 63
                if ((twig_get_attribute($this->env, $this->source, $context["user"], "active", [], "any", false, false, false, 63) == true)) {
                    // line 64
                    echo "                                        <input type=\"checkbox\" class=\"js-switch\" disabled=\"disabled\" checked=\"checked\" />
                                    ";
                } else {
                    // line 66
                    echo "                                        <input type=\"checkbox\" class=\"js-switch\" disabled=\"disabled\" />
                                    ";
                }
                // line 68
                echo "                                </td>
                                <td class=\"text-center\">
                                    <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\"><i class=\"fas fa-fw fa-eye text-info\"></i></a>
                                    ";
                // line 73
                echo "                                </td>
                            </tr>
                        ";
            } else {
                // line 76
                echo "                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    ";
            }
            // line 80
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
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
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 81,  222 => 80,  216 => 76,  211 => 73,  207 => 70,  203 => 68,  199 => 66,  195 => 64,  193 => 63,  186 => 61,  182 => 60,  179 => 59,  172 => 57,  168 => 56,  166 => 55,  163 => 54,  161 => 53,  158 => 52,  155 => 51,  151 => 50,  146 => 48,  142 => 47,  136 => 45,  132 => 44,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Point Focal| {{ parent() }}{% endblock %}

{% block body %}
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12 \">
        <div class=\"x_panel\">
          <div class=\"x_title\">
            <h2>Point Focal</h2>
            <ul class=\"nav navbar-right panel_toolbox\">
              <li>
                  <a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
              </li>
              <li>
                  <a href=\"{{ path('app_user_new') }}\" title=\"Ajout Point Focal\" ><i class=\"fas fa-fw fa-plus-circle\"></i></a>
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
                    La liste des cellules existant à Mboth et l'ensemble des informations.
                  </p>
                  <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Email</th>
                            <th class=\"text-center\">Roles</th>
                            <th class=\"text-center\">Pseudo</th>
                            <th class=\"text-center\">Point Focal</th>
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
                                <td class=\"text-center\">
                                    {% if user.active == true %}
                                        <input type=\"checkbox\" class=\"js-switch\" disabled=\"disabled\" checked=\"checked\" />
                                    {% else %}
                                        <input type=\"checkbox\" class=\"js-switch\" disabled=\"disabled\" />
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
        </div>
      </div>
    </div>

{% endblock %}
", "user/index.html.twig", "C:\\Users\\Alou\\Desktop\\projets\\Mboth\\templates\\user\\index.html.twig");
    }
}
