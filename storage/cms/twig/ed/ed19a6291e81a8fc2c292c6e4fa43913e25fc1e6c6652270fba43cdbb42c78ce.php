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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/event-detail.htm */
class __TwigTemplate_f194e5055f2dc962db262942c77faac8238df0b8ab15e9a679614c97136d1976 extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 5);
        $filters = array("escape" => 11, "raw" => 12, "_" => 17, "date" => 18, "rudate" => 21);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw', '_', 'date', 'rudate'],
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, true, 3);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "<div class=\"leadership-area margin-top-115\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-7\">
        <div class=\"leadership-content\">
          <h2>";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</h2>
          ";
            // line 12
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "content", [], "any", false, false, true, 12), 12, $this->source);
            echo "
        </div>
      </div>
      <div class=\"col-lg-4 offset-lg-1 text-center\">
        <div class=\"ls-date-box\">
          <h4>";
            // line 17
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Date"]);
            echo " & ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Time"]);
            echo ":</h4>
          <p> ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 18), 18, $this->source), "d"), "html", null, true);
            echo " 
            
              ";
            // line 20
            if ((($context["activeLocale"] ?? null) == "rus")) {
                // line 21
                echo "              ";
                echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 21), 21, $this->source), "%BP"]);
                echo "
              ";
            } elseif ((            // line 22
($context["activeLocale"] ?? null) == "de")) {
                // line 23
                echo "              ";
                echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 23), 23, $this->source), "%BP"]);
                echo "
              ";
            } else {
                // line 25
                echo "              ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 25), 25, $this->source), "M"), "html", null, true);
                echo "
              ";
            }
            // line 27
            echo "            ,
            ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 28), 28, $this->source), "Y"), "html", null, true);
            echo " , ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 28), 28, $this->source), "H:i"), "html", null, true);
            echo "</p>
          <hr>
          <h4>";
            // line 30
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Location"]);
            echo "</h4>
          <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "location", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</p>
        </div>
        <div class=\"ls-social-share\">
          <script src=\"https://yastatic.net/share2/share.js\"></script>
          <div class=\"ya-share2\" data-curtain data-shape=\"round\" data-limit=\"3\"
            data-services=\"vkontakte,facebook,odnoklassniki,telegram,twitter,whatsapp,skype\"></div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        } else {
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 43, $this->source), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/event-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 43,  138 => 31,  134 => 30,  127 => 28,  124 => 27,  118 => 25,  112 => 23,  110 => 22,  105 => 21,  103 => 20,  98 => 18,  92 => 17,  84 => 12,  80 => 11,  73 => 6,  71 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
<div class=\"leadership-area margin-top-115\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-7\">
        <div class=\"leadership-content\">
          <h2>{{record.title}}</h2>
          {{record.content | raw}}
        </div>
      </div>
      <div class=\"col-lg-4 offset-lg-1 text-center\">
        <div class=\"ls-date-box\">
          <h4>{{'Date'|_}} & {{'Time'|_}}:</h4>
          <p> {{record.date | date('d')}} 
            
              {% if activeLocale == 'rus'  %}
              {{record.date | rudate('%BP')}}
              {% elseif activeLocale == 'de'  %}
              {{record.date | rudate('%BP')}}
              {% else %}
              {{record.date | date('M')}}
              {% endif %}
            ,
            {{record.date | date('Y')}} , {{record.date | date('H:i') }}</p>
          <hr>
          <h4>{{'Location'|_}}</h4>
          <p>{{record.location}}</p>
        </div>
        <div class=\"ls-social-share\">
          <script src=\"https://yastatic.net/share2/share.js\"></script>
          <div class=\"ya-share2\" data-curtain data-shape=\"round\" data-limit=\"3\"
            data-services=\"vkontakte,facebook,odnoklassniki,telegram,twitter,whatsapp,skype\"></div>
        </div>
      </div>
    </div>
  </div>
</div>
{% else %}
{{ notFoundMessage }}
{% endif %}", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/event-detail.htm", "");
    }
}
