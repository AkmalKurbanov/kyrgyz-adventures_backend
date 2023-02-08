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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/join.htm */
class __TwigTemplate_c56f64587d2535d6e121927c8c3f3c24f1fbb3ee0f477cb7d5b40d2cfc9c647f extends \Twig\Template
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
        $tags = array();
        $filters = array("_" => 5, "escape" => 12);
        $functions = array("form_token" => 14);

        try {
            $this->sandbox->checkSecurity(
                [],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"politx-content-area padding-top-115\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <p class=\"section-subtitle\">";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Join"]);
        echo "</p>
        <h2 class=\"title\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Join a partnership"]);
        echo "</h2>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-10 offset-lg-1\">

        <form class=\"donate-form\" data-request=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericJoinForm"] ?? null), 12, $this->source), "html", null, true);
        echo "::onFormSubmit\">
          <div id=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["genericJoinForm"] ?? null), 13, $this->source), "html", null, true);
        echo "_forms_flash\"></div>
          ";
        // line 14
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
          <div class=\"row\">
            <div class=\"col\">
              <input type=\"hidden\" class=\"form-control\" id=\"joinPartners\" name=\"Заявка по партнерству\"
                value=\"Присоединиться к партнерству\">
              <input type=\"text\" class=\"form-control\" id=\"name\" name=\"Имя\" placeholder=\"";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Name"]);
        echo "\">
            </div>
            <div class=\"col\">
              <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email"]);
        echo "\"
                >
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col\">
              <input type=\"text\" class=\"form-control\" id=\"number\" name=\"телефон\" placeholder=\"";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phone"]);
        echo "\" >
            </div>
            <div class=\"col\">
              <button class=\"btn btn-custom-primary\" id=\"simpleContactSubmitButton\" type=\"submit\"
                style=\"width: 100%; border: 1px solid rgba(4, 51, 129, 0.2)\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Send"]);
        echo "</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/join.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  112 => 28,  103 => 22,  97 => 19,  89 => 14,  85 => 13,  81 => 12,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"politx-content-area padding-top-115\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <p class=\"section-subtitle\">{{'Join'|_}}</p>
        <h2 class=\"title\">{{'Join a partnership'|_}}</h2>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-10 offset-lg-1\">

        <form class=\"donate-form\" data-request=\"{{ genericJoinForm }}::onFormSubmit\">
          <div id=\"{{ genericJoinForm }}_forms_flash\"></div>
          {{ form_token() }}
          <div class=\"row\">
            <div class=\"col\">
              <input type=\"hidden\" class=\"form-control\" id=\"joinPartners\" name=\"Заявка по партнерству\"
                value=\"Присоединиться к партнерству\">
              <input type=\"text\" class=\"form-control\" id=\"name\" name=\"Имя\" placeholder=\"{{'Name'|_}}\">
            </div>
            <div class=\"col\">
              <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"{{'Email'|_}}\"
                >
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col\">
              <input type=\"text\" class=\"form-control\" id=\"number\" name=\"телефон\" placeholder=\"{{'Phone'|_}}\" >
            </div>
            <div class=\"col\">
              <button class=\"btn btn-custom-primary\" id=\"simpleContactSubmitButton\" type=\"submit\"
                style=\"width: 100%; border: 1px solid rgba(4, 51, 129, 0.2)\">{{'Send'|_}}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/join.htm", "");
    }
}
