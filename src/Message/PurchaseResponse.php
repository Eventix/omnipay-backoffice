<?php

namespace Omnipay\Backoffice\Message;

class PurchaseResponse extends FetchTransactionResponse
{
    /**
     * A Payment made through this gateway is always instant successful
     *
     */
    public function isSuccessful()
    {
        return true;
    }

}
