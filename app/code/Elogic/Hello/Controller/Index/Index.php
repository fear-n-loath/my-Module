<?php
declare(strict_types=1);

namespace Elogic\Hello\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/* Class Index
 */

class Index implements HttpGetActionInterface
{
    /* @var PageFactory
     */
    private PageFactory $pageFactory;

    /* @var RequestInterface
     */
    private RequestInterface $request;



    /* @param PageFactory $pageFactory
     * @param RequestInterface $request
     */
    public function __construct(PageFactory $pageFactory, RequestInterface $request)
    {
        $this->pageFactory = $pageFactory;
        $this->request = $request;
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        // var_dump($this->request->getParam('g1'));

        $page = $this->pageFactory->create();
        $block = $page->getLayout()->getBlock('hello_index_index');
        $block->setData('key', $this->getResult($this->request));
        return $page;
    }

    public function getResult($request)
    {
        return $request->getParam('q1');
    }
}
