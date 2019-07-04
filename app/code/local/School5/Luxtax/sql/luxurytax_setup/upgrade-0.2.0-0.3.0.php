<?php

$installer = $this;
$installer->startSetup();
$installer->getConnection()
    ->addColumn($installer->getTable('sales/quote'), 'luxury_tax_amount', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'nullable' => true,
        'length' => '12,4',
        'default' => null,
        'comment' => 'Luxury Tax Amount'
    ));
$installer->getConnection()
    ->addColumn($installer->getTable('sales/quote'), 'base_luxury_tax_amount', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'nullable' => true,
        'length' => '12,4',
        'default' => null,
        'comment' => 'Base Luxury Tax Amount'
    ));
$installer->getConnection()
    ->addColumn($installer->getTable('sales/invoice'), 'luxury_tax_amount', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'nullable' => true,
        'length' => '12,4',
        'default' => null,
        'comment' => 'Luxury Tax Amount'
    ));
$installer->getConnection()
    ->addColumn($installer->getTable('sales/invoice'), 'base_luxury_tax_amount', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'nullable' => true,
        'length' => '12,4',
        'default' => null,
        'comment' => 'Base Luxury Tax Amount'
    ));
$installer->getConnection()
    ->addColumn($installer->getTable('sales/creditmemo'), 'luxury_tax_amount', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'nullable' => true,
        'length' => '12,4',
        'default' => null,
        'comment' => 'Luxury Tax Amount'
    ));
$installer->getConnection()
    ->addColumn($installer->getTable('sales/creditmemo'), 'base_luxury_tax_amount', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'nullable' => true,
        'length' => '12,4',
        'default' => null,
        'comment' => 'Base Luxury Tax Amount'
    ));
$installer->endSetup();