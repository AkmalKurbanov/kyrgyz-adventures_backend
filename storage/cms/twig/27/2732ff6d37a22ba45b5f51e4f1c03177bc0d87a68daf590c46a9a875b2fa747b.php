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

/* C:\work\OpenServer\domains\tabylga.loc/themes/tabylga/layouts/default.htm */
class __TwigTemplate_ab59db3e2fbe3df6022b4a1b4378a99c105602027243b0cc60b92b301a9753fe extends \Twig\Template
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
        $tags = array("styles" => 36, "component" => 37, "partial" => 67, "if" => 77, "page" => 95, "framework" => 174, "scripts" => 175);
        $filters = array("theme" => 8, "page" => 56, "_" => 58, "resize" => 79);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'component', 'partial', 'if', 'page', 'framework', 'scripts'],
                ['theme', 'page', '_', 'resize'],
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
  <!-- jquery ui -->
  <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery-ui.css");
        echo "\">
  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
  <!-- responsive Stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">
  ";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 37
        echo "  ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 38
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
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "\" method=\"get\" class=\"search-form\">
      <div class=\"form-group\">
        <input name=\"q\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 58
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Поиск"]);
        echo ".....\" autocomplete=\"off\">
      </div>
      <button type=\"submit\" class=\"submit-btn\"><i class=\"fa fa-search\"></i></button>
    </form>
  </div>
  <!-- //. search Popup -->

  <!--sidebar menu start-->
  <div class=\"sidebar-menu\" id=\"sidebar-menu\">
    ";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "  </div>
  <!--sidebar menu end-->

  <!-- Header -->
  <header id=\"layout-header\">
    ";
        // line 73
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 74
        echo "  </header>

  <!-- banner start -->
  ";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 77), "url", [], "any", false, false, true, 77) == "/")) {
            // line 78
            echo "  <div class=\"banner-style-4 d-flex align-items-center\"
    style=\"background-image: url(";
            // line 79
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 79), "main_banner_img", [], "any", false, false, true, 79), "path", [], "any", false, false, true, 79), 79, $this->source), 1920, false, ["mode" => "crop", "quality" => "80", "extension" => "jpg"]]);
            echo ");\">
    ";
            // line 80
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/banner_mine"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 81
            echo "  </div>
  <!-- breadcrumb-area end -->
  ";
        } else {
            // line 84
            echo "  <div class=\"breadcrumb-area breadcrumb-style-02 main-bg\">
    ";
            // line 85
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/inner_banner"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 86
            echo "  </div>

  ";
        }
        // line 89
        echo "  <!-- banner end  -->



  <!-- Content -->
  <section id=\"layout-content\">
    ";
        // line 95
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 96
        echo "  </section>

  <!-- party-box-area start -->
  ";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 99), "url", [], "any", false, false, true, 99) == "/join")) {
            // line 100
            echo "  ";
        } else {
            // line 101
            echo "  <div class=\"party-box-area padding-top-80\">
    <div class=\"container\">
      <div
        class=\"col-lg-12 party-box-wrapper d-flex flex-lg-row flex-column justify-content-lg-between justify-content-center text-lg-left text-center\">
        <div class=\"party-box-content\">
          <h4>";
            // line 106
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Присоединиться к партнерству"]);
            echo "</h4>
        </div>
        <div class=\"btn-wrapper align-self-center\">
          <a class=\"btn btn-custom-primary\" href=\"/join\">";
            // line 109
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Присоединиться"]);
            echo "</a>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 115
        echo "  <!-- party-box-area end -->

  <!-- brand-area start -->
  <div class=\"brand-area margin-top-105 margin-bottom-165\">
    ";
        // line 119
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/partners"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 120
        echo "  </div>
  <!-- brand-area end -->


  <!-- Footer -->
  <footer id=\"layout-footer\">
    ";
        // line 126
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 127
        echo "  </footer>

  <!-- back to top area start -->
  <div class=\"back-to-top\">
    <span class=\"back-top\"><i class=\"fa fa-angle-up\"></i></span>
  </div>
  <!-- back to top area end -->

  <!-- Scripts -->
  <!-- jquery -->
  <script src=\"";
        // line 137
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-2.2.4.min.js");
        echo "\"></script>
  <!-- popper -->
  <script src=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/popper.min.js");
        echo "\"></script>
  <!-- bootstrap -->
  <script src=\"";
        // line 141
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.min.js");
        echo "\"></script>
  <!-- magnific popup -->
  <script src=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.magnific-popup.js");
        echo "\"></script>
  <!-- wow -->
  <script src=\"";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/wow.min.js");
        echo "\"></script>
  <!-- animated slider -->
  <script src=\"";
        // line 147
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/animated-slider.js");
        echo "\"></script>
  <!-- nice select -->
  <script src=\"";
        // line 149
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/nice-select.js");
        echo "\"></script>
  <!-- owl carousel -->
  <script src=\"";
        // line 151
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel.min.js");
        echo "\"></script>
  <!-- Slick -->
  <script src=\"";
        // line 153
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick.min.js");
        echo "\"></script>
  <!-- Slick Animation -->
  <script src=\"";
        // line 155
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/slick-animation.js");
        echo "\"></script>
  <!-- counterup -->
  <script src=\"";
        // line 157
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.counterup.min.js");
        echo "\"></script>
  <!-- waypoint -->
  <script src=\"";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/waypoints.min.js");
        echo "\"></script>
  <!-- imageloaded -->
  <script src=\"";
        // line 161
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/imagesloaded.pkgd.min.js");
        echo "\"></script>
  <!-- swiper -->
  <script src=\"";
        // line 163
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/swiper.min.js");
        echo "\"></script>
  <!-- isotope -->
  <script src=\"";
        // line 165
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/isotope.pkgd.min.js");
        echo "\"></script>
  <!-- jquery-ui -->
  <script src=\"";
        // line 167
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-ui.js");
        echo "\"></script>
  <script src=\"";
        // line 168
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.classyloader.js");
        echo "\"></script>
  <!-- instafeeds -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/InstagramFeed/3.0.2/InstagramFeed.min.js\"></script>

  <script src=\"";
        // line 172
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/script.js");
        echo "\"></script>
  <script src=\"";
        // line 173
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/main.js");
        echo "\"></script>
  ";
        // line 174
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
        // line 175
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 176
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 176,  420 => 175,  409 => 174,  405 => 173,  401 => 172,  394 => 168,  390 => 167,  385 => 165,  380 => 163,  375 => 161,  370 => 159,  365 => 157,  360 => 155,  355 => 153,  350 => 151,  345 => 149,  340 => 147,  335 => 145,  330 => 143,  325 => 141,  320 => 139,  315 => 137,  303 => 127,  299 => 126,  291 => 120,  287 => 119,  281 => 115,  272 => 109,  266 => 106,  259 => 101,  256 => 100,  254 => 99,  249 => 96,  247 => 95,  239 => 89,  234 => 86,  230 => 85,  227 => 84,  222 => 81,  218 => 80,  214 => 79,  211 => 78,  209 => 77,  204 => 74,  200 => 73,  193 => 68,  189 => 67,  177 => 58,  172 => 56,  152 => 38,  147 => 37,  144 => 36,  140 => 35,  135 => 33,  130 => 31,  125 => 29,  120 => 27,  115 => 25,  110 => 23,  105 => 21,  100 => 19,  95 => 17,  91 => 16,  86 => 14,  81 => 12,  76 => 10,  71 => 8,  62 => 1,);
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
  <!-- jquery ui -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/jquery-ui.css' | theme }}\">
  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css' | theme }}\">
  <!-- responsive Stylesheet -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/responsive.css' | theme }}\">
  {% styles %}
  {% component 'SeoCmsPage' %}
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
        <input name=\"q\" type=\"text\" class=\"form-control\" placeholder=\"{{'Поиск'|_}}.....\" autocomplete=\"off\">
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

  <!-- banner start -->
  {% if this.page.url == '/' %}
  <div class=\"banner-style-4 d-flex align-items-center\"
    style=\"background-image: url({{this.theme.main_banner_img.path | resize(1920, false, { mode: 'crop', quality: '80', extension: 'jpg' })}});\">
    {% partial 'site/banner_mine' %}
  </div>
  <!-- breadcrumb-area end -->
  {% else %}
  <div class=\"breadcrumb-area breadcrumb-style-02 main-bg\">
    {% partial 'site/inner_banner' %}
  </div>

  {% endif %}
  <!-- banner end  -->



  <!-- Content -->
  <section id=\"layout-content\">
    {% page %}
  </section>

  <!-- party-box-area start -->
  {% if this.page.url == '/join' %}
  {% else %}
  <div class=\"party-box-area padding-top-80\">
    <div class=\"container\">
      <div
        class=\"col-lg-12 party-box-wrapper d-flex flex-lg-row flex-column justify-content-lg-between justify-content-center text-lg-left text-center\">
        <div class=\"party-box-content\">
          <h4>{{'Присоединиться к партнерству'|_}}</h4>
        </div>
        <div class=\"btn-wrapper align-self-center\">
          <a class=\"btn btn-custom-primary\" href=\"/join\">{{'Присоединиться'|_}}</a>
        </div>
      </div>
    </div>
  </div>
  {% endif %}
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
  <!-- jquery-ui -->
  <script src=\"{{ 'assets/vendor/jquery-ui.js'|theme }}\"></script>
  <script src=\"{{ 'assets/vendor/jquery.classyloader.js'|theme }}\"></script>
  <!-- instafeeds -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/InstagramFeed/3.0.2/InstagramFeed.min.js\"></script>

  <script src=\"{{ 'assets/javascript/script.js'|theme }}\"></script>
  <script src=\"{{ 'assets/javascript/main.js'|theme }}\"></script>
  {% framework extras %}
  {% scripts %}
</body>

</html>", "C:\\work\\OpenServer\\domains\\tabylga.loc/themes/tabylga/layouts/default.htm", "");
    }
}
