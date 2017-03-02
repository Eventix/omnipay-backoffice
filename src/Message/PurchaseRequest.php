<?php

namespace Omnipay\Backoffice\Message;

/**
 * Backoffice Purchase Request
 *
 * @method \Omnipay\Backoffice\Message\PurchaseResponse send()
 */
class PurchaseRequest extends AbstractRequest {

    /**
     * Return the data formatted for PAY.nl
     * @return array
     */
    public function getData() {
        $this->validate('paymentMethod');
        $data['amount'] = round($this->getAmount() * 100);
        $data['transaction']['description'] = $this->getDescription();
        $data['finishUrl'] = $this->getReturnUrl();
        $data['ipAddress'] = $this->getClientIp();
        $data['paymentMethod'] = $this->getPaymentMethod();

        $data['testMode'] = $this->getTestMode() ? 1 : 0;
        return $data;
    }

    /**
     * Send the data
     * @param array $data
     * @return AbstractResponse
     */
    public function sendData($data) {
        return $this->response = new PurchaseResponse($this, $this->getData());
    }
}
