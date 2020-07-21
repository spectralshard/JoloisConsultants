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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/services/rates.htm */
class __TwigTemplate_17e8a1baa6726e985f92af9970185d16af24fa9377b7715ac8cb0b30b9f93a49 extends \Twig\Template
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
        echo "<div class=\"container pt-5\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h2 class=\"h2-responsive text-uppercase text-primary text-center\">
                ";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nos tarifs"]);
        echo "
            </h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-4 pb-4\">
            <div class=\"card border-rad-5\">
                <img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/service-etudiants-1200x.jpg");
        echo "\"
                     class=\"card-img-top img-fluid border-rad-5\" alt=\"";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Étudiants, troisième âge et résidentiel"]);
        echo "\">
                <div class=\"card-body bg-primary d-flex align-items-center\">
                    <h3 class=\"h3-responsive text-white mt-2\">
                        ";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Étudiants, troisième âge et résidentiel"]);
        echo "
                    </h3>
                </div>
                <div class=\"card-body\">
                    <h4 class=\"h4-responsive\">
                        ";
        // line 21
        if ((($context["lang"] ?? null) == "fr")) {
            // line 22
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 22), "tarif1", [], "any", false, false, false, 22), "html", null, true);
            echo " \$/heure + ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 22), "tarif1_frais", [], "any", false, false, false, 22), "html", null, true);
            echo "\$ de frais de déplacement&nbsp;<span
                            class=\"text-danger\">*</span>
                        ";
        } else {
            // line 25
            echo "                        \$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 25), "tarif1", [], "any", false, false, false, 25), "html", null, true);
            echo "/hour + \$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 25), "tarif1_frais", [], "any", false, false, false, 25), "html", null, true);
            echo " travel expenses&nbsp;<span
                            class=\"text-danger\">*</span>
                        ";
        }
        // line 28
        echo "                    </h4>

                </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-12 col-md-4 pb-4\">
            <div class=\"card border-rad-5\">
                <img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/service-autonomes-1200x.jpg");
        echo "\"
                     class=\"card-img-top img-fluid border-rad-5\" alt=\"";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Travailleurs autonomes et bureau à domicile"]);
        echo "\">
                <div class=\"card-body bg-primary\">
                    <h3 class=\"h3-responsive text-white mt-2\">
                        ";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Travailleurs autonomes et bureau à domicile"]);
        echo "
                    </h3>
                </div>
                <div class=\"card-body d-flex align-items-center\">
                    <h4 class=\"h4-responsive\">
                        ";
        // line 44
        if ((($context["lang"] ?? null) == "fr")) {
            // line 45
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 45), "tarif2", [], "any", false, false, false, 45), "html", null, true);
            echo " \$/heure + ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 45), "tarif2_frais", [], "any", false, false, false, 45), "html", null, true);
            echo "\$ de frais de déplacement&nbsp;<span
                            class=\"text-danger\">*</span>
                        ";
        } else {
            // line 48
            echo "                        \$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 48), "tarif2", [], "any", false, false, false, 48), "html", null, true);
            echo "/hour + \$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 48), "tarif2_frais", [], "any", false, false, false, 48), "html", null, true);
            echo " travel expenses&nbsp;<span
                            class=\"text-danger\">*</span>
                        ";
        }
        // line 51
        echo "                    </h4>

                </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-12 col-md-4 pb-4\">
            <div class=\"card border-rad-5\">
                <img src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/service-pme-1200x.jpg");
        echo "\"
                     class=\"card-img-top img-fluid border-rad-5\" alt=\"";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["PME, industries et commerces"]);
        echo "\">
                <div class=\"card-body bg-primary\">
                    <h3 class=\"h3-responsive text-white mt-2\">
                        ";
        // line 62
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["PME, industries et commerces"]);
        echo "
                    </h3>
                </div>
                <div class=\"card-body d-flex align-items-center\">
                    <h4 class=\"h4-responsive\">
                        ";
        // line 67
        if ((($context["lang"] ?? null) == "fr")) {
            // line 68
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 68), "tarif3", [], "any", false, false, false, 68), "html", null, true);
            echo " \$/heure + ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 68), "tarif3_frais", [], "any", false, false, false, 68), "html", null, true);
            echo "\$ de frais de déplacement&nbsp;<span
                            class=\"text-danger\">*</span>
                        ";
        } else {
            // line 71
            echo "                        \$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 71), "tarif3", [], "any", false, false, false, 71), "html", null, true);
            echo "/hour + \$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 71), "tarif3_frais", [], "any", false, false, false, 71), "html", null, true);
            echo " travel expenses&nbsp;<span
                            class=\"text-danger\">*</span>
                        ";
        }
        // line 74
        echo "                    </h4>

                </div>
            </div>
        </div>
        <div class=\"col-12 pb-4\">
            <div class=\"card border-rad-5 bg-light\">
                <div class=\"card-body text-center\">
                    <p>
                        <em>*** ";
        // line 83
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Rabais pour clients avec banques d'heures"]);
        echo "</em>
                    </p>
                    <p>
                        <em>* ";
        // line 86
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Les frais de déplacement s\"appliquent à la grande région de Montréal et sa banlieue. Les déplacements plus longs seront facturés à l'heure."]);
        echo "</em>
                    </p>
                    <p>
                        <em>** ";
        // line 89
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Les frais de dépannage par téléphone et par courriel seront facturés par tranche de 30 minutes."]);
        echo "</em>
                    </p>
                    <p>
                        <em>*** ";
        // line 92
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nos tarifs sont valables pour toute prestation réalisée du lundi au vendredi entre de 8h00 à18h00."]);
        echo "
                            ";
        // line 93
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Pour les interventions hors périodes ouvrées, le week-end, les jours fériés ou demandés en urgence sont majorés de 50 %"]);
        echo "</em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/services/rates.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 93,  214 => 92,  208 => 89,  202 => 86,  196 => 83,  185 => 74,  176 => 71,  167 => 68,  165 => 67,  157 => 62,  151 => 59,  147 => 58,  138 => 51,  129 => 48,  120 => 45,  118 => 44,  110 => 39,  104 => 36,  100 => 35,  91 => 28,  82 => 25,  73 => 22,  71 => 21,  63 => 16,  57 => 13,  53 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container pt-5\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h2 class=\"h2-responsive text-uppercase text-primary text-center\">
                {{ 'Nos tarifs'|_ }}
            </h2>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-4 pb-4\">
            <div class=\"card border-rad-5\">
                <img src=\"{{'assets/images/service-etudiants-1200x.jpg'|theme}}\"
                     class=\"card-img-top img-fluid border-rad-5\" alt=\"{{ 'Étudiants, troisième âge et résidentiel'|_ }}\">
                <div class=\"card-body bg-primary d-flex align-items-center\">
                    <h3 class=\"h3-responsive text-white mt-2\">
                        {{ 'Étudiants, troisième âge et résidentiel'|_ }}
                    </h3>
                </div>
                <div class=\"card-body\">
                    <h4 class=\"h4-responsive\">
                        {% if lang == 'fr' %}
                        {{ this.theme.tarif1 }} \$/heure + {{ this.theme.tarif1_frais }}\$ de frais de déplacement&nbsp;<span
                            class=\"text-danger\">*</span>
                        {% else %}
                        \${{ this.theme.tarif1 }}/hour + \${{ this.theme.tarif1_frais }} travel expenses&nbsp;<span
                            class=\"text-danger\">*</span>
                        {% endif %}
                    </h4>

                </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-12 col-md-4 pb-4\">
            <div class=\"card border-rad-5\">
                <img src=\"{{'assets/images/service-autonomes-1200x.jpg'|theme}}\"
                     class=\"card-img-top img-fluid border-rad-5\" alt=\"{{ 'Travailleurs autonomes et bureau à domicile'|_ }}\">
                <div class=\"card-body bg-primary\">
                    <h3 class=\"h3-responsive text-white mt-2\">
                        {{ 'Travailleurs autonomes et bureau à domicile'|_ }}
                    </h3>
                </div>
                <div class=\"card-body d-flex align-items-center\">
                    <h4 class=\"h4-responsive\">
                        {% if lang == 'fr' %}
                        {{ this.theme.tarif2 }} \$/heure + {{ this.theme.tarif2_frais }}\$ de frais de déplacement&nbsp;<span
                            class=\"text-danger\">*</span>
                        {% else %}
                        \${{ this.theme.tarif2 }}/hour + \${{ this.theme.tarif2_frais }} travel expenses&nbsp;<span
                            class=\"text-danger\">*</span>
                        {% endif %}
                    </h4>

                </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-12 col-md-4 pb-4\">
            <div class=\"card border-rad-5\">
                <img src=\"{{'assets/images/service-pme-1200x.jpg'|theme}}\"
                     class=\"card-img-top img-fluid border-rad-5\" alt=\"{{ 'PME, industries et commerces'|_ }}\">
                <div class=\"card-body bg-primary\">
                    <h3 class=\"h3-responsive text-white mt-2\">
                        {{ 'PME, industries et commerces'|_ }}
                    </h3>
                </div>
                <div class=\"card-body d-flex align-items-center\">
                    <h4 class=\"h4-responsive\">
                        {% if lang == 'fr' %}
                        {{ this.theme.tarif3 }} \$/heure + {{ this.theme.tarif3_frais }}\$ de frais de déplacement&nbsp;<span
                            class=\"text-danger\">*</span>
                        {% else %}
                        \${{ this.theme.tarif3 }}/hour + \${{ this.theme.tarif3_frais }} travel expenses&nbsp;<span
                            class=\"text-danger\">*</span>
                        {% endif %}
                    </h4>

                </div>
            </div>
        </div>
        <div class=\"col-12 pb-4\">
            <div class=\"card border-rad-5 bg-light\">
                <div class=\"card-body text-center\">
                    <p>
                        <em>*** {{ 'Rabais pour clients avec banques d\\'heures'|_ }}</em>
                    </p>
                    <p>
                        <em>* {{ 'Les frais de déplacement s\\\"appliquent à la grande région de Montréal et sa banlieue. Les déplacements plus longs seront facturés à l\\'heure.'|_ }}</em>
                    </p>
                    <p>
                        <em>** {{ 'Les frais de dépannage par téléphone et par courriel seront facturés par tranche de 30 minutes.'|_ }}</em>
                    </p>
                    <p>
                        <em>*** {{ 'Nos tarifs sont valables pour toute prestation réalisée du lundi au vendredi entre de 8h00 à18h00.'|_ }}
                            {{ 'Pour les interventions hors périodes ouvrées, le week-end, les jours fériés ou demandés en urgence sont majorés de 50 %'|_ }}</em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/services/rates.htm", "");
    }
}
