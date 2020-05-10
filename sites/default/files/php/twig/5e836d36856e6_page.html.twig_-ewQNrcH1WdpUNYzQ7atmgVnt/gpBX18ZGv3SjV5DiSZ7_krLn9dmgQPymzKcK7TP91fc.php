<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/aegan/templates/page.html.twig */
class __TwigTemplate_12fcf5f9e01d2a0086b87e241921876c33d097fa48ffb0780e1c1d537e10f0bd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 86, "for" => 96];
        $filters = ["escape" => 78, "raw" => 100];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 73
        echo "<div id=\"page-wrapper\" class=\"container\">

  <div id=\"header-region\">
    <div class=\"row\">
      <div class=\"col-md-4 col-sm-4\">
        ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-md-8 col-sm-8\">
        ";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_right", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>

  ";
        // line 86
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 87
            echo "    <div id=\"primary-menu-region\">
      ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 91
        echo "
  ";
        // line 93
        echo "  ";
        if (($context["slider"] ?? null)) {
            // line 94
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 97
                echo "          <li>
            <a href=\"";
                // line 98
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "url", [])), "html", null, true);
                echo "\"><img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "src", [])), "html", null, true);
                echo "\" alt=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "name", [])), "html", null, true);
                echo "\"></a>
            ";
                // line 99
                if ($this->getAttribute($context["slide"], "description", [])) {
                    // line 100
                    echo "              <p class=\"flex-caption\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "description", [])));
                    echo "</p>
            ";
                }
                // line 102
                echo "          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "      </ul>
    </div>
  ";
        }
        // line 107
        echo "
  ";
        // line 108
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
            // line 109
            echo "    <div id=\"breadcrumb-region\">
      ";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 113
        echo "
  ";
        // line 114
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 115
            echo "    <div id=\"content-top-region\" class=\"dark-blue-bg\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "</div>
  ";
        }
        // line 117
        echo "
  <main id=\"main\" class=\"clearfix\">
    ";
        // line 119
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 120
            echo "      <div id=\"sidebar-first\" class=\"sidebar ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo "\" role=\"complementary\">
        ";
            // line 121
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 124
        echo "
    <div class=\"";
        // line 125
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
        echo "\" role=\"main\">

      ";
        // line 127
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "

    </div>";
        // line 130
        echo "
    ";
        // line 131
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 132
            echo "      <div id=\"sidebar-second\" class=\"sidebar ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo "\" role=\"complementary\">
        ";
            // line 133
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 136
        echo "
  </main>

  ";
        // line 139
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 140
            echo "    <div id=\"content-bottom-region\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "</div>
  ";
        }
        // line 142
        echo "
  ";
        // line 144
        echo "  ";
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 145
            echo "    <div id=\"footer-column\" class=\"gray-bg\">
      <div class=\"row\">
        ";
            // line 147
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 148
                echo "          <div class=\"footer-1 col-md-3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 150
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 151
                echo "          <div class=\"footer-2 col-md-3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 153
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 154
                echo "          <div class=\"footer-3 col-md-3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 156
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 157
                echo "          <div class=\"footer-4 col-md-3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 159
            echo "      </div>
    </div>
    <div class=\"clear\"></div>
  ";
        }
        // line 163
        echo "
  <footer role=\"contentinfo\" id=\"footer\" class=\"dark-blue-bg\">
    ";
        // line 165
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 166
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
    ";
        }
        // line 168
        echo "    <hr>
    <span class=\"credits\">Developed by <a href=\"http://dropthemes.in\" target=\"_blank\">Dropthemes.in</a></span>
    ";
        // line 170
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["socialicons"] ?? null)));
        echo "
  </footer>
  <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"><span class=\"glyphicon glyphicon-chevron-up\" aria-hidden=\"true\"></span></a>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/aegan/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 170,  279 => 168,  273 => 166,  271 => 165,  267 => 163,  261 => 159,  255 => 157,  252 => 156,  246 => 154,  243 => 153,  237 => 151,  234 => 150,  228 => 148,  226 => 147,  222 => 145,  219 => 144,  216 => 142,  210 => 140,  208 => 139,  203 => 136,  197 => 133,  192 => 132,  190 => 131,  187 => 130,  182 => 127,  177 => 125,  174 => 124,  168 => 121,  163 => 120,  161 => 119,  157 => 117,  151 => 115,  149 => 114,  146 => 113,  140 => 110,  137 => 109,  135 => 108,  132 => 107,  127 => 104,  120 => 102,  114 => 100,  112 => 99,  104 => 98,  101 => 97,  97 => 96,  93 => 94,  90 => 93,  87 => 91,  81 => 88,  78 => 87,  76 => 86,  68 => 81,  62 => 78,  55 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/aegan/templates/page.html.twig", "C:\\xampp2\\htdocs\\drupal8\\drupal-8.8.4\\themes\\aegan\\templates\\page.html.twig");
    }
}
