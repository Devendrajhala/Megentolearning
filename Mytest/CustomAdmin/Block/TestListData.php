<?php
 
namespace Mytest\CustomAdmin\Block;
 
use Magento\Framework\View\Element\Template\Context;
use Mytest\CustomAdmin\Model\AffiliateMemberFactory;
use Magento\Framework\App\ResourceConnection;
use Mytest\CustomAdmin\Model\ResourceModel\AffiliateMember\CollectionFactory;
/**
 * Test List block
 */
class TestListData extends \Magento\Framework\View\Element\Template
{
    
    protected $affiliateMember;
    protected $collectionFactory;
    protected $_resource;

    public function __construct(
          Context $context,
          AffiliateMemberFactory $affiliateMember,
          CollectionFactory $collectionFactory,
          ResourceConnection $resource,
          array $data = []
    ) {
         $this->collectionFactory=$collectionFactory;
         $this->affiliateMember=$affiliateMember;
         $this->_resource = $resource;
        parent::__construct($context, $data);
    }
 
    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__(' Member List Page'));
        
        return parent::_prepareLayout();
    }
 
    public function getTestCollection()
    {
         $test =  $this->affiliateMember->create();
         $collection =  $test->getCollection();
         return $collection;
        
      
        //return $collection;
    }
}