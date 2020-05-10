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

/* themes/flexi_cart/templates/layout/page.html.twig */
class __TwigTemplate_589fbaba4a4b5da8790d69c08f026cc8cc6f913a421a4f33cde7a5f492c457db extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 88, "for" => 160];
        $filters = ["escape" => 80];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
        // line 69
        echo "
<div id=\"page-container\" class=\"page-container\">
  <header id=\"header\" class=\"header\">
  <div id=\"header_top_container\" class=\"header-top-container\">
    <div id=\"header-top\" class=\"clearfix header-top\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"header-top-area clearfix\">
              <div class=\"social-links float-left\">
                <ul class=\"social-links-icon\">
                <li><a href=\"";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["face_book"] ?? null)), "html", null, true);
        echo "\"class=\"btn-social fa-icon\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
        echo "\" class=\"btn-social tw-icon\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null)), "html", null, true);
        echo "\" class=\"btn-social lnk-icon\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null)), "html", null, true);
        echo "\"class=\"btn-social ins-icon\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                </ul>
              </div>
              <div class=\"usr-info-wrap float-right clearfix\">
                <div class=\"usr-log-info d-inline-block\">
                ";
        // line 88
        if (($context["logged_in"] ?? null)) {
            // line 89
            echo "                <span class=\"user-account\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                  <ul class=\"user-login-menu\">
                    <li class=\"menu-item\"><a href=\"/user\" data-drupal-link-system-path=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> My account</a></li>
                    <li class=\"menu-item\"><a href=\"/user/logout\" data-drupal-link-system-path=\"user/logout\"><i class=\"fa fa-power-off\" aria-hidden=\"true\"></i> Log out</a></li>    </ul></span>
                  ";
        } else {
            // line 94
            echo "                  <ul class=\"login-menu\">
                    <li class=\"menu-item\">
                      <a href=\"/user/login\" data-drupal-link-system-path=\"user/login\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Log in</a>
                    </li>
                  </ul>
                ";
        }
        // line 100
        echo "                </div>
                <div class=\"d-inline-block cart-icon\">
                  ";
        // line 102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top", [])), "html", null, true);
        echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  ";
        // line 112
        if ((($this->getAttribute(($context["page"] ?? null), "header", []) || $this->getAttribute(($context["page"] ?? null), "search_area", [])) || $this->getAttribute(($context["page"] ?? null), "navigation", []))) {
            // line 113
            echo "    <div id=\"header-second\" class=\"header-second clearfix\">
      ";
            // line 114
            if ((($this->getAttribute(($context["page"] ?? null), "header", []) || $this->getAttribute(($context["page"] ?? null), "search_area", [])) || $this->getAttribute(($context["page"] ?? null), "navigation", []))) {
                // line 115
                echo "          <div class=\"container\">
            <div id=\"container-wrap\" class=\"container-wrap\">
            <div class=\"mob-icon float-left d-md-none\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></div>
              <div class=\"header-left float-left\">
                ";
                // line 119
                if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                    // line 120
                    echo "                  <div class=\"header-logo\">
                      ";
                    // line 121
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                    echo "
                  </div>
                ";
                }
                // line 124
                echo "              </div>
              <div class=\"header-right float-right\">
                ";
                // line 126
                if (($this->getAttribute(($context["page"] ?? null), "search_area", []) || $this->getAttribute(($context["page"] ?? null), "navigation", []))) {
                    // line 127
                    echo "                  ";
                    if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
                        // line 128
                        echo "                      <div id=\"main-navigation\" class=\"clearfix main-navigation d-inline-block\">
                        <nav role=\"navigation\">
                          ";
                        // line 130
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
                        echo "
                        </nav>
                      </div>
                    ";
                    }
                    // line 134
                    echo "                    ";
                    if ($this->getAttribute(($context["page"] ?? null), "search_area", [])) {
                        // line 135
                        echo "                    <div id=\"search-area\" class=\"clearfix search-area d-inline-block\">
                      <div class=\"search-icon\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>
                      ";
                        // line 137
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search_area", [])), "html", null, true);
                        echo "
                    </div>
                  ";
                    }
                    // line 140
                    echo "                ";
                }
                // line 141
                echo "              </div>
            </div>
          </div>
      ";
            }
            // line 145
            echo "    </div>
  ";
        }
        // line 147
        echo "</header>
  ";
        // line 148
        if (($context["is_front"] ?? null)) {
            // line 149
            echo "  <div id=\"banner\" class=\"banner\">
    <div class=\"container\">
      <div id=\"banner-inside\" class=\"clearfix banner-inside\">
        ";
            // line 152
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
  ";
        }
        // line 157
        echo "  ";
        if (($context["slider"] ?? null)) {
            // line 158
            echo "    <div class=\"slider\">
      <ul class=\"slides\">
        ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 161
                echo "          <li>
            <img src=\"";
                // line 162
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "src", [])), "html", null, true);
                echo "\" />
            <div class=\"slider-caption\">
              <h2 class=\"flex-caption\">";
                // line 164
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "title", [])), "html", null, true);
                echo "</h2>
              <p class=\"flex-desc\">";
                // line 165
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "desc", [])), "html", null, true);
                echo "</p>
              <a href=\"";
                // line 166
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["slide"], "url", [])), "html", null, true);
                echo "\"> More</a>
            </div>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "      </ul>
    </div>
  ";
        }
        // line 173
        echo "  <div id=\"page\" class=\"clearfix page\">
    ";
        // line 174
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
            // line 175
            echo "      <div class=\"breadcrumb-wrap\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 179
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 185
        echo "    
    ";
        // line 186
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", [])) {
            // line 187
            echo "      <div class=\"system-messages\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 191
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "system_messages", [])), "html", null, true);
            echo "
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 197
        echo "      
    ";
        // line 198
        if (($context["is_front"] ?? null)) {
            // line 199
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "category", [])) {
                // line 200
                echo "        <div id=\"category\" class=\"category\">
          <div class=\"category-layout-1 container\">
            <div id=\"category-inside\" class=\"clearfix category-inside\">
              ";
                // line 203
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "category", [])), "html", null, true);
                echo "
            </div>
          </div>
        </div>
      ";
            }
            // line 208
            echo "    ";
        }
        // line 209
        echo "
    ";
        // line 210
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 211
            echo "      <div id=\"highlighted\" class=\"clearfix highlighted\">
        <div class=\"container\">
          <div id=\"highlighted-inside\" class=\"clearfix highlighted-inside\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"highlighted-area\">
                  ";
            // line 217
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 225
        echo "    <div id=\"main-content\" class=\"clearfix main-content\">
      <div class=\"container\">
      ";
        // line 227
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 228
            echo "          <aside class=\"sidebar-first\">
            <section id=\"sidebar-first-in\" class=\"sidebar sidebar-first-in clearfix\">
              ";
            // line 230
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </section>
          </aside>
        ";
        }
        // line 234
        echo "        <section class=\"main-section\">
          <div id=\"main\" class=\"clearfix main main-area\">
            ";
        // line 236
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 237
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            ";
        }
        // line 239
        echo "          </div>
        </section>
        ";
        // line 241
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 242
            echo "          <aside class=\"sidebar-second\">
            <section id=\"sidebar-second-in\" class=\"sidebar sidebar-second-in clearfix\">
              ";
            // line 244
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </section>
          </aside>
        ";
        }
        // line 248
        echo "      </div>
    </div>

    ";
        // line 251
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 252
            echo "      <div id=\"featured-top\" class=\"clearfix featured-top\">
        <div class=\"container\">
          <div id=\"featured-top-inside\" class=\"clearfix featured-top-inside\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"featured-top-area\">
                  ";
            // line 258
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 266
        echo "
    ";
        // line 267
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 268
            echo "      <div id=\"featured\" class=\"clearfix featured\">
        <div class=\"container\">
          <div id=\"featured-inside\" class=\"clearfix featured-inside\">
                  ";
            // line 271
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 276
        echo "
    ";
        // line 277
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])) {
            // line 278
            echo "      <div id=\"featured-bottom\" class=\"clearfix featured-bottom\">
        <div class=\"container\">
          <div id=\"featured-bottom-inside\" class=\"clearfix featured-bottom-inside\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"featured-bottom-area\">
                  ";
            // line 284
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 292
        echo "  </div>
  <footer>
    <div id=\"footer\" class=\"clearfix footer\">
      <div class=\"container\">
          ";
        // line 296
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 297
            echo "            <div class=\"footer-top\">
              <div class=\"footer-top-area first\">
                ";
            // line 299
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
              </div>
            </div>
          ";
        }
        // line 303
        echo "          <div class=\"footer-bottom\">
            <div class=\"footer-bottom-wrap clearfix\">
              <div class=\"email float-md-left text-center\"><p>";
        // line 305
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null)), "html", null, true);
        echo "</p></div>
              <div class=\"copyrights float-md-right text-center\"><p>";
        // line 306
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyrights"] ?? null)), "html", null, true);
        echo "</p></div>
            </div>
          </div>
      </div>
    </div>
</footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/flexi_cart/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 306,  477 => 305,  473 => 303,  466 => 299,  462 => 297,  460 => 296,  454 => 292,  443 => 284,  435 => 278,  433 => 277,  430 => 276,  422 => 271,  417 => 268,  415 => 267,  412 => 266,  401 => 258,  393 => 252,  391 => 251,  386 => 248,  379 => 244,  375 => 242,  373 => 241,  369 => 239,  363 => 237,  361 => 236,  357 => 234,  350 => 230,  346 => 228,  344 => 227,  340 => 225,  329 => 217,  321 => 211,  319 => 210,  316 => 209,  313 => 208,  305 => 203,  300 => 200,  297 => 199,  295 => 198,  292 => 197,  283 => 191,  277 => 187,  275 => 186,  272 => 185,  263 => 179,  257 => 175,  255 => 174,  252 => 173,  247 => 170,  237 => 166,  233 => 165,  229 => 164,  224 => 162,  221 => 161,  217 => 160,  213 => 158,  210 => 157,  202 => 152,  197 => 149,  195 => 148,  192 => 147,  188 => 145,  182 => 141,  179 => 140,  173 => 137,  169 => 135,  166 => 134,  159 => 130,  155 => 128,  152 => 127,  150 => 126,  146 => 124,  140 => 121,  137 => 120,  135 => 119,  129 => 115,  127 => 114,  124 => 113,  122 => 112,  109 => 102,  105 => 100,  97 => 94,  90 => 89,  88 => 88,  80 => 83,  76 => 82,  72 => 81,  68 => 80,  55 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/flexi_cart/templates/layout/page.html.twig", "C:\\xampp2\\htdocs\\drupal8\\drupal-8.8.4\\themes\\flexi_cart\\templates\\layout\\page.html.twig");
    }
}
