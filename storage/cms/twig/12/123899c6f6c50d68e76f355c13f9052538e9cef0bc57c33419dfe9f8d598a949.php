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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/homepagecombotours/default.htm */
class __TwigTemplate_de9e8cd6c5bac532e4a92f88a47c569f453d670336de66d2f3cace497abe5ba1 extends \Twig\Template
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
        echo "<section class=\"popular-packages\">
    <div class=\"container\">
        <div class=\"section-title text-center\">
            <h2>COMBO HOT</h2>
            <div class=\"section-icon\">
               <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/hanvina.png");
        echo "\" class=\"section-icon-img\"/>
            </div>
            <p>Tổng hợp những Combo du lịch được nhiều khách hàng quan tâm nhất</p>

        </div>
        <div class=\"row package-slider slider-button\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "            <div class=\"col-sm-4\">
                <div class=\"package-item\">
                    <div class=\"package-image\"> 
                             <img  height=\"270px\" src=\"";
            // line 16
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 16));
            echo "\" alt=\"Image\">
                    </div>
                    <div class=\"package-content\">
                        <h3>";
            // line 19
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 19), 60]);
            echo "</h3>
                        ";
            // line 20
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["post"], "introductory", [], "any", false, false, false, 20), 50]);
            echo "
                        <div class=\"package-price\">            
                                     <p><span>";
            // line 22
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "price", [], "any", false, false, false, 22)), "html", null, true);
            echo "</span>VND/KHÁCH </p>
                            </div>
                        <div class=\"package-info\">
                            <a href=\"";
            // line 25
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("details-tour.htm", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 25)]);
            echo "\" class=\"btn-blue btn-red mg-top-20\">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    </div>
     <span class=\"txt-alg-center\">
        <div class=\"price-btn\">
            <a href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("combo-tour");
        echo "\" class=\"btn-blue-border\">Xem Thêm</a>
        </div>
    </span>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/homepagecombotours/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 35,  95 => 31,  83 => 25,  77 => 22,  72 => 20,  68 => 19,  62 => 16,  57 => 13,  53 => 12,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"popular-packages\">
    <div class=\"container\">
        <div class=\"section-title text-center\">
            <h2>COMBO HOT</h2>
            <div class=\"section-icon\">
               <img src=\"{{ 'assets/image/hanvina.png' | theme }}\" class=\"section-icon-img\"/>
            </div>
            <p>Tổng hợp những Combo du lịch được nhiều khách hàng quan tâm nhất</p>

        </div>
        <div class=\"row package-slider slider-button\">
            {% for post in __SELF__.posts %}
            <div class=\"col-sm-4\">
                <div class=\"package-item\">
                    <div class=\"package-image\"> 
                             <img  height=\"270px\" src=\"{{post.image|media}}\" alt=\"Image\">
                    </div>
                    <div class=\"package-content\">
                        <h3>{{html_limit(post.title,60)}}</h3>
                        {{html_limit(post.introductory,50)}}
                        <div class=\"package-price\">            
                                     <p><span>{{post.price|number_format}}</span>VND/KHÁCH </p>
                            </div>
                        <div class=\"package-info\">
                            <a href=\"{{'details-tour.htm' | page({'slug': post.slug})}}\" class=\"btn-blue btn-red mg-top-20\">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
     <span class=\"txt-alg-center\">
        <div class=\"price-btn\">
            <a href=\"{{'combo-tour' | page}}\" class=\"btn-blue-border\">Xem Thêm</a>
        </div>
    </span>
</section>", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/homepagecombotours/default.htm", "");
    }
}
