<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\Voice\Ivr\Resource1\Uploads;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'file',
    ];

    /**
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $file;
}
