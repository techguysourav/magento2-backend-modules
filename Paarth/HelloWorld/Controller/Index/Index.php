<?php
namespace Packt\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
       $this->_view->loadLayout();
       
	   $subscription = $this->_objectManager->create('Packt\HelloWorld\Model\Subscription');
			
		$collection = $subscription->getCollection();
		
		
	
		
		 $output = '' ;
		foreach ($collection as $product) {
                 $output .= \Zend_Debug::dump($product->debug(), null,
false);
}
			$this->getResponse()->setBody($output);
			$subscription->delete();
			
			
			
			
			
			
			
			
			
	   
	   
	   $this->_view->renderLayout();
	   
	   
	   
	   
    }
	
	

}