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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/partials/commentspost/form.htm */
class __TwigTemplate_f205e541926709ddff6b27f2ab57251b002f006b5f2f7032d15f0686e28ee44d extends \Twig\Template
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
        echo "<div id=\"wrap-comment-form\">
  <div id=\"comment-form\" class=\"comment-respond\">
    <form class=\"commentform\">
      <div id=\"comment_flash_message\"></div>
      <div class=\"row\">
        ";
        // line 6
        if ((($context["user"] ?? null) == false)) {
            // line 7
            echo "
        <!-- Name Field -->
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <input placeholder=\"";
            // line 11
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Name"]);
            echo "\" class=\"form-control\" name=\"author\" type=\"text\">
          </div>
        </div>

        <!-- Email Field -->
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <input placeholder=\"Email\" class=\"form-control\" name=\"email\" type=\"text\">
          </div>
        </div>
        ";
        }
        // line 22
        echo "        <!-- Content Field -->
        <div class=\"col-sm-12\">
          <div class=\"form-group\">
            <textarea placeholder=\"";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Comment"]);
        echo " ...\" class=\"form-control\" id=\"comment-text\" name=\"content\" cols=\"50\"
              rows=\"10\"></textarea>
          </div>
        </div>

        <input name=\"post_id\" type=\"hidden\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post_id", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "\">

        ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 32), "recaptcha_enabled", [], "any", false, false, true, 32)) {
            // line 33
            echo "        <div class=\"g-recaptcha\" data-sitekey=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, true, 33), "site_key", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\"></div>
        <br>
        ";
        }
        // line 36
        echo "
        <!-- Submit Field -->
      </div>
      <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-custom-primary\"
          onclick=\"Comment.saveButton(event)\">";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Send"]);
        echo "</button>
      </div>
    </form>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/partials/commentspost/form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  95 => 36,  88 => 33,  86 => 32,  81 => 30,  73 => 25,  68 => 22,  54 => 11,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"wrap-comment-form\">
  <div id=\"comment-form\" class=\"comment-respond\">
    <form class=\"commentform\">
      <div id=\"comment_flash_message\"></div>
      <div class=\"row\">
        {% if(user == false) %}

        <!-- Name Field -->
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <input placeholder=\"{{'Name'|_}}\" class=\"form-control\" name=\"author\" type=\"text\">
          </div>
        </div>

        <!-- Email Field -->
        <div class=\"col-sm-6\">
          <div class=\"form-group\">
            <input placeholder=\"Email\" class=\"form-control\" name=\"email\" type=\"text\">
          </div>
        </div>
        {% endif %}
        <!-- Content Field -->
        <div class=\"col-sm-12\">
          <div class=\"form-group\">
            <textarea placeholder=\"{{'Comment'|_}} ...\" class=\"form-control\" id=\"comment-text\" name=\"content\" cols=\"50\"
              rows=\"10\"></textarea>
          </div>
        </div>

        <input name=\"post_id\" type=\"hidden\" value=\"{{__SELF__.post_id}}\">

        {% if (__SELF__.settings.recaptcha_enabled) %}
        <div class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.settings.site_key }}\"></div>
        <br>
        {% endif %}

        <!-- Submit Field -->
      </div>
      <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-custom-primary\"
          onclick=\"Comment.saveButton(event)\">{{'Send'|_}}</button>
      </div>
    </form>
  </div>
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/partials/commentspost/form.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("_" => 11, "escape" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['_', 'escape'],
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
