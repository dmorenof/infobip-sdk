<?php

declare(strict_types=1);

namespace InfobipSDK\Ott\Rcs\Resource1\Message;

final class Template extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ott/rcs/1/message/template [operationId: send-rcs-template-message] */
    /**
     * Send RCS template message
     *
     * Used for sending single RCS template messages (only for Vodafone Idea Limited, India)
     *
     * @deprecated
     */
    public static function post(\InfobipSDK\DTOs\A09fd2f38320e8e77c07ff55b0f3c0f934582962897bb3b86f1a032582a1cc60\RcsSendTemplateRequest $payload): \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ott\Rcs\Resource1\Message\Template::class)->post($payload);
    }
}
