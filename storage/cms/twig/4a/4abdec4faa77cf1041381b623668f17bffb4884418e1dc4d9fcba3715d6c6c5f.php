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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/all-events.htm */
class __TwigTemplate_a9c7ef161543a375e38e86f1b70b33b2e6ccf9dac12857799755add615a62979 extends \Twig\Template
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
        $context["currentDate"] = twig_date_format_filter($this->env, "now", "Y-m-d");
        // line 8
        echo "

<div class=\"container\">

  <div class=\"title-left-style margin-top-40\">
    <p class=\"section-subtitle\">";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Предстоящие события"]);
        echo "</p>
    <h2 class=\"section-title\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Все события"]);
        echo "</h2>
  </div>

  <div class=\"upcoming-area margin-top-100\">
    <div class=\"row\">
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 20
            echo "
      ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 21) >= ($context["currentDate"] ?? null))) {
                // line 22
                echo "      <div class=\"col-lg-6\">
        <div class=\"upcoming-box\">
          <div class=\"ub-image\">
            <a href=\"";
                // line 25
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 25, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 25)]);
                echo "\" style=\"background-image:
              url(";
                // line 26
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "img", [], "any", false, false, true, 26), "path", [], "any", false, false, true, 26), 26, $this->source), 500, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo ");\">
            </a>
          </div>

          <div class=\"date-box\">
            <span class=\"date\">";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 31), 31, $this->source), "d"), "html", null, true);
                echo "</span>
            <span class=\"month\">
              ";
                // line 33
                if ((($context["activeLocale"] ?? null) == "ru")) {
                    // line 34
                    echo "              ";
                    echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 34), 34, $this->source), "%BP"]);
                    echo "
              ";
                } else {
                    // line 36
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 36), 36, $this->source), "M"), "html", null, true);
                    echo "
              ";
                }
                // line 38
                echo "            </span>
          </div>
          <div class=\"ub-content\">
            <h4><a
                href=\"";
                // line 42
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 42, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 42)]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "</a>
            </h4>
            <p><i class=\"fa fa-map-marker\"></i> ";
                // line 44
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "</p>
          </div>
        </div>
      </div>

      ";
            } else {
                // line 50
                echo "
      ";
            }
            // line 52
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/all-events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 54,  143 => 52,  139 => 50,  130 => 44,  123 => 42,  117 => 38,  111 => 36,  105 => 34,  103 => 33,  98 => 31,  90 => 26,  86 => 25,  81 => 22,  79 => 21,  76 => 20,  72 => 19,  64 => 14,  60 => 13,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}
{% set currentDate = 'now' | date('Y-m-d') %}


<div class=\"container\">

  <div class=\"title-left-style margin-top-40\">
    <p class=\"section-subtitle\">{{'Предстоящие события'|_}}</p>
    <h2 class=\"section-title\">{{'Все события'|_}}</h2>
  </div>

  <div class=\"upcoming-area margin-top-100\">
    <div class=\"row\">
      {% for record in records %}

      {% if record.date >= currentDate %}
      <div class=\"col-lg-6\">
        <div class=\"upcoming-box\">
          <div class=\"ub-image\">
            <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\" style=\"background-image:
              url({{record.img.path | resize(500, false, { mode: 'crop', quality: '80', extension: 'jpg' })}});\">
            </a>
          </div>

          <div class=\"date-box\">
            <span class=\"date\">{{record.date | date('d')}}</span>
            <span class=\"month\">
              {% if activeLocale == 'ru' %}
              {{record.date | rudate('%BP')}}
              {% else %}
              {{record.date | date('M')}}
              {% endif %}
            </span>
          </div>
          <div class=\"ub-content\">
            <h4><a
                href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">{{record.title}}</a>
            </h4>
            <p><i class=\"fa fa-map-marker\"></i> {{record.location}}</p>
          </div>
        </div>
      </div>

      {% else %}

      {% endif %}

      {% endfor %}
    </div>
  </div>
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/all-events.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 19, "if" => 21);
        static $filters = array("date" => 7, "_" => 13, "page" => 25, "resize" => 26, "escape" => 31, "rudate" => 34);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['date', '_', 'page', 'resize', 'escape', 'rudate'],
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
}
