<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource1;

final class CoverageLookup extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /resources/1/coverage-lookup [operationId: lookup-resource-coverage] */
    /**
     * Lookup coverage for a resource
     *
     * Look up the coverage for a single resource by specifying the resource type, identifier (such as sender name or phone number), and associated country code.<br/>
     *
     */
    public static function post(\InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceCoverageKey $payload): \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\OneOfIbResourceCoverageInfo
    {
        return self::client()->resource(\InfobipSDK\Resources\Resources\Resource1\CoverageLookup::class)->post($payload);
    }
}
