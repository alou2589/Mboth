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

/* dashboard/index.html.twig */
class __TwigTemplate_583c28ddfd37e86c94807e43762323eb68c17abe646298da452c0fb32c8954ac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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

        echo "Tableau de Bord | ";
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
        echo "            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"\">
                  <div class=\"x_content\">
                    <div class=\"row\">
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fa fa-city text-dark\"></i>
                          </div>
                          <div class=\"count\">";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["quartiers"]) || array_key_exists("quartiers", $context) ? $context["quartiers"] : (function () { throw new RuntimeError('Variable "quartiers" does not exist.', 15, $this->source); })())), "html", null, true);
        echo "</div>

                          <h3>Quartiers</h3>
                          <p>Nombre de quartiers.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fas fa-tree-city text-dark\"></i>
                          </div>
                          <div class=\"count\">";
        // line 25
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cellules"]) || array_key_exists("cellules", $context) ? $context["cellules"] : (function () { throw new RuntimeError('Variable "cellules" does not exist.', 25, $this->source); })())), "html", null, true);
        echo "</div>

                          <h3>Cellules</h3>
                          <p>Nombre de cellules.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"p-1 icon\"><i class=\"fas fa-building text-dark\"></i>
                          </div>
                          <div class=\"count\">";
        // line 35
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["secteurs"]) || array_key_exists("secteurs", $context) ? $context["secteurs"] : (function () { throw new RuntimeError('Variable "secteurs" does not exist.', 35, $this->source); })())), "html", null, true);
        echo "</div>

                          <h3>Secteurs</h3>
                          <p>Nombre de secteurs.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"p-1 icon\"><i class=\"fas fa-house-chimney text-dark\"></i>
                          </div>
                          <div class=\"count\">";
        // line 45
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["maisons"]) || array_key_exists("maisons", $context) ? $context["maisons"] : (function () { throw new RuntimeError('Variable "maisons" does not exist.', 45, $this->source); })())), "html", null, true);
        echo "</div>

                          <h3>Maisons</h3>
                          <p>Nombre de Maisons.</p>
                        </div>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fas fa-people-group text-dark\"></i>
                          </div>
                          <div class=\"count\">";
        // line 57
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 57, $this->source); })())), "html", null, true);
        echo "</div>

                          <h3>Personnes</h3>
                          <p>Nombre d'habitants.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fa fa-male text-dark\"></i>
                          </div>
                          <div class=\"count\">";
        // line 67
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["hommes"]) || array_key_exists("hommes", $context) ? $context["hommes"] : (function () { throw new RuntimeError('Variable "hommes" does not exist.', 67, $this->source); })())), "html", null, true);
        echo "</div>

                          <h3>Hommes</h3>
                          <p>Nombre d'Hommes.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fa fa-female text-dark\"></i>
                          </div>
                          <div class=\"count\">";
        // line 77
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["femmes"]) || array_key_exists("femmes", $context) ? $context["femmes"] : (function () { throw new RuntimeError('Variable "femmes" does not exist.', 77, $this->source); })())), "html", null, true);
        echo "</div>

                          <h3>Femmes</h3>
                          <p>Nombre de femmes.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fas fa-restroom text-dark\"></i>
                          </div>
                          <div class=\"count\">";
        // line 87
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["celibataires"]) || array_key_exists("celibataires", $context) ? $context["celibataires"] : (function () { throw new RuntimeError('Variable "celibataires" does not exist.', 87, $this->source); })())), "html", null, true);
        echo "</div>
                          <h3>Célibataires</h3>
                          <p>Nombre de Célibataires.</p>
                        </div>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fa fa-user-friends text-dark\"></i></i>
                          </div>
                          <div class=\"count\">";
        // line 98
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["mariés"]) || array_key_exists("mariés", $context) ? $context["mariés"] : (function () { throw new RuntimeError('Variable "mariés" does not exist.', 98, $this->source); })())), "html", null, true);
        echo "</div>

                          <h3>Mariés</h3>
                          <p>Nombre de mariés.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fas fa-users-slash text-dark\"></i></i>
                          </div>
                          <div class=\"count\">";
        // line 108
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["divorcés"]) || array_key_exists("divorcés", $context) ? $context["divorcés"] : (function () { throw new RuntimeError('Variable "divorcés" does not exist.', 108, $this->source); })())), "html", null, true);
        echo "</div>

                          <h3>Divorcés</h3>
                          <p>Nombre de divorcés.</p>
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
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 108,  207 => 98,  193 => 87,  180 => 77,  167 => 67,  154 => 57,  139 => 45,  126 => 35,  113 => 25,  100 => 15,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de Bord | {{ parent() }}{% endblock %}

{% block body %}
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"\">
                  <div class=\"x_content\">
                    <div class=\"row\">
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fa fa-city text-dark\"></i>
                          </div>
                          <div class=\"count\">{{quartiers|length}}</div>

                          <h3>Quartiers</h3>
                          <p>Nombre de quartiers.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fas fa-tree-city text-dark\"></i>
                          </div>
                          <div class=\"count\">{{cellules|length}}</div>

                          <h3>Cellules</h3>
                          <p>Nombre de cellules.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"p-1 icon\"><i class=\"fas fa-building text-dark\"></i>
                          </div>
                          <div class=\"count\">{{secteurs|length}}</div>

                          <h3>Secteurs</h3>
                          <p>Nombre de secteurs.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"p-1 icon\"><i class=\"fas fa-house-chimney text-dark\"></i>
                          </div>
                          <div class=\"count\">{{maisons|length}}</div>

                          <h3>Maisons</h3>
                          <p>Nombre de Maisons.</p>
                        </div>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fas fa-people-group text-dark\"></i>
                          </div>
                          <div class=\"count\">{{personnes|length}}</div>

                          <h3>Personnes</h3>
                          <p>Nombre d'habitants.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fa fa-male text-dark\"></i>
                          </div>
                          <div class=\"count\">{{hommes|length}}</div>

                          <h3>Hommes</h3>
                          <p>Nombre d'Hommes.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fa fa-female text-dark\"></i>
                          </div>
                          <div class=\"count\">{{femmes|length}}</div>

                          <h3>Femmes</h3>
                          <p>Nombre de femmes.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fas fa-restroom text-dark\"></i>
                          </div>
                          <div class=\"count\">{{celibataires|length}}</div>
                          <h3>Célibataires</h3>
                          <p>Nombre de Célibataires.</p>
                        </div>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fa fa-user-friends text-dark\"></i></i>
                          </div>
                          <div class=\"count\">{{mariés|length}}</div>

                          <h3>Mariés</h3>
                          <p>Nombre de mariés.</p>
                        </div>
                      </div>
                      <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6  \">
                        <div class=\"tile-stats\">
                          <div class=\"icon\"><i class=\"fas fa-users-slash text-dark\"></i></i>
                          </div>
                          <div class=\"count\">{{divorcés|length}}</div>

                          <h3>Divorcés</h3>
                          <p>Nombre de divorcés.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
{% endblock %}
", "dashboard/index.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\dashboard\\index.html.twig");
    }
}
