<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f;

/**
 * CreateStaticSipTrunkResponse
 */
final class CreateStaticSipTrunkResponse extends \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\CreateSipTrunkResponse
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'channelLimit' => [
        'format' => 'int32',
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
     * List of destination hosts.
     */
    public \InfobipSDK\Collections\StringCollection $destinationHosts;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DtmfType $dtmf;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\FaxType $fax;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\NumberPresentationFormat $numberFormat;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipOptions $sipOptions;
    /**
     * List of source hosts.
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
