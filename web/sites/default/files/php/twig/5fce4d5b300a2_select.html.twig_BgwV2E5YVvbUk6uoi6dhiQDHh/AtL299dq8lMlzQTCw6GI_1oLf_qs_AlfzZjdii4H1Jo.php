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

/* core/themes/stable/templates/form/select.html.twig */
class __TwigTemplate_1f80206a567e04a634233983ef6a20a2751bb6a235597ce6056ba4a44d46c958 extends \Twig\Template
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
        $tags = array("apply" => 13, "for" => 15, "if" => 16);
        $filters = array("escape" => 14, "spaceless" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'for', 'if'],
                ['escape', 'spaceless'],
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
        // line 13
        ob_start(function () { return ''; });
        // line 14
        echo "  <select";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 14, $this->source), "html", null, true);
        echo ">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 16
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, true, 16) == "optgroup")) {
                // line 17
                echo "        <optgroup label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\">
          ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, true, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                    // line 19
                    echo "            <option value=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "value", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    echo "\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["sub_option"], "selected", [], "any", false, false, true, 19)) ? (" selected=\"selected\"") : ("")));
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "        </optgroup>
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 22
$context["option"], "type", [], "any", false, false, true, 22) == "option")) {
                // line 23
                echo "        <option value=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 23)) ? (" selected=\"selected\"") : ("")));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "</option>
      ";
            }
            // line 25
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </select>
";
        $___internal_569fbc59823d6d1b14972c13c896c258cf4311a3441f518823c22e0a1c2a41e9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_569fbc59823d6d1b14972c13c896c258cf4311a3441f518823c22e0a1c2a41e9_));
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/form/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 13,  119 => 26,  113 => 25,  103 => 23,  101 => 22,  98 => 21,  85 => 19,  81 => 18,  76 => 17,  73 => 16,  69 => 15,  64 => 14,  62 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable/templates/form/select.html.twig", "C:\\xampp\\htdocs\\project\\web\\core\\themes\\stable\\templates\\form\\select.html.twig");
    }
}
