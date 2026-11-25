<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\ReplaceListBodyArray;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\InfobipSDK\Requests\ReplaceListBodyItem\ListBodyRequest> */
final class ListBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Requests\ReplaceListBodyItem\ListBodyRequest::class;
}
