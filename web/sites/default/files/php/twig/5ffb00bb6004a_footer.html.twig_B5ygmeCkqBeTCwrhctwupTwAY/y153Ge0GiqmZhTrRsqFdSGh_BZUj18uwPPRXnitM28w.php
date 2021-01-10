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

/* @vani/template-parts/footer.html.twig */
class __TwigTemplate_5b29a41589508a229105e55607e4e408a6f77ee9496820e81b1270415352baf3 extends \Twig\Template
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
        $tags = array("if" => 2, "include" => 59);
        $filters = array("escape" => 5, "date" => 54);
        $functions = array("attach_library" => 73);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
                ['attach_library']
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
        // line 1
        echo "<!-- Start: Footer -->
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 2)) {
            // line 3
            echo "  <section id=\"footer-top\" class=\"clear\">
    <div class=\"footer-top container clear\">
      ";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "
    </div>
  </section>
";
        }
        // line 8
        echo "<!-- /footer-top -->
<footer class=\"footer clear\">
  ";
        // line 10
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 10) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 10)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 10))) {
            // line 11
            echo "    <section id=\"footer-blocks\" class=\"clear\">
      <div class=\"container footer-container clear\">
        <div class=\"footer-block block-section\">
          ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 14)) {
                // line 15
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 17
            echo "        </div> <!--/footer-first -->

        <div class=\"footer-block block-section\">
          ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 20)) {
                // line 21
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 23
            echo "        </div> <!--/footer-second -->

        <div class=\"footer-block block-section\">
          ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 26)) {
                // line 27
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 29
            echo "        </div> <!--/footer-three -->

        <div class=\"footer-block block-section last-footer-block\">
          ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 32)) {
                // line 33
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 35
            echo "        </div> <!--/footer-fourth -->
      </div> <!--/container -->
    </section> <!--/footer-blocks -->
  ";
        }
        // line 38
        echo " ";
        // line 39
        echo "
  ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 40)) {
            // line 41
            echo "    <section id=\"footer-bottom\">
      <div class=\"footer-bottom container block-section clear\">
        ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
      </div> <!-- /.container -->
    </section>
  ";
        }
        // line 46
        echo "<!-- /footer-bottom -->

 ";
        // line 48
        if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
            // line 49
            echo "  <section id=\"footer-bottom-last\" class=\"clear\">
    <div class=\"container clear\">
    <div class=\"footer-bottom-last\">
      ";
            // line 52
            if (($context["copyright_text"] ?? null)) {
                // line 53
                echo "          <div class=\"copyright\">
            &copy; ";
                // line 54
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 54, $this->source), "html", null, true);
                echo ", All rights reserved.
          </div>
      ";
            }
            // line 57
            echo "      ";
            if (($context["all_icons_show"] ?? null)) {
                // line 58
                echo "        <div class=\"footer-social-icons\">
          ";
                // line 59
                $this->loadTemplate("@vani/template-parts/social-icons.html.twig", "@vani/template-parts/footer.html.twig", 59)->display($context);
                // line 60
                echo "        </div>
      ";
            }
            // line 62
            echo "      </div> <!--/.social icons -->
    </div> <!-- /.container -->
    </div> <!-- /.container -->
  </section> <!-- /footer-bottom-last -->
  ";
        }
        // line 66
        echo " <!-- end condition if copyright or social icons -->
</footer>
";
        // line 68
        if (($context["scrolltotop_on"] ?? null)) {
            // line 69
            echo "<div class=\"scrolltop\"><div class=\"scrolltop-icon\">&#x2191;</div></div>
";
        }
        // line 71
        echo "<!-- End: Footer -->
";
        // line 72
        if (($context["font_icon_fontawesome"] ?? null)) {
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/fontawesome"), "html", null, true);
            echo "
";
        }
        // line 75
        if (($context["font_icon_material"] ?? null)) {
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/material"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@vani/template-parts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 76,  223 => 75,  218 => 73,  216 => 72,  213 => 71,  209 => 69,  207 => 68,  203 => 66,  196 => 62,  192 => 60,  190 => 59,  187 => 58,  184 => 57,  176 => 54,  173 => 53,  171 => 52,  166 => 49,  164 => 48,  160 => 46,  153 => 43,  149 => 41,  147 => 40,  144 => 39,  142 => 38,  136 => 35,  130 => 33,  128 => 32,  123 => 29,  117 => 27,  115 => 26,  110 => 23,  104 => 21,  102 => 20,  97 => 17,  91 => 15,  89 => 14,  84 => 11,  82 => 10,  78 => 8,  71 => 5,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vani/template-parts/footer.html.twig", "C:\\xampp\\htdocs\\project\\web\\themes\\contrib\\vani\\templates\\template-parts\\footer.html.twig");
    }
}
