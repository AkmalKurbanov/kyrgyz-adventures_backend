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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/pages/blog.htm */
class __TwigTemplate_5411ad22754a038942aece1ae2627d5ea1fbaeb89cde7694a18c7f393359df6a extends \Twig\Template
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
        $tags = array("set" => 8, "for" => 10, "if" => 56, "partial" => 80);
        $filters = array("escape" => 15, "slice" => 16, "resize" => 17, "date" => 22, "rudate" => 22, "_" => 33, "raw" => 44, "page" => 59);
        $functions = array("str_words" => 44, "range" => 63);

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
            // line 20
            echo "                </a>
                <div class=\"blog-date-box\">
                  <h4>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 22), 22, $this->source), "d"), "html", null, true);
            echo "<br><span>";
            echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 22), 22, $this->source), "%BP"]);
            echo "</span></h4>
                </div>
              </div>
              <div class=\"b-content\">
                <div class=\"blog-meta flex-column flex-lg-row\">
                  <span class=\"causes-tag mr-3\">
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 29
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "url", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                  </span>
                  <ul>
                    <li><span>";
            // line 33
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Поделиться"]);
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
            // line 42
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</a>
                </h4>
                <p>";
            // line 44
            echo call_user_func_array($this->env->getFunction('str_words')->getCallable(), ["words", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 44), 44, $this->source), 30]);
            echo "</p>
                <div class=\"btn-wrapper\">
                  <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Подробнее"]);
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
        // line 53
        echo "        </div>
        <div class=\"blog-pagination\">

          ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 56) > 1)) {
            // line 57
            echo "          <ul class=\"pagination\">
            ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 58) > 1)) {
                // line 59
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 59), "baseFileName", [], "any", false, false, true, 59), 59, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 59) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 59) - 1)]);
                echo "\">&larr;
              </a></li>
            ";
            }
            // line 62
            echo "
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 63)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 64
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 64) == $context["page"])) ? ("active") : (null));
                echo "\">
              <a href=\"";
                // line 65
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 65), "baseFileName", [], "any", false, false, true, 65), 65, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 65) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 65, $this->source), "html", null, true);
                echo "</a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "
            ";
            // line 69
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 69) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 69))) {
                // line 70
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 70), "baseFileName", [], "any", false, false, true, 70), 70, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 70) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 70) + 1)]);
                echo "\">
                &rarr;</a></li>
            ";
            }
            // line 73
            echo "          </ul>
          ";
        }
        // line 75
        echo "
        </div>

      </div>
      <div class=\"col-lg-4\">
        ";
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "      </div>
    </div>
  </div>
</div>
<!-- blog area end -->";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 81,  245 => 80,  238 => 75,  234 => 73,  227 => 70,  225 => 69,  222 => 68,  211 => 65,  206 => 64,  202 => 63,  199 => 62,  192 => 59,  190 => 58,  187 => 57,  185 => 56,  180 => 53,  165 => 46,  160 => 44,  153 => 42,  141 => 33,  137 => 31,  126 => 29,  122 => 28,  111 => 22,  107 => 20,  99 => 18,  94 => 17,  90 => 16,  86 => 15,  80 => 11,  76 => 10,  73 => 9,  71 => 8,  62 => 1,);
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
                  <h4>{{ post.published_at |date('d') }}<br><span>{{ post.published_at |rudate('%BP') }}</span></h4>
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
                    <li><span>{{'Поделиться'|_}}</span></li>
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
                  <a href=\"{{ post.url }}\">{{'Подробнее'|_}}</a> ➝
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
<!-- blog area end -->", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/pages/blog.htm", "");
    }
}
