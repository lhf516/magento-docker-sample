<?php

namespace FungTech\HelloWorld\Controller\Test;

class Redirect extends \Magento\Framework\App\Action\Action
{
  public function execute()
  {
    $this->_redirect('*/*/hello');
  }
}
