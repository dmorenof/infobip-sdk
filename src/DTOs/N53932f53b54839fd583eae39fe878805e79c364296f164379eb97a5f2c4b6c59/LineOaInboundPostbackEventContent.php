<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaInboundPostbackEventContent
 */
final class LineOaInboundPostbackEventContent extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaInboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'data' => [
        'minLength' => 1,
    ],
    'replyToken' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Postback data returned from the action.
     * Example: "action=buy&itemid=123"
     */
    public string $data {
        set {
            $this->assigning('data', $value);
            $this->data = $value;
        }
    }
    /**
     * Selected date from a DATETIMEPICKER action in DATE mode.
     * Example: "2024-01-15"
     */
    public string $paramDate;
    /**
     * Selected datetime from a DATETIMEPICKER action in DATETIME mode.
     * Example: "2024-01-15T13:30"
     */
    public string $paramDatetime;
    /**
     * Selected time from a DATETIMEPICKER action in TIME mode.
     * Example: "13:30"
     */
    public string $paramTime;
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
     * Event timestamp in milliseconds since epoch.
     * Example: 1695725535457
     * Format: int64
     */
    public int $timestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'paramDate' => is_string($value) ? $this->paramDate = $value : parent::assignMember($name, $value),
            'paramDatetime' => is_string($value) ? $this->paramDatetime = $value : parent::assignMember($name, $value),
            'paramTime' => is_string($value) ? $this->paramTime = $value : parent::assignMember($name, $value),
            'replyToken' => is_string($value) ? $this->replyToken = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
