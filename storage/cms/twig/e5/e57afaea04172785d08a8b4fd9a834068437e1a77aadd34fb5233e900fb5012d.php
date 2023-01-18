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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/partials/site/inner_banner.htm */
class __TwigTemplate_b9af272cfa689d0e107c2c06edde62668893761dfcbbfdcc6f42a2af07076461 extends \Twig\Template
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
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"breadcrumb-inner padding-top-240\">
        ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "url", [], "any", false, false, true, 5) == "/blog/post/:slug")) {
            // line 6
            echo "        <h1 class=\"page-title\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "</h1>
        ";
        } else {
            // line 8
            echo "        <h1 class=\"page-title\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</h1>
        ";
        }
        // line 10
        echo "
        ";
        // line 11
        if (($context["breadcrumbs"] ?? null)) {
            // line 12
            echo "        <ul class=\"page-list\">
          <li><a href=\"";
            // line 13
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "home"), "html", null, true);
            echo "</a></li>

          ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 15), "url", [], "any", false, false, true, 15) == "/tour-detail/:slug")) {
                // line 16
                echo "          <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("tours");
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "tours"), "html", null, true);
                echo "</a></li>
          <li>
            <a href=\"";
                // line 18
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                echo "/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "category", [], "any", false, false, true, 18), "slug", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "category", [], "any", false, false, true, 18), "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "</a>
          </li>
          ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 21
                    echo "          <li class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, true, 21)) ? ("active") : (""));
                    echo "\">
            <a href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 22), "title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    echo " </a>
          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "          
          
          ";
            } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 27
($context["this"] ?? null), "page", [], "any", false, false, true, 27), "url", [], "any", false, false, true, 27) == "/summer-tours") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 27), "url", [], "any", false, false, true, 27) == "/winter-tours"))) {
                // line 28
                echo "          <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("tours");
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "tours"), "html", null, true);
                echo "</a></li>
          ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 30
                    echo "          <li class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, true, 30)) ? ("active") : (""));
                    echo "\">
            <a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 31), "title", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                    echo " </a>
          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "
          ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
($context["this"] ?? null), "page", [], "any", false, false, true, 35), "url", [], "any", false, false, true, 35) == "/guest-house-detail/:slug")) {
                // line 36
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("guest houses");
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "guest houses"), "html", null, true);
                echo "</a></li>
           ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 38
                    echo "          <li class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, true, 38)) ? ("active") : (""));
                    echo "\">
            <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 39), "title", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo " </a>
          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "
          ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 43
($context["this"] ?? null), "page", [], "any", false, false, true, 43), "url", [], "any", false, false, true, 43) == "/blog/post/:slug")) {
                // line 44
                echo "          
          <li><a href=\"";
                // line 45
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "blog"), "html", null, true);
                echo "</a></li>
          <li>
            ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 48
                    echo "            <a href=\"/blog/category/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                    echo "</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "          </li>
          ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 52
                    echo "          <li class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, true, 52)) ? ("active") : (""));
                    echo "\">
            <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                    echo " </a>
          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "
          ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 57
($context["this"] ?? null), "page", [], "any", false, false, true, 57), "url", [], "any", false, false, true, 57) == "/blog/category/:slug/:page?")) {
                // line 58
                echo "          <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "blog"), "html", null, true);
                echo "</a></li>
          ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 60
                    echo "          <li class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, true, 60)) ? ("active") : (""));
                    echo "\">
            <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 61), "title", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo " </a>
          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "          ";
            } else {
                // line 65
                echo "
          
          ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 68
                    echo "          <li class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, true, 68)) ? ("active") : (""));
                    echo "\">
            <a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 69), "title", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo " </a>
          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "

          ";
            }
            // line 75
            echo "

        </ul>
        ";
        }
        // line 79
        echo "      </div>
    </div>
  </div>
</div>
<div class=\"breadcrumb-icon\">
  <i class=\"flaticon-fireworks\"></i>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/partials/site/inner_banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 79,  295 => 75,  290 => 72,  279 => 69,  274 => 68,  270 => 67,  266 => 65,  263 => 64,  252 => 61,  247 => 60,  243 => 59,  236 => 58,  234 => 57,  231 => 56,  220 => 53,  215 => 52,  211 => 51,  208 => 50,  197 => 48,  193 => 47,  186 => 45,  183 => 44,  181 => 43,  178 => 42,  167 => 39,  162 => 38,  158 => 37,  151 => 36,  149 => 35,  146 => 34,  135 => 31,  130 => 30,  126 => 29,  119 => 28,  117 => 27,  113 => 25,  102 => 22,  97 => 21,  93 => 20,  84 => 18,  76 => 16,  74 => 15,  67 => 13,  64 => 12,  62 => 11,  59 => 10,  53 => 8,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-12\">
      <div class=\"breadcrumb-inner padding-top-240\">
        {% if this.page.url == '/blog/post/:slug' %}
        <h1 class=\"page-title\">{{post.title}}</h1>
        {% else %}
        <h1 class=\"page-title\">{{this.page.title}}</h1>
        {% endif %}

        {% if breadcrumbs %}
        <ul class=\"page-list\">
          <li><a href=\"{{ 'home'|page }}\">{{ 'home'|title }}</a></li>

          {% if this.page.url == '/tour-detail/:slug' %}
          <li><a href=\"{{ 'tours'|page }}\">{{ 'tours'|title }}</a></li>
          <li>
            <a href=\"{{ 'home'|page }}/{{ recordDetail.category.slug }}\">{{ recordDetail.category.name }}</a>
          </li>
          {% for breadcrumb in breadcrumbs %}
          <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">
            <a href=\"{{ breadcrumb.url }}\">{{ this.page.title }} </a>
          </li>
          {% endfor %}
          
          
          {% elseif this.page.url == '/summer-tours' or this.page.url == '/winter-tours' %}
          <li><a href=\"{{ 'tours'|page }}\">{{ 'tours'|title }}</a></li>
          {% for breadcrumb in breadcrumbs %}
          <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">
            <a href=\"{{ breadcrumb.url }}\">{{ this.page.title }} </a>
          </li>
          {% endfor %}

          {% elseif this.page.url == '/guest-house-detail/:slug' %}
            <li><a href=\"{{ 'guest houses'|page }}\">{{ 'guest houses'|title }}</a></li>
           {% for breadcrumb in breadcrumbs %}
          <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">
            <a href=\"{{ breadcrumb.url }}\">{{ this.page.title }} </a>
          </li>
          {% endfor %}

          {% elseif this.page.url == '/blog/post/:slug' %}
          
          <li><a href=\"{{ 'blog'|page }}\">{{ 'blog'|title }}</a></li>
          <li>
            {% for cat in post.categories %}
            <a href=\"/blog/category/{{cat.slug}}\">{{cat.name}}</a>
            {%endfor %}
          </li>
          {% for breadcrumb in breadcrumbs %}
          <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">
            <a href=\"{{ breadcrumb.url }}\">{{ post.title }} </a>
          </li>
          {% endfor %}

          {% elseif this.page.url == '/blog/category/:slug/:page?' %}
          <li><a href=\"{{ 'blog'|page }}\">{{ 'blog'|title }}</a></li>
          {% for breadcrumb in breadcrumbs %}
          <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">
            <a href=\"{{ breadcrumb.url }}\">{{ this.page.title }} </a>
          </li>
          {% endfor %}
          {% else %}

          
          {% for breadcrumb in breadcrumbs %}
          <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">
            <a href=\"{{ breadcrumb.url }}\">{{ this.page.title }} </a>
          </li>
          {% endfor %}


          {% endif %}


        </ul>
        {% endif %}
      </div>
    </div>
  </div>
</div>
<div class=\"breadcrumb-icon\">
  <i class=\"flaticon-fireworks\"></i>
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/partials/site/inner_banner.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "for" => 20);
        static $filters = array("escape" => 6, "page" => 13, "title" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'page', 'title'],
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
