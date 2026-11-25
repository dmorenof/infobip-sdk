<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1;

final class Content extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /email/1/content [operationId: upload-binary-content] */
    /**
     * Upload binary content
     *
     * This method allows you to upload binary content that you can reference when sending Email messages.
     */
    public static function post(\InfobipSDK\PostParams\Email\Resource1\Content $params): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\UploadBinaryResult
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Content::class)->post($params);
    }
}
