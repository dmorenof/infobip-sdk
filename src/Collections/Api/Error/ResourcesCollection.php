<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\Api\Error;

final class ResourcesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\DTOs\Api\ErrorResource::class;
}
