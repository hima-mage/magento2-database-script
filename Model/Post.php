<?php

namespace HimaMage\DealWithDb\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends  AbstractModel
{

    protected function _construct()
    {
        $this->_init('HimaMage\DealWithDb\Model\ResourceModel\Post');
    }


}
