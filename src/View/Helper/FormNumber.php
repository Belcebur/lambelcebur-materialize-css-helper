<?php

namespace LamBelcebur\MaterializeCssHelper\View\Helper;

use Laminas\Form\ElementInterface;

class FormNumber extends FormInput
{
    /**
     * @inheritdoc
     */
    public function render(ElementInterface $element): string
    {
        $this->validTagAttributes = [
            'name' => true,
            'autocomplete' => true,
            'autofocus' => true,
            'disabled' => true,
            'form' => true,
            'list' => true,
            'max' => true,
            'min' => true,
            'step' => true,
            'placeholder' => true,
            'readonly' => true,
            'required' => true,
            'type' => true,
            'value' => true,
        ];

        return parent::render($element);
    }


    /**
     * @inheritdoc
     */
    protected function getType(ElementInterface $element): string
    {
        return 'number';
    }
}
