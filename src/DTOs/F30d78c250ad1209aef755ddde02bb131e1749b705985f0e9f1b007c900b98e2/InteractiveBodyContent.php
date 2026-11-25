<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveBodyContent
 *
 * Body of a message containing one or more [interactive elements](https://www.infobip.com/docs/whatsapp/message-types-and-templates/free-form-messages#available-interactive-formats).
 */
final class InteractiveBodyContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'text',
];

    protected const array VALIDATION = [
    'text' => [
        'minLength' => 1,
        'maxLength' => 1024,
    ],
];

    /**
     * Content of the message body.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
