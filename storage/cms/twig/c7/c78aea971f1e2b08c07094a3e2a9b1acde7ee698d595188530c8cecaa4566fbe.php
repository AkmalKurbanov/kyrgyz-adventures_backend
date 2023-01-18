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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/partials/site/footer.htm */
class __TwigTemplate_63d6fa7e990ff8fe986466c01c9d7421b1de755fe069d55679fb59a23d64c29b extends \Twig\Template
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
        $tags = array("if" => 9, "for" => 21, "partial" => 103);
        $filters = array("escape" => 10, "raw" => 16, "_" => 100);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'partial'],
                ['escape', 'raw', '_'],
                []
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
              ";
        // line 9
        if ((($context["activeLocale"] ?? null) == "ru")) {
            // line 10
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 10), "logoFooterRu", [], "any", false, false, true, 10), "path", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\" alt=\"footer logo\">
              ";
        } else {
            // line 12
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 12), "logoFooterKg", [], "any", false, false, true, 12), "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" alt=\"footer logo\">
              ";
        }
        // line 14
        echo "            </a>
            ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 15), "site_description", [], "any", false, false, true, 15) == true)) {
            // line 16
            echo "            ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 16), "site_description", [], "any", false, false, true, 16), 16, $this->source);
            echo "
            ";
        } else {
            // line 18
            echo "            ";
        }
        // line 19
        echo "            <ul class=\"contact_info_list\">

              ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 21), "contacts", [], "any", false, false, true, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 22
            echo "
              ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 23) == true)) {
                // line 24
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-envelope\"></i>
                </div>
                <div class=\"details\">
                  ";
                // line 29
                if ((($context["activeLocale"] ?? null) == "ru")) {
                    // line 30
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo "
                  ";
                } else {
                    // line 32
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "addressKg", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                    echo "
                  ";
                }
                // line 34
                echo "                </div>
              </li>
              ";
            } else {
                // line 37
                echo "              ";
            }
            // line 38
            echo "
              ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 39) == true)) {
                // line 40
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-phone\"></i>
                </div>
                <div class=\"details\">
                  (+996) ";
                // line 45
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "
                </div>
              </li>
              ";
            } else {
                // line 49
                echo "              ";
            }
            // line 50
            echo "
              ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 51) == true)) {
                // line 52
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-phone\"></i>
                </div>
                <div class=\"details\">
                  (+996) ";
                // line 57
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "
                </div>
              </li>
              ";
            } else {
                // line 61
                echo "              ";
            }
            // line 62
            echo "
              ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 63) == true)) {
                // line 64
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-map-marker\"></i>
                </div>
                <div class=\"details\">
                  ";
                // line 69
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "
                </div>
              </li>
              ";
            } else {
                // line 73
                echo "              ";
            }
            // line 74
            echo "
              ";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 75) == true)) {
                // line 76
                echo "              <li class=\"single-info-item\">
                <div class=\"icon\">
                  <i class=\"fa fa-map-marker\"></i>
                </div>
                <div class=\"details\">
                  ";
                // line 81
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo "
                </div>
              </li>
              ";
            } else {
                // line 85
                echo "              ";
            }
            // line 86
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </ul>
            <ul class=\"footer-social\">
              ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 90), "social", [], "any", false, false, true, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 91
            echo "              <li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "\"></i></a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            </ul>
          </div>
        </div>
        <div class=\"col-xl-8 margin-xlt-80\">
          <div class=\"row\">
            <div class=\"col-lg-3 col-xl-3 offset-xl-1\">
              <div class=\"footer-widget widget widget_nav_menu\">
                <h4 class=\"widget-title\">";
        // line 100
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Полезные ссылки"]);
        echo "</h4>
                ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 101)) {
            // line 102
            echo "                <ul class=\"footer-useful-links\">
                  ";
            // line 103
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 103)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 104
            echo "                </ul>
                ";
        }
        // line 106
        echo "
              </div>
            </div>
            <div class=\"col-lg-3\">
              <div class=\"footer-widget widget widget_nav_menu\">
                <h4 class=\"widget-title\">";
        // line 111
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Полезные ссылки"]);
        echo "</h4>
                ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 112)) {
            // line 113
            echo "                <ul class=\"footer-useful-links\">
                  ";
            // line 114
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu2"] ?? null), "menuItems", [], "any", false, false, true, 114)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu2"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 115
            echo "                </ul>
                ";
        }
        // line 117
        echo "              </div>
            </div>
            <div class=\"col-lg-5\">
              <div class=\"footer-widget widget\">
                <h4 class=\"widget-title\">";
        // line 121
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Лента Instagram"]);
        echo "</h4>
                <div id=\"instagram-feed1\"></div>
              </div>
            </div>
            <div class=\"col-xl-11 offset-xl-1\">
              <div class=\"copyright-area-inner copyright-sm margin-top-35\">
                &copy; ";
        // line 127
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Политическая партия Табылга"]);
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
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 127,  314 => 121,  308 => 117,  304 => 115,  299 => 114,  296 => 113,  294 => 112,  290 => 111,  283 => 106,  279 => 104,  274 => 103,  271 => 102,  269 => 101,  265 => 100,  256 => 93,  245 => 91,  241 => 90,  237 => 88,  230 => 86,  227 => 85,  220 => 81,  213 => 76,  211 => 75,  208 => 74,  205 => 73,  198 => 69,  191 => 64,  189 => 63,  186 => 62,  183 => 61,  176 => 57,  169 => 52,  167 => 51,  164 => 50,  161 => 49,  154 => 45,  147 => 40,  145 => 39,  142 => 38,  139 => 37,  134 => 34,  128 => 32,  122 => 30,  120 => 29,  113 => 24,  111 => 23,  108 => 22,  104 => 21,  100 => 19,  97 => 18,  91 => 16,  89 => 15,  86 => 14,  80 => 12,  74 => 10,  72 => 9,  62 => 1,);
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
              {% if activeLocale == 'ru' %}
              <img src=\"{{this.theme.logoFooterRu.path}}\" alt=\"footer logo\">
              {% else %}
              <img src=\"{{this.theme.logoFooterKg.path}}\" alt=\"footer logo\">
              {% endif %}
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
                  {% if activeLocale == 'ru' %}
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
                <h4 class=\"widget-title\">{{'Полезные ссылки'|_}}</h4>
                {% if staticMenu.menuItems %}
                <ul class=\"footer-useful-links\">
                  {% partial staticMenu ~ \"::items\" items=staticMenu.menuItems %}
                </ul>
                {% endif %}

              </div>
            </div>
            <div class=\"col-lg-3\">
              <div class=\"footer-widget widget widget_nav_menu\">
                <h4 class=\"widget-title\">{{'Полезные ссылки'|_}}</h4>
                {% if staticMenu.menuItems %}
                <ul class=\"footer-useful-links\">
                  {% partial staticMenu2 ~ \"::items\" items=staticMenu2.menuItems %}
                </ul>
                {% endif %}
              </div>
            </div>
            <div class=\"col-lg-5\">
              <div class=\"footer-widget widget\">
                <h4 class=\"widget-title\">{{'Лента Instagram'|_}}</h4>
                <div id=\"instagram-feed1\"></div>
              </div>
            </div>
            <div class=\"col-xl-11 offset-xl-1\">
              <div class=\"copyright-area-inner copyright-sm margin-top-35\">
                &copy; {{'Политическая партия Табылга'|_}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer area end -->", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/footer.htm", "");
    }
}
