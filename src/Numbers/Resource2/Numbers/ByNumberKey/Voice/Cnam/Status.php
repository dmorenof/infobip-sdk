<?php

declare(strict_types=1);

namespace InfobipSDK\Numbers\Resource2\Numbers\ByNumberKey\Voice\Cnam;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /numbers/2/numbers/{numberKey}/voice/cnam/status [operationId: get-cnam-status] */
    /**
     * Get CNAM status
     *
     * Get a CNAM configuration status.
     */
    public static function get(string $numberKey): \InfobipSDK\DTOs\Bc185b494ef7059aff9d68589cd5338df2245f21add51cf1a96e9927af6e30d7\PublicCnamStatus
    {
        return self::client()->resource(\InfobipSDK\Resources\Numbers\Resource2\Numbers\ByNumberKey\Voice\Cnam\Status::class)->get($numberKey);
    }

}
