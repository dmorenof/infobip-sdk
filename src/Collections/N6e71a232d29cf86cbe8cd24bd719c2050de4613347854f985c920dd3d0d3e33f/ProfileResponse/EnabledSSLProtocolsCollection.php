<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfileResponse;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfileResponse\EnabledSSLProtocolsEnum> */
final class EnabledSSLProtocolsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfileResponse\EnabledSSLProtocolsEnum::class;
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => true,
        'jsonSchema' => '{"enum":["TLSv1.2","TLSv1.3"]}',
    ];
}
