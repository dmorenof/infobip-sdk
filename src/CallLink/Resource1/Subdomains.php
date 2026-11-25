<?php

declare(strict_types=1);

namespace InfobipSDK\CallLink\Resource1;

final class Subdomains extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /call-link/1/subdomains [operationId: get-subdomains] */
    /**
     * Get subdomains
     *
     * Use this method to get all subdomains.
     */
    public static function get(): \InfobipSDK\Collections\CallLink\Resource1\Subdomains\Get\Resource1SubdomainsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Subdomains::class)->get();
    }

    /** POST /call-link/1/subdomains [operationId: create-subdomain] */
    /**
     * Create subdomain
     *
     * Use this method to add a new call link subdomain. Maximum number of domains is 3. Cannot contain ".".
     */
    public static function post(\InfobipSDK\DTOs\Febbeec59369f28c0a6e3ddd1a2666aea9869953e0893914d340d35c6901410c\SubdomainRequest $payload): \InfobipSDK\DTOs\Febbeec59369f28c0a6e3ddd1a2666aea9869953e0893914d340d35c6901410c\Subdomain
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Subdomains::class)->post($payload);
    }

    /** DELETE /call-link/1/subdomains/{id} [operationId: delete-subdomain] */
    /**
     * Delete subdomain
     *
     * Use this method to delete a subdomain by its ID.
     */
    public static function deleteById(string $id): \InfobipSDK\DTOs\Febbeec59369f28c0a6e3ddd1a2666aea9869953e0893914d340d35c6901410c\Subdomain
    {
        return self::client()->resource(\InfobipSDK\Resources\CallLink\Resource1\Subdomains::class)->deleteById($id);
    }
}
