<?php

class School5_Luxtax_Model_Sales_Order_Creditmemo_Total_Luxtax extends Mage_Sales_Model_Order_Creditmemo_Total_Abstract
{
    /**
     * Collect total
     *
     * @param Mage_Sales_Model_Order_Creditmemo $creditmemo
     * @return $this|Mage_Sales_Model_Order_Creditmemo_Total_Abstract
     * @throws Varien_Exception
     */
    public function collect(Mage_Sales_Model_Order_Creditmemo $creditmemo)
    {
        $order = $creditmemo->getOrder();
        $luxuryTaxAmount = $order->getLuxuryTaxAmount();
        $baseLuxuryTaxAmount = $order->getBaseLuxuryTaxAmount();
        $creditmemo->setLuxuryTaxAmount($luxuryTaxAmount);
        $creditmemo->setBaseLuxuryTaxAmount($baseLuxuryTaxAmount);
        $creditmemo->setGrandTotal($creditmemo->getGrandTotal() + $luxuryTaxAmount);
        $creditmemo->setBaseGrandTotal($creditmemo->getBaseGrandTotal() + $luxuryTaxAmount);
        return $this;
    }
}