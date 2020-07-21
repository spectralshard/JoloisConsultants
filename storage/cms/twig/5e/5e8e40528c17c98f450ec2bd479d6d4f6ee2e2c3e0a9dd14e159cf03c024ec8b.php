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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/partners/default.htm */
class __TwigTemplate_5d500569725ec7d4f5a6b0370166ff5d17fcd357d2c495b7c986aaec3ecb4060 extends \Twig\Template
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
        echo "<h2 class=\"h2-responsive text-center text-primary text-uppercase\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nos partenaires"]);
        echo "
</h2>
";
        // line 4
        if (($context["partners"] ?? null)) {
            // line 5
            echo "<div class=\"partner-slider slider pt-3\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                // line 7
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "            ";
                    if (twig_in_filter("https", twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 8))) {
                        // line 9
                        echo "                ";
                        $context["url"] = twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 9);
                        // line 10
                        echo "            ";
                    } elseif (twig_in_filter("http", twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 10))) {
                        // line 11
                        echo "                ";
                        $context["url"] = twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 11), ["http://" => "", "https://" => ""]);
                        // line 12
                        echo "            ";
                    } else {
                        // line 13
                        echo "                ";
                        $context["url"] = ("https://" . twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 13));
                        // line 14
                        echo "            ";
                    }
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "        <div class=\"slide\">
            ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                    echo "\" target=\"_blank\">";
                }
                // line 19
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partner"], "image", [], "any", false, false, false, 19), "thumb", [0 => 170, 1 => ($context["crop"] ?? null)], "method", false, false, false, 19), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partner"], "name", [], "any", false, false, false, 19), "html", null, true);
                echo "\" class=\"gray-scale\">
            ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["partner"], "url", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "            </a>
            ";
                }
                // line 23
                echo "        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/partners/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 25,  104 => 23,  100 => 21,  98 => 20,  91 => 19,  86 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  50 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 class=\"h2-responsive text-center text-primary text-uppercase\">
    {{ 'Nos partenaires'|_ }}
</h2>
{% if partners %}
<div class=\"partner-slider slider pt-3\">
    {% for partner in partners %}
        {% if partner.url %}
            {% if 'https' in partner.url %}
                {% set url = partner.url %}
            {% elseif 'http' in partner.url %}
                {% set url = partner.url|replace({'http://': '', 'https://': ''}) %}
            {% else %}
                {% set url = 'https://' ~ partner.url %}
            {% endif %}
        {% endif %}
        <div class=\"slide\">
            {% if partner.url %}
            <a href=\"{{ url }}\" target=\"_blank\">{% endif %}
            <img src=\"{{ partner.image.thumb(170,crop) }}\" alt=\"{{ partner.name }}\" class=\"gray-scale\">
            {% if partner.url %}
            </a>
            {% endif %}
        </div>
    {% endfor %}
</div>
{% endif %}", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/partners/default.htm", "");
    }
}
