<?php

declare(strict_types=1);

namespace InfobipSDK\Ott\Rcs\Resource1\Message\Template;

final class Bulk extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /ott/rcs/1/message/template/bulk [operationId: send-rcs-bulk-template-message] */
    /**
     * Send bulk RCS template message
     *
     * Used for sending bulk RCS template messages (only for Vodafone Idea Limited, India)
     *
     * @deprecated
     */
    public static function post(\InfobipSDK\DTOs\N808c7c71509cd326700719db91283dfccde220d396434fc49825c692ac7499fd\RcsBulkSendTemplateRequest $payload): \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Ott\Rcs\Resource1\Message\Template\Bulk::class)->post($payload);
    }

}
