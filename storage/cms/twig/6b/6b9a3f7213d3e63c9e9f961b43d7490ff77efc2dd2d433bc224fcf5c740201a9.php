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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/menu.htm */
class __TwigTemplate_264e26dc03baae361bb8cda4d07087ae7b8ee85dbcec15dd5c3ba9bef2427ec3 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"navigation-content\">
        <div class=\"header_menu\">
            <!-- start Navbar (Header) -->
            <nav class=\"navbar navbar-default navbar-sticky-function navbar-arrow\">
                <div class=\"logo pull-left\">
                    <a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\"><img alt=\"Image\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/hanvina.png");
        echo "\" style=\"width:185px;height:89px\"></a>
                </div>
                <li id=\"navbar\" class=\"navbar-nav-wrapper pull-right\" style=\"list-style:none\">
                    <ul class=\"nav navbar-nav\" id=\"responsive-menu\">
                        <li>
                            <a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">Trang chủ</a>

                        </li>
                        <li>
                            <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">Giới thiệu </a>

                        </li>
                        <li>
                            <a class=\"dropdown-toggle\" data-toggle=\"\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("combo-tour");
        echo "\">Combo Du Lịch
                                <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("combo-tour", ["category-tour" => "combo-duong-bo"]);
        echo "\">Combo Đường bộ</a></li>
                                <li><a href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("combo-tour", ["category-tour" => "combo-duong-bay"]);
        echo "\">Combo Đường bay</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\" ";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tour");
        echo "\">Tour Du Lịch</a>

                        </li>
                        <li>
                            <a href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("customer");
        echo "\">Khách hàng</a>

                        </li>
                        <li>
                            <a href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("news");
        echo "\">Tin tức</a>

                        </li>
                        <li>
                            <a href=\" ";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Liên hệ</a>
                        </li>
                    </ul>
                </li>
                <!--/.nav-collapse -->
                <div id=\"slicknav-mobile\"></div>
            </nav>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 40,  100 => 36,  93 => 32,  86 => 28,  79 => 24,  75 => 23,  69 => 20,  62 => 16,  55 => 12,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"navigation-content\">
        <div class=\"header_menu\">
            <!-- start Navbar (Header) -->
            <nav class=\"navbar navbar-default navbar-sticky-function navbar-arrow\">
                <div class=\"logo pull-left\">
                    <a href=\"{{'homepage' | page}}\"><img alt=\"Image\" src=\"{{ 'assets/image/hanvina.png' | theme }}\" style=\"width:185px;height:89px\"></a>
                </div>
                <li id=\"navbar\" class=\"navbar-nav-wrapper pull-right\" style=\"list-style:none\">
                    <ul class=\"nav navbar-nav\" id=\"responsive-menu\">
                        <li>
                            <a href=\"{{ 'homepage' | page }}\">Trang chủ</a>

                        </li>
                        <li>
                            <a href=\"{{ 'about' | page }}\">Giới thiệu </a>

                        </li>
                        <li>
                            <a class=\"dropdown-toggle\" data-toggle=\"\" href=\"{{ 'combo-tour' | page }}\">Combo Du Lịch
                                <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ 'combo-tour' | page({'category-tour': 'combo-duong-bo'}) }}\">Combo Đường bộ</a></li>
                                <li><a href=\"{{ 'combo-tour' | page({'category-tour': 'combo-duong-bay'}) }}\">Combo Đường bay</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\" {{ 'tour' | page }}\">Tour Du Lịch</a>

                        </li>
                        <li>
                            <a href=\"{{ 'customer' | page }}\">Khách hàng</a>

                        </li>
                        <li>
                            <a href=\"{{ 'news'|page }}\">Tin tức</a>

                        </li>
                        <li>
                            <a href=\" {{ 'contact' | page }}\">Liên hệ</a>
                        </li>
                    </ul>
                </li>
                <!--/.nav-collapse -->
                <div id=\"slicknav-mobile\"></div>
            </nav>
        </div>
    </div>
</div>", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/menu.htm", "");
    }
}
