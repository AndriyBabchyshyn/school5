<?php

class School5_Complexworld_Model_Eavblogpost extends Mage_Core_Model_Abstract
{
    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'eav_blog_post';

    protected function _construct()
    {
        $this->_init('complexworld/eavblogpost');
    }
}
