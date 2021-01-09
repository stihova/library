<?php

namespace Drupal\my_module\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class MyConfigForm extends ConfigFormBase {
    
    public function getFormId()
    {
        return 'my_module_config_form';
    }

    protected function getEditableConfigNames()
    {
        return [
            'my_module.settings'
        ];
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form = parent::buildForm($form, $form_state);

        $config = $this->config('my_module.settings');
        
        $form['module_title'] = [
            '#type' => 'textfield',
            '#title' => 'Module Name',
            '#description' => 'Fill this field for the module name.'
        ];

        $form['module_description'] = [
            '#type' => 'textarea',
            '#title' => 'Module Description',
            '#description' => 'Fill this field for the module description.'
        ];

        return $form;
    }
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $config = $this->config('my_module.settings');
        $config->set('my_module.title',$form_state->getValue('module_title'));
        $config->set('my_module.description',$form_state->getValue('module_description'));
        $config->save();

        return parent::submitForm($form, $form_state);
    }
}
