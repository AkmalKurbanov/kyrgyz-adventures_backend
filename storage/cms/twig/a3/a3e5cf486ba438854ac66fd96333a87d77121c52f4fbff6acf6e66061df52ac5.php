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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/partials/commentspost/list.htm */
class __TwigTemplate_870b63f6e07a289ccfc6dafef821e96c6edbb1bc46359e6a0c9e11d643c2888c extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "<li>
  <div class=\"comment\" id=\"comment-";
            // line 3
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "\">
    <div class=\"comment-wrapper\">
      <div class=\"comment-avatar\">
        <img src=\"";
            // line 6
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar.jpg");
            echo "\">
      </div>
      <div class=\"comment-content\">
        <div class=\"comment-header\">
          <span class=\"comment-name\">";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</span>
          <a class=\"comment-date\" href=\"#comment-";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, true, 12), "diffForHumans", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "
          </a>
        </div>
        <div>";
            // line 15
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, true, 15), 15, $this->source);
            echo "</div>
        <div class=\"comment-footer\">
          <a class=\"comment-reply\" onclick=\"Comment.replay(event,'";
            // line 17
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "')\"><i class=\"fa fa-reply\"></i></a>
        </div>
      </div>
    </div>
    <div class=\"clearfix\"></div>
  </div>

  ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["post"], "children", [], "any", false, false, true, 24)) {
                // line 25
                echo "  <ul>
    ";
                // line 26
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['posts'] = twig_get_attribute($this->env, $this->source, $context["post"], "children", [], "any", false, false, true, 26)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("commentsPost::list"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 27
                echo "  </ul>
  ";
            }
            // line 29
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/partials/commentspost/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  98 => 27,  93 => 26,  90 => 25,  88 => 24,  78 => 17,  73 => 15,  67 => 12,  63 => 11,  59 => 10,  52 => 6,  46 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for post in posts %}
<li>
  <div class=\"comment\" id=\"comment-{{post.id}}\">
    <div class=\"comment-wrapper\">
      <div class=\"comment-avatar\">
        <img src=\"{{ 'assets/images/avatar.jpg'|theme }}\">
      </div>
      <div class=\"comment-content\">
        <div class=\"comment-header\">
          <span class=\"comment-name\">{{post.name}}</span>
          <a class=\"comment-date\" href=\"#comment-{{post.id}}\">
            {{post.created_at.diffForHumans}}
          </a>
        </div>
        <div>{{post.content|raw}}</div>
        <div class=\"comment-footer\">
          <a class=\"comment-reply\" onclick=\"Comment.replay(event,'{{post.id}}')\"><i class=\"fa fa-reply\"></i></a>
        </div>
      </div>
    </div>
    <div class=\"clearfix\"></div>
  </div>

  {% if post.children %}
  <ul>
    {% partial \"commentsPost::list\" posts=post.children %}
  </ul>
  {% endif %}
</li>
{% endfor %}", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/partials/commentspost/list.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "if" => 24, "partial" => 26);
        static $filters = array("escape" => 3, "theme" => 6, "raw" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'partial'],
                ['escape', 'theme', 'raw'],
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
