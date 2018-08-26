<?php
namespace DerivativeImages\Form;

use Zend\Form\Element;
use Zend\Form\Form;

class ConfigForm extends Form
{
    public function init()
    {
        $this->add([
            'name' => 'derivativeimages_process',
            'type' => Element\Checkbox::class,
            'options' => [
                'label' => 'Create derivative images', // @translate
                'info' => 'The process is done via a background job.', // @translate
            ],
        ]);
    }
}
