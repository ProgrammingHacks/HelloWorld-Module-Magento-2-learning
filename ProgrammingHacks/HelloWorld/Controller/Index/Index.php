<?php


namespace ProgrammingHacks\HelloWorld\Controller\Index;

use Magento\Framework\App\ActionInterface as Action;
use Magento\Framework\View\Result\PageFactory;

class Index implements Action
{

    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * Index constructor.
     * @param PageFactory $pageFactory
     */
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        /*echo "Hello World";
        die;*/
        return $this->pageFactory->create();
    }
}
