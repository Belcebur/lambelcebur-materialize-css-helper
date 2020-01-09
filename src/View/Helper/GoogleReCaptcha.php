<?php

namespace LamBelcebur\MaterializeCssHelper\View\Helper;

use Laminas\Form\View\Helper\AbstractHelper;
use Laminas\ServiceManager\Exception\ServiceNotFoundException;
use Laminas\View\Renderer\PhpRenderer;

class GoogleReCaptcha extends AbstractHelper
{
    /**
     * @return string
     * @throws ServiceNotFoundException
     */
    public function __invoke(): string
    {
        /**
         * @var PhpRenderer $view
         */
        $view = $this->getView();
        $config = $view->getHelperPluginManager()->getServiceLocator()->get('config');

        $siteKey = $config['new_recaptcha']['sitekey'] ?? false;

        if ($siteKey) {
            return "<div class='g-recaptcha' data-callback='reCaptchaCallback' data-sitekey='{$siteKey}'></div>";
        }

        return 'Invalid site key';
    }

}
