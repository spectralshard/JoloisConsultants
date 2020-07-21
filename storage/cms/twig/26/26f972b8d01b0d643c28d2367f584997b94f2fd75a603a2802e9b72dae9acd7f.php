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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/demandeservices/scf-form.htm */
class __TwigTemplate_f40a2d06da627880eaa6b7ca05911c1d598e14df70422bdce53c75a0c986fbc7 extends \Twig\Template
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
        if ((((($context["flashError"] ?? null) || (($context["flashSuccess"] ?? null) == false)) || (($context["flashSuccess"] ?? null) != ($context["__SELF__"] ?? null))) || ((($context["flashSuccess"] ?? null) == ($context["__SELF__"] ?? null)) && (call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["form_hide_after_success", 0]) == 0)))) {
            // line 2
            echo "
\t";
            // line 3
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open", twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getFormAttributes", [], "any", false, false, false, 3)]);
            echo "

\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fields", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 6
                echo "
\t\t\t";
                // line 7
                echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getFieldHtmlCode", [0 => $context["field"]], "method", false, false, false, 7);
                echo "

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "
\t\t";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getAntispamFieldHtmlCode", [0 => []], "method", false, false, false, 11);
            echo "

\t\t";
            // line 13
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getDescriptionFieldHtmlCode", [0 => []], "method", false, false, false, 13);
            echo "

\t\t";
            // line 15
            if (((((null === call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_version"])) || (call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_version"]) == "v2checkbox")) && call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["add_google_recaptcha"])) && call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_site_key"]))) {
                // line 16
                echo "
\t\t\t<div class=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getReCaptchaWrapperClass", [], "method", false, false, false, 17), "html", null, true);
                echo "\">

\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
                // line 19
                echo call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_site_key"]);
                echo "\"></div>

\t\t\t</div>

\t\t";
            }
            // line 24
            echo "
\t\t";
            // line 25
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getSubmitButtonHtmlCode", [0 => []], "method", false, false, false, 25);
            echo "

\t";
            // line 27
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

\t";
            // line 29
            if ((call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["add_google_recaptcha"]) && call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_scripts_allow"]))) {
                // line 30
                echo "\t
\t\t<script src='https://www.google.com/recaptcha/api.js";
                // line 31
                (((call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_locale_allow"]) && ($context["currentLocale"] ?? null))) ? (print (twig_escape_filter($this->env, ("?hl=" . ($context["currentLocale"] ?? null)), "html", null, true))) : (print ("")));
                echo "' async defer></script>

\t\t";
                // line 33
                if ((call_user_func_array($this->env->getFunction('settingsGet')->getCallable(), ["google_recaptcha_version"]) == "v2invisible")) {
                    // line 34
                    echo "
\t\t\t<script>
\t\t\t\t
\t\t\t\tfunction onSubmit_";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "alias", [], "any", false, false, false, 37), "html", null, true);
                    echo "(token) {

\t\t\t\t\treturn new Promise(function(resolve, reject) { 

\t\t\t\t\t\t//Your code logic goes here

\t\t\t\t\t\tdocument.getElementById(\"";
                    // line 43
                    echo twig_escape_filter($this->env, ("scf-form-id-" . twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "alias", [], "any", false, false, false, 43)), "html", null, true);
                    echo "\").submit();
\t\t\t\t\t\tresolve();

\t\t\t\t\t}); //end promise
\t\t\t\t}

\t\t\t</script>

\t\t";
                }
                // line 52
                echo "
\t";
            }
            // line 54
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/demandeservices/scf-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 54,  145 => 52,  133 => 43,  124 => 37,  119 => 34,  117 => 33,  112 => 31,  109 => 30,  107 => 29,  102 => 27,  97 => 25,  94 => 24,  86 => 19,  81 => 17,  78 => 16,  76 => 15,  71 => 13,  66 => 11,  63 => 10,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if flashError or (flashSuccess == false) or (flashSuccess!=__SELF__) or (flashSuccess==__SELF__ and settingsGet('form_hide_after_success', 0) == 0) %}

\t{{ form_open(__SELF__.getFormAttributes) }}

\t\t{% for field in __SELF__.fields %}

\t\t\t{{ __SELF__.getFieldHtmlCode(field)|raw }}

\t\t{% endfor %}

\t\t{{ __SELF__.getAntispamFieldHtmlCode({})|raw }}

\t\t{{ __SELF__.getDescriptionFieldHtmlCode({})|raw }}

\t\t{% if (settingsGet('google_recaptcha_version') is null or settingsGet('google_recaptcha_version') == 'v2checkbox') and settingsGet('add_google_recaptcha') and settingsGet('google_recaptcha_site_key') %}

\t\t\t<div class=\"{{__SELF__.getReCaptchaWrapperClass()}}\">

\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"{{ settingsGet('google_recaptcha_site_key') }}\"></div>

\t\t\t</div>

\t\t{% endif %}

\t\t{{ __SELF__.getSubmitButtonHtmlCode({})|raw }}

\t{{ form_close() }}

\t{% if settingsGet('add_google_recaptcha') and settingsGet('google_recaptcha_scripts_allow') %}
\t
\t\t<script src='https://www.google.com/recaptcha/api.js{{ settingsGet(\"google_recaptcha_locale_allow\") and currentLocale ? (\"?hl=\"~currentLocale) }}' async defer></script>

\t\t{% if settingsGet('google_recaptcha_version') == 'v2invisible' %}

\t\t\t<script>
\t\t\t\t
\t\t\t\tfunction onSubmit_{{ __SELF__.alias }}(token) {

\t\t\t\t\treturn new Promise(function(resolve, reject) { 

\t\t\t\t\t\t//Your code logic goes here

\t\t\t\t\t\tdocument.getElementById(\"{{'scf-form-id-'~__SELF__.alias}}\").submit();
\t\t\t\t\t\tresolve();

\t\t\t\t\t}); //end promise
\t\t\t\t}

\t\t\t</script>

\t\t{% endif %}

\t{% endif %}

{% endif %}", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/demandeservices/scf-form.htm", "");
    }
}
