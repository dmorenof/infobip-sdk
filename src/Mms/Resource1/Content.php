<?php

declare(strict_types=1);

namespace InfobipSDK\Mms\Resource1;

final class Content extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /mms/1/content [operationId: upload-binary] */
    /**
     * Upload binary content
     *
     * This method allows you to upload binary content that you can reference when sending MMS messages.
     */
    public static function post(\InfobipSDK\PostParams\Mms\Resource1\Content $params): \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\UploadBinaryResult
    {
        return self::client()->resource(\InfobipSDK\Resources\Mms\Resource1\Content::class)->post($params);
    }
}
