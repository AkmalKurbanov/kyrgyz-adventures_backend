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

/* C:\work\OSPanel\domains\tabylga/plugins/samuell/contenteditor/components/contenteditor/scripts.htm */
class __TwigTemplate_24fa475e704a4091be40910a386c20637dc6b6e0cea1a524f8c2beef7402d72a extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2
        echo "    <script type=\"text/javascript\">
    /* CONTENT EDITOR SCRIPT START */
    ContentTools.StylePalette.add([
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "palettes", [], "any", false, false, true, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 6
            echo "            new ContentTools.Style('";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, true, 6)) ? (twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, true, 6)) : (twig_get_attribute($this->env, $this->source, $context["style"], "class", [], "any", false, false, true, 6))), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["style"], "class", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "', ";
            echo json_encode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["style"], "allowed_tags", [], "any", false, false, true, 6), 6, $this->source));
            echo "),
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    ]);
    editor.toolbox().tools([
                                [
                                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "buttons", [], "any", false, false, true, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 12
            echo "                                    '";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 12, $this->source), "html", null, true);
            echo "',
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                                ],
                                [
                                    'undo',
                                    'redo',
                                    'remove'
                                ]
                            ]);
    /* CONTENT EDITOR SCRIPT END */
    </script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 25
        echo "    <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/plugins/samuell/contenteditor/components/contenteditor/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  96 => 25,  94 => 24,  92 => 1,  81 => 14,  72 => 12,  68 => 11,  63 => 8,  50 => 6,  46 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put scripts %}
    <script type=\"text/javascript\">
    /* CONTENT EDITOR SCRIPT START */
    ContentTools.StylePalette.add([
        {% for style in __SELF__.palettes %}
            new ContentTools.Style('{{ style.name ? style.name : style.class }}', '{{ style.class }}', {{ style.allowed_tags|json_encode()|raw }}),
        {% endfor %}
    ]);
    editor.toolbox().tools([
                                [
                                {% for value in __SELF__.buttons %}
                                    '{{ value }}',
                                {% endfor %}
                                ],
                                [
                                    'undo',
                                    'redo',
                                    'remove'
                                ]
                            ]);
    /* CONTENT EDITOR SCRIPT END */
    </script>
{% endput %}
{% put styles  %}
    <link rel=\"stylesheet\" href=\"/contenteditor/styles\">
{% endput %}
", "C:\\work\\OSPanel\\domains\\tabylga/plugins/samuell/contenteditor/components/contenteditor/scripts.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("put" => 1, "for" => 5);
        static $filters = array("escape" => 6, "raw" => 6, "json_encode" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['put', 'for'],
                ['escape', 'raw', 'json_encode'],
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
