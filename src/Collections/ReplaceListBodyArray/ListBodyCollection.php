<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\ReplaceListBodyArray;

final class ListBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Requests\ReplaceListBodyItem\ListBodyRequest::class;
}
