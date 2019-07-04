<?php
class School5_Contact_Model_Resource_Message extends Mage_Core_Model_Resource_Db_Abstract
{
protected function _construct()
{
$this->_init('contact/message', 'message_id');
}
}