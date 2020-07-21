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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/reusable/pourquoi.htm */
class __TwigTemplate_8879954674a238341d7ac58b354e5ea71fbb88ec0115c85546e5b0cc1a931cd8 extends \Twig\Template
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
        echo "<div class=\"row pb-5\">
    <div class=\"col-12\">
        <h2 class=\"h2-responsive text-uppercase text-primary text-center\">
            ";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pourquoi nous choisir?"]);
        echo "
        </h2>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-xs-12 col-sm-4 pb-3\">
        <div class=\"row flex justify-content-center\">
            <div class=\"col-xs-12 col-sm-10 text-center\">
                <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/computer.svg");
        echo "\" class=\"img-responsive mx-auto d-block\" alt=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Réparation de MAC et PC"]);
        echo "\">
                <h3 class=\"h3-responsive text-uppercase text-primary mt-4\">
                    ";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Réparation de MAC et PC"]);
        echo "
                </h3>
                <p>";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Notre équipe est spécialisée dans la réparation et la configuration de poste de travail MAC et PC."]);
        echo "</p>
            </div>
        </div>
    </div>
    <div class=\"col-xs-12 col-sm-4 pb-3\">
        <div class=\"row flex justify-content-center\">
            <div class=\"col-xs-12 col-sm-10 text-center\">
                <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/qualite.svg");
        echo "\" class=\"img-responsive mx-auto d-block\" alt=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Services de qualité"]);
        echo "\">
                <h3 class=\"h3-responsive text-uppercase text-primary mt-4\">
                    ";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [" Services de qualité"]);
        echo "
                </h3>
                <p>";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Notre équipe se fera un plaisir de vous répondre de façon personnalisée, rapide et efficace à vos besoins réels en informatique!"]);
        echo "</p>
            </div>
        </div>
    </div>
    <div class=\"col-xs-12 col-sm-4 pb-3\">
        <div class=\"row flex justify-content-center\">
            <div class=\"col-xs-12 col-sm-10 text-center\">
                <img src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple.svg");
        echo "\" class=\"img-responsive mx-auto d-block\" alt=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Certifier par Apple"]);
        echo "\">
                <h3 class=\"h3-responsive text-uppercase text-primary mt-4\">
                    ";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Certifier par Apple"]);
        echo "
                </h3>
                <p>";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nos techniciens sont certifiés pour toujours être au summum des exigences d’Apple"]);
        echo "</p>
            </div>
        </div>
    </div>
</div>
<div class=\"row flex justify-content-center\">
    <div class=\"col-xs-12 col-sm-10\">
        <div class=\"card primary-color my-5 border-rad-5\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-3 py-2\">
                        <img src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/recuperation.svg");
        echo "\" class=\"img-responsive mx-auto d-block\" alt=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Recyclage de votre ancien Mac ou PC"]);
        echo "\">
                    </div>
                    <div class=\"col-xs-12 col-sm-9\">
                        <h5 class=\"h5-responsive text-white py-3 mt-2\">
                            ";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous offrons le recyclage de votre ancien Mac ou PC à l'achat d'un nouvel ordinateur!"]);
        echo "
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/reusable/pourquoi.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 53,  123 => 49,  109 => 38,  104 => 36,  97 => 34,  87 => 27,  82 => 25,  75 => 23,  65 => 16,  60 => 14,  53 => 12,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row pb-5\">
    <div class=\"col-12\">
        <h2 class=\"h2-responsive text-uppercase text-primary text-center\">
            {{ 'Pourquoi nous choisir?'|_ }}
        </h2>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-xs-12 col-sm-4 pb-3\">
        <div class=\"row flex justify-content-center\">
            <div class=\"col-xs-12 col-sm-10 text-center\">
                <img src=\"{{'assets/images/computer.svg'|theme}}\" class=\"img-responsive mx-auto d-block\" alt=\"{{ 'Réparation de MAC et PC'|_ }}\">
                <h3 class=\"h3-responsive text-uppercase text-primary mt-4\">
                    {{ 'Réparation de MAC et PC'|_ }}
                </h3>
                <p>{{ 'Notre équipe est spécialisée dans la réparation et la configuration de poste de travail MAC et PC.'|_ }}</p>
            </div>
        </div>
    </div>
    <div class=\"col-xs-12 col-sm-4 pb-3\">
        <div class=\"row flex justify-content-center\">
            <div class=\"col-xs-12 col-sm-10 text-center\">
                <img src=\"{{'assets/images/qualite.svg'|theme}}\" class=\"img-responsive mx-auto d-block\" alt=\"{{ 'Services de qualité'|_ }}\">
                <h3 class=\"h3-responsive text-uppercase text-primary mt-4\">
                    {{ ' Services de qualité'|_ }}
                </h3>
                <p>{{ 'Notre équipe se fera un plaisir de vous répondre de façon personnalisée, rapide et efficace à vos besoins réels en informatique!'|_ }}</p>
            </div>
        </div>
    </div>
    <div class=\"col-xs-12 col-sm-4 pb-3\">
        <div class=\"row flex justify-content-center\">
            <div class=\"col-xs-12 col-sm-10 text-center\">
                <img src=\"{{'assets/images/apple.svg'|theme}}\" class=\"img-responsive mx-auto d-block\" alt=\"{{ 'Certifier par Apple'|_ }}\">
                <h3 class=\"h3-responsive text-uppercase text-primary mt-4\">
                    {{ 'Certifier par Apple'|_ }}
                </h3>
                <p>{{ 'Nos techniciens sont certifiés pour toujours être au summum des exigences d’Apple'|_ }}</p>
            </div>
        </div>
    </div>
</div>
<div class=\"row flex justify-content-center\">
    <div class=\"col-xs-12 col-sm-10\">
        <div class=\"card primary-color my-5 border-rad-5\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-3 py-2\">
                        <img src=\"{{'assets/images/recuperation.svg'|theme}}\" class=\"img-responsive mx-auto d-block\" alt=\"{{ 'Recyclage de votre ancien Mac ou PC'|_ }}\">
                    </div>
                    <div class=\"col-xs-12 col-sm-9\">
                        <h5 class=\"h5-responsive text-white py-3 mt-2\">
                            {{ 'Nous offrons le recyclage de votre ancien Mac ou PC à l\\'achat d\\'un nouvel ordinateur!'|_ }}
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/reusable/pourquoi.htm", "");
    }
}
