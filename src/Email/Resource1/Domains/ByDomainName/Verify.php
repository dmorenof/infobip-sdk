<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1\Domains\ByDomainName;

final class Verify extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /email/1/domains/{domainName}/verify [operationId: verify-domain] */
    /**
     * Verify domain
     *
     * API request to verify records(TXT, MX, DKIM) associated with the provided domain.
     */
    public static function post(string $domainName): void
    {
        self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Domains\ByDomainName\Verify::class)->post($domainName);
    }
}
