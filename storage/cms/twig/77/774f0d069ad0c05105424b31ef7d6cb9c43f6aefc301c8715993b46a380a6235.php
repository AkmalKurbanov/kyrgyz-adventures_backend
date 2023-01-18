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
class __TwigTemplate_343dc1293d60d410889c174debdd02109ee8ee8530f6c2f7270953e327c2349b extends \Twig\Template
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
                if ((($context["activeLocale"] ?? null) == "ru")) {
                    // line 35
                    echo "                    ";
                    echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 35), 35, $this->source), "%BP"]);
                    echo "
                    ";
                } else {
                    // line 37
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 37), 37, $this->source), "M"), "html", null, true);
                    echo "
                    ";
                }
                // line 39
                echo "                </span>
              </div>
              <h4>";
                // line 41
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "</h4>
              <ul>
                <li><i class=\"fa fa-map-marker\"></i> ";
                // line 43
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</li>
                <li><i class=\"fa fa-bell\"></i> ";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 44), 44, $this->source), "H:i"), "html", null, true);
                echo "</li>
              </ul>
              <div class=\"btn-wrapper\">
                <a href=\"";
                // line 47
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 47, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 47)]);
                echo "\"
                  class=\"btn btn-custom-primary\">";
                // line 48
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["More"]);
                echo "</a>
              </div>
            </div>
          </div>
          ";
            } else {
                // line 53
                echo "
          ";
            }
            // line 55
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Upcoming events"]);
        echo "</h2>
        </div>
      </div>
    </div>

    <div class=\"events-js\">
      ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 76
            echo "
      ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 77) >= ($context["currentDate"] ?? null))) {
                // line 78
                echo "
      <div class=\"upcoming-box\">
        <div class=\"ub-image\">
          <a href=\"";
                // line 81
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 81, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 81)]);
                echo "\" style=\"background-image:
              url(";
                // line 82
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "img", [], "any", false, false, true, 82), "path", [], "any", false, false, true, 82), 82, $this->source), 500, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo ");\">
          </a>
        </div>

        <div class=\"date-box\">
          <span class=\"date\">";
                // line 87
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 87), 87, $this->source), "d"), "html", null, true);
                echo "</span>
          <span class=\"month\">
              ";
                // line 89
                if ((($context["activeLocale"] ?? null) == "ru")) {
                    // line 90
                    echo "              ";
                    echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 90), 90, $this->source), "%BP"]);
                    echo "
              ";
                } else {
                    // line 92
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 92), 92, $this->source), "M"), "html", null, true);
                    echo "
              ";
                }
                // line 94
                echo "          </span>
        </div>

        <div class=\"ub-content\">
          <h4>
            <a href=\"";
                // line 99
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 99, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 99)]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "</a>
          </h4>
          <p><i class=\"fa fa-map-marker\"></i> ";
                // line 101
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo "</p>
        </div>
      </div>

      ";
            } else {
                // line 106
                echo "
      ";
            }
            // line 108
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "    </div>

    <div class=\"btn-wrapper\" style=\"text-align: center;\">
      <a href=\"all-events\" class=\"btn btn-custom-primary\">";
        // line 113
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All events"]);
        echo "</a>
    </div>`

    <div class=\"record-pagination\">
      ";
        // line 117
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 117) > 1)) {
            // line 118
            echo "      <ul class=\"pagination\">
        ";
            // line 119
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 119) > 1)) {
                // line 120
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 120), "baseFileName", [], "any", false, false, true, 120), 120, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 120) - 1)]);
                echo "\">&larr;</a></li>
        ";
            }
            // line 122
            echo "
        ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 123)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 124
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 124) == $context["page"])) ? ("active") : (null));
                echo "\">
          <a href=\"";
                // line 125
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 125), "baseFileName", [], "any", false, false, true, 125), 125, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 125, $this->source), "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "
        ";
            // line 129
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 129) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 129))) {
                // line 130
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 130), "baseFileName", [], "any", false, false, true, 130), 130, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 130) + 1)]);
                echo "\">&rarr;</a></li>
        ";
            }
            // line 132
            echo "      </ul>
      ";
        }
        // line 134
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
        return array (  324 => 134,  320 => 132,  314 => 130,  312 => 129,  309 => 128,  298 => 125,  293 => 124,  289 => 123,  286 => 122,  280 => 120,  278 => 119,  275 => 118,  273 => 117,  266 => 113,  261 => 110,  254 => 108,  250 => 106,  242 => 101,  235 => 99,  228 => 94,  222 => 92,  216 => 90,  214 => 89,  209 => 87,  201 => 82,  197 => 81,  192 => 78,  190 => 77,  187 => 76,  183 => 75,  174 => 69,  160 => 57,  153 => 55,  149 => 53,  141 => 48,  137 => 47,  131 => 44,  127 => 43,  122 => 41,  118 => 39,  112 => 37,  106 => 35,  104 => 34,  99 => 32,  91 => 27,  87 => 26,  82 => 23,  80 => 22,  77 => 21,  73 => 20,  67 => 17,  63 => 16,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
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
                    {% if activeLocale == 'ru' %}
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
              {% if activeLocale == 'ru' %}
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
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 20, "if" => 22);
        static $filters = array("date" => 7, "_" => 16, "page" => 26, "resize" => 27, "escape" => 32, "rudate" => 35);
        static $functions = array("range" => 123);

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
}
