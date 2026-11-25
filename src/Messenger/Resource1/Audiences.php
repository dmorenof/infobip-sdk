<?php

declare(strict_types=1);

namespace InfobipSDK\Messenger\Resource1;

final class Audiences extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /messenger/1/audiences [operationId: get-messenger-audiences] */
    /**
     * Get audiences
     *
     * Retrieve all custom audiences for the given ad account.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public static function get(\InfobipSDK\GetParams\Messenger\Resource1\Audiences $params): \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\GetAudiencesResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\Audiences::class)->get($params);
    }

    /** POST /messenger/1/audiences [operationId: create-messenger-audience] */
    /**
     * Create custom audience
     *
     * Create a new custom audience for marketing messages. Users can be uploaded to this audience to grow the marketing messages subscriber base.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public static function post(\InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\CreateAudienceRequest $payload): \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\CreateAudienceResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\Audiences::class)->post($payload);
    }

    /** DELETE /messenger/1/audiences/{audienceId} [operationId: delete-messenger-audience] */
    /**
     * Delete audience
     *
     * Delete a custom audience. This permanently removes the audience from Meta and stops any campaigns using it.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public static function deleteByAudienceId(string $audienceId): void
    {
        self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\Audiences::class)->deleteByAudienceId($audienceId);
    }
}
