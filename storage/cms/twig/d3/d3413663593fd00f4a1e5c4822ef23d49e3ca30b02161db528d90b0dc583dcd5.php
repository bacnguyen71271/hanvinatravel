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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/pages/about.htm */
class __TwigTemplate_bc4b98fd5c560d7a49ef089647983355ac2f8254bd547901b47355eb9fc0e9dc extends \Twig\Template
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
                <h1>";
        // line 12
        echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, ($context["gioithieu"] ?? null), "title", [], "any", false, false, false, 12)]);
        echo "</h1>
                <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        echo "homepage";
        echo "\">Trang chủ</a></li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Giới thiệu</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class=\"section-overlay\"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class=\"main-content detail\">
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"content\" class=\"col-md-8\">
                    <div class=\"detail-content content-wrapper\">   
                        <div class=\"detail-info\">
                            <div class=\"detail-info-content clearfix\">
                                <h2> ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gioithieu"] ?? null), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h2>
                                <h4> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gioithieu"] ?? null), "highlight", [], "any", false, false, false, 33), "html", null, true);
        echo "</h4>
                            </div>
                        </div>
                        <div class=\"description detail-box\">
                            <div class=\"description-content\">
                                <div class=\"att-content-left\">
                                     ";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["gioithieu"] ?? null), "content", [], "any", false, false, false, 39);
        echo "
                                </div>
                            </div>
                        </div>
                       
                        <div class=\"location-map detail-box\">
                                <div class=\"detail-title\">
                                    <h3>ĐỊA ĐIỂM CÔNG TY</h3>
                                </div>
                                <div class=\"map-frame\">
                                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8345711138827!2d105.85127891440693!3d20.999267394161542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad7487f02633%3A0x6cbc72c99d36aab7!2sHANVINA%20TRAVEL!5e0!3m2!1sen!2s!4v1587652171884!5m2!1sen!2s\" width=\"100%\" height=\"auto\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                                </div>
                            </div>
                    </div>
                </div>
                <div id=\"sidebar-sticky\" class=\"col-md-4\">
                    <aside class=\"detail-sidebar sidebar-wrapper\">
                        <div class=\"sidebar-item sidebar-helpline\">
                            <div class=\"sidebar-helpline-content\" >
                                <h3 >CHỨNG NHẬN</h3>
                            </div>
                            <div class=\"sidebar-content\">
                                <div class=\"sidebar-helpline-content\">
                                        <p style=\"font-weight:600;\">Giấy phép LHQT số:</p>
                                        <p style=\"font-weight:600;\">01-1074/2020/TCDL-GP LHQT</p>
                                        <p style=\"font-weight:600;\">Hội viên chính thức của HHDLVN</p>
                                        <p style=\"font-weight:600;\">Hội viên chính thức của HHLHVN</p>
                                </div>
                                    
                               
                            </div>
                        </div>
                        <div class=\"sidebar-item sidebar-helpline\">
                            <div class=\"sidebar-helpline-content\">
                                <h3>THÔNG TIN LIÊN HỆ</h3>
                                <p>Số 10 phố Chùa Quỳnh, phường Quỳnh Lôi, quận Hai Bà Trưng, Hà Nội.</p>
                                <p><i class=\"fa fa-phone\"></i>(0243).62.72.777   </p>                  
                                <p><i class=\"fa fa-mobile\"></i>&nbsp;&nbsp;0912.944.666 </p>   
                                <p><i class=\"fa fa-envelope\"></i> <a href=\"mailto:info@hanvinatravel.com\" class=\"__cf_email__\">info@hanvinatravel.com</a></p>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
  
    <!-- Footer Ends -->  

    <!-- Back to top start -->
    
    <!-- Back to top ends -->";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 39,  80 => 33,  76 => 32,  56 => 15,  50 => 12,  37 => 1,);
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
                <h1>{{ html_strip(gioithieu.title | raw)}}</h1>
                <nav aria-label=\"breadcrumb\">
                    <ul class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"{{ 'homepage'}}\">Trang chủ</a></li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Giới thiệu</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class=\"section-overlay\"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class=\"main-content detail\">
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"content\" class=\"col-md-8\">
                    <div class=\"detail-content content-wrapper\">   
                        <div class=\"detail-info\">
                            <div class=\"detail-info-content clearfix\">
                                <h2> {{gioithieu.title}}</h2>
                                <h4> {{gioithieu.highlight}}</h4>
                            </div>
                        </div>
                        <div class=\"description detail-box\">
                            <div class=\"description-content\">
                                <div class=\"att-content-left\">
                                     {{ gioithieu.content | raw }}
                                </div>
                            </div>
                        </div>
                       
                        <div class=\"location-map detail-box\">
                                <div class=\"detail-title\">
                                    <h3>ĐỊA ĐIỂM CÔNG TY</h3>
                                </div>
                                <div class=\"map-frame\">
                                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8345711138827!2d105.85127891440693!3d20.999267394161542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad7487f02633%3A0x6cbc72c99d36aab7!2sHANVINA%20TRAVEL!5e0!3m2!1sen!2s!4v1587652171884!5m2!1sen!2s\" width=\"100%\" height=\"auto\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                                </div>
                            </div>
                    </div>
                </div>
                <div id=\"sidebar-sticky\" class=\"col-md-4\">
                    <aside class=\"detail-sidebar sidebar-wrapper\">
                        <div class=\"sidebar-item sidebar-helpline\">
                            <div class=\"sidebar-helpline-content\" >
                                <h3 >CHỨNG NHẬN</h3>
                            </div>
                            <div class=\"sidebar-content\">
                                <div class=\"sidebar-helpline-content\">
                                        <p style=\"font-weight:600;\">Giấy phép LHQT số:</p>
                                        <p style=\"font-weight:600;\">01-1074/2020/TCDL-GP LHQT</p>
                                        <p style=\"font-weight:600;\">Hội viên chính thức của HHDLVN</p>
                                        <p style=\"font-weight:600;\">Hội viên chính thức của HHLHVN</p>
                                </div>
                                    
                               
                            </div>
                        </div>
                        <div class=\"sidebar-item sidebar-helpline\">
                            <div class=\"sidebar-helpline-content\">
                                <h3>THÔNG TIN LIÊN HỆ</h3>
                                <p>Số 10 phố Chùa Quỳnh, phường Quỳnh Lôi, quận Hai Bà Trưng, Hà Nội.</p>
                                <p><i class=\"fa fa-phone\"></i>(0243).62.72.777   </p>                  
                                <p><i class=\"fa fa-mobile\"></i>&nbsp;&nbsp;0912.944.666 </p>   
                                <p><i class=\"fa fa-envelope\"></i> <a href=\"mailto:info@hanvinatravel.com\" class=\"__cf_email__\">info@hanvinatravel.com</a></p>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
  
    <!-- Footer Ends -->  

    <!-- Back to top start -->
    
    <!-- Back to top ends -->", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/pages/about.htm", "");
    }
}
