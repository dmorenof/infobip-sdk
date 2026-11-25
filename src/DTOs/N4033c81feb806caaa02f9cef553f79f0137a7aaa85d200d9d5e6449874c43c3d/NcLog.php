<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4033c81feb806caaa02f9cef553f79f0137a7aaa85d200d9d5e6449874c43c3d;

/**
 * NcLog
 *
 * Collection of logs.
 */
final class NcLog extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID that uniquely identifies the request.
     */
    public string $bulkId;
    /**
     * Tells when Infobip finished processing the lookup (e.g. lookup request was delivered to the destination network). Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $doneAt;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcError $error;
    /**
     * Mobile country and network codes.
     */
    public string $mccMnc;
    /**
     * The ID that uniquely identifies the performed lookup.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcLogPrice $price;
    /**
     * Tells when the lookup was performed. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $sentAt;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcStatus $status;
    /**
     * The looked up phone number.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'doneAt' => is_string($value) ? $this->doneAt = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcError($value) : parent::assignMember($name, $value),
            'mccMnc' => is_string($value) ? $this->mccMnc = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcLogPrice($value) : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcStatus($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
