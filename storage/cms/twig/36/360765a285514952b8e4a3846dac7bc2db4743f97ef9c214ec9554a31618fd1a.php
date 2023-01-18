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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/partials/site/sidebar.htm */
class __TwigTemplate_4facce5ab3fe8f923bb9230387af448996286111edbb74db3df75d283c91267e extends \Twig\Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<button class=\"sidebar-menu-close\"><i class=\"flaticon-close\"></i></button>
   <div class=\"sidebar-inner\">
     <div class=\"sidebar-logo\">
       <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "logoDark", [], "any", false, false, true, 4), "path", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\" alt=\"logo\" width=\"70\"/>
     </div>
     ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "site_description", [], "any", false, false, true, 6) == true)) {
            // line 7
            echo "     <div class=\"sidemenu-text\">
       ";
            // line 8
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "site_description", [], "any", false, false, true, 8), 8, $this->source);
            echo "
     </div>
     ";
        } else {
            // line 11
            echo "     ";
        }
        // line 12
        echo "

     <div class=\"sidebar-contact\">
       <h4>";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact us"]);
        echo "</h4>
       <ul>

         ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 18), "contacts", [], "any", false, false, true, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 19
            echo "
         ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 20) == true)) {
                // line 21
                echo "         <li><i class=\"fa fa-map-marker\"></i>
          ";
                // line 22
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "           
         </li>
         ";
            } else {
                // line 25
                echo "         ";
            }
            // line 26
            echo "
         ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 27) == true)) {
                // line 28
                echo "         <li><i class=\"fa fa-phone\"></i>(+996) ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</li>
         ";
            } else {
                // line 30
                echo "         ";
            }
            // line 31
            echo "
         ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 32) == true)) {
                // line 33
                echo "         <li><i class=\"fa fa-phone\"></i>(+996) ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "</li>
         ";
            } else {
                // line 35
                echo "         ";
            }
            // line 36
            echo "
         ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 37) == true)) {
                // line 38
                echo "         <li><i class=\"fa fa-envelope\"></i>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "</li>
         ";
            } else {
                // line 40
                echo "         ";
            }
            // line 41
            echo "
         ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 42) == true)) {
                // line 43
                echo "         <li><i class=\"fa fa-envelope\"></i>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</li>
         ";
            } else {
                // line 45
                echo "         ";
            }
            // line 46
            echo "
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
       </ul>
     </div>


     <div class=\"sidebar-subscribe\">
       <form class=\"contact-form\" data-request=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar"] ?? null), 54, $this->source), "html", null, true);
        echo "::onFormSubmit\">
         <div id=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar"] ?? null), 55, $this->source), "html", null, true);
        echo "_forms_flash\"></div>
         ";
        // line 56
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
         <input type=\"text\" id=\"name\" name=\"Имя\" placeholder=\"";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Name"]);
        echo "\">
         <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email"]);
        echo "\" >
         <input type=\"text\" id=\"number\" name=\"телефон\" placeholder=\"";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phone"]);
        echo "\" >
         <button class=\"btn\" id=\"simpleContactSubmitButton\" type=\"submit\"><i class=\"fa fa-envelope-o\"></i></button>
       </form>
     </div>
     <div class=\"social-link\">
       <ul>
         ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 65), "social", [], "any", false, false, true, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            echo "         <li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
            echo "\"></i></a></li>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "       </ul>
     </div>
   </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/partials/site/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 68,  199 => 66,  195 => 65,  186 => 59,  182 => 58,  178 => 57,  174 => 56,  170 => 55,  166 => 54,  158 => 48,  151 => 46,  148 => 45,  142 => 43,  140 => 42,  137 => 41,  134 => 40,  128 => 38,  126 => 37,  123 => 36,  120 => 35,  114 => 33,  112 => 32,  109 => 31,  106 => 30,  100 => 28,  98 => 27,  95 => 26,  92 => 25,  86 => 22,  83 => 21,  81 => 20,  78 => 19,  74 => 18,  68 => 15,  63 => 12,  60 => 11,  54 => 8,  51 => 7,  49 => 6,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button class=\"sidebar-menu-close\"><i class=\"flaticon-close\"></i></button>
   <div class=\"sidebar-inner\">
     <div class=\"sidebar-logo\">
       <img src=\"{{this.theme.logoDark.path}}\" alt=\"logo\" width=\"70\"/>
     </div>
     {% if this.theme.site_description == true %}
     <div class=\"sidemenu-text\">
       {{this.theme.site_description | raw}}
     </div>
     {% else %}
     {% endif %}


     <div class=\"sidebar-contact\">
       <h4>{{'Contact us'|_}}</h4>
       <ul>

         {% for contact in this.theme.contacts %}

         {% if contact.address == true %}
         <li><i class=\"fa fa-map-marker\"></i>
          {{contact.address}}           
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
       <form class=\"contact-form\" data-request=\"{{ sidebar }}::onFormSubmit\">
         <div id=\"{{ sidebar }}_forms_flash\"></div>
         {{ form_token() }}
         <input type=\"text\" id=\"name\" name=\"Имя\" placeholder=\"{{'Name'|_}}\">
         <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"{{'Email'|_}}\" >
         <input type=\"text\" id=\"number\" name=\"телефон\" placeholder=\"{{'Phone'|_}}\" >
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
   </div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/partials/site/sidebar.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "for" => 18);
        static $filters = array("escape" => 4, "raw" => 8, "_" => 15);
        static $functions = array("form_token" => 56);

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
}
