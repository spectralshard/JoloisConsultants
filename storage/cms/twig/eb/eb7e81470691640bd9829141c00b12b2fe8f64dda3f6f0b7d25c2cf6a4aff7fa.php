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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/home/services.htm */
class __TwigTemplate_f52b9015124e399c95aae0e398b5148467721ac48983ff0ed8639d31c3108b61 extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"col-12\">
        <h2 class=\"h2-responsive text-uppercase text-primary text-center\">
            ";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nos services informatiques"]);
        echo "
        </h2>
    </div>
</div>
<div class=\"row my-3 my-sm-4 my-lg-3\">
    <div class=\"col-12\">
        <a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services-et-tarifs");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Étudiants, troisième âge et résidentiel"]);
        echo "\">
            <div class=\"card border-rad-5\">
                <div class=\"row no-gutters\">
                    <div class=\"col-sm-6\">
                        <img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/service-etudiants-1200x.jpg");
        echo "\" class=\"card-img-left img-fluid flex-auto border-rad-5\" alt=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Étudiants, troisième âge et résidentiel"]);
        echo "\">
                    </div>
                    <div class=\"col-sm-6 d-flex align-items-center\">
                        <div class=\"card-body \">
                            <h4 class=\"h4-responsive text-secondary mx-1 mx-sm-3 mx-lg-5 text-uppercase\">
                                ";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pour"]);
        echo "
                            </h4>
                            <h3 class=\"h3-responsive text-primary mt-0 mx-1 mx-sm-3 mx-lg-5\">
                                ";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Étudiants, troisième âge et résidentiel"]);
        echo "
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class=\"row my-3 my-sm-4 my-lg-3\">
    <div class=\"col-12\">
        <a href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services-et-tarifs");
        echo "\"  title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Travailleurs autonomes et bureau à domicile"]);
        echo "\">
            <div class=\"card border-rad-5\">
                <div class=\"d-flex row no-gutters\">
                    <div class=\"order-2 order-sm-1 d-flex col-sm-6 align-items-center\">
                        <div class=\"card-body\">
                            <h4 class=\"h4-responsive text-secondary mx-1 mx-sm-3 mx-lg-5 text-uppercase\">
                                ";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pour"]);
        echo "
                            </h4>
                            <h3 class=\"h3-responsive text-primary mt-0 mx-1 mx-sm-3 mx-lg-5\">
                                ";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Travailleurs autonomes et bureau à domicile"]);
        echo "
                            </h3>
                        </div>
                    </div>
                    <div class=\"order-1 order-sm-2 col-sm-6 col-xs-pull-3\">
                        <img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/service-autonomes-1200x.jpg");
        echo "\" class=\"card-img-left img-fluid flex-auto border-rad-5\" alt=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Travailleurs autonomes et bureau à domicile"]);
        echo "\">
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class=\"row my-3 my-sm-4 my-lg-3 pb-5\">
    <div class=\"col-12\">
        <a href=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services-et-tarifs");
        echo "\" title=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["PME, industries et commerces"]);
        echo "\">
            <div class=\"card border-rad-5\">
                <div class=\"row no-gutters\">
                    <div class=\"col-sm-6\">
                        <img src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/service-pme-1200x.jpg");
        echo "\" class=\"card-img-left img-fluid flex-auto border-rad-5\" alt=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["PME, industries et commerces"]);
        echo "\">
                    </div>
                    <div class=\"col-sm-6 d-flex align-items-center\">
                        <div class=\"card-body \">
                            <h4 class=\"h4-responsive text-secondary mx-1 mx-sm-3 mx-lg-5 text-uppercase\">
                                ";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pour"]);
        echo "
                            </h4>
                            <h3 class=\"h3-responsive text-primary mt-0 mx-1 mx-sm-3 mx-lg-5\">
                                ";
        // line 68
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["PME, industries et commerces"]);
        echo "
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/home/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 68,  148 => 65,  138 => 60,  129 => 56,  115 => 47,  107 => 42,  101 => 39,  90 => 33,  76 => 22,  70 => 19,  60 => 14,  51 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-12\">
        <h2 class=\"h2-responsive text-uppercase text-primary text-center\">
            {{ 'Nos services informatiques'|_ }}
        </h2>
    </div>
</div>
<div class=\"row my-3 my-sm-4 my-lg-3\">
    <div class=\"col-12\">
        <a href=\"{{ 'services-et-tarifs'|page }}\" title=\"{{ 'Étudiants, troisième âge et résidentiel'|_ }}\">
            <div class=\"card border-rad-5\">
                <div class=\"row no-gutters\">
                    <div class=\"col-sm-6\">
                        <img src=\"{{'assets/images/service-etudiants-1200x.jpg'|theme}}\" class=\"card-img-left img-fluid flex-auto border-rad-5\" alt=\"{{ 'Étudiants, troisième âge et résidentiel'|_ }}\">
                    </div>
                    <div class=\"col-sm-6 d-flex align-items-center\">
                        <div class=\"card-body \">
                            <h4 class=\"h4-responsive text-secondary mx-1 mx-sm-3 mx-lg-5 text-uppercase\">
                                {{ 'Pour'|_ }}
                            </h4>
                            <h3 class=\"h3-responsive text-primary mt-0 mx-1 mx-sm-3 mx-lg-5\">
                                {{ 'Étudiants, troisième âge et résidentiel'|_ }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class=\"row my-3 my-sm-4 my-lg-3\">
    <div class=\"col-12\">
        <a href=\"{{ 'services-et-tarifs'|page }}\"  title=\"{{ 'Travailleurs autonomes et bureau à domicile'|_ }}\">
            <div class=\"card border-rad-5\">
                <div class=\"d-flex row no-gutters\">
                    <div class=\"order-2 order-sm-1 d-flex col-sm-6 align-items-center\">
                        <div class=\"card-body\">
                            <h4 class=\"h4-responsive text-secondary mx-1 mx-sm-3 mx-lg-5 text-uppercase\">
                                {{ 'Pour'|_ }}
                            </h4>
                            <h3 class=\"h3-responsive text-primary mt-0 mx-1 mx-sm-3 mx-lg-5\">
                                {{ 'Travailleurs autonomes et bureau à domicile'|_ }}
                            </h3>
                        </div>
                    </div>
                    <div class=\"order-1 order-sm-2 col-sm-6 col-xs-pull-3\">
                        <img src=\"{{'assets/images/service-autonomes-1200x.jpg'|theme}}\" class=\"card-img-left img-fluid flex-auto border-rad-5\" alt=\"{{ 'Travailleurs autonomes et bureau à domicile'|_ }}\">
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class=\"row my-3 my-sm-4 my-lg-3 pb-5\">
    <div class=\"col-12\">
        <a href=\"{{ 'services-et-tarifs'|page }}\" title=\"{{ 'PME, industries et commerces'|_ }}\">
            <div class=\"card border-rad-5\">
                <div class=\"row no-gutters\">
                    <div class=\"col-sm-6\">
                        <img src=\"{{'assets/images/service-pme-1200x.jpg'|theme}}\" class=\"card-img-left img-fluid flex-auto border-rad-5\" alt=\"{{ 'PME, industries et commerces'|_ }}\">
                    </div>
                    <div class=\"col-sm-6 d-flex align-items-center\">
                        <div class=\"card-body \">
                            <h4 class=\"h4-responsive text-secondary mx-1 mx-sm-3 mx-lg-5 text-uppercase\">
                                {{ 'Pour'|_ }}
                            </h4>
                            <h3 class=\"h3-responsive text-primary mt-0 mx-1 mx-sm-3 mx-lg-5\">
                                {{ 'PME, industries et commerces'|_ }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/home/services.htm", "");
    }
}
