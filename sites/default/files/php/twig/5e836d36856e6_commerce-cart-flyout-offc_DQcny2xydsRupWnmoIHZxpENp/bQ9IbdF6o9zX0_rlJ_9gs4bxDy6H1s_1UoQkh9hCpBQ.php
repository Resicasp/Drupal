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

/* modules/commerce_cart_flyout/templates/commerce-cart-flyout-offcanvas.html.twig */
class __TwigTemplate_544c80034e5b9db90c832671979f424e88d4c8f40dd35fa52aa8be39ffafc12e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["t" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t'],
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
        echo "<div class=\"cart--cart-offcanvas\">
  <div class=\"cart--cart-offcanvas__close\">
    <button class=\"button btn\">x<span class=\"visually-hidden\"> ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close cart"));
        echo "</span> </button>
  </div>
<% if (count > 0) { %>
  <div class=\"cart-block--offcanvas-contents\">
    <div class=\"cart-block--offcanvas-contents__inner\">
      <div class=\"cart-block--offcanvas-contents__items\"></div>
      <div class=\"cart-block--offcanvas-contents__links\">
        <%= links %>
      </div>
    </div>
  </div>
<% } else { %>
  <div>";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Your cart is empty"));
        echo "</div>
<% } %>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/commerce_cart_flyout/templates/commerce-cart-flyout-offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/commerce_cart_flyout/templates/commerce-cart-flyout-offcanvas.html.twig", "C:\\xampp2\\htdocs\\drupal8\\drupal-8.8.4\\modules\\commerce_cart_flyout\\templates\\commerce-cart-flyout-offcanvas.html.twig");
    }
}
