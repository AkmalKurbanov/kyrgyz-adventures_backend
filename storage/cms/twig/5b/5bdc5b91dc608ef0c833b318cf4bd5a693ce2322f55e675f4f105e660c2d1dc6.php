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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/guest-houses.htm */
class __TwigTemplate_02a1ab36a60a40ace497275f4871961a09f0fa1c63ed14cd591f929f0e646867 extends \Twig\Template
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
        $tags = array("for" => 4, "if" => 8);
        $filters = array("page" => 10, "resize" => 11, "media" => 18, "escape" => 24);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['page', 'resize', 'media', 'escape'],
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
        echo "<br>
<div class=\"container\">
  <div class=\"guesthouses\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "items", [], "any", false, false, true, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 5
            echo "
    <div class=\"news-item-style-03\">
      <div class=\"thumb\">
        ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 8)) {
                // line 9
                echo "        <a
          href=\"";
                // line 10
                echo ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 10)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 10), 10, $this->source), [twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 10) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 10)])) : (""));
                echo "\"
          style=\"background-image: url('";
                // line 11
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "preview_image", [], "any", false, false, true, 11), "getPath", [], "any", false, false, true, 11), 11, $this->source), 450, $this->sandbox->ensureToStringAllowed(($context["auto"] ?? null), 11, $this->source), ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "');\"
        >
        </a>

        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 15
$context["record"], "preview_image_media", [], "any", false, false, true, 15)) {
                // line 16
                echo "        <a
          href=\"";
                // line 17
                echo ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 17)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 17), 17, $this->source), [twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 17) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 17)])) : (""));
                echo "\"
          style=\"";
                // line 18
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "preview_image_media", [], "any", false, false, true, 18), 18, $this->source)), 450, $this->sandbox->ensureToStringAllowed(($context["auto"] ?? null), 18, $this->source), ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "');\"
        >
        </a>
        ";
            }
            // line 22
            echo "      </div>
      <div class=\"content\">
        <span class=\"subtitle\">";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "typeHouse", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</span>
        <h4 class=\"title\">
          <a
            href=\"";
            // line 27
            echo ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 27)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 27), 27, $this->source), [twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 27) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 27)])) : (""));
            echo "\"
            >";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</a
          >
        </h4>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/guest-houses.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 34,  122 => 28,  118 => 27,  112 => 24,  108 => 22,  101 => 18,  97 => 17,  94 => 16,  92 => 15,  85 => 11,  81 => 10,  78 => 9,  76 => 8,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<br>
<div class=\"container\">
  <div class=\"guesthouses\">
    {% for record in records.items %}

    <div class=\"news-item-style-03\">
      <div class=\"thumb\">
        {% if record.preview_image %}
        <a
          href=\"{{records.property('recordPage') ? records.property('recordPage')|page({(records.paramName('recordPageSlug')):(record.slug)})}}\"
          style=\"background-image: url('{{ record.preview_image.getPath | resize(450, auto, { mode: 'crop', quality: '80', extension: 'jpg' })}}');\"
        >
        </a>

        {% elseif record.preview_image_media %}
        <a
          href=\"{{records.property('recordPage') ? records.property('recordPage')|page({(records.paramName('recordPageSlug')):(record.slug)})}}\"
          style=\"{{ record.preview_image_media|media | resize(450, auto, { mode: 'crop', quality: '80', extension: 'jpg' })}}');\"
        >
        </a>
        {% endif %}
      </div>
      <div class=\"content\">
        <span class=\"subtitle\">{{record.typeHouse}}</span>
        <h4 class=\"title\">
          <a
            href=\"{{records.property('recordPage') ? records.property('recordPage')|page({(records.paramName('recordPageSlug')):(record.slug)})}}\"
            >{{ record.name }}</a
          >
        </h4>
      </div>
    </div>
    {% endfor %}
  </div>
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/guest-houses.htm", "");
    }
}
