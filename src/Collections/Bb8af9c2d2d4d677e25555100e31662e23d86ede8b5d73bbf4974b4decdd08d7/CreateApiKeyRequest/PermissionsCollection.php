<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\CreateApiKeyRequest;

final class PermissionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Enums\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\CreateApiKeyRequest\PermissionsEnum::class;
    protected const array COLLECTION_VALIDATION = [
        'jsonSchema' => '{"enum":["2FA_CLIENT","PUBLIC_API","WEB_SDK"]}',
    ];
}
