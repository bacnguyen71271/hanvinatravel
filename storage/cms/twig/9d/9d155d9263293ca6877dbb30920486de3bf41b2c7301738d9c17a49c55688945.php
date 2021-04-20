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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/recent-post.htm */
class __TwigTemplate_23c3ad8ad94a1699d2638a13fd0f070a01ca401e09a74c3f8ed08562008e1c66 extends \Twig\Template
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
        echo "<div class=\"recent-post clearfix sidebar-item\">
                            <div class=\"detail-title\">
                                <h3>Tin mới nhất</h3>
                            </div>
                            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["postfornews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recent"]) {
            // line 6
            echo "                            <div class=\"recent-item\">
                                <div class=\"recent-image\">
                                    <img src=\"";
            // line 8
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["recent"], "image", [], "any", false, false, false, 8));
            echo "\" alt=\"Image\">
                                </div>
                                <div class=\"recent-content\">
                                    <h4><a href=\"";
            // line 11
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("posts", ["slug" => twig_get_attribute($this->env, $this->source, $context["recent"], "slug", [], "any", false, false, false, 11)]);
            echo "\">";
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["recent"], "title", [], "any", false, false, false, 11), 40]);
            echo "</a></h4>
                                    <div class=\"author-detail\">
                                        <p><i class=\"fa fa-clock-o\"></i> ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "created_at", [], "any", false, false, false, 13), "d/m"), "html", null, true);
            echo " </p>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                        </div>";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/recent-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  64 => 13,  57 => 11,  51 => 8,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"recent-post clearfix sidebar-item\">
                            <div class=\"detail-title\">
                                <h3>Tin mới nhất</h3>
                            </div>
                            {% for recent in postfornews %}
                            <div class=\"recent-item\">
                                <div class=\"recent-image\">
                                    <img src=\"{{recent.image | media}}\" alt=\"Image\">
                                </div>
                                <div class=\"recent-content\">
                                    <h4><a href=\"{{ 'posts' | page({slug:recent.slug}) }}\">{{html_limit(recent.title,40)}}</a></h4>
                                    <div class=\"author-detail\">
                                        <p><i class=\"fa fa-clock-o\"></i> {{ recent.created_at|date('d/m') }} </p>
                                    </div>
                                </div>
                            </div>
                            {% endfor%}
                        </div>", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/recent-post.htm", "");
    }
}
