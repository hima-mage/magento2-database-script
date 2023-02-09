<?php

namespace HimaMage\DealWithDb\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends  AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'HimaMage\DealWithDb\Model\Post',
        'HimaMage\DealWithDb\Model\ResourceModel\Post'
        );
    }
}
