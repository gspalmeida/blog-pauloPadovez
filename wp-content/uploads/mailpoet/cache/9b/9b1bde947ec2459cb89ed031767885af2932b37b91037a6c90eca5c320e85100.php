<?php

/* form/templates/blocks/html.hbs */
class __TwigTemplate_f1cc9f76613699dc6297612c765fc526aeaee80d794e12fd02e38c43bcd77fe0 extends Twig_Template
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
        echo "{{#if params.text}}
  {{#ifCond params.nl2br '==' '1'}}
    {{{ nl2br params.text }}}
  {{else}}
    {{{ params.text }}}
  {{/ifCond}}
{{/if}}";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/html.hbs";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/blocks/html.hbs", "/var/www/html/blog.paulopadovez.com.br/wp-content/plugins/mailpoet/views/form/templates/blocks/html.hbs");
    }
}
