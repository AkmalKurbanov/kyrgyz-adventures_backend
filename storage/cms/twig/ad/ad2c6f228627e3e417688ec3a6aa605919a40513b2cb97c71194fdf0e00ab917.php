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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/pages/home.htm */
class __TwigTemplate_6be8a56cf1f8d06f3326909cd0d5e44a276d502f6c704b9a816305e330fa9f5f extends \Twig\Template
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
        $tags = array("set" => 1, "component" => 31, "for" => 115, "if" => 116);
        $filters = array("date" => 14, "_" => 36, "page" => 121, "resize" => 122, "escape" => 130, "rudate" => 131, "slice" => 512);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'component', 'for', 'if'],
                ['date', '_', 'page', 'resize', 'escape', 'rudate', 'slice'],
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["members"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["members"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["members"] ?? null), "noRecordsMessage", [], "any", false, false, true, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["members"] ?? null), "detailsPage", [], "any", false, false, true, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["members"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["members"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 6);
        // line 7
        echo "
";
        // line 8
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "records", [], "any", false, false, true, 8);
        // line 9
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "displayColumn", [], "any", false, false, true, 9);
        // line 10
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "noRecordsMessage", [], "any", false, false, true, 10);
        // line 11
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "detailsPage", [], "any", false, false, true, 11);
        // line 12
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 12);
        // line 13
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 13);
        // line 14
        $context["currentDate"] = twig_date_format_filter($this->env, "now", "Y-m-d");
        // line 15
        echo "
";
        // line 16
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "records", [], "any", false, false, true, 16);
        // line 17
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "displayColumn", [], "any", false, false, true, 17);
        // line 18
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "noRecordsMessage", [], "any", false, false, true, 18);
        // line 19
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "detailsPage", [], "any", false, false, true, 19);
        // line 20
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 20);
        // line 21
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["location"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 21);
        // line 22
        echo "


<!-- politx-content-area start -->
<div class=\"politx-content-area margin-bottom-40 margin-top-60\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-5\">
        <div class=\"image-box-style-06\">
          ";
        // line 31
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/about_img.htm"        ;
        $context['__cms_component_params']['class'] = "about_img"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 32
        echo "        </div>
      </div>
      <div class=\"col-lg-6  offset-lg-1 align-self-center\">
        <div class=\"content-box-style-01\">
          <p class=\"section-subtitle\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["О нас"]);
        echo "</p>
          ";
        // line 37
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/about_title.htm"        ;
        $context['__cms_component_params']['class'] = "title"        ;
        $context['__cms_component_params']['fixture'] = "h2"        ;
        $context['__cms_component_params']['tools'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 38
        echo "          <div>
            ";
        // line 39
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/about_desc.htm"        ;
        $context['__cms_component_params']['class'] = "description"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 40
        echo "          </div>
          <div class=\"btn-wrapper padding-top-33\">
            ";
        // line 42
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "about/about_link.htm"        ;
        $context['__cms_component_params']['tools'] = "link"        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['class'] = "btn btn-custom-primary about_link"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 43
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- politx-content-area end -->

<div class=\"action-area padding-top-40 position-relative\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-5 align-self-center\">
        <div class=\"content-box-style-01\">
          <p class=\"section-subtitle\">";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Цели"]);
        echo "</p>
          ";
        // line 57
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "goal/goal_title.htm"        ;
        $context['__cms_component_params']['class'] = "title"        ;
        $context['__cms_component_params']['fixture'] = "h2"        ;
        $context['__cms_component_params']['tools'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 58
        echo "          <div>
            ";
        // line 59
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "goal/goal_desc.htm"        ;
        $context['__cms_component_params']['class'] = "description"        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 60
        echo "          </div>
          <div class=\"btn-wrapper padding-top-33\">
            <div class=\"btn btn-custom-primary about_link\">
              ";
        // line 63
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "goal/goal_link.htm"        ;
        $context['__cms_component_params']['tools'] = "link"        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 64
        echo "            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-6 offset-lg-1\">
        <div class=\"goal-area\">
          <ul class=\"goal-list\">
            <li>
              <div class=\"icon\">
                ";
        // line 73
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "goal/first_goal_img.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 74
        echo "              </div>
              <div class=\"content\">
                ";
        // line 76
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "goal/first_goal_title.htm"        ;
        $context['__cms_component_params']['class'] = "title"        ;
        $context['__cms_component_params']['fixture'] = "h4"        ;
        $context['__cms_component_params']['tools'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 77
        echo "                ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "goal/first_goal_desc.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = ""        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 78
        echo "              </div>
            </li>
            <li>
              <div class=\"icon\">
                ";
        // line 82
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "goal/second_goal_img.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 83
        echo "              </div>
              <div class=\"content\">
                ";
        // line 85
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "goal/second_goal_title.htm"        ;
        $context['__cms_component_params']['class'] = "title"        ;
        $context['__cms_component_params']['fixture'] = "h4"        ;
        $context['__cms_component_params']['tools'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 86
        echo "                ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "goal/second_goal_desc.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = ""        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 87
        echo "              </div>
            </li>
            <li>
              <div class=\"icon\">
                ";
        // line 91
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "goal/third_goal_img.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = ""        ;
        $context['__cms_component_params']['tools'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 92
        echo "              </div>
              <div class=\"content\">
                ";
        // line 94
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "goal/third_goal_title.htm"        ;
        $context['__cms_component_params']['class'] = "title"        ;
        $context['__cms_component_params']['fixture'] = "h4"        ;
        $context['__cms_component_params']['tools'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 95
        echo "                ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "goal/third_goal_desc.htm"        ;
        $context['__cms_component_params']['class'] = ""        ;
        $context['__cms_component_params']['fixture'] = "p"        ;
        $context['__cms_component_params']['tools'] = ""        ;
        $context['__cms_component_params']['class'] = ""        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 96
        echo "              </div>
            </li>
          </ul>
          <div class=\"mission-area\">";
        // line 99
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Миссия"]);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"upcoming-events-area padding-top-115\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <p class=\"section-subtitle\">";
        // line 110
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["События"]);
        echo "</p>
        <h2 class=\"title\">";
        // line 111
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Предстоящие события"]);
        echo "</h2>
      </div>
    </div>
    <div class=\"row\">
      ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "records", [], "any", false, false, true, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 116
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 116) >= ($context["currentDate"] ?? null))) {
                // line 117
                echo "      <div class=\"col-lg-6 next-event-home\">
        <div class=\"row\">
          <div class=\"col-md-7\">
            <div class=\"thumb\">
              <a href=\"";
                // line 121
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 121, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 121)]);
                echo "\">
                <img src=\"";
                // line 122
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "img", [], "any", false, false, true, 122), "path", [], "any", false, false, true, 122), 122, $this->source), 510, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "\"
                  alt=\"\">
              </a>
            </div>
          </div>
          <div class=\"col-md-5\">
            <div class=\"up-content-style-01\">
              <div class=\"date-month\">
                <span class=\"date\">";
                // line 130
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 130), 130, $this->source), "d"), "html", null, true);
                echo "</span>
                <span class=\"month\">";
                // line 131
                echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 131), 131, $this->source), "%BP"]);
                echo "</span>
              </div>
              <h6>";
                // line 133
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                echo "</h6>
              <ul>
                <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> ";
                // line 135
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                echo "</a></li>
                <li><a href=\"#\"><i class=\"fa fa-bell\"></i> ";
                // line 136
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 136), 136, $this->source), "H:i"), "html", null, true);
                echo "</a></li>
              </ul>
              <div class=\"btn-wrapper\">
                <a href=\"";
                // line 139
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 139, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 139)]);
                echo "\">
                  ";
                // line 140
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Подробнее"]);
                echo " ➞</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      ";
            } else {
                // line 148
                echo "
      ";
            }
            // line 150
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "      <div class=\"col-lg-6\">
        <div class=\"event-list-style\">

          ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "records", [], "any", false, false, true, 155));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 156
            echo "          ";
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 156), "Y-m-d") >= ($context["currentDate"] ?? null))) {
                // line 157
                echo "
          <div class=\"event-single-style-01 next-event-home-secondary\">
            <div class=\"d-flex\">
              <div class=\"time\">
                <span class=\"date\">";
                // line 161
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 161), 161, $this->source), "d"), "html", null, true);
                echo "</span>
                <span class=\"month\">";
                // line 162
                echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 162), 162, $this->source), "%BP"]);
                echo "</span>
              </div>
              <div class=\"content\">
                <p class=\"sm-text\"><i class=\"fa fa-map-marker\"></i> ";
                // line 165
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                echo "</p>
                <h4><a
                    href=\"";
                // line 167
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 167, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 167)]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                echo "</a>
                </h4>
                <p><i class=\"fa fa-bell\"></i> ";
                // line 169
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 169), 169, $this->source), "H:i"), "html", null, true);
                echo "</p>
              </div>
            </div>
          </div>
          ";
            } else {
                // line 174
                echo "
          ";
            }
            // line 176
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "
          <div class=\"btn-wrapper\">
            <a href=\"all-events\">";
        // line 180
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Все события"]);
        echo "</a> ➝
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- team area start  -->
<div class=\"guest-area padding-bottom-90 margin-top-50\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"text-center margin-bottom-55\">
          <h2 class=\"section-title\">";
        // line 194
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Наше месторасположение"]);
        echo "</h2>
        </div>
      </div>
    </div>

    <div class=\"kyrgyz-map\">

      <div class=\"about-member-count\">
        <div class=\"kyrgyz-map-wrap\">
          <svg class=\"tabs\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\" xmlns:mapsvg=\"http://mapsvg.com\"
            xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\" xmlns:svg=\"http://www.w3.org/2000/svg\"
            xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Слой_1\"
            x=\"0px\" y=\"0px\" viewBox=\"0 0 792.4 389.4\" style=\"enable-background:new 0 0 792.4 389.4;\"
            xml:space=\"preserve\">
            <path id=\"KG-B\"
              d=\"M142.5,280.4l1,0.5l2.5-0.1l1.1,1.5l-0.1,0.9l0.6,0.2l3.5-0.7l0.4,0.6l2.1,0.6l2.1,1.3l0.2,1l2.3,1l3.2-0.5  l1.1,3.9l0.9,1l2.1,0.4l3.6-0.3l1.2-0.9l0.1-3.1l0.8-0.6h1.5l1.4,0.8l1.3,2.9l0.6,2.1l-1.1,2.6l1,0.9l0.9,2.7h0.8l1.7-2.2l2.3-1.6  l0.4,0.3l2.7-2l0.9-0.4l0.8,0.3l0.5-0.5l0-1.6l-1.4-1l1.1-1.8l3-0.3l2.9,1.8l1.2,0.2l2.7-2.6l2.9-0.2l-0.3-1.9l0,0l3.4-1.6l6.4-1.8  h1.4l0.9,0.8l0.4,1.1l-1,4.2l1.5,1.9v0.8l-2.7,2l0.6,0.8l4.3,1.7l1.1,1l0.5,1.3v1.3l-3,2.6l3.1,1l0.9,0.6l0.4,1l-0.8,2.8l1.3,1.9  l0.1,1.2l-1.6,4l0.1,1.3l3.9,0.8l2.6,1.7l2,4.9l1.6,2h1.3l1.1-1.4l0.8-0.3l1.6,0.6l0.3,0.9l1,0.8l-1,1.1l1.5,1l2.2,2.7l0.6,2.5  l-0.9,0.6l-0.3,2l-2.4,1.6l-5.4,1.8l-0.8,0.9l-2.4,0.3l-2.3,2.8l-3.4,0.8l-0.9,0.8l-3.2,0.9l-2.1-1.2l-3.3-0.3l-1.7,0.2l-3.6,1.7  l-1.6-1.7l-3.8-0.1l-3.5-2.8l-2.7-0.4l-3.2,0.5l-2.3-2l-3.4-0.5l-1.7-0.8l-1.1-0.8l-0.5-1.6l-4-0.6l-1.7,3.3l-1.2,0.8l-5.7,0.6  l-0.8,0.6l-2.7,4.8l-0.4,2.9l-1,1.3l0,0l-1.4-0.9l-0.8,0.1l0.1,1.3l-4.1,1l-0.7,2l-0.7,0.4l-3-0.3l-2.1,0.8l-0.6,2.3l-1.8,2.1  l-1.8-0.2l-0.7-1.3h-0.8l-4.1,2.3l-5.4-0.7l-1.6,0.3l-0.7,0.5l-0.4,1.3l-0.5,5.6l-1.6,2l-1.5,0.3l-2.2-0.3l-3.9-2.1l-1.8,3.5  l-1.7-0.3l-0.8-1l-1-0.2l-2.1,1.9l-1.8,0.1l-2.7-0.9l-2.2-1.9l0.6-5.1l-1.4-2l-3.4-1.9l-2.6-5.8l-1-0.7l-5.3-1l-2.3-2.5l-1,0.2  l-0.8,1.1l-2.2,0.3l-1.2,1.2l-2.4-0.3l-1.4,1.8l-3.5-1.6l-1,2.1l-1.4,1.2l-1.7,2.7l-3.4-0.1l-0.9-0.8l-0.2-2l-1.6-1.4l-0.9-0.1  l-2.3,1.7l-1-0.1l-3.4-3.1l-2.5,1.5l-0.6,1.2l-2.2-0.5l-1.8,2.7l-1.4,0.1l-1.2-2.7l-2.1-0.1l-2.8-1l-0.8,0.5l-0.9,2.7l-1.8,0.8  l-5.5-4.2l-5.1-1.7l-1.5,0.1l-1.2,1.1l-1.5,0.2l-1.6-0.5l-0.6-0.7l-1.3,0.3l-2.1,2.8l-1.3,0.1l-0.8,0.8l0.1,0.8l-1.9-0.1l-2.9,0.9  l-0.9-0.6l-1.5,0.7l-2.2-0.7l-0.9-1.7h-1l-0.6,2.5l-1.3,1.1l-1.9-1.5l0.1-1.9l0.9-1.1l0.2-1.6l-2.1-6.3l-0.1-4l-0.6-2.3l-2.8-3.5  v-3.7l-1-0.9l-0.1-1.1l4.9-5.5l-2.3-3.2l1.3-3.8l2.3-1.9l0.6-1.5L5.5,311l0.5-0.7l0.8,0.3l1.1,1.9l1.8-0.2l1.4,1l1.1,1.8l0.3,4.2  l2.6,0.4l1.8-1.6l1.7-0.3l1.9,0.6l0.4-0.5l-2.6-3.9l-0.6-2.4l0.9-9.6l0.8-0.6l1.5,0.1l2.1,1.4l5-2l1.5,0.1l0.3,0.9l1-0.1l1.9-3.1  l3.9-2.3l4.7-1.5l3,0.1l3.2-0.8l6.1-2.5l1.3,0.1l5.4,3.1l3.8,3.8l1.2,0.1l0.9-0.9l1.1,0.5l0.2,1.4l1.3,1.4l4.3-0.3l1.1,0.4l2.5,1.5  l1.8,0.2l0.1,1.2l0.6,0.6l4.5,2.5l8.3,2.2l2.1,1.3l0.7,0.7l-0.4,1.4l-2.4,1.3l-3.4,2.9l-0.4,3.4l0.5,1.2l1,0.2l-0.2-2.7l0.5-1.8  l0.7-0.5l2.2,0.1l4.3-2.5l-0.2-1.9l1.3-1.9l0.7-6.8l2.2-0.9l8.1-1.6l1.1-1.9l-0.2-2.5l1.9-0.7l0.8,0.7l1.6-0.4l2.5-1.6l5.5-2.2  l0.9-2.3l-1.8-3.1l0.5-1.1l1.5-0.5l4.9-0.2l3.4-2.1l2.5-3.1l3.3-0.3L142.5,280.4L142.5,280.4z M128.7,292.2l0.6-1.1l0-1.6l-0.7-1  l-0.8,1l0.4,2.4L128.7,292.2L128.7,292.2z M173.9,294.2l0.2-1l-1.9-0.5v1.2l0.5,0.1L173.9,294.2z M126.4,298.3l0.2,3.1l-0.6,4.3  l0.6,2.3l1.2,1.6l1.5,0.9l3,0.5l0.9,0.5l0.1,0.9l-0.3,1.3l-1,0.4l1.4,2.6l-2.5,2.4l-0.6,2l-1.2,0.9l0.3,0.7l2,0.2l1.4,1.2l0.5-0.7  l-0.7-0.9l0.2-0.9l0.9-1l1,0.2l-0.2,2.1l0.6,0.3l3.6-0.5l2.4-2.7l0.1-0.7l-0.9-0.9l0.1-1.1l-0.8-0.5l-4.2,0.1l-0.1-0.7l1.5-0.7  l0.4-0.8l-0.2-1.1l-1.1-1.2l1.7-0.5l2.2-1.5l0.3-0.7l-0.4-1l-4.1,2l-0.9-0.1l-1.6-6.2l-1.5-0.7l-0.8-1l-0.6-3.2l-1.6-3.1l-2.2-1  l-1,0.6l0.2,0.7L126.4,298.3L126.4,298.3z M179,318.3l2.7-1.9l3.6,0.5l1-2.2l-5.2-4.3l-0.8,0.9l0.8,2.3l-1.5,1.2l-2.5,0.6l-0.3,1.1  L179,318.3L179,318.3z M91.5,323.6l-0.6,1.2l1.6,2.8l0.3,2.6l1,0.2l2.4-0.9l0.6,0.4l0.5,1l-0.9,2.4l0.3,1.2L99,333l2.4-3.5l3.3-1.4  l1.6-2.1l-0.4-1.4l-1.1-0.2l-3.1,0.8l-2.5-0.1l-5.4-1.7L91.5,323.6L91.5,323.6z\" />
            <path id=\"KG-C\"
              d=\"M358.6,2.2h2l2.1,2.7l1.8-0.2v0.9l0.6,0.4l0.9,0.4l1-0.2l0.5,0.8l0.9-0.2l2.4,2.6l2.7,1l0.5,0.9l2-0.6l1.2,1  l4.9,1.3l0.5,1.4l4.3,5.4l2,1.8l1.9,0.7l1.2,2.2l2.7,1.8l1.4,0.2l1.7-0.7l1,0.3l1.7-0.9l1,0.3l5,2.3l1.1,1.1l7.1,3.7l5.2,1.5  l3.4,2.3l3.2,0.9l2.3,1.9l4.5-0.2l4.2,1.2h3.1l5.7,1.3l3.3-0.5l15.5,4.1l2.3-3.4l1-0.6l1.5-6l1.6-2l2.3-1.8l5.5-1.5l1.2,0.3l1.3,2  l2.9,0.3l2.1,1.7h1.7l6-1.7l4,0.1l1.1,0.9l5.5,0.1l1.2,0.7l0.6,3.9l1.2,0.7l2,0.1l9.7-2.8l0.9-1.8l0.8-0.5l5.3,0.9l1.3-0.7l2.7,0.7  l5.7,0l1.6-1l0.7-1.2l0.1-1.7l0.8-0.7l4-0.3l1.1-1.9l0.8-0.1l5,0.9l1.7-1.1l3.1-0.4l1.1,0.5l1.7,2.5l1.1-0.1l2.4-2l4.3,0.3l1.3,0.4  l0.5,2.1l2,0.3l2.9,2.3l-0.8,1.3l-2.7,0.7l-3.2,2.8L564,43l-1.1,0.6l-2.7-0.5l-10.6,1.4l-1.5,0.5l-0.7,0.8l-3-0.3l-4.5,2l-1.7,0.2  l-4.9-0.7l-2.6,1.1l-2.4-0.3l-1.8,0.8L523,48l-2,0.5l-1-0.9l-1.9-0.1l-0.1,2.3l-2.7,0.3l-1.6,0.8l-2.5-0.3l-1.9,2l-6.6,4.2l-1.8,2  l-2.5,1.1l-0.3,2.6l-1,0.7l-1.5,0.5l-1.6-0.7h-3.3l-1.9,0.5l-1.1,0.9l-4.5,0.8l-0.8,0.9l-3.9-0.1l-2.6,0.6l-2.5-1.1l-2.3-0.3  l-0.6,1.2l0.6,2.3l-0.1,2l-3.5,0.1l-1.4,1.1h-1.5l-0.9,0.8L462,76l-3.6,2.6l-1.2,1.5l-4,1.7l-1.5-0.9l-1.2-0.1l-0.6-1l0.1-1l-1-0.2  l-0.5,0.8l-1.2,0.6l-1.9,0.6l-1.9-0.3l-1.6,0.6l-2.6-1.8l-1.1,1.5l-3.2,0.1l-2.7,1.1l-5-1.8l-3.2,0.8l-1.4-0.4l-0.9-1l-3.1,2.2  l-2.8,0.1l-1.1-1.7l-1.1-0.3l-2.3,1.2l-5.1-0.8l-1.1,0.6l-7.6,0.7l0.3,1.6l2.3,2.6l0.8,2.2l1.4,1.8l0.5,2.6l-1,0.8l-1.8-0.4  l-3.8,0.4l-1.7,0.8l-2.4,3.1l-2.7,2.2l-2.8-0.4l-5,1.8l-2.4-0.1l-3.2,0.8l-2.4-0.6l-2.7,0.9l-2.7,0.2l-3.1-0.6l-1.9,9l1.1,1l3.3,1.5  l0.3,1l-0.9,0.3l-0.9,1.5l-1.5,0.3l-1.4,1.1l-0.6,1.1l0.9,3.4l-0.7,1.7L360,124l-1,5.5l-1.9,0.3l-2.4-0.7l-1.4,0.6l-1.1,1l-1.8,5.4  l-1.2,0.9l-1.5-1.7l1.7-4.9L349,130l-3.9,0.7l-1.5-0.3l-0.7-1.6l-2.7-2.5l-1.1-1.8l-1.7,1.7l-1.1-0.2l-1.8,0.8h-5.1l-0.8-0.7l-3,0.7  l-0.7-0.4l0,0l-0.1-2.1l-0.6-0.7l-0.5-2.2l-1.1-0.5l-3.2-0.5l-8.3,2l-1.2-0.9l-1-0.1l-0.8,0.9l-2.2-0.2l-1.3-1.4l-2.1,0.2l-6.8-2.1  l-1.5,0.4l-1.6-1.4l-0.8-3.4l-1.2-1.7l-7.8-2.1l-3.2,0.3l-2.2-0.9l0,0l-0.4-1.8l0.5-2.8l-3.2-1.2l-1.4-1.9l0.3-5.1l0.8-0.7l4.3,1.4  l4.4-3.8l1.1-0.2l1.5,0.6l3.5-1.3l4.1,1.1l2.6-2.4l4.1-0.3l4.4,1.5l7.4-2.6l1.2-1.4l0.2-3.2l2.8-3.3l0.7-2.1v-1.9l-2.3-1.6l-1.3,1.1  l-1.1-0.2l-0.7-1.9l-1.1-1.1l-1.4,0.3l-0.1,2.2l-1.1,3.3l-0.8,0.3l-1.1-0.6l0.1-1.5l-2.7-2.6l-2.6-5.1l-1.2-4.4l0.1-5.4l1.7-4.3  l0.3-3l2.2-4.2l1.6-2.1l0.8-7.6l-0.5-3.5l-1-2.2l0.5-2.2l2.6-2.6l-0.1-4.6l0.8-2l3.5-0.9l2.6-1.4l2.2-2.1l3.7-1.9l4.4-3.2l0.7,0.9  l1.4,0.5l1-1l5.5,0.5l1.5-1.6l0.3-1.1l0.5,0.2l2.4-6.8l3.3,1.2l1.3,2.2l1.8,0.9l1.5-0.5l1.5-1.4l7.4-0.4l1.1-0.5l0.5-1.1l-2-3.7  l0.5-1.6l1.8,1.3L358.6,2.2z\" />
            <path id=\"KG-J\"
              d=\"M216.3,101.4l6.8,1.1l1.5,0.9l1.9,2.9l1.4,0.4l3.4-1l2.9,2.3l1.8-0.2l4.2,2.3l4.7-0.4l5,2.5l6.3,4.8l5-0.6  l0.9-2.9l2.8-1.3l2.2-3l0.7-0.2l1.6,1.6l2-1.3l0.8,1.5l1.4-0.3l1.6,0.6l2.3-1l0,0l2.2,0.9l3.2-0.3l7.8,2.1l1.2,1.7l0.8,3.4l1.6,1.4  l1.5-0.4l6.8,2.1l2.1-0.2l1.3,1.4l2.2,0.2l0.8-0.9l1,0.1l1.2,0.9l8.3-2l3.2,0.5l1.1,0.5l0.5,2.2l0.6,0.7l0.1,2.1l0,0l0.8,0.5l-1.2,2  l-4,4.1l0.1,0.5l3.8,2l1.1,0.1l1.2-1.1l0.6,0.1l2.4,2.2l2.7-0.6l0.9,0.5h2.9l1.2,0.9l0.5,1.5l-0.3,3.1l1.8,3.9l1.6,1.1h4l1,0.7  l-0.5,3.9l0.6,1.4l0.4,5l-0.9,2.3l-1.1,0.1l-1.5-2.1v-1.4l0.8-1.8l-0.5-1.1l-2.4-2l-3.9-0.8l-2.1-1.4l-1.9,0.6l-0.1,0.8l2.7,6.1  l2.1,0.9l0.4,1.4l1.4,1.4l3.2,2.2l2.6,0.4l3.6-0.5l2.2,0.4l2.8,1.8l2-1.4l6.9-0.7l3.9,1.1l1.8,1.5h1.5l2.7-3.4l3.6-0.9l6-0.3  l2.6-0.8l1.9-2l2.9-1.5l1.6-0.4l2.2,0.4l-0.5,2.6l-1.2,1.9l0.4,4.9l-2.3,5.8l-0.3,4.5l-0.8,1.9l-3.5,2.2l-1,1.4l-3.2,0.1l-2.4,2.2  l-5.7,0.8l-4.1,2.7l-6.1,1.4l-0.5,2l2.2,3.2l0.7,3.6l-3.4-0.5l-4.1,1.1l-4.5,0.3l-2-0.4l-1.1,1.9l-1.6,0.4l-1.2,1.1l-0.3,1.2  l-4.1,0.7l-0.7,1.4l0.1,1.8l1,1.6l4.3,3.2v1.5l-3.2,2.6l-2,3l-0.5,1.8l-1.5-2l-2.7-0.1l-2-1l-3-0.7l-0.4-5.8l-0.4-0.9l-1.5-0.8  l-0.1-2.5l-2-0.9l-1,0.2l-0.1,1.9l-1.2,1.1l-0.3,1.9l-5.5,5.4l-1.5,6.4h-1l-3.6-1.7l-1.7-2.1l-2.4-1.8v-1.3l2.6-3.2l4.4-2.6l0.8-1.2  l-0.8-2.7l-1.4-1.6l-0.7,0.1l-3.4,1.2l-0.2,0.7l1.4,1.8v1.1l-0.6,0.6l-5.9-0.9l-3.4,0.1l-2.5-0.8l-1.6,1.3l-0.1,2l-0.5,0.6l-2,0.8  v0.8l-1.4,1.4l-2.9-0.4l-4.8,1l-1,1.2l-0.8,3.1l0.1,3.6l1,1.9l-0.2,1.7l-1.3,2.3l-3,0.5l-2.6,2.8l-9.9-0.9l-1.3,1.3l0,0.6l-1.5,1.1  l-0.2,0.9l-1,0.7l-1.3-0.1l-1.8-1.1l-3-4.5l-1.1-0.4l-0.7,0.1l-0.4,0.8l-6.3,1.8l-2.4-0.1l-8.6-2.7l-0.6,0.4l-0.7-0.6l1.3-3.4  l-0.4-2.2l-3.9-4.1l-1.8-0.1l-0.1-2.3l-1-1.7l-3.3-1.9l-3.2,0.7l-2.3-2.9l-0.8-0.3l-0.8,0.3l-0.8,1.5l-2.2,1.4l-2.9,1.7l-3,0.6  l-0.8,1l-1.3,0.2l-2.2-1.1l-0.2-1.1l2.2-0.4l2.6-2.8l0-2l-2.4-2.5l-0.3-1.2l0.5-1.9l-0.3-2.9l-1.4-1l-2.6,0.2l-1.5,0.9l-2.1,2.4  l-1.8-0.3l-4.2-2.4l-3.9,0.6l-3.5-1.8l-1.5-3.6l1.2-2l1.7-1.6l0.8-2.6l-0.1-0.9l-2.2-3.1l-0.4-1.5l1.1-0.9l-0.5-1.6l-1.8,0.8  l-1.6-0.1l-0.5-2.9l-2.6-3.4l-0.2-2.4l-0.7-0.3l-1,0.7l0.3,2.4h-0.6l-1.4-2.6l-1.7-0.3l-0.7,1l0.8,2.1l-0.8,1l-1.1-0.5l-0.3-1.6  l0.5-1.3l2.4-2.6l-0.2-4.2l0.6-0.4l0.1-2.7l-1.4-0.1l-1.3,1.4l-1.6,0.8l-0.6,1.9l-1,0.8l-2.8,1l0.2,1.1h2.3l1.1,1l-0.2,3.5l-1.2,2.2  l0.6,2.1l-0.3,0.9l-1,0.2l-0.7,2.3l-1.5-0.4l-0.1,2.1l-1.1,1.4l-2.2,1.5l-2.5-0.9l-2.1,0.9l-2.4-0.7l-2.2,1.4l0.1,1.3l0.5,0.2  l-0.3,1.3l0.3,1.5l1.3,1.4l-0.3,1.5l-1.6,1.6l2.3,3l-2.5,4.3l-1,0.4l-1.8-0.9l-0.6-3.5l-1.9-1.3l-2.7,1.2l-0.8,2.7l-1.2-0.1  l-0.9-0.9l-0.2-3.9L144,200l-0.7-0.1l-0.9,0.8l-0.6-0.7l-3-0.3l-2.9,1.8l-0.4,1.8l-1.9,0.7l-1.1-0.1l-2-2.6l-1.8-1l-2.9-0.3  l-2.1,1.8l-2.8-0.3l-0.8-1.7l-2.3-1.5l-2.1-3.1l-0.8-0.2l-2.4,0.1l-0.7,0.5l-0.7,2l-1.2,1.4l-0.6-0.8l0-3.7l-1.3-1.1v-2l1-3  l-0.3-6.4l-4.7-7.6l-2.5-0.6l-2.2,0.8l-0.9-0.2l0,0.5l-3.3,0.5l-4,4.5l-2.3,0.3l-2.1-1l-1-2.8l-4.2-3.2l-1.2,0.1l-1.7-2.7l-1.4,0.5  l-3.1-2.4l-1.6,0.9l-1.1,1.5l-1.3,0.1l-2.8-0.9l-1.6-1.3l0.1-3.7l2.5-2.3l0.5-3l4.3-0.3l2.2-1.6l2.7-0.6l1.7-1.1l2.7-4l2.4-0.9  l1.9-2.1l2.2,0.1l1.2-2.3L90,145l0.4-2.4l1.2-1.1l3-1.3l1.4-1.7l0.4-1.3l3.1-2.2l0.9-2.4l1.4-1.5l3.1-1l2.5,0.4l0.5-1.6l0.7-0.1  l3.2,1.4l1.7-0.4l1.5-2.4l0.1-1.9l-1.2-3.6l1.5-4.7l6.2,2.3l2.1-0.1l2-0.7l0.8-1.5l4.1-2.9l2-0.6l0.7-1.6l4.3-3l2.9-0.2l2.6-1.6  l0.8-0.9l0.5-3.1l2.2-1.1l4.8,0.3l1.5,0.3l2.9,1.8l4.1,0.3l2.4-1.6l3.7-0.1l3.1-1.4l1.5,0.1l4.6,1.9l2.9,2.9l10.9,2.5l6.8,3.5  l2.7,0.8l3.5,2.7l3.7,0.1l0.9,1.1l3.2-1.2l1.2-1.8l0.4-1.7L211,109l0.4-1.9l2.2-3.4l-0.1-1.6l1.1-0.9L216.3,101.4z\" />
            <path id=\"KG-N\"
              d=\"M449.9,79.8l0.6,1l1.2,0.1l1.5,0.9l4-1.7l1.2-1.4l0,0l1.7,1.9l4.4,1.5l1.4,1.6l1.8-0.2l0.2,2.2l1.7,0.3l0.2,1.2  l6-0.8l0.9-2.8l0.8-0.3l5.1,0.6l0.7,0.7l-0.9,5.3l0.7,0.4l-0.3,1.7l0.4,2.7l1.7,4.4l-0.2,2.1l4,2.6v2.7l4.3,1.6l0.4,0.6v1.3  l-1.5,3.2l-0.3,1.8l-0.7,0.9l-1.4,0.1l-2,3.5l0.1,0.8l3,0.8l3.3-1.3l2.5,0.1l1.3-1.5h1.9l2.1,0.5l4.6,2.2l1.2-0.5l4.4,0.6l0.5,1.2  l1.4,0.8l2.7,0.4l1.3-0.8l0.7,0.2l1,0.9l3,1l1.2,1.5l3.6,1l0.6,1.4l0.9,0.3l1.5-1.1l0.5,0.3l0.5,1.9l-0.4,1.1l-1.9,1.2l-0.1,2.2  l-0.5,1.1l-1.1,0.6l-4.9,0.2l-1.8-0.5l-0.8,0.5l-1.4,2.9l0.6,2.9l-0.5,1.6l0.3,1.6l1.4-0.6l5.7,0.9l5.2-0.6l0.9-1.3l1.5-0.9l1.8,0.6  l1.1,1l0.7,1.3l0.2,2.3l-0.6,1.1l-1.8,1.2l-0.7,1.6l0.2,0.9l2.4,1.4l0.3,0.9l-1.6,4.9l-0.1,1.8l1.4,0.2l1.6-1.6l0.7,0.1l2.3,3.1  l6,0.1l7-1.2l1,0.3l1.3,1.5l1.9,0.5l3.8-2.6l9.8,1.2l4.7-0.9l2.2-1.6l1.3-2.5h0.6l1.4,4.3l-1.9,5.6l-0.5,1.1l-4-0.2l1.2,0.4l1.1,1.7  l2.2,8.1l2.6,1.4l1.2,0.3l1.7-0.5l1.2,0.5l1,1.8l-1.4,3l-0.1,2.6l-0.7,1.4l-1.7,1.8l-2.1,1.2l0.2,1.6l0.7,0.3l7.4-3.6l10.1-2  l1.3,1.1l2.3,0.8l-1.2,1.5v3.3l2.6,2.4l4.7-0.6l0.8-0.5l4.9,0.7l2.5-0.3l5.4,2.2l2.5,0.5l3.3-2.2l3.6-1.3l0.7-0.9l4.3-0.6l0.5,0.6  l1.2,0.1l-0.9,2.6l0.5,2.2l0.8,1.3l1.9,1.6l1.8,0.4l0,0l-0.8,3.4l-0.9,0.3l-2.4,2.5l-4.8,0.6l-3.2,3h-1l-2.5-2.2l-3.1-0.4l-2.7,0.3  l-1.4-0.3l-1.7-1.3h-1.3l-0.3,1l-2.3,0.7l0.1,0.5l-3.5,1.2l-1.4,1.9l-2.7-0.5l-1.7,0.8l-1,1.1l-4.1-0.2l-4.7,1.4l-1.6-0.7l-4.4,0.5  l-1.4-0.4l0.1-1.3L586,216l-0.8-1.1l-2.8-0.5l-6.2,3.1l-3.6-2.1l-2,0.1l-2.5,1.2l-1.2-0.3l-1.1-0.8l-1.8-0.3l-0.7-2.2l-2.6-1.3  l-3.8,0.1l-0.6-0.6l-1.4,0.1l-2.9,3l-1.8,1.1l-1.7-0.3l0.3,0.7l-2.3-0.3l-1,1.5l-0.2,2.9l-2.4,0.1l-0.5,1.4l-2.8,1l-1.3,4.3l0.3,5.2  l-1.8,1l0.3,1.7l-1,1.2l-0.3,1.6l-4.6,3.3l0.1,2.7l1.8,2.6l-2.2,4.8l0.3,1.9l-1.1,1.7l-1.7,0.6l-1.1,2.4l-1.6,0.7l-1.5,2.2l-1.5,3.7  l0.2,3.2l-0.9,1.5l-1.9,1.4l-0.1,1l-3.7,2.2l-0.6,1.8l-2.7,1.2h-3l-1.6,3.2l-1.3-1.1l-0.2-3.6l-1.9-1.3l-3-0.5l-1.4,0.2l-2,2.3  l-3.1,2.2l-6.6-1.3l-2.9,2.3l-0.7-0.3l-1.2-1.9l-1.9-0.5l-0.9,0.6l-1.1,2.7l-1.2,1.4l0.1,2.6l-0.8,0.8l-1.6-1.2l-3.8,0l-0.7-1.1  l-0.4,0.4l-0.8-0.9l-2.9,2l-2.9,0.1l-2.2,1.6l-0.8-0.2l-0.9-5.1l-1.1-2v-1l1-2.7l-0.3-1.1l2.3-2.7l0.7-2.6l-3.1-2.8l-1.8-0.8  l-0.9-1.6l-0.9-3.4l-0.3-6.6l-0.7-1.8l-2.3-1.1l-2.9,1.3l-4.2,3l-4.6,5.3l-2,1.1l-2.2,0.4l-1.6,1.1l-2.6,2.5l-0.4,1.7l-2,0.4  l-1.5,1.9l-2.4,1.5l-4-1h-2.1l-3.5,1.3l-2.2-0.2l-1.9-1.4l-2.5,0.5l-1.7-0.4l-5-4.6l-2.8-1.3l1.1,0.5l-2.5-0.6l-1.1,1l-2.4-1h-1.1  l-1.4,1l-6-0.5l-1.1-1.5l-2-0.1l-0.8-0.6l-1.2,0.3l-1.2-1.2l-0.9,0.5l-0.5-0.3l-0.5-2.1l1.4-3.2l-0.5-1l-1.1-1l-1.3-0.1l-1.8-1.3  l-2.7-0.6l-1.9,0.3l-2.2-2.6l-2.1-0.1l-1.6-1.9l-2.3-0.8l-2.9-5.8l-1.6,0.3l-0.8-0.5l-1.2-3.5l-0.5-0.4H356l-1.4-1l-0.4-3.1  l-2.1-2.5l-1.8-0.6l-2-2.3l-1.9-0.3l-1.2-3.6l-3-1.5l-0.3-0.6l1.4-3.1l2.3-2.7l2.2-1.5v-1.5l-4.3-3.2l-1-1.6l-0.1-1.8l0.7-1.4  l4.1-0.7l0.3-1.2l1.2-1.1l1.6-0.4l1.1-1.9l2,0.4l4.5-0.3l4-1.1l3.4,0.5l-0.7-3.6l-2.2-3.2l0.5-2l6.1-1.4l4.1-2.7l5.7-0.8l2.4-2.2  l3.2-0.1l1-1.4l3.5-2.2l0.8-1.9l0.3-4.5l2.3-5.8l-0.4-4.9l1.2-1.9l0.5-2.6l-2.2-0.4l-1.6,0.4l-2.8,1.5l-1.9,2l-2.6,0.8l-6,0.3  l-3.6,0.9l-2.7,3.4h-1.5l-1.8-1.5l-3.9-1.1l-6.9,0.7l-2,1.4l-2.8-1.8l-2.2-0.4l-3.6,0.5l-2.6-0.4l-3.2-2.2l-1.4-1.4l-0.4-1.4  l-2.1-0.9l-2.7-6.1l0.1-0.8l1.9-0.6l2.1,1.4l3.9,0.8l2.4,2l0.5,1.1l-0.8,1.8v1.4l1.5,2.1l1.1-0.1l0.9-2.3l-0.4-5l-0.6-1.4l0.5-3.9  l-1-0.7h-4l-1.6-1.1l-1.8-3.9l0.3-3.1l-0.5-1.5l-1.2-0.9h-2.9l-0.9-0.5l-2.7,0.6l-2.4-2.2l-0.6-0.1l-1.2,1.1l-1.1-0.1l-3.2-1.4  l-0.8-1.1l4-4.1l1-2.1l3-0.7l0.8,0.7h5.1l1.8-0.8l1.1,0.2l1.7-1.7l1.1,1.8l2.7,2.5l0.7,1.6l1.5,0.3l3.9-0.7l0.5,0.6l-1.7,4.9  l1.5,1.7l1.2-0.9l1.8-5.4l1.1-1l1.4-0.6l2.4,0.7l1.9-0.3l1-5.5l2.7-1.4l0.7-1.7l-0.9-3.4l0.6-1.1l1.4-1.1l1.5-0.3l0.9-1.5l0.9-0.3  l-0.3-1l-3.3-1.5l-1.1-1l1.9-9l3.1,0.6l2.7-0.2l2.7-0.9l2.4,0.6l3.2-0.8l2.4,0.1l5-1.8l2.8,0.4l2.7-2.2l2.4-3.1l1.7-0.8l3.8-0.4  l1.8,0.4l1-0.8l-0.5-2.6l-1.4-1.8l-0.8-2.2l-2.3-2.6l-0.3-1.6l7.6-0.7l1.1-0.6l5.1,0.8l2.3-1.2l1.1,0.3l1.1,1.7l2.8-0.1l3.1-2.2  l0.9,1l1.4,0.4l3.2-0.8l5,1.8l2.7-1.1l3.2-0.1l1.1-1.5l2.6,1.8l1.6-0.6l1.9,0.3l1.9-0.6l1.2-0.6l0.5-0.8l1,0.2L449.9,79.8z\" />
            <path id=\"KG-O\"
              d=\"M399.3,264l0,0.6l-0.5,0v3.7l-1.8,1.8l0.1,0.7l4.5,4l1.5,2.5l2.3,1.6l-0.2,1.4l-1,0.1l-1.8,1.2l-1.3-0.2l-2.2-2  l-0.8-0.1l-7,0.1l-0.6,0.4l0.2,2.7l-2.6,3.9l-1.1,0.4l-0.8-0.9l-1.9-0.3l-1.9,0.4l-3.9,6l-3.4,2l-2.3,3.3l-4.3,3.2l-1.4,1.7  l-2.1,0.9h-1l-2-1.5l-1.4,0.6l-1.9-2.3l-8.6,2.1l-1.2,0.6l-0.1,0.6l-1.4,1.1l-1.5,0.5l-2.4-1.5l-0.6,0.2l-2.7,4.7l-3.9,1.3l0,1  l2.5,1.1l0.2,1.6l-3.8,4.7l-0.7,1.9l0.8,4.3l-1.7,1.5l-0.9-0.1l-2,1.5l-1.3,5.5l0.5,2.6l3.3,1l1.3,1.3l2.1,5.9l0.9,4.1l-0.2,3.3h-2  l-0.5,0.6l-0.6,2.7l-1.5,1.2l0.5,1.3L332,358l-0.1,3l-1.5,0.8l-8.5,1.3l-3.1-0.2l-3.7-1.1l-1.7,1l-2.7-0.2l-1.4,0.9l-2.2-1.3  l-4.6,0.1l-2.5,1.5l-2.9,0.4l-2.3,1.3l-0.6,0.9l0.1,2.2l-1.4,1.9l-5.1-0.3l-1.1,1.5l-4.1,1.5l-2.1-0.1l-3.2-1.4l-1.6,0.1l-3.9,1.5  l-3-0.7l-3.3,1.1l-1.9-1.5l-1.2,0l-2.5,1.7l-2.7-1.2l-3.2,1.3l-2.6-2.1l-3.9-1.4l-5.6-0.8l-1.3,1.3l-0.6,1.7l-1.1,0.7l-1.3,0.1  l-1.1-2.3l-2.9-0.2l-1.8,1l0.1,1.9l-0.4,0.4h-3.9l-2.7,1.2l-2.9,0.2l-1,0.9l-1,1.2l-1.4,4.1l-3.8,7l-1,0.2l-0.7-0.6l-0.9-3.9  l-0.7-0.8l-1.2-0.1l-0.8-2.2l-4.1-0.3l-1.3-0.6l-0.9-1.1l-1.4-6.3l-0.7-0.7l-1.7,0.1l-2.5,1.5h-1.2l-3.7,2.8l-1.4,2l-5.5,0.6  l-0.8,0.7l-1.5-0.4l-1.6-1.8l-1.7-3.5l0.5-1.6l2.3-2.2l1-2.2l-2-5.3l-1.2-0.6l-7.5,1.7l-3.5-0.9l-0.8,0.9l-2.3-0.6l-1.8-4.2  l-0.1-1.5l1.8-3l0.1-2.5l-0.6-1.3l-3.5-2.2l0,0l1-1.3l0.4-2.9l2.7-4.8l0.8-0.6l5.7-0.6l1.2-0.7l1.7-3.3l4,0.5l0.5,1.6l1.1,0.8  l1.7,0.7l3.4,0.5l2.3,2l3.2-0.5l2.7,0.4l3.5,2.8l3.8,0.1l1.6,1.7l3.6-1.7l1.7-0.2l3.3,0.3l2.1,1.2l3.2-0.9l0.9-0.7l3.4-0.8l2.3-2.8  l2.4-0.3l0.8-0.9l5.4-1.8l2.4-1.6l0.3-2l0.9-0.6l-0.6-2.5l-2.2-2.7l-1.5-1l1-1.1l-1-0.8l-0.3-0.9l-1.6-0.6l-0.8,0.3l-1.1,1.4h-1.3  l-1.6-2l-2-4.9l-2.6-1.7l-3.9-0.7l-0.1-1.3l1.6-4l-0.1-1.2l-1.3-1.9l0.8-2.8l-0.4-1l-0.9-0.6l-3.1-1l3-2.6v-1.3l-0.5-1.3l-1.1-1  l-4.3-1.7l-0.6-0.8l2.7-2v-0.8l-1.5-1.9l1-4.2l-0.4-1.1l-0.9-0.7h-1.4l-6.4,1.8l-3.4,1.6l0,0l-3.4-2.1l-0.6-0.7l0.2-0.5l2.9-3.4  l1.3-0.3l1.9-2.6l-0.4-1.4l1.8-1.9l0.4-2.4l3.2,0.1l0.1-0.9l2.6-1.6l0.5-0.8l-0.4-0.9l1-0.3l1.4,0.9h2.8l0.2,2.7l1.9,1.9l1.1,0.5  l0.7-0.6l1.3,0.1l2.2,1.7l1,1.5l1,0.3l0.4,0.8l2.1-0.6l-0.5-2.5l0.2-1.1l1.7-2l0.1-3.8l-0.4-1.1l-2.1-0.4l0.3-1.5l0.7-0.7l-1.7-3.8  l-2.3-1.3l0.5-1l2.1,0.1l0.5-1.6l1,0.3l2.5,3.2l0.6,2.3l1.5,1.3l1-0.3l0.1-1.7l0.9-0.4l1,1.9l5,1.8l2.1,1.6l1.7,0.2l1.9-0.6l0.7-2.6  l0.1-4.3l1-0.1l0.7,1l2.7,0.1l1.2-1l-0.1-1.3l1.4-4.7l-1.6-1.6l0.1-0.7l1-0.6l1.1,1.3l1-0.1l3.4-1.3l1.3-3l4.8-1.3l0.5-0.9l2-1.2  l3-1l5.7-0.8l1.8-0.6l1.3-1.1l1.6-3l-0.8-2.3l2.6-2.8l3-0.5l1.3-2.3l0.2-1.7l-1-1.9l-0.1-3.6l0.8-3.1l1-1.2l4.8-1l2.9,0.4l1.4-1.4  v-0.8l2-0.8l0.5-0.6l0.1-2l1.6-1.3l2.5,0.8l3.4-0.1l5.9,0.9l0.6-0.6v-1.1l-1.4-1.8l0.2-0.7l4.1-1.4l2,2.4l0.3,1.9l-0.8,1.2l-4.4,2.6  l-2.6,3.2v1.3l2.4,1.8l1.7,2.1l3.6,1.7h1l0.5-0.6l0.5-4.5l1.2-2.3l4.9-4.4l0.3-1.9l1.2-1.1l0.1-1.9l2.3,0.1l0.7,0.6l0.1,2.5l1.5,0.8  l0.4,0.9l0.4,5.8l3,0.7l2,1l2.7,0.1l1.8,2.6l3,1.5l1.2,3.6l2,0.3l2,2.3l1.8,0.6l2.1,2.5l0.4,3.1l1.4,1h1.5l0.5,0.4l1.2,3.5l0.8,0.5  l1.6-0.3l2.9,5.8l2.3,0.8l1.5,1.9l2.1,0.1l2.2,2.6l1.9-0.3l5.7,2.1l1.6,2.1l-1.4,3.2l0.5,2.1l0.5,0.3l0.8-0.5l1.2,1.2l1.2-0.3  l0.8,0.6l1.9,0.1l1.1,1.5l6,0.5l1.4-1h1.1L399.3,264z\" />
            <path id=\"KG-T\"
              d=\"M193.3,44.6l1.4,0.6l1.7,1.7l5.1,1.1l1.8,2.2L205,51l3.7,0.3l2.4-1.7l4.8-0.3l7.9,2.4l6.6,3.5l2.1,1.9l1.8,0.8  l0.9-0.7l6.2-0.3l6.3,3.1l1.9,0.2l2.2,1.2l4.6,6.6l3.8,0.6l1.2,0.4l0.5,0.8l1.8,0.5l3.8,0.4l2.6-0.8l2,0.6l6.3-0.7l5.1,2l6.8,0.7  l0.9,1.5l0.5,5l2.8,1.3l8.3,1.4l0.9-0.1l1.9-1.2l1.1,0.6l0.8-0.3l0.6-1.7l0.6-3.8l1.4-0.3l1.1,1.1l0.7,1.9l1.1,0.2l1.3-1.1l1.1,0.4  l1.2,1.2v1.9l-0.7,2.1l-2.8,3.3l-0.2,3.2l-1.2,1.4l-7.4,2.6l-4.4-1.5l-4.1,0.3l-2.6,2.4l-4.1-1.1l-3.5,1.3l-1.5-0.6l-1.1,0.2  l-4.4,3.8l-4.3-1.4l-0.8,0.7l-0.3,5.1l1.4,1.9l3.2,1.2l-0.5,2.8l0.5,1.7L275,111l-1.6-0.6l-1.4,0.3l-0.8-1.5l-2,1.3l-1.6-1.6  l-0.7,0.2l-2.2,3l-2.8,1.3l-0.9,2.9l-3.6,0.6h-1.4l-6.3-4.8l-5-2.5l-4.7,0.4l-4.2-2.3l-1.8,0.2l-2.9-2.3l-3.4,1l-1.4-0.4l-1.9-2.9  l-3.1-1.5l-2.8,0.1l-4.1-0.8l-1.1,0.9l0.1,1.6l-2.2,3.4l-0.4,1.9l0.4,3.5l-0.4,1.7l-1.2,1.8l-3.2,1.2l-0.9-1.1l-3.7-0.1l-3.5-2.7  l-2.7-0.8l-6.8-3.5l-10.9-2.5l-2.9-2.9l-4.6-1.9l-1.5-0.1l-3.1,1.4l-3.7,0.1l-2.4,1.6h-2.3l-1.9-0.3l-2.9-1.8l-1.5-0.3l-4.8-0.3  l-2.2,1.1l-1.8-2.4l-1.8-0.3l-2-1.3l-1.8-2l-3.4-2.1l-4.9-0.5l-1,0.3l-1.9,2.5l-1.8,0.8l-1.4-0.2l-1.8-1.2l-1.8,0.9l-1.1-0.1  l-0.6-2.2l-1.3-0.9l-0.5-1.9l1.9-4.9l1.9-0.4l0.1-1l1.3-0.6l1.5-1.6l-0.4-1l-1.4-0.8l0-1l2.7-1.8l1-4.2l1.6-0.2l3.8,2.1l1.6-0.2  l0.2-1.9l-0.5-0.9l-2.1-3l-2.6-2.5l-0.4-1.1l0.4-1.5l1.1-1.4l1.4-0.3l5.4,1l4-1.1l0.1-7.2l2.6-0.6l2.1-1.8l1.6-2.8l0.3-2.9l1.2-0.3  l2.9,0.7l2.1-0.4l3-2.9l2.9-0.1l1.1,0.6l1.8,0.1l4.3-1.4l2.6,2l2.7,0.9l1.1-1.5l2.2-0.9l0.7-1.3l4.1,0.4l7.2-2.6l5.8,1L193.3,44.6z\" />
            <path id=\"KG-Y\"
              d=\"M644.3,204.4l-1.8-0.4l-1.9-1.6l-0.8-1.3l-0.5-2.2l0.9-2.6l-1.2-0.1l-0.5-0.6l-4.3,0.6l-0.7,0.9l-3.6,1.3  l-3.3,2.2l-2.5-0.5l-5.4-2.2l-2.5,0.3l-4.9-0.7l-0.8,0.5l-4.7,0.6l-2.6-2.4v-3.3l1.2-1.5l-2.3-0.8l-1.3-1.1l-10.1,2l-7.4,3.6  l-0.7-0.3l-0.2-1.6l2.1-1.2l1.7-1.8l0.7-1.4l0.1-2.6l1.4-3l-1-1.8L586,181l-1.7,0.5l-1.2-0.3l-2.6-1.4l-2.2-8.1l-1.1-1.7l-1.2-0.4  l4,0.2l0.5-1.1l1.9-5.6l-1.4-4.3h-0.6l-1.3,2.5l-2.2,1.6l-4.7,0.9l-9.8-1.2l-3.8,2.6l-1.9-0.5l-1.3-1.5l-1-0.3l-7,1.2l-6-0.1  l-2.3-3.1l-0.7-0.1l-1.6,1.6l-1.4-0.2l0.1-1.8l1.6-4.9l-0.3-0.9l-2.4-1.4l-0.2-0.9l0.7-1.6l1.8-1.2l0.6-1.1l-0.2-2.3l-0.7-1.3  l-1.1-1l-1.8-0.6l-1.5,0.9l-0.9,1.3l-5.2,0.6l-5.7-0.9l-1.4,0.6l-0.3-1.6l0.5-1.6l-0.6-2.9l1.4-2.9l0.8-0.5l1.8,0.5l4.9-0.2l1.1-0.6  l0.5-1.1l0.1-2.2l1.9-1.2l0.4-1.1l-0.5-1.9l-0.5-0.3l-1.5,1.1l-0.9-0.3l-0.6-1.4l-3.6-1l-1.2-1.5l-3-1l-1-0.9l-0.7-0.2l-1.3,0.8  l-2.7-0.4l-1.4-0.8l-0.5-1.2l-4.4-0.6l-1.2,0.5l-4.6-2.2l-2.1-0.5h-1.9l-1.3,1.5l-2.5-0.1l-3.3,1.3l-3-0.8l-0.1-0.8l2-3.5l1.4-0.1  l0.7-0.9l0.3-1.8l1.5-3.2v-1.3l-0.4-0.6l-4.3-1.6v-2.7l-4-2.6l0.2-2.1l-1.7-4.4l-0.4-2.7l0.3-1.7l-0.7-0.4l0.9-5.3l-0.7-0.7  l-5.1-0.6l-0.8,0.3l-0.9,2.8l-6,0.8l-0.2-1.2l-1.7-0.3l-0.2-2.2l-1.8,0.2l-1.4-1.6l-4.4-1.5l-1.7-1.9l0,0l3.7-2.7l1.5-3.4l0.9-0.8  h1.5l1.4-1.1l3.5-0.1l0.1-2l-0.6-2.3L471,65l2.3,0.3l2.5,1.1l2.6-0.6l3.9,0.1l0.8-0.9l4.5-0.8l1.1-0.9l1.9-0.5h3.3l1.6,0.7l1.5-0.5  l1-0.7l0.3-2.6l2.5-1.1l1.8-2l6.6-4.2l1.9-2l2.5,0.3l1.6-0.8l2.7-0.3l0.1-2.3l1.9,0.1l1,0.9l2-0.5l3.5,0.6l1.8-0.8l2.4,0.3l2.6-1.1  l4.9,0.7l1.7-0.2l4.5-2l3,0.3l0.7-0.8l1.5-0.5l10.6-1.4l2.7,0.5l1.1-0.6l1.5-4.8l3.2-2.8l2.7-0.7l0.8-1.3l0.8,0.7h5l4,0.6l2.2-1.2  l5.7-1.4l2,0.5l3-0.6l1.9,0.5l1,1l5.7,0.2l6,1.1l2.9-0.5l4.5,2.7l1.9-0.2l2.7,1.1l1.1,0l1.7,2.1l1,0.2l3.3-1.3l3.6,1.4l1.3,0.2  l2.6-0.6l2,0.4l2.4-0.9l0.4-1.2l4.1,0.2l6.8,1.8l1.7-0.9l1.2-2l0.7-0.2l1.9,1l6.2-1.9l3.3,2.9l1.8,0.2l1.1,1.4l1.8-0.1l2,1.1  l1.7,2.3l2.9-0.1l0.9-0.5l1.8,0.8l1.9-0.1l1.5,1.6l2.9-0.6l7,2.7l6.4,0.2l2.4,1.2l4-1.8l5.5-1.7l1.1,0.1l0,1.2l-1.5,2.9l0.8,4  l1.5,3.1l3.5,4.4l2.6,1.3l1.2,1.9l2.8,0.2l0.6,0.5l0.1,1.2l4.7,4.6l1.1,2.2l1.9,1.9l2,1l1.2,2.2l8.2,0.5l2.7-2.2l13.9,3.7l4.9-0.2  l1.9,0.5l0.8,0.7l0.8,3.9l2.2,2.1l0.9,1.9l4.1,0.9l1.2,2.1l2.6,1.4l0.2,1.7l-0.7,1.3l2.8,4l0.4,1.5l0.9,0.3l1.2-1.4l0.9-0.1l2.3,0.6  l1.7,1.5l0.8,6l-1,4.3l2.3,3.2l-0.3,1h-2.2l-1.9-0.8l-1.1,0.3l-0.8,1l-3.6,1l-8.7-1l-3.1,0.4l-4.5-0.2l-3.9,1l-2.1,1.3l-0.3,3.7  l-1.3,1.3l-1.8,5.3l-1.3,1.2l-1,2.6l-1.7,1.5l-0.8,2.4l-3.4,3.4l-4.9,1.2l-6.6-0.5l-2.4,0.5l-1.3-1.2l1.4-0.4l-0.4-0.6l0.9-0.4  l-0.2-0.6l0.8-0.9l-1.2-1.8l-3.6-0.4l-3,1.5l-2.3,2.9l-1.6,0.2l-1.3-0.6l-1,0.5l-4.2,4.2l-0.2,0.8l-1,0.4l-0.3,0.9l-1.3,0.9  l-2.9-0.3l-2.8,0.6l-2.6,2.5l-4.6,1.6l-0.8,1.7l-4.2,0.5l-2.2,1.2l-1.8,2.1l0,0.5l-0.8,0.2l-1.2,1.4l-1.7,0.6l-1.4,1.7h-1.2l0.1,0.4  l-1.7,0.9l-2.7-0.1l-0.2,0.5l-2.9,0.3l-1.4,0.8l-0.9,3.4l-1.4,0.6l-1.6,2.8l-3.6,0.4l-2.6-0.8l-0.9,0.5l-1.2,2.4l-2,1.4l-4,1.8  l-3.9,0.5l-0.6,1.6l-0.1,2.9l1.4,1.6l0.3,3.9l-1.5,0.9l-0.4,2.5l-3,0.3l-3.7,3.9l-1.5,0.8L644.3,204.4z\" />
            <path class=\"st0 kyrgyz-lake\"
              d=\"M499.7,81.8l18.7-1.4c0.9-0.1,1.5-1,1.1-1.8l-0.1-0.3c-0.4-0.9,0.2-1.8,1.2-1.8h7.7c0.5,0,0.9-0.3,1.1-0.7  l3.2-5.9c0.3-0.6,1.1-0.8,1.7-0.5l1.4,0.7c0.1,0,0.2,0.1,0.2,0.1c0.5,0.4,2.8,2.1,3.1,1.2c0.3-0.7,1.3-2.8,2-4.1  c0.3-0.5,0.9-0.8,1.5-0.7l2.6,0.7c0.1,0,0.2,0,0.3,0c0.8,0,5,0.2,5.7,0.2c0.6,0,3.9,0.8,5.2,1c0.3,0.1,0.7,0,1-0.1l1.6-1  c0.1-0.1,0.3-0.1,0.5-0.2l5.4-0.9c0.4-0.1,0.7-0.3,0.9-0.6l0.6-0.9c0,0,0-0.1,0.1-0.1l0.5-1c0.2-0.4,0.7-0.7,1.2-0.7  c0.3,0,0.7,0,0.9-0.1c0.5-0.1,1.4,0,1.7,0c0,0,0.1,0,0.1,0h2.3c0.5,0,0.9-0.3,1.2-0.7l2.1-4.3c0-0.1,0-0.1,0.1-0.2l0.4-1.4  c0.2-0.5,0.7-0.9,1.2-0.9h1.4c0.3,0,0.6,0.1,0.8,0.3c1,0.8,3.9,3.2,4.2,4c0.4,1,0.9,2.3,2.3,2.3c1.2,0,8.5-1.9,10-2.3  c0.2,0,0.3-0.1,0.5-0.2l2.2-1.7c0,0,0.1-0.1,0.1-0.1c0.4-0.3,2.7-2.5,3.2-3.2c0.5-0.6,4-1.8,5.2-2.2c0.3-0.1,0.6-0.1,0.9,0l4.8,2  c0.4,0.2,0.8,0.1,1.2-0.1l2.4-1.6c0.4-0.3,0.9-0.3,1.3-0.1l5.2,2.6c0.3,0.2,0.8,0.2,1.1,0l3.6-1.6l2.5-1.2c0.1-0.1,0.3-0.1,0.4-0.1  l4.7-0.7c0.5-0.1,0.9-0.4,1-0.9c0.2-0.6,0.5-1.4,0.7-1.6c0.3-0.3,0.6-0.8,0.8-1.2c0.1-0.2,0.3-0.4,0.5-0.5c0.6-0.4,1.9-1,2.1-0.8  c0.2,0.3,0.7,1.4,1,2c0.1,0.3,0.4,0.5,0.7,0.6l2.4,1c0,0,2.3,0.9,2.4,1.2s0.9,0.3,0,0.8c-0.9,0.6-3-0.4-3.2,1.1  c-0.1,1.2,1.4,4,1.9,5c0.1,0.2,0.3,0.4,0.5,0.5c0.6,0.3,1.6,1-0.9,0.9c-3.2-0.1-4.2,1.6-5.5,0c-1.3-1.6-3.2-2.4-3.8-3  c-0.1-0.1-0.3-0.3-0.4-0.4c-0.4-0.5-1.2-0.6-1.7-0.2l-3.1,2.3c-0.2,0.2-0.4,0.4-0.5,0.6l-0.2,0.5c0,0.1-0.1,0.3-0.1,0.4v3  c0,0.6,2.6,1,3.1,1.1c0.1,0,0.1,0,0.2,0h2.3c0.1,0,0.1,0,0.2,0c0.5-0.1,3.7-0.5,4.6,0c0.7,0.3,1.3,0.2,1.7,0.1  c0.2-0.1,0.4-0.1,0.6,0l3,0.6c0.6,0.1,1,0.7,1,1.3v0c0,0.6-0.4,1.1-1,1.3c-1.8,0.4-4.6,1.1-5.2,1.3c-0.1,0-0.2,0-0.3,0h-1.1h-3.7  c-0.1,0-0.1,0-0.1,0c-0.3,0-1.7,0.2-2.2,0c-0.5-0.2-1.1,1-1.3,1.2c0,0,0,0.1-0.1,0.1l-1.2,1.7c0,0.1-0.1,0.1-0.1,0.2l-1.1,2.4  c0,0-0.6,1.4-0.9,2s-0.8,2.1-0.8,2.1h-1.1h-7.6h-1.4c-0.2,0-0.5,0.1-0.6,0.2l-3,1.7c-1,0.6-0.8,2,0.2,2.3l0,0c0.1,0,0.3,0.1,0.4,0.1  h2.6h1.9c0.7,0,1.3,0.6,1.3,1.3v0.9c0,0,0.6-0.9,1.1,0c0.6,0.9,0.6,0.9,0.6,0.9s3,0.6-1.7,0.7c-4.7,0.1-5.9-0.6-6.4,0  c-0.4,0.5-1.2,1.5-1.6,1.9c-0.1,0.1-0.2,0.3-0.2,0.4l-0.6,2.2c-0.1,0.2-0.1,0.4,0,0.6c0.1,0.3,0.1,0.8-0.3,1.3  c-0.6,0.8-1.1,1.1-2.3,2.7c-1,1.3-2.6,3-3.1,3.5c-0.1,0.1-0.2,0.2-0.2,0.3l-0.8,1.5c0,0.1-0.1,0.2-0.2,0.2c-0.2,0.3-0.8,0.9-1.2,1.1  c-0.6,0.4-0.9,0.8-1.5,0.9c-0.5,0.2-4.5,0.9-5.2,1c-0.1,0-0.1,0-0.2,0h-3.1c-0.5,0-0.9,0.3-1.2,0.7c-0.6,1.2-1.1,2.3-1.5,2.4  c-0.6,0.2-1.3-0.2-1.9,0c-0.6,0.2,0,1.3-0.6,0.2l-0.4-0.8c-0.1-0.2-0.2-0.4-0.4-0.5l-1.3-0.9c-0.2-0.1-0.4-0.2-0.7-0.2  c-1,0-3.6-0.1-4.4,0c-0.9,0.2-4.2,0.4-5.1,0.6c-0.6,0.1-2,0.3-2.8,0.3c-0.3,0-0.6,0.1-0.8,0.3c-0.1,0.1-0.4,0.4-0.9,0.7  c-1.3,0.8-2.8,2.7-3.7,2.2c-0.8-0.4-3.2-0.1-3.7,0c-0.1,0-0.1,0-0.2,0H561c-0.4,0-0.8-0.2-1-0.5c-0.2-0.3-0.6-0.8-0.9-1.3  c-0.8-1.1-1.5-3.2-1.5-3.2h-0.9c0,0,1.5-2.3-0.8-0.8c-2.3,1.5-1.3,0.9-2.3,1.5c-0.5,0.3-1.1,0.8-1.5,1.2c-0.4,0.4-1,0.5-1.5,0.3  l-2.5-1.2c-0.2-0.1-0.3-0.2-0.4-0.3l-0.1-0.2c-0.3-0.3-0.7-0.5-1.1-0.4c-1.1,0.1-3.3,0.3-3.7-0.1c-0.5-0.4-2.5-2.2-3.3-2.9  c-0.2-0.2-0.3-0.4-0.4-0.7l-0.3-1.7c-0.1-0.6-0.6-1.1-1.3-1.1h-3.2c-0.2,0-0.4,0-0.6,0.1l-3.1,1.6c-0.4,0.2-0.8,0.2-1.2,0l-2.9-1.6  c-0.1,0-0.2-0.1-0.2-0.1l-5.7-1.8c-0.2-0.1-0.3-0.1-0.5-0.3l-3-2.7c-0.1-0.1-0.2-0.2-0.4-0.2l-4.4-1.8c-0.3-0.1-0.7-0.1-1,0  l-2.1,0.9c0,0-0.1,0-0.1,0.1l-6,1.9c-0.1,0-0.3,0.1-0.4,0.1h-2.7c-0.7,0-1.3-0.6-1.3-1.3v-1.7c0-0.2,0-0.3-0.1-0.5l-1.4-3.5  c-0.1-0.3-0.1-0.6,0-0.9l1.3-3.6C498.7,82.1,499.2,81.8,499.7,81.8z\" />

            <!-- <circle class=\"st0 city ajdarken\" data-tab=\"ajdarken\" cx=\"150\" cy=\"318\" r=\"4\" /> -->
            <circle class=\"st0 city ajdarken\" data-tab=\"ajdarken\" />
            <circle class=\"st0 city balykchy\" data-tab=\"balykchy\" cx=\"493.1\" cy=\"83.5\" r=\"4\" />
            <circle class=\"st0 city batken\" data-tab=\"batken\" cx=\"114.6\" cy=\"310.4\" r=\"6.4\" />
            <circle class=\"st0 city bishkek\" data-tab=\"bishkek\" cx=\"379.1\" cy=\"44.1\" r=\"6.4\" />
            <circle class=\"st0 city dzhalal-abad\" data-tab=\"dzhalal-abad\" cx=\"268.1\" cy=\"222.8\" r=\"6.4\" />
            <circle class=\"st0 city isfana\" data-tab=\"isfana\" cx=\"25\" cy=\"330 \" r=\"4\" />
            <circle class=\"st0 city kadamzhaj\" data-tab=\"kadamzhaj\" cx=\"168\" cy=\"300\" r=\"4\" />
            <circle class=\"st0 city kaindy\" data-tab=\"kaindy\" cx=\"331.6\" cy=\"49.2\" r=\"4\" />
            <circle class=\"st0 city kant\" data-tab=\"kant\" cx=\"401.9\" cy=\"42.8\" r=\"4\" />
            <circle class=\"st0 city kara-balta\" data-tab=\"kara-balta\" cx=\"345\" cy=\"49.2\" r=\"4\" />
            <circle class=\"st0 city karakol current\" data-tab=\"karakol\" cx=\"647.5\" cy=\"76.5\" r=\"6.4\" />
            <circle class=\"st0 city kara-kul\" data-tab=\"kara-kul\" cx=\"246.3\" cy=\"158.4\" r=\"4\" />
            <circle class=\"st0 city kara-suu\" data-tab=\"kara-suu\" cx=\"265\" cy=\"250\" r=\"4\" />
            <circle class=\"st0 city kemin\" data-tab=\"kemin\" cx=\"461.6\" cy=\"55.7\" r=\"4\" />
            <circle class=\"st0 city kerben\" data-tab=\"kerben\" cx=\"180\" cy=\"160\" r=\"4\" />
            <circle class=\"st0 city kok-dzhangak\" data-tab=\"kok-dzhangak\" data-tab=\"karakol\" cx=\"281.9\" cy=\"214.5\"
              r=\"4\" />
            <circle class=\"st0 city kochkor-ata\" data-tab=\"kochkor-ata\" cx=\"239\" cy=\"215\" r=\"4\" />
            <circle class=\"st0 city kyzyl-kiya\" data-tab=\"kyzyl-kiya\" cx=\"219\" cy=\"286\" r=\"4\" />
            <circle class=\"st0 city majluu-suu\" data-tab=\"majluu-suu\" cx=\"229.8\" cy=\"200\" r=\"4\" />
            <circle class=\"st0 city naryn\" data-tab=\"naryn\" cx=\"493.1\" cy=\"177.7\" r=\"6.4\" />
            <circle class=\"st0 city nookat\" data-tab=\"nookat\" cx=\"239\" cy=\"286\" r=\"4\" />
            <circle class=\"st0 city orlovka\" data-tab=\"orlovka\" cx=\"450\" cy=\"60\" r=\"4\" />
            <circle class=\"st0 city osh\" data-tab=\"osh\" cx=\"254.2\" cy=\"265\" r=\"6.4\" />
            <circle class=\"st0 city sulyukta\" data-tab=\"sulyukta\" cx=\"27\" cy=\"318\" r=\"4\" />
            <circle class=\"st0 city talas\" data-tab=\"talas\" cx=\"219\" cy=\"75.2\" r=\"6.4\" />
            <circle class=\"st0 city tash-kumyr\" data-tab=\"tash-kumyr\" cx=\"214.5\" cy=\"183.1\" r=\"4\" />
            <circle class=\"st0 city tokmok\" data-tab=\"tokmok\" cx=\"429.8\" cy=\"49.2\" r=\"4\" />
            <circle class=\"st0 city toktogul\" data-tab=\"toktogul\" cx=\"269.7\" cy=\"136.2\" r=\"4\" />
            <circle class=\"st0 city uzgen\" data-tab=\"uzgen\" cx=\"289.3\" cy=\"240\" r=\"4\" />
            <circle class=\"st0 city cholpon-ata\" data-tab=\"cholpon-ata\" cx=\"555.9\" cy=\"63.2\" r=\"4\" />
            <circle class=\"st0 city shopokov\" data-tab=\"shopokov\" cx=\"362\" cy=\"49.2\" r=\"4\" />
          </svg>

          <div class=\"mobile_tabs\">
            <ul>
              <li class=\"city ajdarken\" data-tab=\"ajdarken\">Айдаркен</li>
              <li class=\"city balykchy\" data-tab=\"balykchy\">Былыкчы</li>
              <li class=\"city batken\" data-tab=\"batken\">Баткен</li>
              <li class=\"city bishkek\" data-tab=\"bishkek\">Бишкек</li>
              <li class=\"city dzhalal-abad\" data-tab=\"dzhalal-abad\">Джлал-Абад</li>
              <li class=\"city isfana\" data-tab=\"isfana\">Исфана</li>
              <li class=\"city kadamzhaj\" data-tab=\"kadamzhaj\">Кадамжай</li>
              <li class=\"city kaindy\" data-tab=\"kaindy\">Каинды</li>
              <li class=\"city kant\" data-tab=\"kant\">Кант</li>
              <li class=\"city kara-balta\" data-tab=\"kara-balta\">Кара-Балта</li>
              <li class=\"city karakol current\" data-tab=\"karakol\">Каракол</li>
              <li class=\"city kara-kul\" data-tab=\"kara-kul\">Кара-Куль</li>
              <li class=\"city kara-suu\" data-tab=\"kara-suu\">Кара-Суу</li>
              <li class=\"city kemin\" data-tab=\"kemin\">Кемин</li>
              <li class=\"city kerben\" data-tab=\"kerben\">Кербен</li>
              <li class=\"city kok-dzhangak\" data-tab=\"kok-dzhangak\">Кок-Джангак</li>
              <li class=\"city kochkor-ata\" data-tab=\"kochkor-ata\">Кочкор-Ата</li>
              <li class=\"city kyzyl-kiya\" data-tab=\"kyzyl-kiya\">Кызыл-Кия</li>
              <li class=\"city majluu-suu\" data-tab=\"majluu-suu\">Майлуу-Суу</li>
              <li class=\"city naryn\" data-tab=\"naryn\">Нарын</li>
              <li class=\"city nookat\" data-tab=\"nookat\">Ноокат</li>
              <li class=\"city orlovka\" data-tab=\"orlovka\">Орловка</li>
              <li class=\"city osh\" data-tab=\"osh\">Ош</li>
              <li class=\"city sulyukta\" data-tab=\"sulyukta\">Сулюкта</li>
              <li class=\"city talas\" data-tab=\"talas\">Талас</li>
              <li class=\"city tash-kumyr\" data-tab=\"tash-kumyr\">Таш-Кумыр</li>
              <li class=\"city tokmok\" data-tab=\"tokmok\">Токмок</li>
              <li class=\"city toktogul\" data-tab=\"toktogul\">Токтогул</li>
              <li class=\"city uzgen\" data-tab=\"uzgen\">Узген</li>
              <li class=\"city cholpon-ata\" data-tab=\"cholpon-ata\">Чолпон-Ата</li>
              <li class=\"city shopokov\" data-tab=\"shopokov\">Шопоков</li>
            </ul>
          </div>

          <div id=\"ajdarken\" class=\"tab-content ajdarken\">
            <h3>Айдаркен</h3>
            <div class=\"row\">
            </div>
          </div>
          <div id=\"balykchy\" class=\"tab-content balykchy\">
            <h3>Балыкчы</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"batken\" class=\"tab-content batken\">
            <h3>Баткен</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"bishkek\" class=\"tab-content bishkek\">
            <h3>Бишкек</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"dzhalal-abad\" class=\"tab-content dzhalal-abad\">
            <h3>Джлал-Абад</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"isfana\" class=\"tab-content isfana\">
            <h3>Исфана</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kadamzhaj\" class=\"tab-content kadamzhaj\">
            <h3>Кадамжай</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kaindy\" class=\"tab-content kaindy\">
            <h3>Каинды</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kant\" class=\"tab-content kant\">
            <h3>Кант</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kara-balta\" class=\"tab-content kara-balta\">
            <h3>Кара-Балта</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"karakol\" class=\"tab-content karakol current\">
            <h3>Каракол</h3>
            <div class=\"row\">
            </div>
          </div>
          <div id=\"kara-kul\" class=\"tab-content kara-kul\">
            <h3>Кара-Куль</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kara-suu\" class=\"tab-content kara-suu\">
            <h3>Кара-Суу</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kemin\" class=\"tab-content kemin\">
            <h3>Кемин</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kerben\" class=\"tab-content kerben\">
            <h3>Кербен</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kok-dzhangak\" class=\"tab-content kok-dzhangak\">
            <h3>Кок-Джангак</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kochkor-ata\" class=\"tab-content kochkor-ata\">
            <h3>Кочкор-Ата</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kyzyl-kiya\" class=\"tab-content kyzyl-kiya\">
            <h3>Кызыл-Кия</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"majluu-suu\" class=\"tab-content majluu-suu\">
            <h3>Майлуу-Суу</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"naryn\" class=\"tab-content naryn\">
            <h3>Нарын</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"nookat\" class=\"tab-content nookat\">
            <h3>Ноокат</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"orlovka\" class=\"tab-content orlovka\">
            <h3>Орловка</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"osh\" class=\"tab-content osh\">
            <h3>Ош</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"sulyukta\" class=\"tab-content sulyukta\">
            <h3>Сулюкта</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"talas\" class=\"tab-content talas\">
            <h3>Талас</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"tash-kumyr\" class=\"tab-content tash-kumyr\">
            <h3>Таш-Кумыр</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"tokmok\" class=\"tab-content tokmok\">
            <h3>Токмок</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"toktogul\" class=\"tab-content toktogul\">
            <h3>Токтогул</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"uzgen\" class=\"tab-content uzgen\">
            <h3>Узген</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"cholpon-ata\" class=\"tab-content cholpon-ata\">
            <h3>Чолпон-Ата</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"shopokov\" class=\"tab-content shopokov\">
            <h3>Шопоков</h3>
            <div class=\"row\"></div>
          </div>





          <div class=\"hidden-list-team\">


            ";
        // line 430
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["members"] ?? null), "records", [], "any", false, false, true, 430));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 431
            echo "
            <div class=\"col-lg-3 col-sm-6 tab_upload_item 
                    ";
            // line 433
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 433));
            foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                // line 434
                echo "
                    ";
                // line 435
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loc"], "slug", [], "any", false, false, true, 435), 435, $this->source), "html", null, true);
                echo "

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 438
            echo "          \">

              ";
            // line 440
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 440));
            foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                // line 441
                echo "              <div class=\"city_status\">
                ";
                // line 442
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loc"], "display_city", [], "any", false, false, true, 442), 442, $this->source), "html", null, true);
                echo "
              </div>

              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 446
            echo "
              <div class=\"icon-box-style-03 text-center\">

                <div class=\"memeber-img\">
                  <img src=\"";
            // line 450
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "img", [], "any", false, false, true, 450), "path", [], "any", false, false, true, 450), 450, $this->source), 300, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo "\"
                    alt=\"\">
                  <div class=\"member-social-style-1\">
                    <ul>
                      <li><a href=\"#\"><i class=\"fa fa-share-alt\"></i></a></li>
                    </ul>
                  </div>
                  <div class=\"member-social\">
                    <ul>
                      <li><a href=\"";
            // line 459
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "facebook", [], "any", false, false, true, 459), 459, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                      <li><a href=\"";
            // line 460
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "twitter", [], "any", false, false, true, 460), 460, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                      <li><a href=\"";
            // line 461
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "instagram", [], "any", false, false, true, 461), 461, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class=\"sb-content\">
                  <h4 class=\"title\">";
            // line 467
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, true, 467), 467, $this->source), "html", null, true);
            echo "</h4>
                  <p>";
            // line 468
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "status", [], "any", false, false, true, 468), 468, $this->source), "html", null, true);
            echo "</p>
                </div>
              </div>
            </div>


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 475
        echo "
          </div>

        </div>
      </div>
    </div>


  </div>
</div>
<!-- team area end  -->





<!-- news area Start -->
<div class=\"home-news-area padding-top-115\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-12\">
        <div class=\"text-center padding-bottom-40\">
          <h2 class=\"section-title\">";
        // line 497
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Последние публикации"]);
        echo "</h2>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"swiper-slider swiper-container two\">
        <div class=\"swiper-wrapper\">

          ";
        // line 505
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 505);
        // line 506
        echo "
          ";
        // line 507
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 508
            echo "          <div class=\"swiper-slide image-overlay\">
            <div class=\"news-item-style-03\">
              <div class=\"thumb\">

                ";
            // line 512
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 512), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 513
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 513), 513, $this->source), "html", null, true);
                echo "\"
                  style=\"background-image: url('";
                // line 514
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 514), 514, $this->source), 450, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "');\">
                </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 517
            echo "
              </div>
              <div class=\"content\">
                ";
            // line 520
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 520));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 521
                echo "                <a class=\"subtitle\" href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "url", [], "any", false, false, true, 521), 521, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, true, 521), 521, $this->source), "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 523
            echo "                <h4 class=\"title\"><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 523), 523, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 523), 523, $this->source), "html", null, true);
            echo "</a></h4>
                <ul class=\"blog-meta d-flex flex-column flex-lg-row\">
                  <li><a href=\"";
            // line 525
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 525), 525, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 525), 525, $this->source), "d D Y"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 526
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 526), 526, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-eye\"></i> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, true, 526), 526, $this->source), "html", null, true);
            echo "</a></li>
                </ul>
              </div>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 532
        echo "
        </div>
        <div class=\"swiper-button-next\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></div>
        <div class=\"swiper-button-prev\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
</div>
<!-- news area End -->";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  967 => 532,  953 => 526,  947 => 525,  939 => 523,  928 => 521,  924 => 520,  919 => 517,  910 => 514,  905 => 513,  901 => 512,  895 => 508,  891 => 507,  888 => 506,  886 => 505,  875 => 497,  851 => 475,  838 => 468,  834 => 467,  825 => 461,  821 => 460,  817 => 459,  805 => 450,  799 => 446,  789 => 442,  786 => 441,  782 => 440,  778 => 438,  769 => 435,  766 => 434,  762 => 433,  758 => 431,  754 => 430,  515 => 194,  498 => 180,  494 => 178,  487 => 176,  483 => 174,  475 => 169,  468 => 167,  463 => 165,  457 => 162,  453 => 161,  447 => 157,  444 => 156,  440 => 155,  435 => 152,  428 => 150,  424 => 148,  413 => 140,  409 => 139,  403 => 136,  399 => 135,  394 => 133,  389 => 131,  385 => 130,  374 => 122,  370 => 121,  364 => 117,  361 => 116,  357 => 115,  350 => 111,  346 => 110,  332 => 99,  327 => 96,  317 => 95,  309 => 94,  305 => 92,  297 => 91,  291 => 87,  281 => 86,  273 => 85,  269 => 83,  261 => 82,  255 => 78,  245 => 77,  237 => 76,  233 => 74,  225 => 73,  214 => 64,  206 => 63,  201 => 60,  194 => 59,  191 => 58,  183 => 57,  179 => 56,  164 => 43,  156 => 42,  152 => 40,  144 => 39,  141 => 38,  133 => 37,  129 => 36,  123 => 32,  117 => 31,  106 => 22,  104 => 21,  102 => 20,  100 => 19,  98 => 18,  96 => 17,  94 => 16,  91 => 15,  89 => 14,  87 => 13,  85 => 12,  83 => 11,  81 => 10,  79 => 9,  77 => 8,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = members.records %}
{% set displayColumn = members.displayColumn %}
{% set noRecordsMessage = members.noRecordsMessage %}
{% set detailsPage = members.detailsPage %}
{% set detailsKeyColumn = members.detailsKeyColumn %}
{% set detailsUrlParameter = members.detailsUrlParameter %}

{% set records = events.records %}
{% set displayColumn = events.displayColumn %}
{% set noRecordsMessage = events.noRecordsMessage %}
{% set detailsPage = events.detailsPage %}
{% set detailsKeyColumn = events.detailsKeyColumn %}
{% set detailsUrlParameter = events.detailsUrlParameter %}
{% set currentDate = 'now' | date('Y-m-d') %}

{% set records = location.records %}
{% set displayColumn = location.displayColumn %}
{% set noRecordsMessage = location.noRecordsMessage %}
{% set detailsPage = location.detailsPage %}
{% set detailsKeyColumn = location.detailsKeyColumn %}
{% set detailsUrlParameter = location.detailsUrlParameter %}



<!-- politx-content-area start -->
<div class=\"politx-content-area margin-bottom-40 margin-top-60\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-5\">
        <div class=\"image-box-style-06\">
          {% component 'contenteditor' file=\"about/about_img.htm\" class=\"about_img\" %}
        </div>
      </div>
      <div class=\"col-lg-6  offset-lg-1 align-self-center\">
        <div class=\"content-box-style-01\">
          <p class=\"section-subtitle\">{{'О нас'|_}}</p>
          {% component 'contenteditor' file=\"about/about_title.htm\" class=\"title\" fixture=\"h2\" tools=\"\" %}
          <div>
            {% component 'contenteditor' file=\"about/about_desc.htm\" class=\"description\" fixture=\"p\" tools=\"\" %}
          </div>
          <div class=\"btn-wrapper padding-top-33\">
            {% component 'contenteditor' file='about/about_link.htm' tools=\"link\" fixture=\"\" class=\"btn btn-custom-primary about_link\" %}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- politx-content-area end -->

<div class=\"action-area padding-top-40 position-relative\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-5 align-self-center\">
        <div class=\"content-box-style-01\">
          <p class=\"section-subtitle\">{{'Цели'|_}}</p>
          {% component 'contenteditor' file=\"goal/goal_title.htm\"  class=\"title\" fixture=\"h2\" tools=\"\" %}
          <div>
            {% component 'contenteditor' file=\"goal/goal_desc.htm\" class=\"description\" fixture=\"p\" %}
          </div>
          <div class=\"btn-wrapper padding-top-33\">
            <div class=\"btn btn-custom-primary about_link\">
              {% component 'contenteditor' file='goal/goal_link.htm' tools=\"link\" fixture=\"\" class=\"\" %}
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-6 offset-lg-1\">
        <div class=\"goal-area\">
          <ul class=\"goal-list\">
            <li>
              <div class=\"icon\">
                {% component 'contenteditor' file=\"goal/first_goal_img.htm\"  class=\"\" fixture=\"\" tools=\"\" %}
              </div>
              <div class=\"content\">
                {% component 'contenteditor' file=\"goal/first_goal_title.htm\"  class=\"title\" fixture=\"h4\" tools=\"\" %}
                {% component 'contenteditor' file=\"goal/first_goal_desc.htm\"  class=\"\" fixture=\"p\" tools=\"\" class=\"\" %}
              </div>
            </li>
            <li>
              <div class=\"icon\">
                {% component 'contenteditor' file=\"goal/second_goal_img.htm\"  class=\"\" fixture=\"\" tools=\"\" %}
              </div>
              <div class=\"content\">
                {% component 'contenteditor' file=\"goal/second_goal_title.htm\"  class=\"title\" fixture=\"h4\" tools=\"\" %}
                {% component 'contenteditor' file=\"goal/second_goal_desc.htm\"  class=\"\" fixture=\"p\" tools=\"\" class=\"\" %}
              </div>
            </li>
            <li>
              <div class=\"icon\">
                {% component 'contenteditor' file=\"goal/third_goal_img.htm\"  class=\"\" fixture=\"\" tools=\"\" %}
              </div>
              <div class=\"content\">
                {% component 'contenteditor' file=\"goal/third_goal_title.htm\"  class=\"title\" fixture=\"h4\" tools=\"\" %}
                {% component 'contenteditor' file=\"goal/third_goal_desc.htm\"  class=\"\" fixture=\"p\" tools=\"\" class=\"\" %}
              </div>
            </li>
          </ul>
          <div class=\"mission-area\">{{'Миссия'|_}}</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"upcoming-events-area padding-top-115\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <p class=\"section-subtitle\">{{'События'|_}}</p>
        <h2 class=\"title\">{{'Предстоящие события'|_}}</h2>
      </div>
    </div>
    <div class=\"row\">
      {% for record in events.records %}
      {% if record.date >= currentDate %}
      <div class=\"col-lg-6 next-event-home\">
        <div class=\"row\">
          <div class=\"col-md-7\">
            <div class=\"thumb\">
              <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                <img src=\"{{record.img.path | resize(510, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}\"
                  alt=\"\">
              </a>
            </div>
          </div>
          <div class=\"col-md-5\">
            <div class=\"up-content-style-01\">
              <div class=\"date-month\">
                <span class=\"date\">{{record.date | date('d')}}</span>
                <span class=\"month\">{{record.date | rudate('%BP')}}</span>
              </div>
              <h6>{{record.title}}</h6>
              <ul>
                <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> {{record.location}}</a></li>
                <li><a href=\"#\"><i class=\"fa fa-bell\"></i> {{record.date | date('H:i')}}</a></li>
              </ul>
              <div class=\"btn-wrapper\">
                <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                  {{'Подробнее'|_}} ➞</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      {% else %}

      {% endif %}

      {% endfor %}
      <div class=\"col-lg-6\">
        <div class=\"event-list-style\">

          {% for record in events.records %}
          {% if record.date | date('Y-m-d') >= currentDate %}

          <div class=\"event-single-style-01 next-event-home-secondary\">
            <div class=\"d-flex\">
              <div class=\"time\">
                <span class=\"date\">{{record.date | date('d')}}</span>
                <span class=\"month\">{{record.date | rudate('%BP')}}</span>
              </div>
              <div class=\"content\">
                <p class=\"sm-text\"><i class=\"fa fa-map-marker\"></i> {{record.location}}</p>
                <h4><a
                    href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">{{record.title}}</a>
                </h4>
                <p><i class=\"fa fa-bell\"></i> {{record.date | date('H:i')}}</p>
              </div>
            </div>
          </div>
          {% else %}

          {% endif %}

          {% endfor %}

          <div class=\"btn-wrapper\">
            <a href=\"all-events\">{{'Все события'|_}}</a> ➝
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- team area start  -->
<div class=\"guest-area padding-bottom-90 margin-top-50\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"text-center margin-bottom-55\">
          <h2 class=\"section-title\">{{'Наше месторасположение'|_}}</h2>
        </div>
      </div>
    </div>

    <div class=\"kyrgyz-map\">

      <div class=\"about-member-count\">
        <div class=\"kyrgyz-map-wrap\">
          <svg class=\"tabs\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\" xmlns:mapsvg=\"http://mapsvg.com\"
            xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\" xmlns:svg=\"http://www.w3.org/2000/svg\"
            xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Слой_1\"
            x=\"0px\" y=\"0px\" viewBox=\"0 0 792.4 389.4\" style=\"enable-background:new 0 0 792.4 389.4;\"
            xml:space=\"preserve\">
            <path id=\"KG-B\"
              d=\"M142.5,280.4l1,0.5l2.5-0.1l1.1,1.5l-0.1,0.9l0.6,0.2l3.5-0.7l0.4,0.6l2.1,0.6l2.1,1.3l0.2,1l2.3,1l3.2-0.5  l1.1,3.9l0.9,1l2.1,0.4l3.6-0.3l1.2-0.9l0.1-3.1l0.8-0.6h1.5l1.4,0.8l1.3,2.9l0.6,2.1l-1.1,2.6l1,0.9l0.9,2.7h0.8l1.7-2.2l2.3-1.6  l0.4,0.3l2.7-2l0.9-0.4l0.8,0.3l0.5-0.5l0-1.6l-1.4-1l1.1-1.8l3-0.3l2.9,1.8l1.2,0.2l2.7-2.6l2.9-0.2l-0.3-1.9l0,0l3.4-1.6l6.4-1.8  h1.4l0.9,0.8l0.4,1.1l-1,4.2l1.5,1.9v0.8l-2.7,2l0.6,0.8l4.3,1.7l1.1,1l0.5,1.3v1.3l-3,2.6l3.1,1l0.9,0.6l0.4,1l-0.8,2.8l1.3,1.9  l0.1,1.2l-1.6,4l0.1,1.3l3.9,0.8l2.6,1.7l2,4.9l1.6,2h1.3l1.1-1.4l0.8-0.3l1.6,0.6l0.3,0.9l1,0.8l-1,1.1l1.5,1l2.2,2.7l0.6,2.5  l-0.9,0.6l-0.3,2l-2.4,1.6l-5.4,1.8l-0.8,0.9l-2.4,0.3l-2.3,2.8l-3.4,0.8l-0.9,0.8l-3.2,0.9l-2.1-1.2l-3.3-0.3l-1.7,0.2l-3.6,1.7  l-1.6-1.7l-3.8-0.1l-3.5-2.8l-2.7-0.4l-3.2,0.5l-2.3-2l-3.4-0.5l-1.7-0.8l-1.1-0.8l-0.5-1.6l-4-0.6l-1.7,3.3l-1.2,0.8l-5.7,0.6  l-0.8,0.6l-2.7,4.8l-0.4,2.9l-1,1.3l0,0l-1.4-0.9l-0.8,0.1l0.1,1.3l-4.1,1l-0.7,2l-0.7,0.4l-3-0.3l-2.1,0.8l-0.6,2.3l-1.8,2.1  l-1.8-0.2l-0.7-1.3h-0.8l-4.1,2.3l-5.4-0.7l-1.6,0.3l-0.7,0.5l-0.4,1.3l-0.5,5.6l-1.6,2l-1.5,0.3l-2.2-0.3l-3.9-2.1l-1.8,3.5  l-1.7-0.3l-0.8-1l-1-0.2l-2.1,1.9l-1.8,0.1l-2.7-0.9l-2.2-1.9l0.6-5.1l-1.4-2l-3.4-1.9l-2.6-5.8l-1-0.7l-5.3-1l-2.3-2.5l-1,0.2  l-0.8,1.1l-2.2,0.3l-1.2,1.2l-2.4-0.3l-1.4,1.8l-3.5-1.6l-1,2.1l-1.4,1.2l-1.7,2.7l-3.4-0.1l-0.9-0.8l-0.2-2l-1.6-1.4l-0.9-0.1  l-2.3,1.7l-1-0.1l-3.4-3.1l-2.5,1.5l-0.6,1.2l-2.2-0.5l-1.8,2.7l-1.4,0.1l-1.2-2.7l-2.1-0.1l-2.8-1l-0.8,0.5l-0.9,2.7l-1.8,0.8  l-5.5-4.2l-5.1-1.7l-1.5,0.1l-1.2,1.1l-1.5,0.2l-1.6-0.5l-0.6-0.7l-1.3,0.3l-2.1,2.8l-1.3,0.1l-0.8,0.8l0.1,0.8l-1.9-0.1l-2.9,0.9  l-0.9-0.6l-1.5,0.7l-2.2-0.7l-0.9-1.7h-1l-0.6,2.5l-1.3,1.1l-1.9-1.5l0.1-1.9l0.9-1.1l0.2-1.6l-2.1-6.3l-0.1-4l-0.6-2.3l-2.8-3.5  v-3.7l-1-0.9l-0.1-1.1l4.9-5.5l-2.3-3.2l1.3-3.8l2.3-1.9l0.6-1.5L5.5,311l0.5-0.7l0.8,0.3l1.1,1.9l1.8-0.2l1.4,1l1.1,1.8l0.3,4.2  l2.6,0.4l1.8-1.6l1.7-0.3l1.9,0.6l0.4-0.5l-2.6-3.9l-0.6-2.4l0.9-9.6l0.8-0.6l1.5,0.1l2.1,1.4l5-2l1.5,0.1l0.3,0.9l1-0.1l1.9-3.1  l3.9-2.3l4.7-1.5l3,0.1l3.2-0.8l6.1-2.5l1.3,0.1l5.4,3.1l3.8,3.8l1.2,0.1l0.9-0.9l1.1,0.5l0.2,1.4l1.3,1.4l4.3-0.3l1.1,0.4l2.5,1.5  l1.8,0.2l0.1,1.2l0.6,0.6l4.5,2.5l8.3,2.2l2.1,1.3l0.7,0.7l-0.4,1.4l-2.4,1.3l-3.4,2.9l-0.4,3.4l0.5,1.2l1,0.2l-0.2-2.7l0.5-1.8  l0.7-0.5l2.2,0.1l4.3-2.5l-0.2-1.9l1.3-1.9l0.7-6.8l2.2-0.9l8.1-1.6l1.1-1.9l-0.2-2.5l1.9-0.7l0.8,0.7l1.6-0.4l2.5-1.6l5.5-2.2  l0.9-2.3l-1.8-3.1l0.5-1.1l1.5-0.5l4.9-0.2l3.4-2.1l2.5-3.1l3.3-0.3L142.5,280.4L142.5,280.4z M128.7,292.2l0.6-1.1l0-1.6l-0.7-1  l-0.8,1l0.4,2.4L128.7,292.2L128.7,292.2z M173.9,294.2l0.2-1l-1.9-0.5v1.2l0.5,0.1L173.9,294.2z M126.4,298.3l0.2,3.1l-0.6,4.3  l0.6,2.3l1.2,1.6l1.5,0.9l3,0.5l0.9,0.5l0.1,0.9l-0.3,1.3l-1,0.4l1.4,2.6l-2.5,2.4l-0.6,2l-1.2,0.9l0.3,0.7l2,0.2l1.4,1.2l0.5-0.7  l-0.7-0.9l0.2-0.9l0.9-1l1,0.2l-0.2,2.1l0.6,0.3l3.6-0.5l2.4-2.7l0.1-0.7l-0.9-0.9l0.1-1.1l-0.8-0.5l-4.2,0.1l-0.1-0.7l1.5-0.7  l0.4-0.8l-0.2-1.1l-1.1-1.2l1.7-0.5l2.2-1.5l0.3-0.7l-0.4-1l-4.1,2l-0.9-0.1l-1.6-6.2l-1.5-0.7l-0.8-1l-0.6-3.2l-1.6-3.1l-2.2-1  l-1,0.6l0.2,0.7L126.4,298.3L126.4,298.3z M179,318.3l2.7-1.9l3.6,0.5l1-2.2l-5.2-4.3l-0.8,0.9l0.8,2.3l-1.5,1.2l-2.5,0.6l-0.3,1.1  L179,318.3L179,318.3z M91.5,323.6l-0.6,1.2l1.6,2.8l0.3,2.6l1,0.2l2.4-0.9l0.6,0.4l0.5,1l-0.9,2.4l0.3,1.2L99,333l2.4-3.5l3.3-1.4  l1.6-2.1l-0.4-1.4l-1.1-0.2l-3.1,0.8l-2.5-0.1l-5.4-1.7L91.5,323.6L91.5,323.6z\" />
            <path id=\"KG-C\"
              d=\"M358.6,2.2h2l2.1,2.7l1.8-0.2v0.9l0.6,0.4l0.9,0.4l1-0.2l0.5,0.8l0.9-0.2l2.4,2.6l2.7,1l0.5,0.9l2-0.6l1.2,1  l4.9,1.3l0.5,1.4l4.3,5.4l2,1.8l1.9,0.7l1.2,2.2l2.7,1.8l1.4,0.2l1.7-0.7l1,0.3l1.7-0.9l1,0.3l5,2.3l1.1,1.1l7.1,3.7l5.2,1.5  l3.4,2.3l3.2,0.9l2.3,1.9l4.5-0.2l4.2,1.2h3.1l5.7,1.3l3.3-0.5l15.5,4.1l2.3-3.4l1-0.6l1.5-6l1.6-2l2.3-1.8l5.5-1.5l1.2,0.3l1.3,2  l2.9,0.3l2.1,1.7h1.7l6-1.7l4,0.1l1.1,0.9l5.5,0.1l1.2,0.7l0.6,3.9l1.2,0.7l2,0.1l9.7-2.8l0.9-1.8l0.8-0.5l5.3,0.9l1.3-0.7l2.7,0.7  l5.7,0l1.6-1l0.7-1.2l0.1-1.7l0.8-0.7l4-0.3l1.1-1.9l0.8-0.1l5,0.9l1.7-1.1l3.1-0.4l1.1,0.5l1.7,2.5l1.1-0.1l2.4-2l4.3,0.3l1.3,0.4  l0.5,2.1l2,0.3l2.9,2.3l-0.8,1.3l-2.7,0.7l-3.2,2.8L564,43l-1.1,0.6l-2.7-0.5l-10.6,1.4l-1.5,0.5l-0.7,0.8l-3-0.3l-4.5,2l-1.7,0.2  l-4.9-0.7l-2.6,1.1l-2.4-0.3l-1.8,0.8L523,48l-2,0.5l-1-0.9l-1.9-0.1l-0.1,2.3l-2.7,0.3l-1.6,0.8l-2.5-0.3l-1.9,2l-6.6,4.2l-1.8,2  l-2.5,1.1l-0.3,2.6l-1,0.7l-1.5,0.5l-1.6-0.7h-3.3l-1.9,0.5l-1.1,0.9l-4.5,0.8l-0.8,0.9l-3.9-0.1l-2.6,0.6l-2.5-1.1l-2.3-0.3  l-0.6,1.2l0.6,2.3l-0.1,2l-3.5,0.1l-1.4,1.1h-1.5l-0.9,0.8L462,76l-3.6,2.6l-1.2,1.5l-4,1.7l-1.5-0.9l-1.2-0.1l-0.6-1l0.1-1l-1-0.2  l-0.5,0.8l-1.2,0.6l-1.9,0.6l-1.9-0.3l-1.6,0.6l-2.6-1.8l-1.1,1.5l-3.2,0.1l-2.7,1.1l-5-1.8l-3.2,0.8l-1.4-0.4l-0.9-1l-3.1,2.2  l-2.8,0.1l-1.1-1.7l-1.1-0.3l-2.3,1.2l-5.1-0.8l-1.1,0.6l-7.6,0.7l0.3,1.6l2.3,2.6l0.8,2.2l1.4,1.8l0.5,2.6l-1,0.8l-1.8-0.4  l-3.8,0.4l-1.7,0.8l-2.4,3.1l-2.7,2.2l-2.8-0.4l-5,1.8l-2.4-0.1l-3.2,0.8l-2.4-0.6l-2.7,0.9l-2.7,0.2l-3.1-0.6l-1.9,9l1.1,1l3.3,1.5  l0.3,1l-0.9,0.3l-0.9,1.5l-1.5,0.3l-1.4,1.1l-0.6,1.1l0.9,3.4l-0.7,1.7L360,124l-1,5.5l-1.9,0.3l-2.4-0.7l-1.4,0.6l-1.1,1l-1.8,5.4  l-1.2,0.9l-1.5-1.7l1.7-4.9L349,130l-3.9,0.7l-1.5-0.3l-0.7-1.6l-2.7-2.5l-1.1-1.8l-1.7,1.7l-1.1-0.2l-1.8,0.8h-5.1l-0.8-0.7l-3,0.7  l-0.7-0.4l0,0l-0.1-2.1l-0.6-0.7l-0.5-2.2l-1.1-0.5l-3.2-0.5l-8.3,2l-1.2-0.9l-1-0.1l-0.8,0.9l-2.2-0.2l-1.3-1.4l-2.1,0.2l-6.8-2.1  l-1.5,0.4l-1.6-1.4l-0.8-3.4l-1.2-1.7l-7.8-2.1l-3.2,0.3l-2.2-0.9l0,0l-0.4-1.8l0.5-2.8l-3.2-1.2l-1.4-1.9l0.3-5.1l0.8-0.7l4.3,1.4  l4.4-3.8l1.1-0.2l1.5,0.6l3.5-1.3l4.1,1.1l2.6-2.4l4.1-0.3l4.4,1.5l7.4-2.6l1.2-1.4l0.2-3.2l2.8-3.3l0.7-2.1v-1.9l-2.3-1.6l-1.3,1.1  l-1.1-0.2l-0.7-1.9l-1.1-1.1l-1.4,0.3l-0.1,2.2l-1.1,3.3l-0.8,0.3l-1.1-0.6l0.1-1.5l-2.7-2.6l-2.6-5.1l-1.2-4.4l0.1-5.4l1.7-4.3  l0.3-3l2.2-4.2l1.6-2.1l0.8-7.6l-0.5-3.5l-1-2.2l0.5-2.2l2.6-2.6l-0.1-4.6l0.8-2l3.5-0.9l2.6-1.4l2.2-2.1l3.7-1.9l4.4-3.2l0.7,0.9  l1.4,0.5l1-1l5.5,0.5l1.5-1.6l0.3-1.1l0.5,0.2l2.4-6.8l3.3,1.2l1.3,2.2l1.8,0.9l1.5-0.5l1.5-1.4l7.4-0.4l1.1-0.5l0.5-1.1l-2-3.7  l0.5-1.6l1.8,1.3L358.6,2.2z\" />
            <path id=\"KG-J\"
              d=\"M216.3,101.4l6.8,1.1l1.5,0.9l1.9,2.9l1.4,0.4l3.4-1l2.9,2.3l1.8-0.2l4.2,2.3l4.7-0.4l5,2.5l6.3,4.8l5-0.6  l0.9-2.9l2.8-1.3l2.2-3l0.7-0.2l1.6,1.6l2-1.3l0.8,1.5l1.4-0.3l1.6,0.6l2.3-1l0,0l2.2,0.9l3.2-0.3l7.8,2.1l1.2,1.7l0.8,3.4l1.6,1.4  l1.5-0.4l6.8,2.1l2.1-0.2l1.3,1.4l2.2,0.2l0.8-0.9l1,0.1l1.2,0.9l8.3-2l3.2,0.5l1.1,0.5l0.5,2.2l0.6,0.7l0.1,2.1l0,0l0.8,0.5l-1.2,2  l-4,4.1l0.1,0.5l3.8,2l1.1,0.1l1.2-1.1l0.6,0.1l2.4,2.2l2.7-0.6l0.9,0.5h2.9l1.2,0.9l0.5,1.5l-0.3,3.1l1.8,3.9l1.6,1.1h4l1,0.7  l-0.5,3.9l0.6,1.4l0.4,5l-0.9,2.3l-1.1,0.1l-1.5-2.1v-1.4l0.8-1.8l-0.5-1.1l-2.4-2l-3.9-0.8l-2.1-1.4l-1.9,0.6l-0.1,0.8l2.7,6.1  l2.1,0.9l0.4,1.4l1.4,1.4l3.2,2.2l2.6,0.4l3.6-0.5l2.2,0.4l2.8,1.8l2-1.4l6.9-0.7l3.9,1.1l1.8,1.5h1.5l2.7-3.4l3.6-0.9l6-0.3  l2.6-0.8l1.9-2l2.9-1.5l1.6-0.4l2.2,0.4l-0.5,2.6l-1.2,1.9l0.4,4.9l-2.3,5.8l-0.3,4.5l-0.8,1.9l-3.5,2.2l-1,1.4l-3.2,0.1l-2.4,2.2  l-5.7,0.8l-4.1,2.7l-6.1,1.4l-0.5,2l2.2,3.2l0.7,3.6l-3.4-0.5l-4.1,1.1l-4.5,0.3l-2-0.4l-1.1,1.9l-1.6,0.4l-1.2,1.1l-0.3,1.2  l-4.1,0.7l-0.7,1.4l0.1,1.8l1,1.6l4.3,3.2v1.5l-3.2,2.6l-2,3l-0.5,1.8l-1.5-2l-2.7-0.1l-2-1l-3-0.7l-0.4-5.8l-0.4-0.9l-1.5-0.8  l-0.1-2.5l-2-0.9l-1,0.2l-0.1,1.9l-1.2,1.1l-0.3,1.9l-5.5,5.4l-1.5,6.4h-1l-3.6-1.7l-1.7-2.1l-2.4-1.8v-1.3l2.6-3.2l4.4-2.6l0.8-1.2  l-0.8-2.7l-1.4-1.6l-0.7,0.1l-3.4,1.2l-0.2,0.7l1.4,1.8v1.1l-0.6,0.6l-5.9-0.9l-3.4,0.1l-2.5-0.8l-1.6,1.3l-0.1,2l-0.5,0.6l-2,0.8  v0.8l-1.4,1.4l-2.9-0.4l-4.8,1l-1,1.2l-0.8,3.1l0.1,3.6l1,1.9l-0.2,1.7l-1.3,2.3l-3,0.5l-2.6,2.8l-9.9-0.9l-1.3,1.3l0,0.6l-1.5,1.1  l-0.2,0.9l-1,0.7l-1.3-0.1l-1.8-1.1l-3-4.5l-1.1-0.4l-0.7,0.1l-0.4,0.8l-6.3,1.8l-2.4-0.1l-8.6-2.7l-0.6,0.4l-0.7-0.6l1.3-3.4  l-0.4-2.2l-3.9-4.1l-1.8-0.1l-0.1-2.3l-1-1.7l-3.3-1.9l-3.2,0.7l-2.3-2.9l-0.8-0.3l-0.8,0.3l-0.8,1.5l-2.2,1.4l-2.9,1.7l-3,0.6  l-0.8,1l-1.3,0.2l-2.2-1.1l-0.2-1.1l2.2-0.4l2.6-2.8l0-2l-2.4-2.5l-0.3-1.2l0.5-1.9l-0.3-2.9l-1.4-1l-2.6,0.2l-1.5,0.9l-2.1,2.4  l-1.8-0.3l-4.2-2.4l-3.9,0.6l-3.5-1.8l-1.5-3.6l1.2-2l1.7-1.6l0.8-2.6l-0.1-0.9l-2.2-3.1l-0.4-1.5l1.1-0.9l-0.5-1.6l-1.8,0.8  l-1.6-0.1l-0.5-2.9l-2.6-3.4l-0.2-2.4l-0.7-0.3l-1,0.7l0.3,2.4h-0.6l-1.4-2.6l-1.7-0.3l-0.7,1l0.8,2.1l-0.8,1l-1.1-0.5l-0.3-1.6  l0.5-1.3l2.4-2.6l-0.2-4.2l0.6-0.4l0.1-2.7l-1.4-0.1l-1.3,1.4l-1.6,0.8l-0.6,1.9l-1,0.8l-2.8,1l0.2,1.1h2.3l1.1,1l-0.2,3.5l-1.2,2.2  l0.6,2.1l-0.3,0.9l-1,0.2l-0.7,2.3l-1.5-0.4l-0.1,2.1l-1.1,1.4l-2.2,1.5l-2.5-0.9l-2.1,0.9l-2.4-0.7l-2.2,1.4l0.1,1.3l0.5,0.2  l-0.3,1.3l0.3,1.5l1.3,1.4l-0.3,1.5l-1.6,1.6l2.3,3l-2.5,4.3l-1,0.4l-1.8-0.9l-0.6-3.5l-1.9-1.3l-2.7,1.2l-0.8,2.7l-1.2-0.1  l-0.9-0.9l-0.2-3.9L144,200l-0.7-0.1l-0.9,0.8l-0.6-0.7l-3-0.3l-2.9,1.8l-0.4,1.8l-1.9,0.7l-1.1-0.1l-2-2.6l-1.8-1l-2.9-0.3  l-2.1,1.8l-2.8-0.3l-0.8-1.7l-2.3-1.5l-2.1-3.1l-0.8-0.2l-2.4,0.1l-0.7,0.5l-0.7,2l-1.2,1.4l-0.6-0.8l0-3.7l-1.3-1.1v-2l1-3  l-0.3-6.4l-4.7-7.6l-2.5-0.6l-2.2,0.8l-0.9-0.2l0,0.5l-3.3,0.5l-4,4.5l-2.3,0.3l-2.1-1l-1-2.8l-4.2-3.2l-1.2,0.1l-1.7-2.7l-1.4,0.5  l-3.1-2.4l-1.6,0.9l-1.1,1.5l-1.3,0.1l-2.8-0.9l-1.6-1.3l0.1-3.7l2.5-2.3l0.5-3l4.3-0.3l2.2-1.6l2.7-0.6l1.7-1.1l2.7-4l2.4-0.9  l1.9-2.1l2.2,0.1l1.2-2.3L90,145l0.4-2.4l1.2-1.1l3-1.3l1.4-1.7l0.4-1.3l3.1-2.2l0.9-2.4l1.4-1.5l3.1-1l2.5,0.4l0.5-1.6l0.7-0.1  l3.2,1.4l1.7-0.4l1.5-2.4l0.1-1.9l-1.2-3.6l1.5-4.7l6.2,2.3l2.1-0.1l2-0.7l0.8-1.5l4.1-2.9l2-0.6l0.7-1.6l4.3-3l2.9-0.2l2.6-1.6  l0.8-0.9l0.5-3.1l2.2-1.1l4.8,0.3l1.5,0.3l2.9,1.8l4.1,0.3l2.4-1.6l3.7-0.1l3.1-1.4l1.5,0.1l4.6,1.9l2.9,2.9l10.9,2.5l6.8,3.5  l2.7,0.8l3.5,2.7l3.7,0.1l0.9,1.1l3.2-1.2l1.2-1.8l0.4-1.7L211,109l0.4-1.9l2.2-3.4l-0.1-1.6l1.1-0.9L216.3,101.4z\" />
            <path id=\"KG-N\"
              d=\"M449.9,79.8l0.6,1l1.2,0.1l1.5,0.9l4-1.7l1.2-1.4l0,0l1.7,1.9l4.4,1.5l1.4,1.6l1.8-0.2l0.2,2.2l1.7,0.3l0.2,1.2  l6-0.8l0.9-2.8l0.8-0.3l5.1,0.6l0.7,0.7l-0.9,5.3l0.7,0.4l-0.3,1.7l0.4,2.7l1.7,4.4l-0.2,2.1l4,2.6v2.7l4.3,1.6l0.4,0.6v1.3  l-1.5,3.2l-0.3,1.8l-0.7,0.9l-1.4,0.1l-2,3.5l0.1,0.8l3,0.8l3.3-1.3l2.5,0.1l1.3-1.5h1.9l2.1,0.5l4.6,2.2l1.2-0.5l4.4,0.6l0.5,1.2  l1.4,0.8l2.7,0.4l1.3-0.8l0.7,0.2l1,0.9l3,1l1.2,1.5l3.6,1l0.6,1.4l0.9,0.3l1.5-1.1l0.5,0.3l0.5,1.9l-0.4,1.1l-1.9,1.2l-0.1,2.2  l-0.5,1.1l-1.1,0.6l-4.9,0.2l-1.8-0.5l-0.8,0.5l-1.4,2.9l0.6,2.9l-0.5,1.6l0.3,1.6l1.4-0.6l5.7,0.9l5.2-0.6l0.9-1.3l1.5-0.9l1.8,0.6  l1.1,1l0.7,1.3l0.2,2.3l-0.6,1.1l-1.8,1.2l-0.7,1.6l0.2,0.9l2.4,1.4l0.3,0.9l-1.6,4.9l-0.1,1.8l1.4,0.2l1.6-1.6l0.7,0.1l2.3,3.1  l6,0.1l7-1.2l1,0.3l1.3,1.5l1.9,0.5l3.8-2.6l9.8,1.2l4.7-0.9l2.2-1.6l1.3-2.5h0.6l1.4,4.3l-1.9,5.6l-0.5,1.1l-4-0.2l1.2,0.4l1.1,1.7  l2.2,8.1l2.6,1.4l1.2,0.3l1.7-0.5l1.2,0.5l1,1.8l-1.4,3l-0.1,2.6l-0.7,1.4l-1.7,1.8l-2.1,1.2l0.2,1.6l0.7,0.3l7.4-3.6l10.1-2  l1.3,1.1l2.3,0.8l-1.2,1.5v3.3l2.6,2.4l4.7-0.6l0.8-0.5l4.9,0.7l2.5-0.3l5.4,2.2l2.5,0.5l3.3-2.2l3.6-1.3l0.7-0.9l4.3-0.6l0.5,0.6  l1.2,0.1l-0.9,2.6l0.5,2.2l0.8,1.3l1.9,1.6l1.8,0.4l0,0l-0.8,3.4l-0.9,0.3l-2.4,2.5l-4.8,0.6l-3.2,3h-1l-2.5-2.2l-3.1-0.4l-2.7,0.3  l-1.4-0.3l-1.7-1.3h-1.3l-0.3,1l-2.3,0.7l0.1,0.5l-3.5,1.2l-1.4,1.9l-2.7-0.5l-1.7,0.8l-1,1.1l-4.1-0.2l-4.7,1.4l-1.6-0.7l-4.4,0.5  l-1.4-0.4l0.1-1.3L586,216l-0.8-1.1l-2.8-0.5l-6.2,3.1l-3.6-2.1l-2,0.1l-2.5,1.2l-1.2-0.3l-1.1-0.8l-1.8-0.3l-0.7-2.2l-2.6-1.3  l-3.8,0.1l-0.6-0.6l-1.4,0.1l-2.9,3l-1.8,1.1l-1.7-0.3l0.3,0.7l-2.3-0.3l-1,1.5l-0.2,2.9l-2.4,0.1l-0.5,1.4l-2.8,1l-1.3,4.3l0.3,5.2  l-1.8,1l0.3,1.7l-1,1.2l-0.3,1.6l-4.6,3.3l0.1,2.7l1.8,2.6l-2.2,4.8l0.3,1.9l-1.1,1.7l-1.7,0.6l-1.1,2.4l-1.6,0.7l-1.5,2.2l-1.5,3.7  l0.2,3.2l-0.9,1.5l-1.9,1.4l-0.1,1l-3.7,2.2l-0.6,1.8l-2.7,1.2h-3l-1.6,3.2l-1.3-1.1l-0.2-3.6l-1.9-1.3l-3-0.5l-1.4,0.2l-2,2.3  l-3.1,2.2l-6.6-1.3l-2.9,2.3l-0.7-0.3l-1.2-1.9l-1.9-0.5l-0.9,0.6l-1.1,2.7l-1.2,1.4l0.1,2.6l-0.8,0.8l-1.6-1.2l-3.8,0l-0.7-1.1  l-0.4,0.4l-0.8-0.9l-2.9,2l-2.9,0.1l-2.2,1.6l-0.8-0.2l-0.9-5.1l-1.1-2v-1l1-2.7l-0.3-1.1l2.3-2.7l0.7-2.6l-3.1-2.8l-1.8-0.8  l-0.9-1.6l-0.9-3.4l-0.3-6.6l-0.7-1.8l-2.3-1.1l-2.9,1.3l-4.2,3l-4.6,5.3l-2,1.1l-2.2,0.4l-1.6,1.1l-2.6,2.5l-0.4,1.7l-2,0.4  l-1.5,1.9l-2.4,1.5l-4-1h-2.1l-3.5,1.3l-2.2-0.2l-1.9-1.4l-2.5,0.5l-1.7-0.4l-5-4.6l-2.8-1.3l1.1,0.5l-2.5-0.6l-1.1,1l-2.4-1h-1.1  l-1.4,1l-6-0.5l-1.1-1.5l-2-0.1l-0.8-0.6l-1.2,0.3l-1.2-1.2l-0.9,0.5l-0.5-0.3l-0.5-2.1l1.4-3.2l-0.5-1l-1.1-1l-1.3-0.1l-1.8-1.3  l-2.7-0.6l-1.9,0.3l-2.2-2.6l-2.1-0.1l-1.6-1.9l-2.3-0.8l-2.9-5.8l-1.6,0.3l-0.8-0.5l-1.2-3.5l-0.5-0.4H356l-1.4-1l-0.4-3.1  l-2.1-2.5l-1.8-0.6l-2-2.3l-1.9-0.3l-1.2-3.6l-3-1.5l-0.3-0.6l1.4-3.1l2.3-2.7l2.2-1.5v-1.5l-4.3-3.2l-1-1.6l-0.1-1.8l0.7-1.4  l4.1-0.7l0.3-1.2l1.2-1.1l1.6-0.4l1.1-1.9l2,0.4l4.5-0.3l4-1.1l3.4,0.5l-0.7-3.6l-2.2-3.2l0.5-2l6.1-1.4l4.1-2.7l5.7-0.8l2.4-2.2  l3.2-0.1l1-1.4l3.5-2.2l0.8-1.9l0.3-4.5l2.3-5.8l-0.4-4.9l1.2-1.9l0.5-2.6l-2.2-0.4l-1.6,0.4l-2.8,1.5l-1.9,2l-2.6,0.8l-6,0.3  l-3.6,0.9l-2.7,3.4h-1.5l-1.8-1.5l-3.9-1.1l-6.9,0.7l-2,1.4l-2.8-1.8l-2.2-0.4l-3.6,0.5l-2.6-0.4l-3.2-2.2l-1.4-1.4l-0.4-1.4  l-2.1-0.9l-2.7-6.1l0.1-0.8l1.9-0.6l2.1,1.4l3.9,0.8l2.4,2l0.5,1.1l-0.8,1.8v1.4l1.5,2.1l1.1-0.1l0.9-2.3l-0.4-5l-0.6-1.4l0.5-3.9  l-1-0.7h-4l-1.6-1.1l-1.8-3.9l0.3-3.1l-0.5-1.5l-1.2-0.9h-2.9l-0.9-0.5l-2.7,0.6l-2.4-2.2l-0.6-0.1l-1.2,1.1l-1.1-0.1l-3.2-1.4  l-0.8-1.1l4-4.1l1-2.1l3-0.7l0.8,0.7h5.1l1.8-0.8l1.1,0.2l1.7-1.7l1.1,1.8l2.7,2.5l0.7,1.6l1.5,0.3l3.9-0.7l0.5,0.6l-1.7,4.9  l1.5,1.7l1.2-0.9l1.8-5.4l1.1-1l1.4-0.6l2.4,0.7l1.9-0.3l1-5.5l2.7-1.4l0.7-1.7l-0.9-3.4l0.6-1.1l1.4-1.1l1.5-0.3l0.9-1.5l0.9-0.3  l-0.3-1l-3.3-1.5l-1.1-1l1.9-9l3.1,0.6l2.7-0.2l2.7-0.9l2.4,0.6l3.2-0.8l2.4,0.1l5-1.8l2.8,0.4l2.7-2.2l2.4-3.1l1.7-0.8l3.8-0.4  l1.8,0.4l1-0.8l-0.5-2.6l-1.4-1.8l-0.8-2.2l-2.3-2.6l-0.3-1.6l7.6-0.7l1.1-0.6l5.1,0.8l2.3-1.2l1.1,0.3l1.1,1.7l2.8-0.1l3.1-2.2  l0.9,1l1.4,0.4l3.2-0.8l5,1.8l2.7-1.1l3.2-0.1l1.1-1.5l2.6,1.8l1.6-0.6l1.9,0.3l1.9-0.6l1.2-0.6l0.5-0.8l1,0.2L449.9,79.8z\" />
            <path id=\"KG-O\"
              d=\"M399.3,264l0,0.6l-0.5,0v3.7l-1.8,1.8l0.1,0.7l4.5,4l1.5,2.5l2.3,1.6l-0.2,1.4l-1,0.1l-1.8,1.2l-1.3-0.2l-2.2-2  l-0.8-0.1l-7,0.1l-0.6,0.4l0.2,2.7l-2.6,3.9l-1.1,0.4l-0.8-0.9l-1.9-0.3l-1.9,0.4l-3.9,6l-3.4,2l-2.3,3.3l-4.3,3.2l-1.4,1.7  l-2.1,0.9h-1l-2-1.5l-1.4,0.6l-1.9-2.3l-8.6,2.1l-1.2,0.6l-0.1,0.6l-1.4,1.1l-1.5,0.5l-2.4-1.5l-0.6,0.2l-2.7,4.7l-3.9,1.3l0,1  l2.5,1.1l0.2,1.6l-3.8,4.7l-0.7,1.9l0.8,4.3l-1.7,1.5l-0.9-0.1l-2,1.5l-1.3,5.5l0.5,2.6l3.3,1l1.3,1.3l2.1,5.9l0.9,4.1l-0.2,3.3h-2  l-0.5,0.6l-0.6,2.7l-1.5,1.2l0.5,1.3L332,358l-0.1,3l-1.5,0.8l-8.5,1.3l-3.1-0.2l-3.7-1.1l-1.7,1l-2.7-0.2l-1.4,0.9l-2.2-1.3  l-4.6,0.1l-2.5,1.5l-2.9,0.4l-2.3,1.3l-0.6,0.9l0.1,2.2l-1.4,1.9l-5.1-0.3l-1.1,1.5l-4.1,1.5l-2.1-0.1l-3.2-1.4l-1.6,0.1l-3.9,1.5  l-3-0.7l-3.3,1.1l-1.9-1.5l-1.2,0l-2.5,1.7l-2.7-1.2l-3.2,1.3l-2.6-2.1l-3.9-1.4l-5.6-0.8l-1.3,1.3l-0.6,1.7l-1.1,0.7l-1.3,0.1  l-1.1-2.3l-2.9-0.2l-1.8,1l0.1,1.9l-0.4,0.4h-3.9l-2.7,1.2l-2.9,0.2l-1,0.9l-1,1.2l-1.4,4.1l-3.8,7l-1,0.2l-0.7-0.6l-0.9-3.9  l-0.7-0.8l-1.2-0.1l-0.8-2.2l-4.1-0.3l-1.3-0.6l-0.9-1.1l-1.4-6.3l-0.7-0.7l-1.7,0.1l-2.5,1.5h-1.2l-3.7,2.8l-1.4,2l-5.5,0.6  l-0.8,0.7l-1.5-0.4l-1.6-1.8l-1.7-3.5l0.5-1.6l2.3-2.2l1-2.2l-2-5.3l-1.2-0.6l-7.5,1.7l-3.5-0.9l-0.8,0.9l-2.3-0.6l-1.8-4.2  l-0.1-1.5l1.8-3l0.1-2.5l-0.6-1.3l-3.5-2.2l0,0l1-1.3l0.4-2.9l2.7-4.8l0.8-0.6l5.7-0.6l1.2-0.7l1.7-3.3l4,0.5l0.5,1.6l1.1,0.8  l1.7,0.7l3.4,0.5l2.3,2l3.2-0.5l2.7,0.4l3.5,2.8l3.8,0.1l1.6,1.7l3.6-1.7l1.7-0.2l3.3,0.3l2.1,1.2l3.2-0.9l0.9-0.7l3.4-0.8l2.3-2.8  l2.4-0.3l0.8-0.9l5.4-1.8l2.4-1.6l0.3-2l0.9-0.6l-0.6-2.5l-2.2-2.7l-1.5-1l1-1.1l-1-0.8l-0.3-0.9l-1.6-0.6l-0.8,0.3l-1.1,1.4h-1.3  l-1.6-2l-2-4.9l-2.6-1.7l-3.9-0.7l-0.1-1.3l1.6-4l-0.1-1.2l-1.3-1.9l0.8-2.8l-0.4-1l-0.9-0.6l-3.1-1l3-2.6v-1.3l-0.5-1.3l-1.1-1  l-4.3-1.7l-0.6-0.8l2.7-2v-0.8l-1.5-1.9l1-4.2l-0.4-1.1l-0.9-0.7h-1.4l-6.4,1.8l-3.4,1.6l0,0l-3.4-2.1l-0.6-0.7l0.2-0.5l2.9-3.4  l1.3-0.3l1.9-2.6l-0.4-1.4l1.8-1.9l0.4-2.4l3.2,0.1l0.1-0.9l2.6-1.6l0.5-0.8l-0.4-0.9l1-0.3l1.4,0.9h2.8l0.2,2.7l1.9,1.9l1.1,0.5  l0.7-0.6l1.3,0.1l2.2,1.7l1,1.5l1,0.3l0.4,0.8l2.1-0.6l-0.5-2.5l0.2-1.1l1.7-2l0.1-3.8l-0.4-1.1l-2.1-0.4l0.3-1.5l0.7-0.7l-1.7-3.8  l-2.3-1.3l0.5-1l2.1,0.1l0.5-1.6l1,0.3l2.5,3.2l0.6,2.3l1.5,1.3l1-0.3l0.1-1.7l0.9-0.4l1,1.9l5,1.8l2.1,1.6l1.7,0.2l1.9-0.6l0.7-2.6  l0.1-4.3l1-0.1l0.7,1l2.7,0.1l1.2-1l-0.1-1.3l1.4-4.7l-1.6-1.6l0.1-0.7l1-0.6l1.1,1.3l1-0.1l3.4-1.3l1.3-3l4.8-1.3l0.5-0.9l2-1.2  l3-1l5.7-0.8l1.8-0.6l1.3-1.1l1.6-3l-0.8-2.3l2.6-2.8l3-0.5l1.3-2.3l0.2-1.7l-1-1.9l-0.1-3.6l0.8-3.1l1-1.2l4.8-1l2.9,0.4l1.4-1.4  v-0.8l2-0.8l0.5-0.6l0.1-2l1.6-1.3l2.5,0.8l3.4-0.1l5.9,0.9l0.6-0.6v-1.1l-1.4-1.8l0.2-0.7l4.1-1.4l2,2.4l0.3,1.9l-0.8,1.2l-4.4,2.6  l-2.6,3.2v1.3l2.4,1.8l1.7,2.1l3.6,1.7h1l0.5-0.6l0.5-4.5l1.2-2.3l4.9-4.4l0.3-1.9l1.2-1.1l0.1-1.9l2.3,0.1l0.7,0.6l0.1,2.5l1.5,0.8  l0.4,0.9l0.4,5.8l3,0.7l2,1l2.7,0.1l1.8,2.6l3,1.5l1.2,3.6l2,0.3l2,2.3l1.8,0.6l2.1,2.5l0.4,3.1l1.4,1h1.5l0.5,0.4l1.2,3.5l0.8,0.5  l1.6-0.3l2.9,5.8l2.3,0.8l1.5,1.9l2.1,0.1l2.2,2.6l1.9-0.3l5.7,2.1l1.6,2.1l-1.4,3.2l0.5,2.1l0.5,0.3l0.8-0.5l1.2,1.2l1.2-0.3  l0.8,0.6l1.9,0.1l1.1,1.5l6,0.5l1.4-1h1.1L399.3,264z\" />
            <path id=\"KG-T\"
              d=\"M193.3,44.6l1.4,0.6l1.7,1.7l5.1,1.1l1.8,2.2L205,51l3.7,0.3l2.4-1.7l4.8-0.3l7.9,2.4l6.6,3.5l2.1,1.9l1.8,0.8  l0.9-0.7l6.2-0.3l6.3,3.1l1.9,0.2l2.2,1.2l4.6,6.6l3.8,0.6l1.2,0.4l0.5,0.8l1.8,0.5l3.8,0.4l2.6-0.8l2,0.6l6.3-0.7l5.1,2l6.8,0.7  l0.9,1.5l0.5,5l2.8,1.3l8.3,1.4l0.9-0.1l1.9-1.2l1.1,0.6l0.8-0.3l0.6-1.7l0.6-3.8l1.4-0.3l1.1,1.1l0.7,1.9l1.1,0.2l1.3-1.1l1.1,0.4  l1.2,1.2v1.9l-0.7,2.1l-2.8,3.3l-0.2,3.2l-1.2,1.4l-7.4,2.6l-4.4-1.5l-4.1,0.3l-2.6,2.4l-4.1-1.1l-3.5,1.3l-1.5-0.6l-1.1,0.2  l-4.4,3.8l-4.3-1.4l-0.8,0.7l-0.3,5.1l1.4,1.9l3.2,1.2l-0.5,2.8l0.5,1.7L275,111l-1.6-0.6l-1.4,0.3l-0.8-1.5l-2,1.3l-1.6-1.6  l-0.7,0.2l-2.2,3l-2.8,1.3l-0.9,2.9l-3.6,0.6h-1.4l-6.3-4.8l-5-2.5l-4.7,0.4l-4.2-2.3l-1.8,0.2l-2.9-2.3l-3.4,1l-1.4-0.4l-1.9-2.9  l-3.1-1.5l-2.8,0.1l-4.1-0.8l-1.1,0.9l0.1,1.6l-2.2,3.4l-0.4,1.9l0.4,3.5l-0.4,1.7l-1.2,1.8l-3.2,1.2l-0.9-1.1l-3.7-0.1l-3.5-2.7  l-2.7-0.8l-6.8-3.5l-10.9-2.5l-2.9-2.9l-4.6-1.9l-1.5-0.1l-3.1,1.4l-3.7,0.1l-2.4,1.6h-2.3l-1.9-0.3l-2.9-1.8l-1.5-0.3l-4.8-0.3  l-2.2,1.1l-1.8-2.4l-1.8-0.3l-2-1.3l-1.8-2l-3.4-2.1l-4.9-0.5l-1,0.3l-1.9,2.5l-1.8,0.8l-1.4-0.2l-1.8-1.2l-1.8,0.9l-1.1-0.1  l-0.6-2.2l-1.3-0.9l-0.5-1.9l1.9-4.9l1.9-0.4l0.1-1l1.3-0.6l1.5-1.6l-0.4-1l-1.4-0.8l0-1l2.7-1.8l1-4.2l1.6-0.2l3.8,2.1l1.6-0.2  l0.2-1.9l-0.5-0.9l-2.1-3l-2.6-2.5l-0.4-1.1l0.4-1.5l1.1-1.4l1.4-0.3l5.4,1l4-1.1l0.1-7.2l2.6-0.6l2.1-1.8l1.6-2.8l0.3-2.9l1.2-0.3  l2.9,0.7l2.1-0.4l3-2.9l2.9-0.1l1.1,0.6l1.8,0.1l4.3-1.4l2.6,2l2.7,0.9l1.1-1.5l2.2-0.9l0.7-1.3l4.1,0.4l7.2-2.6l5.8,1L193.3,44.6z\" />
            <path id=\"KG-Y\"
              d=\"M644.3,204.4l-1.8-0.4l-1.9-1.6l-0.8-1.3l-0.5-2.2l0.9-2.6l-1.2-0.1l-0.5-0.6l-4.3,0.6l-0.7,0.9l-3.6,1.3  l-3.3,2.2l-2.5-0.5l-5.4-2.2l-2.5,0.3l-4.9-0.7l-0.8,0.5l-4.7,0.6l-2.6-2.4v-3.3l1.2-1.5l-2.3-0.8l-1.3-1.1l-10.1,2l-7.4,3.6  l-0.7-0.3l-0.2-1.6l2.1-1.2l1.7-1.8l0.7-1.4l0.1-2.6l1.4-3l-1-1.8L586,181l-1.7,0.5l-1.2-0.3l-2.6-1.4l-2.2-8.1l-1.1-1.7l-1.2-0.4  l4,0.2l0.5-1.1l1.9-5.6l-1.4-4.3h-0.6l-1.3,2.5l-2.2,1.6l-4.7,0.9l-9.8-1.2l-3.8,2.6l-1.9-0.5l-1.3-1.5l-1-0.3l-7,1.2l-6-0.1  l-2.3-3.1l-0.7-0.1l-1.6,1.6l-1.4-0.2l0.1-1.8l1.6-4.9l-0.3-0.9l-2.4-1.4l-0.2-0.9l0.7-1.6l1.8-1.2l0.6-1.1l-0.2-2.3l-0.7-1.3  l-1.1-1l-1.8-0.6l-1.5,0.9l-0.9,1.3l-5.2,0.6l-5.7-0.9l-1.4,0.6l-0.3-1.6l0.5-1.6l-0.6-2.9l1.4-2.9l0.8-0.5l1.8,0.5l4.9-0.2l1.1-0.6  l0.5-1.1l0.1-2.2l1.9-1.2l0.4-1.1l-0.5-1.9l-0.5-0.3l-1.5,1.1l-0.9-0.3l-0.6-1.4l-3.6-1l-1.2-1.5l-3-1l-1-0.9l-0.7-0.2l-1.3,0.8  l-2.7-0.4l-1.4-0.8l-0.5-1.2l-4.4-0.6l-1.2,0.5l-4.6-2.2l-2.1-0.5h-1.9l-1.3,1.5l-2.5-0.1l-3.3,1.3l-3-0.8l-0.1-0.8l2-3.5l1.4-0.1  l0.7-0.9l0.3-1.8l1.5-3.2v-1.3l-0.4-0.6l-4.3-1.6v-2.7l-4-2.6l0.2-2.1l-1.7-4.4l-0.4-2.7l0.3-1.7l-0.7-0.4l0.9-5.3l-0.7-0.7  l-5.1-0.6l-0.8,0.3l-0.9,2.8l-6,0.8l-0.2-1.2l-1.7-0.3l-0.2-2.2l-1.8,0.2l-1.4-1.6l-4.4-1.5l-1.7-1.9l0,0l3.7-2.7l1.5-3.4l0.9-0.8  h1.5l1.4-1.1l3.5-0.1l0.1-2l-0.6-2.3L471,65l2.3,0.3l2.5,1.1l2.6-0.6l3.9,0.1l0.8-0.9l4.5-0.8l1.1-0.9l1.9-0.5h3.3l1.6,0.7l1.5-0.5  l1-0.7l0.3-2.6l2.5-1.1l1.8-2l6.6-4.2l1.9-2l2.5,0.3l1.6-0.8l2.7-0.3l0.1-2.3l1.9,0.1l1,0.9l2-0.5l3.5,0.6l1.8-0.8l2.4,0.3l2.6-1.1  l4.9,0.7l1.7-0.2l4.5-2l3,0.3l0.7-0.8l1.5-0.5l10.6-1.4l2.7,0.5l1.1-0.6l1.5-4.8l3.2-2.8l2.7-0.7l0.8-1.3l0.8,0.7h5l4,0.6l2.2-1.2  l5.7-1.4l2,0.5l3-0.6l1.9,0.5l1,1l5.7,0.2l6,1.1l2.9-0.5l4.5,2.7l1.9-0.2l2.7,1.1l1.1,0l1.7,2.1l1,0.2l3.3-1.3l3.6,1.4l1.3,0.2  l2.6-0.6l2,0.4l2.4-0.9l0.4-1.2l4.1,0.2l6.8,1.8l1.7-0.9l1.2-2l0.7-0.2l1.9,1l6.2-1.9l3.3,2.9l1.8,0.2l1.1,1.4l1.8-0.1l2,1.1  l1.7,2.3l2.9-0.1l0.9-0.5l1.8,0.8l1.9-0.1l1.5,1.6l2.9-0.6l7,2.7l6.4,0.2l2.4,1.2l4-1.8l5.5-1.7l1.1,0.1l0,1.2l-1.5,2.9l0.8,4  l1.5,3.1l3.5,4.4l2.6,1.3l1.2,1.9l2.8,0.2l0.6,0.5l0.1,1.2l4.7,4.6l1.1,2.2l1.9,1.9l2,1l1.2,2.2l8.2,0.5l2.7-2.2l13.9,3.7l4.9-0.2  l1.9,0.5l0.8,0.7l0.8,3.9l2.2,2.1l0.9,1.9l4.1,0.9l1.2,2.1l2.6,1.4l0.2,1.7l-0.7,1.3l2.8,4l0.4,1.5l0.9,0.3l1.2-1.4l0.9-0.1l2.3,0.6  l1.7,1.5l0.8,6l-1,4.3l2.3,3.2l-0.3,1h-2.2l-1.9-0.8l-1.1,0.3l-0.8,1l-3.6,1l-8.7-1l-3.1,0.4l-4.5-0.2l-3.9,1l-2.1,1.3l-0.3,3.7  l-1.3,1.3l-1.8,5.3l-1.3,1.2l-1,2.6l-1.7,1.5l-0.8,2.4l-3.4,3.4l-4.9,1.2l-6.6-0.5l-2.4,0.5l-1.3-1.2l1.4-0.4l-0.4-0.6l0.9-0.4  l-0.2-0.6l0.8-0.9l-1.2-1.8l-3.6-0.4l-3,1.5l-2.3,2.9l-1.6,0.2l-1.3-0.6l-1,0.5l-4.2,4.2l-0.2,0.8l-1,0.4l-0.3,0.9l-1.3,0.9  l-2.9-0.3l-2.8,0.6l-2.6,2.5l-4.6,1.6l-0.8,1.7l-4.2,0.5l-2.2,1.2l-1.8,2.1l0,0.5l-0.8,0.2l-1.2,1.4l-1.7,0.6l-1.4,1.7h-1.2l0.1,0.4  l-1.7,0.9l-2.7-0.1l-0.2,0.5l-2.9,0.3l-1.4,0.8l-0.9,3.4l-1.4,0.6l-1.6,2.8l-3.6,0.4l-2.6-0.8l-0.9,0.5l-1.2,2.4l-2,1.4l-4,1.8  l-3.9,0.5l-0.6,1.6l-0.1,2.9l1.4,1.6l0.3,3.9l-1.5,0.9l-0.4,2.5l-3,0.3l-3.7,3.9l-1.5,0.8L644.3,204.4z\" />
            <path class=\"st0 kyrgyz-lake\"
              d=\"M499.7,81.8l18.7-1.4c0.9-0.1,1.5-1,1.1-1.8l-0.1-0.3c-0.4-0.9,0.2-1.8,1.2-1.8h7.7c0.5,0,0.9-0.3,1.1-0.7  l3.2-5.9c0.3-0.6,1.1-0.8,1.7-0.5l1.4,0.7c0.1,0,0.2,0.1,0.2,0.1c0.5,0.4,2.8,2.1,3.1,1.2c0.3-0.7,1.3-2.8,2-4.1  c0.3-0.5,0.9-0.8,1.5-0.7l2.6,0.7c0.1,0,0.2,0,0.3,0c0.8,0,5,0.2,5.7,0.2c0.6,0,3.9,0.8,5.2,1c0.3,0.1,0.7,0,1-0.1l1.6-1  c0.1-0.1,0.3-0.1,0.5-0.2l5.4-0.9c0.4-0.1,0.7-0.3,0.9-0.6l0.6-0.9c0,0,0-0.1,0.1-0.1l0.5-1c0.2-0.4,0.7-0.7,1.2-0.7  c0.3,0,0.7,0,0.9-0.1c0.5-0.1,1.4,0,1.7,0c0,0,0.1,0,0.1,0h2.3c0.5,0,0.9-0.3,1.2-0.7l2.1-4.3c0-0.1,0-0.1,0.1-0.2l0.4-1.4  c0.2-0.5,0.7-0.9,1.2-0.9h1.4c0.3,0,0.6,0.1,0.8,0.3c1,0.8,3.9,3.2,4.2,4c0.4,1,0.9,2.3,2.3,2.3c1.2,0,8.5-1.9,10-2.3  c0.2,0,0.3-0.1,0.5-0.2l2.2-1.7c0,0,0.1-0.1,0.1-0.1c0.4-0.3,2.7-2.5,3.2-3.2c0.5-0.6,4-1.8,5.2-2.2c0.3-0.1,0.6-0.1,0.9,0l4.8,2  c0.4,0.2,0.8,0.1,1.2-0.1l2.4-1.6c0.4-0.3,0.9-0.3,1.3-0.1l5.2,2.6c0.3,0.2,0.8,0.2,1.1,0l3.6-1.6l2.5-1.2c0.1-0.1,0.3-0.1,0.4-0.1  l4.7-0.7c0.5-0.1,0.9-0.4,1-0.9c0.2-0.6,0.5-1.4,0.7-1.6c0.3-0.3,0.6-0.8,0.8-1.2c0.1-0.2,0.3-0.4,0.5-0.5c0.6-0.4,1.9-1,2.1-0.8  c0.2,0.3,0.7,1.4,1,2c0.1,0.3,0.4,0.5,0.7,0.6l2.4,1c0,0,2.3,0.9,2.4,1.2s0.9,0.3,0,0.8c-0.9,0.6-3-0.4-3.2,1.1  c-0.1,1.2,1.4,4,1.9,5c0.1,0.2,0.3,0.4,0.5,0.5c0.6,0.3,1.6,1-0.9,0.9c-3.2-0.1-4.2,1.6-5.5,0c-1.3-1.6-3.2-2.4-3.8-3  c-0.1-0.1-0.3-0.3-0.4-0.4c-0.4-0.5-1.2-0.6-1.7-0.2l-3.1,2.3c-0.2,0.2-0.4,0.4-0.5,0.6l-0.2,0.5c0,0.1-0.1,0.3-0.1,0.4v3  c0,0.6,2.6,1,3.1,1.1c0.1,0,0.1,0,0.2,0h2.3c0.1,0,0.1,0,0.2,0c0.5-0.1,3.7-0.5,4.6,0c0.7,0.3,1.3,0.2,1.7,0.1  c0.2-0.1,0.4-0.1,0.6,0l3,0.6c0.6,0.1,1,0.7,1,1.3v0c0,0.6-0.4,1.1-1,1.3c-1.8,0.4-4.6,1.1-5.2,1.3c-0.1,0-0.2,0-0.3,0h-1.1h-3.7  c-0.1,0-0.1,0-0.1,0c-0.3,0-1.7,0.2-2.2,0c-0.5-0.2-1.1,1-1.3,1.2c0,0,0,0.1-0.1,0.1l-1.2,1.7c0,0.1-0.1,0.1-0.1,0.2l-1.1,2.4  c0,0-0.6,1.4-0.9,2s-0.8,2.1-0.8,2.1h-1.1h-7.6h-1.4c-0.2,0-0.5,0.1-0.6,0.2l-3,1.7c-1,0.6-0.8,2,0.2,2.3l0,0c0.1,0,0.3,0.1,0.4,0.1  h2.6h1.9c0.7,0,1.3,0.6,1.3,1.3v0.9c0,0,0.6-0.9,1.1,0c0.6,0.9,0.6,0.9,0.6,0.9s3,0.6-1.7,0.7c-4.7,0.1-5.9-0.6-6.4,0  c-0.4,0.5-1.2,1.5-1.6,1.9c-0.1,0.1-0.2,0.3-0.2,0.4l-0.6,2.2c-0.1,0.2-0.1,0.4,0,0.6c0.1,0.3,0.1,0.8-0.3,1.3  c-0.6,0.8-1.1,1.1-2.3,2.7c-1,1.3-2.6,3-3.1,3.5c-0.1,0.1-0.2,0.2-0.2,0.3l-0.8,1.5c0,0.1-0.1,0.2-0.2,0.2c-0.2,0.3-0.8,0.9-1.2,1.1  c-0.6,0.4-0.9,0.8-1.5,0.9c-0.5,0.2-4.5,0.9-5.2,1c-0.1,0-0.1,0-0.2,0h-3.1c-0.5,0-0.9,0.3-1.2,0.7c-0.6,1.2-1.1,2.3-1.5,2.4  c-0.6,0.2-1.3-0.2-1.9,0c-0.6,0.2,0,1.3-0.6,0.2l-0.4-0.8c-0.1-0.2-0.2-0.4-0.4-0.5l-1.3-0.9c-0.2-0.1-0.4-0.2-0.7-0.2  c-1,0-3.6-0.1-4.4,0c-0.9,0.2-4.2,0.4-5.1,0.6c-0.6,0.1-2,0.3-2.8,0.3c-0.3,0-0.6,0.1-0.8,0.3c-0.1,0.1-0.4,0.4-0.9,0.7  c-1.3,0.8-2.8,2.7-3.7,2.2c-0.8-0.4-3.2-0.1-3.7,0c-0.1,0-0.1,0-0.2,0H561c-0.4,0-0.8-0.2-1-0.5c-0.2-0.3-0.6-0.8-0.9-1.3  c-0.8-1.1-1.5-3.2-1.5-3.2h-0.9c0,0,1.5-2.3-0.8-0.8c-2.3,1.5-1.3,0.9-2.3,1.5c-0.5,0.3-1.1,0.8-1.5,1.2c-0.4,0.4-1,0.5-1.5,0.3  l-2.5-1.2c-0.2-0.1-0.3-0.2-0.4-0.3l-0.1-0.2c-0.3-0.3-0.7-0.5-1.1-0.4c-1.1,0.1-3.3,0.3-3.7-0.1c-0.5-0.4-2.5-2.2-3.3-2.9  c-0.2-0.2-0.3-0.4-0.4-0.7l-0.3-1.7c-0.1-0.6-0.6-1.1-1.3-1.1h-3.2c-0.2,0-0.4,0-0.6,0.1l-3.1,1.6c-0.4,0.2-0.8,0.2-1.2,0l-2.9-1.6  c-0.1,0-0.2-0.1-0.2-0.1l-5.7-1.8c-0.2-0.1-0.3-0.1-0.5-0.3l-3-2.7c-0.1-0.1-0.2-0.2-0.4-0.2l-4.4-1.8c-0.3-0.1-0.7-0.1-1,0  l-2.1,0.9c0,0-0.1,0-0.1,0.1l-6,1.9c-0.1,0-0.3,0.1-0.4,0.1h-2.7c-0.7,0-1.3-0.6-1.3-1.3v-1.7c0-0.2,0-0.3-0.1-0.5l-1.4-3.5  c-0.1-0.3-0.1-0.6,0-0.9l1.3-3.6C498.7,82.1,499.2,81.8,499.7,81.8z\" />

            <!-- <circle class=\"st0 city ajdarken\" data-tab=\"ajdarken\" cx=\"150\" cy=\"318\" r=\"4\" /> -->
            <circle class=\"st0 city ajdarken\" data-tab=\"ajdarken\" />
            <circle class=\"st0 city balykchy\" data-tab=\"balykchy\" cx=\"493.1\" cy=\"83.5\" r=\"4\" />
            <circle class=\"st0 city batken\" data-tab=\"batken\" cx=\"114.6\" cy=\"310.4\" r=\"6.4\" />
            <circle class=\"st0 city bishkek\" data-tab=\"bishkek\" cx=\"379.1\" cy=\"44.1\" r=\"6.4\" />
            <circle class=\"st0 city dzhalal-abad\" data-tab=\"dzhalal-abad\" cx=\"268.1\" cy=\"222.8\" r=\"6.4\" />
            <circle class=\"st0 city isfana\" data-tab=\"isfana\" cx=\"25\" cy=\"330 \" r=\"4\" />
            <circle class=\"st0 city kadamzhaj\" data-tab=\"kadamzhaj\" cx=\"168\" cy=\"300\" r=\"4\" />
            <circle class=\"st0 city kaindy\" data-tab=\"kaindy\" cx=\"331.6\" cy=\"49.2\" r=\"4\" />
            <circle class=\"st0 city kant\" data-tab=\"kant\" cx=\"401.9\" cy=\"42.8\" r=\"4\" />
            <circle class=\"st0 city kara-balta\" data-tab=\"kara-balta\" cx=\"345\" cy=\"49.2\" r=\"4\" />
            <circle class=\"st0 city karakol current\" data-tab=\"karakol\" cx=\"647.5\" cy=\"76.5\" r=\"6.4\" />
            <circle class=\"st0 city kara-kul\" data-tab=\"kara-kul\" cx=\"246.3\" cy=\"158.4\" r=\"4\" />
            <circle class=\"st0 city kara-suu\" data-tab=\"kara-suu\" cx=\"265\" cy=\"250\" r=\"4\" />
            <circle class=\"st0 city kemin\" data-tab=\"kemin\" cx=\"461.6\" cy=\"55.7\" r=\"4\" />
            <circle class=\"st0 city kerben\" data-tab=\"kerben\" cx=\"180\" cy=\"160\" r=\"4\" />
            <circle class=\"st0 city kok-dzhangak\" data-tab=\"kok-dzhangak\" data-tab=\"karakol\" cx=\"281.9\" cy=\"214.5\"
              r=\"4\" />
            <circle class=\"st0 city kochkor-ata\" data-tab=\"kochkor-ata\" cx=\"239\" cy=\"215\" r=\"4\" />
            <circle class=\"st0 city kyzyl-kiya\" data-tab=\"kyzyl-kiya\" cx=\"219\" cy=\"286\" r=\"4\" />
            <circle class=\"st0 city majluu-suu\" data-tab=\"majluu-suu\" cx=\"229.8\" cy=\"200\" r=\"4\" />
            <circle class=\"st0 city naryn\" data-tab=\"naryn\" cx=\"493.1\" cy=\"177.7\" r=\"6.4\" />
            <circle class=\"st0 city nookat\" data-tab=\"nookat\" cx=\"239\" cy=\"286\" r=\"4\" />
            <circle class=\"st0 city orlovka\" data-tab=\"orlovka\" cx=\"450\" cy=\"60\" r=\"4\" />
            <circle class=\"st0 city osh\" data-tab=\"osh\" cx=\"254.2\" cy=\"265\" r=\"6.4\" />
            <circle class=\"st0 city sulyukta\" data-tab=\"sulyukta\" cx=\"27\" cy=\"318\" r=\"4\" />
            <circle class=\"st0 city talas\" data-tab=\"talas\" cx=\"219\" cy=\"75.2\" r=\"6.4\" />
            <circle class=\"st0 city tash-kumyr\" data-tab=\"tash-kumyr\" cx=\"214.5\" cy=\"183.1\" r=\"4\" />
            <circle class=\"st0 city tokmok\" data-tab=\"tokmok\" cx=\"429.8\" cy=\"49.2\" r=\"4\" />
            <circle class=\"st0 city toktogul\" data-tab=\"toktogul\" cx=\"269.7\" cy=\"136.2\" r=\"4\" />
            <circle class=\"st0 city uzgen\" data-tab=\"uzgen\" cx=\"289.3\" cy=\"240\" r=\"4\" />
            <circle class=\"st0 city cholpon-ata\" data-tab=\"cholpon-ata\" cx=\"555.9\" cy=\"63.2\" r=\"4\" />
            <circle class=\"st0 city shopokov\" data-tab=\"shopokov\" cx=\"362\" cy=\"49.2\" r=\"4\" />
          </svg>

          <div class=\"mobile_tabs\">
            <ul>
              <li class=\"city ajdarken\" data-tab=\"ajdarken\">Айдаркен</li>
              <li class=\"city balykchy\" data-tab=\"balykchy\">Былыкчы</li>
              <li class=\"city batken\" data-tab=\"batken\">Баткен</li>
              <li class=\"city bishkek\" data-tab=\"bishkek\">Бишкек</li>
              <li class=\"city dzhalal-abad\" data-tab=\"dzhalal-abad\">Джлал-Абад</li>
              <li class=\"city isfana\" data-tab=\"isfana\">Исфана</li>
              <li class=\"city kadamzhaj\" data-tab=\"kadamzhaj\">Кадамжай</li>
              <li class=\"city kaindy\" data-tab=\"kaindy\">Каинды</li>
              <li class=\"city kant\" data-tab=\"kant\">Кант</li>
              <li class=\"city kara-balta\" data-tab=\"kara-balta\">Кара-Балта</li>
              <li class=\"city karakol current\" data-tab=\"karakol\">Каракол</li>
              <li class=\"city kara-kul\" data-tab=\"kara-kul\">Кара-Куль</li>
              <li class=\"city kara-suu\" data-tab=\"kara-suu\">Кара-Суу</li>
              <li class=\"city kemin\" data-tab=\"kemin\">Кемин</li>
              <li class=\"city kerben\" data-tab=\"kerben\">Кербен</li>
              <li class=\"city kok-dzhangak\" data-tab=\"kok-dzhangak\">Кок-Джангак</li>
              <li class=\"city kochkor-ata\" data-tab=\"kochkor-ata\">Кочкор-Ата</li>
              <li class=\"city kyzyl-kiya\" data-tab=\"kyzyl-kiya\">Кызыл-Кия</li>
              <li class=\"city majluu-suu\" data-tab=\"majluu-suu\">Майлуу-Суу</li>
              <li class=\"city naryn\" data-tab=\"naryn\">Нарын</li>
              <li class=\"city nookat\" data-tab=\"nookat\">Ноокат</li>
              <li class=\"city orlovka\" data-tab=\"orlovka\">Орловка</li>
              <li class=\"city osh\" data-tab=\"osh\">Ош</li>
              <li class=\"city sulyukta\" data-tab=\"sulyukta\">Сулюкта</li>
              <li class=\"city talas\" data-tab=\"talas\">Талас</li>
              <li class=\"city tash-kumyr\" data-tab=\"tash-kumyr\">Таш-Кумыр</li>
              <li class=\"city tokmok\" data-tab=\"tokmok\">Токмок</li>
              <li class=\"city toktogul\" data-tab=\"toktogul\">Токтогул</li>
              <li class=\"city uzgen\" data-tab=\"uzgen\">Узген</li>
              <li class=\"city cholpon-ata\" data-tab=\"cholpon-ata\">Чолпон-Ата</li>
              <li class=\"city shopokov\" data-tab=\"shopokov\">Шопоков</li>
            </ul>
          </div>

          <div id=\"ajdarken\" class=\"tab-content ajdarken\">
            <h3>Айдаркен</h3>
            <div class=\"row\">
            </div>
          </div>
          <div id=\"balykchy\" class=\"tab-content balykchy\">
            <h3>Балыкчы</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"batken\" class=\"tab-content batken\">
            <h3>Баткен</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"bishkek\" class=\"tab-content bishkek\">
            <h3>Бишкек</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"dzhalal-abad\" class=\"tab-content dzhalal-abad\">
            <h3>Джлал-Абад</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"isfana\" class=\"tab-content isfana\">
            <h3>Исфана</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kadamzhaj\" class=\"tab-content kadamzhaj\">
            <h3>Кадамжай</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kaindy\" class=\"tab-content kaindy\">
            <h3>Каинды</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kant\" class=\"tab-content kant\">
            <h3>Кант</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kara-balta\" class=\"tab-content kara-balta\">
            <h3>Кара-Балта</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"karakol\" class=\"tab-content karakol current\">
            <h3>Каракол</h3>
            <div class=\"row\">
            </div>
          </div>
          <div id=\"kara-kul\" class=\"tab-content kara-kul\">
            <h3>Кара-Куль</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kara-suu\" class=\"tab-content kara-suu\">
            <h3>Кара-Суу</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kemin\" class=\"tab-content kemin\">
            <h3>Кемин</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kerben\" class=\"tab-content kerben\">
            <h3>Кербен</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kok-dzhangak\" class=\"tab-content kok-dzhangak\">
            <h3>Кок-Джангак</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kochkor-ata\" class=\"tab-content kochkor-ata\">
            <h3>Кочкор-Ата</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"kyzyl-kiya\" class=\"tab-content kyzyl-kiya\">
            <h3>Кызыл-Кия</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"majluu-suu\" class=\"tab-content majluu-suu\">
            <h3>Майлуу-Суу</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"naryn\" class=\"tab-content naryn\">
            <h3>Нарын</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"nookat\" class=\"tab-content nookat\">
            <h3>Ноокат</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"orlovka\" class=\"tab-content orlovka\">
            <h3>Орловка</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"osh\" class=\"tab-content osh\">
            <h3>Ош</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"sulyukta\" class=\"tab-content sulyukta\">
            <h3>Сулюкта</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"talas\" class=\"tab-content talas\">
            <h3>Талас</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"tash-kumyr\" class=\"tab-content tash-kumyr\">
            <h3>Таш-Кумыр</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"tokmok\" class=\"tab-content tokmok\">
            <h3>Токмок</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"toktogul\" class=\"tab-content toktogul\">
            <h3>Токтогул</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"uzgen\" class=\"tab-content uzgen\">
            <h3>Узген</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"cholpon-ata\" class=\"tab-content cholpon-ata\">
            <h3>Чолпон-Ата</h3>
            <div class=\"row\"></div>
          </div>
          <div id=\"shopokov\" class=\"tab-content shopokov\">
            <h3>Шопоков</h3>
            <div class=\"row\"></div>
          </div>





          <div class=\"hidden-list-team\">


            {% for record in members.records %}

            <div class=\"col-lg-3 col-sm-6 tab_upload_item 
                    {% for loc in record.location %}

                    {{loc.slug}}

                    {% endfor %}
          \">

              {% for loc in record.location %}
              <div class=\"city_status\">
                {{loc.display_city}}
              </div>

              {% endfor %}

              <div class=\"icon-box-style-03 text-center\">

                <div class=\"memeber-img\">
                  <img src=\"{{record.img.path | resize(300, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}\"
                    alt=\"\">
                  <div class=\"member-social-style-1\">
                    <ul>
                      <li><a href=\"#\"><i class=\"fa fa-share-alt\"></i></a></li>
                    </ul>
                  </div>
                  <div class=\"member-social\">
                    <ul>
                      <li><a href=\"{{record.facebook}}\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                      <li><a href=\"{{record.twitter}}\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                      <li><a href=\"{{record.instagram}}\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class=\"sb-content\">
                  <h4 class=\"title\">{{record.name}}</h4>
                  <p>{{record.status}}</p>
                </div>
              </div>
            </div>


            {% endfor %}

          </div>

        </div>
      </div>
    </div>


  </div>
</div>
<!-- team area end  -->





<!-- news area Start -->
<div class=\"home-news-area padding-top-115\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-12\">
        <div class=\"text-center padding-bottom-40\">
          <h2 class=\"section-title\">{{'Последние публикации'|_}}</h2>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"swiper-slider swiper-container two\">
        <div class=\"swiper-wrapper\">

          {% set posts = blogPosts.posts %}

          {% for post in posts %}
          <div class=\"swiper-slide image-overlay\">
            <div class=\"news-item-style-03\">
              <div class=\"thumb\">

                {% for image in post.featured_images|slice(0,1) %}
                <a href=\"{{post.url}}\"
                  style=\"background-image: url('{{image.path | resize(450, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}');\">
                </a>
                {% endfor %}

              </div>
              <div class=\"content\">
                {% for cat in post.categories %}
                <a class=\"subtitle\" href=\"{{cat.url}}\">{{cat.name}}</a>
                {%endfor %}
                <h4 class=\"title\"><a href=\"{{ post.url }}\">{{ post.title }}</a></h4>
                <ul class=\"blog-meta d-flex flex-column flex-lg-row\">
                  <li><a href=\"{{ post.url }}\">{{ post.published_at | date('d D Y') }}</a></li>
                  <li><a href=\"{{ post.url }}\"><i class=\"fa fa-eye\"></i> {{post.views}}</a></li>
                </ul>
              </div>
            </div>
          </div>
          {% endfor %}

        </div>
        <div class=\"swiper-button-next\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></div>
        <div class=\"swiper-button-prev\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></div>
        <!-- Add Pagination -->
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
  </div>
</div>
<!-- news area End -->", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/pages/home.htm", "");
    }
}
