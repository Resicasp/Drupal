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

/* themes/school_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_8b480e8866bb4f181672130a417b662b4e3acc849e55fb19222c57bb31f5ff13 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 66, "for" => 146];
        $filters = ["escape" => 67, "raw" => 147, "date" => 564];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
        // line 60
        echo "
<div class=\"top-nav\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">

        ";
        // line 66
        if ($this->getAttribute(($context["page"] ?? null), "message", [])) {
            // line 67
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "message", [])), "html", null, true);
            echo "
        ";
        }
        // line 69
        echo "
        ";
        // line 70
        if ($this->getAttribute(($context["page"] ?? null), "email", [])) {
            // line 71
            echo "          <i class=\"fa fa-envelope\"></i>
          ";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "email", [])), "html", null, true);
            echo "
        ";
        }
        // line 74
        echo "
      </div>
      
      ";
        // line 77
        if (($context["show_social_icon"] ?? null)) {
            // line 78
            echo "        <div class=\"col-md-6\">
          <p class=\"social-media\">
            ";
            // line 80
            if (($context["facebook_url"] ?? null)) {
                // line 81
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            ";
            }
            // line 83
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 84
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
            ";
            }
            // line 86
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 87
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            ";
            }
            // line 89
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 90
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            ";
            }
            // line 92
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 93
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
            ";
            }
            // line 95
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 96
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 98
            echo "          </p>
        </div>
      ";
        }
        // line 101
        echo "     
    </div>
  </div>
</div>

<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 116
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 117
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 119
        echo "      </div>

      <!-- End: Header -->

      ";
        // line 123
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 124
            echo "        <div class=\"col-md-9\">

          ";
            // line 126
            if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
                // line 127
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
                echo "
          ";
            }
            // line 129
            echo "
          ";
            // line 130
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
          
        </div>
      ";
        }
        // line 134
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 142
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 143
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 147
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 153
        echo "

<!-- Start: Top widget -->

";
        // line 157
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
            // line 158
            echo "  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">

      ";
            // line 162
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])) {
                // line 163
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 164
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 167
            echo "
        <div class=\"row topwidget-list clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 171
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                // line 172
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 173
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 177
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                // line 178
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 179
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 183
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                // line 184
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 185
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 192
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 198
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 199
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 201
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 205
        echo "
<!--End: Highlighted -->

<!--Start: Title -->

";
        // line 210
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 211
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 214
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 219
        echo "
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 228
        if ( !($context["is_front"] ?? null)) {
            // line 229
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 230
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 233
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 239
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 240
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 242
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 246
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 249
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 250
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 252
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 256
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 259
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 260
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 262
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 266
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 279
        if ((($this->getAttribute(($context["page"] ?? null), "features_first", []) || $this->getAttribute(($context["page"] ?? null), "features_second", [])) || $this->getAttribute(($context["page"] ?? null), "features_third", []))) {
            // line 280
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 284
            if ($this->getAttribute(($context["page"] ?? null), "features_title", [])) {
                // line 285
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 286
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 289
            echo "
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 293
            if ($this->getAttribute(($context["page"] ?? null), "features_first", [])) {
                // line 294
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 295
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 298
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 301
            if ($this->getAttribute(($context["page"] ?? null), "features_second", [])) {
                // line 302
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 303
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 306
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 309
            if ($this->getAttribute(($context["page"] ?? null), "features_third", [])) {
                // line 310
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 311
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 314
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 321
        echo "<!--End: Features -->


<!-- Start: Services -->
";
        // line 325
        if ($this->getAttribute(($context["page"] ?? null), "services", [])) {
            // line 326
            echo "
  <div class=\"services\" id=\"services\">
    <div class=\"container\">
      ";
            // line 329
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services", [])), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 334
        echo "<!--End: Services -->



<!-- Start: Services -->
";
        // line 339
        if ($this->getAttribute(($context["page"] ?? null), "products", [])) {
            // line 340
            echo "
  <div class=\"products\" id=\"products\">
    <div class=\"container\">
      ";
            // line 343
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "products", [])), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 348
        echo "<!--End: Services -->


<!-- Start: Price table widgets -->
";
        // line 352
        if ((($this->getAttribute(($context["page"] ?? null), "pricetable_first", []) || $this->getAttribute(($context["page"] ?? null), "pricetable_second", [])) || $this->getAttribute(($context["page"] ?? null), "pricetable_third", []))) {
            // line 353
            echo "
  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">

      ";
            // line 357
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_title", [])) {
                // line 358
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 359
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 362
            echo "
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 366
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_first", [])) {
                // line 367
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 368
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 370
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 374
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_second", [])) {
                // line 375
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 376
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 378
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 382
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_third", [])) {
                // line 383
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 384
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 386
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 390
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_forth", [])) {
                // line 391
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 392
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 394
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 402
        echo "<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->
";
        // line 406
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
            // line 407
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 411
            if ($this->getAttribute(($context["page"] ?? null), "bottom_title", [])) {
                // line 412
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 413
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 416
            echo "
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 420
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 421
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 422
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 424
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 428
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 429
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 430
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 432
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 436
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 437
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 438
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 440
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 444
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 445
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 446
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 449
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 456
        echo "<!--End: Bottom widgets -->


<!-- Start: Team widgets -->
";
        // line 460
        if (((($this->getAttribute(($context["page"] ?? null), "team_first", []) || $this->getAttribute(($context["page"] ?? null), "team_second", [])) || $this->getAttribute(($context["page"] ?? null), "team_third", [])) || $this->getAttribute(($context["page"] ?? null), "team_forth", []))) {
            // line 461
            echo "
  <div class=\"team\" id=\"team\">    
    <div class=\"container\">

      ";
            // line 465
            if ($this->getAttribute(($context["page"] ?? null), "team_title", [])) {
                // line 466
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 467
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 470
            echo "

      <div class=\"row team-list\">

        <!-- Start: Bottom First -->          
        ";
            // line 475
            if ($this->getAttribute(($context["page"] ?? null), "team_first", [])) {
                // line 476
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 477
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 479
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 483
            if ($this->getAttribute(($context["page"] ?? null), "team_second", [])) {
                // line 484
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 485
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 487
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 491
            if ($this->getAttribute(($context["page"] ?? null), "team_third", [])) {
                // line 492
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 493
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 495
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 499
            if ($this->getAttribute(($context["page"] ?? null), "team_forth", [])) {
                // line 500
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 501
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 504
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 511
        echo "<!--End: Team widgets -->


<!-- Start: Footer widgets -->
";
        // line 515
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 516
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 520
            if ($this->getAttribute(($context["page"] ?? null), "footer_title", [])) {
                // line 521
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 522
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 525
            echo "
      <div class=\"row\">

        <!-- Start: Footer First -->
        ";
            // line 529
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 530
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 531
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 534
            echo "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 537
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 538
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 539
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 542
            echo "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 545
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 546
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 547
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 550
            echo "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>

";
        }
        // line 557
        echo "<!--End: Footer widgets -->

<!-- Start: Copyright -->
<div class=\"copyright\">

    <div class=\"container\">

      <span>Copyright © ";
        // line 564
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>

      ";
        // line 566
        if (($context["show_credit_link"] ?? null)) {
            // line 567
            echo "        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 569
        echo "
  </div>
</div>
<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/school_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1036 => 569,  1032 => 567,  1030 => 566,  1025 => 564,  1016 => 557,  1007 => 550,  1001 => 547,  996 => 546,  994 => 545,  989 => 542,  983 => 539,  978 => 538,  976 => 537,  971 => 534,  965 => 531,  960 => 530,  958 => 529,  952 => 525,  946 => 522,  943 => 521,  941 => 520,  935 => 516,  933 => 515,  927 => 511,  918 => 504,  912 => 501,  907 => 500,  905 => 499,  899 => 495,  893 => 493,  888 => 492,  886 => 491,  880 => 487,  874 => 485,  869 => 484,  867 => 483,  861 => 479,  855 => 477,  850 => 476,  848 => 475,  841 => 470,  835 => 467,  832 => 466,  830 => 465,  824 => 461,  822 => 460,  816 => 456,  807 => 449,  801 => 446,  796 => 445,  794 => 444,  788 => 440,  782 => 438,  777 => 437,  775 => 436,  769 => 432,  763 => 430,  758 => 429,  756 => 428,  750 => 424,  744 => 422,  739 => 421,  737 => 420,  731 => 416,  725 => 413,  722 => 412,  720 => 411,  714 => 407,  712 => 406,  706 => 402,  696 => 394,  690 => 392,  685 => 391,  683 => 390,  677 => 386,  671 => 384,  666 => 383,  664 => 382,  658 => 378,  652 => 376,  647 => 375,  645 => 374,  639 => 370,  633 => 368,  628 => 367,  626 => 366,  620 => 362,  614 => 359,  611 => 358,  609 => 357,  603 => 353,  601 => 352,  595 => 348,  587 => 343,  582 => 340,  580 => 339,  573 => 334,  565 => 329,  560 => 326,  558 => 325,  552 => 321,  543 => 314,  537 => 311,  532 => 310,  530 => 309,  525 => 306,  519 => 303,  514 => 302,  512 => 301,  507 => 298,  501 => 295,  496 => 294,  494 => 293,  488 => 289,  482 => 286,  479 => 285,  477 => 284,  471 => 280,  469 => 279,  454 => 266,  447 => 262,  441 => 260,  439 => 259,  434 => 256,  427 => 252,  421 => 250,  419 => 249,  414 => 246,  407 => 242,  401 => 240,  399 => 239,  391 => 233,  385 => 230,  382 => 229,  380 => 228,  369 => 219,  361 => 214,  356 => 211,  354 => 210,  347 => 205,  340 => 201,  336 => 199,  334 => 198,  326 => 192,  317 => 185,  309 => 184,  307 => 183,  301 => 179,  293 => 178,  291 => 177,  285 => 173,  277 => 172,  275 => 171,  269 => 167,  263 => 164,  260 => 163,  258 => 162,  252 => 158,  250 => 157,  244 => 153,  238 => 149,  229 => 147,  225 => 146,  220 => 143,  218 => 142,  208 => 134,  201 => 130,  198 => 129,  192 => 127,  190 => 126,  186 => 124,  184 => 123,  178 => 119,  172 => 117,  170 => 116,  153 => 101,  148 => 98,  142 => 96,  139 => 95,  133 => 93,  130 => 92,  124 => 90,  121 => 89,  115 => 87,  112 => 86,  106 => 84,  103 => 83,  97 => 81,  95 => 80,  91 => 78,  89 => 77,  84 => 74,  79 => 72,  76 => 71,  74 => 70,  71 => 69,  65 => 67,  63 => 66,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/school_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp2\\htdocs\\drupal8\\drupal-8.8.4\\themes\\school_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
}
