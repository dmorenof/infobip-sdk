<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * BulkItem
 *
 * Bulk item list.
 */
final class BulkItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'callRequests',
];

    protected const array VALIDATION = [
    'connectTimeout' => [
        'maximum' => 60,
        'format' => 'int32',
    ],
    'maxDuration' => [
        'format' => 'int32',
    ],
    'validityPeriod' => [
        'format' => 'int32',
    ],
];

    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallRate $callRate;
    /**
     * Call request list.
     */
    public \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkItem\CallRequestsCollection $callRequests;
    /**
     * Time to wait, in seconds, before the called party answers the call. Once exceeded, the call terminates automatically.
     * Format: int32
     */
    public int $connectTimeout {
        set {
            $this->assigning('connectTimeout', $value);
            $this->connectTimeout = $value;
        }
    }
    /**
     * Client-defined, bulk-level custom data.
     */
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkItem\CustomDataMap $customData;
    /**
     * Caller identifier. Must be a number in the [E.164](https://en.wikipedia.org/wiki/E.164) format.
     */
    public string $from;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineDetectionRequest $machineDetection;
    /**
     * Maximum call duration in seconds. Once exceeded, the call terminates automatically.
     * Format: int32
     */
    public int $maxDuration {
        set {
            $this->assigning('maxDuration', $value);
            $this->maxDuration = $value;
        }
    }
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallRecordingRequest $recording;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RetryOptions $retryOptions;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SchedulingOptions $schedulingOptions;
    /**
     * The call validity period in minutes. Once expired, the call is not established.
     * Format: int32
     */
    public int $validityPeriod {
        set {
            $this->assigning('validityPeriod', $value);
            $this->validityPeriod = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callRate' => $value instanceof \stdClass ? $this->callRate = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallRate($value) : parent::assignMember($name, $value),
            'callRequests' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->callRequests = new \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkItem\CallRequestsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkCallRequest::class)) : parent::assignMember($name, $value),
            'connectTimeout' => is_int($value) ? $this->connectTimeout = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'machineDetection' => $value instanceof \stdClass ? $this->machineDetection = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineDetectionRequest($value) : parent::assignMember($name, $value),
            'maxDuration' => is_int($value) ? $this->maxDuration = $value : parent::assignMember($name, $value),
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallRecordingRequest($value) : parent::assignMember($name, $value),
            'retryOptions' => $value instanceof \stdClass ? $this->retryOptions = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RetryOptions($value) : parent::assignMember($name, $value),
            'schedulingOptions' => $value instanceof \stdClass ? $this->schedulingOptions = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SchedulingOptions($value) : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
