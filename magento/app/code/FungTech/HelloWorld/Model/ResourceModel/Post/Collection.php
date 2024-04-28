<?php

namespace FungTech\HelloWorld\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
  protected $_idFieldName = 'post_id';
  protected $_eventPrefix = 'fungtech_helloworld_post_collection';
  protected $_eventObject = 'post_collection';

  /**
   * Define resource model
   *
   * @return void
   */
  protected function _construct()
  {
    $this->_init('FungTech\HelloWorld\Model\Post', 'FungTech\HelloWorld\Model\ResourceModel\Post');
  }
}
