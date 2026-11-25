<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * OmniLog
 *
 * Collection of logs.
 */
final class OmniLog extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'messageCount' => [
            'format' => 'int32',
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'bulkId',
        'doneAt',
        'from',
        'mccMnc',
        'messageCount',
        'messageId',
        'sentAt',
        'text',
        'to',
    ];

    /**
     * The ID that uniquely identifies the request.
     */
    public string $bulkId;
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\OmniChannel $channel;
    /**
     * Tells when the message was finished processing by Infobip (ie. delivered to destination, delivered to destination network, etc.)
     * Format: date-time
     */
    public string $doneAt;
    /**
     * Sender ID that can be alphanumeric or numeric.
     */
    public string $from;
    /**
     * Mobile country and network codes.
     */
    public string $mccMnc;
    /**
     * The number of sent message segments.
     * Format: int32
     */
    public int $messageCount {
        set {
            $this->assigning('messageCount', $value);
            $this->messageCount = $value;
        }
    }
    /**
     * The ID that uniquely identifies the message sent.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Price $price;
    /**
     * Tells when the message was sent. It has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $sentAt;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Status $status;
    /**
     * Text of the message that was sent.
     */
    public string $text;
    /**
     * The message destination address.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\OmniChannel::from($value) : parent::assignMember($name, $value),
            'doneAt' => is_string($value) ? $this->doneAt = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'mccMnc' => is_string($value) ? $this->mccMnc = $value : parent::assignMember($name, $value),
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Price($value) : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Status($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
