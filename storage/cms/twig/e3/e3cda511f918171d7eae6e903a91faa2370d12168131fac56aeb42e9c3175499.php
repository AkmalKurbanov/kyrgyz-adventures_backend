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

/* C:\work\OSPanel\domains\tabylga/themes/tabylga/pages/404.htm */
class __TwigTemplate_93ee737a2b0e163737ce730439415e451b4d55a8148b4ed0e7fb59f9cf1cc9a8 extends \Twig\Template
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
        $tags = array();
        $filters = array("_" => 4, "page" => 6, "escape" => 6, "title" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['_', 'page', 'escape', 'title'],
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>404</h1>
        <p style=\"font-size: 20px;\">";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Page not found."]);
        echo "</p>
        <div class=\"btn btn-custom-primary margin-top-15\">
            <a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "home"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>404</h1>
        <p style=\"font-size: 20px;\">{{'Page not found.'|_}}</p>
        <div class=\"btn btn-custom-primary margin-top-15\">
            <a href=\"{{ 'home'|page }}\">{{ 'home'|title }}</a>
        </div>
    </div>
</div>", "C:\\work\\OSPanel\\domains\\tabylga/themes/tabylga/pages/404.htm", "");
    }
}
