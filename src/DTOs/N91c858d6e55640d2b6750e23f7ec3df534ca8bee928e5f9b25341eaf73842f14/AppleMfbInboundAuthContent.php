<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * AppleMfbInboundAuthContent
 */
final class AppleMfbInboundAuthContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'errorCode' => [
            'format' => 'int32',
        ],
        'requestIdentifier' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Returns information if the user has authenticated correctly.
     */
    public bool $authenticated;
    /**
     * Authentication code returned in case of a successful authentication.
     */
    public string $authenticationCode;
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Context $context;
    /**
     * Error code returned in case of a failed authentication.
     * Format: int32
     */
    public int $errorCode {
        set {
            $this->assigning('errorCode', $value);
            $this->errorCode = $value;
        }
    }
    /**
     * Request Identifier.
     */
    public string $requestIdentifier {
        set {
            $this->assigning('requestIdentifier', $value);
            $this->requestIdentifier = $value;
        }
    }
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbInboundMessageContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authenticated' => is_bool($value) ? $this->authenticated = $value : parent::assignMember($name, $value),
            'authenticationCode' => is_string($value) ? $this->authenticationCode = $value : parent::assignMember($name, $value),
            'context' => $value instanceof \stdClass ? $this->context = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Context($value) : parent::assignMember($name, $value),
            'errorCode' => is_int($value) ? $this->errorCode = $value : parent::assignMember($name, $value),
            'requestIdentifier' => is_string($value) ? $this->requestIdentifier = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbInboundMessageContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
