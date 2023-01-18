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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/partials/site/banner_mine.htm */
class __TwigTemplate_7d74c6736bb7b25a7810b0eae8033d705c235781a65613b8de42b5e6c8c902b4 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 13);
        $filters = array("escape" => 15, "raw" => 16, "_" => 19);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 6);
        // line 7
        echo "


<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 banner-slider-4\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 14
            echo "      <div class=\"banner-content-style-4 text-center\">
        <h2 class=\"title\" data-animation-in=\"fadeInLeft\">";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</h2>
        <div class=\"description\" data-animation-in=\"fadeInDown\">";
            // line 16
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 16), 16, $this->source);
            echo "</div>
        <div class=\"d-flex justify-content-center margin-top-50\">
          <div class=\"btn-wrapper mr-3\" data-animation-in=\"fadeInDown\">
            <a class=\"btn btn-custom-default\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "link", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Подробнее"]);
            echo "</a>
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </div>
  </div>
</div>
<div class=\"banner4-social\">
  <ul>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 29), "social", [], "any", false, false, true, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "social_name", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/banner_mine.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 32,  123 => 30,  119 => 29,  112 => 24,  99 => 19,  93 => 16,  89 => 15,  86 => 14,  82 => 13,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}



<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 banner-slider-4\">
      {% for record in records %}
      <div class=\"banner-content-style-4 text-center\">
        <h2 class=\"title\" data-animation-in=\"fadeInLeft\">{{record.title}}</h2>
        <div class=\"description\" data-animation-in=\"fadeInDown\">{{ record.description | raw }}</div>
        <div class=\"d-flex justify-content-center margin-top-50\">
          <div class=\"btn-wrapper mr-3\" data-animation-in=\"fadeInDown\">
            <a class=\"btn btn-custom-default\" href=\"{{record.link}}\">{{'Подробнее'|_}}</a>
          </div>
        </div>
      </div>
      {% endfor %}
    </div>
  </div>
</div>
<div class=\"banner4-social\">
  <ul>
    {% for item in this.theme.social %}
    <li><a href=\"{{item.url}}\">{{item.social_name}}</a></li>
    {% endfor %}
  </ul>
</div>", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/partials/site/banner_mine.htm", "");
    }
}
