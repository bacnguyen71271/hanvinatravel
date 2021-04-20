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

/* /home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/header.htm */
class __TwigTemplate_04b30e605cb7b65c6552cf4cf2b3165063580cfcf4bd4b10739da9d32039861e extends \Twig\Template
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
        echo "<div class=\"upper-head clearfix\">
            <div class=\"container\">
                <div class=\"contact-info\">
                    <p><i class=\"fa fa-phone\"></i> Phone: (0243).62.72.777</p>
                    <p><i class=\"fa fa-envelope\"></i> Mail: <a href=\"mailto:info@hanvinatravel.com\" class=\"__cf_email__\"  >info@hanvinatravel.com</a></p>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"upper-head clearfix\">
            <div class=\"container\">
                <div class=\"contact-info\">
                    <p><i class=\"fa fa-phone\"></i> Phone: (0243).62.72.777</p>
                    <p><i class=\"fa fa-envelope\"></i> Mail: <a href=\"mailto:info@hanvinatravel.com\" class=\"__cf_email__\"  >info@hanvinatravel.com</a></p>
                </div>
            </div>
        </div>", "/home/tiepjimmy/web/hanvinatravel.vn/public_html/themes/travel/partials/site/header.htm", "");
    }
}
