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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tours/script.htm */
class __TwigTemplate_c40ee07388735b54c46dda46e0f3954aefc69d18a5d97a81fc19f78d17e28ff1 extends \Twig\Template
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
        echo "<script>
    document.addEventListener('DOMContentLoaded', function(event) {
        \$(\".ck-places\").change(function(){
            var data = [];
            \$('.ck-places:checked').each(function(){
                data.push(\$(this).val());
            });
            \$.request('onChangePlace', {
                data: {places: data},
                success: function(d) {
                    if (!d.result) {
                        \$('#tour-area').html(\"\");
                    }
                    \$('#tour-area').html(d.result);
                }
            })
        });

        \$(document).on('click', '.pagination li span', function(){
            var nextPage = \$(this).data('page');
            var data = [];            
            \$('.ck-places:checked').each(function(){
                data.push(\$(this).val());
            });
            \$.request('onChangePage', {
                data: {
                    places: data,
                    nextPage: nextPage
                },
                success: function(d) {
                    \$('#tour-area').html(d.result);
                }
            })
        })
    })
</script>";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tours/script.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    document.addEventListener('DOMContentLoaded', function(event) {
        \$(\".ck-places\").change(function(){
            var data = [];
            \$('.ck-places:checked').each(function(){
                data.push(\$(this).val());
            });
            \$.request('onChangePlace', {
                data: {places: data},
                success: function(d) {
                    if (!d.result) {
                        \$('#tour-area').html(\"\");
                    }
                    \$('#tour-area').html(d.result);
                }
            })
        });

        \$(document).on('click', '.pagination li span', function(){
            var nextPage = \$(this).data('page');
            var data = [];            
            \$('.ck-places:checked').each(function(){
                data.push(\$(this).val());
            });
            \$.request('onChangePage', {
                data: {
                    places: data,
                    nextPage: nextPage
                },
                success: function(d) {
                    \$('#tour-area').html(d.result);
                }
            })
        })
    })
</script>", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/plugins/indikator/news/components/tours/script.htm", "");
    }
}
