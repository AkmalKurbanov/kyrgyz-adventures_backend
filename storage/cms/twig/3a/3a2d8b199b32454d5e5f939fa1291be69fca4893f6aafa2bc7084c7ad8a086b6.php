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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/events.htm */
class __TwigTemplate_033778f5d9e1ded000bf584cb8a0acd28d624d47ec8eb2df35cfecabe4104d08 extends \Twig\Template
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
        $filters = array("date" => 7, "_" => 16, "page" => 26, "resize" => 27, "escape" => 32, "rudate" => 35);
        $functions = array("range" => 127);

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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event"]);
        echo "</p>
          <h2 class=\"section-title\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Upcoming event"]);
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
                <span class=\"month\">
                   ";
                // line 34
                if ((($context["activeLocale"] ?? null) == "rus")) {
                    // line 35
                    echo "              ";
                    echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 35), 35, $this->source), "%BP"]);
                    echo "
              ";
                } elseif ((                // line 36
($context["activeLocale"] ?? null) == "de")) {
                    // line 37
                    echo "              ";
                    echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 37), 37, $this->source), "%BP"]);
                    echo "
              ";
                } else {
                    // line 39
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 39), 39, $this->source), "M"), "html", null, true);
                    echo "
              ";
                }
                // line 41
                echo "                </span>
              </div>
              <h4>";
                // line 43
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</h4>
              <ul>
                <li><i class=\"fa fa-map-marker\"></i> ";
                // line 45
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "</li>
                <li><i class=\"fa fa-bell\"></i> ";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 46), 46, $this->source), "H:i"), "html", null, true);
                echo "</li>
              </ul>
              <div class=\"btn-wrapper\">
                <a href=\"";
                // line 49
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 49, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 49)]);
                echo "\"
                  class=\"btn btn-custom-primary\">";
                // line 50
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["More"]);
                echo "</a>
              </div>
            </div>
          </div>
          ";
            } else {
                // line 55
                echo "
          ";
            }
            // line 57
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
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
        // line 71
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Upcoming events"]);
        echo "</h2>
        </div>
      </div>
    </div>

    <div class=\"events-js\">
      ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 78
            echo "
      ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 79) >= ($context["currentDate"] ?? null))) {
                // line 80
                echo "
      <div class=\"upcoming-box\">
        <div class=\"ub-image\">
          <a href=\"";
                // line 83
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 83, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 83)]);
                echo "\" style=\"background-image:
              url(";
                // line 84
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "img", [], "any", false, false, true, 84), "path", [], "any", false, false, true, 84), 84, $this->source), 500, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo ");\">
          </a>
        </div>

        <div class=\"date-box\">
          <span class=\"date\">";
                // line 89
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 89), 89, $this->source), "d"), "html", null, true);
                echo "</span>
          <span class=\"month\">
              ";
                // line 91
                if ((($context["activeLocale"] ?? null) == "rus")) {
                    // line 92
                    echo "              ";
                    echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 92), 92, $this->source), "%BP"]);
                    echo "
              ";
                } elseif ((                // line 93
($context["activeLocale"] ?? null) == "de")) {
                    // line 94
                    echo "              ";
                    echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 94), 94, $this->source), "%BP"]);
                    echo "
              ";
                } else {
                    // line 96
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 96), 96, $this->source), "M"), "html", null, true);
                    echo "
              ";
                }
                // line 98
                echo "          </span>
        </div>

        <div class=\"ub-content\">
          <h4>
            <a href=\"";
                // line 103
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 103, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 103)]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                echo "</a>
          </h4>
          <p><i class=\"fa fa-map-marker\"></i> ";
                // line 105
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                echo "</p>
        </div>
      </div>

      ";
            } else {
                // line 110
                echo "
      ";
            }
            // line 112
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "    </div>

    <div class=\"btn-wrapper\" style=\"text-align: center;\">
      <a href=\"all-events\" class=\"btn btn-custom-primary\">";
        // line 117
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All events"]);
        echo "</a>
    </div>`

    <div class=\"record-pagination\">
      ";
        // line 121
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 121) > 1)) {
            // line 122
            echo "      <ul class=\"pagination\">
        ";
            // line 123
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 123) > 1)) {
                // line 124
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 124), "baseFileName", [], "any", false, false, true, 124), 124, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 124) - 1)]);
                echo "\">&larr;</a></li>
        ";
            }
            // line 126
            echo "
        ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 127)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 128
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 128) == $context["page"])) ? ("active") : (null));
                echo "\">
          <a href=\"";
                // line 129
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 129), "baseFileName", [], "any", false, false, true, 129), 129, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 129, $this->source), "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "
        ";
            // line 133
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 133) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 133))) {
                // line 134
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 134), "baseFileName", [], "any", false, false, true, 134), 134, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 134) + 1)]);
                echo "\">&rarr;</a></li>
        ";
            }
            // line 136
            echo "      </ul>
      ";
        }
        // line 138
        echo "



    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 138,  357 => 136,  351 => 134,  349 => 133,  346 => 132,  335 => 129,  330 => 128,  326 => 127,  323 => 126,  317 => 124,  315 => 123,  312 => 122,  310 => 121,  303 => 117,  298 => 114,  291 => 112,  287 => 110,  279 => 105,  272 => 103,  265 => 98,  259 => 96,  253 => 94,  251 => 93,  246 => 92,  244 => 91,  239 => 89,  231 => 84,  227 => 83,  222 => 80,  220 => 79,  217 => 78,  213 => 77,  204 => 71,  190 => 59,  183 => 57,  179 => 55,  171 => 50,  167 => 49,  161 => 46,  157 => 45,  152 => 43,  148 => 41,  142 => 39,  136 => 37,  134 => 36,  129 => 35,  127 => 34,  122 => 32,  114 => 27,  110 => 26,  105 => 23,  103 => 22,  100 => 21,  96 => 20,  90 => 17,  86 => 16,  76 => 8,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
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
          <p class=\"section-subtitle\">{{'Event'|_}}</p>
          <h2 class=\"section-title\">{{'Upcoming event'|_}}</h2>
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
                <span class=\"month\">
                   {% if activeLocale == 'rus'  %}
              {{record.date | rudate('%BP')}}
              {% elseif activeLocale == 'de'  %}
              {{record.date | rudate('%BP')}}
              {% else %}
              {{record.date | date('M')}}
              {% endif %}
                </span>
              </div>
              <h4>{{record.title}}</h4>
              <ul>
                <li><i class=\"fa fa-map-marker\"></i> {{record.location}}</li>
                <li><i class=\"fa fa-bell\"></i> {{record.date | date('H:i') }}</li>
              </ul>
              <div class=\"btn-wrapper\">
                <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\"
                  class=\"btn btn-custom-primary\">{{'More'|_}}</a>
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
          <h2 class=\"section-title\">{{'Upcoming events'|_}}</h2>
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
          <span class=\"month\">
              {% if activeLocale == 'rus'  %}
              {{record.date | rudate('%BP')}}
              {% elseif activeLocale == 'de'  %}
              {{record.date | rudate('%BP')}}
              {% else %}
              {{record.date | date('M')}}
              {% endif %}
          </span>
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
      <a href=\"all-events\" class=\"btn btn-custom-primary\">{{'All events'|_}}</a>
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
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/events.htm", "");
    }
}
