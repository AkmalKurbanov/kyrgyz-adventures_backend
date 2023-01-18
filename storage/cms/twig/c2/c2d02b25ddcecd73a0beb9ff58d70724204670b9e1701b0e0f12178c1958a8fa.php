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

/* C:\work\OSPanel\domains\tabylga/plugins/martin/forms/components/partials/flash.htm */
class __TwigTemplate_d002e306c9ee3628dcb9a193555dc04a82fea23a318957196b91c6359eaf8060 extends \Twig\Template
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
        ob_start();
        // line 2
        echo "
    <div class=\"alert alert-";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 3, $this->source), "html", null, true);
        echo " alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>

    ";
        // line 6
        if (($context["title"] ?? null)) {
            // line 7
            echo "        <h4>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 7, $this->source), "html", null, true);
            echo "</h4>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if (($context["content"] ?? null)) {
            // line 11
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 11, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (($context["list"] ?? null)) {
            // line 15
            echo "        <ul>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 17, $this->source), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </ul>
    ";
        }
        // line 21
        echo "
    </div>

    ";
        // line 24
        if (($context["jscript"] ?? null)) {
            // line 25
            echo "        <script>
            ";
            // line 26
            if (($context["errors"] ?? null)) {
                // line 27
                echo "                var errors = JSON.parse('";
                echo $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 27, $this->source);
                echo "');
            ";
            }
            // line 29
            echo "            ";
            echo $this->sandbox->ensureToStringAllowed(($context["jscript"] ?? null), 29, $this->source);
            echo "
        </script>
    ";
        }
        // line 32
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/plugins/martin/forms/components/partials/flash.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  112 => 29,  106 => 27,  104 => 26,  101 => 25,  99 => 24,  94 => 21,  90 => 19,  81 => 17,  77 => 16,  74 => 15,  72 => 14,  69 => 13,  63 => 11,  61 => 10,  58 => 9,  52 => 7,  50 => 6,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}

    <div class=\"alert alert-{{ type }} alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>

    {% if title %}
        <h4>{{ title }}</h4>
    {% endif %}

    {% if content %}
        <p>{{ content }}</p>
    {% endif %}

    {% if list %}
        <ul>
        {% for item in list %}
            <li>{{ item }}</li>
        {% endfor %}
        </ul>
    {% endif %}

    </div>

    {% if jscript %}
        <script>
            {% if errors %}
                var errors = JSON.parse('{{ errors|raw }}');
            {% endif %}
            {{ jscript|raw }}
        </script>
    {% endif %}

{% endspaceless %}
", "C:\\work\\OSPanel\\domains\\tabylga/plugins/martin/forms/components/partials/flash.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("spaceless" => 1, "if" => 6, "for" => 16);
        static $filters = array("escape" => 3, "raw" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'for'],
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
