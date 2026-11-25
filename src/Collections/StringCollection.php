<?php

declare(strict_types=1);

namespace InfobipSDK\Collections;

/** @extends \Dmorenof\SdkRuntime\TypedArray<string> */
final class StringCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
}
