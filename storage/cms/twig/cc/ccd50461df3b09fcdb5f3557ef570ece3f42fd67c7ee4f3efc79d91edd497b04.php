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

/* /home/a/akmalakmal/tabylga/public_html/themes/tabylga/partials/site/inner_banner.htm */
class __TwigTemplate_a428b40dac731d441dd26580daa593e696708effb0716ff89c2d896e28c39220 extends \Twig\Template
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
        $tags = array("if" => 6, "for" => 9);
        $filters = array("_" => 5, "escape" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['_', 'escape'],
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
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"breadcrumb-inner padding-top-240\">
        <h1 class=\"page-title\">";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source)]);
        echo "</h1>
        ";
        // line 6
        if (($context["breadcrumbs"] ?? null)) {
            // line 7
            echo "        <ul class=\"page-list\">
          <li><a href=\"/\">";
            // line 8
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Главная"]);
            echo "</a></li>
          ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 10
                echo "          <li class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, true, 10)) ? ("active") : (""));
                echo "\">
            <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo " </a>
          </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
        ";
        }
        // line 16
        echo "      </div>
    </div>
  </div>
</div>
<div class=\"breadcrumb-icon\">
  <i class=\"flaticon-fireworks\"></i>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/a/akmalakmal/tabylga/public_html/themes/tabylga/partials/site/inner_banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  101 => 14,  90 => 11,  85 => 10,  81 => 9,  77 => 8,  74 => 7,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"breadcrumb-inner padding-top-240\">
        <h1 class=\"page-title\">{{this.page.title}}</h1>
        {% if breadcrumbs %}
        <ul class=\"page-list\">
          <li><a href=\"/\">{{'Главная'|_}}</a></li>
          {% for breadcrumb in breadcrumbs %}
          <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">
            <a href=\"{{ breadcrumb.url }}\">{{ breadcrumb.title }} </a>
          </li>
          {% endfor %}
        </ul>
        {% endif %}
      </div>
    </div>
  </div>
</div>
<div class=\"breadcrumb-icon\">
  <i class=\"flaticon-fireworks\"></i>
</div>", "/home/a/akmalakmal/tabylga/public_html/themes/tabylga/partials/site/inner_banner.htm", "");
    }
}
