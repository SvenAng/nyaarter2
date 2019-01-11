<?php

/**
 * Implements template_preprocess_html().
 */
function nyaarter2_preprocess_html(&$variables) {
}



/**
 * Implements template_preprocess_node.
 */
function nyaarter2_preprocess_node(&$variables) {
}
//function helper_form_alter(&$form, $form_state, $form_id) {
//    switch ($form_id) {
//        case 'fynden_node_form':
//            $form['field_art']['und']['actions']['ief_add']['#value'] = t('Add your content types');
//            $form['field_art']['und']['form']['actions']['ief_add_save']['#value'] = t('Save your content type');
//            break;
//    }
//}


function nyaarter2_preprocess_page(&$variables) {
    
    $variables['linked_logo'] = '';
    if (!empty($variables['logo_img'])) {
        $variables['linked_logo'] = l($variables['logo_img'], '<front>', array(
            'attributes' => array(
            'rel' => 'home',
            'title' => strip_tags($variables['site_name']) . ' ' . t('Home'),
        ),
            'html' => TRUE,
        ));
    }
    

    

    // Messages in modal.
    $variables['zurb_foundation_messages_modal'] = theme_get_setting('zurb_foundation_messages_modal');

    

    // Dynamic sidebars.
    if (!empty($left) && !empty($right)) {
        $variables['main_grid'] = 'medium-6 medium-push-3';
        $variables['sidebar_first_grid'] = 'medium-3 medium-pull-6';
        $variables['sidebar_sec_grid'] = 'medium-3';
    }
    elseif (empty($left) && !empty($right)) {
        $variables['main_grid'] = 'medium-9';
        $variables['sidebar_first_grid'] = '';
        $variables['sidebar_sec_grid'] = 'medium-3';
    }
    elseif (!empty($left) && empty($right)) {
        $variables['main_grid'] = 'medium-9 medium-push-3';
        $variables['sidebar_first_grid'] = 'medium-3 medium-pull-9';
        $variables['sidebar_sec_grid'] = '';
    }
    else {
        $variables['main_grid'] = '';
        $variables['sidebar_first_grid'] = '';
        $variables['sidebar_sec_grid'] = '';
    }

    // Ensure modal reveal behavior if modal messages are enabled.
    if (theme_get_setting('zurb_foundation_messages_modal')) {
        drupal_add_js(drupal_get_path('theme', 'zurb_foundation') . '/js/behavior/reveal.js');
    }
}