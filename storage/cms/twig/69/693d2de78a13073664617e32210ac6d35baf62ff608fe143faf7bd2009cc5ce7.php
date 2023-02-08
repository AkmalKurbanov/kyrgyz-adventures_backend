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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/winter-tours.htm */
class __TwigTemplate_4c7f442393420182348d1183fc09780dc66e7cf6478d2db84702f341ddc9e77e extends \Twig\Template
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
        $tags = array("for" => 11, "if" => 12);
        $filters = array("_" => 5, "page" => 17, "escape" => 20, "resize" => 20, "media" => 22, "date" => 30, "rudate" => 34);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['_', 'page', 'escape', 'resize', 'media', 'date', 'rudate'],
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
        echo "<div class=\"upcoming-events-area padding-top-115\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <p class=\"section-subtitle\">";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["List of tours"]);
        echo "</p>
        <h2 class=\"title\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tours"]);
        echo "</h2>
        <br>
      </div>
    </div>
    <div class=\"row\">
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "items", [], "any", false, false, true, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 12
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "category", [], "any", false, false, true, 12), "name", [], "any", false, false, true, 12) == "Winter tours") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "category", [], "any", false, false, true, 12), "name", [], "any", false, false, true, 12) == "Зимние туры"))) {
                // line 13
                echo "      <div class=\"col-lg-6 tours\">
        <div class=\"row\">
          <div class=\"col-md-7\">
            <div class=\"thumb\">
              <a href=\"";
                // line 17
                echo ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 17)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 17), 17, $this->source), [twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 17) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 17)])) : (""));
                echo "\">
                       
                  ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 19)) {
                    // line 20
                    echo "                                <img class=\"thumbnail\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    echo "\" src=\"";
                    echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 20), "getPath", [], "any", false, false, true, 20), 20, $this->source), 510, 500, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                    echo "\" width=\"100%\" />
                            ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 21
$context["record"], "preview_image_media", [], "any", false, false, true, 21)) {
                    // line 22
                    echo "                                <img class=\"thumbnail\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    echo "\" src=\"";
                    echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "preview_image_media", [], "any", false, false, true, 22), 22, $this->source)), 510, 500, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                    echo "\" width=\"100%\" />
                            ";
                }
                // line 23
                echo "   
              </a>
            </div>
          </div>
          <div class=\"col-md-5\">
            <div class=\"up-content-style-01\">
              <div class=\"date-month\">
                <span class=\"date\">";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 30), 30, $this->source), "d"), "html", null, true);
                echo "</span>
                <span class=\"month\">
                  
                  ";
                // line 33
                if ((($context["activeLocale"] ?? null) == "rus")) {
                    // line 34
                    echo "              ";
                    echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 34), 34, $this->source), "%BP"]);
                    echo "
              ";
                } elseif ((                // line 35
($context["activeLocale"] ?? null) == "de")) {
                    // line 36
                    echo "              ";
                    echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 36), 36, $this->source), "%BP"]);
                    echo "
              ";
                } else {
                    // line 38
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 38), 38, $this->source), "M"), "html", null, true);
                    echo "
              ";
                }
                // line 40
                echo "
                </span>
              </div>
              <h6>";
                // line 43
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</h6>
              <ul>
                <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> ";
                // line 45
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "</a></li>
                <li><a href=\"#\"><i class=\"fa fa-bell\"></i> ";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 46), 46, $this->source), "H:i"), "html", null, true);
                echo "</a></li>
              </ul>
              <div class=\"btn-wrapper\">
              
                  <a href=\"";
                // line 50
                echo ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 50)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 50), 50, $this->source), [twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 50) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 50)])) : (""));
                echo "\">";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["More"]);
                echo " ➞</a>
                  
                  
              </div>
            </div>
          </div>
        </div>
      </div>   
      ";
            } else {
                // line 59
                echo "      ";
            }
            // line 60
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/winter-tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 61,  191 => 60,  188 => 59,  174 => 50,  167 => 46,  163 => 45,  158 => 43,  153 => 40,  147 => 38,  141 => 36,  139 => 35,  134 => 34,  132 => 33,  126 => 30,  117 => 23,  109 => 22,  107 => 21,  100 => 20,  98 => 19,  93 => 17,  87 => 13,  84 => 12,  80 => 11,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"upcoming-events-area padding-top-115\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <p class=\"section-subtitle\">{{'List of tours'|_}}</p>
        <h2 class=\"title\">{{'Tours'|_}}</h2>
        <br>
      </div>
    </div>
    <div class=\"row\">
      {% for record in records.items %}
        {% if record.category.name == 'Winter tours' or record.category.name == 'Зимние туры' %}
      <div class=\"col-lg-6 tours\">
        <div class=\"row\">
          <div class=\"col-md-7\">
            <div class=\"thumb\">
              <a href=\"{{records.property('recordPage') ? records.property('recordPage')|page({(records.paramName('recordPageSlug')):(record.slug)})}}\">
                       
                  {% if record.preview_image %}
                                <img class=\"thumbnail\" alt=\"{{ record.name }}\" src=\"{{ record.preview_image.getPath | resize(510, 500, { mode: 'crop', quality: '80', extension: 'jpg' })}}\" width=\"100%\" />
                            {% elseif record.preview_image_media %}
                                <img class=\"thumbnail\" alt=\"{{ record.name }}\" src=\"{{ record.preview_image_media|media | resize(510, 500, { mode: 'crop', quality: '80', extension: 'jpg' })}}\" width=\"100%\" />
                            {% endif %}   
              </a>
            </div>
          </div>
          <div class=\"col-md-5\">
            <div class=\"up-content-style-01\">
              <div class=\"date-month\">
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
              <h6>{{ record.name }}</h6>
              <ul>
                <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> {{record.location}}</a></li>
                <li><a href=\"#\"><i class=\"fa fa-bell\"></i> {{record.date | date('H:i')}}</a></li>
              </ul>
              <div class=\"btn-wrapper\">
              
                  <a href=\"{{records.property('recordPage') ? records.property('recordPage')|page({(records.paramName('recordPageSlug')):(record.slug)})}}\">{{'More'|_}} ➞</a>
                  
                  
              </div>
            </div>
          </div>
        </div>
      </div>   
      {% else %}
      {% endif %}
       {% endfor %}
    </div>
  </div>
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/winter-tours.htm", "");
    }
}
