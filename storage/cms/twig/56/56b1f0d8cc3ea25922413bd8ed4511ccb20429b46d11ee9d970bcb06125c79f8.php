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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/customer/default.htm */
class __TwigTemplate_36e17e1e4f4cd0eea7dd0eaeee99af2ff2f92650cad802d5c8f405951bc42aff extends \Twig\Template
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
        $context["listcustomer"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "listcustomer", [], "any", false, false, false, 1);
        // line 2
        echo "
<section class=\"breadcrumb-outer text-center\">
    <div class=\"container\">
        <div class=\"breadcrumb-content\">
            <h2>KHÁCH HÀNG</h2>
            <nav aria-label=\"breadcrumb\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">Trang chủ</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Khách hàng</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class=\"section-overlay\"></div>
</section>
<section class=\"blog-list grid-list\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-sm-12\">
                <div class=\"blog-wrapper\">
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listcustomer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 23
            echo "                        <div class=\"blog-item grid-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-5 col-xs-12\">
                                    <div class=\"blog-image\">
                                        <img src=\"";
            // line 27
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["customer"], "image", [], "any", false, false, false, 27));
            echo "\" alt=\"Image\">
                                    </div>
                                </div>
                                <div class=\"col-sm-7 col-xs-12\">
                                    <div class=\"blog-content\">

                                        <h3><a href=\"";
            // line 33
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("details-customer", ["slug" => twig_get_attribute($this->env, $this->source, $context["customer"], "slug", [], "any", false, false, false, 33)]);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer"], "title", [], "any", false, false, false, 33);
            echo "</a></h3>
                                       <div class=\"blog-date\"><p><i class=\"fa fa-clock-o\"></i> Ngày đăng : ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "created_at", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
            echo " </p></div>
                                        <p>";
            // line 35
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["customer"], "introductory", [], "any", false, false, false, 35), 200]);
            echo "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </div>
                <div class=\"col-sm-12\">
                    <div class=\"pagination-content\">
                        ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, ($context["listcustomer"] ?? null), "render", [], "any", false, false, false, 44);
        echo "
                    </div>
                </div>
            </div>
            <div id=\"sidebar-sticky\" class=\"col-md-4 col-sm-12\">
                <aside class=\"detail-sidebar sidebar-wrapper\">
                    <div class=\"item-sidebar\">
                        <!-- tin mới -->
                          ";
        // line 52
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/recent-post"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "                        <!-- tin nổi bật -->
                          ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/popular-post"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/customer/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 55,  128 => 54,  125 => 53,  121 => 52,  110 => 44,  105 => 41,  93 => 35,  89 => 34,  83 => 33,  74 => 27,  68 => 23,  64 => 22,  48 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set listcustomer = __SELF__.listcustomer %}

<section class=\"breadcrumb-outer text-center\">
    <div class=\"container\">
        <div class=\"breadcrumb-content\">
            <h2>KHÁCH HÀNG</h2>
            <nav aria-label=\"breadcrumb\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{'homepage' | page}}\">Trang chủ</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Khách hàng</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class=\"section-overlay\"></div>
</section>
<section class=\"blog-list grid-list\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-sm-12\">
                <div class=\"blog-wrapper\">
                    {% for customer in listcustomer %}
                        <div class=\"blog-item grid-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-5 col-xs-12\">
                                    <div class=\"blog-image\">
                                        <img src=\"{{customer.image | media}}\" alt=\"Image\">
                                    </div>
                                </div>
                                <div class=\"col-sm-7 col-xs-12\">
                                    <div class=\"blog-content\">

                                        <h3><a href=\"{{ 'details-customer' | page({slug:customer.slug}) }}\">{{customer.title | raw}}</a></h3>
                                       <div class=\"blog-date\"><p><i class=\"fa fa-clock-o\"></i> Ngày đăng : {{ customer.created_at|date('d/m/Y') }} </p></div>
                                        <p>{{html_limit(customer.introductory,200)}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor%}
                </div>
                <div class=\"col-sm-12\">
                    <div class=\"pagination-content\">
                        {{ listcustomer.render|raw }}
                    </div>
                </div>
            </div>
            <div id=\"sidebar-sticky\" class=\"col-md-4 col-sm-12\">
                <aside class=\"detail-sidebar sidebar-wrapper\">
                    <div class=\"item-sidebar\">
                        <!-- tin mới -->
                          {% partial 'site/recent-post' %}
                        <!-- tin nổi bật -->
                          {% partial 'site/popular-post' %}
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/customer/default.htm", "");
    }
}
