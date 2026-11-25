<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\CallLink\Resource1\Images\Upload\ByType;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'file',
];

    /**
     * Multipart file data of an image. Max file size of LOGO type is 1MB with max resolution of 100x100. Max file size of BACKGROUND type is 10MB with max resolution of 2000x2000. Acceptable file formats are: .jpeg, .jpg and .png.
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $file;

}
