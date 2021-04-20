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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tour/default.htm */
class __TwigTemplate_23fb421da8874af140647f7031942e3fe5df8d2102095e0cfda5618ffa04cbc0 extends \Twig\Template
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
        echo "<section class=\"breadcrumb-outer text-center\">
    <div class=\"container\">
        <div class=\"breadcrumb-content\">
            <h1 style=\"    text-transform: uppercase;\"> ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tour", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4);
        echo "</h1>
            <nav aria-label=\"breadcrumb\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">Trang chủ</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Chi tiết</li>
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
                            <h2>";
        // line 24
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tour", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24);
        echo "</h2>
                            <div class=\"deal-rating\">
                            
                            </div>
                        </div>
                    </div>
                    <div class=\"gallery detail-box\">
                        <!-- Paradise Slider -->
                        <div id=\"in_th_030\" class=\"carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint\" data-ride=\"carousel\" data-pause=\"hover\" data-interval=\"4000\" data-duration=\"2000\">
                            <!-- Indicators -->
                            <ol class=\"carousel-indicators\">
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tour", [], "any", false, false, false, 35), "photos", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 36
            echo "                                <li data-target=\"#in_th_030\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (($context["key"] == 0)) {
                echo " class=\"active\" ";
            }
            echo ">
                                    <!-- 1st Indicator Image -->
                                    <img height=\"100px\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "method", false, false, false, 38), "html", null, true);
            echo "\" />
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            </ol> <!-- /Indicators -->
                            <!-- Wrapper For Slides -->
                            <div class=\"carousel-inner\" role=\"listbox\">
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tour", [], "any", false, false, false, 44), "photos", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 45
            echo "                                <div class=\"item ";
            if (($context["key"] == 0)) {
                echo " active ";
            }
            echo "\">
                                    <!-- Slide Background -->
                                    <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "method", false, false, false, 47), "html", null, true);
            echo "\" alt=\"in_th_030_01\" />                                        
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                            </div> <!-- End of Wrapper For Slides -->
                        </div> <!-- End Paradise Slider -->
                    </div>
                    
                    ";
        // line 54
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tour", [], "any", false, false, false, 54), "content", [], "any", false, false, false, 54);
        echo "
                
                    <div class=\"location-map detail-box\">
                        <div class=\"detail-title\">
                            <h3>Địa Chỉ Công Ty</h3>
                        </div>
                        <div class=\"map-frame\">
                           <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8345711138827!2d105.85127891440693!3d20.999267394161542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad7487f02633%3A0x6cbc72c99d36aab7!2sHANVINA%20TRAVEL!5e0!3m2!1sen!2s!4v1587652171884!5m2!1sen!2s\" width=\"100%\" height=\"auto\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                        </div>
                    </div>
                    <div class=\"share-buttons\">
                            <a target=\"_blank\" href=\"https://www.facebook.com/hanvinatravel\" class=\"btn-large btn-facebook\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i> Facebook</a>
                            <p> <span>350</span> shares</p>
                            <a target=\"_blank\" href=\"https://www.instagram.com/hanvina_travel/?fbclid=IwAR0gGFnwF8WJeb6Nj0UNaTg1jwAfZOnIz5ahUl4pD26ToqTX4XZ9O7Xbx1A\" class=\"btn-large btn-twitter\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i> instagram </a>
                    </div>
                </div>
            </div>
            <div id=\"sidebar-sticky\" class=\"col-md-4\">
                <aside class=\"detail-sidebar sidebar-wrapper\">
                    <div class=\"sidebar-item sidebar-item-dark\">
                        <div class=\"detail-title\">
                            <h3>NHẬN TƯ VẤN MIỄN PHÍ:</h3>
                        </div>
                        <form class=\"form_contact\">
                            <div class=\"row\">
                                <div class=\"form-group col-xs-12\">
                                    <input type=\"text\" name=\"name\" class=\"form-control\" id=\"f_name\" placeholder=\"Họ tên\">
                                </div>
                                <div class=\"form-group col-xs-6\">
                                    <input type=\"email\" name=\"email\" class=\"form-control\" id=\"f_email\" placeholder=\"Email\">
                                </div>
                                <div class=\"form-group col-xs-6 col-left-padding\">
                                   <input type=\"text\" name=\"phone\" class=\"form-control\" id=\"f_phone\" placeholder=\"Số điện thoại\">
                                </div>
                                <div class=\"textarea col-xs-12\">
                                   <textarea name=\"content\" id=\"f_content\" placeholder=\"Ghi chú\"></textarea>
                                </div>
                                
                                    
                                <div class=\"col-xs-12\">
                                    <div class=\"comment-btn\">
                                        <input type=\"submit\" class=\"btn-blue btn-red\" value=\"Đặt ngay\">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class=\"sidebar-item\">
                        <div class=\"detail-title\">
                            <h3>Liên quan</h3>
                        </div>
                        <div class=\"sidebar-content sidebar-slider\">
                            ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tourRelateds", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
            // line 107
            echo "                            <div class=\"sidebar-package\">
                                <div class=\"sidebar-package-image\">
                                    <img height=\"270px\" src=\"";
            // line 109
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["related"], "image", [], "any", false, false, false, 109));
            echo "\" alt=\"Images\">
                                </div>
                                <div class=\"destination-content sidebar-package-content\">
                                    <h4><a href=\"";
            // line 112
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("details-tour", ["slug" => twig_get_attribute($this->env, $this->source, $context["related"], "slug", [], "any", false, false, false, 112)]);
            echo "\">";
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["related"], "title", [], "any", false, false, false, 112), 60]);
            echo "</a></h4>
                                    
                                    <p><span>";
            // line 114
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["related"], "price", [], "any", false, false, false, 114)), "html", null, true);
            echo "</span>/KHÁCH </p>
                                    <a href=\"";
            // line 115
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("details-tour", ["slug" => twig_get_attribute($this->env, $this->source, $context["related"], "slug", [], "any", false, false, false, 115)]);
            echo "\" class=\"btn-blue btn-red\">Xem Thêm</a>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                        </div>
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
</section>";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tour/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 119,  217 => 115,  213 => 114,  206 => 112,  200 => 109,  196 => 107,  192 => 106,  137 => 54,  131 => 50,  122 => 47,  114 => 45,  110 => 44,  105 => 41,  96 => 38,  86 => 36,  82 => 35,  68 => 24,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"breadcrumb-outer text-center\">
    <div class=\"container\">
        <div class=\"breadcrumb-content\">
            <h1 style=\"    text-transform: uppercase;\"> {{__SELF__.tour.title|raw}}</h1>
            <nav aria-label=\"breadcrumb\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{'homepage' | page}}\">Trang chủ</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Chi tiết</li>
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
                            <h2>{{__SELF__.tour.title|raw}}</h2>
                            <div class=\"deal-rating\">
                            
                            </div>
                        </div>
                    </div>
                    <div class=\"gallery detail-box\">
                        <!-- Paradise Slider -->
                        <div id=\"in_th_030\" class=\"carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint\" data-ride=\"carousel\" data-pause=\"hover\" data-interval=\"4000\" data-duration=\"2000\">
                            <!-- Indicators -->
                            <ol class=\"carousel-indicators\">
                                {% for key, photo in __SELF__.tour.photos %}
                                <li data-target=\"#in_th_030\" data-slide-to=\"{{key}}\" {% if key == 0 %} class=\"active\" {% endif %}>
                                    <!-- 1st Indicator Image -->
                                    <img height=\"100px\" src=\"{{photo.getPath()}}\" />
                                </li>
                                {% endfor %}
                            </ol> <!-- /Indicators -->
                            <!-- Wrapper For Slides -->
                            <div class=\"carousel-inner\" role=\"listbox\">
                                {% for key, photo in __SELF__.tour.photos %}
                                <div class=\"item {% if key == 0 %} active {% endif %}\">
                                    <!-- Slide Background -->
                                    <img src=\"{{photo.getPath()}}\" alt=\"in_th_030_01\" />                                        
                                </div>
                                {% endfor %}
                            </div> <!-- End of Wrapper For Slides -->
                        </div> <!-- End Paradise Slider -->
                    </div>
                    
                    {{__SELF__.tour.content|raw}}
                
                    <div class=\"location-map detail-box\">
                        <div class=\"detail-title\">
                            <h3>Địa Chỉ Công Ty</h3>
                        </div>
                        <div class=\"map-frame\">
                           <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8345711138827!2d105.85127891440693!3d20.999267394161542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad7487f02633%3A0x6cbc72c99d36aab7!2sHANVINA%20TRAVEL!5e0!3m2!1sen!2s!4v1587652171884!5m2!1sen!2s\" width=\"100%\" height=\"auto\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                        </div>
                    </div>
                    <div class=\"share-buttons\">
                            <a target=\"_blank\" href=\"https://www.facebook.com/hanvinatravel\" class=\"btn-large btn-facebook\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i> Facebook</a>
                            <p> <span>350</span> shares</p>
                            <a target=\"_blank\" href=\"https://www.instagram.com/hanvina_travel/?fbclid=IwAR0gGFnwF8WJeb6Nj0UNaTg1jwAfZOnIz5ahUl4pD26ToqTX4XZ9O7Xbx1A\" class=\"btn-large btn-twitter\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i> instagram </a>
                    </div>
                </div>
            </div>
            <div id=\"sidebar-sticky\" class=\"col-md-4\">
                <aside class=\"detail-sidebar sidebar-wrapper\">
                    <div class=\"sidebar-item sidebar-item-dark\">
                        <div class=\"detail-title\">
                            <h3>NHẬN TƯ VẤN MIỄN PHÍ:</h3>
                        </div>
                        <form class=\"form_contact\">
                            <div class=\"row\">
                                <div class=\"form-group col-xs-12\">
                                    <input type=\"text\" name=\"name\" class=\"form-control\" id=\"f_name\" placeholder=\"Họ tên\">
                                </div>
                                <div class=\"form-group col-xs-6\">
                                    <input type=\"email\" name=\"email\" class=\"form-control\" id=\"f_email\" placeholder=\"Email\">
                                </div>
                                <div class=\"form-group col-xs-6 col-left-padding\">
                                   <input type=\"text\" name=\"phone\" class=\"form-control\" id=\"f_phone\" placeholder=\"Số điện thoại\">
                                </div>
                                <div class=\"textarea col-xs-12\">
                                   <textarea name=\"content\" id=\"f_content\" placeholder=\"Ghi chú\"></textarea>
                                </div>
                                
                                    
                                <div class=\"col-xs-12\">
                                    <div class=\"comment-btn\">
                                        <input type=\"submit\" class=\"btn-blue btn-red\" value=\"Đặt ngay\">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class=\"sidebar-item\">
                        <div class=\"detail-title\">
                            <h3>Liên quan</h3>
                        </div>
                        <div class=\"sidebar-content sidebar-slider\">
                            {% for related in __SELF__.tourRelateds %}
                            <div class=\"sidebar-package\">
                                <div class=\"sidebar-package-image\">
                                    <img height=\"270px\" src=\"{{related.image |  media}}\" alt=\"Images\">
                                </div>
                                <div class=\"destination-content sidebar-package-content\">
                                    <h4><a href=\"{{ 'details-tour' | page({'slug': related.slug})}}\">{{html_limit(related.title,60)}}</a></h4>
                                    
                                    <p><span>{{related.price|number_format}}</span>/KHÁCH </p>
                                    <a href=\"{{ 'details-tour' | page({'slug': related.slug})}}\" class=\"btn-blue btn-red\">Xem Thêm</a>
                                </div>
                            </div>
                            {% endfor %}
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
</section>", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tour/default.htm", "");
    }
}
