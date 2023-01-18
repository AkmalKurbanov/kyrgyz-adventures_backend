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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/guest-house-detail.htm */
class __TwigTemplate_ea637fd1d7afad3bc91d96dc7b39df8c43083f59209827ec13eeb91ae9931e9e extends \Twig\Template
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
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo " </h2>
          ";
        // line 8
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "content", [], "any", false, false, true, 8), 8, $this->source);
        echo "

          
          ";
        // line 11
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 11))) {
            // line 12
            echo "
                <div class=\"row\">

                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images", [], "any", false, false, true, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 16
                echo "
                        <div class=\"col-xs-12 col-sm-4 col-md-3 col-md-2\">
                        
                          <img class=\"thumbnail\" style=\"max-width: 100%; margin-bottom: 10px;\" src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getThumb", [0 => 300, 1 => 300], "method", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 19)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 19)) : (twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "name", [], "any", false, false, true, 19))), "html", null, true);
                echo "\">
                          

                        </div>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
                </div>

            ";
        } else {
            // line 29
            echo "
            ";
        }
        // line 31
        echo "
            ";
        // line 32
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images_media", [], "any", false, false, true, 32))) {
            // line 33
            echo "                
                <div class=\"row\">

                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "images_media", [], "any", false, false, true, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["mediaImage"]) {
                // line 37
                echo "
                        <div class=\"col-xs-12 col-sm-4 col-md-3 col-md-2\">
                          <img class=\"thumbnail\" style=\"max-width: 100%;\" src=\"";
                // line 39
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["mediaImage"], "image", [], "any", false, false, true, 39), 39, $this->source));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["mediaImage"], "image_title", [], "any", false, false, true, 39)) ? (twig_get_attribute($this->env, $this->source, $context["mediaImage"], "image_title", [], "any", false, false, true, 39)) : (twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "name", [], "any", false, false, true, 39))), "html", null, true);
                echo "\">
                        
                            
                        </div>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mediaImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
                </div>

            ";
        } else {
            // line 49
            echo "
            ";
        }
        // line 51
        echo "
        </div>
      </div>
      <div class=\"col-lg-4 offset-lg-1 text-center\">
        <div class=\"ls-date-box\">
          <h4>";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contacts"]);
        echo ":</h4>
          <a href=\"tel:";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "phone", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "\" style=\"text-decoration: none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "phone", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "</a>
          <br>
          <a href=\"tel:";
        // line 59
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "email", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "\" style=\"text-decoration: none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "email", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "</a>
          <p></p>
          <hr>
          <h4>";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Location"]);
        echo "</h4>
          <p>";
        // line 63
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "location", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
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
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/guest-house-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 63,  165 => 62,  157 => 59,  150 => 57,  146 => 56,  139 => 51,  135 => 49,  129 => 45,  115 => 39,  111 => 37,  107 => 36,  102 => 33,  100 => 32,  97 => 31,  93 => 29,  87 => 25,  73 => 19,  68 => 16,  64 => 15,  59 => 12,  57 => 11,  51 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"leadership-area margin-top-115\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-7\">
        <div class=\"leadership-content\">
            
          <h2>{{recordDetail.name}} </h2>
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
          <h4>{{'Contacts'|_}}:</h4>
          <a href=\"tel:{{recordDetail.phone}}\" style=\"text-decoration: none;\">{{recordDetail.phone}}</a>
          <br>
          <a href=\"tel:{{recordDetail.email}}\" style=\"text-decoration: none;\">{{recordDetail.email}}</a>
          <p></p>
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
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/guest-house-detail.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "for" => 15);
        static $filters = array("escape" => 7, "raw" => 8, "length" => 11, "media" => 39, "_" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'length', 'media', '_'],
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
