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

/* maladie/index.html.twig */
class __TwigTemplate_43ac3aa3dd648b5baa14f1835ba22e126af82d869af9889c42d82cebf374c62e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maladie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maladie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maladie/index.html.twig", 1);
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
                  <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maladie_new");
        echo "\" title=\"Ajout Maladie\" ><i class=\"fas fa-fw fa-plus-circle\"></i></a>
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
                    La liste des maladies existant ?? Mboth et l'ensemble des informations.
                  </p>
                  <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Maladie</th>
                            <th class=\"text-center\">Information</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["maladies"]) || array_key_exists("maladies", $context) ? $context["maladies"] : (function () { throw new RuntimeError('Variable "maladies" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["maladie"]) {
            // line 41
            echo "                        <tr>
                            <td class=\"text-center\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maladie"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["maladie"], "NomMaladie", [], "any", false, false, false, 43), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["maladie"], "typemaladie", [], "any", false, false, false, 43), "NomTypeMaladie", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_maladie_show", ["id" => twig_get_attribute($this->env, $this->source, $context["maladie"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye text-info\" title=\"D??tails\"></i></a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "                        <tr>
                            <td class=\"text-center\" colspan=\"5\">Pas de donn??es</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maladie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        return "maladie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 53,  156 => 49,  147 => 45,  140 => 43,  136 => 42,  133 => 41,  128 => 40,  101 => 16,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
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
                  <a href=\"{{ path('app_maladie_new') }}\" title=\"Ajout Maladie\" ><i class=\"fas fa-fw fa-plus-circle\"></i></a>
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
                    La liste des maladies existant ?? Mboth et l'ensemble des informations.
                  </p>
                  <table id=\"datatable-buttons\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Maladie</th>
                            <th class=\"text-center\">Information</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for maladie in maladies %}
                        <tr>
                            <td class=\"text-center\">{{ maladie.id }}</td>
                            <td class=\"text-center\">{{ maladie.NomMaladie}} / {{ maladie.typemaladie.NomTypeMaladie}}</td>
                            <td class=\"text-center\">
                                <a href=\"{{ path('app_maladie_show', {'id': maladie.id}) }}\"><i class=\"fas fa-eye text-info\" title=\"D??tails\"></i></a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td class=\"text-center\" colspan=\"5\">Pas de donn??es</td>
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
", "maladie/index.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\maladie\\index.html.twig");
    }
}
