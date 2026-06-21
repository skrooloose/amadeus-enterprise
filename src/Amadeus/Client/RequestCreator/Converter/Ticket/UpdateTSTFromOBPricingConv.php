<?php

declare(strict_types=1);

namespace Amadeus\Client\RequestCreator\Converter\Ticket;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\TicketUpdateTstFromObPricingOptions;
use Amadeus\Client\Struct;

class UpdateTSTFromOBPricingConv extends BaseConverter
{
    /**
     * @param TicketUpdateTstFromObPricingOptions $requestOptions
     * @param int|string $version
     */
    public function convert($requestOptions, $version)
    {
        return new Struct\Ticket\UpdateTSTFromOBPricing($requestOptions);
    }
}
