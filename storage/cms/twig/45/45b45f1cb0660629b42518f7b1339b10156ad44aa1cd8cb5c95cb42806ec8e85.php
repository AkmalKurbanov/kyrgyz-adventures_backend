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

/* C:\work\OSPanel\domains\tabylga/plugins/samuell/contenteditor/components/contenteditor/default.htm */
class __TwigTemplate_33e2a3a83106cad0cf19fe65c3f3cec431bdcf67f62b16dbaf72cb1fdbd34b97 extends \Twig\Template
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
        echo "<";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 1)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        } else {
            echo "div";
        }
        // line 2
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 2)) {
            echo "data-fixture data-ce-tag=\"p\"";
        } else {
            echo "data-editable";
        }
        // line 3
        echo "    data-component=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 3, $this->source), "html", null, true);
        echo "::onSave\"
    data-file=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "file", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\"
    data-tools=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tools", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\"
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, true, 6)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "class", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 7
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "content", [], "any", false, false, true, 7), 7, $this->source);
        echo "
</";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 8)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fixture", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        } else {
            echo "div";
        }
        echo ">
";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/plugins/samuell/contenteditor/components/contenteditor/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 8,  74 => 7,  66 => 6,  62 => 5,  58 => 4,  53 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<{% if __SELF__.fixture %}{{ __SELF__.fixture }}{% else %}div{% endif %}
    {% if __SELF__.fixture %}data-fixture data-ce-tag=\"p\"{% else %}data-editable{% endif %}
    data-component=\"{{ __SELF__ }}::onSave\"
    data-file=\"{{ __SELF__.file }}\"
    data-tools=\"{{ __SELF__.tools }}\"
    {% if __SELF__.class %}class=\"{{ __SELF__.class }}\"{% endif %}>
    {{ __SELF__.content|raw }}
</{% if __SELF__.fixture %}{{ __SELF__.fixture }}{% else %}div{% endif %}>
", "C:\\work\\OSPanel\\domains\\tabylga/plugins/samuell/contenteditor/components/contenteditor/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 1, "raw" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
}
