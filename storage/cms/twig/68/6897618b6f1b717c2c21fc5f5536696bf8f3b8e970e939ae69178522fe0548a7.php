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

/* C:\work\OSPanel\domains\tabylga/plugins/janvince/smallrecords/components/categorydetail/default.htm */
class __TwigTemplate_c2fe25174b77676991c14b62c99284cf95ab1ce119621373f8aa2691eb466fac extends \Twig\Template
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
        $tags = array("if" => 15, "for" => 88);
        $filters = array("escape" => 1, "page" => 37, "nl2br" => 48, "media" => 65, "raw" => 74, "length" => 82);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'page', 'nl2br', 'media', 'raw', 'length'],
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
        echo "<div class=\"container ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cssClass"] ?? null), 1, $this->source), "html", null, true);
        echo "\">

    <div class=\"row\">

        <div class=\"col-xs-12\">

            <h1>Category detail</h1>

        </div>

        <div class=\"col-xs-12 col-sm-6\">

            <ul class=\"list-group\">
                
                ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categorySlug"], "method", false, false, true, 15)) {
            // line 16
            echo "                    <li class=\"list-group-item\">Category slug: <strong>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "categorySlug"], "method", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</strong></li>
                ";
        }
        // line 18
        echo "
            </ul>

        </div>

        <div class=\"col-xs-12\"><hr></div>

        <div class=\"col-xs-12 col-sm-8\">

            <h3><strong>";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 27), "name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "</strong></h3>
        
            <h4>Info</h4>

            <table class=\"table table-striped table-hover table-bordered\">

                <tr>
                    <th>Parent category</th>
                    <td>
                        ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 36), "parent", [], "any", false, false, true, 36)) {
            // line 37
            echo "                            <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 37), "id", [], "any", false, false, true, 37), 37, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "paramName", [0 => "categorySlug"], "method", false, false, true, 37) => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 37), "parent", [], "any", false, false, true, 37), "slug", [], "any", false, false, true, 37)]);
            echo "\">
                        ";
        }
        // line 39
        echo "                            ";
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 39), "parent", [], "any", false, false, true, 39)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 39), "parent", [], "any", false, false, true, 39), "name", [], "any", false, false, true, 39), "html", null, true))) : (print ("No parent category")));
        echo "
                        ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 40), "parent", [], "any", false, false, true, 40)) {
            // line 41
            echo "                            </a>
                        ";
        }
        // line 43
        echo "                    </td>                
                </tr>

                <tr>
                    <th>Description</th>
                    <td>";
        // line 48
        echo nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 48), "description", [], "any", false, false, true, 48), 48, $this->source), "html", null, true));
        echo "</td>
                </tr>

                <tr>
                    <th>Is active</th>
                    <td><span class=\"glyphicon ";
        // line 53
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 53), "active", [], "any", false, false, true, 53)) ? ("glyphicon-check") : ("glyphicon-unchecked"));
        echo "\"></span></td>
                </tr>

            </table>

        </div>

        <div class=\"col-xs-12 col-sm-4\">

            ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 62), "preview_image", [], "any", false, false, true, 62)) {
            // line 63
            echo "                <img class=\"thumbnail\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 63), "name", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 63), "preview_image", [], "any", false, false, true, 63), "getPath", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "\" width=\"100%\" />
            ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 64), "preview_image_media", [], "any", false, false, true, 64)) {
            // line 65
            echo "                <img class=\"thumbnail\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 65), "name", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "\" src=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 65), "preview_image_media", [], "any", false, false, true, 65), 65, $this->source));
            echo "\" width=\"100%\" />
            ";
        }
        // line 66
        echo "            

        </div>

        <div class=\"col-xs-12\">
        
            <h4>Content</h4>

            <div class=\"well\">";
        // line 74
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 74), "content", [], "any", false, false, true, 74), 74, $this->source);
        echo "</div>

        </div>
        
        <div class=\"col-xs-12\">

            <h4>Images</h4>

            ";
        // line 82
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 82), "images", [], "any", false, false, true, 82))) {
            // line 83
            echo "            
                <h5><strong>Images</strong></h4>

                <div class=\"row\">

                    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 88), "images", [], "any", false, false, true, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 89
                echo "
                        <div class=\"col-xs-12 col-sm-4 col-md-3 col-md-2\">
                        
                            <a target=\"_blank\" href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getPath", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "\">
                                <img class=\"thumbnail\" style=\"max-width: 100%;\" src=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getThumb", [0 => 300, 1 => 300], "method", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 93)) ? (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 93)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 93), "name", [], "any", false, false, true, 93))), "html", null, true);
                echo "\">
                            </a>

                        </div>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "
                </div>

            ";
        } else {
            // line 103
            echo "
                <p>No uploaded images found.</p>

            ";
        }
        // line 107
        echo "
        </div>

        <div class=\"col-xs-12\">

            <h4>Records</h4>

            <h5><strong>Main category records</strong></h5>

            ";
        // line 116
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 116), "records", [], "any", false, false, true, 116))) {
            // line 117
            echo "
                <ul class=\"list-group\">

                    ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 120), "records", [], "any", false, false, true, 120));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 121
                echo "
                        <li class=\"list-group-item\">

                            ";
                // line 124
                if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 124)) {
                    // line 125
                    echo "                                <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 125), 125, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 125) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 125)]);
                    echo "\">
                            ";
                }
                // line 127
                echo "                            
                                ";
                // line 128
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "area", [], "any", false, false, true, 128), "name", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
                echo "]
                            
                            ";
                // line 130
                if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 130)) {
                    // line 131
                    echo "                                </a>
                            ";
                }
                // line 133
                echo "
                        </li>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "
                </ul>

            ";
        } else {
            // line 141
            echo "
                <p>No records found.</p>

            ";
        }
        // line 145
        echo "
            <h5><strong>Secondary categories records</strong></h5>

            ";
        // line 148
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 148), "records_multicategories", [], "any", false, false, true, 148))) {
            // line 149
            echo "
                <ul class=\"list-group\">

                    ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categoryDetail", [], "any", false, false, true, 152), "records_multicategories", [], "any", false, false, true, 152));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 153
                echo "
                        <li class=\"list-group-item\">
                            ";
                // line 155
                if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 155)) {
                    // line 156
                    echo "                                <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 156), 156, $this->source), [twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "paramName", [0 => "recordPageSlug"], "method", false, false, true, 156) => twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 156)]);
                    echo "\">
                            ";
                }
                // line 158
                echo "                            
                                ";
                // line 159
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "area", [], "any", false, false, true, 159), "name", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
                echo "]
                            
                            ";
                // line 161
                if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "recordPage"], "method", false, false, true, 161)) {
                    // line 162
                    echo "                                </a>
                            ";
                }
                // line 164
                echo "
                        </li>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "
                </ul>

            ";
        } else {
            // line 172
            echo "
                <p>No records found.</p>

            ";
        }
        // line 176
        echo "
        </div>

    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/plugins/janvince/smallrecords/components/categorydetail/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 176,  376 => 172,  370 => 168,  361 => 164,  357 => 162,  355 => 161,  348 => 159,  345 => 158,  339 => 156,  337 => 155,  333 => 153,  329 => 152,  324 => 149,  322 => 148,  317 => 145,  311 => 141,  305 => 137,  296 => 133,  292 => 131,  290 => 130,  283 => 128,  280 => 127,  274 => 125,  272 => 124,  267 => 121,  263 => 120,  258 => 117,  256 => 116,  245 => 107,  239 => 103,  233 => 99,  219 => 93,  215 => 92,  210 => 89,  206 => 88,  199 => 83,  197 => 82,  186 => 74,  176 => 66,  168 => 65,  166 => 64,  159 => 63,  157 => 62,  145 => 53,  137 => 48,  130 => 43,  126 => 41,  124 => 40,  119 => 39,  113 => 37,  111 => 36,  99 => 27,  88 => 18,  82 => 16,  80 => 15,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container {{ cssClass }}\">

    <div class=\"row\">

        <div class=\"col-xs-12\">

            <h1>Category detail</h1>

        </div>

        <div class=\"col-xs-12 col-sm-6\">

            <ul class=\"list-group\">
                
                {% if __SELF__.property('categorySlug') %}
                    <li class=\"list-group-item\">Category slug: <strong>{{__SELF__.property('categorySlug')}}</strong></li>
                {% endif %}

            </ul>

        </div>

        <div class=\"col-xs-12\"><hr></div>

        <div class=\"col-xs-12 col-sm-8\">

            <h3><strong>{{ __SELF__.categoryDetail.name }}</strong></h3>
        
            <h4>Info</h4>

            <table class=\"table table-striped table-hover table-bordered\">

                <tr>
                    <th>Parent category</th>
                    <td>
                        {% if __SELF__.categoryDetail.parent %}
                            <a href=\"{{ this.page.id|page({(__SELF__.paramName('categorySlug')):(__SELF__.categoryDetail.parent.slug)}) }}\">
                        {% endif %}
                            {{__SELF__.categoryDetail.parent ? __SELF__.categoryDetail.parent.name : 'No parent category'}}
                        {% if __SELF__.categoryDetail.parent %}
                            </a>
                        {% endif %}
                    </td>                
                </tr>

                <tr>
                    <th>Description</th>
                    <td>{{__SELF__.categoryDetail.description|nl2br}}</td>
                </tr>

                <tr>
                    <th>Is active</th>
                    <td><span class=\"glyphicon {{__SELF__.categoryDetail.active ? 'glyphicon-check' : 'glyphicon-unchecked'}}\"></span></td>
                </tr>

            </table>

        </div>

        <div class=\"col-xs-12 col-sm-4\">

            {% if __SELF__.categoryDetail.preview_image %}
                <img class=\"thumbnail\" alt=\"{{ __SELF__.categoryDetail.name }}\" src=\"{{ __SELF__.categoryDetail.preview_image.getPath }}\" width=\"100%\" />
            {% elseif __SELF__.categoryDetail.preview_image_media %}
                <img class=\"thumbnail\" alt=\"{{ __SELF__.categoryDetail.name }}\" src=\"{{ __SELF__.categoryDetail.preview_image_media|media }}\" width=\"100%\" />
            {% endif %}            

        </div>

        <div class=\"col-xs-12\">
        
            <h4>Content</h4>

            <div class=\"well\">{{__SELF__.categoryDetail.content|raw}}</div>

        </div>
        
        <div class=\"col-xs-12\">

            <h4>Images</h4>

            {% if __SELF__.categoryDetail.images|length %}
            
                <h5><strong>Images</strong></h4>

                <div class=\"row\">

                    {% for image in __SELF__.categoryDetail.images %}

                        <div class=\"col-xs-12 col-sm-4 col-md-3 col-md-2\">
                        
                            <a target=\"_blank\" href=\"{{image.getPath}}\">
                                <img class=\"thumbnail\" style=\"max-width: 100%;\" src=\"{{image.getThumb(300,300)}}\" alt=\"{{image.title ? image.title : __SELF__.categoryDetail.name}}\">
                            </a>

                        </div>

                    {% endfor %}

                </div>

            {% else %}

                <p>No uploaded images found.</p>

            {% endif %}

        </div>

        <div class=\"col-xs-12\">

            <h4>Records</h4>

            <h5><strong>Main category records</strong></h5>

            {% if __SELF__.categoryDetail.records|length %}

                <ul class=\"list-group\">

                    {% for record in __SELF__.categoryDetail.records %}

                        <li class=\"list-group-item\">

                            {% if __SELF__.property('recordPage') %}
                                <a href=\"{{__SELF__.property('recordPage')|page({(__SELF__.paramName('recordPageSlug')):record.slug})}}\">
                            {% endif %}
                            
                                {{ record.name }} [{{record.area.name}}]
                            
                            {% if __SELF__.property('recordPage') %}
                                </a>
                            {% endif %}

                        </li>

                    {% endfor %}

                </ul>

            {% else %}

                <p>No records found.</p>

            {% endif %}

            <h5><strong>Secondary categories records</strong></h5>

            {% if __SELF__.categoryDetail.records_multicategories|length %}

                <ul class=\"list-group\">

                    {% for record in __SELF__.categoryDetail.records_multicategories %}

                        <li class=\"list-group-item\">
                            {% if __SELF__.property('recordPage') %}
                                <a href=\"{{__SELF__.property('recordPage')|page({(__SELF__.paramName('recordPageSlug')):record.slug})}}\">
                            {% endif %}
                            
                                {{ record.name }} [{{record.area.name}}]
                            
                            {% if __SELF__.property('recordPage') %}
                                </a>
                            {% endif %}

                        </li>

                    {% endfor %}

                </ul>

            {% else %}

                <p>No records found.</p>

            {% endif %}

        </div>

    </div>

</div>
", "C:\\work\\OSPanel\\domains\\tabylga/plugins/janvince/smallrecords/components/categorydetail/default.htm", "");
    }
}
