<?php

class School5_Luxtax_Block_Total_Luxtax_Luxtax extends Mage_Sales_Block_Order_Totals
{
    /**
     * Get parent block source
     *
     * @return Mage_Sales_Model_Order
     * @throws Varien_Exception
     */
    public function getSource()
    {
        return $this->getParentBlock()->getSource();
    }
    /**
     * Luxury Tax total initialization
     *
     * @return $this
     * @throws Varien_Exception
     */
    public function initTotals()
    {
        $source = $this->getSource();
        if ($source->getTaxAmount() > 0) {
            $this->getParentBlock()->addTotal(
                new Varien_Object(array(
                    'code' => 'tax',
                    'value' => $source->getTaxAmount(),
                    'base_value' => $source->getBaseTaxAmount(),
                    'label' => $this->__('Tax'),
                )),'subtotal');
        }
        return $this;
    }
}
