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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/pages/contact.htm */
class __TwigTemplate_4db1275596def49c98a8fda428825f2608c85133799d92b58e83da451e27d299 extends \Twig\Template
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
            <h1>LIÊN HỆ</h1>
            <nav aria-label=\"breadcrumb\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">Trang chủ</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Liên hệ</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class=\"section-overlay\"></div>
</section>
<!-- BreadCrumb Ends -->
    <p style=\"margin-top:50px;text-align:center; font-size-25; font-weight:800\">NHẬN TƯ VẤN MIỄN PHÍ:</p>
<section class=\"contact\" style=\"padding: 20px 0 85px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div id=\"contact-form\" class=\"contact-form\">

                    <div id=\"contactform-error-msg\"></div>

                    <form  class=\"form_contact\">
                        <div class=\"row\">
                            <div class=\"form-group col-xs-12\">
                                <label>Họ và tên:</label>
                                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"f_name\" placeholder=\"Họ và tên\">
                            </div>
                            <div class=\"form-group col-xs-6\">
                                <label>Email:</label>
                                <input type=\"email\" name=\"email\" class=\"form-control\" id=\"f_email\" placeholder=\"Email\">
                            </div>
                            <div class=\"form-group col-xs-6 col-left-padding\">
                                <label>Số điện thoại:</label>
                                <input type=\"text\" name=\"phone\" class=\"form-control\" id=\"f_phone\" placeholder=\"Số điện thoại\">
                            </div>
                            <div class=\"textarea col-xs-12\">
                                <label>Ghi chú:</label>
                                <textarea name=\"content\"  id=\"f_content\" placeholder=\"Ghi chú\"></textarea>
                            </div>
                            <div class=\"col-xs-12\">
                                <div class=\"comment-btn\">
                                    <input type=\"submit\" class=\"btn-blue btn-red\" id=\"submit\" value=\"Gửi liên hệ\">
                                    <label id=\"loadding-page\"><img src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/success.gif");
        echo "\" width=\"64\" height=\"64\" /></label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"contact-about footer-margin\">

                    <h4>HANVINA TRAVEL</h4>
                    <p>Hành trình xuất phát từ Tâm!</p>
                    <div class=\"contact-location\">
                        <ul>
                            <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Số 10 phố Chùa Quỳnh, phường Quỳnh Lôi, quận Hai Bà Trưng, Hà Nội</li>
                            <li><i class=\"fa fa-phone\"></i>(0243).62.72.777</li>
                             <li><i class=\"fa fa-mobile\"></i>&nbsp;&nbsp;0912.944.666</li>  
                            <li><i class=\"fa fa-envelope\"></i> <a href=\"mailto:hanvinatravel.vn\" class=\"__cf_email__\">info@hanvinatravel.vn</a></li>
                        </ul>
                    </div>
                    <div class=\"footer-social-links\">
                        <ul>
                            <li class=\"social-icon\"><a href=\"https://www.facebook.com/hanvinatravel\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li class=\"social-icon\"><a href=\"https://www.instagram.com/hanvina_travel/?fbclid=IwAR0gGFnwF8WJeb6Nj0UNaTg1jwAfZOnIz5ahUl4pD26ToqTX4XZ9O7Xbx1A\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                            <li class=\"social-icon\"><a href=\"#\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class=\"map\">
    <div id=\"map\" style=\"height: 350px; width: 100%;\">  <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8345711138827!2d105.85127891440693!3d20.999267394161542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad7487f02633%3A0x6cbc72c99d36aab7!2sHANVINA%20TRAVEL!5e0!3m2!1sen!2s!4v1587652171884!5m2!1sen!2s\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
    </div>
</div>

<!-- Footer -->

<!-- Footer Ends -->

<!-- Back to top start -->

<!-- Back to top ends -->";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 54,  53 => 15,  37 => 1,);
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
            <h1>LIÊN HỆ</h1>
            <nav aria-label=\"breadcrumb\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ 'homepage' | page}}\">Trang chủ</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Liên hệ</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class=\"section-overlay\"></div>
</section>
<!-- BreadCrumb Ends -->
    <p style=\"margin-top:50px;text-align:center; font-size-25; font-weight:800\">NHẬN TƯ VẤN MIỄN PHÍ:</p>
<section class=\"contact\" style=\"padding: 20px 0 85px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div id=\"contact-form\" class=\"contact-form\">

                    <div id=\"contactform-error-msg\"></div>

                    <form  class=\"form_contact\">
                        <div class=\"row\">
                            <div class=\"form-group col-xs-12\">
                                <label>Họ và tên:</label>
                                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"f_name\" placeholder=\"Họ và tên\">
                            </div>
                            <div class=\"form-group col-xs-6\">
                                <label>Email:</label>
                                <input type=\"email\" name=\"email\" class=\"form-control\" id=\"f_email\" placeholder=\"Email\">
                            </div>
                            <div class=\"form-group col-xs-6 col-left-padding\">
                                <label>Số điện thoại:</label>
                                <input type=\"text\" name=\"phone\" class=\"form-control\" id=\"f_phone\" placeholder=\"Số điện thoại\">
                            </div>
                            <div class=\"textarea col-xs-12\">
                                <label>Ghi chú:</label>
                                <textarea name=\"content\"  id=\"f_content\" placeholder=\"Ghi chú\"></textarea>
                            </div>
                            <div class=\"col-xs-12\">
                                <div class=\"comment-btn\">
                                    <input type=\"submit\" class=\"btn-blue btn-red\" id=\"submit\" value=\"Gửi liên hệ\">
                                    <label id=\"loadding-page\"><img src=\"{{'assets/image/success.gif' | theme}}\" width=\"64\" height=\"64\" /></label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"contact-about footer-margin\">

                    <h4>HANVINA TRAVEL</h4>
                    <p>Hành trình xuất phát từ Tâm!</p>
                    <div class=\"contact-location\">
                        <ul>
                            <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Số 10 phố Chùa Quỳnh, phường Quỳnh Lôi, quận Hai Bà Trưng, Hà Nội</li>
                            <li><i class=\"fa fa-phone\"></i>(0243).62.72.777</li>
                             <li><i class=\"fa fa-mobile\"></i>&nbsp;&nbsp;0912.944.666</li>  
                            <li><i class=\"fa fa-envelope\"></i> <a href=\"mailto:hanvinatravel.vn\" class=\"__cf_email__\">info@hanvinatravel.vn</a></li>
                        </ul>
                    </div>
                    <div class=\"footer-social-links\">
                        <ul>
                            <li class=\"social-icon\"><a href=\"https://www.facebook.com/hanvinatravel\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                            <li class=\"social-icon\"><a href=\"https://www.instagram.com/hanvina_travel/?fbclid=IwAR0gGFnwF8WJeb6Nj0UNaTg1jwAfZOnIz5ahUl4pD26ToqTX4XZ9O7Xbx1A\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                            <li class=\"social-icon\"><a href=\"#\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class=\"map\">
    <div id=\"map\" style=\"height: 350px; width: 100%;\">  <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8345711138827!2d105.85127891440693!3d20.999267394161542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad7487f02633%3A0x6cbc72c99d36aab7!2sHANVINA%20TRAVEL!5e0!3m2!1sen!2s!4v1587652171884!5m2!1sen!2s\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
    </div>
</div>

<!-- Footer -->

<!-- Footer Ends -->

<!-- Back to top start -->

<!-- Back to top ends -->", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/pages/contact.htm", "");
    }
}
