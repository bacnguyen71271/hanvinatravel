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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/layouts/home.htm */
class __TwigTemplate_4be31a1b5610d4ff9163569f8f2ddf015a9c611674f4694d769aa2bcb3e6726d extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html><meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\" />

<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"zxx\">

<head>

   <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"robots\" content=\"index, follow\"/>
    <link rel=\"canonical\" href=\"";
        // line 11
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "canonical", [], "any", false, false, false, 11)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "canonical", [], "any", false, false, false, 11), "html", null, true))) : (print (call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]))));
        echo "\"/>
    <!-- for Google -->
    <title>";
        // line 13
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13)) : (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "title_seo", [], "any", false, false, false, 13))), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "meta_description", [], "any", false, false, false, 14)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "meta_description", [], "any", false, false, false, 14)) : (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "description_seo", [], "any", false, false, false, 14))), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "meta_keyword", [], "any", false, false, false, 15)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "meta_keyword", [], "any", false, false, false, 15)) : (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "keyword_seo", [], "any", false, false, false, 15))), "html", null, true);
        echo "\">
    <!-- for Facebook -->
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 18), "title", [], "any", false, false, false, 18)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 18), "title", [], "any", false, false, false, 18)) : (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "title_seo", [], "any", false, false, false, 18))), "html", null, true);
        echo "\"/>
    <meta property=\"og:description\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "meta_description", [], "any", false, false, false, 19)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "meta_description", [], "any", false, false, false, 19)) : (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "description_seo", [], "any", false, false, false, 19))), "html", null, true);
        echo "\"/>
    <meta property=\"og:site_name\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "\"/>
    <meta property=\"og:image\" content=\"";
        // line 21
        echo $this->extensions['System\Twig\Extension']->mediaFilter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 21), "meta_image", [], "any", false, false, false, 21)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 21), "meta_image", [], "any", false, false, false, 21)) : (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "image_share", [], "any", false, false, false, 21))));
        echo "\"/>
    <meta property=\"og:url\" content=\"";
        // line 22
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "canonical", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "canonical", [], "any", false, false, false, 22), "html", null, true))) : (print (call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"]))));
        echo "\"/>
    <meta property=\"og:locale\" content=\"vi_VN\">
    <!-- Favicon -->
  <!-- Bootstrap core CSS -->
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/blog.css?v=1");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/flaticon.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/plugin.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/UniSansHeavy.otf");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/UniSansHeavyItalic.otf");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/UniSansThin.otf");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/UniSansThinItalic.otf");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/pubweb.css");
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/hanvina.png");
        echo "\">

        ";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 41
        echo "</head>
<body>

    <header id=\"layout-header\">
        ";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "    </header>
    <nav id=\"layout-menu\">
       ";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "    </nav>
    <!-- Content -->
        ";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 52
        echo "
    <!-- Footer -->
    <footer id=\"layout-footer\">
        ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "    </footer>
    
     ";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/back-to-top"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "
    <!-- *Scripts* -->
    <script src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugin.js");
        echo "\"></script>
    <script src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    <script src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main-1.js");
        echo "\"></script>
    <script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom-countdown.js");
        echo "\"></script>
    <script src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/tour_detail.js");
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js\"></script>
    <script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\" ></script>
<script src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/contact.js");
        echo "\"></script>
";
        // line 72
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
        // line 73
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 74
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 74,  238 => 73,  227 => 72,  223 => 71,  219 => 70,  213 => 67,  209 => 66,  205 => 65,  201 => 64,  197 => 63,  193 => 62,  189 => 61,  185 => 59,  181 => 58,  177 => 56,  173 => 55,  168 => 52,  166 => 51,  162 => 49,  158 => 48,  154 => 46,  150 => 45,  144 => 41,  141 => 40,  136 => 38,  132 => 37,  128 => 36,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  62 => 15,  58 => 14,  54 => 13,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html><meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\" />

<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"zxx\">

<head>

   <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"robots\" content=\"index, follow\"/>
    <link rel=\"canonical\" href=\"{{ this.page.canonical ? this.page.canonical : url_current() }}\"/>
    <!-- for Google -->
    <title>{{ this.page.title ? this.page.title : setting.title_seo }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description ? this.page.meta_description : setting.description_seo }}\">
    <meta name=\"keywords\" content=\"{{ this.page.meta_keyword ? this.page.meta_keyword : setting.keyword_seo }}\">
    <!-- for Facebook -->
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"{{ this.page.title ? this.page.title : setting.title_seo }}\"/>
    <meta property=\"og:description\" content=\"{{ this.page.meta_description ? this.page.meta_description : setting.description_seo }}\"/>
    <meta property=\"og:site_name\" content=\"{{ setting.name }}\"/>
    <meta property=\"og:image\" content=\"{{ (this.page.meta_image ? this.page.meta_image : setting.image_share) | media}}\"/>
    <meta property=\"og:url\" content=\"{{ this.page.canonical ? this.page.canonical : url_current() }}\"/>
    <meta property=\"og:locale\" content=\"vi_VN\">
    <!-- Favicon -->
  <!-- Bootstrap core CSS -->
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/blog.css?v=1' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/flaticon.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/plugin.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/font-awesome.min.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/UniSansHeavy.otf' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/UniSansHeavyItalic.otf' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/UniSansThin.otf' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/UniSansThinItalic.otf' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/pubweb.css' | theme }}\">
    <link rel=\"shortcut icon\" href=\"{{ 'assets/image/hanvina.png' | theme }}\">

        {% styles %}
</head>
<body>

    <header id=\"layout-header\">
        {% partial 'site/header' %}
    </header>
    <nav id=\"layout-menu\">
       {% partial 'site/menu' %}
    </nav>
    <!-- Content -->
        {% page %}

    <!-- Footer -->
    <footer id=\"layout-footer\">
        {% partial 'site/footer' %}
    </footer>
    
     {% partial 'site/back-to-top' %}

    <!-- *Scripts* -->
    <script src=\"{{'assets/js/jquery.min.js'| theme}}\"></script>
    <script src=\"{{'assets/js/bootstrap.min.js'| theme}}\"></script>
    <script src=\"{{'assets/js/plugin.js'| theme}}\"></script>
    <script src=\"{{'assets/js/main.js'| theme}}\"></script>
    <script src=\"{{'assets/js/main-1.js'| theme}}\"></script>
    <script src=\"{{'assets/js/custom-countdown.js'| theme}}\"></script>
    <script src=\"{{'assets/js/tour_detail.js'| theme}}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js\"></script>
    <script src=\"{{'assets/js/main.js'|theme }}\" ></script>
<script src=\"{{'assets/js/contact.js'|theme }}\"></script>
{% framework extras %}
{% scripts %}
</body>
</html>", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/layouts/home.htm", "");
    }
}
