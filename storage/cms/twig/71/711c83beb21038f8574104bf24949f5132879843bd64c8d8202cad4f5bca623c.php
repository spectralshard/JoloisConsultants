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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/footer.htm */
class __TwigTemplate_48317a56449beb0d7456c89d2ee6c9cd912ee8a8069fbb11be41119416322b0d extends \Twig\Template
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
        echo "<section id=\"footer\" class=\"py-5\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
        </div>
    </div>
    </div>
</section>
<section class=\"secondary-color\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center py-2 text-white\">

                    © jolois.com - ";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tous droits réservés"]);
        echo "

            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"py-5\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
        </div>
    </div>
    </div>
</section>
<section class=\"secondary-color\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center py-2 text-white\">

                    © jolois.com - {{'Tous droits réservés'|_ }}

            </div>
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/footer.htm", "");
    }
}
