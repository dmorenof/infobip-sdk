<?php

declare(strict_types=1);

namespace InfobipSDK\Collections\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessagePgPayuPaymentConfiguration;

/** @extends \Dmorenof\SdkRuntime\TypedArray<string> */
final class CallbackDataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
    protected const array ITEM_VALIDATION = [
        'minLength' => 1,
        'maxLength' => 255,
    ];
}
