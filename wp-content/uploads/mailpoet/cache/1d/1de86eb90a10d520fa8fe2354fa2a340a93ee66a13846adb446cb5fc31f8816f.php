<?php

/* form/templates/blocks/container.hbs */
class __TwigTemplate_ba0e8c14e236055cbae1abad776419d4ca9945bde00a51f33e1c8c922c8ff551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"mailpoet_form_block\"
  wysija_type=\"{{ type }}\"
  {{#if id}}wysija_id=\"{{ id }}\"{{/if}}
  wysija_name=\"{{ name }}\"
  wysija_unique=\"{{ unique }}\"
  wysija_static=\"{{#ifCond static '==' 1}}1{{else}}0{{/ifCond}}\"
  wysija_params=\"{{#if params}}{{ json_encode params }}{{/if}}\">
  {{#ifCond type '!==' 'divider'}}
    <div class=\"wysija_settings\" style=\"display:none;\">
      <a class=\"settings\" href=\"javascript:;\"><span></span>";
        // line 10
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Edit display");
        echo "</a>
    </div>
  {{/ifCond}}
  <ul class=\"wysija_controls clearfix\" style=\"display: none;\">
    <li class=\"handle_container\"><a class=\"handle\" href=\"javascript:;\"><span></span></a></li>
    {{#ifCond static '==' '0'}}
      <li><a class=\"remove\" href=\"javascript:;\"><span></span></a></li>
    {{/ifCond}}
  </ul>
  {{{ template }}}
</div>";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/container.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/blocks/container.hbs", "/var/www/html/blog.paulopadovez.com.br/wp-content/plugins/mailpoet/views/form/templates/blocks/container.hbs");
    }
}
