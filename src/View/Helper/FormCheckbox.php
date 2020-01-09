<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace LamBelcebur\MaterializeCssHelper\View\Helper;

use Laminas\Form\Element\Checkbox as CheckboxElement;
use Laminas\Form\ElementInterface;
use Laminas\Form\Exception;

class FormCheckbox extends FormInput
{
    /**
     * @inheritdoc
     * @throws \Exception
     */
    public function render(ElementInterface $element): string
    {
        if (!$element instanceof CheckboxElement) {
            throw new Exception\InvalidArgumentException(sprintf(
                '%s requires that the element is of type Laminas\Form\Element\Checkbox',
                __METHOD__
            ));
        }

        $name = $element->getName();
        if (empty($name) && $name !== 0) {
            throw new Exception\DomainException(sprintf(
                '%s requires that the element has an assigned name; none discovered',
                __METHOD__
            ));
        }

        $attributes = $element->getAttributes();
        $attributes['name'] = $name;
        $attributes['type'] = $this->getInputType();
        $attributes['value'] = $element->getCheckedValue();
        $closingBracket = $this->getInlineClosingBracket();

        if ($element->isChecked()) {
            $attributes['checked'] = 'checked';
        }

        $rendered = sprintf(
            '<input %s%s',
            $this->createAttributesString($attributes),
            $closingBracket
        );

        if ($element->useHiddenElement()) {
            $hiddenAttributes = [
                'disabled' => $attributes['disabled'] ?? false,
                'name' => $attributes['name'],
                'value' => $element->getUncheckedValue(),
            ];

            $rendered = sprintf(
                    '<input type="hidden" %s%s',
                    $this->createAttributesString($hiddenAttributes),
                    $closingBracket
                ) . $rendered;
        }

        return $rendered;
    }

    /**
     * Return input type
     *
     * @return string
     */
    protected function getInputType(): string
    {
        return 'checkbox';
    }
}
