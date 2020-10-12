<?php
namespace QuangHai\Tutorial\Model;

use Magento\Framework\Model\AbstractModel;

class Posts extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('QuangHai\Tutorial\Model\ResourceModel\Posts');
    }
}
