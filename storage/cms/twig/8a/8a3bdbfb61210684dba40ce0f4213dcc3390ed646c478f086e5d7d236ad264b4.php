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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/techno24-logo.png");
        echo "\" style=\"width:150px;\" alt=\"";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Logo de Techno24.net"]);
        echo "\">
\t</a>
\t<button class=\"navbar-toggler btn-secondary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\taria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>
\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t<ul class=\"navbar-nav ml-auto pb-0\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t\t\t\t<strong>";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["ACCUEIL"]);
        echo "</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<strong>";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["PRODUITS"]);
        echo "</strong>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("office365");
        echo "#office\">Office365</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("bitdefender");
        echo "\">BitDefender</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("office365");
        echo "#msazure\">Microsoft Azure</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("office365");
        echo "#entreprise\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Logiciel d'entreprise"]);
        echo "</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<strong>";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["HÉBERGEMENT"]);
        echo "</strong>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hosting");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hébergement Web"]);
        echo "</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hosting");
        echo "#solutions\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Autres solutions"]);
        echo "</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hosting");
        echo "#technologie\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Technologies disponible"]);
        echo "</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/blogList");
        echo "\">
\t\t\t\t\t<strong>";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NOUVELLES"]);
        echo "</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<strong>";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["COURRIEL WEB"]);
        echo "</strong>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"https://www.office.com/login?es=Click&ru=%2F&msafed=0\" target=\"_blank\">Office365</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"https://mail.hostedemail.com\" target=\"_blank\">Host Email</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"https://techno24.net/webmail\" target=\"_blank\">Webmail</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">
\t\t\t\t\t<strong>";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Nous joindre"]);
        echo "</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t";
        // line 59
        if ((($context["lang"] ?? null) == "fr")) {
            // line 60
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"nav-link\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'en'\" title=\"English\">
\t\t\t\t\t<strong>EN</strong>
\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"nav-link\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'fr'\" title=\"Français\">
\t\t\t\t\t<strong>FR</strong>
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 74
        echo "\t\t\t</li>
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
        return array (  181 => 74,  172 => 67,  163 => 60,  161 => 59,  155 => 56,  151 => 55,  139 => 46,  131 => 41,  127 => 40,  118 => 36,  112 => 35,  106 => 34,  100 => 31,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  71 => 19,  63 => 14,  59 => 13,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"navbar\" class=\"navbar bg-white navbar-expand-lg\">
\t<div class=\"container\">
\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
\t\t<img src=\"{{'assets/images/techno24-logo.png'|theme}}\" style=\"width:150px;\" alt=\"{{ 'Logo de Techno24.net'|_ }}\">
\t</a>
\t<button class=\"navbar-toggler btn-secondary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\taria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>
\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t<ul class=\"navbar-nav ml-auto pb-0\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link nav-link\" href=\"{{ 'home'|page }}\">
\t\t\t\t\t<strong>{{'ACCUEIL'|_}}</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<strong>{{'PRODUITS'|_}}</strong>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ 'office365'|page }}#office\">Office365</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ 'bitdefender'|page }}\">BitDefender</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ 'office365'|page }}#msazure\">Microsoft Azure</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ 'office365'|page }}#entreprise\">{{'Logiciel d\\'entreprise'|_}}</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<strong>{{'HÉBERGEMENT'|_}}</strong>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ 'hosting'|page }}\">{{'Hébergement Web'|_}}</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ 'hosting'|page }}#solutions\">{{'Autres solutions'|_}}</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ 'hosting'|page }}#technologie\">{{'Technologies disponible'|_}}</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ 'blog/blogList'|page }}\">
\t\t\t\t\t<strong>{{'NOUVELLES'|_}}</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
\t\t\t\t   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<strong>{{'COURRIEL WEB'|_}}</strong>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"https://www.office.com/login?es=Click&ru=%2F&msafed=0\" target=\"_blank\">Office365</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"https://mail.hostedemail.com\" target=\"_blank\">Host Email</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"https://techno24.net/webmail\" target=\"_blank\">Webmail</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ 'contact'|page }}\">
\t\t\t\t\t<strong>{{'Nous joindre'|_}}</strong></a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t{% if lang == 'fr' %}
\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"nav-link\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'en'\" title=\"English\">
\t\t\t\t\t<strong>EN</strong>
\t\t\t\t</a>
\t\t\t\t{% else %}
\t\t\t\t<a href=\"#\"
\t\t\t\t   class=\"nav-link\"
\t\t\t\t   data-request=\"onSwitchLocale\"
\t\t\t\t   data-request-data=\"locale: 'fr'\" title=\"Français\">
\t\t\t\t\t<strong>FR</strong>
\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t</li>
\t</ul>
\t</div>
\t</div>
</nav>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/navbar.htm", "");
    }
}
