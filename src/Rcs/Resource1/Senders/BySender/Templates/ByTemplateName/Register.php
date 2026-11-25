<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName;

final class Register extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PATCH /rcs/1/senders/{sender}/templates/{templateName}/register [operationId: rcs-template-register] */
    /**
     * Register an RCS template
     *
     * Registers an RCS template with additional providers. Available only for senders that support templates.
     */
    public static function patch(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName\Register $identifier, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsRegisterTemplateRequest $payload): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTemplate
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySender\Templates\ByTemplateName\Register::class)->patch($identifier, $payload);
    }

}
