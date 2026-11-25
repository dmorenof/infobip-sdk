<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /rcs/1/senders/{sender}/templates/{templateName}/status [operationId: rcs-template-get-status] */
    /**
     * Get RCS template status
     *
     * Retrieve the detailed status of a specified RCS template for a given sender. Available only for senders that support templates.
     */
    public static function get(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName\Status $identifier): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplateApiDetailedStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName\Status::class)->get($identifier);
    }
}
