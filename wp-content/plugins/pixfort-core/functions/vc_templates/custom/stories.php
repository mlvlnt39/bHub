<?php




function pix_templates_stories(){
    $templates = array();

    // event

    $data = array();
    $data['name'] = __( 'Stories Event', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/stories/event-stories.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all content stories';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" css=".vc_custom_1592482929524{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_row content_placement="middle"][vc_column width="1/3"][pix_text size="text-24" bold="font-weight-bold" secondary_font="secondary-font" content_color="heading-default" animation="fade-in-up" css=".vc_custom_1590467787843{padding-top: 10px !important;}"]Recent Stories[/pix_text][pix_text size="text-18" content_color="body-default" animation="fade-in-up" delay="200"]Combine seamlessly fitting layouts, customize everything you want.[/pix_text][pix_button btn_text="Follow us on Instagram" btn_style="underline" btn_remove_padding="no-padding" btn_size="md" btn_effect="" btn_hover_effect="" btn_add_hover_effect="" btn_icon_animation="yes" btn_animation="fade-in-up" btn_icon="pixicon-instagram2" btn_anim_delay="400" css=".vc_custom_1590467812559{margin-top: 10px !important;}" btn_link="#"][/vc_column][vc_column width="2/3" content_align="text-center"][pix_story title="Paris Event" align="text-center" width="120" bold="font-weight-bold" content_color="heading-default" outer_border="1" pix_tilt="tilt" animation="fade-in-up" stories="%5B%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-2.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-4.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-3.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-1.jpg%22%7D%5D" style="" hover_effect="2" add_hover_effect="1" image="https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/gif-1.gif" css=".vc_custom_1591577902950{margin-right: 20px !important;}"][pix_story title="Paris Event" align="text-center" width="120" bold="font-weight-bold" content_color="heading-default" outer_border="1" pix_tilt="tilt" animation="fade-in-up" stories="%5B%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-4.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-2.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-3.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-1.jpg%22%7D%5D" style="" hover_effect="2" add_hover_effect="1" image="https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-1.jpg" css=".vc_custom_1591577925061{margin-right: 20px !important;}"][pix_story title="Paris Event" align="text-center" width="120" bold="font-weight-bold" content_color="heading-default" outer_border="1" pix_tilt="tilt" animation="fade-in-up" stories="%5B%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-3.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-2.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-4.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-1.jpg%22%7D%5D" style="" hover_effect="2" add_hover_effect="1" image="https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/gif-2.gif" css=".vc_custom_1591577933951{margin-right: 20px !important;}"][pix_story title="Paris Event" align="text-center" width="120" bold="font-weight-bold" content_color="heading-default" outer_border="1" pix_tilt="tilt" animation="fade-in-up" stories="%5B%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-1.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-2.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-4.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-image-3.jpg%22%7D%5D" style="" hover_effect="2" add_hover_effect="1" image="https://essentials.pixfort.com/event/wp-content/uploads/sites/9/2020/06/story-3.jpg" css=".vc_custom_1591577942346{margin-right: 20px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    // influencer

    $data = array();
    $data['name'] = __( 'Stories Influencer', 'essentials-core' );
    $data['weight'] = 0;
    $data['type'] = 'default_templates';
    $data['category'] = 'default_templates';
    $data['image_path'] = preg_replace( '/\s/', '%20', plugins_url( 'thumbnails/stories/influencer-stories.png', __FILE__ ) );
    $data['custom_class'] = 'custom_template_for_vc_custom_template all content stories';
    $data['content']  = <<<CONTENT
[vc_section full_width="stretch_row" pix_over_visibility="" pix_visibility="1" css=".vc_custom_1592838784364{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #ffffff !important;}"][vc_row content_placement="middle"][vc_column content_align="text-center"][heading title_color="body-default" title_size="h6" animation="fade-in-up" secondary_font="secondary-font" title="Featured stories on Instagram" delay="400" css=".vc_custom_1591570336729{padding-bottom: 30px !important;}"][pix_story title="Roller coaster" align="text-center" width="120" bold="font-weight-bold" secondary_font="secondary-font" content_color="heading-default" outer_border="1" animation="fade-in-up" stories="%5B%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-3.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-4.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-2.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-1.jpg%22%7D%5D" style="" hover_effect="3" add_hover_effect="1" image="https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/gif-1-1.gif" css=".vc_custom_1591572305964{margin-right: 30px !important;}"][pix_story title="Best friends" align="text-center" width="120" bold="font-weight-bold" secondary_font="secondary-font" content_color="heading-default" outer_border="1" animation="fade-in-up" stories="%5B%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-4.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-3.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-2.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-1.jpg%22%7D%5D" style="" hover_effect="3" add_hover_effect="1" image="https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-1.jpg" css=".vc_custom_1591572451890{margin-right: 30px !important;}"][pix_story title="Eurpoe trip" align="text-center" width="120" bold="font-weight-bold" secondary_font="secondary-font" content_color="heading-default" outer_border="1" animation="fade-in-up" stories="%5B%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-2.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-3.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-4.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-1.jpg%22%7D%5D" style="" hover_effect="3" add_hover_effect="1" image="https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-2.jpg" css=".vc_custom_1591572456637{margin-right: 30px !important;}"][pix_story title="Friends party" align="text-center" width="120" bold="font-weight-bold" secondary_font="secondary-font" content_color="heading-default" outer_border="1" animation="fade-in-up" stories="%5B%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-3.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-4.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-2.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-1.jpg%22%7D%5D" style="" hover_effect="3" add_hover_effect="1" image="https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/gif-2.gif" css=".vc_custom_1591572387110{margin-right: 30px !important;}"][pix_story title="Summer trip" align="text-center" width="120" bold="font-weight-bold" secondary_font="secondary-font" content_color="heading-default" outer_border="1" animation="fade-in-up" stories="%5B%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-1.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-3.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-4.jpg%22%7D%2C%7B%22img%22%3A%22https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-image-2.jpg%22%7D%5D" style="" hover_effect="3" add_hover_effect="1" image="https://essentials.pixfort.com/influencer/wp-content/uploads/sites/26/2020/06/story-3.jpg" css=".vc_custom_1591572462067{margin-right: 30px !important;}"][/vc_column][/vc_row][/vc_section]
CONTENT;

    array_push($templates, $data);

    return $templates;
}




 ?>
