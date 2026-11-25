<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\SipTrunks\ServiceAddresses;

final class Countries extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/sip-trunks/service-addresses/countries [operationId: get-countries] */
    /**
     * Get countries
     *
     * Get countries with shortcodes you'd need for a SIP trunk address.
     */
    public static function get(): \InfobipSDK\Collections\Calls\Resource1\SipTrunks\ServiceAddresses\Countries\Get\ServiceAddressesCountriesCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\SipTrunks\ServiceAddresses\Countries::class)->get();
    }
}
