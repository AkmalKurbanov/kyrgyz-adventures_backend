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

/* C:\work\OSPanel\domains\tabylga/plugins/rainlab/pages/components/staticmenu/items.htm */
class __TwigTemplate_4e10de318d15fcea1e58b9a42637da9379b4b0f66173fef4ce12dc3c90acc31a extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 2), "isHidden", [], "any", false, false, true, 2)) {
                // line 3
                echo "        <li role=\"presentation\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, true, 3)) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, true, 3)) ? ("child-active") : (""));
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 3), "cssClass", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
                echo "\">
            ";
                // line 4
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 4)) {
                    // line 5
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                    echo "\" ";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 5), "isExternal", [], "any", false, false, true, 5)) ? ("target=\"_blank\"") : (""));
                    echo ">
                    ";
                    // line 6
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                    echo "
                </a>
            ";
                } else {
                    // line 9
                    echo "                <span>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                    echo "</span>
            ";
                }
                // line 11
                echo "
            ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 12)) {
                    // line 13
                    echo "                <ul>";
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 13)                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    echo "</ul>
            ";
                }
                // line 15
                echo "        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/plugins/rainlab/pages/components/staticmenu/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  81 => 13,  79 => 12,  76 => 11,  70 => 9,  64 => 6,  57 => 5,  55 => 4,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in items %}
    {% if not item.viewBag.isHidden %}
        <li role=\"presentation\" class=\"{{ item.isActive ? 'active' : '' }} {{ item.isChildActive ? 'child-active' : '' }} {{ item.viewBag.cssClass }}\">
            {% if item.url %}
                <a href=\"{{ item.url }}\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}>
                    {{ item.title }}
                </a>
            {% else %}
                <span>{{ item.title }}</span>
            {% endif %}

            {% if item.items %}
                <ul>{% partial __SELF__ ~ \"::items\" items=item.items %}</ul>
            {% endif %}
        </li>
    {% endif %}
{% endfor %}
", "C:\\work\\OSPanel\\domains\\tabylga/plugins/rainlab/pages/components/staticmenu/items.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "if" => 2, "partial" => 13);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'partial'],
                ['escape'],
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
