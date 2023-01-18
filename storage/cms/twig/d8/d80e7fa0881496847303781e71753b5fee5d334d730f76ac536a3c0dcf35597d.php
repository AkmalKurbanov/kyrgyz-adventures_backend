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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/partials/site/sidebar.htm */
class __TwigTemplate_1df3169118be72adfe396d52baba6512dc9395097f49b5ad13f47b3ca457a3cb extends \Twig\Template
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
        $tags = array("if" => 4, "for" => 22);
        $filters = array("escape" => 5, "raw" => 12, "_" => 19);
        $functions = array("form_token" => 64);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
        echo "<button class=\"sidebar-menu-close\"><i class=\"flaticon-close\"></i></button>
   <div class=\"sidebar-inner\">
     <div class=\"sidebar-logo\">
       ";
        // line 4
        if ((($context["activeLocale"] ?? null) == "ru")) {
            // line 5
            echo "       <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "logoSidebarRu", [], "any", false, false, true, 5), "path", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "\" alt=\"logo\" />
       ";
        } else {
            // line 7
            echo "       <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "logoSidebarKg", [], "any", false, false, true, 7), "path", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\" alt=\"logo\" />
       ";
        }
        // line 9
        echo "     </div>
     ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 10), "site_description", [], "any", false, false, true, 10) == true)) {
            // line 11
            echo "     <div class=\"sidemenu-text\">
       ";
            // line 12
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 12), "site_description", [], "any", false, false, true, 12), 12, $this->source);
            echo "
     </div>
     ";
        } else {
            // line 15
            echo "     ";
        }
        // line 16
        echo "

     <div class=\"sidebar-contact\">
       <h4>";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Свяжитесь с нами"]);
        echo "</h4>
       <ul>

         ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 22), "contacts", [], "any", false, false, true, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 23
            echo "
         ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 24) == true)) {
                // line 25
                echo "         <li><i class=\"fa fa-map-marker\"></i>
           ";
                // line 26
                if ((($context["activeLocale"] ?? null) == "ru")) {
                    // line 27
                    echo "           ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                    echo "
           ";
                } else {
                    // line 29
                    echo "           ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "addressKg", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                    echo "
           ";
                }
                // line 31
                echo "         </li>
         ";
            } else {
                // line 33
                echo "         ";
            }
            // line 34
            echo "
         ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 35) == true)) {
                // line 36
                echo "         <li><i class=\"fa fa-phone\"></i>(+996) ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "</li>
         ";
            } else {
                // line 38
                echo "         ";
            }
            // line 39
            echo "
         ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 40) == true)) {
                // line 41
                echo "         <li><i class=\"fa fa-phone\"></i>(+996) ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "</li>
         ";
            } else {
                // line 43
                echo "         ";
            }
            // line 44
            echo "
         ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 45) == true)) {
                // line 46
                echo "         <li><i class=\"fa fa-envelope\"></i>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "</li>
         ";
            } else {
                // line 48
                echo "         ";
            }
            // line 49
            echo "
         ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 50) == true)) {
                // line 51
                echo "         <li><i class=\"fa fa-envelope\"></i>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "</li>
         ";
            } else {
                // line 53
                echo "         ";
            }
            // line 54
            echo "
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
       </ul>
     </div>


     <div class=\"sidebar-subscribe\">
       <form class=\"contact-form\" data-request=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericForm"] ?? null), 62, $this->source), "html", null, true);
        echo "::onFormSubmit\">
         <div id=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericForm"] ?? null), 63, $this->source), "html", null, true);
        echo "_forms_flash\"></div>
         ";
        // line 64
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
         <input type=\"text\" id=\"name\" name=\"Имя\" placeholder=\"";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ваше имя"]);
        echo "\" required>
         <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"";
        // line 66
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ваш email"]);
        echo "\" required>
         <input type=\"text\" id=\"number\" name=\"телефон\" placeholder=\"";
        // line 67
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ваш телефон"]);
        echo "\" required>
         <button class=\"btn\" id=\"simpleContactSubmitButton\" type=\"submit\"><i class=\"fa fa-envelope-o\"></i></button>
       </form>
     </div>
     <div class=\"social-link\">
       <ul>
         ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 73), "social", [], "any", false, false, true, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 74
            echo "         <li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "\"></i></a></li>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "       </ul>
     </div>
   </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 76,  246 => 74,  242 => 73,  233 => 67,  229 => 66,  225 => 65,  221 => 64,  217 => 63,  213 => 62,  205 => 56,  198 => 54,  195 => 53,  189 => 51,  187 => 50,  184 => 49,  181 => 48,  175 => 46,  173 => 45,  170 => 44,  167 => 43,  161 => 41,  159 => 40,  156 => 39,  153 => 38,  147 => 36,  145 => 35,  142 => 34,  139 => 33,  135 => 31,  129 => 29,  123 => 27,  121 => 26,  118 => 25,  116 => 24,  113 => 23,  109 => 22,  103 => 19,  98 => 16,  95 => 15,  89 => 12,  86 => 11,  84 => 10,  81 => 9,  75 => 7,  69 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button class=\"sidebar-menu-close\"><i class=\"flaticon-close\"></i></button>
   <div class=\"sidebar-inner\">
     <div class=\"sidebar-logo\">
       {% if activeLocale == 'ru' %}
       <img src=\"{{this.theme.logoSidebarRu.path}}\" alt=\"logo\" />
       {% else %}
       <img src=\"{{this.theme.logoSidebarKg.path}}\" alt=\"logo\" />
       {% endif %}
     </div>
     {% if this.theme.site_description == true %}
     <div class=\"sidemenu-text\">
       {{this.theme.site_description | raw}}
     </div>
     {% else %}
     {% endif %}


     <div class=\"sidebar-contact\">
       <h4>{{'Свяжитесь с нами'|_}}</h4>
       <ul>

         {% for contact in this.theme.contacts %}

         {% if contact.address == true %}
         <li><i class=\"fa fa-map-marker\"></i>
           {% if activeLocale == 'ru' %}
           {{contact.address}}
           {% else %}
           {{contact.addressKg}}
           {% endif %}
         </li>
         {% else %}
         {% endif %}

         {% if contact.phone1 == true %}
         <li><i class=\"fa fa-phone\"></i>(+996) {{contact.phone1}}</li>
         {% else %}
         {% endif %}

         {% if contact.phone2 == true %}
         <li><i class=\"fa fa-phone\"></i>(+996) {{contact.phone2}}</li>
         {% else %}
         {% endif %}

         {% if contact.user_email1 == true %}
         <li><i class=\"fa fa-envelope\"></i>{{contact.user_email1}}</li>
         {% else %}
         {% endif %}

         {% if contact.user_email2 == true %}
         <li><i class=\"fa fa-envelope\"></i>{{contact.user_email2}}</li>
         {% else %}
         {% endif %}

         {% endfor %}

       </ul>
     </div>


     <div class=\"sidebar-subscribe\">
       <form class=\"contact-form\" data-request=\"{{ genericForm }}::onFormSubmit\">
         <div id=\"{{ genericForm }}_forms_flash\"></div>
         {{ form_token() }}
         <input type=\"text\" id=\"name\" name=\"Имя\" placeholder=\"{{'Ваше имя'|_}}\" required>
         <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"{{'Ваш email'|_}}\" required>
         <input type=\"text\" id=\"number\" name=\"телефон\" placeholder=\"{{'Ваш телефон'|_}}\" required>
         <button class=\"btn\" id=\"simpleContactSubmitButton\" type=\"submit\"><i class=\"fa fa-envelope-o\"></i></button>
       </form>
     </div>
     <div class=\"social-link\">
       <ul>
         {% for item in this.theme.social %}
         <li><a href=\"{{item.url}}\"><i class=\"{{item.awesome_icon}}\"></i></a></li>
         {% endfor %}
       </ul>
     </div>
   </div>", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/sidebar.htm", "");
    }
}
