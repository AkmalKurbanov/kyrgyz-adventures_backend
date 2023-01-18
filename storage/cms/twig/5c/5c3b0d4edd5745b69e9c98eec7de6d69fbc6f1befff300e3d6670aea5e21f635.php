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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/blog-category.htm */
class __TwigTemplate_f43f2d5b2acea53457ae3ba1f51ca596b8446de8df72c50eb9771f843079cd4e extends \Twig\Template
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
        echo "<div class=\"blog-area margin-top-80\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">

        ";
        // line 6
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 6);
        // line 7
        echo "
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "        
        <div class=\"blog-details-style-01 margin-bottom-30\">
          <div class=\"post-wrap\">
            <div class=\"post-preview\">
              ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 14
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\"
                style=\"background-image: url('";
                // line 15
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 15), 15, $this->source), 810, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "')\">
              </a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "              <div class=\"post-info\">
                <span class=\"causes-tag mr-3\">
                  ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 21
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "url", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "</a>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </span>
                <div class=\"blog-date-box\">
                  <h4>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 25), 25, $this->source), "d"), "html", null, true);
            echo "<br><span>";
            echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 25), 25, $this->source), "%BP"]);
            echo "</span></h4>
                </div>
              </div>
            </div>
            <div class=\"post-content\">
              <h2><a href=\"#\">";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</a></h2>
              ";
            // line 31
            echo call_user_func_array($this->env->getFunction('str_words')->getCallable(), ["words", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 31), 31, $this->source), 20]);
            echo "
            </div>

          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "      </div>
      <div class=\"col-lg-4\">
        ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/blog-category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 40,  132 => 39,  128 => 37,  116 => 31,  112 => 30,  102 => 25,  98 => 23,  87 => 21,  83 => 20,  79 => 18,  70 => 15,  65 => 14,  61 => 13,  55 => 9,  51 => 8,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"blog-area margin-top-80\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">

        {% set posts = blogPosts.posts %}

        {% for post in posts %}
        
        <div class=\"blog-details-style-01 margin-bottom-30\">
          <div class=\"post-wrap\">
            <div class=\"post-preview\">
              {% for image in post.featured_images %}
              <a href=\"{{post.url}}\"
                style=\"background-image: url('{{image.path | resize(810, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}')\">
              </a>
              {% endfor %}
              <div class=\"post-info\">
                <span class=\"causes-tag mr-3\">
                  {% for cat in post.categories %}
                  <a href=\"{{cat.url}}\">{{cat.name}}</a>
                  {%endfor %}
                </span>
                <div class=\"blog-date-box\">
                  <h4>{{ post.published_at |date('d') }}<br><span>{{ post.published_at |rudate('%BP')}}</span></h4>
                </div>
              </div>
            </div>
            <div class=\"post-content\">
              <h2><a href=\"#\">{{post.title}}</a></h2>
              {{ str_words(post.content_html | raw, 20) }}
            </div>

          </div>
        </div>
        {% endfor %}
      </div>
      <div class=\"col-lg-4\">
        {% partial 'site/sidebar_blog' %}
      </div>
    </div>
  </div>
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/blog-category.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "for" => 8, "partial" => 39);
        static $filters = array("escape" => 14, "resize" => 15, "date" => 25, "rudate" => 25, "raw" => 31);
        static $functions = array("str_words" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'partial'],
                ['escape', 'resize', 'date', 'rudate', 'raw'],
                ['str_words']
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
