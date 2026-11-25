<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * LineData
 *
 * Line-specific data used if the message is sent through a Line channel.
 */
final class LineData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'validityPeriod' => [
        'format' => 'int32',
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'duration',
    'packageId',
    'stickerId',
    'text',
    'thumbnailUrl',
    'url',
    'validityPeriod',
];

    public string $altText;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\FlexContainer $contents;
    /**
     * Duration of the audio file.
     * Format: int64
     */
    public int $duration;
    /**
     * Package id of sticker that will be sent.
     */
    public string $packageId;
    /**
     * Sticker id that will be sent.
     */
    public string $stickerId;
    /**
     * Text of the message that will be sent.
     */
    public string $text;
    /**
     * Thumbnail of the image sent in the Line message. Max 1000 characters.
     */
    public string $thumbnailUrl;
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\LineDataType $type;
    /**
     * Url of the image sent in the Line message. Max 1000 characters.
     */
    public string $url;
    /**
     * The message validity period. Unless specified differently in validityPeriodTimeUnit, it is expressed in minutes. When the period expires, the message will be automatically sent using the next OMNI step. Validity period longer than 48h is not supported (in this case, it will be automatically set to 48h). Additionally, period should be longer than 30 seconds.
     * Format: int32
     */
    public int $validityPeriod {
        set {
            $this->assigning('validityPeriod', $value);
            $this->validityPeriod = $value;
        }
    }
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\TimeUnit $validityPeriodTimeUnit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'altText' => is_string($value) ? $this->altText = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'packageId' => is_string($value) ? $this->packageId = $value : parent::assignMember($name, $value),
            'stickerId' => is_string($value) ? $this->stickerId = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'thumbnailUrl' => is_string($value) ? $this->thumbnailUrl = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\LineDataType::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            'validityPeriodTimeUnit' => is_string($value) ? $this->validityPeriodTimeUnit = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\TimeUnit::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
