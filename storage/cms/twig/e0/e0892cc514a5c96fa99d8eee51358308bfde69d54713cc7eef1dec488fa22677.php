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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/partials/site/footer.htm */
class __TwigTemplate_56c5f735fda9859af0a5c39419b56e251c8aeeb32aec4ee43d67e3876f797d6d extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 11, "for" => 17, "partial" => 99);
        $filters = array("escape" => 9, "raw" => 12, "_" => 96);
        $functions = array("form_token" => 119);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'partial'],
                ['escape', 'raw', '_'],
                ['form_token']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- footer area start -->
<footer class=\"footer-area footer-style-1 main-bg\">
  <div class=\"footer-top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xl-4\">
          <div class=\"footer-widget widget contact-widget\">
            <a href=\"/\" class=\"footer-logo\">
              <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "logoDark", [], "any", false, false, true, 9), "path", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\" alt=\"footer logo\" width=\"100\">
            </a>
            ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 11), "site_description", [], "any", false, false, true, 11) == true)) {
            // line 12
            echo "            ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 12), "site_description", [], "any", false, false, true, 12), 12, $this->source);
            echo "
            ";
        } else {
            // line 14
            echo "            ";
        }
        // line 15
        echo "            <ul class=\"contact_info_list\">

              ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 17), "contacts", [], "any", false, false, true, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 18
            echo "
              ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 19) == true)) {
                // line 20
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-envelope\"></i>
                </div>
                <div class=\"details\">
                  ";
                // line 25
                if ((($context["activeLocale"] ?? null) == "rus")) {
                    // line 26
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                    echo "
                  ";
                } else {
                    // line 28
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "addressKg", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                    echo "
                  ";
                }
                // line 30
                echo "                </div>
              </li>
              ";
            } else {
                // line 33
                echo "              ";
            }
            // line 34
            echo "
              ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 35) == true)) {
                // line 36
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-phone\"></i>
                </div>
                <div class=\"details\">
                  (+996) ";
                // line 41
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "
                </div>
              </li>
              ";
            } else {
                // line 45
                echo "              ";
            }
            // line 46
            echo "
              ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 47) == true)) {
                // line 48
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-phone\"></i>
                </div>
                <div class=\"details\">
                  (+996) ";
                // line 53
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                echo "
                </div>
              </li>
              ";
            } else {
                // line 57
                echo "              ";
            }
            // line 58
            echo "
              ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 59) == true)) {
                // line 60
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-map-marker\"></i>
                </div>
                <div class=\"details\">
                  ";
                // line 65
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "
                </div>
              </li>
              ";
            } else {
                // line 69
                echo "              ";
            }
            // line 70
            echo "
              ";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 71) == true)) {
                // line 72
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-map-marker\"></i>
                </div>
                <div class=\"details\">
                  ";
                // line 77
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "
                </div>
              </li>
              ";
            } else {
                // line 81
                echo "              ";
            }
            // line 82
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            </ul>
            <ul class=\"footer-social\">
              ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 86), "social", [], "any", false, false, true, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 87
            echo "              <li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "\"></i></a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </ul>
          </div>
        </div>
        <div class=\"col-xl-8 margin-xlt-80\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-xl-3 offset-xl-1\">
              <div class=\"footer-widget widget widget_nav_menu\">
                <h4 class=\"widget-title\">";
        // line 96
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Useful links"]);
        echo "</h4>
                ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 97)) {
            // line 98
            echo "                <ul class=\"footer-useful-links\">
                  ";
            // line 99
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 99)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 100
            echo "                </ul>
                ";
        }
        // line 102
        echo "
              </div>
            </div>
            <div class=\"col-lg-3\">
              <div class=\"footer-widget widget widget_nav_menu\">
                <h4 class=\"widget-title\">";
        // line 107
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Useful links"]);
        echo "</h4>
                ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 108)) {
            // line 109
            echo "                <ul class=\"footer-useful-links\">
                  ";
            // line 110
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu2"] ?? null), "menuItems", [], "any", false, false, true, 110)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu2"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 111
            echo "                </ul>
                ";
        }
        // line 113
        echo "              </div>
            </div>
            <div class=\"col-lg-5\">
              <h4 style=\"color:#fff\">";
        // line 116
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact us"]);
        echo "</h4>
              <form class=\"contact-form\" data-request=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar"] ?? null), 117, $this->source), "html", null, true);
        echo "::onFormSubmit\">
                <div id=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar"] ?? null), 118, $this->source), "html", null, true);
        echo "_forms_flash\"></div>
                ";
        // line 119
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
                <input type=\"text\" id=\"name\" name=\"Имя\" placeholder=\"";
        // line 120
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Name"]);
        echo "\">
                <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"";
        // line 121
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email"]);
        echo "\" >
                <input type=\"text\" id=\"number\" name=\"телефон\" placeholder=\"";
        // line 122
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phone"]);
        echo "\" >
                <button class=\"btn\" id=\"simpleContactSubmitButton\" type=\"submit\"><i class=\"fa fa-envelope-o\"></i></button>
              </form>
            </div>
            <div class=\"col-xl-11 offset-xl-1\">
              <div class=\"copyright-area-inner copyright-sm margin-top-35\">
                &copy; ";
        // line 128
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 128), "site_name", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer area end -->";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 128,  325 => 122,  321 => 121,  317 => 120,  313 => 119,  309 => 118,  305 => 117,  301 => 116,  296 => 113,  292 => 111,  287 => 110,  284 => 109,  282 => 108,  278 => 107,  271 => 102,  267 => 100,  262 => 99,  259 => 98,  257 => 97,  253 => 96,  244 => 89,  233 => 87,  229 => 86,  225 => 84,  218 => 82,  215 => 81,  208 => 77,  201 => 72,  199 => 71,  196 => 70,  193 => 69,  186 => 65,  179 => 60,  177 => 59,  174 => 58,  171 => 57,  164 => 53,  157 => 48,  155 => 47,  152 => 46,  149 => 45,  142 => 41,  135 => 36,  133 => 35,  130 => 34,  127 => 33,  122 => 30,  116 => 28,  110 => 26,  108 => 25,  101 => 20,  99 => 19,  96 => 18,  92 => 17,  88 => 15,  85 => 14,  79 => 12,  77 => 11,  72 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- footer area start -->
<footer class=\"footer-area footer-style-1 main-bg\">
  <div class=\"footer-top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xl-4\">
          <div class=\"footer-widget widget contact-widget\">
            <a href=\"/\" class=\"footer-logo\">
              <img src=\"{{this.theme.logoDark.path}}\" alt=\"footer logo\" width=\"100\">
            </a>
            {% if this.theme.site_description == true %}
            {{this.theme.site_description | raw}}
            {% else %}
            {% endif %}
            <ul class=\"contact_info_list\">

              {% for contact in this.theme.contacts %}

              {% if contact.address == true %}
              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-envelope\"></i>
                </div>
                <div class=\"details\">
                  {% if activeLocale == 'rus' %}
                  {{contact.address}}
                  {% else %}
                  {{contact.addressKg}}
                  {% endif %}
                </div>
              </li>
              {% else %}
              {% endif %}

              {% if contact.phone1 == true %}
              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-phone\"></i>
                </div>
                <div class=\"details\">
                  (+996) {{contact.phone1}}
                </div>
              </li>
              {% else %}
              {% endif %}

              {% if contact.phone2 == true %}
              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-phone\"></i>
                </div>
                <div class=\"details\">
                  (+996) {{contact.phone2}}
                </div>
              </li>
              {% else %}
              {% endif %}

              {% if contact.user_email1 == true %}
              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-map-marker\"></i>
                </div>
                <div class=\"details\">
                  {{contact.user_email1}}
                </div>
              </li>
              {% else %}
              {% endif %}

              {% if contact.user_email2 == true %}
              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-map-marker\"></i>
                </div>
                <div class=\"details\">
                  {{contact.user_email2}}
                </div>
              </li>
              {% else %}
              {% endif %}

              {% endfor %}
            </ul>
            <ul class=\"footer-social\">
              {% for item in this.theme.social %}
              <li><a href=\"{{item.url}}\"><i class=\"{{item.awesome_icon}}\"></i></a></li>
              {% endfor %}
            </ul>
          </div>
        </div>
        <div class=\"col-xl-8 margin-xlt-80\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-xl-3 offset-xl-1\">
              <div class=\"footer-widget widget widget_nav_menu\">
                <h4 class=\"widget-title\">{{'Useful links'|_}}</h4>
                {% if staticMenu.menuItems %}
                <ul class=\"footer-useful-links\">
                  {% partial staticMenu ~ \"::items\" items=staticMenu.menuItems %}
                </ul>
                {% endif %}

              </div>
            </div>
            <div class=\"col-lg-3\">
              <div class=\"footer-widget widget widget_nav_menu\">
                <h4 class=\"widget-title\">{{'Useful links'|_}}</h4>
                {% if staticMenu.menuItems %}
                <ul class=\"footer-useful-links\">
                  {% partial staticMenu2 ~ \"::items\" items=staticMenu2.menuItems %}
                </ul>
                {% endif %}
              </div>
            </div>
            <div class=\"col-lg-5\">
              <h4 style=\"color:#fff\">{{'Contact us'|_}}</h4>
              <form class=\"contact-form\" data-request=\"{{ sidebar }}::onFormSubmit\">
                <div id=\"{{ sidebar }}_forms_flash\"></div>
                {{ form_token() }}
                <input type=\"text\" id=\"name\" name=\"Имя\" placeholder=\"{{'Name'|_}}\">
                <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"{{'Email'|_}}\" >
                <input type=\"text\" id=\"number\" name=\"телефон\" placeholder=\"{{'Phone'|_}}\" >
                <button class=\"btn\" id=\"simpleContactSubmitButton\" type=\"submit\"><i class=\"fa fa-envelope-o\"></i></button>
              </form>
            </div>
            <div class=\"col-xl-11 offset-xl-1\">
              <div class=\"copyright-area-inner copyright-sm margin-top-35\">
                &copy; {{this.theme.site_name}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer area end -->", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/partials/site/footer.htm", "");
    }
}
