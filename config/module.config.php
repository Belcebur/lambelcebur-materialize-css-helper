<?php

use Laminas\ServiceManager\Factory\InvokableFactory;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormButton;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormCheckbox;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormCollection;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormColor;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormDate;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormDateSelect;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormDateTime;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormDateTimeLocal;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormDateTimeSelect;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormElementErrors;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormEmail;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormFile;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormHidden;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormImage;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormInput;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormMonth;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormMonthSelect;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormMultiCheckbox;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormNumber;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormPassword;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormRadio;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormRange;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormReset;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormRow;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormSearch;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormSelect;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormSubmit;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormTel;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormText;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormTextarea;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormTime;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormUrl;
use LamBelcebur\MaterializeCssHelper\View\Helper\FormWeek;
use LamBelcebur\MaterializeCssHelper\View\Helper\GoogleReCaptcha;

return [
    'view_helpers' => [
        'factories' => [
            FormButton::class => InvokableFactory::class,
            FormCheckbox::class => InvokableFactory::class,
            FormColor::class => InvokableFactory::class,
            FormCollection::class => InvokableFactory::class,
            FormDate::class => InvokableFactory::class,
            FormDateSelect::class => InvokableFactory::class,
            FormDateTime::class => InvokableFactory::class,
            FormDateTimeLocal::class => InvokableFactory::class,
            FormDateTimeSelect::class => InvokableFactory::class,
            FormElementErrors::class => InvokableFactory::class,
            FormEmail::class => InvokableFactory::class,
            FormFile::class => InvokableFactory::class,
            FormHidden::class => InvokableFactory::class,
            FormImage::class => InvokableFactory::class,
            FormInput::class => InvokableFactory::class,
            FormMonth::class => InvokableFactory::class,
            FormMonthSelect::class => InvokableFactory::class,
            FormMultiCheckbox::class => InvokableFactory::class,
            FormNumber::class => InvokableFactory::class,
            FormPassword::class => InvokableFactory::class,
            FormRadio::class => InvokableFactory::class,
            FormRange::class => InvokableFactory::class,
            FormReset::class => InvokableFactory::class,
            FormRow::class => InvokableFactory::class,
            FormSearch::class => InvokableFactory::class,
            FormSelect::class => InvokableFactory::class,
            FormSubmit::class => InvokableFactory::class,
            FormTel::class => InvokableFactory::class,
            FormText::class => InvokableFactory::class,
            FormTextarea::class => InvokableFactory::class,
            FormTime::class => InvokableFactory::class,
            FormUrl::class => InvokableFactory::class,
            FormWeek::class => InvokableFactory::class,
            GoogleReCaptcha::class => InvokableFactory::class,
        ],
        'aliases' => [
            \Laminas\Form\View\Helper\FormButton::class => FormButton::class,
            \Laminas\Form\View\Helper\FormCheckbox::class => FormCheckbox::class,
            \Laminas\Form\View\Helper\FormColor::class => FormColor::class,
            \Laminas\Form\View\Helper\FormCollection::class => FormCollection::class,
            \Laminas\Form\View\Helper\FormDate::class => FormDate::class,
            \Laminas\Form\View\Helper\FormDateSelect::class => FormDateSelect::class,
            \Laminas\Form\View\Helper\FormDateTime::class => FormDateTime::class,
            \Laminas\Form\View\Helper\FormDateTimeLocal::class => FormDateTimeLocal::class,
            \Laminas\Form\View\Helper\FormDateTimeSelect::class => FormDateTimeSelect::class,
            \Laminas\Form\View\Helper\FormElementErrors::class => FormElementErrors::class,
            \Laminas\Form\View\Helper\FormEmail::class => FormEmail::class,
            \Laminas\Form\View\Helper\FormFile::class => FormFile::class,
            \Laminas\Form\View\Helper\FormHidden::class => FormHidden::class,
            \Laminas\Form\View\Helper\FormImage::class => FormImage::class,
            \Laminas\Form\View\Helper\FormInput::class => FormInput::class,
            \Laminas\Form\View\Helper\FormMonth::class => FormMonth::class,
            \Laminas\Form\View\Helper\FormMonthSelect::class => FormMonthSelect::class,
            \Laminas\Form\View\Helper\FormMultiCheckbox::class => FormMultiCheckbox::class,
            \Laminas\Form\View\Helper\FormNumber::class => FormNumber::class,
            \Laminas\Form\View\Helper\FormPassword::class => FormPassword::class,
            \Laminas\Form\View\Helper\FormRadio::class => FormRadio::class,
            \Laminas\Form\View\Helper\FormRange::class => FormRange::class,
            \Laminas\Form\View\Helper\FormReset::class => FormReset::class,
            \Laminas\Form\View\Helper\FormRow::class => FormRow::class,
            \Laminas\Form\View\Helper\FormSearch::class => FormSearch::class,
            \Laminas\Form\View\Helper\FormSelect::class => FormSelect::class,
            \Laminas\Form\View\Helper\FormSubmit::class => FormSubmit::class,
            \Laminas\Form\View\Helper\FormTel::class => FormTel::class,
            \Laminas\Form\View\Helper\FormText::class => FormText::class,
            \Laminas\Form\View\Helper\FormTextarea::class => FormTextarea::class,
            \Laminas\Form\View\Helper\FormTime::class => FormTime::class,
            \Laminas\Form\View\Helper\FormUrl::class => FormUrl::class,
            \Laminas\Form\View\Helper\FormWeek::class => FormWeek::class,
        ],
        'invokables' => [
            'GoogleReCaptcha' => GoogleReCaptcha::class,
            'googleReCaptcha' => GoogleReCaptcha::class,
        ],
    ],
];
