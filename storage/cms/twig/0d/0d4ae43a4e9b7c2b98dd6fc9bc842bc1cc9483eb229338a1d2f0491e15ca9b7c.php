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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/partials/site/sidebar_blog.htm */
class __TwigTemplate_8fa65c3d68350301268639989a17d643097acb28a4d748752cf69cef4c06647f extends \Twig\Template
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
        echo "<div class=\"blog-right-content widget-area sidebar\">
  <!-- <div class=\"widget widget_search\">
    <form class=\"search-form\">
      <div class=\"form-group\">
        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Type something\">
      </div>
      <button class=\"submit-btn\" type=\"submit\">Search</button>
    </form>
  </div> -->
  <div class=\"widget latest-post-widget\">
    <div class=\"widget-title\">
      <h4>";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Latest posts"]);
        echo "</h4>
    </div>
    ";
        // line 14
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["latestPosts"] ?? null), "posts", [], "any", false, false, true, 14);
        // line 15
        echo "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 17
            echo "    <div class=\"latest-item\">
      <div class=\"content-part\">
        <p><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</a>
        </p>
        <span class=\"text\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 21), 21, $this->source), "d"), "html", null, true);
            echo " ";
            if ((($context["activeLocale"] ?? null) == "ru")) {
                echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 21), 21, $this->source), "%BP"]);
            } else {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 21), 21, $this->source), "M"), "html", null, true);
            }
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 21), 21, $this->source), "Y"), "html", null, true);
            echo "</span>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </div>
  <div class=\"widget widget_categories\">
    <h4 class=\"widget-title\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Categories"]);
        echo "</h4>
    <ul class=\"cat-menu\">
      ";
        // line 29
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", [], "any", false, false, true, 29)) > 0)) {
            // line 30
            echo "
      ";
            // line 31
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categories'] = twig_get_attribute($this->env, $this->source,             // line 32
($context["blogCategories"] ?? null), "categories", [], "any", false, false, true, 32)            ;
            $context['__cms_partial_params']['currentCategorySlug'] = twig_get_attribute($this->env, $this->source,             // line 33
($context["blogCategories"] ?? null), "currentCategorySlug", [], "any", false, false, true, 33)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((            // line 31
($context["blogCategories"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 35
            echo "
      ";
        } else {
            // line 37
            echo "      <p>No categories were found.</p>
      ";
        }
        // line 39
        echo "    </ul>
  </div>
  <!-- <div class=\"widget\">
    <div class=\"blog-sidebar-thumb\">
      <div class=\"thumb\">
        <img src=\"assets/img/blog/sidebar-img.png\" alt=\"\">
      </div>
      <div class=\"thumb-content\">
        <h4>Become a volunteer</h4>
        <div class=\"btn-wrapper align-self-center\">
          <a class=\"btn btn-custom-white\" href=\"#\">Join now</a>
        </div>
      </div>
    </div>
  </div> -->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/partials/site/sidebar_blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  122 => 37,  118 => 35,  115 => 31,  113 => 33,  111 => 32,  109 => 31,  106 => 30,  104 => 29,  99 => 27,  95 => 25,  77 => 21,  70 => 19,  66 => 17,  62 => 16,  59 => 15,  57 => 14,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"blog-right-content widget-area sidebar\">
  <!-- <div class=\"widget widget_search\">
    <form class=\"search-form\">
      <div class=\"form-group\">
        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Type something\">
      </div>
      <button class=\"submit-btn\" type=\"submit\">Search</button>
    </form>
  </div> -->
  <div class=\"widget latest-post-widget\">
    <div class=\"widget-title\">
      <h4>{{'Latest posts'|_}}</h4>
    </div>
    {% set posts = latestPosts.posts %}

    {% for post in posts %}
    <div class=\"latest-item\">
      <div class=\"content-part\">
        <p><a href=\"{{ post.url }}\">{{ post.title }}</a>
        </p>
        <span class=\"text\">{{ post.published_at | date('d') }} {% if activeLocale == 'ru' %}{{ post.published_at | rudate('%BP') }}{% else %}{{ post.published_at | date('M') }}{% endif %} {{ post.published_at | date('Y') }}</span>
      </div>
    </div>
    {% endfor %}
  </div>
  <div class=\"widget widget_categories\">
    <h4 class=\"widget-title\">{{'Categories'|_}}</h4>
    <ul class=\"cat-menu\">
      {% if blogCategories.categories|length > 0 %}

      {% partial blogCategories ~ \"::items\"
      categories = blogCategories.categories
      currentCategorySlug = blogCategories.currentCategorySlug
  %}

      {% else %}
      <p>No categories were found.</p>
      {% endif %}
    </ul>
  </div>
  <!-- <div class=\"widget\">
    <div class=\"blog-sidebar-thumb\">
      <div class=\"thumb\">
        <img src=\"assets/img/blog/sidebar-img.png\" alt=\"\">
      </div>
      <div class=\"thumb-content\">
        <h4>Become a volunteer</h4>
        <div class=\"btn-wrapper align-self-center\">
          <a class=\"btn btn-custom-white\" href=\"#\">Join now</a>
        </div>
      </div>
    </div>
  </div> -->
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/partials/site/sidebar_blog.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "for" => 16, "if" => 21, "partial" => 31);
        static $filters = array("_" => 12, "escape" => 19, "date" => 21, "rudate" => 21, "length" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'partial'],
                ['_', 'escape', 'date', 'rudate', 'length'],
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
