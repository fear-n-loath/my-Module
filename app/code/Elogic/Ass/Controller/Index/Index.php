<?php
declare(strict_types=1);

namespace Elogic\Ass\Controller\Index;

use Elogic\Ass\Api\Data\GunsInterface;
use Elogic\Ass\Api\GunsRepositoryInterface;
use Elogic\Ass\Model\GunsRepository;
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

   // /* @var GunsRepositoryInterface
   //  */
  //  private GunsRepositoryInterface $gunsRepository;


    /* @param PageFactory $pageFactory
     * @param RequestInterface $request
     */
    public function __construct(
        PageFactory $pageFactory,
        RequestInterface $request//,
       // GunsRepositoryInterface $gunsRepository
    ) {
        $this->pageFactory = $pageFactory;
        $this->request = $request;
       // $this->gunsRepository = $gunsRepository;
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        // var_dump($this->request->getParam('g1'));

        $page = $this->pageFactory->create();
        $block = $page->getLayout()->getBlock('elogic_get');
        $block->setData('key',$this->request->getParam('q1')); //$this->getResult1($this->request));
        return $page;
    }

    //public function getResult1($request)
  //  {
  //      return $request->getParam('q1');
  //  }
}
