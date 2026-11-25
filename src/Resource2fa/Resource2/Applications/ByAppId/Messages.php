<?php

declare(strict_types=1);

namespace InfobipSDK\Resource2fa\Resource2\Applications\ByAppId;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /2fa/2/applications/{appId}/messages [operationId: get-2fa-message-templates] */
    /**
     * Get all 2FA message templates
     *
     * List all message templates in a 2FA application.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function get(string $appId): \InfobipSDK\Collections\Resource2fa\Resource2\Applications\ByAppId\Messages\Get\ByAppIdMessagesCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId\Messages::class)->get($appId);
    }

    /** POST /2fa/2/applications/{appId}/messages [operationId: create-2fa-message-template] */
    /**
     * Create 2FA SMS or Voice message template
     *
     * Once you have your [2FA application](#channels/sms/2fa/2fa-configuration/create-2fa-application), create one or more [message templates](#channels/sms/2fa/2fa-configuration/create-2fa-message-template) where your PIN will be dynamically included when you send the PIN message over SMS or Voice.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function post(string $appId, ?\InfobipSDK\Requests\AllOfCreate2faMessageTemplateBody\TemplateBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Messages\Post\ByAppIdMessagesResponse
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId\Messages::class)->post($appId);
        }
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId\Messages::class)->post($appId, $payload);
    }

    /** GET /2fa/2/applications/{appId}/messages/{msgId} [operationId: get-2fa-message-template] */
    /**
     * Get 2FA message template
     *
     * Get a single 2FA message template from an application to see its configuration details.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function getByMsgId(\InfobipSDK\PathParams\Resource2fa\Resource2\Applications\ByAppId\Messages\ByMsgId $identifier): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Messages\ByMsgId\Get\MessagesByMsgIdResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId\Messages::class)->getByMsgId($identifier);
    }

    /** PUT /2fa/2/applications/{appId}/messages/{msgId} [operationId: update-2fa-message-template] */
    /**
     * Update 2FA SMS or Voice message template
     *
     * Change configuration options for your existing 2FA application SMS or Voice message template.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function putByMsgId(\InfobipSDK\PathParams\Resource2fa\Resource2\Applications\ByAppId\Messages\ByMsgId $identifier, ?\InfobipSDK\Requests\AllOfUpdate2faMessageTemplateBody\TemplateBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Messages\ByMsgId\Put\MessagesByMsgIdResponse
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId\Messages::class)->putByMsgId($identifier);
        }
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId\Messages::class)->putByMsgId($identifier, $payload);
    }
}
