<?php

namespace Omnipay\Backoffice;

use Omnipay\Common\AbstractGateway;

/**
 * Backoffice Payment methods
 *
 * Used for 'offline' payment methods as
 * PIN / Cash which will be paid directly
 * withouth any 'online' paymentProvider.
 *
 */
class Gateway extends AbstractGateway
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Backoffice';
    }

    /**
     * @param  array    $parameters
     * @return \Omnipay\Backoffice\Message\PurchaseRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Backoffice\Message\PurchaseRequest', $parameters);
    }
}
