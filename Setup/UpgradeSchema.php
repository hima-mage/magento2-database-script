<?php

namespace HimaMage\DealWithDb\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements  UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        if(version_compare($context->getVersion() , '1.1.0' , '<')){
            $installer->getConnection()->addColumn(
                $installer->getTable('himamage_post'),
                'author',
                [
                    'type'=> Table::TYPE_TEXT,
                    'length' => 255 ,
                    'nullable' => true,
                    'after' => 'title',
                    'comment' => 'author of the post'
                ]
            );
        }

        $installer->endSetup();
    }
}
