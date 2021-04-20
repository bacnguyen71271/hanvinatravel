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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tours2/default.htm */
class __TwigTemplate_4bc7fd570e12eb18a8277ae4f59e57f9635aa7d403f2c14297fb91a088f44913 extends \Twig\Template
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
        echo "<!-- Destinations -->
             
<section class=\"destinations destination-padding\">
    <div class=\"container\">
         <div class=\"aside-item\">
                    <i class=\"fa fa-search icon\"></i>
                    <div class=\"aside-title\">
                        <span>ĐỊA DANH</span>
                    </div>
                    <div class=\"aside-content\">
                        <ul>
                            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "places", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 13
            echo "                            <li class=\"filter-item filter-item--check-box\">
                                <label class=\"checkbox_item theme_blue\">
                                    <span>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</span>
                                    <input type=\"checkbox\" class=\"ck-places\" name=\"places[";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["place"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
                                    <span class=\"checkmark\"></span>
                                </label>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                        </ul>
                    </div>
                </div>
        <div class=\"row mix asia\">
           
            <div class=\"col-md-12\" id=\"tour-area\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 28
            echo "                <div class=\"col-md-4 col-sm-6 category-tour\">
                    <div class=\"package-item\">
                        <div class=\"package-image\">
                             <img height=\"270px\"  src=\"";
            // line 31
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 31));
            echo "\" alt=\"Image\">
                        </div>
                        <div class=\"package-content\">
                            <h3>";
            // line 34
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 34), 60]);
            echo " ...</h3>
                            ";
            // line 35
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["post"], "introductory", [], "any", false, false, false, 35), 50]);
            echo "
                            <div class=\"package-price\">
                                    <p><span>";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "price", [], "any", false, false, false, 37)), "html", null, true);
            echo "</span>VND/KHÁCH </p>
                                </div>
                            <div class=\"package-info\">
                                <a href=\"";
            // line 40
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "page", [], "any", false, false, false, 40), ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 40)]);
            echo "\" class=\"btn-blue btn-red\">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, false, 46), "lastPage", [], "any", false, false, false, 46) > 1)) {
            // line 47
            echo "                <div class=\"col-md-12\">
                    <div class=\"pagination-content\">
                        <ul class=\"pagination\">
                            <li class=\"disabled\"><span data-page=\"";
            // line 50
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "perPage", [], "any", false, false, false, 50) - 1), "html", null, true);
            echo "\">«</span></li>
                            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, false, 51), "lastPage", [], "any", false, false, false, 51)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 52
                echo "                            <li ";
                if (($context["i"] == twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "perPage", [], "any", false, false, false, 52))) {
                    echo " class=\"active\" ";
                }
                echo "><span data-page=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</span></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                            <li><span data-page=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "perPage", [], "any", false, false, false, 54) + 1), "html", null, true);
            echo "\">»</span></li>
                        </ul>
                    </div> 
                </div>
                ";
        }
        // line 59
        echo "            </div>
        </div>
    </div>
</section>
";
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::script")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tours2/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 63,  165 => 59,  156 => 54,  141 => 52,  137 => 51,  133 => 50,  128 => 47,  125 => 46,  113 => 40,  107 => 37,  102 => 35,  98 => 34,  92 => 31,  87 => 28,  83 => 27,  75 => 21,  62 => 16,  58 => 15,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Destinations -->
             
<section class=\"destinations destination-padding\">
    <div class=\"container\">
         <div class=\"aside-item\">
                    <i class=\"fa fa-search icon\"></i>
                    <div class=\"aside-title\">
                        <span>ĐỊA DANH</span>
                    </div>
                    <div class=\"aside-content\">
                        <ul>
                            {% for place in __SELF__.places %}
                            <li class=\"filter-item filter-item--check-box\">
                                <label class=\"checkbox_item theme_blue\">
                                    <span>{{place.name}}</span>
                                    <input type=\"checkbox\" class=\"ck-places\" name=\"places[{{place.id}}]\" value=\"{{place.id}}\">
                                    <span class=\"checkmark\"></span>
                                </label>
                            </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
        <div class=\"row mix asia\">
           
            <div class=\"col-md-12\" id=\"tour-area\">
                {% for post in __SELF__.posts %}
                <div class=\"col-md-4 col-sm-6 category-tour\">
                    <div class=\"package-item\">
                        <div class=\"package-image\">
                             <img height=\"270px\"  src=\"{{post.image | media}}\" alt=\"Image\">
                        </div>
                        <div class=\"package-content\">
                            <h3>{{html_limit(post.title,60)}} ...</h3>
                            {{html_limit(post.introductory,50)}}
                            <div class=\"package-price\">
                                    <p><span>{{post.price|number_format}}</span>VND/KHÁCH </p>
                                </div>
                            <div class=\"package-info\">
                                <a href=\"{{__SELF__.page|page({'slug': post.slug})}}\" class=\"btn-blue btn-red\">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
                {% if __SELF__.posts.lastPage > 1 %}
                <div class=\"col-md-12\">
                    <div class=\"pagination-content\">
                        <ul class=\"pagination\">
                            <li class=\"disabled\"><span data-page=\"{{__SELF__.perPage - 1}}\">«</span></li>
                            {% for i in 1 .. __SELF__.posts.lastPage %}
                            <li {% if i == __SELF__.perPage %} class=\"active\" {% endif %}><span data-page=\"{{i}}\">{{i}}</span></li>
                            {% endfor %}
                            <li><span data-page=\"{{__SELF__.perPage + 1}}\">»</span></li>
                        </ul>
                    </div> 
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</section>
{% partial __SELF__ ~ '::script' %}", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tours2/default.htm", "");
    }
}
