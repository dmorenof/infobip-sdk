<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiTemplate
 *
 * Details of the template.
 */
final class MessagesApiTemplate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'templateName',
];

    protected const array VALIDATION = [
    'templateName' => [
        'minLength' => 1,
    ],
];

    /**
     * Key associated with a group of templates. Used only in KAKAO_ALIM channel for templates registered under a group.
     */
    public string $groupKey;
    /**
     * Language of the template.
     */
    public string $language;
    /**
     * Reference field (used only in Apple) to provide context of what the message is for (e.g. order number, case identifier, etc).
     */
    public string $referenceId;
    /**
     * Template name or identifier which given channel uses to send a template message.
     */
    public string $templateName {
        set {
            $this->assigning('templateName', $value);
            $this->templateName = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'groupKey' => is_string($value) ? $this->groupKey = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'referenceId' => is_string($value) ? $this->referenceId = $value : parent::assignMember($name, $value),
            'templateName' => is_string($value) ? $this->templateName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
