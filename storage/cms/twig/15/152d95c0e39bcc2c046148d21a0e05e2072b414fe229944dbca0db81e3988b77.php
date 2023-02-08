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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/home.htm */
class __TwigTemplate_c4b741bab18b481ee71d66c7f3e7bea652bc5c32e2bedb91709bb3e47e9e3b3f extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["About us"]);
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
            <a href=\"/about\" class=\"btn btn-custom-primary about_link\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["More"]);
        echo "</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- politx-content-area end -->
<br>
<br>
<div class=\"upcoming-area\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"text-center padding-bottom-55\">
          <h2 class=\"section-title\">";
        // line 57
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tours"]);
        echo "</h2>
        </div>
      </div>
    </div>

    <div class=\"events-js\">


          ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "items", [], "any", false, false, true, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 66
            echo "        
          





      <div class=\"upcoming-box\">
        <div class=\"ub-image\">
          


          ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, $context["category"], "preview_image", [], "any", false, false, true, 78)) {
                // line 79
                echo "            <a href=\"";
                echo ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "property", [0 => "categoryPage"], "method", false, false, true, 79)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "property", [0 => "categoryPage"], "method", false, false, true, 79), 79, $this->source), [twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "paramName", [0 => "categoriesPageSlug"], "method", false, false, true, 79) => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 79)])) : (""));
                echo "\" style=\"background-image:
              url(";
                // line 80
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "preview_image", [], "any", false, false, true, 80), "getPath", [], "any", false, false, true, 80), 80, $this->source), 500, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo ");\">
            </a>                    
          ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 82
($context["record"] ?? null), "preview_image_media", [], "any", false, false, true, 82)) {
                // line 83
                echo "            <a href=\"";
                echo ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "property", [0 => "categoryPage"], "method", false, false, true, 83)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "property", [0 => "categoryPage"], "method", false, false, true, 83), 83, $this->source), [twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "paramName", [0 => "categoriesPageSlug"], "method", false, false, true, 83) => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 83)])) : (""));
                echo "\" style=\"background-image:
              url(";
                // line 84
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "preview_image_media", [], "any", false, false, true, 84), 84, $this->source)), 500, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo ");\">
            </a>  
          ";
            }
            // line 86
            echo "    


        </div>

        

        <div class=\"ub-content\">
          <h4>
            <a href=\"";
            // line 95
            echo ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "property", [0 => "categoryPage"], "method", false, false, true, 95)) ? ($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "property", [0 => "categoryPage"], "method", false, false, true, 95), 95, $this->source), [twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "paramName", [0 => "categoriesPageSlug"], "method", false, false, true, 95) => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 95)])) : (""));
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "</a>
          </h4>

        </div>
      </div>


      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
   
    </div>

    <div class=\"btn-wrapper\" style=\"text-align: center;\">
      <a href=\"all-events\" class=\"btn btn-custom-primary\">";
        // line 108
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All tours"]);
        echo "</a>
    </div>

    <div class=\"record-pagination\">
      ";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 112) > 1)) {
            // line 113
            echo "      <ul class=\"pagination\">
        ";
            // line 114
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 114) > 1)) {
                // line 115
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 115), "baseFileName", [], "any", false, false, true, 115), 115, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 115) - 1)]);
                echo "\">&larr;</a></li>
        ";
            }
            // line 117
            echo "
        ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 118)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 119
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 119) == $context["page"])) ? ("active") : (null));
                echo "\">
          <a href=\"";
                // line 120
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 120), "baseFileName", [], "any", false, false, true, 120), 120, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 120, $this->source), "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "
        ";
            // line 124
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 124) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 124))) {
                // line 125
                echo "        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 125), "baseFileName", [], "any", false, false, true, 125), 125, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 125) + 1)]);
                echo "\">&rarr;</a></li>
        ";
            }
            // line 127
            echo "      </ul>
      ";
        }
        // line 129
        echo "



    </div>
  </div>
</div>

<div class=\"upcoming-events-area padding-top-115\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <p class=\"section-subtitle\">";
        // line 141
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Events"]);
        echo "</p>
        <h2 class=\"title\">";
        // line 142
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Upcoming events"]);
        echo "</h2>
      </div>
    </div>
    
    
    ";
        // line 147
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "records", [], "any", false, false, true, 147);
        // line 148
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "displayColumn", [], "any", false, false, true, 148);
        // line 149
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "noRecordsMessage", [], "any", false, false, true, 149);
        // line 150
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "detailsPage", [], "any", false, false, true, 150);
        // line 151
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 151);
        // line 152
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 152);
        // line 153
        echo "
    
    <div class=\"row\">
      ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 157
            echo "      ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "url", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
            echo "
      ";
            // line 158
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 158) >= ($context["currentDate"] ?? null))) {
                // line 159
                echo "      <div class=\"col-lg-6 next-event-home\">
        <div class=\"row\">
          <div class=\"col-md-7\">
            <div class=\"thumb\">
              <a href=\"";
                // line 163
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 163, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 163)]);
                echo "\">
                
                <img src=\"";
                // line 165
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "img", [], "any", false, false, true, 165), "path", [], "any", false, false, true, 165), 165, $this->source), 510, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "\" alt=\"\">
              </a>
            </div>
          </div>
          <div class=\"col-md-5\">
            <div class=\"up-content-style-01\">
              <div class=\"date-month\">
                <span class=\"date\">";
                // line 172
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 172), 172, $this->source), "d"), "html", null, true);
                echo "</span>
                <span class=\"month\">
                  ";
                // line 174
                if ((($context["activeLocale"] ?? null) == "rus")) {
                    // line 175
                    echo "              ";
                    echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 175), 175, $this->source), "%BP"]);
                    echo "
              ";
                } elseif ((                // line 176
($context["activeLocale"] ?? null) == "de")) {
                    // line 177
                    echo "              ";
                    echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 177), 177, $this->source), "%BP"]);
                    echo "
              ";
                } else {
                    // line 179
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 179), 179, $this->source), "M"), "html", null, true);
                    echo "
              ";
                }
                // line 181
                echo "                </span>
              </div>
              <h6>";
                // line 183
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
                echo "</h6>
              <ul>
                <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> ";
                // line 185
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
                echo "</a></li>
                <li><a href=\"#\"><i class=\"fa fa-bell\"></i> ";
                // line 186
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 186), 186, $this->source), "H:i"), "html", null, true);
                echo "</a></li>
              </ul>
              <div class=\"btn-wrapper\">
                <a href=\"";
                // line 189
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 189, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 189)]);
                echo "\">
                  ";
                // line 190
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["More"]);
                echo " ➞</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      ";
            } else {
                // line 198
                echo "
      ";
            }
            // line 200
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "      <div class=\"col-lg-6\">
        <div class=\"event-list-style\">

          ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "records", [], "any", false, false, true, 205));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 206
            echo "          ";
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 206), "Y-m-d") >= ($context["currentDate"] ?? null))) {
                // line 207
                echo "
          <div class=\"event-single-style-01 next-event-home-secondary\">
            <div class=\"d-flex\">
              <div class=\"time\">
                <span class=\"date\">";
                // line 211
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 211), 211, $this->source), "d"), "html", null, true);
                echo "</span>
                <span class=\"month\">
                  
                  ";
                // line 214
                if ((($context["activeLocale"] ?? null) == "rus")) {
                    // line 215
                    echo "              ";
                    echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 215), 215, $this->source), "%BP"]);
                    echo "
              ";
                } elseif ((                // line 216
($context["activeLocale"] ?? null) == "de")) {
                    // line 217
                    echo "              ";
                    echo call_user_func_array($this->env->getFilter('rudate')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 217), 217, $this->source), "%BP"]);
                    echo "
              ";
                } else {
                    // line 219
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 219), 219, $this->source), "M"), "html", null, true);
                    echo "
              ";
                }
                // line 221
                echo "
                </span>
              </div>
              <div class=\"content\">
                <p class=\"sm-text\"><i class=\"fa fa-map-marker\"></i> ";
                // line 225
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "location", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
                echo "</p>
                <h4><a
                    href=\"";
                // line 227
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 227, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 227)]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 227), 227, $this->source), "html", null, true);
                echo "</a>
                </h4>
                <p><i class=\"fa fa-bell\"></i> ";
                // line 229
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "date", [], "any", false, false, true, 229), 229, $this->source), "H:i"), "html", null, true);
                echo "</p>
              </div>
            </div>
          </div>
          ";
            } else {
                // line 234
                echo "
          ";
            }
            // line 236
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "
          <div class=\"btn-wrapper\">
            <a href=\"all-events\">";
        // line 240
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All events"]);
        echo "</a> ➝
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- news area Start -->
<div class=\"home-news-area padding-top-115\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-12\">
        <div class=\"text-center padding-bottom-40\">
          <h2 class=\"section-title\">";
        // line 256
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Latest publications"]);
        echo "</h2>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"swiper-slider swiper-container two\">
        <div class=\"swiper-wrapper\">

          ";
        // line 264
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 264);
        // line 265
        echo "
          ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 267
            echo "          <div class=\"swiper-slide image-overlay\">
            <div class=\"news-item-style-03\">
              <div class=\"thumb\">

                ";
            // line 271
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 271), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 272
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 272), 272, $this->source), "html", null, true);
                echo "\"
                  style=\"background-image: url('";
                // line 273
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 273), 273, $this->source), 450, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
                echo "');\">
                </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "
              </div>
              <div class=\"content\">
                ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 279));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 280
                echo "                <a class=\"subtitle\" href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "url", [], "any", false, false, true, 280), 280, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, true, 280), 280, $this->source), "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "                <h4 class=\"title\"><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 282), 282, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 282), 282, $this->source), "html", null, true);
            echo "</a></h4>
                <ul class=\"blog-meta d-flex flex-column flex-lg-row\">
                  <li><a href=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 284), 284, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 284), 284, $this->source), "d D Y"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 285
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 285), 285, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-eye\"></i> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, true, 285), 285, $this->source), "html", null, true);
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
        // line 291
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
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 291,  626 => 285,  620 => 284,  612 => 282,  601 => 280,  597 => 279,  592 => 276,  583 => 273,  578 => 272,  574 => 271,  568 => 267,  564 => 266,  561 => 265,  559 => 264,  548 => 256,  529 => 240,  525 => 238,  518 => 236,  514 => 234,  506 => 229,  499 => 227,  494 => 225,  488 => 221,  482 => 219,  476 => 217,  474 => 216,  469 => 215,  467 => 214,  461 => 211,  455 => 207,  452 => 206,  448 => 205,  443 => 202,  436 => 200,  432 => 198,  421 => 190,  417 => 189,  411 => 186,  407 => 185,  402 => 183,  398 => 181,  392 => 179,  386 => 177,  384 => 176,  379 => 175,  377 => 174,  372 => 172,  362 => 165,  357 => 163,  351 => 159,  349 => 158,  344 => 157,  340 => 156,  335 => 153,  333 => 152,  331 => 151,  329 => 150,  327 => 149,  325 => 148,  323 => 147,  315 => 142,  311 => 141,  297 => 129,  293 => 127,  287 => 125,  285 => 124,  282 => 123,  271 => 120,  266 => 119,  262 => 118,  259 => 117,  253 => 115,  251 => 114,  248 => 113,  246 => 112,  239 => 108,  232 => 103,  216 => 95,  205 => 86,  199 => 84,  194 => 83,  192 => 82,  187 => 80,  182 => 79,  180 => 78,  166 => 66,  162 => 65,  151 => 57,  133 => 42,  129 => 40,  121 => 39,  118 => 38,  110 => 37,  106 => 36,  100 => 32,  94 => 31,  83 => 22,  81 => 21,  79 => 20,  77 => 19,  75 => 18,  73 => 17,  71 => 16,  68 => 15,  66 => 14,  64 => 13,  62 => 12,  60 => 11,  58 => 10,  56 => 9,  54 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
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
          <p class=\"section-subtitle\">{{'About us'|_}}</p>
          {% component 'contenteditor' file=\"about/about_title.htm\" class=\"title\" fixture=\"h2\" tools=\"\" %}
          <div>
            {% component 'contenteditor' file=\"about/about_desc.htm\" class=\"description\" fixture=\"p\" tools=\"\" %}
          </div>
          <div class=\"btn-wrapper padding-top-33\">
            <a href=\"/about\" class=\"btn btn-custom-primary about_link\">{{'More'|_}}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- politx-content-area end -->
<br>
<br>
<div class=\"upcoming-area\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"text-center padding-bottom-55\">
          <h2 class=\"section-title\">{{'Tours'|_}}</h2>
        </div>
      </div>
    </div>

    <div class=\"events-js\">


          {% for category in categories.items %}
        
          





      <div class=\"upcoming-box\">
        <div class=\"ub-image\">
          


          {% if category.preview_image %}
            <a href=\"{{categories.property('categoryPage') ? categories.property('categoryPage')|page({(categories.paramName('categoriesPageSlug')):(category.slug)})}}\" style=\"background-image:
              url({{category.preview_image.getPath | resize(500, false, { mode: 'crop', quality: '80', extension: 'jpg' })}});\">
            </a>                    
          {% elseif record.preview_image_media %}
            <a href=\"{{categories.property('categoryPage') ? categories.property('categoryPage')|page({(categories.paramName('categoriesPageSlug')):(category.slug)})}}\" style=\"background-image:
              url({{category.preview_image_media|media | resize(500, false, { mode: 'crop', quality: '80', extension: 'jpg' })}});\">
            </a>  
          {% endif %}    


        </div>

        

        <div class=\"ub-content\">
          <h4>
            <a href=\"{{categories.property('categoryPage') ? categories.property('categoryPage')|page({(categories.paramName('categoriesPageSlug')):(category.slug)})}}\"> {{ category.name }}</a>
          </h4>

        </div>
      </div>


      {% endfor %}

   
    </div>

    <div class=\"btn-wrapper\" style=\"text-align: center;\">
      <a href=\"all-events\" class=\"btn btn-custom-primary\">{{'All tours'|_}}</a>
    </div>

    <div class=\"record-pagination\">
      {% if records.lastPage > 1 %}
      <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
        <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr;</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
        <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
          <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
        </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
        <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">&rarr;</a></li>
        {% endif %}
      </ul>
      {% endif %}




    </div>
  </div>
</div>

<div class=\"upcoming-events-area padding-top-115\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <p class=\"section-subtitle\">{{'Events'|_}}</p>
        <h2 class=\"title\">{{'Upcoming events'|_}}</h2>
      </div>
    </div>
    
    
    {% set records = events.records %}
{% set displayColumn = events.displayColumn %}
{% set noRecordsMessage = events.noRecordsMessage %}
{% set detailsPage = events.detailsPage %}
{% set detailsKeyColumn = events.detailsKeyColumn %}
{% set detailsUrlParameter = events.detailsUrlParameter %}

    
    <div class=\"row\">
      {% for record in records %}
      {{record.url}}
      {% if record.date >= currentDate %}
      <div class=\"col-lg-6 next-event-home\">
        <div class=\"row\">
          <div class=\"col-md-7\">
            <div class=\"thumb\">
              <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                
                <img src=\"{{record.img.path | resize(510, false, { mode: 'crop', quality: '80', extension: 'jpg' })}}\" alt=\"\">
              </a>
            </div>
          </div>
          <div class=\"col-md-5\">
            <div class=\"up-content-style-01\">
              <div class=\"date-month\">
                <span class=\"date\">{{record.date | date('d')}}</span>
                <span class=\"month\">
                  {% if activeLocale == 'rus'  %}
              {{record.date | rudate('%BP')}}
              {% elseif activeLocale == 'de'  %}
              {{record.date | rudate('%BP')}}
              {% else %}
              {{record.date | date('M')}}
              {% endif %}
                </span>
              </div>
              <h6>{{record.title}}</h6>
              <ul>
                <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> {{record.location}}</a></li>
                <li><a href=\"#\"><i class=\"fa fa-bell\"></i> {{record.date | date('H:i')}}</a></li>
              </ul>
              <div class=\"btn-wrapper\">
                <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                  {{'More'|_}} ➞</a>
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
                <span class=\"month\">
                  
                  {% if activeLocale == 'rus'  %}
              {{record.date | rudate('%BP')}}
              {% elseif activeLocale == 'de'  %}
              {{record.date | rudate('%BP')}}
              {% else %}
              {{record.date | date('M')}}
              {% endif %}

                </span>
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
            <a href=\"all-events\">{{'All events'|_}}</a> ➝
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- news area Start -->
<div class=\"home-news-area padding-top-115\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-12\">
        <div class=\"text-center padding-bottom-40\">
          <h2 class=\"section-title\">{{'Latest publications'|_}}</h2>
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
<!-- news area End -->", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "component" => 31, "for" => 65, "if" => 78);
        static $filters = array("date" => 14, "_" => 36, "page" => 79, "resize" => 80, "media" => 84, "escape" => 95, "rudate" => 175, "slice" => 271);
        static $functions = array("range" => 118);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'component', 'for', 'if'],
                ['date', '_', 'page', 'resize', 'media', 'escape', 'rudate', 'slice'],
                ['range']
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
