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

/* C:\work\OSPanel\domains\tabylga/plugins/janvince/smallrecords/components/categories/default.htm */
class __TwigTemplate_a8333b6ec4fdc3b40542651ef0c316956f06ff767ea95928ac0e45c80943a82d extends \Twig\Template
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
        echo "<div class=\"container ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cssClass"] ?? null), 1, $this->source), "html", null, true);
        echo "\">

    <div class=\"row\">

        <div class=\"col-xs-12\">

            <h1>Categories</h1>

        </div>

        <div class=\"col-xs-12 col-xs-6\">

            <ul class=\"list-group\">
                                
                <li class=\"list-group-item\">Limit records to list: <strong>";
        // line 15
        ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "areaSlug"], "method", false, false, true, 15)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "areaSlug"], "method", false, false, true, 15), "html", null, true))) : (print ("Not set")));
        echo "</strong></li>
                
                ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "activeRecordsOnly"], "method", false, false, true, 17)) {
            // line 18
            echo "                    <li class=\"list-group-item\">Limit records to active only: <strong><span class=\"glyphicon ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "activeRecordsOnly"], "method", false, false, true, 18)) ? ("glyphicon-check") : ("glyphicon-unchecked"));
            echo "\"></span></strong></li>
                ";
        }
        // line 20
        echo "
                ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "useMainCategory"], "method", false, false, true, 21)) {
            // line 22
            echo "                    <li class=\"list-group-item\">Only categories with records as Main category: <strong><span class=\"glyphicon glyphicon-check\"></span></strong></li>
                ";
        }
        // line 24
        echo "
                ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "useMultiCategories"], "method", false, false, true, 25)) {
            // line 26
            echo "                    <li class=\"list-group-item\">Only categories with records as Secondary category: <strong><span class=\"glyphicon glyphicon-check\"></span></strong></li>
                ";
        }
        // line 28
        echo "
                ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categoriesPageSlug"], "method", false, false, true, 29)) {
            // line 30
            echo "                    <li class=\"list-group-item\">Current category slug: <strong>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categoriesPageSlug"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</strong></li>
                ";
        }
        // line 32
        echo "
            </ul>

        </div>

        <div class=\"col-xs-12\">

            <hr>
        
            <ul class=\"nav nav-pills\">

                <li role=\"presentation\" class=\"";
        // line 43
        echo (((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categoriesPageSlug"], "method", false, false, true, 43) == twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, true, 43))) ? ("active") : (""));
        echo "\">

                    <a href=\"";
        // line 45
        echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categoriesPage"], "method", false, false, true, 45)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categoriesPage"], "method", false, false, true, 45), 45, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "paramName", [0 => "categoriesPageSlug"], "method", false, false, true, 45) => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, true, 45)])) : (""));
        echo "\">
                
                        All

                    </a>
                
                </li>

                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "items", [], "any", false, false, true, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 54
            echo "
                    <li role=\"presentation\" class=\"";
            // line 55
            echo (((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categoriesPageSlug"], "method", false, false, true, 55) == twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 55))) ? ("active") : (""));
            echo "\">

                        <a href=\"";
            // line 57
            echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categoriesPage"], "method", false, false, true, 57)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categoriesPage"], "method", false, false, true, 57), 57, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "paramName", [0 => "categoriesPageSlug"], "method", false, false, true, 57) => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 57)])) : (""));
            echo "\">
                    
                            ";
            // line 59
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo " 

                        </a>

                    </li>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
            </ul>

            <hr>
        
        </div>

        <div class=\"col-xs-12\">

            <h3>Categories details</h3>

            <table class=\"table table-bordered table-striped table-hover\">

                <tr>
                
                    <th>Preview image</th>
                    <th>Name</th>
                    <th>Parent category</th>
                    <th>Child categories</th>
                    <th>Records (main category)</th>
                    <th>Records (secondary categories)</th>
                
                </tr>

                ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "items", [], "any", false, false, true, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 91
            echo "
                    <tr>

                        <th width=\"150\">
                            ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, $context["category"], "preview_image", [], "any", false, false, true, 95)) {
                // line 96
                echo "                                <img class=\"thumbnail\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "preview_image", [], "any", false, false, true, 96), "getPath", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
                echo "\" width=\"100%\" />
                            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 97
($context["record"] ?? null), "preview_image_media", [], "any", false, false, true, 97)) {
                // line 98
                echo "                                <img class=\"thumbnail\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "preview_image_media", [], "any", false, false, true, 98), 98, $this->source));
                echo "\" width=\"100%\" />
                            ";
            }
            // line 99
            echo "            
                        </th>

                        <td>
                            <a href=\"";
            // line 103
            echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categoryPage"], "method", false, false, true, 103)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categoryPage"], "method", false, false, true, 103), 103, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "paramName", [0 => "categoriesPageSlug"], "method", false, false, true, 103) => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 103)])) : (""));
            echo "\">
                                ";
            // line 104
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
                            </a>
                        </td>

                        <td>
                            ";
            // line 109
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, true, 109), "name", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
                        </td>

                        <td>

                            ";
            // line 114
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, true, 114))) {
                // line 115
                echo "
                            <ul>

                                ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, true, 118));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 119
                    echo "
                                    <li>
                                        <a href=\"";
                    // line 121
                    echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categoryPage"], "method", false, false, true, 121)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categoryPage"], "method", false, false, true, 121), 121, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "paramName", [0 => "categoriesPageSlug"], "method", false, false, true, 121) => twig_get_attribute($this->env, $this->source, $context["child"], "slug", [], "any", false, false, true, 121)])) : (""));
                    echo "\">
                                            ";
                    // line 122
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                    echo "
                                        </a>
                                    </li>

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "
                            </ul>

                            ";
            }
            // line 131
            echo "
                        </td>

                        <td>

                            ";
            // line 136
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "records", [], "any", false, false, true, 136))) {
                // line 137
                echo "
                            <ul>

                                ";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "records", [], "any", false, false, true, 140));
                foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                    // line 141
                    echo "
                                    <li>";
                    // line 142
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
                    echo " [";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "area", [], "any", false, false, true, 142), "name", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
                    echo "]</li>

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "
                            </ul>

                            ";
            }
            // line 149
            echo "
                        </td>

                        <td>

                            ";
            // line 154
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "records_multicategories", [], "any", false, false, true, 154))) {
                // line 155
                echo "
                            <ul>

                                ";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "records_multicategories", [], "any", false, false, true, 158));
                foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                    // line 159
                    echo "
                                    <li>";
                    // line 160
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
                    echo " [";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "area", [], "any", false, false, true, 160), "name", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
                    echo "]</li>

                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "
                            </ul>

                            ";
            }
            // line 167
            echo "
                        </td>

                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "
            </table>

        </div>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/plugins/janvince/smallrecords/components/categories/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 173,  351 => 167,  345 => 163,  334 => 160,  331 => 159,  327 => 158,  322 => 155,  320 => 154,  313 => 149,  307 => 145,  296 => 142,  293 => 141,  289 => 140,  284 => 137,  282 => 136,  275 => 131,  269 => 127,  258 => 122,  254 => 121,  250 => 119,  246 => 118,  241 => 115,  239 => 114,  231 => 109,  223 => 104,  219 => 103,  213 => 99,  205 => 98,  203 => 97,  196 => 96,  194 => 95,  188 => 91,  184 => 90,  158 => 66,  145 => 59,  140 => 57,  135 => 55,  132 => 54,  128 => 53,  117 => 45,  112 => 43,  99 => 32,  93 => 30,  91 => 29,  88 => 28,  84 => 26,  82 => 25,  79 => 24,  75 => 22,  73 => 21,  70 => 20,  64 => 18,  62 => 17,  57 => 15,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container {{ cssClass }}\">

    <div class=\"row\">

        <div class=\"col-xs-12\">

            <h1>Categories</h1>

        </div>

        <div class=\"col-xs-12 col-xs-6\">

            <ul class=\"list-group\">
                                
                <li class=\"list-group-item\">Limit records to list: <strong>{{__SELF__.property('areaSlug') ? __SELF__.property('areaSlug') : 'Not set'}}</strong></li>
                
                {% if __SELF__.property('activeRecordsOnly') %}
                    <li class=\"list-group-item\">Limit records to active only: <strong><span class=\"glyphicon {{__SELF__.property('activeRecordsOnly') ? 'glyphicon-check' : 'glyphicon-unchecked'}}\"></span></strong></li>
                {% endif %}

                {% if __SELF__.property('useMainCategory') %}
                    <li class=\"list-group-item\">Only categories with records as Main category: <strong><span class=\"glyphicon glyphicon-check\"></span></strong></li>
                {% endif %}

                {% if __SELF__.property('useMultiCategories') %}
                    <li class=\"list-group-item\">Only categories with records as Secondary category: <strong><span class=\"glyphicon glyphicon-check\"></span></strong></li>
                {% endif %}

                {% if __SELF__.property('categoriesPageSlug') %}
                    <li class=\"list-group-item\">Current category slug: <strong>{{__SELF__.property('categoriesPageSlug')}}</strong></li>
                {% endif %}

            </ul>

        </div>

        <div class=\"col-xs-12\">

            <hr>
        
            <ul class=\"nav nav-pills\">

                <li role=\"presentation\" class=\"{{ __SELF__.property('categoriesPageSlug') == category.slug ? 'active'}}\">

                    <a href=\"{{__SELF__.property('categoriesPage') ? __SELF__.property('categoriesPage')|page({(__SELF__.paramName('categoriesPageSlug')):(category.slug)})}}\">
                
                        All

                    </a>
                
                </li>

                {% for category in __SELF__.items %}

                    <li role=\"presentation\" class=\"{{ __SELF__.property('categoriesPageSlug') == category.slug ? 'active'}}\">

                        <a href=\"{{__SELF__.property('categoriesPage') ? __SELF__.property('categoriesPage')|page({(__SELF__.paramName('categoriesPageSlug')):(category.slug)})}}\">
                    
                            {{ category.name }} 

                        </a>

                    </li>

                {% endfor %}

            </ul>

            <hr>
        
        </div>

        <div class=\"col-xs-12\">

            <h3>Categories details</h3>

            <table class=\"table table-bordered table-striped table-hover\">

                <tr>
                
                    <th>Preview image</th>
                    <th>Name</th>
                    <th>Parent category</th>
                    <th>Child categories</th>
                    <th>Records (main category)</th>
                    <th>Records (secondary categories)</th>
                
                </tr>

                {% for category in __SELF__.items %}

                    <tr>

                        <th width=\"150\">
                            {% if category.preview_image %}
                                <img class=\"thumbnail\" alt=\"{{ category.name }}\" src=\"{{ category.preview_image.getPath }}\" width=\"100%\" />
                            {% elseif record.preview_image_media %}
                                <img class=\"thumbnail\" alt=\"{{ category.name }}\" src=\"{{ category.preview_image_media|media }}\" width=\"100%\" />
                            {% endif %}            
                        </th>

                        <td>
                            <a href=\"{{__SELF__.property('categoryPage') ? __SELF__.property('categoryPage')|page({(__SELF__.paramName('categoriesPageSlug')):(category.slug)})}}\">
                                {{ category.name }}
                            </a>
                        </td>

                        <td>
                            {{ category.parent.name }}
                        </td>

                        <td>

                            {% if category.children|length %}

                            <ul>

                                {% for child in category.children %}

                                    <li>
                                        <a href=\"{{__SELF__.property('categoryPage') ? __SELF__.property('categoryPage')|page({(__SELF__.paramName('categoriesPageSlug')):(child.slug)})}}\">
                                            {{ child.name }}
                                        </a>
                                    </li>

                                {% endfor %}

                            </ul>

                            {% endif %}

                        </td>

                        <td>

                            {% if category.records|length %}

                            <ul>

                                {% for record in category.records %}

                                    <li>{{ record.name }} [{{record.area.name}}]</li>

                                {% endfor %}

                            </ul>

                            {% endif %}

                        </td>

                        <td>

                            {% if category.records_multicategories|length %}

                            <ul>

                                {% for record in category.records_multicategories %}

                                    <li>{{ record.name }} [{{record.area.name}}]</li>

                                {% endfor %}

                            </ul>

                            {% endif %}

                        </td>

                    </tr>

                {% endfor %}

            </table>

        </div>

    </div>

</div>", "C:\\work\\OSPanel\\domains\\tabylga/plugins/janvince/smallrecords/components/categories/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17, "for" => 53);
        static $filters = array("escape" => 1, "page" => 45, "media" => 98, "length" => 114);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'page', 'media', 'length'],
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
