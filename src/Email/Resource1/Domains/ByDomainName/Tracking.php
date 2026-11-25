<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1\Domains\ByDomainName;

final class Tracking extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PUT /email/1/domains/{domainName}/tracking [operationId: update-tracking-events] */
    /**
     * Update domain tracking events
     *
     * API to update tracking events for the provided domain. Tracking events can be updated only for CLICKS, OPENS and UNSUBSCRIBES.
     */
    public static function put(string $domainName, \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\TrackingEventRequest $payload): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\DomainResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Domains\ByDomainName\Tracking::class)->put($domainName, $payload);
    }

}
