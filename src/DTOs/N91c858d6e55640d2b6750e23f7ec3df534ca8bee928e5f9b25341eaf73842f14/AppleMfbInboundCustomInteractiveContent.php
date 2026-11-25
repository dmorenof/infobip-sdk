<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * AppleMfbInboundCustomInteractiveContent
 */
final class AppleMfbInboundCustomInteractiveContent extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Attachments list.
     */
    public \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbInboundCustomInteractiveContent\AttachmentsCollection $attachments;
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Context $context;
    /**
     * Session identifier.
     */
    public string $sessionIdentifier;
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbInboundMessageContentType $type;
    /**
     * List of parameters.
     */
    public \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbInboundCustomInteractiveContent\UrlDataCollection $urlData;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attachments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->attachments = new \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbInboundCustomInteractiveContent\AttachmentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Attachment::class)) : parent::assignMember($name, $value),
            'context' => $value instanceof \stdClass ? $this->context = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Context($value) : parent::assignMember($name, $value),
            'sessionIdentifier' => is_string($value) ? $this->sessionIdentifier = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbInboundMessageContentType::from($value) : parent::assignMember($name, $value),
            'urlData' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->urlData = new \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbInboundCustomInteractiveContent\UrlDataCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Parameter::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
