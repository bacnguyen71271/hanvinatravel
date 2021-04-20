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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/postss/default.htm */
class __TwigTemplate_d1e165e37b54d600b344b81b1f93c8c46381c93106dfb8ddab1cc1e1dc2b289f extends \Twig\Template
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
        $context["tagpost"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tagpost", [], "any", false, false, false, 1);
        // line 2
        echo "<section class=\"breadcrumb-outer text-center\">
    <div class=\"container\">
        <div class=\"breadcrumb-content\">
            <h2>";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 5);
        echo "</h2>
            <nav aria-label=\"breadcrumb\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("news");
        echo "\">Tin tức</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Chi tiết bài viết</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class=\"section-overlay\"></div>
</section>
<section class=\"item-content\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"item-wrapper\">
                    <div class=\"cover-content\">
                        
                        <h2>";
        // line 24
        echo call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 24)]);
        echo "</h2>
                        <div class=\"author-detail\">
                            <span><a href=\"#\"><i class=\"fa fa-clock-o\"></i> Ngày đăng : ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", [], "any", false, false, false, 26), "d/m"), "html", null, true);
        echo "</a></span>
                        </div>
                    </div>
                    <div class=\"cover-image\">
                        <img src=\" ";
        // line 30
        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image", [], "any", false, false, false, 30));
        echo "\" alt=\"Image\">
                    </div>
                    <div class=\"item-detail\">
                        ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 33);
        echo "
                    </div>
                    <div class=\"related-posts\">
                        <div class=\"row\">
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tagpost"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tagposts"]) {
            // line 38
            echo "                            <div class=\"col-sm-6 col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"blog-image\">
                                        <img height=\"270px\" src=\"";
            // line 41
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["tagposts"], "image", [], "any", false, false, false, 41));
            echo "\" alt=\"Image\">
                                    </div>
                                    <div class=\"blog-content\">
                                        <div class=\"blog-date\">
                                            <p><i class=\"fa fa-clock-o\"></i> Ngày đăng : ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tagposts"], "create_at", [], "any", false, false, false, 45), "d/m"), "html", null, true);
            echo "</p>
                                        </div>
                                        <h3><a href=\"";
            // line 47
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("posts", ["slug" => twig_get_attribute($this->env, $this->source, $context["tagposts"], "slug", [], "any", false, false, false, 47)]);
            echo "\">";
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["tagposts"], "title", [], "any", false, false, false, 47), 40]);
            echo "</a></h3>
                                        ";
            // line 48
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["tagposts"], "introductory", [], "any", false, false, false, 48), 38]);
            echo "
                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tagposts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                           
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"sidebar-sticky\" class=\"col-md-4 col-sm-12\">
                <aside class=\"detail-sidebar sidebar-wrapper\">
                    <div class=\"item-sidebar\">
                        <!-- tin mới -->
                          ";
        // line 62
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/recent-post"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 63
        echo "                        <!-- tin nổi bật -->
                          ";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/popular-post"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/postss/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 65,  153 => 64,  150 => 63,  146 => 62,  135 => 53,  124 => 48,  118 => 47,  113 => 45,  106 => 41,  101 => 38,  97 => 37,  90 => 33,  84 => 30,  77 => 26,  72 => 24,  54 => 9,  50 => 8,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set tagpost = __SELF__.tagpost %}
<section class=\"breadcrumb-outer text-center\">
    <div class=\"container\">
        <div class=\"breadcrumb-content\">
            <h2>{{post.title | raw}}</h2>
            <nav aria-label=\"breadcrumb\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"{{'homepage' | page}}\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{'news' | page}}\">Tin tức</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Chi tiết bài viết</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class=\"section-overlay\"></div>
</section>
<section class=\"item-content\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"item-wrapper\">
                    <div class=\"cover-content\">
                        
                        <h2>{{ html_strip(post.title | raw)}}</h2>
                        <div class=\"author-detail\">
                            <span><a href=\"#\"><i class=\"fa fa-clock-o\"></i> Ngày đăng : {{ post.created_at|date('d/m') }}</a></span>
                        </div>
                    </div>
                    <div class=\"cover-image\">
                        <img src=\" {{ post.image |  media }}\" alt=\"Image\">
                    </div>
                    <div class=\"item-detail\">
                        {{ post.content | raw }}
                    </div>
                    <div class=\"related-posts\">
                        <div class=\"row\">
                            {%for tagposts in tagpost%}
                            <div class=\"col-sm-6 col-xs-12\">
                                <div class=\"blog-item\">
                                    <div class=\"blog-image\">
                                        <img height=\"270px\" src=\"{{tagposts.image | media}}\" alt=\"Image\">
                                    </div>
                                    <div class=\"blog-content\">
                                        <div class=\"blog-date\">
                                            <p><i class=\"fa fa-clock-o\"></i> Ngày đăng : {{tagposts.create_at|date('d/m')}}</p>
                                        </div>
                                        <h3><a href=\"{{ 'posts' | page({slug:tagposts.slug}) }}\">{{html_limit(tagposts.title,40) | raw }}</a></h3>
                                        {{html_limit(tagposts.introductory,38) | raw}}
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                           
                        </div>
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
</section>", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/postss/default.htm", "");
    }
}
