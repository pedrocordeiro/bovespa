<?php
namespace CVMWeb\Form;

use Zend\Form\Form;

class RADForm extends Form
{
    public function __construct($name = null)
    {
        // We will ignore the name provided to the constructor
        parent::__construct('rad');

        $this->add([
            'name' => 'date',
            'type' => 'date',
            'options' => [
                'label' => 'Date',
            ],
        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Search',
                'id'    => 'submitbutton',
            ],
        ]);
    }
}
?>