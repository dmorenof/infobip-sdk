<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DialRecording;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingStatusEvent> */
final class CallbackEventsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingStatusEvent::class;
    protected const array COLLECTION_VALIDATION = [
        'uniqueItems' => true,
    ];
}
