<?php

namespace LamBelcebur\MaterializeCssHelper\View\Helper;

use Laminas\Form\ElementInterface;

class FormDateTimeLocal extends FormDateTime
{
    /**
     * @inheritdoc
     */
    protected function getType(ElementInterface $element): string
    {
        return 'datetime-local';
    }
}
