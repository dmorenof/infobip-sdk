<?php

declare(strict_types=1);

namespace InfobipSDK\Collections;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\InfobipSDK\Requests\EventsBodyRequest> */
final class EventsBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Requests\EventsBodyRequest::class;
}
