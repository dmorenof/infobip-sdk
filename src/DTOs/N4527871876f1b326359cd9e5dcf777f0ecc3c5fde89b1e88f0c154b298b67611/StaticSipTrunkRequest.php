<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * StaticSipTrunkRequest
 */
final class StaticSipTrunkRequest extends \InfobipSDK\DTOs\N6423f137d264daaaab4ca521d6dfeb19cab29b6b25c3d2da0c1c3fb475a5e829\SipTrunkRequest
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
    /**
     * List of SIP trunk destination hosts. If empty, source host list must not be empty. Destination hosts can be sent in 3 formats: IP address with port, domain name with port or domain name without port. The port must fall in the range 1025-65535 or be 0 for SRV lookup.
     */
    public \InfobipSDK\Collections\StringCollection $destinationHosts;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DtmfType $dtmf;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\FaxType $fax;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\NumberPresentationFormat $numberFormat;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipOptions $sipOptions;
    /**
     * List of SIP trunk source hosts. If empty, destination host list must not be empty. Source hosts can be sent in 2 formats: IP address without port or domain without port.
     */
    public \InfobipSDK\Collections\StringCollection $sourceHosts;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SelectionStrategy $strategy;
    /**
     * Indicates whether communication is secured by the TLS protocol.
     */
    public bool $tls;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'anonymization' => is_string($value) ? $this->anonymization = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\AnonymizationType::from($value) : parent::assignMember($name, $value),
            'destinationHosts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->destinationHosts = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'dtmf' => is_string($value) ? $this->dtmf = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DtmfType::from($value) : parent::assignMember($name, $value),
            'fax' => is_string($value) ? $this->fax = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\FaxType::from($value) : parent::assignMember($name, $value),
            'numberFormat' => is_string($value) ? $this->numberFormat = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\NumberPresentationFormat::from($value) : parent::assignMember($name, $value),
            'sipOptions' => $value instanceof \stdClass ? $this->sipOptions = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipOptions($value) : parent::assignMember($name, $value),
            'sourceHosts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->sourceHosts = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'strategy' => is_string($value) ? $this->strategy = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SelectionStrategy::from($value) : parent::assignMember($name, $value),
            'tls' => is_bool($value) ? $this->tls = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
