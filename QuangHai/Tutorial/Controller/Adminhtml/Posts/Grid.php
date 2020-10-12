<?php
namespace QuangHai\Tutorial\Controller\Adminhtml\Posts;

use QuangHai\Tutorial\Controller\Adminhtml\Posts;

class Grid extends Posts
{
    public function execute()
    {
        return $this->_resultPageFactory->create();
    }
}
