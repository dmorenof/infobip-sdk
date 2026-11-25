<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1;

final class Domains extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/1/domains [operationId: get-all-domains] */
    /**
     * Get domains
     *
     * This API is to get all domain associated with the account. It also provides details of the retrieved domain like the DNS records, Tracking details, Active/Blocked status,etc.
     */
    public static function get(?\InfobipSDK\GetParams\Email\Resource1\Domains $params = null): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\AllDomainsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Domains::class)->get($params);
    }

    /** POST /email/1/domains [operationId: add-domain] */
    /**
     * Add domain
     *
     * This method allows you to add new domains with a limit to create a maximum of 1000 domains in a day.
     */
    public static function post(\InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\AddDomainRequest $payload): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\DomainResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Domains::class)->post($payload);
    }

    /** DELETE /email/1/domains/{domainName} [operationId: delete-domain] */
    /**
     * Delete domain
     *
     * This method allows you to delete an existing domain.
     */
    public static function deleteByDomainName(string $domainName): void
    {
        self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Domains::class)->deleteByDomainName($domainName);
    }

    /** GET /email/1/domains/{domainName} [operationId: get-domain-details] */
    /**
     * Get domain details
     *
     * This API provides with the details of the domain like the DNS records, Tracking details, Active/Blocked status,etc.
     */
    public static function getByDomainName(string $domainName): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\DomainResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Domains::class)->getByDomainName($domainName);
    }
}
