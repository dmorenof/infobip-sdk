<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\SipTrunks\ServiceAddresses\Countries;

final class Regions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/sip-trunks/service-addresses/countries/regions [operationId: get-regions] */
    /**
     * Get regions
     *
     * Get regions with shortcodes you'd need for a SIP trunk address.
     */
    public static function get(\InfobipSDK\GetParams\Calls\Resource1\SipTrunks\ServiceAddresses\Countries\Regions $params): \InfobipSDK\Collections\Calls\Resource1\SipTrunks\ServiceAddresses\Countries\Regions\Get\CountriesRegionsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\ServiceAddresses\Countries\Regions::class)->get($params);
    }

}
