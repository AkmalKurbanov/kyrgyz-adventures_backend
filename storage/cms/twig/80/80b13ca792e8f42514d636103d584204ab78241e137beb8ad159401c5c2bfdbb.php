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
class __TwigTemplate_1297bbb4e7f03725ce9e6f667340fac479466b9450ec712593865ec6da45291f extends \Twig\Template
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
                        
                          <img class=\"thumbnail\" style=\"max-width: 100%; margin-bottom: 10px;\" src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getThumb", [0 => 300, 1 => 300], "method", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 18)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 18)) : (twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "name", [], "any", false, false, true, 18))), "html", null, true);
                echo "\">
                          

                        </div>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
                </div>

            ";
        } else {
            // line 28
            echo "
            ";
        }
        // line 30
        echo "
            ";
        // line 31
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images_media", [], "any", false, false, true, 31))) {
            // line 32
            echo "                
                <div class=\"row\">

                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images_media", [], "any", false, false, true, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["mediaImage"]) {
                // line 36
                echo "
                        <div class=\"col-xs-12 col-sm-4 col-md-3 col-md-2\">
                          <img class=\"thumbnail\" style=\"max-width: 100%;\" src=\"";
                // line 38
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["mediaImage"], "image", [], "any", false, false, true, 38), 38, $this->source));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["mediaImage"], "image_title", [], "any", false, false, true, 38)) ? (twig_get_attribute($this->env, $this->source, $context["mediaImage"], "image_title", [], "any", false, false, true, 38)) : (twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "name", [], "any", false, false, true, 38))), "html", null, true);
                echo "\">
                        
                            
                        </div>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mediaImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
                </div>

            ";
        } else {
            // line 48
            echo "
            ";
        }
        // line 50
        echo "
        </div>
      </div>
      <div class=\"col-lg-4 offset-lg-1 text-center\">
        <div class=\"ls-date-box\">
          <h4>Дата & ";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Время"]);
        echo ":</h4>
          <p> ";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "date", [], "any", false, false, true, 56), 56, $this->source), "d"), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "date", [], "any", false, false, true, 56), 56, $this->source), "%BP"]);
        echo " ,
            ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "date", [], "any", false, false, true, 57), 57, $this->source), "Y"), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "date", [], "any", false, false, true, 57), 57, $this->source), "H:i"), "html", null, true);
        echo "</p>
          <hr>
          <h4>";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Место расположения"]);
        echo "</h4>
          <p>";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "location", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
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
        return array (  166 => 60,  162 => 59,  155 => 57,  149 => 56,  145 => 55,  138 => 50,  134 => 48,  128 => 44,  114 => 38,  110 => 36,  106 => 35,  101 => 32,  99 => 31,  96 => 30,  92 => 28,  86 => 24,  72 => 18,  67 => 15,  63 => 14,  58 => 11,  56 => 10,  50 => 7,  46 => 6,  39 => 1,);
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
                        
                          <img class=\"thumbnail\" style=\"max-width: 100%; margin-bottom: 10px;\" src=\"{{image.getThumb(300,300)}}\" alt=\"{{image.title ? image.title : recordDetail.name}}\">
                          

                        </div>

                    {% endfor %}

                </div>

            {% else %}

            {% endif %}

            {% if recordDetail.images_media|length %}
                
                <div class=\"row\">

                    {% for mediaImage in recordDetail.images_media %}

                        <div class=\"col-xs-12 col-sm-4 col-md-3 col-md-2\">
                          <img class=\"thumbnail\" style=\"max-width: 100%;\" src=\"{{mediaImage.image|media}}\" alt=\"{{mediaImage.image_title ? mediaImage.image_title : recordDetail.name}}\">
                        
                            
                        </div>

                    {% endfor %}

                </div>

            {% else %}

            {% endif %}

        </div>
      </div>
      <div class=\"col-lg-4 offset-lg-1 text-center\">
        <div class=\"ls-date-box\">
          <h4>Дата & {{'Время'|_}}:</h4>
          <p> {{recordDetail.date | date('d')}} {{recordDetail.date | rudate('%BP')}} ,
            {{recordDetail.date | date('Y')}} , {{recordDetail.date | date('H:i') }}</p>
          <hr>
          <h4>{{'Место расположения'|_}}</h4>
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
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "for" => 14);
        static $filters = array("escape" => 6, "raw" => 7, "length" => 10, "media" => 38, "_" => 55, "date" => 56, "rudate" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'length', 'media', '_', 'date', 'rudate'],
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
