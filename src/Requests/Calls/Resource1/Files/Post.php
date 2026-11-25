<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\Calls\Resource1\Files;

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
