<?php
namespace QuangHai\Tutorial\Model\ResourceModel\Posts;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'QuangHai\Tutorial\Model\Posts',
            'QuangHai\Tutorial\Model\ResourceModel\Posts'
        );
    }
}
