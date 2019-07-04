<?php

/* newsletter/editor.html */
class __TwigTemplate_230efbb44da13faba4092f4feccd3ccf226854fae64d6238b301a5b32e73fa06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "newsletter/editor.html", 1);
        $this->blocks = array(
            'templates' => array($this, 'block_templates'),
            'content' => array($this, 'block_content'),
            'translations' => array($this, 'block_translations'),
            'after_css' => array($this, 'block_after_css'),
            'after_javascript' => array($this, 'block_after_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_templates($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_tools_generic", "newsletter/templates/blocks/base/toolsGeneric.hbs");
        // line 7
        echo "
  ";
        // line 8
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_block", "newsletter/templates/blocks/automatedLatestContent/block.hbs");
        // line 11
        echo "
  ";
        // line 12
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_widget", "newsletter/templates/blocks/automatedLatestContent/widget.hbs");
        // line 15
        echo "
  ";
        // line 16
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_settings", "newsletter/templates/blocks/automatedLatestContent/settings.hbs");
        // line 19
        echo "
  ";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_layout_block", "newsletter/templates/blocks/automatedLatestContentLayout/block.hbs");
        // line 23
        echo "
  ";
        // line 24
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_layout_widget", "newsletter/templates/blocks/automatedLatestContentLayout/widget.hbs");
        // line 27
        echo "
  ";
        // line 28
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_layout_settings", "newsletter/templates/blocks/automatedLatestContentLayout/settings.hbs");
        // line 31
        echo "
  ";
        // line 32
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_button_block", "newsletter/templates/blocks/button/block.hbs");
        // line 35
        echo "
  ";
        // line 36
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_button_widget", "newsletter/templates/blocks/button/widget.hbs");
        // line 39
        echo "
  ";
        // line 40
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_button_settings", "newsletter/templates/blocks/button/settings.hbs");
        // line 43
        echo "
  ";
        // line 44
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_block", "newsletter/templates/blocks/container/block.hbs");
        // line 47
        echo "
  ";
        // line 48
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_block_empty", "newsletter/templates/blocks/container/emptyBlock.hbs");
        // line 51
        echo "
  ";
        // line 52
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_one_column_widget", "newsletter/templates/blocks/container/oneColumnLayoutWidget.hbs");
        // line 55
        echo "
  ";
        // line 56
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_two_column_widget", "newsletter/templates/blocks/container/twoColumnLayoutWidget.hbs");
        // line 59
        echo "
  ";
        // line 60
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_three_column_widget", "newsletter/templates/blocks/container/threeColumnLayoutWidget.hbs");
        // line 63
        echo "
  ";
        // line 64
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_settings", "newsletter/templates/blocks/container/settings.hbs");
        // line 67
        echo "
  ";
        // line 68
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_column_settings", "newsletter/templates/blocks/container/columnSettings.hbs");
        // line 71
        echo "
  ";
        // line 72
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_divider_block", "newsletter/templates/blocks/divider/block.hbs");
        // line 75
        echo "
  ";
        // line 76
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_divider_widget", "newsletter/templates/blocks/divider/widget.hbs");
        // line 79
        echo "
  ";
        // line 80
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_divider_settings", "newsletter/templates/blocks/divider/settings.hbs");
        // line 83
        echo "
  ";
        // line 84
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_footer_block", "newsletter/templates/blocks/footer/block.hbs");
        // line 87
        echo "
  ";
        // line 88
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_footer_widget", "newsletter/templates/blocks/footer/widget.hbs");
        // line 91
        echo "
  ";
        // line 92
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_footer_settings", "newsletter/templates/blocks/footer/settings.hbs");
        // line 95
        echo "
  ";
        // line 96
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_header_block", "newsletter/templates/blocks/header/block.hbs");
        // line 99
        echo "
  ";
        // line 100
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_header_widget", "newsletter/templates/blocks/header/widget.hbs");
        // line 103
        echo "
  ";
        // line 104
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_header_settings", "newsletter/templates/blocks/header/settings.hbs");
        // line 107
        echo "
  ";
        // line 108
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_image_block", "newsletter/templates/blocks/image/block.hbs");
        // line 111
        echo "
  ";
        // line 112
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_image_widget", "newsletter/templates/blocks/image/widget.hbs");
        // line 115
        echo "
  ";
        // line 116
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_image_settings", "newsletter/templates/blocks/image/settings.hbs");
        // line 119
        echo "
  ";
        // line 120
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_block", "newsletter/templates/blocks/posts/block.hbs");
        // line 123
        echo "
  ";
        // line 124
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_widget", "newsletter/templates/blocks/posts/widget.hbs");
        // line 127
        echo "
  ";
        // line 128
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings", "newsletter/templates/blocks/posts/settings.hbs");
        // line 131
        echo "
  ";
        // line 132
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_display_options", "newsletter/templates/blocks/posts/settingsDisplayOptions.hbs");
        // line 135
        echo "
  ";
        // line 136
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_selection", "newsletter/templates/blocks/posts/settingsSelection.hbs");
        // line 139
        echo "
  ";
        // line 140
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_selection_empty", "newsletter/templates/blocks/posts/settingsSelectionEmpty.hbs");
        // line 143
        echo "
  ";
        // line 144
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_single_post", "newsletter/templates/blocks/posts/settingsSinglePost.hbs");
        // line 147
        echo "
  ";
        // line 148
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_block", "newsletter/templates/blocks/social/block.hbs");
        // line 151
        echo "
  ";
        // line 152
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_block_icon", "newsletter/templates/blocks/social/blockIcon.hbs");
        // line 155
        echo "
  ";
        // line 156
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_widget", "newsletter/templates/blocks/social/widget.hbs");
        // line 159
        echo "
  ";
        // line 160
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings", "newsletter/templates/blocks/social/settings.hbs");
        // line 163
        echo "
  ";
        // line 164
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_icon", "newsletter/templates/blocks/social/settingsIcon.hbs");
        // line 167
        echo "
  ";
        // line 168
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_icon_selector", "newsletter/templates/blocks/social/settingsIconSelector.hbs");
        // line 171
        echo "
  ";
        // line 172
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_styles", "newsletter/templates/blocks/social/settingsStyles.hbs");
        // line 175
        echo "
  ";
        // line 176
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_spacer_block", "newsletter/templates/blocks/spacer/block.hbs");
        // line 179
        echo "
  ";
        // line 180
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_spacer_widget", "newsletter/templates/blocks/spacer/widget.hbs");
        // line 183
        echo "
  ";
        // line 184
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_spacer_settings", "newsletter/templates/blocks/spacer/settings.hbs");
        // line 187
        echo "
  ";
        // line 188
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_text_block", "newsletter/templates/blocks/text/block.hbs");
        // line 191
        echo "
  ";
        // line 192
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_text_widget", "newsletter/templates/blocks/text/widget.hbs");
        // line 195
        echo "
  ";
        // line 196
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_text_settings", "newsletter/templates/blocks/text/settings.hbs");
        // line 199
        echo "
  ";
        // line 200
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_heading", "newsletter/templates/components/heading.hbs");
        // line 203
        echo "
  ";
        // line 204
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_save", "newsletter/templates/components/save.hbs");
        // line 207
        echo "
  ";
        // line 208
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_styles", "newsletter/templates/components/styles.hbs");
        // line 211
        echo "
  ";
        // line 212
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_newsletter_preview", "newsletter/templates/components/newsletterPreview.hbs");
        // line 215
        echo "
  ";
        // line 216
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar", "newsletter/templates/components/sidebar/sidebar.hbs");
        // line 219
        echo "
  ";
        // line 220
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_content", "newsletter/templates/components/sidebar/content.hbs");
        // line 223
        echo "
  ";
        // line 224
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_layout", "newsletter/templates/components/sidebar/layout.hbs");
        // line 227
        echo "
  ";
        // line 228
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_preview", "newsletter/templates/components/sidebar/preview.hbs");
        // line 231
        echo "
  ";
        // line 232
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_styles", "newsletter/templates/components/sidebar/styles.hbs");
        // line 235
        echo "
";
    }

    // line 238
    public function block_content($context, array $blocks = array())
    {
        // line 239
        echo "<!-- Hidden heading for notices to appear under -->
<h1 style=\"display:none\">";
        // line 240
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter Editor");
        echo "</h1>
<div id=\"mailpoet_editor\">
  <div id=\"mailpoet_editor_breadcrumb\" class=\"mailpoet_breadcrumbs\"></div>
  <div id=\"mailpoet_editor_announcement\" class=\"mailpoet_editor_announcement\"></div>
  <div id=\"mailpoet_editor_top\"></div>
  <div id=\"mailpoet_editor_heading\"></div>
  <div class=\"clearfix\"></div>
  <div id=\"mailpoet_editor_main_wrapper\">
    <div id=\"mailpoet_editor_styles\"></div>
    <div id=\"mailpoet_editor_content_container\">
      <div class=\"mailpoet_newsletter_wrapper\">
        <div id=\"mailpoet_editor_content\"></div>
      </div>
    </div>
    <div id=\"mailpoet_editor_sidebar\"></div>
    <div class=\"clear\"></div>
  </div>
  <div id=\"mailpoet_editor_bottom\"></div>

  <div class=\"mailpoet_layer_overlay\" style=\"display:none;\"></div>

  <div id=\"wp-link-backdrop\" style=\"display: none\"></div>
  <div
    id=\"wp-link-wrap\"
    class=\"wp-core-ui search-panel-visible\"
    style=\"display: none\"
  >
  <form id=\"wp-link\" tabindex=\"-1\">
    ";
        // line 268
        echo wp_nonce_field("internal-linking", "_ajax_linking_nonce", false);
        echo "
    <div id=\"link-modal-title\">
      ";
        // line 270
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Insert/edit link");
        echo "
      <div id=\"wp-link-close\" tabindex=\"0\"></div>
    </div>
    <div id=\"link-selector\">
      <div id=\"link-options\">
        <div>
          <label>
            <span>";
        // line 277
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Type");
        echo "</span>
            <select id=\"url-type-field\" name=\"urltype\">
              <option value=\"http://\">";
        // line 279
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link to a web page");
        echo "</option>
              <option value=\"[viewInBrowserUrl]\">";
        // line 280
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Browser version");
        echo "</option>
              <option value=\"[unsubscribeUrl]\">";
        // line 281
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubcribe page");
        echo "</option>
              <option value=\"[manageSubscriptionUrl]\">";
        // line 282
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage your subscription page");
        echo "</option>
            </select>
          </label>
        </div>
        <div id=\"link-href-field\">
          <label><span>";
        // line 287
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link");
        echo "</span><input id=\"url-field\" type=\"text\" name=\"href\" /></label>
        </div>
        <div class=\"mailpoet_hidden\">
          <label><span>";
        // line 290
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Title");
        echo "</span><input id=\"link-title-field\" type=\"text\" name=\"linktitle\" /></label>
        </div>
        <div class=\"link-target mailpoet_hidden\">
          <label><span>&nbsp;</span><input type=\"checkbox\" id=\"link-target-checkbox\" /> ";
        // line 293
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Open link in a new window/tab");
        echo "</label>
        </div>
      </div>
      <div id=\"search-panel\">
        <div class=\"link-search-wrapper\">
          <label>
            <span class=\"search-label\">";
        // line 299
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Search your content");
        echo "</span>
            <input type=\"search\" id=\"search-field\" class=\"link-search-field\" autocomplete=\"off\" />
            <span class=\"spinner\"></span>
          </label>
        </div>
        <div id=\"search-results\" class=\"query-results\">
          <ul></ul>
          <div class=\"river-waiting\">
            <span class=\"spinner\"></span>
          </div>
        </div>
        <div id=\"most-recent-results\" class=\"query-results\">
          <div class=\"query-notice\"><em>";
        // line 311
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No search term specified. Showing recent items.");
        echo "</em></div>
          <ul></ul>
          <div class=\"river-waiting\">
            <span class=\"spinner\"></span>
          </div>
        </div>
      </div>
    </div>
    <div class=\"submitbox\">
      <div id=\"wp-link-update\">
        <input type=\"submit\" value=\"";
        // line 321
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add Link");
        echo "\" class=\"button button-primary\" id=\"wp-link-submit\" name=\"wp-link-submit\">
      </div>
      <div id=\"wp-link-cancel\">
        <a class=\"submitdelete deletion\" href=\"#\">";
        // line 324
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Cancel");
        echo "</a>
      </div>
    </div>
  </form>
</div>
";
    }

    // line 331
    public function block_translations($context, array $blocks = array())
    {
        // line 332
        echo "  ";
        $context["helpTooltipSendPreview"] = twig_escape_filter($this->env, MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Didn't receive the test email? Read our [link]quick guide[/link] to sending issues. <br><br>A MailPoet logo will appear in the footer of all emails sent with the free version of MailPoet."), "http://beta.docs.mailpoet.com/article/146-my-newsletters-are-not-being-received", array("target" => "_blank")), "js");
        // line 335
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("failedToFetchAvailablePosts" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Failed to fetch available posts"), "failedToFetchRenderedPosts" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Failed to fetch rendered posts"), "shortcodesWindowTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select a shortcode"), "unsubscribeLinkMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("All emails must include an \"Unsubscribe\" link. Add a footer widget to your email to continue."), "automatedLatestContentMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please add an \"Automated Latest Content\" widget to the email from the right sidebar."), "newsletterPreviewEmailMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enter an email address to send the preview newsletter to."), "newsletterPreviewSent" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your test email has been sent!"), "templateNameMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please add a template name"), "helpTooltipSendPreview" =>         // line 344
($context["helpTooltipSendPreview"] ?? null), "helpTooltipDesignerStyles" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("We only include fonts that will display in all email clients. We understand it can feel limiting!"), "helpTooltipDesignerSubjectLine" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("You can add MailPoet shortcodes here. For example, you can add your subscribers' first names by using this shortcode: [subscriber:firstname | default:reader]. Simply copy and paste the shortcode into the field."), "helpTooltipDesignerPreheader" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This optional text will appear in your subscribers' inboxes, beside the subject line. Write something enticing!"), "helpTooltipDesignerFullWidth" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This option eliminates padding around the image. It only works if the image is larger than the column size."), "helpTooltipDesignerIdealWidth" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Use images with widths of at least 1,000 pixels to ensure sharp display on high density screens, like mobile devices."), "templateSaved" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template has been saved."), "templateSaveFailed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template has not been saved, please try again"), "categoriesAndTags" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories & tags"), "noPostsToDisplay" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("There is no content to display."), "previewShouldOpenInNewTab" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your preview should open in a new tab. Please ensure your browser is not blocking popups from this page."), "newsletterPreview" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter Preview"), "newsletterBodyIsCorrupted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Contents of this newsletter are corrupted and may be lost, you may need to add new content to this newsletter, or create a new one. If possible, please contact us and report this issue."), "saving" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Saving..."), "unsavedChangesWillBeLost" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("There are unsaved changes which will be lost if you leave this page."), "selectColor" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Select", "select color"), "cancelColorSelection" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Cancel", "cancel color selection"), "newsletterIsPaused" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email sending has been paused."), "tutorialVideoTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Before you start, this how you drag and drop in MailPoet"), "announcementBackgroundImagesHeading" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Hey %username%, you can now put text over any image."), "announcementBackgroundImagesMessage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Simply edit any column block to add a background image. It works in pretty much every email client, even on mobile."), "selectType" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select type"), "events" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Events"), "conditions" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Conditions", "Configuration options for automatic email events"), "template" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template"), "designer" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Designer"), "send" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send")));
        // line 371
        echo "
";
    }

    // line 374
    public function block_after_css($context, array $blocks = array())
    {
        // line 375
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("newsletter_editor.css");
        // line 377
        echo "
";
    }

    // line 380
    public function block_after_javascript($context, array $blocks = array())
    {
        // line 381
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("lib/tinymce/tinymce.jquery.min.js", "lib/tinymce/jquery.tinymce.min.js", "lib/mailpoet_shortcodes/plugin.js", "lib/wplink/plugin.js", "newsletter_editor.js");
        // line 387
        echo "

  ";
        // line 389
        echo do_action("mailpoet_newsletter_editor_after_javascript");
        echo "

  <script type=\"text/javascript\">
    var templates = {
      styles: Handlebars.compile(
        jQuery('#newsletter_editor_template_styles').html()
      ),
      save: Handlebars.compile(
        jQuery('#newsletter_editor_template_save').html()
      ),
      heading: Handlebars.compile(
        jQuery('#newsletter_editor_template_heading').html()
      ),

      sidebar: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar').html()
      ),
      sidebarContent: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_content').html()
      ),
      sidebarLayout: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_layout').html()
      ),
      sidebarStyles: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_styles').html()
      ),
      sidebarPreview: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_preview').html()
      ),
      newsletterPreview: Handlebars.compile(
        jQuery('#newsletter_editor_template_newsletter_preview').html()
      ),

      genericBlockTools: Handlebars.compile(
        jQuery('#newsletter_editor_template_tools_generic').html()
      ),

      containerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_block').html()
      ),
      containerEmpty: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_block_empty').html()
      ),
      oneColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_one_column_widget').html()
      ),
      twoColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_two_column_widget').html()
      ),
      threeColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_three_column_widget').html()
      ),
      containerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_settings').html()
      ),
      containerBlockColumnSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_column_settings').html()
      ),

      buttonBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_block').html()
      ),
      buttonInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_widget').html()
      ),
      buttonBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_settings').html()
      ),

      dividerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_block').html()
      ),
      dividerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_widget').html()
      ),
      dividerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_settings').html()
      ),

      footerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_block').html()
      ),
      footerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_widget').html()
      ),
      footerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_settings').html()
      ),

      headerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_block').html()
      ),
      headerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_widget').html()
      ),
      headerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_settings').html()
      ),

      imageBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_block').html()
      ),
      imageInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_widget').html()
      ),
      imageBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_settings').html()
      ),

      socialBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_block').html()
      ),
      socialIconBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_block_icon').html()
      ),
      socialInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_widget').html()
      ),
      socialBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings').html()
      ),
      socialSettingsIconSelector: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_icon_selector').html()
      ),
      socialSettingsIcon: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_icon').html()
      ),
      socialSettingsStyles: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_styles').html()
      ),

      spacerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_block').html()
      ),
      spacerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_widget').html()
      ),
      spacerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_settings').html()
      ),

      automatedLatestContentBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_block').html()
      ),
      automatedLatestContentInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_widget').html()
      ),
      automatedLatestContentBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_settings').html()
      ),

      automatedLatestContentLayoutBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_layout_block').html()
      ),
      automatedLatestContentLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_layout_widget').html()
      ),
      automatedLatestContentLayoutBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_layout_settings').html()
      ),

      postsBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_block').html()
      ),
      postsInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_widget').html()
      ),
      postsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings').html()
      ),
      postSelectionPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_selection').html()
      ),
      emptyPostPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_selection_empty').html()
      ),
      singlePostPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_single_post').html()
      ),
      displayOptionsPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_display_options').html()
      ),

      textBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_block').html()
      ),
      textInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_widget').html()
      ),
      textBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_settings').html()
      )
    };

    var config = {
      availableStyles: {
        textSizes: [
          '9px', '10px', '11px', '12px', '13px', '14px', '15px', '16px',
          '17px', '18px', '19px', '20px', '21px', '22px', '23px', '24px'
        ],
        headingSizes: [
          '10px', '12px', '14px', '16px', '18px', '20px', '22px', '24px',
          '26px', '30px', '36px', '40px'
        ],
        fonts: [
          'Arial',
          'Comic Sans MS',
          'Courier New',
          'Georgia',
          'Lucida',
          'Tahoma',
          'Times New Roman',
          'Trebuchet MS',
          'Verdana'
        ],
        socialIconSets: {
          'default': {
            'custom': '";
        // line 606
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 608
        echo "',
            'facebook': '";
        // line 609
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Facebook.png");
        // line 611
        echo "',
            'twitter': '";
        // line 612
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Twitter.png");
        // line 614
        echo "',
            'google-plus': '";
        // line 615
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Google-Plus.png");
        // line 617
        echo "',
            'youtube': '";
        // line 618
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Youtube.png");
        // line 620
        echo "',
            'website': '";
        // line 621
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Website.png");
        // line 623
        echo "',
            'email': '";
        // line 624
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Email.png");
        // line 626
        echo "',
            'instagram': '";
        // line 627
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Instagram.png");
        // line 629
        echo "',
            'pinterest': '";
        // line 630
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Pinterest.png");
        // line 632
        echo "',
            'linkedin': '";
        // line 633
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/LinkedIn.png");
        // line 635
        echo "'
          },
          'grey': {
            'custom': '";
        // line 638
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 640
        echo "',
            'facebook': '";
        // line 641
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Facebook.png");
        // line 643
        echo "',
            'twitter': '";
        // line 644
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Twitter.png");
        // line 646
        echo "',
            'google-plus': '";
        // line 647
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Google-Plus.png");
        // line 649
        echo "',
            'youtube': '";
        // line 650
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Youtube.png");
        // line 652
        echo "',
            'website': '";
        // line 653
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Website.png");
        // line 655
        echo "',
            'email': '";
        // line 656
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Email.png");
        // line 658
        echo "',
            'instagram': '";
        // line 659
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Instagram.png");
        // line 661
        echo "',
            'pinterest': '";
        // line 662
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Pinterest.png");
        // line 664
        echo "',
            'linkedin': '";
        // line 665
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/LinkedIn.png");
        // line 667
        echo "',
          },
          'circles': {
            'custom': '";
        // line 670
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 672
        echo "',
            'facebook': '";
        // line 673
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Facebook.png");
        // line 675
        echo "',
            'twitter': '";
        // line 676
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Twitter.png");
        // line 678
        echo "',
            'google-plus': '";
        // line 679
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Google-Plus.png");
        // line 681
        echo "',
            'youtube': '";
        // line 682
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Youtube.png");
        // line 684
        echo "',
            'website': '";
        // line 685
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Website.png");
        // line 687
        echo "',
            'email': '";
        // line 688
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Email.png");
        // line 690
        echo "',
            'instagram': '";
        // line 691
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Instagram.png");
        // line 693
        echo "',
            'pinterest': '";
        // line 694
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Pinterest.png");
        // line 696
        echo "',
            'linkedin': '";
        // line 697
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/LinkedIn.png");
        // line 699
        echo "',
          },
          'full-flat-roundrect': {
            'custom': '";
        // line 702
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 704
        echo "',
            'facebook': '";
        // line 705
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Facebook.png");
        // line 707
        echo "',
            'twitter': '";
        // line 708
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Twitter.png");
        // line 710
        echo "',
            'google-plus': '";
        // line 711
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Google-Plus.png");
        // line 713
        echo "',
            'youtube': '";
        // line 714
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Youtube.png");
        // line 716
        echo "',
            'website': '";
        // line 717
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Website.png");
        // line 719
        echo "',
            'email': '";
        // line 720
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Email.png");
        // line 722
        echo "',
            'instagram': '";
        // line 723
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Instagram.png");
        // line 725
        echo "',
            'pinterest': '";
        // line 726
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Pinterest.png");
        // line 728
        echo "',
            'linkedin': '";
        // line 729
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/LinkedIn.png");
        // line 731
        echo "',
          },
          'full-gradient-square': {
            'custom': '";
        // line 734
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 736
        echo "',
            'facebook': '";
        // line 737
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Facebook.png");
        // line 739
        echo "',
            'twitter': '";
        // line 740
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Twitter.png");
        // line 742
        echo "',
            'google-plus': '";
        // line 743
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Google-Plus.png");
        // line 745
        echo "',
            'youtube': '";
        // line 746
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Youtube.png");
        // line 748
        echo "',
            'website': '";
        // line 749
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Website.png");
        // line 751
        echo "',
            'email': '";
        // line 752
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Email.png");
        // line 754
        echo "',
            'instagram': '";
        // line 755
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Instagram.png");
        // line 757
        echo "',
            'pinterest': '";
        // line 758
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Pinterest.png");
        // line 760
        echo "',
            'linkedin': '";
        // line 761
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/LinkedIn.png");
        // line 763
        echo "',
          },
          'full-symbol-color': {
            'custom': '";
        // line 766
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 768
        echo "',
            'facebook': '";
        // line 769
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Facebook.png");
        // line 771
        echo "',
            'twitter': '";
        // line 772
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Twitter.png");
        // line 774
        echo "',
            'google-plus': '";
        // line 775
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Google-Plus.png");
        // line 777
        echo "',
            'youtube': '";
        // line 778
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Youtube.png");
        // line 780
        echo "',
            'website': '";
        // line 781
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Website.png");
        // line 783
        echo "',
            'email': '";
        // line 784
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Email.png");
        // line 786
        echo "',
            'instagram': '";
        // line 787
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Instagram.png");
        // line 789
        echo "',
            'pinterest': '";
        // line 790
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Pinterest.png");
        // line 792
        echo "',
            'linkedin': '";
        // line 793
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/LinkedIn.png");
        // line 795
        echo "',
          },
          'full-symbol-black': {
            'custom': '";
        // line 798
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 800
        echo "',
            'facebook': '";
        // line 801
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Facebook.png");
        // line 803
        echo "',
            'twitter': '";
        // line 804
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Twitter.png");
        // line 806
        echo "',
            'google-plus': '";
        // line 807
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Google-Plus.png");
        // line 809
        echo "',
            'youtube': '";
        // line 810
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Youtube.png");
        // line 812
        echo "',
            'website': '";
        // line 813
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Website.png");
        // line 815
        echo "',
            'email': '";
        // line 816
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Email.png");
        // line 818
        echo "',
            'instagram': '";
        // line 819
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Instagram.png");
        // line 821
        echo "',
            'pinterest': '";
        // line 822
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Pinterest.png");
        // line 824
        echo "',
            'linkedin': '";
        // line 825
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/LinkedIn.png");
        // line 827
        echo "',
          },
          'full-symbol-grey': {
            'custom': '";
        // line 830
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 832
        echo "',
            'facebook': '";
        // line 833
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Facebook.png");
        // line 835
        echo "',
            'twitter': '";
        // line 836
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Twitter.png");
        // line 838
        echo "',
            'google-plus': '";
        // line 839
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Google-Plus.png");
        // line 841
        echo "',
            'youtube': '";
        // line 842
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Youtube.png");
        // line 844
        echo "',
            'website': '";
        // line 845
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Website.png");
        // line 847
        echo "',
            'email': '";
        // line 848
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Email.png");
        // line 850
        echo "',
            'instagram': '";
        // line 851
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Instagram.png");
        // line 853
        echo "',
            'pinterest': '";
        // line 854
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Pinterest.png");
        // line 856
        echo "',
            'linkedin': '";
        // line 857
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/LinkedIn.png");
        // line 859
        echo "',
          },
          'line-roundrect': {
            'custom': '";
        // line 862
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 864
        echo "',
            'facebook': '";
        // line 865
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Facebook.png");
        // line 867
        echo "',
            'twitter': '";
        // line 868
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Twitter.png");
        // line 870
        echo "',
            'google-plus': '";
        // line 871
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Google-Plus.png");
        // line 873
        echo "',
            'youtube': '";
        // line 874
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Youtube.png");
        // line 876
        echo "',
            'website': '";
        // line 877
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Website.png");
        // line 879
        echo "',
            'email': '";
        // line 880
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Email.png");
        // line 882
        echo "',
            'instagram': '";
        // line 883
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Instagram.png");
        // line 885
        echo "',
            'pinterest': '";
        // line 886
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Pinterest.png");
        // line 888
        echo "',
            'linkedin': '";
        // line 889
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/LinkedIn.png");
        // line 891
        echo "',
          },
          'line-square': {
            'custom': '";
        // line 894
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 896
        echo "',
            'facebook': '";
        // line 897
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Facebook.png");
        // line 899
        echo "',
            'twitter': '";
        // line 900
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Twitter.png");
        // line 902
        echo "',
            'google-plus': '";
        // line 903
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Google-Plus.png");
        // line 905
        echo "',
            'youtube': '";
        // line 906
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Youtube.png");
        // line 908
        echo "',
            'website': '";
        // line 909
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Website.png");
        // line 911
        echo "',
            'email': '";
        // line 912
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Email.png");
        // line 914
        echo "',
            'instagram': '";
        // line 915
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Instagram.png");
        // line 917
        echo "',
            'pinterest': '";
        // line 918
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Pinterest.png");
        // line 920
        echo "',
            'linkedin': '";
        // line 921
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/LinkedIn.png");
        // line 923
        echo "',
          },
        },
        dividers: [
          'hidden',
          'dotted',
          'dashed',
          'solid',
          'double',
          'groove',
          'ridge'
        ]
      },
      socialIcons: {
        'facebook': {
          title: 'Facebook',
          linkFieldName: '";
        // line 939
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.facebook.com',
        },
        'twitter': {
          title: 'Twitter',
          linkFieldName: '";
        // line 944
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.twitter.com',
        },
        'google-plus': {
          title: 'Google Plus',
          linkFieldName: '";
        // line 949
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://plus.google.com',
        },
        'youtube': {
          title: 'Youtube',
          linkFieldName: '";
        // line 954
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.youtube.com',
        },
        'website': {
          title: '";
        // line 958
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Website"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 959
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
        'email': {
          title: '";
        // line 963
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 964
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
        'instagram': {
          title: 'Instagram',
          linkFieldName: '";
        // line 969
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://instagram.com',
        },
        'pinterest': {
          title: 'Pinterest',
          linkFieldName: '";
        // line 974
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.pinterest.com',
        },
        'linkedin': {
          title: 'LinkedIn',
          linkFieldName: '";
        // line 979
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.linkedin.com',
        },
        'custom': {
          title: '";
        // line 983
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Custom"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 984
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
      },
      blockDefaults: {
        automatedLatestContent: {
          amount: '5',
          withLayout: false,
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'belowTitle', // 'belowTitle'|'aboveTitle'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 1001
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 1003
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'button', // 'link'|'button'
          readMoreText: '";
        // line 1005
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1007
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'automatedLatestContent.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              }
            }
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'automatedLatestContent.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        automatedLatestContentLayout: {
          amount: '5',
          withLayout: true,
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'alternate', // 'centered'|'left'|'right'|'alternate'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 1056
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 1058
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'button', // 'link'|'button'
          readMoreText: '";
        // line 1060
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1062
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'automatedLatestContentLayout.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              }
            }
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'automatedLatestContentLayout.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        button: {
          text: '";
        // line 1100
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Button"), "js"), "html", null, true);
        echo "',
          url: '',
          styles: {
            block: {
              backgroundColor: '#2ea1cd',
              borderColor: '#0074a2',
              borderWidth: '1px',
              borderRadius: '5px',
              borderStyle: 'solid',
              width: '180px',
              lineHeight: '40px',
              fontColor: '#ffffff',
              fontFamily: 'Verdana',
              fontSize: '18px',
              fontWeight: 'normal',
              textAlign: 'center',
            },
          },
        },
        container: {
          image: {
            src: null,
            display: 'scale',
          },
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
          },
        },
        divider: {
          styles: {
            block: {
              backgroundColor: 'transparent',
              padding: '13px',
              borderStyle: 'solid',
              borderWidth: '3px',
              borderColor: '#aaaaaa',
            },
          },
        },
        footer: {
          text: '<p><a href=\"[link:subscription_unsubscribe_url]\">";
        // line 1142
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubscribe");
        echo "</a> | <a href=\"[link:subscription_manage_url]\">";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage subscription");
        echo "</a><br />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add your postal address here!");
        echo "</p>',
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
            text: {
              fontColor: '#222222',
              fontFamily: 'Arial',
              fontSize: '12px',
              textAlign: 'center',
            },
            link: {
              fontColor: '#6cb7d4',
              textDecoration: 'none',
            },
          },
        },
        image: {
          link: '',
          src: '',
          alt: '";
        // line 1162
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("An image of..."), "js"), "html", null, true);
        echo "',
          fullWidth: false,
          width: '281px',
          height: '190px',
          styles: {
            block: {
              textAlign: 'center',
            },
          },
        },
        posts: {
          amount: '10',
          withLayout: true,
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          postStatus: 'publish', // 'draft'|'pending'|'private'|'publish'|'future'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'alternate', // 'centered'|'left'|'right'|'alternate'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 1185
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 1187
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'link', // 'link'|'button'
          readMoreText: '";
        // line 1189
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1191
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'posts.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              },
            },
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'posts.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        social: {
          iconSet: 'default',
          icons: [
          {
            type: 'socialIcon',
            iconType: 'facebook',
            link: 'http://www.facebook.com',
            image: '";
        // line 1235
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Facebook.png");
        // line 1237
        echo "',
            height: '32px',
            width: '32px',
            text: '";
        // line 1240
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Facebook"), "js"), "html", null, true);
        echo "',
          },
          {
            type: 'socialIcon',
            iconType: 'twitter',
            link: 'http://www.twitter.com',
            image: '";
        // line 1246
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Twitter.png");
        // line 1248
        echo "',
            height: '32px',
            width: '32px',
            text: '";
        // line 1251
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Twitter"), "js"), "html", null, true);
        echo "',
          },
          ],
        },
        spacer: {
          styles: {
            block: {
              backgroundColor: 'transparent',
              height: '40px',
            },
          },
        },
        text: {
          text: '";
        // line 1264
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Edit this to insert text."), "js"), "html", null, true);
        echo "',
        },
        header: {
          text: '";
        // line 1267
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Display problems?"), "js"), "html", null, true);
        echo "&nbsp;' +
            '<a href=\"[link:newsletter_view_in_browser_url]\">";
        // line 1268
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Open this email in your web browser.");
        echo "</a>',
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
            text: {
              fontColor: '#222222',
              fontFamily: 'Arial',
              fontSize: '12px',
              textAlign: 'center',
            },
            link: {
              fontColor: '#6cb7d4',
              textDecoration: 'underline',
            },
          },
        },
      },
      shortcodes: ";
        // line 1286
        echo json_encode(($context["shortcodes"] ?? null));
        echo ",
      sidepanelWidth: '331px',
      newsletterPreview: {
        width: '1024px',
        height: '768px'
      },
      validation: {
        validateUnsubscribeLinkPresent: ";
        // line 1293
        echo ((($context["mss_active"] ?? null)) ? ("true") : ("false"));
        echo ",
      },
      urls: {
        send: '";
        // line 1296
        echo admin_url(("admin.php?page=mailpoet-newsletters#/send/" . intval($this->env->getExtension('MailPoet\Twig\Functions')->params("id"))));
        echo "',
        imageMissing: '";
        // line 1297
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/image-missing.svg");
        // line 1299
        echo "',
      },
      dragDemoUrl: '";
        // line 1301
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/editor-drag-demo.mp4");
        echo "',
      backgroundImageDemoUrl: '";
        // line 1302
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/background-image-demo.mp4");
        echo "',
      currentUserId: '";
        // line 1303
        echo twig_escape_filter($this->env, $this->getAttribute(($context["current_wp_user"] ?? null), "wp_user_id", array()), "html", null, true);
        echo "',
      currentUserFirstName: '";
        // line 1304
        echo twig_escape_filter($this->env, $this->getAttribute(($context["current_wp_user"] ?? null), "first_name", array()), "html", null, true);
        echo "',
      currentUserUsername: '";
        // line 1305
        echo twig_escape_filter($this->env, $this->getAttribute(($context["current_wp_user"] ?? null), "login", array()), "html", null, true);
        echo "',
      dragDemoUrlSettings: '";
        // line 1306
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), ("user_seen_editor_tutorial" . $this->getAttribute(($context["current_wp_user"] ?? null), "wp_user_id", array())), array(), "array"), "html", null, true);
        echo "',
      installedAt: '";
        // line 1307
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "installed_at", array(), "array"), "html", null, true);
        echo "',
    };
    var mailpoet_in_app_announcements = ";
        // line 1309
        echo json_encode($this->getAttribute(($context["settings"] ?? null), "in_app_announcements", array()));
        echo ";
    wp.hooks.doAction('mailpoet_newsletters_editor_initialize', config);
  </script>
";
    }

    public function getTemplateName()
    {
        return "newsletter/editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1768 => 1309,  1763 => 1307,  1759 => 1306,  1755 => 1305,  1751 => 1304,  1747 => 1303,  1743 => 1302,  1739 => 1301,  1735 => 1299,  1733 => 1297,  1729 => 1296,  1723 => 1293,  1713 => 1286,  1692 => 1268,  1688 => 1267,  1682 => 1264,  1666 => 1251,  1661 => 1248,  1659 => 1246,  1650 => 1240,  1645 => 1237,  1643 => 1235,  1596 => 1191,  1591 => 1189,  1586 => 1187,  1581 => 1185,  1555 => 1162,  1528 => 1142,  1483 => 1100,  1442 => 1062,  1437 => 1060,  1432 => 1058,  1427 => 1056,  1375 => 1007,  1370 => 1005,  1365 => 1003,  1360 => 1001,  1340 => 984,  1336 => 983,  1329 => 979,  1321 => 974,  1313 => 969,  1305 => 964,  1301 => 963,  1294 => 959,  1290 => 958,  1283 => 954,  1275 => 949,  1267 => 944,  1259 => 939,  1241 => 923,  1239 => 921,  1236 => 920,  1234 => 918,  1231 => 917,  1229 => 915,  1226 => 914,  1224 => 912,  1221 => 911,  1219 => 909,  1216 => 908,  1214 => 906,  1211 => 905,  1209 => 903,  1206 => 902,  1204 => 900,  1201 => 899,  1199 => 897,  1196 => 896,  1194 => 894,  1189 => 891,  1187 => 889,  1184 => 888,  1182 => 886,  1179 => 885,  1177 => 883,  1174 => 882,  1172 => 880,  1169 => 879,  1167 => 877,  1164 => 876,  1162 => 874,  1159 => 873,  1157 => 871,  1154 => 870,  1152 => 868,  1149 => 867,  1147 => 865,  1144 => 864,  1142 => 862,  1137 => 859,  1135 => 857,  1132 => 856,  1130 => 854,  1127 => 853,  1125 => 851,  1122 => 850,  1120 => 848,  1117 => 847,  1115 => 845,  1112 => 844,  1110 => 842,  1107 => 841,  1105 => 839,  1102 => 838,  1100 => 836,  1097 => 835,  1095 => 833,  1092 => 832,  1090 => 830,  1085 => 827,  1083 => 825,  1080 => 824,  1078 => 822,  1075 => 821,  1073 => 819,  1070 => 818,  1068 => 816,  1065 => 815,  1063 => 813,  1060 => 812,  1058 => 810,  1055 => 809,  1053 => 807,  1050 => 806,  1048 => 804,  1045 => 803,  1043 => 801,  1040 => 800,  1038 => 798,  1033 => 795,  1031 => 793,  1028 => 792,  1026 => 790,  1023 => 789,  1021 => 787,  1018 => 786,  1016 => 784,  1013 => 783,  1011 => 781,  1008 => 780,  1006 => 778,  1003 => 777,  1001 => 775,  998 => 774,  996 => 772,  993 => 771,  991 => 769,  988 => 768,  986 => 766,  981 => 763,  979 => 761,  976 => 760,  974 => 758,  971 => 757,  969 => 755,  966 => 754,  964 => 752,  961 => 751,  959 => 749,  956 => 748,  954 => 746,  951 => 745,  949 => 743,  946 => 742,  944 => 740,  941 => 739,  939 => 737,  936 => 736,  934 => 734,  929 => 731,  927 => 729,  924 => 728,  922 => 726,  919 => 725,  917 => 723,  914 => 722,  912 => 720,  909 => 719,  907 => 717,  904 => 716,  902 => 714,  899 => 713,  897 => 711,  894 => 710,  892 => 708,  889 => 707,  887 => 705,  884 => 704,  882 => 702,  877 => 699,  875 => 697,  872 => 696,  870 => 694,  867 => 693,  865 => 691,  862 => 690,  860 => 688,  857 => 687,  855 => 685,  852 => 684,  850 => 682,  847 => 681,  845 => 679,  842 => 678,  840 => 676,  837 => 675,  835 => 673,  832 => 672,  830 => 670,  825 => 667,  823 => 665,  820 => 664,  818 => 662,  815 => 661,  813 => 659,  810 => 658,  808 => 656,  805 => 655,  803 => 653,  800 => 652,  798 => 650,  795 => 649,  793 => 647,  790 => 646,  788 => 644,  785 => 643,  783 => 641,  780 => 640,  778 => 638,  773 => 635,  771 => 633,  768 => 632,  766 => 630,  763 => 629,  761 => 627,  758 => 626,  756 => 624,  753 => 623,  751 => 621,  748 => 620,  746 => 618,  743 => 617,  741 => 615,  738 => 614,  736 => 612,  733 => 611,  731 => 609,  728 => 608,  726 => 606,  506 => 389,  502 => 387,  499 => 381,  496 => 380,  491 => 377,  488 => 375,  485 => 374,  480 => 371,  478 => 344,  476 => 335,  473 => 332,  470 => 331,  460 => 324,  454 => 321,  441 => 311,  426 => 299,  417 => 293,  411 => 290,  405 => 287,  397 => 282,  393 => 281,  389 => 280,  385 => 279,  380 => 277,  370 => 270,  365 => 268,  334 => 240,  331 => 239,  328 => 238,  323 => 235,  321 => 232,  318 => 231,  316 => 228,  313 => 227,  311 => 224,  308 => 223,  306 => 220,  303 => 219,  301 => 216,  298 => 215,  296 => 212,  293 => 211,  291 => 208,  288 => 207,  286 => 204,  283 => 203,  281 => 200,  278 => 199,  276 => 196,  273 => 195,  271 => 192,  268 => 191,  266 => 188,  263 => 187,  261 => 184,  258 => 183,  256 => 180,  253 => 179,  251 => 176,  248 => 175,  246 => 172,  243 => 171,  241 => 168,  238 => 167,  236 => 164,  233 => 163,  231 => 160,  228 => 159,  226 => 156,  223 => 155,  221 => 152,  218 => 151,  216 => 148,  213 => 147,  211 => 144,  208 => 143,  206 => 140,  203 => 139,  201 => 136,  198 => 135,  196 => 132,  193 => 131,  191 => 128,  188 => 127,  186 => 124,  183 => 123,  181 => 120,  178 => 119,  176 => 116,  173 => 115,  171 => 112,  168 => 111,  166 => 108,  163 => 107,  161 => 104,  158 => 103,  156 => 100,  153 => 99,  151 => 96,  148 => 95,  146 => 92,  143 => 91,  141 => 88,  138 => 87,  136 => 84,  133 => 83,  131 => 80,  128 => 79,  126 => 76,  123 => 75,  121 => 72,  118 => 71,  116 => 68,  113 => 67,  111 => 64,  108 => 63,  106 => 60,  103 => 59,  101 => 56,  98 => 55,  96 => 52,  93 => 51,  91 => 48,  88 => 47,  86 => 44,  83 => 43,  81 => 40,  78 => 39,  76 => 36,  73 => 35,  71 => 32,  68 => 31,  66 => 28,  63 => 27,  61 => 24,  58 => 23,  56 => 20,  53 => 19,  51 => 16,  48 => 15,  46 => 12,  43 => 11,  41 => 8,  38 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/editor.html", "/var/www/html/blog.paulopadovez.com.br/wp-content/plugins/mailpoet/views/newsletter/editor.html");
    }
}
