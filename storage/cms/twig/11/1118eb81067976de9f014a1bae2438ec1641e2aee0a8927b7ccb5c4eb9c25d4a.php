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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tintuc/default.htm */
class __TwigTemplate_63161255804239758df48de2790ad12eb188bb6760a2a2004b6fdf45ec00006e extends \Twig\Template
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
        $context["listcategory"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "listcategory", [], "any", false, false, false, 1);
        // line 2
        echo "
<section class=\"breadcrumb-outer text-center\">
    <div class=\"container\">
        <div class=\"breadcrumb-content\">
            <h2>TIN TỨC</h2>
            <nav aria-label=\"breadcrumb\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">Trang chủ</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Tin tức</li>
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
        $context['_seq'] = twig_ensure_traversable(($context["listcategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "                        <div class=\"blog-item grid-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-5 col-xs-12\">
                                    <div class=\"blog-image\">
                                        <img height=\"250px\" src=\"";
            // line 27
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 27));
            echo "\" alt=\"Image\">
                                    </div>
                                </div>
                                <div class=\"col-sm-7 col-xs-12\">
                                    <div class=\"blog-content\">

                                        <h3><a href=\"";
            // line 33
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("posts", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 33)]);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 33);
            echo "</a></h3>
                                       <div class=\"blog-date\"><p><i class=\"fa fa-clock-o\"></i> Ngày đăng : ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "created_at", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
            echo " </p></div>
                                        <p>";
            // line 35
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["category"], "introductory", [], "any", false, false, false, 35), 25]);
            echo "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </div>
                <div class=\"col-sm-12\">
                    <div class=\"pagination-content\">
                        ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, ($context["listcategory"] ?? null), "render", [], "any", false, false, false, 44);
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
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tintuc/default.htm";
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
        return new Source("{% set listcategory = __SELF__.listcategory %}

<section class=\"breadcrumb-outer text-center\">
    <div class=\"container\">
        <div class=\"breadcrumb-content\">
            <h2>TIN TỨC</h2>
            <nav aria-label=\"breadcrumb\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{'homepage' | page}}\">Trang chủ</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Tin tức</li>
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
                    {% for category in listcategory %}
                        <div class=\"blog-item grid-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-5 col-xs-12\">
                                    <div class=\"blog-image\">
                                        <img height=\"250px\" src=\"{{category.image | media}}\" alt=\"Image\">
                                    </div>
                                </div>
                                <div class=\"col-sm-7 col-xs-12\">
                                    <div class=\"blog-content\">

                                        <h3><a href=\"{{ 'posts' | page({slug:category.slug}) }}\">{{category.title | raw}}</a></h3>
                                       <div class=\"blog-date\"><p><i class=\"fa fa-clock-o\"></i> Ngày đăng : {{ category.created_at|date('d/m/Y') }} </p></div>
                                        <p>{{html_limit(category.introductory,25)}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor%}
                </div>
                <div class=\"col-sm-12\">
                    <div class=\"pagination-content\">
                        {{ listcategory.render|raw }}
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
</section>", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tintuc/default.htm", "");
    }
}
