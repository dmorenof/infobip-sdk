<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * AppleMfbOutboundAuthRequestContent
 */
final class AppleMfbOutboundAuthRequestContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'redirectUri' => [
        'pattern' => '',
    ],
    'requestIdentifier' => [
        'pattern' => '^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$',
    ],
];

    /**
     * An array of images. Make sure sum of sizes of all images does not exceed 5 MB.
     */
    public \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundAuthRequestContent\ImagesCollection $images;
    /**
     * Object describing received message bubble presented in Messages app.
     */
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundAuthRequestContent\ReceivedMessageDTO $receivedMessage;
    /**
     * URL that OAuth provider sends auth code and state to. Must use HTTPS protocol.
     */
    public string $redirectUri {
        set {
            $this->assigning('redirectUri', $value);
            $this->redirectUri = $value;
        }
    }
    /**
     * Object describing reply message bubble presented in Messages app.
     */
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundAuthRequestContent\ReplyMessageDTO $replyMessage;
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
     * List of scopes being the subject of this authentication request.
     */
    public \InfobipSDK\Collections\StringCollection $scopes;
    /**
     * Unique identifier of this authentication request.
     */
    public string $state;
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundMessageContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'images' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->images = new \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundAuthRequestContent\ImagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Image::class)) : parent::assignMember($name, $value),
            'redirectUri' => is_string($value) ? $this->redirectUri = $value : parent::assignMember($name, $value),
            'requestIdentifier' => is_string($value) ? $this->requestIdentifier = $value : parent::assignMember($name, $value),
            'scopes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopes = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundMessageContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
