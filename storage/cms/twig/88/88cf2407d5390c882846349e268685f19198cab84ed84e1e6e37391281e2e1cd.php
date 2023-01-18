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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/blog.htm */
class __TwigTemplate_b49ecdf918cad2bcfb128dea46d43d0f6faaed446d641d42c872840dc4adf2a0 extends \Twig\Template
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
        echo "<!-- blog area start -->
<div class=\"blog-area margin-top-120\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">
        <div class=\"row\">

          ";
        // line 8
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 8);
        // line 9
        echo "
          ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "
          <div class=\"col-md-12\">
            <div class=\"blog-item-style-01 margin-bottom-30\">
              <div class=\"b-img\">
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">
                  ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 16), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 17
                echo "                  <img src=\"";
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 17), 17, $this->source), 810, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "\"
                    alt=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\">
                    
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                </a>
                <div class=\"blog-date-box\">
                  <h4>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 23), 23, $this->source), "d"), "html", null, true);
            echo "<br><span>
                    ";
            // line 24
            if ((($context["activeLocale"] ?? null) == "ru")) {
                // line 25
                echo "                    ";
                echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 25), 25, $this->source), "%BP"]);
                echo "
                    ";
            } else {
                // line 27
                echo "                    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 27), 27, $this->source), "M"), "html", null, true);
                echo "
                    ";
            }
            // line 29
            echo "                  </span></h4>
                </div>
              </div>
              <div class=\"b-content\">
                <div class=\"blog-meta flex-column flex-lg-row\">
                  <span class=\"causes-tag mr-3\">
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 36
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "url", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                  </span>
                  <ul>
                    <li><span>";
            // line 40
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Share"]);
            echo "</span></li>
                    <li>
                      <script src=\"https://yastatic.net/share2/share.js\"></script>
                      <div class=\"ya-share2\" data-curtain data-size=\"s\" data-shape=\"round\" data-limit=\"0\"
                        data-more-button-type=\"short\"
                        data-services=\"vkontakte,facebook,odnoklassniki,telegram,twitter,whatsapp,skype\"></div>
                    </li>
                  </ul>
                </div>
                <h4 class=\"section-title\"><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "</a>
                </h4>
                <p>";
            // line 51
            echo call_user_func_array($this->env->getFunction('str_words')->getCallable(), ["words", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 51), 51, $this->source), 30]);
            echo "</p>
                <div class=\"btn-wrapper\">
                  <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["More"]);
            echo "</a> ➝
                </div>
              </div>
            </div>
          </div>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </div>
        <div class=\"blog-pagination\">

          ";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 63) > 1)) {
            // line 64
            echo "          <ul class=\"pagination\">
            ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 65) > 1)) {
                // line 66
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 66), "baseFileName", [], "any", false, false, true, 66), 66, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 66) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 66) - 1)]);
                echo "\">&larr;
              </a></li>
            ";
            }
            // line 69
            echo "
            ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 70)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 71
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 71) == $context["page"])) ? ("active") : (null));
                echo "\">
              <a href=\"";
                // line 72
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 72), "baseFileName", [], "any", false, false, true, 72), 72, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 72) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 72, $this->source), "html", null, true);
                echo "</a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "
            ";
            // line 76
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 76) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 76))) {
                // line 77
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 77), "baseFileName", [], "any", false, false, true, 77), 77, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 77) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 77) + 1)]);
                echo "\">
                &rarr;</a></li>
            ";
            }
            // line 80
            echo "          </ul>
          ";
        }
        // line 82
        echo "
        </div>

      </div>
      <div class=\"col-lg-4\">
        ";
        // line 87
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 88
        echo "      </div>
    </div>
  </div>
</div>
<!-- blog area end -->";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 88,  238 => 87,  231 => 82,  227 => 80,  220 => 77,  218 => 76,  215 => 75,  204 => 72,  199 => 71,  195 => 70,  192 => 69,  185 => 66,  183 => 65,  180 => 64,  178 => 63,  173 => 60,  158 => 53,  153 => 51,  146 => 49,  134 => 40,  130 => 38,  119 => 36,  115 => 35,  107 => 29,  101 => 27,  95 => 25,  93 => 24,  89 => 23,  85 => 21,  76 => 18,  71 => 17,  67 => 16,  63 => 15,  57 => 11,  53 => 10,  50 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- blog area start -->
<div class=\"blog-area margin-top-120\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">
        <div class=\"row\">

          {% set posts = blogPosts.posts %}

          {% for post in posts %}

          <div class=\"col-md-12\">
            <div class=\"blog-item-style-01 margin-bottom-30\">
              <div class=\"b-img\">
                <a href=\"{{ post.url }}\">
                  {% for image in post.featured_images|slice(0,1) %}
                  <img src=\"{{image.path | resize(810, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}\"
                    alt=\"{{ post.title }}\">
                    
                  {% endfor %}
                </a>
                <div class=\"blog-date-box\">
                  <h4>{{ post.published_at |date('d') }}<br><span>
                    {% if activeLocale == 'ru' %}
                    {{ post.published_at |rudate('%BP') }}
                    {% else %}
                    {{ post.published_at |date('M') }}
                    {% endif %}
                  </span></h4>
                </div>
              </div>
              <div class=\"b-content\">
                <div class=\"blog-meta flex-column flex-lg-row\">
                  <span class=\"causes-tag mr-3\">
                    {% for cat in post.categories %}
                    <a href=\"{{cat.url}}\">{{cat.name}}</a>
                    {%endfor %}
                  </span>
                  <ul>
                    <li><span>{{'Share'|_}}</span></li>
                    <li>
                      <script src=\"https://yastatic.net/share2/share.js\"></script>
                      <div class=\"ya-share2\" data-curtain data-size=\"s\" data-shape=\"round\" data-limit=\"0\"
                        data-more-button-type=\"short\"
                        data-services=\"vkontakte,facebook,odnoklassniki,telegram,twitter,whatsapp,skype\"></div>
                    </li>
                  </ul>
                </div>
                <h4 class=\"section-title\"><a href=\"{{ post.url }}\">{{ post.title }}</a>
                </h4>
                <p>{{ str_words(post.content_html | raw, 30) }}</p>
                <div class=\"btn-wrapper\">
                  <a href=\"{{ post.url }}\">{{'More'|_}}</a> ➝
                </div>
              </div>
            </div>
          </div>

          {% endfor %}
        </div>
        <div class=\"blog-pagination\">

          {% if posts.lastPage > 1 %}
          <ul class=\"pagination\">
            {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName | page({ (blogPosts.pageParam): (posts.currentPage-1) }) }}\">&larr;
              </a></li>
            {% endif %}

            {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
              <a href=\"{{ this.page.baseFileName | page({ (blogPosts.pageParam): page }) }}\">{{ page }}</a>
            </li>
            {% endfor %}

            {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName | page({ (blogPosts.pageParam): (posts.currentPage+1) }) }}\">
                &rarr;</a></li>
            {% endif %}
          </ul>
          {% endif %}

        </div>

      </div>
      <div class=\"col-lg-4\">
        {% partial 'site/sidebar_blog' %}
      </div>
    </div>
  </div>
</div>
<!-- blog area end -->", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/blog.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "for" => 10, "if" => 24, "partial" => 87);
        static $filters = array("escape" => 15, "slice" => 16, "resize" => 17, "date" => 23, "rudate" => 25, "_" => 40, "raw" => 51, "page" => 66);
        static $functions = array("str_words" => 51, "range" => 70);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'partial'],
                ['escape', 'slice', 'resize', 'date', 'rudate', '_', 'raw', 'page'],
                ['str_words', 'range']
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
