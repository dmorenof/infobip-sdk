<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * RegisteredSipTrunkRequest
 */
final class RegisteredSipTrunkRequest extends \InfobipSDK\DTOs\N6423f137d264daaaab4ca521d6dfeb19cab29b6b25c3d2da0c1c3fb475a5e829\SipTrunkRequest
{
    public const array REQUIRED_FIELDS = [
        'billingPackage',
        'channelLimit',
        'name',
    ];

    protected const array VALIDATION = [
        'channelLimit' => [
            'maximum' => 1000,
            'format' => 'int32',
        ],
        'name' => [
            'minLength' => 0,
            'maxLength' => 128,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\AnonymizationType $anonymization;
    /**
     * List of audio codecs supported by a SIP trunk.
     */
    public \InfobipSDK\Collections\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\AuthenticatedSipTrunkRequest\CodecsCollection $codecs;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DtmfType $dtmf;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\FaxType $fax;
    /**
     * Enables an authentication challenge for each call.
     */
    public bool $inviteAuthentication;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\NumberPresentationFormat $numberFormat;
    /**
     * Indicates whether communication is secured by the TLS protocol.
     */
    public bool $tls;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'anonymization' => is_string($value) ? $this->anonymization = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\AnonymizationType::from($value) : parent::assignMember($name, $value),
            'dtmf' => is_string($value) ? $this->dtmf = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DtmfType::from($value) : parent::assignMember($name, $value),
            'fax' => is_string($value) ? $this->fax = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\FaxType::from($value) : parent::assignMember($name, $value),
            'inviteAuthentication' => is_bool($value) ? $this->inviteAuthentication = $value : parent::assignMember($name, $value),
            'numberFormat' => is_string($value) ? $this->numberFormat = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\NumberPresentationFormat::from($value) : parent::assignMember($name, $value),
            'tls' => is_bool($value) ? $this->tls = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
