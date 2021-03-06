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

/* modules/commerce_cart_flyout/templates/commerce-cart-flyout-offcanvas-contents-items.html.twig */
class __TwigTemplate_c17b8ce0c83ed9dcbe4f4a24dc19affe93a4b8e376bb35d766badcfe1079477c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["t" => 20];
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
        echo "<table class=\"cart-block--offcanvas-cart-table table\">
    <tbody>
    <% _.each(cart.order_items, function(orderItem, key) { %>
        <tr>
            <td class=\"cart-block--offcanvas-cart-table__title\"><%- orderItem.title %></td>
            <td class=\"cart-block--offcanvas-cart-table__quantity\">
                <input type=\"number\" data-key=\"<% print(key) %>\" min=\"1\" value=\"<% print(parseInt(orderItem.quantity)) %>\" style=\"width: 35px\" />
            </td>
            <td class=\"cart-block--offcanvas-cart-table__price\"><%= orderItem.total_price.formatted %></td>
            <td class=\"cart-block--offcanvas-cart-table__remove\">
                <button value=\"<% print(JSON.stringify([cart.order_id, orderItem.order_item_id]))  %>\" class=\"button btn\">x</button>
            </td>
        </tr>
    <% }) %>
    </tbody>
    <tfoot>
    <tr>
      <td></td>
      <td colspan=\"3\">
        <button type=\"submit\" class=\"cart-block--offcanvas-contents__update button btn btn-primary\">";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Update quantities"));
        echo "</button>
      </td>
    </tr>
    </tfoot>
</table>
";
    }

    public function getTemplateName()
    {
        return "modules/commerce_cart_flyout/templates/commerce-cart-flyout-offcanvas-contents-items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/commerce_cart_flyout/templates/commerce-cart-flyout-offcanvas-contents-items.html.twig", "C:\\xampp2\\htdocs\\drupal8\\drupal-8.8.4\\modules\\commerce_cart_flyout\\templates\\commerce-cart-flyout-offcanvas-contents-items.html.twig");
    }
}
