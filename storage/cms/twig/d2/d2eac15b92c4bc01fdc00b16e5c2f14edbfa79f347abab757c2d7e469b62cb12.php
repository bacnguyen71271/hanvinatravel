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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/popular-post.htm */
class __TwigTemplate_9525d46334f2ad01dd7edc3833c7d31c39f64c36ef2872cd9d28aba7ce2d26df extends \Twig\Template
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
        echo "<div class=\"popular-post sidebar-item\">
                            <div class=\"detail-title\">
                                <h3>Tin nổi bật</h3>
                            </div>
                            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listrecents"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["popular"]) {
            // line 6
            echo "                            <div class=\"popular-item\">
                                <div class=\"popular-content\">
                                    <span class=\"item-no\">";
            // line 8
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo "</span>
                                    <h4><a href=\"";
            // line 9
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("posts", ["slug" => twig_get_attribute($this->env, $this->source, $context["popular"], "slug", [], "any", false, false, false, 9)]);
            echo "\">";
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["popular"], "title", [], "any", false, false, false, 9), 40]);
            echo "</a></h4> 
                                    <div class=\"author-detail\"><p><i class=\"fa fa-clock-o\"></i>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["popular"], "created_at", [], "any", false, false, false, 10), "d/m"), "html", null, true);
            echo " </p>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['popular'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                        </div>";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/popular-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  61 => 10,  55 => 9,  51 => 8,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"popular-post sidebar-item\">
                            <div class=\"detail-title\">
                                <h3>Tin nổi bật</h3>
                            </div>
                            {% for key,popular in listrecents %}
                            <div class=\"popular-item\">
                                <div class=\"popular-content\">
                                    <span class=\"item-no\">{{key + 1}}</span>
                                    <h4><a href=\"{{ 'posts' | page({slug:popular.slug}) }}\">{{html_limit(popular.title,40)}}</a></h4> 
                                    <div class=\"author-detail\"><p><i class=\"fa fa-clock-o\"></i>{{ popular.created_at|date('d/m') }} </p>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/popular-post.htm", "");
    }
}
