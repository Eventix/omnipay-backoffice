<?php

namespace Omnipay\Backoffice\Message;

use Omnipay\Common\Message\RedirectResponseInterface;

class FetchTransactionResponse extends AbstractResponse implements RedirectResponseInterface
{
    /**
     * {@inheritdoc}
     */
    public function isRedirect()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getRedirectUrl()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getRedirectMethod()
    {
        return 'GET';
    }

    /**
     * {@inheritdoc}
     */
    public function getRedirectData()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function isSuccessful()
    {
        return parent::isSuccessful();
    }

    /**
     * @return boolean
     */
    public function isOpen()
    {
        return false;
    }

    /**
     * @return boolean
     */
    public function isCancelled()
    {
        return false;
    }

    /**
     * @return boolean
     */
    public function isPaid()
    {
        return true;
    }

    /**
     * @return boolean
     */
    public function isExpired()
    {
        return false;
    }

    /**
     * @return mixed
     */
    public function getTransactionReference()
    {
        if(isset($this->data['paymentMethod'])) {
            return $this->data['paymentMethod'];
        }
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return 'paid';
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        if(isset($this->data['amount'])) {
            return $this->data['amount'];
        }
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return false;
    }
}
