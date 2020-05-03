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
        echo "<section id=\"footer\" class=\"py-5 secondary-color\">
    <div class=\"container secondary-color\">
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/jolois-consultants-logo.svg");
        echo "\" style=\"width:200px;\"
                         alt=\"";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Jolois Consultants en informatique logo"]);
        echo "\">
                </div>
                <div class=\"col-12 pt-4\">
                    <img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/acn-logo.svg");
        echo "\" style=\"width:120px;\"
                         alt=\"Apple Consultants Network logo\">
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h6 class=\"text-uppercase text-white mb-1\">
                        <strong>";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Adresse"]);
        echo "</strong>
                    </h6>
                </div>
                <div class=\"col-12 text-white\">
                    <small>38 place du commerce, bureau 11-134<br>
                        Île des Soeurs (Québec)  Canada  H3E 1T8</small>
                    <br>
                    <small>
                        <em>* ";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["sur rendez-vous seulement"]);
        echo "</em>
                    </small>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4 border-left\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h6 class=\"text-uppercase text-white mb-2\">
                        <strong>";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Coordonnées de contact"]);
        echo "</strong>
                    </h6>
                    <a class=\"btn btn-outline-light btn-sm mr-3\"
                       href=\"tel:";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 40), "default_phone", [], "any", false, false, false, 40), "html", null, true);
        echo "\"><i class=\"fas fa-phone\"></i>&nbsp;
                            ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 41), "default_phone", [], "any", false, false, false, 41), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-outline-light btn-sm\"
                        href=\"mailto:";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 44), "default_email", [], "any", false, false, false, 44), "html", null, true);
        echo "\"><i class=\"fas fa-envelope\"></i>
                            ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 45), "default_email", [], "any", false, false, false, 45), "html", null, true);
        echo "
                    </a>
                </div>
                <div class=\"col-12 text-white py-3\">
                    <small><strong>";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Besoin d’un technicien :"]);
        echo "</strong></small><br>
                    <a class=\"text-white\" href=\"mailto:";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 50), "support_email", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
                        ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 51), "support_email", [], "any", false, false, false, 51), "html", null, true);
        echo "</a>
                </div>
                <div class=\"col-12\">
                    ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("socials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class=\"secondary-color-dark\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center py-2 text-white\">
                <small>© Jolois Consultants en Informatiques - ";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Tous droits réservés"]);
        echo "</small>
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
        return array (  147 => 65,  135 => 55,  131 => 54,  125 => 51,  121 => 50,  117 => 49,  110 => 45,  106 => 44,  100 => 41,  96 => 40,  90 => 37,  78 => 28,  67 => 20,  55 => 11,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"py-5 secondary-color\">
    <div class=\"container secondary-color\">
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <img src=\"{{'assets/images/jolois-consultants-logo.svg'|theme}}\" style=\"width:200px;\"
                         alt=\"{{ 'Jolois Consultants en informatique logo'|_ }}\">
                </div>
                <div class=\"col-12 pt-4\">
                    <img src=\"{{'assets/images/acn-logo.svg'|theme}}\" style=\"width:120px;\"
                         alt=\"Apple Consultants Network logo\">
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h6 class=\"text-uppercase text-white mb-1\">
                        <strong>{{ 'Adresse'|_ }}</strong>
                    </h6>
                </div>
                <div class=\"col-12 text-white\">
                    <small>38 place du commerce, bureau 11-134<br>
                        Île des Soeurs (Québec)  Canada  H3E 1T8</small>
                    <br>
                    <small>
                        <em>* {{ 'sur rendez-vous seulement'|_ }}</em>
                    </small>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4 border-left\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h6 class=\"text-uppercase text-white mb-2\">
                        <strong>{{ 'Coordonnées de contact'|_ }}</strong>
                    </h6>
                    <a class=\"btn btn-outline-light btn-sm mr-3\"
                       href=\"tel:{{ this.theme.default_phone }}\"><i class=\"fas fa-phone\"></i>&nbsp;
                            {{ this.theme.default_phone }}
                    </a>
                    <a class=\"btn btn-outline-light btn-sm\"
                        href=\"mailto:{{ this.theme.default_email }}\"><i class=\"fas fa-envelope\"></i>
                            {{ this.theme.default_email }}
                    </a>
                </div>
                <div class=\"col-12 text-white py-3\">
                    <small><strong>{{ 'Besoin d’un technicien :'|_ }}</strong></small><br>
                    <a class=\"text-white\" href=\"mailto:{{ this.theme.support_email }}\">
                        {{ this.theme.support_email }}</a>
                </div>
                <div class=\"col-12\">
                    {% partial 'socials' %}
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class=\"secondary-color-dark\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center py-2 text-white\">
                <small>© Jolois Consultants en Informatiques - {{'Tous droits réservés'|_ }}</small>
            </div>
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/footer.htm", "");
    }
}
