<?php

declare(strict_types=1);

namespace Amadeus\Client\Struct\Fare;

use Amadeus\Client\RequestOptions\FareRepriceObFeesOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Ticket\PnrLocatorData;

/**
 * Fare_RepriceOBFees (minimal struct — PNR in active stateful session).
 */
class RepriceOBFees extends BaseWsMessage
{
    public ?PnrLocatorData $pnrLocatorData = null;

    public function __construct(FareRepriceObFeesOptions $params)
    {
        $locator = trim($params->pnrRecordLocator);
        if ($locator !== '') {
            $this->pnrLocatorData = new PnrLocatorData($locator);
        }
    }
}
