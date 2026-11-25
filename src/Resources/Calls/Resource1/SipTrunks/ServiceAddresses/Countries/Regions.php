<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Calls\Resource1\SipTrunks\ServiceAddresses\Countries;

final class Regions extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/calls/1/sip-trunks/service-addresses/countries/regions',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Collections\\Calls\\Resource1\\SipTrunks\\ServiceAddresses\\Countries\\Regions\\Get\\CountriesRegionsCollection',
    ];

    /**
     * Get regions
     *
     * Get regions with shortcodes you'd need for a SIP trunk address.
     */
    public function get(\InfobipSDK\GetParams\Calls\Resource1\SipTrunks\ServiceAddresses\Countries\Regions $params): \InfobipSDK\Collections\Calls\Resource1\SipTrunks\ServiceAddresses\Countries\Regions\Get\CountriesRegionsCollection
    {
        /** @var \InfobipSDK\Collections\Calls\Resource1\SipTrunks\ServiceAddresses\Countries\Regions\Get\CountriesRegionsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
