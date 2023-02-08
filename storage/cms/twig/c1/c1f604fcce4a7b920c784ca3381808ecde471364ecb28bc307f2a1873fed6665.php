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
class __TwigTemplate_d3d9bc3e74b137ea038665b519397d5384670452bf48b56d3bfa525337ce9797 extends \Twig\Template
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
        $tags = array("if" => 11, "for" => 15);
        $filters = array("escape" => 7, "raw" => 8, "length" => 11, "_" => 41);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'length', '_'],
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
                          <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getThumb", [0 => 1200, 1 => 1200], "method", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\" class=\"gallery-link\">
                            <div style=\"width: 150px;height: 100px; border-radius: 10px; overflow: hidden;margin-bottom: 10px; position: relative;\">
                              <img class=\"thumbnail\" style=\"position: absolute; width: 100%; height: 100%; object-fit: cover;\" src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getThumb", [0 => 300, 1 => ($context["auto"] ?? null)], "method", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 20)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 20)) : (twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "name", [], "any", false, false, true, 20))), "html", null, true);
                echo "\">
                            </div>
                          </a>
                          

                        </div>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
                </div>

            ";
        } else {
            // line 32
            echo "
            ";
        }
        // line 34
        echo "
          

        </div>
      </div>
      <div class=\"col-lg-4 offset-lg-1 text-center\">
        <div class=\"ls-date-box\">
          <h4>";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contacts"]);
        echo ":</h4>
          <a href=\"tel:";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "phone", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "\" style=\"text-decoration: none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "phone", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "</a>
          <br>
          <a href=\"tel:";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "email", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "\" style=\"text-decoration: none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "email", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "</a>
          <p></p>
          <hr>
          <h4>";
        // line 47
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Location"]);
        echo "</h4>
          <p>";
        // line 48
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "location", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
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
        return array (  158 => 48,  154 => 47,  146 => 44,  139 => 42,  135 => 41,  126 => 34,  122 => 32,  116 => 28,  100 => 20,  95 => 18,  91 => 16,  87 => 15,  82 => 12,  80 => 11,  74 => 8,  70 => 7,  62 => 1,);
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
}
