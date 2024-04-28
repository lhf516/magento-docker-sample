<?php

namespace FungTech\HelloWorld\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
  const CACHE_TAG = 'fungtech_helloworld_post';
  protected $_cacheTag = 'fungtech_helloworld_post';
  protected $_eventPrefix = 'fungtech_helloworld_post';

  protected function _construct()
  {
    $this->_init('FungTech\HelloWorld\Model\ResourceModel\Post');
  }

  public function getIdentities()
  {
    return [self::CACHE_TAG . '_' . $this->getId()];
  }

  public function getDefaultValues()
  {
    $values = [];
    return $values;
  }
}
