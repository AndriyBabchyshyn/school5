<?php

$installer = $this;
$installer->startSetup();
$installer->getConnection()
    ->addColumn($installer->getTable('sales/order'), 'luxtax', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'nullable' => true,
        'length' => '12,4',
        'default' => null,
        'comment' => 'Luxurytax'
    ));
$installer->getConnection()
    ->addColumn($installer->getTable('sales/order'), 'base_luxtax', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'nullable' => true,
        'length' => '12,4',
        'default' => null,
        'comment' => 'Base Luxtax'
    ));
$installer->endSetup();