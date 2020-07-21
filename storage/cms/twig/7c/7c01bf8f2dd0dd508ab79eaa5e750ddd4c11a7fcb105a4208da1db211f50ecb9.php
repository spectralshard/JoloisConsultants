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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/pages/contact.htm */
class __TwigTemplate_2ed1f3908f90eeabd3bb133ab5c6e90b4df294a1c9f2f3d4b27584fd1f5d2f04 extends \Twig\Template
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
        echo "<div class=\"hero-home banner py-5\">
    <div class=\"container py-5\">
        <div class=\"banner-text\">
            <div class=\"banner-heading text-uppercase\">
                ";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous Contacter"]);
        echo "
            </div>
        </div>
    </div>
</div>
<section id=\"contact\" class=\"py-5\">
    <div class=\"container py-5\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-xs-12 col-sm-6 col-lg-5 pb-3\">
                ";
        // line 14
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ContactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "            </div>
            <div class=\"col-xs-12 col-sm-1 col-lg-1 d-none d-sm-none d-lg-block\">
            </div>
            <div class=\"col-xs-12 col-sm-6 col-lg-4 border-primary border-left d-none d-sm-block\" style=\"height: 100%;\">
                <h3 class=\"h3-responsive text-primary mt-0\">
                    ";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Adresse postale"]);
        echo "
                </h3>
                <p>
                    <em>* ";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["sur rendez-vous seulement"]);
        echo "</em>
                <br/>
                    38 place du commerce, bureau 11-134<br />
                    Ile des Soeurs (Québec)  Canada H3E 1T8
                </p>
                <p>
                <a href=\"tel:";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 29), "default_phone", [], "any", false, false, false, 29), "html", null, true);
        echo "\">
                    <i class=\"fas fa-phone\"></i>&nbsp;
                    ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 31), "default_phone", [], "any", false, false, false, 31), "html", null, true);
        echo "</a>
                </p>
                <p>
                <a href=\"mailto:";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 34), "default_email", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
                    <i class=\"fas fa-envelope\"></i>&nbsp;
                    ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 36), "default_email", [], "any", false, false, false, 36), "html", null, true);
        echo "</a>
                </p>
                <p class=\"mb-0\">
                    <strong>";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Besoin d’un technicien :"]);
        echo "</strong><br>
                    <a href=\"mailto:";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 40), "support_email", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
                        ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 41), "support_email", [], "any", false, false, false, 41), "html", null, true);
        echo "</a>
                </p>
            </div>
            <div class=\"col border-primary border-top d-block d-sm-none mt-4 pt-3\" style=\"height: 100%;\">
                <h3 class=\"h3-responsive text-primary mt-0\">
                    ";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Adresse postale"]);
        echo "
                </h3>
                <p>
                    <em>* ";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["sur rendez-vous seulement"]);
        echo "</em>
                    <br/>
                    38 place du commerce, bureau 11-134<br />
                    Ile des Soeurs (Québec)  Canada H3E 1T8
                </p>
                <p>
                    <a href=\"tel:";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 55), "default_phone", [], "any", false, false, false, 55), "html", null, true);
        echo "\">
                        <i class=\"fas fa-phone\"></i>&nbsp;
                        ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 57), "default_phone", [], "any", false, false, false, 57), "html", null, true);
        echo "</a>
                </p>
                <p>
                    <a href=\"mailto:";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 60), "default_email", [], "any", false, false, false, 60), "html", null, true);
        echo "\">
                        <i class=\"fas fa-envelope\"></i>&nbsp;
                        ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 62), "default_email", [], "any", false, false, false, 62), "html", null, true);
        echo "</a>
                </p>
                <p class=\"mb-0\">
                    <strong>";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Besoin d’un technicien :"]);
        echo "</strong><br>
                    <a href=\"mailto:";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 66), "support_email", [], "any", false, false, false, 66), "html", null, true);
        echo "\">
                        ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 67), "support_email", [], "any", false, false, false, 67), "html", null, true);
        echo "</a>
                </p>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 67,  160 => 66,  156 => 65,  150 => 62,  145 => 60,  139 => 57,  134 => 55,  125 => 49,  119 => 46,  111 => 41,  107 => 40,  103 => 39,  97 => 36,  92 => 34,  86 => 31,  81 => 29,  72 => 23,  66 => 20,  59 => 15,  55 => 14,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero-home banner py-5\">
    <div class=\"container py-5\">
        <div class=\"banner-text\">
            <div class=\"banner-heading text-uppercase\">
                {{ 'Nous Contacter'|_ }}
            </div>
        </div>
    </div>
</div>
<section id=\"contact\" class=\"py-5\">
    <div class=\"container py-5\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-xs-12 col-sm-6 col-lg-5 pb-3\">
                {% component 'ContactForm' %}
            </div>
            <div class=\"col-xs-12 col-sm-1 col-lg-1 d-none d-sm-none d-lg-block\">
            </div>
            <div class=\"col-xs-12 col-sm-6 col-lg-4 border-primary border-left d-none d-sm-block\" style=\"height: 100%;\">
                <h3 class=\"h3-responsive text-primary mt-0\">
                    {{ 'Adresse postale'|_ }}
                </h3>
                <p>
                    <em>* {{ 'sur rendez-vous seulement'|_ }}</em>
                <br/>
                    38 place du commerce, bureau 11-134<br />
                    Ile des Soeurs (Québec)  Canada H3E 1T8
                </p>
                <p>
                <a href=\"tel:{{ this.theme.default_phone }}\">
                    <i class=\"fas fa-phone\"></i>&nbsp;
                    {{ this.theme.default_phone }}</a>
                </p>
                <p>
                <a href=\"mailto:{{ this.theme.default_email }}\">
                    <i class=\"fas fa-envelope\"></i>&nbsp;
                    {{ this.theme.default_email }}</a>
                </p>
                <p class=\"mb-0\">
                    <strong>{{ 'Besoin d’un technicien :'|_ }}</strong><br>
                    <a href=\"mailto:{{ this.theme.support_email }}\">
                        {{ this.theme.support_email }}</a>
                </p>
            </div>
            <div class=\"col border-primary border-top d-block d-sm-none mt-4 pt-3\" style=\"height: 100%;\">
                <h3 class=\"h3-responsive text-primary mt-0\">
                    {{ 'Adresse postale'|_ }}
                </h3>
                <p>
                    <em>* {{ 'sur rendez-vous seulement'|_ }}</em>
                    <br/>
                    38 place du commerce, bureau 11-134<br />
                    Ile des Soeurs (Québec)  Canada H3E 1T8
                </p>
                <p>
                    <a href=\"tel:{{ this.theme.default_phone }}\">
                        <i class=\"fas fa-phone\"></i>&nbsp;
                        {{ this.theme.default_phone }}</a>
                </p>
                <p>
                    <a href=\"mailto:{{ this.theme.default_email }}\">
                        <i class=\"fas fa-envelope\"></i>&nbsp;
                        {{ this.theme.default_email }}</a>
                </p>
                <p class=\"mb-0\">
                    <strong>{{ 'Besoin d’un technicien :'|_ }}</strong><br>
                    <a href=\"mailto:{{ this.theme.support_email }}\">
                        {{ this.theme.support_email }}</a>
                </p>
            </div>
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/pages/contact.htm", "");
    }
}
