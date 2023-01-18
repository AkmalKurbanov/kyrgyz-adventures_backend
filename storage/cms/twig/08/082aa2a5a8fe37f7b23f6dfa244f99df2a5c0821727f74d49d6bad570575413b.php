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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/partials/site/header.htm */
class __TwigTemplate_67ef8db4e369560854ecf9c00c5908a878c502c72248ec6cd4363e0e96f3b588 extends \Twig\Template
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
        $tags = array("if" => 16, "partial" => 26, "for" => 41);
        $filters = array("escape" => 17);
        $functions = array("form_open" => 39, "form_close" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial', 'for'],
                ['escape'],
                ['form_open', 'form_close']
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
        echo "<!-- navbar start -->
<div class=\"politix-navbar\">
  <nav class=\"navbar navbar-area navbar-expand-lg nav-style-02\">
    <div class=\"container nav-container\">
      <div class=\"responsive-mobile-menu\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#billatrail_main_menu\"
          aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"bar1\"></span>
          <span class=\"bar2\"></span>
          <span class=\"bar3\"></span>
        </button>
      </div>
      <div class=\"logo\">
        <a href=\"/\">
          ";
        // line 16
        if ((($context["activeLocale"] ?? null) == "ru")) {
            // line 17
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 17), "logoHeaderRu", [], "any", false, false, true, 17), "path", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\" alt=\"logo\">
          ";
        } else {
            // line 19
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 19), "logoHeaderKg", [], "any", false, false, true, 19), "path", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\" alt=\"logo\">
          ";
        }
        // line 21
        echo "        </a>
      </div>
      <div class=\"collapse navbar-collapse\" id=\"billatrail_main_menu\">
        ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 24)) {
            // line 25
            echo "        <ul class=\"navbar-nav menu-open\">
          ";
            // line 26
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 26)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["staticMenu"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 27
            echo "        </ul>
        ";
        }
        // line 29
        echo "      </div>
      <div class=\"nav-right-part\">
        <ul>
          <li class=\"search\" id=\"search\">
            <a href=\"#\"><i class=\"fa fa-search\"></i></a>
          </li>
          <li class=\"menubar d-none d-lg-block\" id=\"navigation-button\">
            <a><i class=\"flaticon-menu-button\"></i></a>
          </li>
          <li class=\"localization\">
            ";
        // line 39
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open"]);
        echo "
            <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control\">
              ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["name"]) {
            // line 42
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["code"], 42, $this->source), "html", null, true);
            echo "\" ";
            echo ((($context["code"] == ($context["activeLocale"] ?? null))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 42, $this->source), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </select>

            ";
        // line 46
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- navbar end -->";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 46,  146 => 44,  133 => 42,  129 => 41,  124 => 39,  112 => 29,  108 => 27,  103 => 26,  100 => 25,  98 => 24,  93 => 21,  87 => 19,  81 => 17,  79 => 16,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- navbar start -->
<div class=\"politix-navbar\">
  <nav class=\"navbar navbar-area navbar-expand-lg nav-style-02\">
    <div class=\"container nav-container\">
      <div class=\"responsive-mobile-menu\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#billatrail_main_menu\"
          aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"bar1\"></span>
          <span class=\"bar2\"></span>
          <span class=\"bar3\"></span>
        </button>
      </div>
      <div class=\"logo\">
        <a href=\"/\">
          {% if activeLocale == 'ru' %}
          <img src=\"{{this.theme.logoHeaderRu.path}}\" alt=\"logo\">
          {% else %}
          <img src=\"{{this.theme.logoHeaderKg.path}}\" alt=\"logo\">
          {% endif %}
        </a>
      </div>
      <div class=\"collapse navbar-collapse\" id=\"billatrail_main_menu\">
        {% if staticMenu.menuItems %}
        <ul class=\"navbar-nav menu-open\">
          {% partial staticMenu ~ \"::items\" items=staticMenu.menuItems %}
        </ul>
        {% endif %}
      </div>
      <div class=\"nav-right-part\">
        <ul>
          <li class=\"search\" id=\"search\">
            <a href=\"#\"><i class=\"fa fa-search\"></i></a>
          </li>
          <li class=\"menubar d-none d-lg-block\" id=\"navigation-button\">
            <a><i class=\"flaticon-menu-button\"></i></a>
          </li>
          <li class=\"localization\">
            {{ form_open() }}
            <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control\">
              {% for code, name in locales %}
              <option value=\"{{ code }}\" {{ code == activeLocale ? 'selected' }}>{{ name }}</option>
              {% endfor %}
            </select>

            {{ form_close() }}
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- navbar end -->", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/header.htm", "");
    }
}
