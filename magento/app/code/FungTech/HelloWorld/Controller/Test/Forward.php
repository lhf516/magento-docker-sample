<?php

namespace FungTech\HelloWorld\Controller\Test;

class Forward extends \Magento\Framework\App\Action\Action
{
  public function execute()
  {
    $this->_forward('hello', 'Test');
  }
}
