<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace LamBelcebur\MaterializeCssHelper\View\Helper;

use Laminas\Form\ElementInterface;

class FormWeek extends FormDateTime
{
    /**
     * @inheritdoc
     */
    protected function getType(ElementInterface $element): string
    {
        return 'week';
    }
}
