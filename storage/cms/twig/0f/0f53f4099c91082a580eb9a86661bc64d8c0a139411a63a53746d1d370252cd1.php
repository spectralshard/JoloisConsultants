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

/* /Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/demandeservices/scf-message.htm */
class __TwigTemplate_0fd39ca6dc4980cf4abb5f1f1a9cd98135b234a76f0f18e3a3ebaa77acf6bc1b extends \Twig\Template
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
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 1
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 2
                echo "
  ";
                // line 3
                if ((($context["flashSuccess"] ?? null) == ($context["__SELF__"] ?? null))) {
                    // line 4
                    echo "  \t<div class=\"alert alert-";
                    (((($context["type"] ?? null) == "error")) ? (print ("danger")) : (print (twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))));
                    echo "\">
  \t\t";
                    // line 5
                    echo nl2br(call_user_func_array($this->env->getFunction('html_entity_decode')->getCallable(), [($context["message"] ?? null)]));
                    echo "
  \t</div>
  ";
                }
                // line 8
                echo "
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/demandeservices/scf-message.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  50 => 5,  45 => 4,  43 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% flash%}

  {% if flashSuccess==__SELF__ %}
  \t<div class=\"alert alert-{{ type == 'error' ? 'danger' : type }}\">
  \t\t{{ html_entity_decode(message)|nl2br }}
  \t</div>
  {% endif %}

{% endflash %}", "/Users/alexandrefoisy/web sites/jolois/themes/jolois/partials/demandeservices/scf-message.htm", "");
    }
}
