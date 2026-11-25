<?php

declare(strict_types=1);

namespace InfobipSDK\Resource2fa\Resource2\Applications\ByAppId\Email;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /2fa/2/applications/{appId}/email/messages [operationId: create-2fa-email-message-template] */
    /**
     * Create 2FA Email message template
     *
     * Once you have your [2FA application](#channels/sms/create-2fa-application), create one or more [Email message templates](https://www.infobip.com/docs/email/templates) where your PIN will be dynamically included when you send the PIN message over Email.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function post(string $appId, ?\InfobipSDK\Requests\TemplateBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Email\Messages\Post\EmailMessagesResponse
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId\Email\Messages::class)->post($appId);
        }
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId\Email\Messages::class)->post($appId, $payload);
    }

    /** PUT /2fa/2/applications/{appId}/email/messages/{msgId} [operationId: update-2fa-email-message-template] */
    /**
     * Update 2FA Email message template
     *
     * Change configuration options for your existing 2FA application Email message template.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public static function putByMsgId(\InfobipSDK\PathParams\Resource2fa\Resource2\Applications\ByAppId\Email\Messages\ByMsgId $identifier, ?\InfobipSDK\Requests\AllOfUpdate2faEmailMessageTemplateBody\TemplateBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Email\Messages\ByMsgId\Put\MessagesByMsgIdResponse
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId\Email\Messages::class)->putByMsgId($identifier);
        }
        return self::client()->resource(\InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId\Email\Messages::class)->putByMsgId($identifier, $payload);
    }

}
