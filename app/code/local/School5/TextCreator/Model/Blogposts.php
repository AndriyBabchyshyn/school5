<?php

class School5_TextCreator_Model_Blogposts extends Mage_Core_Model_Abstract
{
    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'school5_blog_post';

    protected function _construct()
    {

        $this->_init('textcreator/blogposts');
    }
}