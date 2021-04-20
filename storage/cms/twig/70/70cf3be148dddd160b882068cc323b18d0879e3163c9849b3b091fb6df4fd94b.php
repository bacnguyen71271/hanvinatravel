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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/pages/homepage.htm */
class __TwigTemplate_f0cdb4a02f2ff6ff0bca3e3f6d22451760c433b72140ae0d772deab04b4fe766 extends \Twig\Template
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
        echo "<!-- Banner -->
<section id=\"home_banner\">
    <!-- Paradise Slider -->
    <div id=\"kenburns_061\" class=\"carousel slide ps_indicators_txt_icon ps_control_txt_icon kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart\" data-ride=\"carousel\" data-pause=\"hover\" data-interval=\"10000\" data-duration=\"2000\">
        <!-- Wrapper For Slides -->
        <div class=\"carousel-inner\" role=\"listbox\">

            <!-- First Slide -->
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["slide2"]) {
            // line 10
            echo "                <div class=\"item ";
            echo ((($context["key"] == 0)) ? ("active") : (""));
            echo "\">
                    <!-- Slide Background -->
                    <img src=\"";
            // line 12
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["slide2"], "image", [], "any", false, false, false, 12));
            echo "\" alt=\"kenburns_061_01\" />
                    <!-- Left Slide Text Layer -->
                    <div class=\"kenburns_061_slide\" data-animation=\"animated fadeInRight\">
                        <h2>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide2"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</h2>
                        <h1>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide2"], "price", [], "any", false, false, false, 16), "html", null, true);
            echo "</h1>

                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide2"], "link", [], "any", false, false, false, 18), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn-blue btn-red\">Xem chi tiết</a>
                    </div>
                    <!-- /Left Slide Text Layer -->
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['slide2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        </div>
        <!-- End of Wrapper For Slides -->


    </div>
    <!-- End Paradise Slider -->
</section>
<!-- Banner Ends -->


<!-- Popular Packages -->
<!-- home page combotour -->
";
        // line 36
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("homePageComboTours"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 37
        echo "<!-- Popular Packages Ends -->

<!-- Deals -->
<!-- home page tour -->
";
        // line 41
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("homePageTours"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 42
        echo "<!-- Deals Ends -->


<!-- Deals On Sale -->

<!-- Deals On Sale Ends -->



<!-- Blog -->
<section class=\"popular-packages\">
    <div class=\"container\">
        <div class=\"section-title text-center\">
            <h2>TIN TỨC</h2>
            <div class=\"section-icon\">
               <img src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/hanvina.png");
        echo "\" class=\"section-icon-img\"/>
            </div>

        </div>
        <div class=\"row package-slider slider-button\">
                  ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newshomepage"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["homepages"]) {
            // line 63
            echo "            <div class=\"col-sm-4\">
                <div class=\"package-item\">
                    <div class=\"package-image\">
                        <img height=\"270px\" src=\"";
            // line 66
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["homepages"], "image", [], "any", false, false, false, 66));
            echo "\" alt=\"Image\">
                       
                    </div>
                    <div class=\"package-content\">
                        <h3><a href=\"";
            // line 70
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("posts", ["slug" => twig_get_attribute($this->env, $this->source, $context["homepages"], "slug", [], "any", false, false, false, 70)]);
            echo "\">";
            echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, $context["homepages"], "title", [], "any", false, false, false, 70)]);
            echo "</a></h3>
                        <p>";
            // line 71
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["homepages"], "introductory", [], "any", false, false, false, 71), 25]);
            echo "</p>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['homepages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </div>
    </div>
    <span class=\"txt-alg-center\">
        <div class=\"price-btn\">
            <a href=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("news");
        echo "\" class=\"btn-blue-border\">Xem thêm</a>
        </div>
    </span>
</section>
<!-- Blog Ends -->

<!-- Countdown -->
<section class=\"countdown-section\">
    <div class=\"container\">
        <div class=\"countdown-title\">
            <h2> Những thông tin mà Quý khách đang nhìn thấy là tất cả <span>tâm huyết</span> và sự <span>chân thành</span> của chúng tôi !</h2> 
            <p>Cảm ơn Quý khách đã lựa chọn HanVina Travel.</p>
        </div>
    </div>
    <div class=\"testimonial-overlay\"></div>
</section>
<!-- Countdown Ends -->
<!-- Footer -->

<!-- Back to top ends -->";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 80,  170 => 76,  159 => 71,  153 => 70,  146 => 66,  141 => 63,  137 => 62,  129 => 57,  112 => 42,  108 => 41,  102 => 37,  98 => 36,  83 => 23,  72 => 18,  67 => 16,  63 => 15,  57 => 12,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Banner -->
<section id=\"home_banner\">
    <!-- Paradise Slider -->
    <div id=\"kenburns_061\" class=\"carousel slide ps_indicators_txt_icon ps_control_txt_icon kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart\" data-ride=\"carousel\" data-pause=\"hover\" data-interval=\"10000\" data-duration=\"2000\">
        <!-- Wrapper For Slides -->
        <div class=\"carousel-inner\" role=\"listbox\">

            <!-- First Slide -->
            {%for key,slide2 in  slides %}
                <div class=\"item {{key == 0 ? 'active' : ''}}\">
                    <!-- Slide Background -->
                    <img src=\"{{slide2.image | media}}\" alt=\"kenburns_061_01\" />
                    <!-- Left Slide Text Layer -->
                    <div class=\"kenburns_061_slide\" data-animation=\"animated fadeInRight\">
                        <h2>{{slide2.title}}</h2>
                        <h1>{{slide2.price}}</h1>

                        <a href=\"{{slide2.link}}\" target=\"_blank\" class=\"btn-blue btn-red\">Xem chi tiết</a>
                    </div>
                    <!-- /Left Slide Text Layer -->
                </div>
            {% endfor %}

        </div>
        <!-- End of Wrapper For Slides -->


    </div>
    <!-- End Paradise Slider -->
</section>
<!-- Banner Ends -->


<!-- Popular Packages -->
<!-- home page combotour -->
{% component 'homePageComboTours' %}
<!-- Popular Packages Ends -->

<!-- Deals -->
<!-- home page tour -->
{% component 'homePageTours' %}
<!-- Deals Ends -->


<!-- Deals On Sale -->

<!-- Deals On Sale Ends -->



<!-- Blog -->
<section class=\"popular-packages\">
    <div class=\"container\">
        <div class=\"section-title text-center\">
            <h2>TIN TỨC</h2>
            <div class=\"section-icon\">
               <img src=\"{{ 'assets/image/hanvina.png' | theme }}\" class=\"section-icon-img\"/>
            </div>

        </div>
        <div class=\"row package-slider slider-button\">
                  {% for homepages in newshomepage %}
            <div class=\"col-sm-4\">
                <div class=\"package-item\">
                    <div class=\"package-image\">
                        <img height=\"270px\" src=\"{{homepages.image|media}}\" alt=\"Image\">
                       
                    </div>
                    <div class=\"package-content\">
                        <h3><a href=\"{{ 'posts' | page({slug:homepages.slug}) }}\">{{ html_strip(homepages.title | raw)}}</a></h3>
                        <p>{{html_limit(homepages.introductory,25 )}}</p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    <span class=\"txt-alg-center\">
        <div class=\"price-btn\">
            <a href=\"{{'news' | page}}\" class=\"btn-blue-border\">Xem thêm</a>
        </div>
    </span>
</section>
<!-- Blog Ends -->

<!-- Countdown -->
<section class=\"countdown-section\">
    <div class=\"container\">
        <div class=\"countdown-title\">
            <h2> Những thông tin mà Quý khách đang nhìn thấy là tất cả <span>tâm huyết</span> và sự <span>chân thành</span> của chúng tôi !</h2> 
            <p>Cảm ơn Quý khách đã lựa chọn HanVina Travel.</p>
        </div>
    </div>
    <div class=\"testimonial-overlay\"></div>
</section>
<!-- Countdown Ends -->
<!-- Footer -->

<!-- Back to top ends -->", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/pages/homepage.htm", "");
    }
}
