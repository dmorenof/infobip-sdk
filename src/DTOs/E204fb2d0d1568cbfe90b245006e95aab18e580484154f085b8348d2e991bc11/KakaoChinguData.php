<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * KakaoChinguData
 *
 * Kakao ChinguTalk-specific data used if the message is sent through a Kakao ChinguTalk channel.
 */
final class KakaoChinguData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'validityPeriod' => [
        'format' => 'int32',
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'buttons',
    'imageLink',
    'imageUrl',
    'isPromotional',
    'text',
    'validityPeriod',
];

    /**
     * Buttons to include in the message. Optional value. Max 5 buttons.
     */
    public \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoChinguData\ButtonsCollection $buttons;
    /**
     * Link of the image sent in the message. Optional value. Max 250 characters.
     */
    public string $imageLink;
    /**
     * URL of the image sent in the message. Optional value. Max 250 characters.
     */
    public string $imageUrl;
    /**
     * Flag that defines the message as promotional or not. Optional value.
     */
    public bool $isPromotional;
    /**
     * Text of the message that will be sent.
     */
    public string $text;
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
            'imageLink' => is_string($value) ? $this->imageLink = $value : parent::assignMember($name, $value),
            'imageUrl' => is_string($value) ? $this->imageUrl = $value : parent::assignMember($name, $value),
            'isPromotional' => is_bool($value) ? $this->isPromotional = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            'validityPeriodTimeUnit' => is_string($value) ? $this->validityPeriodTimeUnit = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\TimeUnit::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
