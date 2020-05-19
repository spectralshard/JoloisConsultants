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
        echo "<div class=\"banner hero-home py-5\">
    <div class=\"container py-5\">
        <div class=\"banner-text\">
            <div class=\"banner-heading text-uppercase\">
                ";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Avec nous, Apple et Windows n’ont jamais fait aussi bon ménage!"]);
        echo "
            </div>
            <a class=\"btn btn-outline-light text-uppercase\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contactez nous"]);
        echo "</a>
        </div>
    </div>
</div>
<section id=\"services\" class=\"pt-5\">
    <div class=\"container py-5\">
        ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "    </div>
</section>
";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("testimonialsBloc"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "<section id=\"pourquoi\">
    <div class=\"container py-5\">
        ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("reusable/pourquoi"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
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
        return array (  79 => 20,  75 => 19,  71 => 17,  67 => 16,  63 => 14,  59 => 13,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"banner hero-home py-5\">
    <div class=\"container py-5\">
        <div class=\"banner-text\">
            <div class=\"banner-heading text-uppercase\">
                {{ 'Avec nous, Apple et Windows n’ont jamais fait aussi bon ménage!'|_ }}
            </div>
            <a class=\"btn btn-outline-light text-uppercase\" href=\"{{ 'contact'|page }}\">{{ 'Contactez nous'|_ }}</a>
        </div>
    </div>
</div>
<section id=\"services\" class=\"pt-5\">
    <div class=\"container py-5\">
        {% partial 'home/services' %}
    </div>
</section>
{% component 'testimonialsBloc' %}
<section id=\"pourquoi\">
    <div class=\"container py-5\">
        {% partial 'reusable/pourquoi' %}
    </div>
</section>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/pages/home.htm", "");
    }
}
