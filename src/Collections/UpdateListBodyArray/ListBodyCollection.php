<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\UpdateListBodyArray;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\InfobipSDK\Requests\UpdateListBodyItem\ListBodyRequest> */
final class ListBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Requests\UpdateListBodyItem\ListBodyRequest::class;
}
