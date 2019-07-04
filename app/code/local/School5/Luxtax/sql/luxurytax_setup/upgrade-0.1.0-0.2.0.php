<?php

$installer = $this;
$installer->startSetup();
$installer->getConnection()
    ->changeColumn($installer->getTable('sales/order'), 'luxury_tax', 'luxyrytax', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'nullable' => true,
        'length' => '12,4',
        'default' => null,
        'comment' => 'Luxtax'
    ));
$installer->getConnection()
    ->changeColumn($installer->getTable('sales/order'), 'base_luxury_tax', 'base_luxurytax', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'nullable' => true,
        'length' => '12,4',
        'default' => null,
        'comment' => 'Base Luxtax'
    ));


$installer->getConnection()
    ->changeColumn($installer->getTable('sales/order'), 'luxury_tax', 'luxury_tax_amount', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'nullable' => true,
        'length' => '12,4',
        'default' => null,
        'comment' => 'Luxtax Amount'
    ));
$installer->getConnection()
    ->changeColumn($installer->getTable('sales/order'), 'base_luxury_tax', 'base_luxury_tax_amount', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'nullable' => true,
        'length' => '12,4',
        'default' => null,
        'comment' => 'Base Luxtax Amount'
    ));
$installer->endSetup();
