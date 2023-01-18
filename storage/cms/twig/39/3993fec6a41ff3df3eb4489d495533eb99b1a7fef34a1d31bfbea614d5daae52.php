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
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 1), "isHidden", [], "any", false, false, true, 1)) {
                // line 2
                echo "    <li role=\"presentation\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, true, 2)) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, true, 2)) ? ("child-active") : (""));
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 2), "cssClass", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
                echo "\">
        ";
                // line 3
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 3)) {
                    // line 4
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
                    echo "\" ";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 4), "isExternal", [], "any", false, false, true, 4)) ? ("target=\"_blank\"") : (""));
                    echo ">
                ";
                    // line 5
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                    echo "
            </a>
        ";
                } else {
                    // line 8
                    echo "            <span>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                    echo "</span>
        ";
                }
                // line 10
                echo "
        ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 11)) {
                    // line 12
                    echo "            <ul>";
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 12)                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    echo "</ul>
        ";
                }
                // line 14
                echo "    </li>
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
        return array (  88 => 14,  79 => 12,  77 => 11,  74 => 10,  68 => 8,  62 => 5,  55 => 4,  53 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in items if not item.viewBag.isHidden %}
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
{% endfor %}", "C:\\work\\OSPanel\\domains\\tabylga/plugins/rainlab/pages/components/staticmenu/items.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "if" => 3, "partial" => 12);
        static $filters = array("escape" => 2);
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
