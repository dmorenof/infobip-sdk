<?php

declare(strict_types=1);

namespace InfobipSDK\Messenger\Resource1\Audiences\ByAudienceId;

final class Users extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /messenger/1/audiences/{audienceId}/users [operationId: remove-messenger-audience-users] */
    /**
     * Remove users from audience
     *
     * Remove users from a custom audience. Accepts the same hashed user data as the upload endpoint. Maximum 10,000 users per request.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public static function delete(string $audienceId, \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\AudienceUsersRequest $payload): \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\AudienceUsersResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\Audiences\ByAudienceId\Users::class)->delete($audienceId, $payload);
    }

    /** POST /messenger/1/audiences/{audienceId}/users [operationId: upload-messenger-audience-users] */
    /**
     * Upload users to audience
     *
     * Upload hashed user data (SHA-256) to a custom audience. Meta matches this data against its user database to grow your marketing messages subscriber base. Each user can be identified by a hashed phone number, a hashed email address, or both. Maximum 10,000 users per request.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public static function post(string $audienceId, \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\AudienceUsersRequest $payload): \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\AudienceUsersResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\Audiences\ByAudienceId\Users::class)->post($audienceId, $payload);
    }
}
