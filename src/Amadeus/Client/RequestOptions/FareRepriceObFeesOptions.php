<?php

declare(strict_types=1);

namespace Amadeus\Client\RequestOptions;

/**
 * Fare_RepriceOBFees request options (OB-Fee-WBS §Option 4).
 */
class FareRepriceObFeesOptions extends Base
{
    public string $pnrRecordLocator = '';

    /** @var list<int|string> */
    public array $travellerRefs = [];
}
