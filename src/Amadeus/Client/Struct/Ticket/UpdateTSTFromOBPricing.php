<?php

declare(strict_types=1);

namespace Amadeus\Client\Struct\Ticket;

use Amadeus\Client\RequestOptions\TicketUpdateTstFromObPricingOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Ticket\PnrLocatorData;
use Amadeus\Client\Struct\Ticket\PsaList;
use Amadeus\Client\Struct\Ticket\ItemReference;

/**
 * Ticket_UpdateTSTFromOBPricing (apply OB-fee repricing to existing TST).
 */
class UpdateTSTFromOBPricing extends BaseWsMessage
{
    public ?PnrLocatorData $pnrLocatorData = null;

    /** @var PsaList[] */
    public array $psaList = [];

    public function __construct(TicketUpdateTstFromObPricingOptions $params)
    {
        $locator = trim($params->pnrRecordLocator);
        if ($locator !== '') {
            $this->pnrLocatorData = new PnrLocatorData($locator);
        }

        foreach ($params->tstReferences as $ref) {
            $tstNumber = $ref['tstNumber'] ?? $ref['number'] ?? null;
            if ($tstNumber === null || $tstNumber === '') {
                continue;
            }
            $this->psaList[] = new PsaList((int) $tstNumber, ItemReference::REFTYPE_TST);
        }
    }
}
