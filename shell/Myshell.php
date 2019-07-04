<?php

require_once 'abstract.php';
class School5_Shell_Contact extends Mage_Shell_Abstract
{

    public function run()
    {
        Mage::log($this->generateMail(), null, 'email.log', true);
    }

    public function getModel()
    {
        return  Mage::getModel('contact/message')->load(7);
    }

    public function generateMail()
    {
        $mail = Mage::getModel('core/email');
        $mail->setToName($this->getModel()->getName());
        $mail->setToEmail($this->getModel()->getEmail());
        $mail->setBody($this->getModel()->getComment() . " " . $this->getModel()->getAnswer());
        $mail->setFromName('ShellScript');
        $mail->setType('text');
        return $mail;
    }
}
$shell = new School5_Shell_Contact();
$shell->run();