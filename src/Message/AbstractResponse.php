<?php

namespace Omnipay\Backoffice\Message;

class AbstractResponse extends \Omnipay\Common\Message\AbstractResponse
 {
    public function isSuccessful()
    {
        return true;
    }

    public function getMessage()
    {
        return '';
    }
}
