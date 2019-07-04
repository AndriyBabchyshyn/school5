<?php

class School5_Contact_Block_Adminhtml_Message extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Training_Contact_Block_Adminhtml_Message constructor.
     */
    public function __construct()
    {
        $this->_blockGroup = "contact";
        $this->_controller = "adminhtml_message";
        $this->_headerText = $this->__("Contact");
        parent::__construct();
        $this->removeButton('add');
    }
}