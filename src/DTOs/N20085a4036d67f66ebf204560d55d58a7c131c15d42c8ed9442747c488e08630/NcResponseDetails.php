<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * NcResponseDetails
 *
 * Collection of lookup results.
 */
final class NcResponseDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
        'imsi',
        'mccMnc',
        'ported',
        'roaming',
        'servingMSC',
        'to',
    ];

    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcError $error;
    /**
     * International Mobile Subscriber Identity, used to uniquely identify the user of a mobile network.
     */
    public string $imsi;
    /**
     * Mobile country code and mobile network code concatenated. MccMnc will start with the MCC, and it will always have three digits, followed by the MNC (length of the MNC depends on the value of the MCC, and it can be two or three).
     */
    public string $mccMnc;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Network $originalNetwork;
    /**
     * True if number has been ported.
     */
    public bool $ported;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Network $portedNetwork;
    /**
     * True if number is currently in roaming.
     */
    public bool $roaming;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Network $roamingNetwork;
    /**
     * Serving mobile switching center.
     */
    public string $servingMSC;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcStatus $status;
    /**
     * The looked up phone number.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcError($value) : parent::assignMember($name, $value),
            'imsi' => is_string($value) ? $this->imsi = $value : parent::assignMember($name, $value),
            'mccMnc' => is_string($value) ? $this->mccMnc = $value : parent::assignMember($name, $value),
            'originalNetwork' => $value instanceof \stdClass ? $this->originalNetwork = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Network($value) : parent::assignMember($name, $value),
            'ported' => is_bool($value) ? $this->ported = $value : parent::assignMember($name, $value),
            'portedNetwork' => $value instanceof \stdClass ? $this->portedNetwork = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Network($value) : parent::assignMember($name, $value),
            'roaming' => is_bool($value) ? $this->roaming = $value : parent::assignMember($name, $value),
            'roamingNetwork' => $value instanceof \stdClass ? $this->roamingNetwork = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Network($value) : parent::assignMember($name, $value),
            'servingMSC' => is_string($value) ? $this->servingMSC = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\NcStatus($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
