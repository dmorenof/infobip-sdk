<?php

declare(strict_types=1);

namespace InfobipSDK\Collections;

/** @extends \Dmorenof\SdkRuntime\TypedArray<float> */
final class FloatCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'double';
}
