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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/contactform/default.htm */
class __TwigTemplate_1b04993ae32152c5005b8717ac0bbc7109e0cf33e35f04b698b41609d3b38e0a extends \Twig\Template
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
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 1), "text_top_form", [], "any", false, false, false, 1);
        echo "

<form id=\"simpleContactForm\" data-request=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    <div id=\"simple_contact_flash_message\"></div>
    <div class=\"form-group\">
        <label for=\"name\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 7), "nameLabel", [], "any", false, false, false, 7)]);
        echo " <span class=\"text-danger\">*</span></label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
    </div>
    <div class=\"form-group\">
        <label for=\"email\">";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 11), "emailLabel", [], "any", false, false, false, 11)]);
        echo " <span class=\"text-danger\">*</span></label>
        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
    </div>
    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 14), "phoneEnabled", [], "any", false, false, false, 14)) {
            // line 15
            echo "        <div class=\"form-group\">
            <label for=\"phone\">";
            // line 16
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 16), "phoneLabel", [], "any", false, false, false, 16)]);
            echo " <span class=\"text-danger\">*</span></label>
            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" required>
        </div>
    ";
        }
        // line 20
        echo "    <div class=\"form-group\">
        <label for=\"subject\">";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 21), "subjectLabel", [], "any", false, false, false, 21)]);
        echo " <span class=\"text-danger\">*</span></label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\" required>
    </div>
    <div class=\"form-group\">
        <label for=\"message\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 25), "messageLabel", [], "any", false, false, false, 25)]);
        echo " <span class=\"text-danger\">*</span></label>
        <textarea id=\"message\" name=\"message\" class=\"form-control\" style=\"height:150px;resize: none;\" required></textarea>
    </div>

    <!-- Injecting reCaptcha if enabled -->
    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 30), "recaptcha_enabled", [], "any", false, false, false, 30)) {
            // line 31
            echo "        <div class=\"form-group\">
            <label for=\"message\"></label>
            <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 33), "recaptcha_site_key", [], "any", false, false, false, 33), "html", null, true);
            echo "\"></div>
        </div>
    ";
        }
        // line 36
        echo "    <!-- End reCaptcha -->

    <button id=\"simpleContactSubmitButton\"
            type=\"submit\" class=\"btn btn-primary float-right\">
        ";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 40), "buttonText", [], "any", false, false, false, 40)]);
        echo "
    </button>
</form>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  104 => 36,  98 => 33,  94 => 31,  92 => 30,  84 => 25,  77 => 21,  74 => 20,  67 => 16,  64 => 15,  62 => 14,  56 => 11,  49 => 7,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ __SELF__.settings.text_top_form|raw}}

<form id=\"simpleContactForm\" data-request=\"{{ __SELF__ }}::onFormSubmit\">

    <div id=\"simple_contact_flash_message\"></div>
    <div class=\"form-group\">
        <label for=\"name\">{{__SELF__.properties.nameLabel|_}} <span class=\"text-danger\">*</span></label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
    </div>
    <div class=\"form-group\">
        <label for=\"email\">{{__SELF__.properties.emailLabel|_}} <span class=\"text-danger\">*</span></label>
        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
    </div>
    {% if(__SELF__.properties.phoneEnabled) %}
        <div class=\"form-group\">
            <label for=\"phone\">{{__SELF__.properties.phoneLabel|_}} <span class=\"text-danger\">*</span></label>
            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" required>
        </div>
    {% endif %}
    <div class=\"form-group\">
        <label for=\"subject\">{{__SELF__.properties.subjectLabel|_}} <span class=\"text-danger\">*</span></label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\" required>
    </div>
    <div class=\"form-group\">
        <label for=\"message\">{{__SELF__.properties.messageLabel|_}} <span class=\"text-danger\">*</span></label>
        <textarea id=\"message\" name=\"message\" class=\"form-control\" style=\"height:150px;resize: none;\" required></textarea>
    </div>

    <!-- Injecting reCaptcha if enabled -->
    {% if(__SELF__.settings.recaptcha_enabled) %}
        <div class=\"form-group\">
            <label for=\"message\"></label>
            <div class=\"g-recaptcha\" data-sitekey=\"{{__SELF__.settings.recaptcha_site_key}}\"></div>
        </div>
    {% endif %}
    <!-- End reCaptcha -->

    <button id=\"simpleContactSubmitButton\"
            type=\"submit\" class=\"btn btn-primary float-right\">
        {{__SELF__.properties.buttonText|_}}
    </button>
</form>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/contactform/default.htm", "");
    }
}
