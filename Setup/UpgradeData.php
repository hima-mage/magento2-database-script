<?php

namespace HimaMage\DealWithDb\Setup;

use HimaMage\DealWithDb\Model\PostFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData  implements  UpgradeDataInterface
{

    private PostFactory $postFactory;

    public function __construct(PostFactory $postFactory)
    {
        $this->postFactory = $postFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if(version_compare($context->getVersion() , '1.1.0' , '<')){

            $data = [
                'title' => 'title from upgrade script' ,
                'content' => 'upgrade content' ,
                'author' => 'ibrahim'
            ];

            $post = $this->postFactory->create();
            $post->addData($data)->save();
        }

    }
}
