<?php
namespace T3TWIG\View;

/**
 * Class TwigView
  */
class TwigView extends \TYPO3\CMS\Fluid\View\TemplateView
{
    const TWIG_TEMPLATE_FORMAT = '.html.twig';

    /**
     * @var \Twig_Environment
     */
    private $twig;

    /**
     * @var \Twig_TemplateWrapper
     */
    private $template;

    public function initializeView()
    {

        $loader = new \Twig_Loader_Filesystem(
            dirname($this->getTemplatePathAndFilename())
        );

        $action = ucfirst($this->controllerContext->getRequest()->getControllerActionName());

        $this->twig = new \Twig_Environment($loader);
        $this->template = $this->twig->load($action . self::TWIG_TEMPLATE_FORMAT);
    }

    /**
     * @param null $actionName
     * @return string
     */
    public function render($actionName = null)
    {
        return $this->template->render(
            $this->baseRenderingContext->getTemplateVariableContainer()->getAll()
        );
    }
}