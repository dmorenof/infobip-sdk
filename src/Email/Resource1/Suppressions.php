<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1;

final class Suppressions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /email/1/suppressions [operationId: delete-suppressions] */
    /**
     * Delete suppressions
     *
     * This method allows you to delete email addresses from the suppression list. It accepts delete suppression requests and asynchronously deletes them.
     */
    public static function delete(\InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\DeleteSuppressionRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Suppressions::class)->delete($payload);
    }

    /** GET /email/1/suppressions [operationId: get-suppressions] */
    /**
     * Get suppressions
     *
     * This method retrieves the suppressions for domains that are owned or have permissions granted.
     */
    public static function get(\InfobipSDK\GetParams\Email\Resource1\Suppressions $params): \InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\SuppressionInfoPageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Suppressions::class)->get($params);
    }

    /** POST /email/1/suppressions [operationId: add-suppressions] */
    /**
     * Add suppressions
     *
     * This method allows you to add email addresses to the suppression list. It accepts suppression requests, saves them asynchronously, and automatically ignores any duplicate entries.
     */
    public static function post(\InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\AddSuppressionRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Suppressions::class)->post($payload);
    }

}
