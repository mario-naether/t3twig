# t3twig
Twig integration in extbase

Usage:
Added TwigView to controller
````php
class MyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    protected $defaultViewObjectName = \T3TWIG\View\TwigView::class;
}
````

Add Twig Template in Template Folder
````
typo3conf/ext/MyExt/Resources/Private/Templates/MyController/Index.html.twig

