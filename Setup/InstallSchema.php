<?php

namespace HimaMage\DealWithDb\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements  InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        if(!$installer->tableExists('himamage_post')){
            $table = $installer->getConnection()->newTable(
                $installer->getTable('himamage_post')
            )->addColumn(
                'post_id' ,
                Table::TYPE_INTEGER,
                null ,
                [
                    'identity' => true ,
                    'primary' => true ,
                    'nullable' => false,
                    'unsigned' => true
                ],
                'this is post id '
            )->addColumn(
                'title',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'this is post title'
            )->addColumn(
                'content',
                Table::TYPE_TEXT,
                "64k",
                [],
                'post content'
            )->setComment('this is post table');

            $installer->getConnection()->createTable($table);
        }
        $installer->endSetup();
    }
}
