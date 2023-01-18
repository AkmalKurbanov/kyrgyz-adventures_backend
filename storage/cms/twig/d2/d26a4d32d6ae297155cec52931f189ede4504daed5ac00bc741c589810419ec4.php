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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/contacts.htm */
class __TwigTemplate_0887cf835f30a0295781b861e6b2f9ab8f477905a74d578cf2a4a83bf819ba26 extends \Twig\Template
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
        echo "<div class=\"contact-info-area margin-top-120 margin-bottom-90\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-4 col-md-6\">
        <div class=\"icon-box-style-04 text-center margin-bottom-30\">
          <div class=\"sb-icon\">
            <a href=\"#\"><i class=\"flaticon-phone\"></i></a>
          </div>
          <div class=\"sb-content\">
            <h4 class=\"title\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Мы доступны в любое время"]);
        echo "</h4>

            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 12), "contacts", [], "any", false, false, true, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 13
            echo "
            ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 14) == true)) {
                // line 15
                echo "            <span><i class=\"fa fa-phone\"></i>&nbsp; (+996) ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone1", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "</span> <br>
            ";
            } else {
                // line 17
                echo "            ";
            }
            // line 18
            echo "
            ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 19) == true)) {
                // line 20
                echo "            <span><i class=\"fa fa-phone\"></i>&nbsp; (+996) ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "phone2", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</span> <br>
            ";
            } else {
                // line 22
                echo "            ";
            }
            // line 23
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "

          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-md-6\">
        <div class=\"icon-box-style-04 text-center margin-bottom-30\">
          <div class=\"sb-icon\">
            <a href=\"#\"><i class=\"flaticon-sent-mail\"></i></a>
          </div>
          <div class=\"sb-content\">
            <h4 class=\"title\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отправляйте заявки по электронной почте"]);
        echo "</h4>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 37), "contacts", [], "any", false, false, true, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 38
            echo "
            ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 39) == true)) {
                // line 40
                echo "            <span><i class=\"fa fa-envelope-o\"></i>&nbsp; ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email1", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "</span> <br>
            ";
            } else {
                // line 41
                echo "`
            ";
            }
            // line 43
            echo "
            ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 44) == true)) {
                // line 45
                echo "            <span><i class=\"fa fa-envelope-o\"></i>&nbsp; ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "user_email2", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "</span> <br>
            ";
            } else {
                // line 47
                echo "            ";
            }
            // line 48
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-md-6\">
        <div class=\"icon-box-style-04 text-center margin-bottom-30\">
          <div class=\"sb-icon\">
            <a href=\"#\"><i class=\"flaticon-place\"></i></a>
          </div>
          <div class=\"sb-content\">
            <h4 class=\"title\">";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Приходите к нам в офис"]);
        echo "</h4>
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 60), "contacts", [], "any", false, false, true, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 61
            echo "
            ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 62) == true)) {
                // line 63
                echo "            <span><i class=\"fa fa-map-marker\"></i>&nbsp; 
              
              ";
                // line 65
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["contact"], "address", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "

            </span> <br>
            ";
            } else {
                // line 68
                echo "`
            ";
            }
            // line 70
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"mapouter\">
  <div class=\"gmap_canvas\">
    <iframe src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 80), "map", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "&amp;hl=en&amp;z=9\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\"></iframe>
  </div>
</div>

<div class=\"politx-content-area padding-top-70\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-5\">

        <form class=\"contact-form\" data-request=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["contactsForm"] ?? null), 89, $this->source), "html", null, true);
        echo "::onFormSubmit\">
          <div id=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["contactsForm"] ?? null), 90, $this->source), "html", null, true);
        echo "_forms_flash\"></div>
          ";
        // line 91
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
          <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"Имя\" placeholder=\"";
        // line 93
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ваше имя"]);
        echo "\" >
          </div>
          <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" id=\"number\" name=\"телефон\" placeholder=\"";
        // line 96
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ваш телефон"]);
        echo "\">
          </div>
          <div class=\"form-group\">
            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Ваш email"]);
        echo "\">
          </div>
          <div class=\"form-group\">
            <textarea class=\"form-control\" id=\"comments\" name=\"Комментарий\" cols=\"30\" rows=\"5\"
              placeholder=\"";
        // line 103
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Комментарий"]);
        echo "\"></textarea>
          </div>
          <div class=\"btn-wrapper padding-top-33\">
            <button id=\"simpleContactSubmitButton\" type=\"submit\"
              class=\"btn btn-custom-primary btn-block\">";
        // line 107
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отправить"]);
        echo "</button>
          </div>
        </form>
      </div>
      <div class=\"col-lg-6 offset-lg-1 d-flex align-self-center\">
        <div class=\"content-box-style-01 margin-top-45\">
          ";
        // line 113
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "form_text/form_subtitle.htm"        ;
        $context['__cms_component_params']['class'] = "section-subtitle contacts_subtitle"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 114
        echo "          ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "form_text/form_title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h2"        ;
        $context['__cms_component_params']['class'] = "title"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 115
        echo "          ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "form_text/form_desc.htm"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['class'] = "para"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 116
        echo "        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/contacts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 116,  281 => 115,  273 => 114,  267 => 113,  258 => 107,  251 => 103,  244 => 99,  238 => 96,  232 => 93,  227 => 91,  223 => 90,  219 => 89,  207 => 80,  196 => 71,  190 => 70,  186 => 68,  179 => 65,  175 => 63,  173 => 62,  170 => 61,  166 => 60,  162 => 59,  151 => 50,  144 => 48,  141 => 47,  135 => 45,  133 => 44,  130 => 43,  126 => 41,  120 => 40,  118 => 39,  115 => 38,  111 => 37,  107 => 36,  94 => 25,  87 => 23,  84 => 22,  78 => 20,  76 => 19,  73 => 18,  70 => 17,  64 => 15,  62 => 14,  59 => 13,  55 => 12,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"contact-info-area margin-top-120 margin-bottom-90\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-4 col-md-6\">
        <div class=\"icon-box-style-04 text-center margin-bottom-30\">
          <div class=\"sb-icon\">
            <a href=\"#\"><i class=\"flaticon-phone\"></i></a>
          </div>
          <div class=\"sb-content\">
            <h4 class=\"title\">{{'Мы доступны в любое время'|_}}</h4>

            {% for contact in this.theme.contacts %}

            {% if contact.phone1 == true %}
            <span><i class=\"fa fa-phone\"></i>&nbsp; (+996) {{contact.phone1}}</span> <br>
            {% else %}
            {% endif %}

            {% if contact.phone2 == true %}
            <span><i class=\"fa fa-phone\"></i>&nbsp; (+996) {{contact.phone2}}</span> <br>
            {% else %}
            {% endif %}

            {% endfor %}


          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-md-6\">
        <div class=\"icon-box-style-04 text-center margin-bottom-30\">
          <div class=\"sb-icon\">
            <a href=\"#\"><i class=\"flaticon-sent-mail\"></i></a>
          </div>
          <div class=\"sb-content\">
            <h4 class=\"title\">{{'Отправляйте заявки по электронной почте'|_}}</h4>
            {% for contact in this.theme.contacts %}

            {% if contact.user_email1 == true %}
            <span><i class=\"fa fa-envelope-o\"></i>&nbsp; {{contact.user_email1}}</span> <br>
            {% else %}`
            {% endif %}

            {% if contact.user_email2 == true %}
            <span><i class=\"fa fa-envelope-o\"></i>&nbsp; {{contact.user_email2}}</span> <br>
            {% else %}
            {% endif %}

            {% endfor %}
          </div>
        </div>
      </div>
      <div class=\"col-lg-4 col-md-6\">
        <div class=\"icon-box-style-04 text-center margin-bottom-30\">
          <div class=\"sb-icon\">
            <a href=\"#\"><i class=\"flaticon-place\"></i></a>
          </div>
          <div class=\"sb-content\">
            <h4 class=\"title\">{{'Приходите к нам в офис'|_}}</h4>
            {% for contact in this.theme.contacts %}

            {% if contact.address == true %}
            <span><i class=\"fa fa-map-marker\"></i>&nbsp; 
              
              {{contact.address}}

            </span> <br>
            {% else %}`
            {% endif %}
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"mapouter\">
  <div class=\"gmap_canvas\">
    <iframe src=\"{{this.theme.map}}&amp;hl=en&amp;z=9\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\"></iframe>
  </div>
</div>

<div class=\"politx-content-area padding-top-70\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-5\">

        <form class=\"contact-form\" data-request=\"{{ contactsForm }}::onFormSubmit\">
          <div id=\"{{ contactsForm }}_forms_flash\"></div>
          {{ form_token() }}
          <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"Имя\" placeholder=\"{{'Ваше имя'|_}}\" >
          </div>
          <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" id=\"number\" name=\"телефон\" placeholder=\"{{'Ваш телефон'|_}}\">
          </div>
          <div class=\"form-group\">
            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"{{'Ваш email'|_}}\">
          </div>
          <div class=\"form-group\">
            <textarea class=\"form-control\" id=\"comments\" name=\"Комментарий\" cols=\"30\" rows=\"5\"
              placeholder=\"{{'Комментарий'|_}}\"></textarea>
          </div>
          <div class=\"btn-wrapper padding-top-33\">
            <button id=\"simpleContactSubmitButton\" type=\"submit\"
              class=\"btn btn-custom-primary btn-block\">{{'Отправить'|_}}</button>
          </div>
        </form>
      </div>
      <div class=\"col-lg-6 offset-lg-1 d-flex align-self-center\">
        <div class=\"content-box-style-01 margin-top-45\">
          {% component 'contenteditor' file=\"form_text/form_subtitle.htm\" class=\"section-subtitle contacts_subtitle\" %}
          {% component 'contenteditor' file=\"form_text/form_title.htm\" fixture=\"h2\" class=\"title\" %}
          {% component 'contenteditor' file=\"form_text/form_desc.htm\" fixture=\"p\" class=\"para\" %}
        </div>
      </div>
    </div>
  </div>
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/contacts.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12, "if" => 14, "component" => 113);
        static $filters = array("_" => 10, "escape" => 15);
        static $functions = array("form_token" => 91);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'component'],
                ['_', 'escape'],
                ['form_token']
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
