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

/* themes/contrib/vani/templates/form/details.html.twig */
class __TwigTemplate_c4a2cb8cf6c21cbe8b5fd60a41c3e32add7f9876e0f122ff1e3f9768be9c88c8 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 18, "set" => 20);
        $filters = array("escape" => 17);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "<details";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 17, $this->source), "html", null, true);
        echo ">";
        // line 18
        if (($context["title"] ?? null)) {
            // line 20
            $context["summary_classes"] = [0 => ((            // line 21
($context["required"] ?? null)) ? ("js-form-required") : ("")), 1 => ((            // line 22
($context["required"] ?? null)) ? ("form-required") : (""))];
            // line 25
            echo "    <summary";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [0 => ($context["summary_classes"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 25, $this->source), "html", null, true);
            echo "</summary>";
        }
        // line 27
        echo "<div class=\"form-details-wrapper\">
    ";
        // line 28
        if (($context["errors"] ?? null)) {
            // line 29
            echo "      <div class=\"form-item--error-message\">
        <strong>";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 30, $this->source), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 33
        if (($context["description"] ?? null)) {
            // line 34
            echo "<div class=\"details-description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 34, $this->source), "html", null, true);
            echo "</div>";
        }
        // line 36
        if (($context["children"] ?? null)) {
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 37, $this->source), "html", null, true);
        }
        // line 39
        if (($context["value"] ?? null)) {
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 40, $this->source), "html", null, true);
        }
        // line 42
        echo "</div>
</details>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/vani/templates/form/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  107 => 40,  105 => 39,  102 => 37,  100 => 36,  95 => 34,  93 => 33,  87 => 30,  84 => 29,  82 => 28,  79 => 27,  72 => 25,  70 => 22,  69 => 21,  68 => 20,  66 => 18,  62 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/vani/templates/form/details.html.twig", "C:\\xampp\\htdocs\\project\\web\\themes\\contrib\\vani\\templates\\form\\details.html.twig");
    }
}
