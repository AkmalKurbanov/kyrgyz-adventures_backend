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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/layouts/static-layout.htm */
class __TwigTemplate_62c34f721ada62caab87a7a1fd6b3f97fe5278efa736f5ff27f76fdae331a1a8 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <!-- favicon -->
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\">
  <!-- animate -->
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">
  <!-- bootstrap -->
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
  <!-- magnific popup -->
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\">
  <!-- Slick -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slick.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slick-theme.css");
        echo "\">
  <!-- nice select -->
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/nice-select.css");
        echo "\">
  <!-- swiper -->
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/swiper.min.css");
        echo "\">
  <!-- animated css -->
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animated-slider.css");
        echo "\">
  <!-- owl carousel -->
  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.min.css");
        echo "\">
  <!-- fontawesome -->
  <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\">
  <!-- flaticon -->
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/flaticon.css");
        echo "\">
  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
  <!-- responsive Stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">
  ";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 35
        echo "  ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoStaticPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 36
        echo "</head>

<body>
  <!-- preloader area start -->
  <div class=\"preloader\" id=\"preloader\">
    <div class=\"preloader-inner\">
      <div class=\"spinner\">
        <div class=\"dot1\"></div>
        <div class=\"dot2\"></div>
      </div>
    </div>
  </div>
  <!-- preloader area end -->

  <!-- search Popup -->
  <div class=\"body-overlay\" id=\"body-overlay\"></div>
  <div class=\"search-popup\" id=\"search-popup\">
    <form action=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "\" method=\"get\" class=\"search-form\">
      <div class=\"form-group\">
        <input name=\"q\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 55
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Search"]);
        echo ".....\" autocomplete=\"off\">
      </div>
      <button type=\"submit\" class=\"submit-btn\"><i class=\"fa fa-search\"></i></button>
    </form>
  </div>
  <!-- //. search Popup -->

  <!--sidebar menu start-->
  <div class=\"sidebar-menu\" id=\"sidebar-menu\">
    ";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "  </div>
  <!--sidebar menu end-->

  <!-- Header -->
  <header id=\"layout-header\">
    ";
        // line 70
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 71
        echo "  </header>
  <!-- breadcrumb-area start -->
  <div class=\"breadcrumb-area breadcrumb-style-02 main-bg\">
    ";
        // line 74
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/inner_banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 75
        echo "  </div>
  <!-- breadcrumb-area end -->

  <!-- Content -->
  <section id=\"layout-content\">
    <div class=\"container\">
      ";
        // line 81
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 82
        echo "    </div>
  </section>

  <!-- party-box-area start -->
  <div class=\"party-box-area padding-top-80\">
    <div class=\"container\">
      <div
        class=\"col-lg-12 party-box-wrapper d-flex flex-lg-row flex-column justify-content-lg-between justify-content-center text-lg-left text-center\">
        <div class=\"party-box-content\">
          <h4>";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Join a partnership"]);
        echo "</h4>
        </div>
        <div class=\"btn-wrapper align-self-center\">
          <a class=\"btn btn-custom-primary\" href=\"/join\">";
        // line 94
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Join"]);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
  <!-- party-box-area end -->

  <!-- brand-area start -->
  <div class=\"brand-area margin-top-105 margin-bottom-165\">
    ";
        // line 103
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/partners"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 104
        echo "  </div>
  <!-- brand-area end -->

  <!-- Footer -->
  <footer id=\"layout-footer\">
    ";
        // line 109
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 110
        echo "  </footer>

  <!-- back to top area start -->
  <div class=\"back-to-top\">
    <span class=\"back-top\"><i class=\"fa fa-angle-up\"></i></span>
  </div>
  <!-- back to top area end -->

  <!-- Scripts -->
  <!-- jquery -->
  <script src=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-2.2.4.min.js");
        echo "\"></script>
  <!-- popper -->
  <script src=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/popper.min.js");
        echo "\"></script>
  <!-- bootstrap -->
  <script src=\"";
        // line 124
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.min.js");
        echo "\"></script>
  <!-- magnific popup -->
  <script src=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.magnific-popup.js");
        echo "\"></script>
  <!-- wow -->
  <script src=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/wow.min.js");
        echo "\"></script>
  <!-- animated slider -->
  <script src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/animated-slider.js");
        echo "\"></script>
  <!-- nice select -->
  <script src=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/nice-select.js");
        echo "\"></script>
  <!-- owl carousel -->
  <script src=\"";
        // line 134
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel.min.js");
        echo "\"></script>
  <!-- Slick -->
  <script src=\"";
        // line 136
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick.min.js");
        echo "\"></script>
  <!-- Slick Animation -->
  <script src=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick-animation.js");
        echo "\"></script>
  <!-- counterup -->
  <script src=\"";
        // line 140
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.counterup.min.js");
        echo "\"></script>
  <!-- waypoint -->
  <script src=\"";
        // line 142
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/waypoints.min.js");
        echo "\"></script>
  <!-- imageloaded -->
  <script src=\"";
        // line 144
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/imagesloaded.pkgd.min.js");
        echo "\"></script>
  <!-- swiper -->
  <script src=\"";
        // line 146
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/swiper.min.js");
        echo "\"></script>
  <!-- isotope -->
  <script src=\"";
        // line 148
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/isotope.pkgd.min.js");
        echo "\"></script>

  <script src=\"";
        // line 150
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.classyloader.js");
        echo "\"></script>
  <!-- instafeeds -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/InstagramFeed/3.0.2/InstagramFeed.min.js\"></script>

  <script src=\"";
        // line 154
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/script.js");
        echo "\"></script>
  <script src=\"";
        // line 155
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/main.js");
        echo "\"></script>

  ";
        // line 157
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 158
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 159
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/layouts/static-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 159,  352 => 158,  341 => 157,  336 => 155,  332 => 154,  325 => 150,  320 => 148,  315 => 146,  310 => 144,  305 => 142,  300 => 140,  295 => 138,  290 => 136,  285 => 134,  280 => 132,  275 => 130,  270 => 128,  265 => 126,  260 => 124,  255 => 122,  250 => 120,  238 => 110,  234 => 109,  227 => 104,  223 => 103,  211 => 94,  205 => 91,  194 => 82,  192 => 81,  184 => 75,  180 => 74,  175 => 71,  171 => 70,  164 => 65,  160 => 64,  148 => 55,  143 => 53,  124 => 36,  119 => 35,  116 => 34,  112 => 33,  107 => 31,  102 => 29,  97 => 27,  92 => 25,  87 => 23,  82 => 21,  77 => 19,  72 => 17,  68 => 16,  63 => 14,  58 => 12,  53 => 10,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <!-- favicon -->
  <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/favicon.png'|theme }}\">
  <!-- animate -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css' | theme }}\">
  <!-- bootstrap -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css' | theme }}\">
  <!-- magnific popup -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/magnific-popup.css' | theme }}\">
  <!-- Slick -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/slick.css' | theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/slick-theme.css' | theme }}\">
  <!-- nice select -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/nice-select.css' | theme }}\">
  <!-- swiper -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/swiper.min.css' | theme }}\">
  <!-- animated css -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/animated-slider.css' | theme }}\">
  <!-- owl carousel -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.carousel.min.css' | theme }}\">
  <!-- fontawesome -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/font-awesome.min.css' | theme }}\">
  <!-- flaticon -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/flaticon.css' | theme }}\">
  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css' | theme }}\">
  <!-- responsive Stylesheet -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/responsive.css' | theme }}\">
  {% styles %}
  {% component 'SeoStaticPage' %}
</head>

<body>
  <!-- preloader area start -->
  <div class=\"preloader\" id=\"preloader\">
    <div class=\"preloader-inner\">
      <div class=\"spinner\">
        <div class=\"dot1\"></div>
        <div class=\"dot2\"></div>
      </div>
    </div>
  </div>
  <!-- preloader area end -->

  <!-- search Popup -->
  <div class=\"body-overlay\" id=\"body-overlay\"></div>
  <div class=\"search-popup\" id=\"search-popup\">
    <form action=\"{{ 'search' | page }}\" method=\"get\" class=\"search-form\">
      <div class=\"form-group\">
        <input name=\"q\" type=\"text\" class=\"form-control\" placeholder=\"{{'Search'|_}}.....\" autocomplete=\"off\">
      </div>
      <button type=\"submit\" class=\"submit-btn\"><i class=\"fa fa-search\"></i></button>
    </form>
  </div>
  <!-- //. search Popup -->

  <!--sidebar menu start-->
  <div class=\"sidebar-menu\" id=\"sidebar-menu\">
    {% partial 'site/sidebar' %}
  </div>
  <!--sidebar menu end-->

  <!-- Header -->
  <header id=\"layout-header\">
    {% partial 'site/header' %}
  </header>
  <!-- breadcrumb-area start -->
  <div class=\"breadcrumb-area breadcrumb-style-02 main-bg\">
    {% partial 'site/inner_banner' %}
  </div>
  <!-- breadcrumb-area end -->

  <!-- Content -->
  <section id=\"layout-content\">
    <div class=\"container\">
      {% page %}
    </div>
  </section>

  <!-- party-box-area start -->
  <div class=\"party-box-area padding-top-80\">
    <div class=\"container\">
      <div
        class=\"col-lg-12 party-box-wrapper d-flex flex-lg-row flex-column justify-content-lg-between justify-content-center text-lg-left text-center\">
        <div class=\"party-box-content\">
          <h4>{{'Join a partnership'|_}}</h4>
        </div>
        <div class=\"btn-wrapper align-self-center\">
          <a class=\"btn btn-custom-primary\" href=\"/join\">{{'Join'|_}}</a>
        </div>
      </div>
    </div>
  </div>
  <!-- party-box-area end -->

  <!-- brand-area start -->
  <div class=\"brand-area margin-top-105 margin-bottom-165\">
    {% partial 'site/partners' %}
  </div>
  <!-- brand-area end -->

  <!-- Footer -->
  <footer id=\"layout-footer\">
    {% partial 'site/footer' %}
  </footer>

  <!-- back to top area start -->
  <div class=\"back-to-top\">
    <span class=\"back-top\"><i class=\"fa fa-angle-up\"></i></span>
  </div>
  <!-- back to top area end -->

  <!-- Scripts -->
  <!-- jquery -->
  <script src=\"{{ 'assets/vendor/jquery-2.2.4.min.js'|theme }}\"></script>
  <!-- popper -->
  <script src=\"{{ 'assets/vendor/popper.min.js'|theme }}\"></script>
  <!-- bootstrap -->
  <script src=\"{{ 'assets/vendor/bootstrap.min.js'|theme }}\"></script>
  <!-- magnific popup -->
  <script src=\"{{ 'assets/vendor/jquery.magnific-popup.js'|theme }}\"></script>
  <!-- wow -->
  <script src=\"{{ 'assets/vendor/wow.min.js'|theme }}\"></script>
  <!-- animated slider -->
  <script src=\"{{ 'assets/vendor/animated-slider.js'|theme }}\"></script>
  <!-- nice select -->
  <script src=\"{{ 'assets/vendor/nice-select.js'|theme }}\"></script>
  <!-- owl carousel -->
  <script src=\"{{ 'assets/vendor/owl.carousel.min.js'|theme }}\"></script>
  <!-- Slick -->
  <script src=\"{{ 'assets/vendor/slick.min.js'|theme }}\"></script>
  <!-- Slick Animation -->
  <script src=\"{{ 'assets/vendor/slick-animation.js'|theme }}\"></script>
  <!-- counterup -->
  <script src=\"{{ 'assets/vendor/jquery.counterup.min.js'|theme }}\"></script>
  <!-- waypoint -->
  <script src=\"{{ 'assets/vendor/waypoints.min.js'|theme }}\"></script>
  <!-- imageloaded -->
  <script src=\"{{ 'assets/vendor/imagesloaded.pkgd.min.js'|theme }}\"></script>
  <!-- swiper -->
  <script src=\"{{ 'assets/vendor/swiper.min.js'|theme }}\"></script>
  <!-- isotope -->
  <script src=\"{{ 'assets/vendor/isotope.pkgd.min.js'|theme }}\"></script>

  <script src=\"{{ 'assets/vendor/jquery.classyloader.js'|theme }}\"></script>
  <!-- instafeeds -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/InstagramFeed/3.0.2/InstagramFeed.min.js\"></script>

  <script src=\"{{ 'assets/javascript/script.js'|theme }}\"></script>
  <script src=\"{{ 'assets/javascript/main.js'|theme }}\"></script>

  {% framework extras %}
  {% scripts %}

</body>

</html>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/layouts/static-layout.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 34, "component" => 35, "partial" => 64, "page" => 81, "framework" => 157, "scripts" => 158);
        static $filters = array("theme" => 8, "page" => 53, "_" => 55);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'component', 'partial', 'page', 'framework', 'scripts'],
                ['theme', 'page', '_'],
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
