<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaInboundThingsEventContent
 */
final class LineOaInboundThingsEventContent extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaInboundContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'deviceId' => [
            'minLength' => 1,
        ],
        'replyToken' => [
            'minLength' => 1,
        ],
        'revision' => [
            'format' => 'int32',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Action results from the Things scenario, when provided.
     */
    public \InfobipSDK\Collections\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaInboundThingsEventContent\ActionResultsCollection $actionResults;
    /**
     * BLE notification payload, when provided.
     */
    public string $bleNotificationPayload;
    /**
     * Device ID related to the Things event.
     * Example: "t2a0Ixxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"
     */
    public string $deviceId {
        set {
            $this->assigning('deviceId', $value);
            $this->deviceId = $value;
        }
    }
    /**
     * Scenario end time in milliseconds since epoch, when provided.
     * Format: int64
     */
    public int $endTime;
    /**
     * Error reason, when provided.
     */
    public string $errorReason;
    /**
     * Reply token for this event. Send it back as replyToken within one minute to have your next message delivered free of charge. Single-use.
     * Example: "nHuyWiB7yP5Zw52FIkcQobQuGDXCTA"
     */
    public string $replyToken {
        set {
            $this->assigning('replyToken', $value);
            $this->replyToken = $value;
        }
    }
    /**
     * Scenario result code, when provided.
     */
    public string $resultCode;
    /**
     * Scenario revision, when provided.
     * Format: int32
     */
    public int $revision {
        set {
            $this->assigning('revision', $value);
            $this->revision = $value;
        }
    }
    /**
     * Scenario ID, when provided.
     */
    public string $scenarioId;
    /**
     * Scenario start time in milliseconds since epoch, when provided.
     * Format: int64
     */
    public int $startTime;
    /**
     * Event timestamp in milliseconds since epoch.
     * Example: 1695725535457
     * Format: int64
     */
    public int $timestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionResults' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->actionResults = new \InfobipSDK\Collections\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaInboundThingsEventContent\ActionResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ActionResult::class)) : parent::assignMember($name, $value),
            'bleNotificationPayload' => is_string($value) ? $this->bleNotificationPayload = $value : parent::assignMember($name, $value),
            'deviceId' => is_string($value) ? $this->deviceId = $value : parent::assignMember($name, $value),
            'endTime' => is_int($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'errorReason' => is_string($value) ? $this->errorReason = $value : parent::assignMember($name, $value),
            'replyToken' => is_string($value) ? $this->replyToken = $value : parent::assignMember($name, $value),
            'resultCode' => is_string($value) ? $this->resultCode = $value : parent::assignMember($name, $value),
            'revision' => is_int($value) ? $this->revision = $value : parent::assignMember($name, $value),
            'scenarioId' => is_string($value) ? $this->scenarioId = $value : parent::assignMember($name, $value),
            'startTime' => is_int($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
