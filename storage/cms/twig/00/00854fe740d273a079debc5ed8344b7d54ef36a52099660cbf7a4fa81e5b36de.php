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
class __TwigTemplate_605ca9716b1550dc0207b6a2da4c998c84d516d890cd307158e59e7a6876e4da extends \Twig\Template
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
        $tags = array("if" => 5, "for" => 29);
        $filters = array("escape" => 6, "page" => 13, "title" => 56);
        $functions = array();

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
            echo "\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i></a></li>

          ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 15), "url", [], "any", false, false, true, 15) == "/tour-detail/:slug")) {
                // line 16
                echo "          <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("tours");
                echo "\">
  
            ";
                // line 18
                if ((($context["activeLocaleName"] ?? null) == "ru")) {
                    // line 19
                    echo "              Туры
            ";
                } elseif ((                // line 20
($context["activeLocaleName"] ?? null) == "en")) {
                    echo " 
              Tours
            ";
                } elseif ((                // line 22
($context["activeLocaleName"] ?? null) == "de")) {
                    echo " 
              Touren
            ";
                }
                // line 24
                echo "               
          </a></li>
          <li>
            <a href=\"";
                // line 27
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
                echo "/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "category", [], "any", false, false, true, 27), "slug", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["recordDetail"] ?? null), "category", [], "any", false, false, true, 27), "name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "</a>
          </li>
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
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 38
($context["this"] ?? null), "page", [], "any", false, false, true, 38), "url", [], "any", false, false, true, 38) == "/guest-house-detail/:slug")) {
                // line 39
                echo "            <li><a href=\"/guest-houses\">
              ";
                // line 40
                if ((($context["activeLocaleName"] ?? null) == "ru")) {
                    // line 41
                    echo "              Гостевые дома
            ";
                } elseif ((                // line 42
($context["activeLocaleName"] ?? null) == "en")) {
                    echo " 
              Guest houses
            ";
                } elseif ((                // line 44
($context["activeLocaleName"] ?? null) == "de")) {
                    echo " 
              Gasthäuser
            ";
                }
                // line 46
                echo "  
            </a></li>
           ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 49
                    echo "          <li class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, true, 49)) ? ("active") : (""));
                    echo "\">
            <a href=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 50), "title", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo " </a>
          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "
          ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 54
($context["this"] ?? null), "page", [], "any", false, false, true, 54), "url", [], "any", false, false, true, 54) == "/blog/post/:slug")) {
                // line 55
                echo "          
          <li><a href=\"";
                // line 56
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "blog"), "html", null, true);
                echo "</a></li>
          <li>
            ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 58));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 59
                    echo "            <a href=\"/blog/category/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                    echo "</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "          </li>
          ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 63
                    echo "          <li class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, true, 63)) ? ("active") : (""));
                    echo "\">
            <a href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                    echo " </a>
          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "
          ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 68
($context["this"] ?? null), "page", [], "any", false, false, true, 68), "url", [], "any", false, false, true, 68) == "/blog/category/:slug/:page?")) {
                // line 69
                echo "          <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
                echo "\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "blog"), "html", null, true);
                echo "</a></li>
          ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 71
                    echo "          <li class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, true, 71)) ? ("active") : (""));
                    echo "\">
            <a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 72), "title", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                    echo " </a>
          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "
          ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 76
($context["this"] ?? null), "page", [], "any", false, false, true, 76), "url", [], "any", false, false, true, 76) == "/category/:category")) {
                // line 77
                echo "          <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("tours");
                echo "\">
            ";
                // line 78
                if ((($context["activeLocaleName"] ?? null) == "ru")) {
                    // line 79
                    echo "              Туры
            ";
                } elseif ((                // line 80
($context["activeLocaleName"] ?? null) == "en")) {
                    echo " 
              Tours
            ";
                } elseif ((                // line 82
($context["activeLocaleName"] ?? null) == "de")) {
                    echo " 
              Touren
            ";
                }
                // line 84
                echo "  
          </a></li>
          

          <li class=\"";
                // line 88
                echo ((twig_get_attribute($this->env, $this->source, ($context["breadcrumb"] ?? null), "isActive", [], "any", false, false, true, 88)) ? ("active") : (""));
                echo "\">
            <a href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["breadcrumb"] ?? null), "url", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["categoryDetail"] ?? null), "name", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                echo "</a>
          </li>
         


          ";
            } else {
                // line 95
                echo "
          
          ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                    // line 98
                    echo "          <li class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, true, 98)) ? ("active") : (""));
                    echo "\">
            <a href=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 99), "title", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                    echo " </a>
          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "

          ";
            }
            // line 105
            echo "

        </ul>
        ";
        }
        // line 109
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
        return array (  371 => 109,  365 => 105,  360 => 102,  349 => 99,  344 => 98,  340 => 97,  336 => 95,  325 => 89,  321 => 88,  315 => 84,  309 => 82,  304 => 80,  301 => 79,  299 => 78,  294 => 77,  292 => 76,  289 => 75,  278 => 72,  273 => 71,  269 => 70,  262 => 69,  260 => 68,  257 => 67,  246 => 64,  241 => 63,  237 => 62,  234 => 61,  223 => 59,  219 => 58,  212 => 56,  209 => 55,  207 => 54,  204 => 53,  193 => 50,  188 => 49,  184 => 48,  180 => 46,  174 => 44,  169 => 42,  166 => 41,  164 => 40,  161 => 39,  159 => 38,  153 => 34,  142 => 31,  137 => 30,  133 => 29,  124 => 27,  119 => 24,  113 => 22,  108 => 20,  105 => 19,  103 => 18,  97 => 16,  95 => 15,  90 => 13,  87 => 12,  85 => 11,  82 => 10,  76 => 8,  70 => 6,  68 => 5,  62 => 1,);
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
          <li><a href=\"{{ 'home'|page }}\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i></a></li>

          {% if this.page.url == '/tour-detail/:slug' %}
          <li><a href=\"{{ 'tours'|page }}\">
  
            {% if activeLocaleName  == 'ru' %}
              Туры
            {% elseif activeLocaleName  == 'en' %} 
              Tours
            {% elseif activeLocaleName  == 'de' %} 
              Touren
            {% endif %}               
          </a></li>
          <li>
            <a href=\"{{ 'home'|page }}/{{ recordDetail.category.slug }}\">{{ recordDetail.category.name }}</a>
          </li>
          {% for breadcrumb in breadcrumbs %}
          <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">
            <a href=\"{{ breadcrumb.url }}\">{{ this.page.title }} </a>
          </li>
          {% endfor %}
          
          
        

          {% elseif this.page.url == '/guest-house-detail/:slug' %}
            <li><a href=\"/guest-houses\">
              {% if activeLocaleName  == 'ru' %}
              Гостевые дома
            {% elseif activeLocaleName  == 'en' %} 
              Guest houses
            {% elseif activeLocaleName  == 'de' %} 
              Gasthäuser
            {% endif %}  
            </a></li>
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

          {% elseif this.page.url == '/category/:category' %}
          <li><a href=\"{{ 'tours'|page }}\">
            {% if activeLocaleName  == 'ru' %}
              Туры
            {% elseif activeLocaleName  == 'en' %} 
              Tours
            {% elseif activeLocaleName  == 'de' %} 
              Touren
            {% endif %}  
          </a></li>
          

          <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">
            <a href=\"{{ breadcrumb.url }}\">{{categoryDetail.name}}</a>
          </li>
         


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
}
