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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/navbar.htm */
class __TwigTemplate_008657ff231231bf6572dddb42aa5516d4fd77c3a599940738af051e8c06800c extends \Twig\Template
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
        echo "<nav id=\"navbar\" class=\"navbar bg-white navbar-expand-lg\">
\t<div class=\"container\">
\t<a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t<img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/jolois-consultants-logo.svg");
        echo "\" style=\"width:200px;\" alt=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Jolois Consultants en informatique logo"]);
        echo "\">
\t</a>
\t<button class=\"navbar-toggler btn-secondary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\taria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>
\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t<ul class=\"navbar-nav ml-auto pb-0\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t\t\t\t";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Acceuil"]);
        echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["L'entreprise"]);
        echo "
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu animate slideIn\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("entreprise");
        echo "#\">Jean-Marie</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("entreprise");
        echo "#\">Elias</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("entreprise");
        echo "#\">Alexis</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("equipe");
        echo "#\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["L'équipe"]);
        echo "</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\">
\t\t\t\t\t";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Services"]);
        echo "</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">
\t\t\t\t\t";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item pl-3 d-none d-sm-block\">
\t\t\t\t<a class=\"btn btn-primary\" href=\"mailto:";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 38), "support_email", [], "any", false, false, false, 38), "html", null, true);
        echo "\" target=\"_blank\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Demande de support"]);
        echo "</a>
\t\t\t</li>
\t</ul>
\t</div>
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 38,  113 => 35,  109 => 34,  103 => 31,  99 => 30,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  72 => 20,  63 => 14,  59 => 13,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"navbar\" class=\"navbar bg-white navbar-expand-lg\">
\t<div class=\"container\">
\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
\t\t<img src=\"{{'assets/images/jolois-consultants-logo.svg'|theme}}\" style=\"width:200px;\" alt=\"{{ 'Jolois Consultants en informatique logo'|_ }}\">
\t</a>
\t<button class=\"navbar-toggler btn-secondary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\taria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>
\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t<ul class=\"navbar-nav ml-auto pb-0\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ 'home'|page }}\">
\t\t\t\t\t{{'Acceuil'|_}}
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t{{'L\\'entreprise'|_}}
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu animate slideIn\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ 'entreprise'|page }}#\">Jean-Marie</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ 'entreprise'|page }}#\">Elias</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ 'entreprise'|page }}#\">Alexis</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ 'equipe'|page }}#\">{{'L\\'équipe'|_}}</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ 'services'|page }}\">
\t\t\t\t\t{{'Services'|_}}</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ 'contact'|page }}\">
\t\t\t\t\t{{'Contact'|_}}</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item pl-3 d-none d-sm-block\">
\t\t\t\t<a class=\"btn btn-primary\" href=\"mailto:{{ this.theme.support_email }}\" target=\"_blank\">{{'Demande de support'|_}}</a>
\t\t\t</li>
\t</ul>
\t</div>
\t</div>
</nav>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/navbar.htm", "");
    }
}
