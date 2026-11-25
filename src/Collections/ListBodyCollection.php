<?php

declare(strict_types=1);

namespace InfobipSDK\Collections;

final class ListBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Requests\ListBodyRequest::class;
}
