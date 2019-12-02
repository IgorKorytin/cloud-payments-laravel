<?php

declare(strict_types = 1);

namespace AvtoDev\CloudPayments\Message\Response;

use AvtoDev\CloudPayments\Message\Response\Model\ModelInterface;
use AvtoDev\CloudPayments\Message\Response\Model\NullModel;

/**
 * @method NullModel getModel()
 *
 * @see https://developers.cloudpayments.ru/#testovyy-metod
 * @see https://developers.cloudpayments.ru/#otmena-podpiski-na-rekurrentnye-platezhi
 */
class SuccessResponse extends AbstractResponse
{
    /**
     * {@inheritDoc}
     */
    public function createModel(): ModelInterface
    {
        return new NullModel;
    }
}
