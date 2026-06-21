<?php

declare(strict_types=1);

namespace Amadeus\Client\RequestOptions;

/**
 * Ticket_UpdateTSTFromOBPricing request options (OB-Fee-WBS §Option 4).
 */
class TicketUpdateTstFromObPricingOptions extends Base
{
    public string $pnrRecordLocator = '';

    /** @var list<array<string, mixed>> */
    public array $tstReferences = [];
}
