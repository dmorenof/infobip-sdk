<?php

declare(strict_types=1);

namespace InfobipSDK\Context\Resource1\Facts;

final class All extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /context/1/facts/all [operationId: delete-all-facts] */
    /**
     * Delete all fact definitions
     *
     * Deletes every fact definition belonging to the calling account.
     */
    public static function delete(): void
    {
        self::client()->resource(\InfobipSDK\Resources\Context\Resource1\Facts\All::class)->delete();
    }
}
