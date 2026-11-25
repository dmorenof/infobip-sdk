<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\Zalo\Resource1\Sender\BySender\Media;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'file',
    ];

    /**
     * Image file to upload. Supported formats: JPG and PNG.
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $file;
}
