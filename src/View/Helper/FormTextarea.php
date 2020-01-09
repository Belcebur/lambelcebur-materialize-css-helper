<?php

namespace LamBelcebur\MaterializeCssHelper\View\Helper;

use Laminas\Form\ElementInterface;
use Laminas\Form\LabelAwareInterface;

class FormTextarea extends \Laminas\Form\View\Helper\FormTextarea
{

    public function render(ElementInterface $element): string
    {
        $name = $element->getName();
        $id = $element->getAttribute('id');
        if (!$id) {
            $id = 'textarea-' . mt_rand();
        }
        $element->setAttributes(
            [
                'class' => "{$element->getAttribute('class')} materialize-textarea",
            ]
        );

        if ($element->hasAttribute('maxlength')) {
            $element->setAttribute('length', $element->getAttribute('maxlength'));
        }

        if ($element->hasAttribute('length')) {
            $element->setAttribute('length', $element->getAttribute('length'));
        }

        $element->setAttribute('id', $id);
        $attributes = $element->getAttributes();
        $attributes['name'] = $name;
        $content = (string)$element->getValue();
        $escapeHtml = $this->getEscapeHtmlHelper();

        $textarea = sprintf(
            '<textarea %s>%s</textarea>',
            $this->createAttributesString($attributes),
            $escapeHtml($content)
        );

        if ($element instanceof LabelAwareInterface) {
            $element->setLabelAttributes(array_merge($element->getLabelAttributes(), ['for' => $id,]));
        }

        return $textarea;
    }

}
