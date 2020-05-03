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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/pages/home.htm */
class __TwigTemplate_9916397459729e5ec9f3c88d6305b5a3018bfa4aeeb0699aca03a01bbc23ce97 extends \Twig\Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <div class=\"row my-0 my-sm-4 my-lg-5\">
            <div class=\"col-12\">
            </div>
        </div>
    </div>
</div>
<section id=\"services\">
    <div class=\"container\">
        <div class=\"row my-0 my-sm-4 my-lg-5\">
            <div class=\"col-12\">
            </div>
        </div>
    </div>
</section>
<section id=\"temoignages\">
    <div class=\"container\">
        <div class=\"row my-0 my-sm-4 my-lg-5\">
            <div class=\"col-12\">
            </div>
        </div>
    </div>
</section>
<section id=\"pourquoi\">
    <div class=\"container\">
        <div class=\"row my-0 my-sm-4 my-lg-5\">
            <div class=\"col-12\">
            </div>
        </div>
    </div>
</section>
<section id=\"partenaires\" class=\"py-5 partner-box\">
    <div class=\"container\">
    ";
        // line 35
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("partners"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 36
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 36,  73 => 35,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <div class=\"row my-0 my-sm-4 my-lg-5\">
            <div class=\"col-12\">
            </div>
        </div>
    </div>
</div>
<section id=\"services\">
    <div class=\"container\">
        <div class=\"row my-0 my-sm-4 my-lg-5\">
            <div class=\"col-12\">
            </div>
        </div>
    </div>
</section>
<section id=\"temoignages\">
    <div class=\"container\">
        <div class=\"row my-0 my-sm-4 my-lg-5\">
            <div class=\"col-12\">
            </div>
        </div>
    </div>
</section>
<section id=\"pourquoi\">
    <div class=\"container\">
        <div class=\"row my-0 my-sm-4 my-lg-5\">
            <div class=\"col-12\">
            </div>
        </div>
    </div>
</section>
<section id=\"partenaires\" class=\"py-5 partner-box\">
    <div class=\"container\">
    {% component 'partners' %}
    </div>
</section>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/pages/home.htm", "");
    }
}
