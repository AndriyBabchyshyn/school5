<?php

class School5_Luxutax_Model_Sales_Order_Invoice_Total_Luxtax extends Mage_Sales_Model_Order_Invoice_Total_Abstract
{
    /**
     * Collect total
     *
     * @param Mage_Sales_Model_Order_Invoice $invoice
     * @return $this|Mage_Sales_Model_Order_Invoice_Total_Abstract
     * @throws Varien_Exception
     */
    public function collect(Mage_Sales_Model_Order_Invoice $invoice)
    {
        $order = $invoice->getOrder();
        $luxuryTaxAmount = $order->getLuxuryTaxAmount();
        $baseLuxuryTaxAmount = $order->getBaseLuxuryTaxAmount();
        $invoice->setLuxuryTaxAmount($luxuryTaxAmount);
        $invoice->setBaseLuxuryTaxAmount($baseLuxuryTaxAmount);
        $invoice->setGrandTotal($invoice->getGrandTotal() + $luxuryTaxAmount);
        $invoice->setBaseGrandTotal($invoice->getBaseGrandTotal() + $luxuryTaxAmount);
        return $this;
    }
}