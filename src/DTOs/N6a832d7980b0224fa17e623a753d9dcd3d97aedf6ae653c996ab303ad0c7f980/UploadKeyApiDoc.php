<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980;

/**
 * UploadKeyApiDoc
 */
final class UploadKeyApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'file',
];

    /**
     * Multipart form data containing the public key file.
     *                         The file must be in PEM format with a 2048-bit RSA key
     *                  and include the appropriate header and footer lines.
     *                  Example file content: `----BEGIN PUBLIC KEY-----\n MIIBIjAN... \n ----END PUBLIC
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $file;

}
