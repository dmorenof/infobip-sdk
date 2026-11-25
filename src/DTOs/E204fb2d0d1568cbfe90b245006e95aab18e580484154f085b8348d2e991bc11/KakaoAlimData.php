<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * KakaoAlimData
 *
 * Kakao AlimTalk-specific data used if the message is sent through a Kakao AlimTalk channel.
 */
final class KakaoAlimData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'validityPeriod' => [
        'format' => 'int32',
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'buttons',
    'groupKey',
    'templateCode',
    'text',
    'title',
    'validityPeriod',
];

    /**
     * Buttons to include in the message. Optional value. Max 5 buttons.
     */
    public \InfobipSDK\Collections\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoAlimData\ButtonsCollection $buttons;
    /**
     * Group key of the profile. Required if the template was created using it.
     */
    public string $groupKey;
    /**
     * Code of the template. Max 30 characters.
     */
    public string $templateCode;
    /**
     * Text of the message.
     */
    public string $text;
    /**
     * Title of the message.
     */
    public string $title;
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
            'groupKey' => is_string($value) ? $this->groupKey = $value : parent::assignMember($name, $value),
            'templateCode' => is_string($value) ? $this->templateCode = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            'validityPeriodTimeUnit' => is_string($value) ? $this->validityPeriodTimeUnit = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\TimeUnit::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
