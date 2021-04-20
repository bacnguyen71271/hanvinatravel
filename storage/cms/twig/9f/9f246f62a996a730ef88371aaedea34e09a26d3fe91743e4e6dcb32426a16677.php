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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/footer.htm */
class __TwigTemplate_373fd3530891150bd82176f7afc72054c084d1c26c258e69032e3ca7e7b5e5b9 extends \Twig\Template
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
        echo "<div class=\"footer-upper\">
            <div class=\"container\">
                <div class=\"footer-links\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-12\">
                            <div class=\"footer-about footer-margin\">
                                <h3>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ HANVINA TRAVEL</h3>
                                <div class=\"about-location\">
                                    <ul>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Số 10 phố Chùa Quỳnh, phường Quỳnh Lôi, quận Hai Bà Trưng, Hà Nội</li>
                                        <li><i class=\"fa fa-phone\"></i>(0243).62.72.777</li>                      
                                        <li><i class=\"fa fa-mobile\"></i>&nbsp;&nbsp;0912.944.666</li>                      
                                        <li><i class=\"fa fa-envelope\"></i> <a href=\"mailto:info@hanvinatravel.vn\" class=\"__cf_email__\" >info@hanvinatravel.vn</a></li>
                                    </ul> 
                                </div>
                                <div class=\"footer-social-links\">
                                    <ul>
                                        <li class=\"social-icon\"><a target=\"_blank\" href=\"https://www.facebook.com/hanvinatravel\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                        <li class=\"social-icon\"><a target=\"_blank\" href=\"https://www.instagram.com/hanvina_travel/?fbclid=IwAR0gGFnwF8WJeb6Nj0UNaTg1jwAfZOnIz5ahUl4pD26ToqTX4XZ9O7Xbx1A\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                        <li class=\"social-icon\"><a href=\"#\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-4\">
                            <div class=\"footer-recent-post footer-margin\">
                                <h3>TIN TỨC</h3>
                                <ul>
                                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newshomepage"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["newsbottom"]) {
            // line 30
            echo "                                    <li>
                                        <div class=\"recent-post-item\">
                                            <div class=\"recent-post-image\">
                                                <img src=\"";
            // line 33
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["newsbottom"], "image", [], "any", false, false, false, 33));
            echo "\" alt=\"Image\">
                                            </div>
                                            <div class=\"recent-post-content\">
                                                <h4><a href=\"";
            // line 36
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("posts", ["slug" => twig_get_attribute($this->env, $this->source, $context["newsbottom"], "slug", [], "any", false, false, false, 36)]);
            echo "\">";
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["newsbottom"], "title", [], "any", false, false, false, 36), 30]);
            echo "</a></h4>
                                                <p>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsbottom"], "created_at", [], "any", false, false, false, 37), "d/m"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newsbottom"], "created_at", [], "any", false, false, false, 37), "Y"), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsbottom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                                    
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-4\">
                            <div class=\"footer-links-list\">
                                <div class=\"footer-instagram\">
                                    <h3>CHỨNG NHẬN</h3>
                                    <div class=\"footer-widget-list\">
                                          
                                        <p style=\"font-weight:600\">Giấy phép LHQT số:</p>
                                        <p style=\"font-weight:600\">01-1074/2020/TCDL-GP LHQT</p>
                                        <p style=\"font-weight:600\">Hội viên chính thức của HHDLVN</p>
                                        <p style=\"font-weight:600\">Hội viên chính thức của HHLHVN</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class=\"col-md-3 col-sm-4\">
                            <div class=\"footer-links-list\">
                                <div class=\"footer-instagram\">
                                    <h3> VỊ TRÍ</h3>
                                    <div class=\"footer-widget-list\">
                                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8345711138827!2d105.85127891440693!3d20.999267394161542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad7487f02633%3A0x6cbc72c99d36aab7!2sHANVINA%20TRAVEL!5e0!3m2!1sen!2s!4v1587652171884!5m2!1sen!2s\" width=\"270\" height=\"230\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"copyright-content\">
                            <p>2020 <i class=\"fa fa-copyright\" aria-hidden=\"true\"></i>Bản quyền trang web thuộc hanvinatravel.vn</p>
                        </div>
                    </div>
                    <div class=\"col-xs-6\">
                        <div class=\"payment-content\">
                            <ul>
                                <li>Chấp nhận thanh toán:</li>
                                <li>
                                    <img src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/payment1.png");
        echo "\" alt=\"Image\">
                                </li>
                                <li>
                                    <img src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/payment2.png");
        echo "\" alt=\"Image\">
                                </li>
                                <li>
                                    <img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/payment3.png");
        echo "\" alt=\"Image\">
                                </li>
                                <li>
                                    <img src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/payment4.png");
        echo "\" alt=\"Image\">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 97,  161 => 94,  155 => 91,  149 => 88,  101 => 42,  88 => 37,  82 => 36,  76 => 33,  71 => 30,  67 => 29,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer-upper\">
            <div class=\"container\">
                <div class=\"footer-links\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-12\">
                            <div class=\"footer-about footer-margin\">
                                <h3>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ HANVINA TRAVEL</h3>
                                <div class=\"about-location\">
                                    <ul>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Số 10 phố Chùa Quỳnh, phường Quỳnh Lôi, quận Hai Bà Trưng, Hà Nội</li>
                                        <li><i class=\"fa fa-phone\"></i>(0243).62.72.777</li>                      
                                        <li><i class=\"fa fa-mobile\"></i>&nbsp;&nbsp;0912.944.666</li>                      
                                        <li><i class=\"fa fa-envelope\"></i> <a href=\"mailto:info@hanvinatravel.vn\" class=\"__cf_email__\" >info@hanvinatravel.vn</a></li>
                                    </ul> 
                                </div>
                                <div class=\"footer-social-links\">
                                    <ul>
                                        <li class=\"social-icon\"><a target=\"_blank\" href=\"https://www.facebook.com/hanvinatravel\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                        <li class=\"social-icon\"><a target=\"_blank\" href=\"https://www.instagram.com/hanvina_travel/?fbclid=IwAR0gGFnwF8WJeb6Nj0UNaTg1jwAfZOnIz5ahUl4pD26ToqTX4XZ9O7Xbx1A\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                                        <li class=\"social-icon\"><a href=\"#\"><i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-4\">
                            <div class=\"footer-recent-post footer-margin\">
                                <h3>TIN TỨC</h3>
                                <ul>
                                    {%for newsbottom in newshomepage %}
                                    <li>
                                        <div class=\"recent-post-item\">
                                            <div class=\"recent-post-image\">
                                                <img src=\"{{newsbottom.image | media}}\" alt=\"Image\">
                                            </div>
                                            <div class=\"recent-post-content\">
                                                <h4><a href=\"{{ 'posts' | page({slug:newsbottom.slug}) }}\">{{html_limit(newsbottom.title,30) | raw}}</a></h4>
                                                <p>{{newsbottom.created_at |date(\"d/m\")}}/{{newsbottom.created_at |date(\"Y\")}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    {% endfor %}
                                    
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-4\">
                            <div class=\"footer-links-list\">
                                <div class=\"footer-instagram\">
                                    <h3>CHỨNG NHẬN</h3>
                                    <div class=\"footer-widget-list\">
                                          
                                        <p style=\"font-weight:600\">Giấy phép LHQT số:</p>
                                        <p style=\"font-weight:600\">01-1074/2020/TCDL-GP LHQT</p>
                                        <p style=\"font-weight:600\">Hội viên chính thức của HHDLVN</p>
                                        <p style=\"font-weight:600\">Hội viên chính thức của HHLHVN</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class=\"col-md-3 col-sm-4\">
                            <div class=\"footer-links-list\">
                                <div class=\"footer-instagram\">
                                    <h3> VỊ TRÍ</h3>
                                    <div class=\"footer-widget-list\">
                                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8345711138827!2d105.85127891440693!3d20.999267394161542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad7487f02633%3A0x6cbc72c99d36aab7!2sHANVINA%20TRAVEL!5e0!3m2!1sen!2s!4v1587652171884!5m2!1sen!2s\" width=\"270\" height=\"230\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"copyright-content\">
                            <p>2020 <i class=\"fa fa-copyright\" aria-hidden=\"true\"></i>Bản quyền trang web thuộc hanvinatravel.vn</p>
                        </div>
                    </div>
                    <div class=\"col-xs-6\">
                        <div class=\"payment-content\">
                            <ul>
                                <li>Chấp nhận thanh toán:</li>
                                <li>
                                    <img src=\"{{ 'assets/image/payment1.png'| theme}}\" alt=\"Image\">
                                </li>
                                <li>
                                    <img src=\"{{ 'assets/image/payment2.png'| theme}}\" alt=\"Image\">
                                </li>
                                <li>
                                    <img src=\"{{ 'assets/image/payment3.png'| theme}}\" alt=\"Image\">
                                </li>
                                <li>
                                    <img src=\"{{ 'assets/image/payment4.png'| theme}}\" alt=\"Image\">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/footer.htm", "");
    }
}
