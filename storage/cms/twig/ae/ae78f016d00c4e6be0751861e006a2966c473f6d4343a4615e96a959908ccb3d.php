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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/pages/services-et-tarifs.htm */
class __TwigTemplate_fe3aefd6745df471ee44b3a6a940c1ea97f447d25e1a1f164b86e07aa9b766f6 extends \Twig\Template
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
        echo "<section id=\"top\" class=\"hero-home banner-services py-5\">
    <div class=\"container py-5\">
        <div class=\"banner-text\">
            <div class=\"banner-heading text-uppercase\">
                ";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nos services informatique"]);
        echo "
            </div>
        </div>
    </div>
</section>
<div class=\"py-5\">
    ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services/rates"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "</div>
<section class=\"diagonal-box services-section py-5\">
    <div class=\"row d-flex justify-content-center py-5\">
        <div class=\"col-xs-12 col-sm-8 pt-5\">
            <h2 class=\"h2-responsive text-white text-center text-uppercase\">";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Soumettre une demande de service"]);
        echo "</h2>
        </div>
        <div class=\"col-10 col-sm-8 col-md-5 pb-5\">
            ";
        // line 19
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("DemandeServices"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo "        </div>
    </div>
</section>
<section id=\"pourquoi\">
    <div class=\"container py-5\">
        ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("reusable/pourquoi"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/pages/services-et-tarifs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  79 => 25,  72 => 20,  68 => 19,  62 => 16,  56 => 12,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"top\" class=\"hero-home banner-services py-5\">
    <div class=\"container py-5\">
        <div class=\"banner-text\">
            <div class=\"banner-heading text-uppercase\">
                {{ 'Nos services informatique'|_ }}
            </div>
        </div>
    </div>
</section>
<div class=\"py-5\">
    {% partial 'services/rates' %}
</div>
<section class=\"diagonal-box services-section py-5\">
    <div class=\"row d-flex justify-content-center py-5\">
        <div class=\"col-xs-12 col-sm-8 pt-5\">
            <h2 class=\"h2-responsive text-white text-center text-uppercase\">{{ 'Soumettre une demande de service'|_ }}</h2>
        </div>
        <div class=\"col-10 col-sm-8 col-md-5 pb-5\">
            {% component 'DemandeServices' %}
        </div>
    </div>
</section>
<section id=\"pourquoi\">
    <div class=\"container py-5\">
        {% partial 'reusable/pourquoi' %}
    </div>
</section>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/pages/services-et-tarifs.htm", "");
    }
}
