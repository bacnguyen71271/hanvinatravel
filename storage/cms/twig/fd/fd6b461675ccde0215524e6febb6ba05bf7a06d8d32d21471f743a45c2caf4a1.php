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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tours/tourfilter.htm */
class __TwigTemplate_a65521fa4c10cc6e07b99f674c9ddc013cd0ec845171f6db3f5c085611dda29a extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "<div class=\"col-md-4 col-sm-6 category-tour\">
    <div class=\"package-item\">
        <div class=\"package-image\">
            <img height=\"270px\" src=\"";
            // line 5
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 5));
            echo "\" alt=\"Image\">
            
        </div>
        <div class=\"package-content\">
            <h3>";
            // line 9
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 9), 60]);
            echo "</h3>
            ";
            // line 10
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["post"], "introductory", [], "any", false, false, false, 10), 50]);
            echo "
            <div class=\"package-price\">
                                
                    <p><span>";
            // line 13
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "price", [], "any", false, false, false, 13)), "html", null, true);
            echo "</span>VND/KHÁCH </p>
                </div>
            <div class=\"package-info\">
                <a href=\"";
            // line 16
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["page"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 16)]);
            echo "\" class=\"btn-blue btn-red\">View more details</a>
            </div>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        if ((($context["totalPage"] ?? null) > 1)) {
            // line 23
            echo "<div class=\"col-md-12\">
    <div class=\"pagination-content\">
        <ul class=\"pagination\">
            <li ";
            // line 26
            if ((1 == ($context["perPage"] ?? null))) {
                echo " class=\"disabled\" ";
            }
            echo "><span data-page=\"";
            echo twig_escape_filter($this->env, (($context["perPage"] ?? null) - 1), "html", null, true);
            echo "\">«</span></li>
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["totalPage"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 28
                echo "            <li ";
                if (($context["i"] == ($context["perPage"] ?? null))) {
                    echo " class=\"active not-disable\" ";
                }
                echo " data-page=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"><span data-page=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</span></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            <li ";
            if ((($context["totalPage"] ?? null) == ($context["perPage"] ?? null))) {
                echo " class=\"disabled\" ";
            }
            echo "><span data-page=\"";
            echo twig_escape_filter($this->env, (($context["perPage"] ?? null) + 1), "html", null, true);
            echo "\">»</span></li>
        </ul>
    </div> 
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tours/tourfilter.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  100 => 28,  96 => 27,  88 => 26,  83 => 23,  81 => 22,  69 => 16,  63 => 13,  57 => 10,  53 => 9,  46 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for post in posts %}
<div class=\"col-md-4 col-sm-6 category-tour\">
    <div class=\"package-item\">
        <div class=\"package-image\">
            <img height=\"270px\" src=\"{{post.image | media}}\" alt=\"Image\">
            
        </div>
        <div class=\"package-content\">
            <h3>{{html_limit(post.title,60)}}</h3>
            {{html_limit(post.introductory,50)}}
            <div class=\"package-price\">
                                
                    <p><span>{{post.price|number_format}}</span>VND/KHÁCH </p>
                </div>
            <div class=\"package-info\">
                <a href=\"{{page|page({'slug': post.slug})}}\" class=\"btn-blue btn-red\">View more details</a>
            </div>
        </div>
    </div>
</div>
{% endfor %}
{% if totalPage > 1 %}
<div class=\"col-md-12\">
    <div class=\"pagination-content\">
        <ul class=\"pagination\">
            <li {% if 1 == perPage %} class=\"disabled\" {% endif %}><span data-page=\"{{perPage - 1}}\">«</span></li>
            {% for i in 1 .. totalPage %}
            <li {% if i == perPage %} class=\"active not-disable\" {% endif %} data-page=\"{{i}}\"><span data-page=\"{{i}}\">{{i}}</span></li>
            {% endfor %}
            <li {% if totalPage == perPage %} class=\"disabled\" {% endif %}><span data-page=\"{{perPage + 1}}\">»</span></li>
        </ul>
    </div> 
</div>
{% endif %}", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tours/tourfilter.htm", "");
    }
}
