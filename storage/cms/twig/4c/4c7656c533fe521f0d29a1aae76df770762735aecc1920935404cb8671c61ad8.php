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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/pages/404.htm */
class __TwigTemplate_38001ad914397a21ce7dc1e45428326461eb9bf0b4bede8286f87a8b9cd1df77 extends \Twig\Template
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
        echo "<div class=\"jumbotron hero-home\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-6 my-2 my-sm-5\">
                <h1 class=\"h1-responsive white-text my-0 my-sm-4 my-lg-5\" style=\"text-shadow: 2px 2px #333333;\">
                    <strong>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Oops! La page demandé est introuvable!"]);
        echo "</strong>
                </h1>
            </div>
        </div>
    </div>
</div>
<section class=\"intro my-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"wow flipInX\" style=\"font-size:10rem;\">
                    404
                </h2>
                <p class=\"wow flipInX\">
                    ";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cette page n'existe plus, vous pouvez retourner à la page d'accueil!"]);
        echo "
                </p>
                <a class=\"btn btn-secondary wow fadeInUp\"
                   href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" role=\"button\">
                    ";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Retourné à la page d'accueil"]);
        echo "
                </a>
            </div>
        </div>
        <div class=\"row my-5 pb-4\">
            <div class=\"col\">

            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  67 => 23,  61 => 20,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron hero-home\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-6 my-2 my-sm-5\">
                <h1 class=\"h1-responsive white-text my-0 my-sm-4 my-lg-5\" style=\"text-shadow: 2px 2px #333333;\">
                    <strong>{{ 'Oops! La page demandé est introuvable!'|_ }}</strong>
                </h1>
            </div>
        </div>
    </div>
</div>
<section class=\"intro my-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <h2 class=\"wow flipInX\" style=\"font-size:10rem;\">
                    404
                </h2>
                <p class=\"wow flipInX\">
                    {{ 'Cette page n\\'existe plus, vous pouvez retourner à la page d\\'accueil!'|_ }}
                </p>
                <a class=\"btn btn-secondary wow fadeInUp\"
                   href=\"{{ 'home'|page }}\" role=\"button\">
                    {{'Retourné à la page d\\'accueil'|_ }}
                </a>
            </div>
        </div>
        <div class=\"row my-5 pb-4\">
            <div class=\"col\">

            </div>
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/pages/404.htm", "");
    }
}
