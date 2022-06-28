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

/* point_focal/partials/_navbar.html.twig */
class __TwigTemplate_c2bc6cd71d70acdf788e45442b117b349b42f959a7f182f4efcfc9dc413d57e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_focal/partials/_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "point_focal/partials/_navbar.html.twig"));

        // line 1
        echo "
          <nav class=\"navbar header-navbar pcoded-header\">
              <div class=\"navbar-wrapper\">
                  <div class=\"navbar-logo\">
                      <a class=\"mobile-menu waves-effect waves-light\" id=\"mobile-collapse\" href=\"#!\">
                          <i class=\"ti-menu\"></i>
                      </a>
                      <div class=\"mobile-search waves-effect waves-light\">
                          <div class=\"header-search\">
                              <div class=\"main-search morphsearch-search\">
                                  <div class=\"input-group\">
                                      <span class=\"input-group-addon search-close\"><i class=\"ti-close\"></i></span>
                                      <input type=\"text\" class=\"form-control\" placeholder=\"Enter Keyword\">
                                      <span class=\"input-group-addon search-btn\"><i class=\"ti-search\"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href=\"index.html\">
                          <img class=\"img-fluid\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-mini.png"), "html", null, true);
        echo "\" alt=\"Theme-Logo\" width=\"50\" />
                      </a>
                      <a class=\"mobile-options waves-effect waves-light\">
                          <i class=\"ti-more\"></i>
                      </a>
                  </div>
                
                  <div class=\"navbar-container container-fluid\">
                      <ul class=\"nav-left\">
                          <li>
                              <div class=\"sidebar_toggle\"><a href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a></div>
                          </li>
                          <li class=\"header-search\">
                              <div class=\"main-search morphsearch-search\">
                                  <div class=\"input-group\">
                                      <span class=\"input-group-addon search-close\"><i class=\"ti-close\"></i></span>
                                      <input type=\"text\" class=\"form-control\">
                                      <span class=\"input-group-addon search-btn\"><i class=\"ti-search\"></i></span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <a href=\"#!\" onclick=\"javascript:toggleFullScreen()\" class=\"waves-effect waves-light\">
                                  <i class=\"ti-fullscreen\"></i>
                              </a>
                          </li>
                      </ul>
                      <ul class=\"nav-right\">
                          <li class=\"header-notification\">
                              <a href=\"#!\" class=\"waves-effect waves-light\">
                                  <i class=\"ti-bell\"></i>
                                  <span class=\"badge bg-c-red\"></span>
                              </a>
                              <ul class=\"show-notification\">
                                  <li>
                                      <h6>Notifications</h6>
                                      <label class=\"label label-danger\">New</label>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <div class=\"media\">
                                          <img class=\"d-flex align-self-center img-radius\" src=\"assets/images/avatar-2.jpg\" alt=\"Generic placeholder image\">
                                          <div class=\"media-body\">
                                              <h5 class=\"notification-user\">John Doe</h5>
                                              <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class=\"notification-time\">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <div class=\"media\">
                                          <img class=\"d-flex align-self-center img-radius\" src=\"assets/images/avatar-4.jpg\" alt=\"Generic placeholder image\">
                                          <div class=\"media-body\">
                                              <h5 class=\"notification-user\">Joseph William</h5>
                                              <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class=\"notification-time\">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <div class=\"media\">
                                          <img class=\"d-flex align-self-center img-radius\" src=\"assets/images/avatar-3.jpg\" alt=\"Generic placeholder image\">
                                          <div class=\"media-body\">
                                              <h5 class=\"notification-user\">Sara Soudein</h5>
                                              <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class=\"notification-time\">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </li>
                          <li class=\"user-profile header-notification\">
                              <a href=\"#!\" class=\"waves-effect waves-light\">
                                  <i class=\"ti-user\"></i>
                                  <span>John Doe</span>
                                  <i class=\"ti-angle-down\"></i>
                              </a>
                              <ul class=\"show-notification profile-notification\">
                                  <li class=\"waves-effect waves-light\">
                                      <a href=\"#!\">
                                          <i class=\"ti-settings\"></i> Settings
                                      </a>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <a href=\"user-profile.html\">
                                          <i class=\"ti-user\"></i> Profile
                                      </a>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <a href=\"email-inbox.html\">
                                          <i class=\"ti-email\"></i> My Messages
                                      </a>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <a href=\"auth-lock-screen.html\">
                                          <i class=\"ti-lock\"></i> Lock Screen
                                      </a>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <a href=\"auth-normal-sign-in.html\">
                                          <i class=\"ti-layout-sidebar-left\"></i> Logout
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "point_focal/partials/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
          <nav class=\"navbar header-navbar pcoded-header\">
              <div class=\"navbar-wrapper\">
                  <div class=\"navbar-logo\">
                      <a class=\"mobile-menu waves-effect waves-light\" id=\"mobile-collapse\" href=\"#!\">
                          <i class=\"ti-menu\"></i>
                      </a>
                      <div class=\"mobile-search waves-effect waves-light\">
                          <div class=\"header-search\">
                              <div class=\"main-search morphsearch-search\">
                                  <div class=\"input-group\">
                                      <span class=\"input-group-addon search-close\"><i class=\"ti-close\"></i></span>
                                      <input type=\"text\" class=\"form-control\" placeholder=\"Enter Keyword\">
                                      <span class=\"input-group-addon search-btn\"><i class=\"ti-search\"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href=\"index.html\">
                          <img class=\"img-fluid\" src=\"{{asset('assets/images/logo-mini.png')}}\" alt=\"Theme-Logo\" width=\"50\" />
                      </a>
                      <a class=\"mobile-options waves-effect waves-light\">
                          <i class=\"ti-more\"></i>
                      </a>
                  </div>
                
                  <div class=\"navbar-container container-fluid\">
                      <ul class=\"nav-left\">
                          <li>
                              <div class=\"sidebar_toggle\"><a href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a></div>
                          </li>
                          <li class=\"header-search\">
                              <div class=\"main-search morphsearch-search\">
                                  <div class=\"input-group\">
                                      <span class=\"input-group-addon search-close\"><i class=\"ti-close\"></i></span>
                                      <input type=\"text\" class=\"form-control\">
                                      <span class=\"input-group-addon search-btn\"><i class=\"ti-search\"></i></span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <a href=\"#!\" onclick=\"javascript:toggleFullScreen()\" class=\"waves-effect waves-light\">
                                  <i class=\"ti-fullscreen\"></i>
                              </a>
                          </li>
                      </ul>
                      <ul class=\"nav-right\">
                          <li class=\"header-notification\">
                              <a href=\"#!\" class=\"waves-effect waves-light\">
                                  <i class=\"ti-bell\"></i>
                                  <span class=\"badge bg-c-red\"></span>
                              </a>
                              <ul class=\"show-notification\">
                                  <li>
                                      <h6>Notifications</h6>
                                      <label class=\"label label-danger\">New</label>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <div class=\"media\">
                                          <img class=\"d-flex align-self-center img-radius\" src=\"assets/images/avatar-2.jpg\" alt=\"Generic placeholder image\">
                                          <div class=\"media-body\">
                                              <h5 class=\"notification-user\">John Doe</h5>
                                              <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class=\"notification-time\">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <div class=\"media\">
                                          <img class=\"d-flex align-self-center img-radius\" src=\"assets/images/avatar-4.jpg\" alt=\"Generic placeholder image\">
                                          <div class=\"media-body\">
                                              <h5 class=\"notification-user\">Joseph William</h5>
                                              <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class=\"notification-time\">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <div class=\"media\">
                                          <img class=\"d-flex align-self-center img-radius\" src=\"assets/images/avatar-3.jpg\" alt=\"Generic placeholder image\">
                                          <div class=\"media-body\">
                                              <h5 class=\"notification-user\">Sara Soudein</h5>
                                              <p class=\"notification-msg\">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class=\"notification-time\">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </li>
                          <li class=\"user-profile header-notification\">
                              <a href=\"#!\" class=\"waves-effect waves-light\">
                                  <i class=\"ti-user\"></i>
                                  <span>John Doe</span>
                                  <i class=\"ti-angle-down\"></i>
                              </a>
                              <ul class=\"show-notification profile-notification\">
                                  <li class=\"waves-effect waves-light\">
                                      <a href=\"#!\">
                                          <i class=\"ti-settings\"></i> Settings
                                      </a>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <a href=\"user-profile.html\">
                                          <i class=\"ti-user\"></i> Profile
                                      </a>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <a href=\"email-inbox.html\">
                                          <i class=\"ti-email\"></i> My Messages
                                      </a>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <a href=\"auth-lock-screen.html\">
                                          <i class=\"ti-lock\"></i> Lock Screen
                                      </a>
                                  </li>
                                  <li class=\"waves-effect waves-light\">
                                      <a href=\"auth-normal-sign-in.html\">
                                          <i class=\"ti-layout-sidebar-left\"></i> Logout
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>", "point_focal/partials/_navbar.html.twig", "C:\\Users\\Alou\\OneDrive\\Desktop\\Projets\\Mboth\\templates\\point_focal\\partials\\_navbar.html.twig");
    }
}
