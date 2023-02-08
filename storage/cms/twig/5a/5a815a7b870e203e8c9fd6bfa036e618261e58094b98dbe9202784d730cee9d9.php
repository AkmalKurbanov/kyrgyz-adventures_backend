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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/tour-detail.htm */
class __TwigTemplate_3b78619edcbd2982f45fd6fe4dc086b41731b121554b4d3d8f759ca366d97138 extends \Twig\Template
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
        $tags = array("if" => 10, "for" => 14);
        $filters = array("escape" => 6, "raw" => 7, "length" => 10, "_" => 40, "date" => 41, "rudate" => 44);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'length', '_', 'date', 'rudate'],
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
        echo "<div class=\"leadership-area margin-top-115\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-7\">
        <div class=\"leadership-content\">
          <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "name", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
          ";
        // line 7
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "content", [], "any", false, false, true, 7), 7, $this->source);
        echo "

          
          ";
        // line 10
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 10))) {
            // line 11
            echo "
                <div class=\"row\">

                    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 15
                echo "
                        <div class=\"col-xs-12 col-sm-4 col-md-3 col-md-2\">
                          <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getThumb", [0 => 1200, 1 => 1200], "method", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\" class=\"gallery-link\">
                            <div style=\"width: 150px;height: 100px; border-radius: 10px; overflow: hidden;margin-bottom: 10px; position: relative;\">
                              <img class=\"thumbnail\" style=\"position: absolute; width: 100%; height: 100%; object-fit: cover;\" src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getThumb", [0 => 300, 1 => ($context["auto"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 19)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 19)) : (twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "name", [], "any", false, false, true, 19))), "html", null, true);
                echo "\">
                            </div>
                          </a>
                          

                        </div>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
                </div>

            ";
        } else {
            // line 31
            echo "
            ";
        }
        // line 33
        echo "
         

        </div>
      </div>
      <div class=\"col-lg-4 offset-lg-1 text-center\">
        <div class=\"ls-date-box\">
          <h4>";
        // line 40
        echo "Date";
        echo " & ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Time"]);
        echo ":</h4>
          <p> ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 41), 41, $this->source), "d"), "html", null, true);
        echo " 
            
              ";
        // line 43
        if ((($context["activeLocale"] ?? null) == "rus")) {
            // line 44
            echo "              ";
            echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 44), 44, $this->source), "%BP"]);
            echo "
              ";
        } elseif ((        // line 45
($context["activeLocale"] ?? null) == "de")) {
            // line 46
            echo "              ";
            echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 46), 46, $this->source), "%BP"]);
            echo "
              ";
        } else {
            // line 48
            echo "              ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 48), 48, $this->source), "M"), "html", null, true);
            echo "
              ";
        }
        // line 50
        echo "            ,
            ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 51), 51, $this->source), "Y"), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "date", [], "any", false, false, true, 51), 51, $this->source), "H:i"), "html", null, true);
        echo "</p>
          <hr>
          <h4>";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Location"]);
        echo "</h4>
          <p>";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "location", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
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
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/tour-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 54,  176 => 53,  169 => 51,  166 => 50,  160 => 48,  154 => 46,  152 => 45,  147 => 44,  145 => 43,  140 => 41,  134 => 40,  125 => 33,  121 => 31,  115 => 27,  99 => 19,  94 => 17,  90 => 15,  86 => 14,  81 => 11,  79 => 10,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"leadership-area margin-top-115\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-7\">
        <div class=\"leadership-content\">
          <h2>{{recordDetail.name}}</h2>
          {{ recordDetail.content | raw }}

          
          {% if recordDetail.images|length %}

                <div class=\"row\">

                    {% for image in recordDetail.images %}

                        <div class=\"col-xs-12 col-sm-4 col-md-3 col-md-2\">
                          <a href=\"{{image.getThumb(1200,1200)}}\" class=\"gallery-link\">
                            <div style=\"width: 150px;height: 100px; border-radius: 10px; overflow: hidden;margin-bottom: 10px; position: relative;\">
                              <img class=\"thumbnail\" style=\"position: absolute; width: 100%; height: 100%; object-fit: cover;\" src=\"{{image.getThumb(300,auto)}}\" alt=\"{{image.title ? image.title : recordDetail.name}}\">
                            </div>
                          </a>
                          

                        </div>

                    {% endfor %}

                </div>

            {% else %}

            {% endif %}

         

        </div>
      </div>
      <div class=\"col-lg-4 offset-lg-1 text-center\">
        <div class=\"ls-date-box\">
          <h4>{{'Date'}} & {{'Time'|_}}:</h4>
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
          <p>{{recordDetail.location}}</p>
        </div>
        <div class=\"ls-social-share\">
          <script src=\"https://yastatic.net/share2/share.js\"></script>
          <div class=\"ya-share2\" data-curtain data-shape=\"round\" data-limit=\"3\"
            data-services=\"vkontakte,facebook,odnoklassniki,telegram,twitter,whatsapp,skype\"></div>
        </div>
      </div>
    </div>
  </div>
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/tour-detail.htm", "");
    }
}
