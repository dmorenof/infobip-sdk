<?php

declare(strict_types=1);

namespace InfobipSDK\Voice\Masking\Resource2;

final class Credentials extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /voice/masking/2/credentials [operationId: delete-number-masking-credentials] */
    /**
     * Delete number masking credentials
     *
     * This method allows you to delete Voice number masking credentials.
     */
    public static function delete(): void
    {
        self::client()->resource(\InfobipSDK\Resources\Voice\Masking\Resource2\Credentials::class)->delete();
    }

    /** GET /voice/masking/2/credentials [operationId: get-number-masking-credentials] */
    /**
     * Get number masking credentials
     *
     * This method allows you to get Voice number masking credentials.
     */
    public static function get(): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\CredentialsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Masking\Resource2\Credentials::class)->get();
    }

    /** POST /voice/masking/2/credentials [operationId: create-number-masking-credentials] */
    /**
     * Create number masking credentials
     *
     * This method allows you to create Voice number masking credentials.
     */
    public static function post(\InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\CredentialsBody $payload): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\CredentialsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Masking\Resource2\Credentials::class)->post($payload);
    }

    /** PUT /voice/masking/2/credentials [operationId: update-number-masking-credentials] */
    /**
     * Update number masking credentials
     *
     * This method allows you to update Voice number masking credentials.
     */
    public static function put(\InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\CredentialsBody $payload): \InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c\CredentialsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Masking\Resource2\Credentials::class)->put($payload);
    }

}
