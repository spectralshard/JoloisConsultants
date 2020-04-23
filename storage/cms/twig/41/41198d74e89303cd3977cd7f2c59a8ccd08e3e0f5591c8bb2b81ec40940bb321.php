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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/layouts/default.htm */
class __TwigTemplate_819745bf2e8e50dfcba5f688151466967a2d1aac00f3111193c5865941197e73 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_title", [], "any", false, false, false, 6), "html", null, true);
        echo " | Jolois</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), "html", null, true);
        echo " | Jolois\">
    <meta name=\"author\" content=\"Techno24.net\">
    <meta name=\"robots\" content=\"index,follow\">
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\"/>
    <meta property=\"og:title\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 12), "meta_title", [], "any", false, false, false, 12), "html", null, true);
        echo " | Jolois\" />
    <meta property=\"og:url\" content=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\" />
    ";
        // line 14
        if (($context["image_url"] ?? null)) {
            // line 15
            echo "    <meta property=\"og:image:secure_url\" content=\"";
            echo twig_escape_filter($this->env, ($context["image_url"] ?? null), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["image_url"] ?? null), "html", null, true);
            echo "\" />
    <meta name=\"twitter:image\" content=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["image_url"] ?? null), "html", null, true);
            echo "\">
    ";
        } else {
            // line 19
            echo "    <meta property=\"og:image:secure_url\" content=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/default-share-img.jpg");
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 20
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/default-share-img.jpg");
            echo "\" />
    <meta name=\"twitter:image\" content=\"";
            // line 21
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/default-share-img.jpg");
            echo "\">
    ";
        }
        // line 23
        echo "    <meta property=\"og:image:height\" content=\"1200\">
    <meta property=\"og:image:width\" content=\"800\">
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:description\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 26), "settings", [], "any", false, false, false, 26), "meta_description", [], "any", false, false, false, 26), "html", null, true);
        echo "\" />
    <meta property=\"og:locale\" content=\"fr_CA\">
    <meta property=\"og:site_name\" content=\"Techno24.net\" />
    <meta name=\"twitter:title\" content=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 29), "meta_title", [], "any", false, false, false, 29), "html", null, true);
        echo " | Jolois\">
    <meta name=\"twitter:description\" content=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 30), "settings", [], "any", false, false, false, 30), "meta_description", [], "any", false, false, false, 30), "html", null, true);
        echo "\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\"/>
    <link href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon.png");
        echo "\" rel=\"apple-touch-icon\">
    <link href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/theme.css"]);
        // line 38
        echo "\" rel=\"stylesheet\">
    ";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 40
        echo "</head>
<body>
<header>
    ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "</header>
<main id=\"page\">
    ";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 48
        echo "</main>
<footer>
    ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "</footer>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 52
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 53
                echo "<span id=\"flash\" data-type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "\"></span>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 55
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/jquery-3.4.1.min.js", 1 => "assets/vendor/popper/popper.js", 2 => "assets/vendor/bootstrap/js/bootstrap.min.js", 3 => "assets/vendor/aos/js/aos.js", 4 => "assets/js/main.js"]);
        // line 61
        echo "\"></script>
";
        // line 62
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 63
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 64
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 64,  201 => 63,  190 => 62,  187 => 61,  184 => 55,  175 => 53,  172 => 52,  169 => 51,  165 => 50,  161 => 48,  159 => 47,  155 => 45,  150 => 44,  146 => 43,  141 => 40,  138 => 39,  135 => 38,  133 => 36,  129 => 35,  125 => 34,  121 => 33,  115 => 30,  111 => 29,  105 => 26,  100 => 23,  95 => 21,  91 => 20,  86 => 19,  81 => 17,  77 => 16,  72 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{{ this.page.meta_title }} | Jolois</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }} | Jolois\">
    <meta name=\"author\" content=\"Techno24.net\">
    <meta name=\"robots\" content=\"index,follow\">
    <link rel=\"canonical\" href=\"{{ ''|page }}\"/>
    <meta property=\"og:title\" content=\"{{ this.page.meta_title }} | Jolois\" />
    <meta property=\"og:url\" content=\"{{ ''|page }}\" />
    {% if image_url %}
    <meta property=\"og:image:secure_url\" content=\"{{ image_url }}\" />
    <meta property=\"og:image\" content=\"{{ image_url }}\" />
    <meta name=\"twitter:image\" content=\"{{ image_url }}\">
    {% else %}
    <meta property=\"og:image:secure_url\" content=\"{{'assets/images/default-share-img.jpg'|theme}}\" />
    <meta property=\"og:image\" content=\"{{'assets/images/default-share-img.jpg'|theme}}\" />
    <meta name=\"twitter:image\" content=\"{{'assets/images/default-share-img.jpg'|theme}}\">
    {% endif %}
    <meta property=\"og:image:height\" content=\"1200\">
    <meta property=\"og:image:width\" content=\"800\">
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:description\" content=\"{{ this.page.settings.meta_description }}\" />
    <meta property=\"og:locale\" content=\"fr_CA\">
    <meta property=\"og:site_name\" content=\"Techno24.net\" />
    <meta name=\"twitter:title\" content=\"{{ this.page.meta_title }} | Jolois\">
    <meta name=\"twitter:description\" content=\"{{ this.page.settings.meta_description }}\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"{{ 'assets/images/favicon.png'|theme }}\"/>
    <link href=\"{{ 'assets/images/apple-touch-icon.png'|theme }}\" rel=\"apple-touch-icon\">
    <link href=\"{{ 'assets/images/apple-touch-icon-precomposed.png'|theme }}\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"{{ [
    'assets/css/theme.css',
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}
</head>
<body>
<header>
    {% partial 'header' %}
    {% partial 'navbar' %}
</header>
<main id=\"page\">
    {% page %}
</main>
<footer>
    {% partial 'footer' %}
</footer>
{% flash %}
<span id=\"flash\" data-type=\"{{ type }}\" data-message=\"{{ message }}\"></span>
{% endflash %}
<script src=\"{{ [
'assets/vendor/jquery/jquery-3.4.1.min.js',
'assets/vendor/popper/popper.js',
'assets/vendor/bootstrap/js/bootstrap.min.js',
'assets/vendor/aos/js/aos.js',
'assets/js/main.js',
]|theme }}\"></script>
{% framework extras %}
{% scripts %}
</body>
</html>", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/layouts/default.htm", "");
    }
}
