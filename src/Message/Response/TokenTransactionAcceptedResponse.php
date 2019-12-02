<?php

declare(strict_types = 1);

namespace AvtoDev\CloudPayments\Message\Response;

use AvtoDev\CloudPayments\Message\Response\Model\ModelInterface;
use AvtoDev\CloudPayments\Message\Response\Model\TokenTransactionAcceptedModel;

/**
 * @method TokenTransactionAcceptedModel getModel()
 *
 * @see https://developers.cloudpayments.ru/#oplata-po-tokenu-rekarring
 */
class TokenTransactionAcceptedResponse extends AbstractResponse
{
    /**
     * {@inheritDoc}
     */
    public function createModel(): ModelInterface
    {
        return new TokenTransactionAcceptedModel;
    }
}