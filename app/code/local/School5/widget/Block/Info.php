
<?php
class School5_widget_Block_Info extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{
    public function __construct(array $args = array())
    {
        parent::__construct($args);
        $this->setTemplate('School5/widget/widget.phtml');
    }
    public function getModel()
    {
        if ($this->getPostId()) {
            return Mage::getModel('grid/posts')->load($this->getPostId());
        }
    }
}