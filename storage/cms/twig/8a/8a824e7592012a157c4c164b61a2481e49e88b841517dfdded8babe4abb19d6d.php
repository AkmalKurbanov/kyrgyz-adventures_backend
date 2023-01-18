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

/* /home/a/akmalakmal/tabylga/public_html/plugins/anandpatel/seoextension/components/staticpage/default.htm */
class __TwigTemplate_13b862d19aa67ba92ecd026563978864c612f096e75bbe67946e3f680b335e19 extends \Twig\Template
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
        $tags = array("if" => 1);
        $filters = array("escape" => 2, "generateTitle" => 6, "generateCanonicalUrl" => 22, "raw" => 27, "otherMetaTags" => 27);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'generateTitle', 'generateCanonicalUrl', 'raw', 'otherMetaTags'],
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", [], "any", false, false, true, 1)) {
            // line 2
            echo "    <meta http-equiv=\"refresh\" content=\"0; url=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "redirect_url", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
            echo "\" />
";
        }
        // line 4
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [], "any", false, false, true, 5)) {
            // line 6
            echo "    <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_title", [], "any", false, false, true, 6), 6, $this->source)]);
            echo "</title>
";
        } else {
            // line 8
            echo "    <title>";
            echo call_user_func_array($this->env->getFilter('generateTitle')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "title", [], "any", false, false, true, 8), 8, $this->source)]);
            echo "</title>
";
        }
        // line 10
        echo "
";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", [], "any", false, false, true, 11)) {
            // line 12
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_description", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\">
";
        }
        // line 14
        echo "
";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", [], "any", false, false, true, 15)) {
            // line 16
            echo "    <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "seo_keywords", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\">
";
        }
        // line 18
        echo "
";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", [], "any", false, false, true, 19)) {
            // line 20
            echo "    <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canonical_url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\" />
";
        } else {
            // line 22
            echo "    ";
            echo call_user_func_array($this->env->getFilter('generateCanonicalUrl')->getCallable(), [""]);
            echo "
";
        }
        // line 24
        echo "
    <meta name=\"robots\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_index", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "robot_follow", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "\">

";
        // line 27
        echo call_user_func_array($this->env->getFilter('otherMetaTags')->getCallable(), [""]);
        echo "

";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", [], "any", false, false, true, 29)) {
            // line 30
            echo "<meta property=\"og:title\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogTitle", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\" />
";
        }
        // line 32
        echo "
";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", [], "any", false, false, true, 33)) {
            // line 34
            echo "<meta property=\"og:url\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogUrl", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "\" />
";
        }
        // line 36
        echo "
";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", [], "any", false, false, true, 37)) {
            // line 38
            echo "<meta property=\"og:site_name\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogSiteName", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\" />
";
        }
        // line 40
        echo "
";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", [], "any", false, false, true, 41)) {
            // line 42
            echo "<meta property=\"og:description\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogDescription", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "\" />
";
        }
        // line 44
        echo "
";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", [], "any", false, false, true, 45)) {
            // line 46
            echo "<meta property=\"fb:app_id\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "ogFbAppId", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "/home/a/akmalakmal/tabylga/public_html/plugins/anandpatel/seoextension/components/staticpage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 46,  185 => 45,  182 => 44,  176 => 42,  174 => 41,  171 => 40,  165 => 38,  163 => 37,  160 => 36,  154 => 34,  152 => 33,  149 => 32,  143 => 30,  141 => 29,  136 => 27,  129 => 25,  126 => 24,  120 => 22,  114 => 20,  112 => 19,  109 => 18,  103 => 16,  101 => 15,  98 => 14,  92 => 12,  90 => 11,  87 => 10,  81 => 8,  75 => 6,  73 => 5,  70 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.redirect_url %}
    <meta http-equiv=\"refresh\" content=\"0; url={{__SELF__.redirect_url}}\" />
{% endif %}

{% if __SELF__.seo_title %}
    <title>{{__SELF__.seo_title | generateTitle }}</title>
{% else %}
    <title>{{ __SELF__.title | generateTitle }}</title>
{% endif %}

{% if __SELF__.seo_description %}
    <meta name=\"description\" content=\"{{__SELF__.seo_description}}\">
{% endif %}

{% if __SELF__.seo_keywords %}
    <meta name=\"keywords\" content=\"{{__SELF__.seo_keywords}}\">
{% endif %}

{% if __SELF__.canonical_url %}
    <link rel=\"canonical\" href=\"{{__SELF__.canonical_url}}\" />
{% else %}
    {{ '' | generateCanonicalUrl}}
{% endif %}

    <meta name=\"robots\" content=\"{{__SELF__.robot_index}},{{__SELF__.robot_follow}}\">

{{ ''|otherMetaTags|raw }}

{% if __SELF__.ogTitle %}
<meta property=\"og:title\" content=\"{{ __SELF__.ogTitle }}\" />
{% endif %}

{% if __SELF__.ogUrl %}
<meta property=\"og:url\" content=\"{{ __SELF__.ogUrl }}\" />
{% endif %}

{% if __SELF__.ogSiteName %}
<meta property=\"og:site_name\" content=\"{{ __SELF__.ogSiteName }}\" />
{% endif %}

{% if __SELF__.ogDescription %}
<meta property=\"og:description\" content=\"{{ __SELF__.ogDescription }}\" />
{% endif %}

{% if __SELF__.ogFbAppId %}
<meta property=\"fb:app_id\" content=\"{{ __SELF__.ogFbAppId  }}\" />
{% endif %}
", "/home/a/akmalakmal/tabylga/public_html/plugins/anandpatel/seoextension/components/staticpage/default.htm", "");
    }
}
