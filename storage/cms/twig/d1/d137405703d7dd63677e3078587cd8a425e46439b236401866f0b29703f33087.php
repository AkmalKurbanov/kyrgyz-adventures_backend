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

/* /home/a/akmalakmal/tabylga/public_html/themes/tabylga/pages/events.htm */
class __TwigTemplate_eb116f1d72d986e276abfc798c012d44f18c77c1b31c9fb64aba235f2e2a5c8d extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 20, "if" => 22);
        $filters = array("date" => 7, "_" => 16, "page" => 26, "resize" => 27, "escape" => 32, "rudate" => 33);
        $functions = array("range" => 111);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['date', '_', 'page', 'resize', 'escape', 'rudate'],
                ['range']
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
        $context["currentDate"] = twig_date_format_filter($this->env, "now", "Y-m-d");
        // line 8
        echo "
<!-- event box area -->

<div class=\"event-box-area margin-top-50 padding-bottom-50\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"event-box-wrapper col-lg-12\">
        <div class=\"title-left-style margin-bottom-65\">
          <p class=\"section-subtitle\">";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Событие"]);
        echo "</p>
          <h2 class=\"section-title\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Предстоящее событие"]);
        echo "</h2>
        </div>
        <div>
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 21
            echo "
          ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 22) >= ($context["currentDate"] ?? null))) {
                // line 23
                echo "
          <div class=\"next-event\">
            <div class=\"img-wrapper\">
              <a href=\"";
                // line 26
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 26, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 26)]);
                echo "\"
                style=\"background-image: url(";
                // line 27
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "img", [], "any", false, false, true, 27), "path", [], "any", false, false, true, 27), 27, $this->source), 530, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo ");\">
              </a>
            </div>
            <div class=\"event-box-content\">
              <div class=\"date-box\">
                <span class=\"date\">";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 32), 32, $this->source), "d"), "html", null, true);
                echo "</span>
                <span class=\"month\">";
                // line 33
                echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 33), 33, $this->source), "%BP"]);
                echo "</span>
              </div>
              <h4>";
                // line 35
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "</h4>
              <ul>
                <li><i class=\"fa fa-map-marker\"></i> ";
                // line 37
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "</li>
                <li><i class=\"fa fa-bell\"></i> ";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 38), 38, $this->source), "H:i"), "html", null, true);
                echo "</li>
              </ul>
              <div class=\"btn-wrapper\">
                <a href=\"";
                // line 41
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 41, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 41)]);
                echo "\"
                  class=\"btn btn-custom-primary\">";
                // line 42
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Подробнее"]);
                echo "</a>
              </div>
            </div>
          </div>
          ";
            } else {
                // line 47
                echo "
          ";
            }
            // line 49
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </div>
      </div>
    </div>
  </div>
</div>

<!-- upcoming area -->
<div class=\"upcoming-area\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"text-center padding-bottom-55\">
          <h2 class=\"section-title\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Предстоящие события"]);
        echo "</h2>
        </div>
      </div>
    </div>

    <div class=\"events-js\">
      ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 70
            echo "
      ";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 71) >= ($context["currentDate"] ?? null))) {
                // line 72
                echo "
      <div class=\"upcoming-box\">
        <div class=\"ub-image\">
          <a href=\"";
                // line 75
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 75, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 75)]);
                echo "\" style=\"background-image:
              url(";
                // line 76
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "img", [], "any", false, false, true, 76), "path", [], "any", false, false, true, 76), 76, $this->source), 500, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo ");\">
          </a>
        </div>

        <div class=\"date-box\">
          <span class=\"date\">";
                // line 81
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 81), 81, $this->source), "d"), "html", null, true);
                echo "</span>
          <span class=\"month\">";
                // line 82
                echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 82), 82, $this->source), "%BP"]);
                echo "</span>
        </div>

        <div class=\"ub-content\">
          <h4>
            <a href=\"";
                // line 87
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 87, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 87)]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo "</a>
          </h4>
          <p><i class=\"fa fa-map-marker\"></i> ";
                // line 89
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                echo "</p>
        </div>
      </div>

      ";
            } else {
                // line 94
                echo "
      ";
            }
            // line 96
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </div>

    <div class=\"btn-wrapper\" style=\"text-align: center;\">
      <a href=\"all-events\" class=\"btn btn-custom-primary\">";
        // line 101
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Все события"]);
        echo "</a>
    </div>`

    <div class=\"record-pagination\">
      ";
        // line 105
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 105) > 1)) {
            // line 106
            echo "      <ul class=\"pagination\">
        ";
            // line 107
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 107) > 1)) {
                // line 108
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 108), "baseFileName", [], "any", false, false, true, 108), 108, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 108) - 1)]);
                echo "\">&larr;</a></li>
        ";
            }
            // line 110
            echo "
        ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 111)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 112
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 112) == $context["page"])) ? ("active") : (null));
                echo "\">
          <a href=\"";
                // line 113
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 113), "baseFileName", [], "any", false, false, true, 113), 113, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 113, $this->source), "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "
        ";
            // line 117
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 117) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 117))) {
                // line 118
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 118), "baseFileName", [], "any", false, false, true, 118), 118, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 118) + 1)]);
                echo "\">&rarr;</a></li>
        ";
            }
            // line 120
            echo "      </ul>
      ";
        }
        // line 122
        echo "



    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/a/akmalakmal/tabylga/public_html/themes/tabylga/pages/events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 122,  315 => 120,  309 => 118,  307 => 117,  304 => 116,  293 => 113,  288 => 112,  284 => 111,  281 => 110,  275 => 108,  273 => 107,  270 => 106,  268 => 105,  261 => 101,  256 => 98,  249 => 96,  245 => 94,  237 => 89,  230 => 87,  222 => 82,  218 => 81,  210 => 76,  206 => 75,  201 => 72,  199 => 71,  196 => 70,  192 => 69,  183 => 63,  169 => 51,  162 => 49,  158 => 47,  150 => 42,  146 => 41,  140 => 38,  136 => 37,  131 => 35,  126 => 33,  122 => 32,  114 => 27,  110 => 26,  105 => 23,  103 => 22,  100 => 21,  96 => 20,  90 => 17,  86 => 16,  76 => 8,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
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

<!-- event box area -->

<div class=\"event-box-area margin-top-50 padding-bottom-50\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"event-box-wrapper col-lg-12\">
        <div class=\"title-left-style margin-bottom-65\">
          <p class=\"section-subtitle\">{{'Событие'|_}}</p>
          <h2 class=\"section-title\">{{'Предстоящее событие'|_}}</h2>
        </div>
        <div>
          {% for record in records %}

          {% if record.date >= currentDate %}

          <div class=\"next-event\">
            <div class=\"img-wrapper\">
              <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\"
                style=\"background-image: url({{record.img.path | resize(530, false, { mode: 'crop', quality: '80', extension: 'jpg' })}});\">
              </a>
            </div>
            <div class=\"event-box-content\">
              <div class=\"date-box\">
                <span class=\"date\">{{record.date | date('d')}}</span>
                <span class=\"month\">{{record.date | rudate('%BP')}}</span>
              </div>
              <h4>{{record.title}}</h4>
              <ul>
                <li><i class=\"fa fa-map-marker\"></i> {{record.location}}</li>
                <li><i class=\"fa fa-bell\"></i> {{record.date | date('H:i') }}</li>
              </ul>
              <div class=\"btn-wrapper\">
                <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\"
                  class=\"btn btn-custom-primary\">{{'Подробнее'|_}}</a>
              </div>
            </div>
          </div>
          {% else %}

          {% endif %}

          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</div>

<!-- upcoming area -->
<div class=\"upcoming-area\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"text-center padding-bottom-55\">
          <h2 class=\"section-title\">{{'Предстоящие события'|_}}</h2>
        </div>
      </div>
    </div>

    <div class=\"events-js\">
      {% for record in records %}

      {% if record.date >= currentDate %}

      <div class=\"upcoming-box\">
        <div class=\"ub-image\">
          <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\" style=\"background-image:
              url({{record.img.path | resize(500, false, { mode: 'crop', quality: '80', extension: 'jpg' })}});\">
          </a>
        </div>

        <div class=\"date-box\">
          <span class=\"date\">{{record.date | date('d')}}</span>
          <span class=\"month\">{{record.date | rudate('%BP')}}</span>
        </div>

        <div class=\"ub-content\">
          <h4>
            <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">{{record.title}}</a>
          </h4>
          <p><i class=\"fa fa-map-marker\"></i> {{record.location}}</p>
        </div>
      </div>

      {% else %}

      {% endif %}

      {% endfor %}
    </div>

    <div class=\"btn-wrapper\" style=\"text-align: center;\">
      <a href=\"all-events\" class=\"btn btn-custom-primary\">{{'Все события'|_}}</a>
    </div>`

    <div class=\"record-pagination\">
      {% if records.lastPage > 1 %}
      <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
        <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr;</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
        <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
          <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
        </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
        <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">&rarr;</a></li>
        {% endif %}
      </ul>
      {% endif %}




    </div>
  </div>
</div>", "/home/a/akmalakmal/tabylga/public_html/themes/tabylga/pages/events.htm", "");
    }
}
