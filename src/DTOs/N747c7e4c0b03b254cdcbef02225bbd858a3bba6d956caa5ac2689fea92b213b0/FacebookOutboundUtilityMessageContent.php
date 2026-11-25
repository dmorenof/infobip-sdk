<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * FacebookOutboundUtilityMessageContent
 */
final class FacebookOutboundUtilityMessageContent extends \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookOutboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'buttons' => [
        'minItems' => 0,
        'maxItems' => 3,
    ],
    'templateName' => [
        'minLength' => 0,
        'maxLength' => 199,
        'pattern' => '^[a-z0-9_]+$',
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\UtilityBodyComponent $body;
    /**
     * Template buttons, in the order the template declares them. A template can declare at most three. Buttons are rendered even when left out, so set this only to fill in a URL suffix or a payload.
     */
    public \InfobipSDK\Collections\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookOutboundUtilityMessageContent\ButtonsCollection $buttons {
        set {
            $this->assigning('buttons', $value);
            $this->buttons = $value;
        }
    }
    public \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\UtilityHeaderComponent $header;
    public \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\Language $language;
    /**
     * Name of the approved utility template, as it was created on the Page. Should only contain lower-case alphanumeric characters and underscores.
     * Example: "order_shipped"
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
            'body' => $value instanceof \stdClass ? $this->body = new \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\UtilityBodyComponent($value) : parent::assignMember($name, $value),
            'header' => $value instanceof \stdClass ? $this->header = new \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\UtilityHeaderComponent($value) : parent::assignMember($name, $value),
            'language' => $value instanceof \stdClass ? $this->language = new \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\Language($value) : parent::assignMember($name, $value),
            'templateName' => is_string($value) ? $this->templateName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
