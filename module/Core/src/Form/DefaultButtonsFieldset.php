<?php

namespace Core\Form;

class DefaultButtonsFieldset extends ButtonsFieldset
{
    public function init()
    {
        $this->setName('buttons');

        $this->add(
            array(
            //'type' => 'Button',
            'type' => 'Core/Spinner-Submit',
            'name' => 'submit',
            'options' => array(
                'label' => /*@translate*/ 'Save',
            ),
            'attributes' => array(
                'id' => 'buttons-submit',
                'type' => 'submit',
                'value' => 'Save',
                'class' => 'cam-btn-save'
            ),
            )
        );
        
        $this->add(
            array(
            'type' => 'Button',
            'name' => 'cancel',
            'options' => array(
                'label' => /*@translate*/ 'Cancel',
            ),
            'attributes' => array(
                'id' => 'buttons-cancel',
                'type' => 'reset',
                'value' => 'Cancel',
                'class' => 'cam-btn-reset'
            ),
            )
        );
    }
    
    public function setOptions($options)
    {
        parent::setOptions($options);
        
        if (isset($options['save_label'])) {
            $this->setSaveButtonLabel($options['save_label']);
        }
        
        return $this;
    }
    
    public function setSaveButtonLabel($label)
    {
        $this->get('submit')->setLabel($label);
        return $this;
    }
}
