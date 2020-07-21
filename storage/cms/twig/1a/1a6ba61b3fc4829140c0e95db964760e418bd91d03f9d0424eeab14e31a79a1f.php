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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/socials.htm */
class __TwigTemplate_349624c4f1b8d3f876b01478b13657295cccdff35ae046a8c7f3963f57d1a3cf extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 1), "facebook_url", [], "any", false, false, false, 1)) {
            // line 2
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 2), "facebook_url", [], "any", false, false, false, 2), "html", null, true);
            echo "\" target=\"_blank\" title=\"Facebook\">
\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px; margin-top:10px\">
\t\t<i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t<i class=\"fab fa-facebook-f fa-stack-1x\"></i>
\t</span>
</a>
";
        }
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "twitter_url", [], "any", false, false, false, 9)) {
            // line 10
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "twitter_url", [], "any", false, false, false, 10), "html", null, true);
            echo "\" target=\"_blank\" title=\"Twitter\">
\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px;margin-top:10px\">
\t\t<i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t<i class=\"fab fa-twitter fa-stack-1x\"></i>
\t</span>
</a>
";
        }
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 17), "linkedin_url", [], "any", false, false, false, 17)) {
            // line 18
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 18), "linkedin_url", [], "any", false, false, false, 18), "html", null, true);
            echo "\" target=\"_blank\" title=\"LinkedIn\">
\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px; margin-top:10px\">
\t\t<i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t<i class=\"fab fa-linkedin-in fa-stack-1x\"></i>
\t</span>
</a>
";
        }
        // line 25
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 25), "instagram_url", [], "any", false, false, false, 25)) {
            // line 26
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 26), "instagram_url", [], "any", false, false, false, 26), "html", null, true);
            echo "\" target=\"_blank\" title=\"Instagram\">
\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px; margin-top:10px;\">
\t\t<i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t<i class=\"fab fa-instagram fa-stack-1x\"></i>
\t</span>
</a>
";
        }
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 33), "pinterest_url", [], "any", false, false, false, 33)) {
            // line 34
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 34), "pinterest_url", [], "any", false, false, false, 34), "html", null, true);
            echo "\" target=\"_blank\" title=\"Pinterest\">
\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px; margin-top:10px;\">
\t\t<i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t<i class=\"fab fa-pinterest-p fa-stack-1x\"></i>
\t</span>
</a>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/socials.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  89 => 33,  78 => 26,  76 => 25,  65 => 18,  63 => 17,  52 => 10,  50 => 9,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if this.theme.facebook_url %}
<a href=\"{{ this.theme.facebook_url }}\" target=\"_blank\" title=\"Facebook\">
\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px; margin-top:10px\">
\t\t<i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t<i class=\"fab fa-facebook-f fa-stack-1x\"></i>
\t</span>
</a>
{% endif %}
{% if this.theme.twitter_url %}
<a href=\"{{ this.theme.twitter_url }}\" target=\"_blank\" title=\"Twitter\">
\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px;margin-top:10px\">
\t\t<i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t<i class=\"fab fa-twitter fa-stack-1x\"></i>
\t</span>
</a>
{% endif %}
{% if this.theme.linkedin_url %}
<a href=\"{{ this.theme.linkedin_url }}\" target=\"_blank\" title=\"LinkedIn\">
\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px; margin-top:10px\">
\t\t<i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t<i class=\"fab fa-linkedin-in fa-stack-1x\"></i>
\t</span>
</a>
{% endif %}
{% if this.theme.instagram_url %}
<a href=\"{{ this.theme.instagram_url }}\" target=\"_blank\" title=\"Instagram\">
\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px; margin-top:10px;\">
\t\t<i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t<i class=\"fab fa-instagram fa-stack-1x\"></i>
\t</span>
</a>
{% endif %}
{% if this.theme.pinterest_url %}
<a href=\"{{ this.theme.pinterest_url }}\" target=\"_blank\" title=\"Pinterest\">
\t<span class=\"fa-stack\" style=\"vertical-align: top; font-size:10px; margin-top:10px;\">
\t\t<i class=\"fas fa-circle fa-stack-2x white-text\"></i>
\t\t<i class=\"fab fa-pinterest-p fa-stack-1x\"></i>
\t</span>
</a>
{% endif %}", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/socials.htm", "");
    }
}
