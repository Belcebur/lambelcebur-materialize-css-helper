<?php

namespace LamBelcebur\MaterializeCssHelper\View\Helper;

use Laminas\Form\ElementInterface;

class FormRadio extends FormMultiCheckbox
{

    /**
     * @inheritdoc
     */
    protected static function getName(ElementInterface $element): string
    {
        return $element->getName();
    }

    /**
     * @inheritdoc
     */
    public function render(ElementInterface $element): string
    {
        $element->setAttribute('class', 'with-gap');
        return parent::render($element);
    }

    /**
     * @inheritdoc
     */
    protected function getInputType(): string
    {
        return 'radio';
    }
}
