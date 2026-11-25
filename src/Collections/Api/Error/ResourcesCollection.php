<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\Api\Error;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\InfobipSDK\DTOs\Api\ErrorResource> */
final class ResourcesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\DTOs\Api\ErrorResource::class;
}
