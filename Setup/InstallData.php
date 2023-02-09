<?php

namespace HimaMage\DealWithDb\Setup;

use HimaMage\DealWithDb\Model\PostFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements  InstallDataInterface
{

    private PostFactory $postFactory;

    public function __construct(PostFactory $postFactory)
    {
        $this->postFactory = $postFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data = [
            'title' => 'this is title' ,
            'content' => 'this is content'
        ];

        $post = $this->postFactory->create();
        $post->addData($data)->save();
    }
}
