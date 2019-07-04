<?php

/* newsletter/templates/blocks/container/block.hbs */
class __TwigTemplate_3127aaca265385abd2313c7d098887158ed488a5e48480b949d709bb22f3fbf3 extends Twig_Template
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
        echo "{{#if model.image.src}}
    <style type=\"text/css\">
        .mailpoet_editor_view_{{ viewCid }} {
            background-color: {{#ifCond model.styles.block.backgroundColor '!=' 'transparent'}}{{  model.styles.block.backgroundColor }}{{else}}#ffffff{{/ifCond}} !important;
            background-image: url({{ model.image.src }});
            background-position: center;
            background-repeat: {{#ifCond model.image.display '==' 'tile'}}repeat{{else}}no-repeat{{/ifCond}};
            background-size: {{#ifCond model.image.display '==' 'scale'}}cover{{else}}contain{{/ifCond}};
        }
        .mailpoet_editor_view_{{ viewCid }} .mailpoet_container { background: transparent; }
    </style>
{{else}}
    {{#ifCond model.styles.block.backgroundColor '!=' 'transparent'}}
        <style type=\"text/css\">
            .mailpoet_editor_view_{{ viewCid }} { background-color: {{ model.styles.block.backgroundColor }}; }
            .mailpoet_editor_view_{{ viewCid }} .mailpoet_container { background-color: {{ model.styles.block.backgroundColor }}; }
        </style>
    {{/ifCond}}
{{/if}}

<div class=\"mailpoet_container {{#ifCond model.orientation '===' 'horizontal'}}mailpoet_container_horizontal{{/ifCond}}{{#ifCond model.orientation '===' 'vertical'}}mailpoet_container_vertical{{/ifCond}}\"></div>
<div class=\"mailpoet_tools\"></div><div class=\"mailpoet_block_highlight\">
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/container/block.hbs";
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
        return new Twig_Source("", "newsletter/templates/blocks/container/block.hbs", "/var/www/html/blog.paulopadovez.com.br/wp-content/plugins/mailpoet/views/newsletter/templates/blocks/container/block.hbs");
    }
}
