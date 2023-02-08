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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/post.htm */
class __TwigTemplate_1afce4dc5eef15c94c432a6c845b6a7e94c2d833d618bebd0e521feb5833d624 extends \Twig\Template
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
        $tags = array("set" => 6, "for" => 12, "if" => 17, "partial" => 56);
        $filters = array("resize" => 13, "escape" => 16, "date" => 16, "rudate" => 18, "_" => 33, "raw" => 43);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'partial'],
                ['resize', 'escape', 'date', 'rudate', '_', 'raw'],
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
        echo "<div class=\"blog-area margin-top-120\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">
        
        ";
        // line 6
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, true, 6);
        // line 7
        echo "


        <div class=\"blog-details-style-01 margin-bottom-100\">
          <div class=\"b-img\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 13
            echo "            <img src=\"";
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 13), 13, $this->source), 810, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo "\" alt=\"\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            <div class=\"blog-date-box\">
              <h4>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 16), 16, $this->source), "d"), "html", null, true);
        echo "<br><span>
                ";
        // line 17
        if ((($context["activeLocale"] ?? null) == "rus")) {
            // line 18
            echo "                ";
            echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 18), 18, $this->source), "%BP"]);
            echo "
                ";
        } else {
            // line 20
            echo "                ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 20), 20, $this->source), "M"), "html", null, true);
            echo "
                ";
        }
        // line 22
        echo "              </span></h4>
            </div>
          </div>
          <div class=\"b-content\">
            <div class=\"blog-meta\">
              <span class=\"causes-tag mr-3\">
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 29
            echo "                <a href=\"/blog/category/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "              </span>
              <ul>
                <li><span>";
        // line 33
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
            <h4 class=\"section-title\">";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "</h4>
            ";
        // line 43
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 43), 43, $this->source);
        echo "
          </div>
        </div>
        <div id=\"comments\" class=\"comments-area comments-area-wrapper\">
          ";
        // line 47
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["commentsPost"] ?? null), "posts", [], "any", false, false, true, 47);
        // line 48
        echo "
          <div class=\"col-xs-6\" id=\"comments-content\">
            <h4 class=\"comments-title\">
              (";
        // line 51
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["commentsPost"] ?? null), "count", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo ") комментарий
            </h4>
            <h6 style=\"margin-bottom: 30px; color:orange;\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your comment will appear after verification. <br> Thanks for understanding!"]);
        echo "</h6>
            <div class=\"comments\">
              <ul>
                ";
        // line 56
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['posts'] = ($context["posts"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("commentsPost::list"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "              </ul>
            </div>
            ";
        // line 59
        if ((($context["user"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commentsPost"] ?? null), "settings", [], "any", false, false, true, 59), "allow_guest", [], "any", false, false, true, 59))) {
            // line 60
            echo "
            ";
            // line 61
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("commentsPost::form"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 62
            echo "
            ";
        }
        // line 64
        echo "
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        ";
        // line 69
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar_blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 70
        echo "      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 70,  209 => 69,  202 => 64,  198 => 62,  194 => 61,  191 => 60,  189 => 59,  185 => 57,  180 => 56,  174 => 53,  169 => 51,  164 => 48,  162 => 47,  155 => 43,  151 => 42,  139 => 33,  135 => 31,  124 => 29,  120 => 28,  112 => 22,  106 => 20,  100 => 18,  98 => 17,  94 => 16,  91 => 15,  82 => 13,  78 => 12,  71 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"blog-area margin-top-120\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">
        
        {% set post = blogPost.post %}



        <div class=\"blog-details-style-01 margin-bottom-100\">
          <div class=\"b-img\">
            {% for image in post.featured_images %}
            <img src=\"{{image.path | resize(810, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}\" alt=\"\">
            {% endfor %}
            <div class=\"blog-date-box\">
              <h4>{{ post.published_at |date('d') }}<br><span>
                {% if activeLocale == 'rus' %}
                {{ post.published_at |rudate('%BP') }}
                {% else %}
                {{ post.published_at |date('M') }}
                {% endif %}
              </span></h4>
            </div>
          </div>
          <div class=\"b-content\">
            <div class=\"blog-meta\">
              <span class=\"causes-tag mr-3\">
                {% for cat in post.categories %}
                <a href=\"/blog/category/{{cat.slug}}\">{{cat.name}}</a>
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
            <h4 class=\"section-title\">{{post.title}}</h4>
            {{post.content_html | raw }}
          </div>
        </div>
        <div id=\"comments\" class=\"comments-area comments-area-wrapper\">
          {% set posts = commentsPost.posts %}

          <div class=\"col-xs-6\" id=\"comments-content\">
            <h4 class=\"comments-title\">
              ({{ commentsPost.count }}) комментарий
            </h4>
            <h6 style=\"margin-bottom: 30px; color:orange;\">{{'Your comment will appear after verification. <br> Thanks for understanding!'|_}}</h6>
            <div class=\"comments\">
              <ul>
                {% partial \"commentsPost::list\" posts=posts %}
              </ul>
            </div>
            {% if(user or commentsPost.settings.allow_guest) %}

            {% partial \"commentsPost::form\" %}

            {% endif %}

          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        {% partial 'site/sidebar_blog' %}
      </div>
    </div>
  </div>
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/post.htm", "");
    }
}
