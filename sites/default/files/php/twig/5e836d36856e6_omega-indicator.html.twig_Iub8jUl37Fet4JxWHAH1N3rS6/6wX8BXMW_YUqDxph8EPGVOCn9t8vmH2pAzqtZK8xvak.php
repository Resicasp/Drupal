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

/* themes/omega/omega/templates/omega-indicator.html.twig */
class __TwigTemplate_32a2bf274e86ad4530dbd8b0c454394a0441eebe63078735c96e7be733aa81c6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 1
        echo "<div id=\"omega-screen--indicator\" class=\"clearfix\">
  <div class=\"ologo\">
    ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
        echo "
  </div>
  <div class=\"indicator-data\">
    <div class=\"screen-size\">
      <h5>@screen width:</h5>
      <span class=\"data\"></span>
    </div>
    <div class=\"theme-name\">
      <h5>@theme:</h5>
      <span class=\"data\"></span>
    </div>
    <div class=\"screen-query\">
      <h5>@breakpoints:</h5>
      <span class=\"data\"></span>
    </div>
    <div class=\"screen-layout\">
      <h5>@layout:</h5>
      <span class=\"data\"></span>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/omega/omega/templates/omega-indicator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/omega/omega/templates/omega-indicator.html.twig", "C:\\xampp2\\htdocs\\drupal8\\drupal-8.8.4\\themes\\omega\\omega\\templates\\omega-indicator.html.twig");
    }
}
