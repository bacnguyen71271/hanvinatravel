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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/pages/combo-tour.htm */
class __TwigTemplate_06c0e9a1514cd9b091d8cbe1d7ee346662c0e1d515bd2486592220672c502f5e extends \Twig\Template
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
        echo "<!-- Header -->

    <!-- Header Ends -->

    <!-- Navigation Bar -->

    <!-- Navigation Bar Ends -->

    <!-- Breadcrumb -->  
    <section class=\"breadcrumb-outer text-center\">
        <div class=\"container\">
            <div class=\"breadcrumb-content\">
                <h1>COMBO DU LỊCH</h1>
                <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\" ";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">Trang Chủ</a></li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Combo Du lịch</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class=\"section-overlay\"></div>
    </section>
    <!-- BreadCrumb Ends -->

    ";
        // line 26
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("tours"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 27
        echo "    <!-- Destination Ends -->


    <!-- Footer -->
  
    <!-- Footer Ends -->  

    <!-- Back to top start -->
   
    <!-- Back to top ends -->";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/pages/combo-tour.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  67 => 26,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header -->

    <!-- Header Ends -->

    <!-- Navigation Bar -->

    <!-- Navigation Bar Ends -->

    <!-- Breadcrumb -->  
    <section class=\"breadcrumb-outer text-center\">
        <div class=\"container\">
            <div class=\"breadcrumb-content\">
                <h1>COMBO DU LỊCH</h1>
                <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\" {{'homepage' | page}}\">Trang Chủ</a></li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Combo Du lịch</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class=\"section-overlay\"></div>
    </section>
    <!-- BreadCrumb Ends -->

    {% component 'tours' %}
    <!-- Destination Ends -->


    <!-- Footer -->
  
    <!-- Footer Ends -->  

    <!-- Back to top start -->
   
    <!-- Back to top ends -->", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/pages/combo-tour.htm", "");
    }
}
