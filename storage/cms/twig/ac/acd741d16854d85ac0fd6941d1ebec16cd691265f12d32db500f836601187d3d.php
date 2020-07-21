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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/testimonialsbloc/default.htm */
class __TwigTemplate_a0b2bcf12f5b71f1c1cf6d7e72daaee58f00c82721bd3bc42b766f80ac21bba2 extends \Twig\Template
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
        echo "<section class=\"diagonal-box testim testim-bg py-5\">
    <div class=\"row\">
        <div class=\"col py-5\">
            <h2 class=\"h2-responsive text-uppercase text-white text-center mt-5 mb-0\">
                ";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Témoignages de nos clients"]);
        echo "
            </h2>
            ";
        // line 7
        if (($context["testimonials"] ?? null)) {
            // line 8
            echo "            <style>
                @-webkit-keyframes testim-scale {
                    70% {
                -webkit-box-shadow: 0px 0px 10px 5px ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 11), "html", null, true);
            echo ";
                box-shadow: 0px 0px 10px 5px ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 12), "html", null, true);
            echo ";
                }

                100% {
                -webkit-box-shadow: 0px 0px 0px 0px ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 16), "html", null, true);
            echo ";
                box-shadow: 0px 0px 0px 0px ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 17), "html", null, true);
            echo ";
                }
                }
                @-moz-keyframes testim-scale {
                    70% {
                -moz-box-shadow: 0px 0px 10px 5px ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 22), "html", null, true);
            echo ";
                box-shadow: 0px 0px 10px 5px ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 23), "html", null, true);
            echo ";
                }

                100% {
                -moz-box-shadow: 0px 0px 0px 0px ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 27), "html", null, true);
            echo ";
                box-shadow: 0px 0px 0px 0px ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 28), "html", null, true);
            echo ";
                }
                }
                @-ms-keyframes testim-scale {
                    70% {
                -ms-box-shadow: 0px 0px 10px 5px ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 33), "html", null, true);
            echo ";
                box-shadow: 0px 0px 10px 5px ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 34), "html", null, true);
            echo ";
                }

                100% {
                -ms-box-shadow: 0px 0px 0px 0px ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 38), "html", null, true);
            echo ";
                box-shadow: 0px 0px 0px 0px ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 39), "html", null, true);
            echo ";
                }
                }

                @-o-keyframes testim-scale {
                    70% {
                -o-box-shadow: 0px 0px 10px 5px ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 45), "html", null, true);
            echo ";
                box-shadow: 0px 0px 10px 5px ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 46), "html", null, true);
            echo ";
                }

                100% {
                -o-box-shadow: 0px 0px 0px 0px ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 50), "html", null, true);
            echo ";
                box-shadow: 0px 0px 0px 0px ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 51), "html", null, true);
            echo ";
                }
                }
                @keyframes testim-scale {
                    70% {
                box-shadow: 0px 0px 10px 5px ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 56), "html", null, true);
            echo ";
                }

                100% {
                box-shadow: 0px 0px 0px 0px ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "textColor"], "method", false, false, false, 60), "html", null, true);
            echo ";
                }
                }
            </style>
            <div id=\"testim\">
                <div class=\"wrap content\">
                    <span id=\"right-arrow\" class=\"arrow right fa fa-chevron-right\"></span>
                    <span id=\"left-arrow\" class=\"arrow left fa fa-chevron-left\"></span>
                    <ul id=\"testim-dots\" class=\"dots\" style=\"visibility: hidden;\">
                        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 70
                echo "                        <li class=\"dot";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 70)) {
                    echo " active";
                }
                echo "\"></li>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                    </ul>
                    <div id=\"testim-content\" class=\"cont\">
                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 75
                echo "                        <div";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 75)) {
                    echo " class=\"active\"";
                }
                echo ">
                            <!--Removed - just text here!
                            ";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "                            <div class=\"img\">
                                <img src=\"";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 79), "thumb", [0 => 100, 1 => 100, 2 => ["mode" => "crop"]], "method", false, false, false, 79), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 79), "html", null, true);
                    echo "\">
                            </div>
                            ";
                }
                // line 81
                echo "-->
                            <p>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "quote", [], "any", false, false, false, 82), "html", null, true);
                echo "</p>
                            <h2>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", [], "any", false, false, false, 83), "html", null, true);
                echo "</h2>
                        </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                    </div>
                </div>
            </div>
            ";
        }
        // line 90
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/testimonialsbloc/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 90,  269 => 86,  252 => 83,  248 => 82,  245 => 81,  237 => 79,  234 => 78,  232 => 77,  224 => 75,  207 => 74,  203 => 72,  184 => 70,  167 => 69,  155 => 60,  148 => 56,  140 => 51,  136 => 50,  129 => 46,  125 => 45,  116 => 39,  112 => 38,  105 => 34,  101 => 33,  93 => 28,  89 => 27,  82 => 23,  78 => 22,  70 => 17,  66 => 16,  59 => 12,  55 => 11,  50 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"diagonal-box testim testim-bg py-5\">
    <div class=\"row\">
        <div class=\"col py-5\">
            <h2 class=\"h2-responsive text-uppercase text-white text-center mt-5 mb-0\">
                {{ 'Témoignages de nos clients'|_ }}
            </h2>
            {% if testimonials %}
            <style>
                @-webkit-keyframes testim-scale {
                    70% {
                -webkit-box-shadow: 0px 0px 10px 5px {{ __SELF__.property('textColor') }};
                box-shadow: 0px 0px 10px 5px {{ __SELF__.property('textColor') }};
                }

                100% {
                -webkit-box-shadow: 0px 0px 0px 0px {{ __SELF__.property('textColor') }};
                box-shadow: 0px 0px 0px 0px {{ __SELF__.property('textColor') }};
                }
                }
                @-moz-keyframes testim-scale {
                    70% {
                -moz-box-shadow: 0px 0px 10px 5px {{ __SELF__.property('textColor') }};
                box-shadow: 0px 0px 10px 5px {{ __SELF__.property('textColor') }};
                }

                100% {
                -moz-box-shadow: 0px 0px 0px 0px {{ __SELF__.property('textColor') }};
                box-shadow: 0px 0px 0px 0px {{ __SELF__.property('textColor') }};
                }
                }
                @-ms-keyframes testim-scale {
                    70% {
                -ms-box-shadow: 0px 0px 10px 5px {{ __SELF__.property('textColor') }};
                box-shadow: 0px 0px 10px 5px {{ __SELF__.property('textColor') }};
                }

                100% {
                -ms-box-shadow: 0px 0px 0px 0px {{ __SELF__.property('textColor') }};
                box-shadow: 0px 0px 0px 0px {{ __SELF__.property('textColor') }};
                }
                }

                @-o-keyframes testim-scale {
                    70% {
                -o-box-shadow: 0px 0px 10px 5px {{ __SELF__.property('textColor') }};
                box-shadow: 0px 0px 10px 5px {{ __SELF__.property('textColor') }};
                }

                100% {
                -o-box-shadow: 0px 0px 0px 0px {{ __SELF__.property('textColor') }};
                box-shadow: 0px 0px 0px 0px {{ __SELF__.property('textColor') }};
                }
                }
                @keyframes testim-scale {
                    70% {
                box-shadow: 0px 0px 10px 5px {{ __SELF__.property('textColor') }};
                }

                100% {
                box-shadow: 0px 0px 0px 0px {{ __SELF__.property('textColor') }};
                }
                }
            </style>
            <div id=\"testim\">
                <div class=\"wrap content\">
                    <span id=\"right-arrow\" class=\"arrow right fa fa-chevron-right\"></span>
                    <span id=\"left-arrow\" class=\"arrow left fa fa-chevron-left\"></span>
                    <ul id=\"testim-dots\" class=\"dots\" style=\"visibility: hidden;\">
                        {% for item in testimonials %}
                        <li class=\"dot{% if loop.first %} active{% endif %}\"></li>
                        {% endfor %}
                    </ul>
                    <div id=\"testim-content\" class=\"cont\">
                        {% for testimonial in testimonials %}
                        <div{% if loop.first %} class=\"active\"{% endif %}>
                            <!--Removed - just text here!
                            {% if testimonial.image %}
                            <div class=\"img\">
                                <img src=\"{{ testimonial.image.thumb(100,100,{'mode':'crop'}) }}\" alt=\"{{ testimonial.name }}\">
                            </div>
                            {% endif %}-->
                            <p>{{ testimonial.quote }}</p>
                            <h2>{{ testimonial.name }}</h2>
                        </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
            {% endif %}
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/testimonialsbloc/default.htm", "");
    }
}
