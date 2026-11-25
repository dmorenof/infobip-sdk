<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\Saas\Resource1\ByResourceType\Import;

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
