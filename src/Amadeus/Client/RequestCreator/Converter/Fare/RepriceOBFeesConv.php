<?php

declare(strict_types=1);

namespace Amadeus\Client\RequestCreator\Converter\Fare;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\FareRepriceObFeesOptions;
use Amadeus\Client\Struct;

class RepriceOBFeesConv extends BaseConverter
{
    /**
     * @param FareRepriceObFeesOptions $requestOptions
     * @param int|string $version
     */
    public function convert($requestOptions, $version)
    {
        return new Struct\Fare\RepriceOBFees($requestOptions);
    }
}
