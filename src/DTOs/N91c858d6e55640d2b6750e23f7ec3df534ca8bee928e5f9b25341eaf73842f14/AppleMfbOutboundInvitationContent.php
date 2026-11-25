<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * AppleMfbOutboundInvitationContent
 */
final class AppleMfbOutboundInvitationContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'referenceId' => [
        'minLength' => 0,
        'maxLength' => 1000,
        'pattern' => '^[^"\']*$',
    ],
    'requestIdentifier' => [
        'pattern' => '^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$',
    ],
];

    /**
     * Indicates the language used in the message (eg. `en-US`). If locale is not specified, default language will be used.
     */
    public string $locale;
    /**
     * Template placeholders. All the required placeholders must be provided and can't be null. Otherwise, the validation will fail and the message will be rejected by Apple.
     */
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundInvitationContent\PlaceholdersMap $placeholders;
    /**
     * Reference field to provide context of what the Invitation message is for (eg. order number, case identifier, etc). Should not contain quotation marks or apostrophe characters.
     */
    public string $referenceId {
        set {
            $this->assigning('referenceId', $value);
            $this->referenceId = $value;
        }
    }
    /**
     * Identifier of the request. Must strictly follow the UUID standard (RFC 4122). Generated automatically if empty.
     */
    public string $requestIdentifier {
        set {
            $this->assigning('requestIdentifier', $value);
            $this->requestIdentifier = $value;
        }
    }
    /**
     * Identifier of the template that should be used in the Invitation message. Possible values are defined by Apple.
     */
    public string $templateId;
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundMessageContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'locale' => is_string($value) ? $this->locale = $value : parent::assignMember($name, $value),
            'referenceId' => is_string($value) ? $this->referenceId = $value : parent::assignMember($name, $value),
            'requestIdentifier' => is_string($value) ? $this->requestIdentifier = $value : parent::assignMember($name, $value),
            'templateId' => is_string($value) ? $this->templateId = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundMessageContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
