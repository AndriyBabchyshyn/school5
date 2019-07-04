
<?php

class School5_Contact_Model_Resource_Message_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('contact/message');
    }
}