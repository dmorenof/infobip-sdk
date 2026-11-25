<?php

declare(strict_types=1);

namespace InfobipSDK\Collections;

final class EventsBodyCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Requests\EventsBodyRequest::class;
}
