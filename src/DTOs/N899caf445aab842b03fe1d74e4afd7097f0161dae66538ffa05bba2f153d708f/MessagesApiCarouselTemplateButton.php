<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiCarouselTemplateButton
 *
 * List of buttons of a card.
 */
class MessagesApiCarouselTemplateButton extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiCarouselTemplateOpenUrlButton' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiCarouselTemplateOpenUrlButton',
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiCarouselTemplatePhoneNumberButton' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiCarouselTemplatePhoneNumberButton',
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiCarouselTemplateQuickReplyButton' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiCarouselTemplateQuickReplyButton',
    'OPEN_URL' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiCarouselTemplateOpenUrlButton',
    'PHONE_NUMBER' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiCarouselTemplatePhoneNumberButton',
    'QUICK_REPLY' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiCarouselTemplateQuickReplyButton',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiCarouselTemplateButtonType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiCarouselTemplateButtonType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
