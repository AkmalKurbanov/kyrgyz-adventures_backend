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

/* C:\work\OSPanel\domains\tabylga/plugins/samuell/contenteditor/components/contenteditor/render.htm */
class __TwigTemplate_0bd539885be7431d72238ff9f69b94d2128975853cba4af242c3cc38587ad14e extends \Twig\Template
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
        $tags = array("if" => 2, "put" => 7);
        $filters = array("escape" => 2, "raw" => 3);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'put'],
                ['escape', 'raw'],
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
        echo "
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 2)) {
            echo "<";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, true, 2)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
                echo "\"";
            }
            echo ">";
        }
        // line 3
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 3, $this->source);
        echo "
";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 4)) {
            echo "</";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo ">";
        }
        // line 5
        echo "
";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "renderCount", [], "any", false, false, true, 6) == 1)) {
            // line 7
            echo "    ";
            echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'            );
            // line 8
            echo "        <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
    ";
            // line 7
            echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true            );
        }
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/plugins/samuell/contenteditor/components/contenteditor/render.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 7,  96 => 8,  93 => 7,  91 => 6,  88 => 5,  82 => 4,  77 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if __SELF__.fixture %}<{{ __SELF__.fixture }} {% if __SELF__.class %}class=\"{{ __SELF__.class }}\"{% endif %}>{% endif %}
    {{ content|raw }}
{% if __SELF__.fixture %}</{{ __SELF__.fixture }}>{% endif %}

{% if __SELF__.renderCount == 1 %}
    {% put styles  %}
        <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
    {% endput %}
{% endif %}
", "C:\\work\\OSPanel\\domains\\tabylga/plugins/samuell/contenteditor/components/contenteditor/render.htm", "");
    }
}
