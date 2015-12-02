<?php

function form_fun_cake_page(){
  return drupal_get_form('form_fun_cake');
}

function form_fun_cake($form_state){
    $form = array();

    $form['choice'] = array(
        '#type' => 'select',
        '#title' => t('Cake or pie?'),
        '#description' => t('Would you like cake or pie?'),
        '#options' => array(
            'cake' => t('Cake please'),
            'pie' => t('Pie I guess'),
        ),
        '#default_value' => 'cake',
        '#required' => TRUE,
    );

    $form['buttons']['submit'] = array(
        '#type' => 'submit',
        '#value' => t('Submit'),
    );

    return $form;
}