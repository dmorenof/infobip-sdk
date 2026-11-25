<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * TimeSpan
 *
 *
 * Represents the time within which a message is opened after the message is delivered using time buckets.
 *
 * For example, you can filter only for messages opened within 1 second after they were delivered. The `from` bucket is inclusive, while the `to` bucket is exclusive.
 *
 */
final class TimeSpan extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\TimeBucket $from;
    public \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\TimeBucket $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => is_string($value) ? $this->from = \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\TimeBucket::from($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\TimeBucket::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
