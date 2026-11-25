<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\UpdateListBodyArray;

final class ListBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Requests\UpdateListBodyItem\ListBodyRequest::class;
}
