<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageOptions
 *
 * Message options.
 */
final class MessagesApiMessageOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'correlationData' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    /**
     * If channel does not fully support message to be sent, we will try to map it as best effort. This is default behavior, even if this option is not specified.
     */
    public bool $adaptationMode;
    /**
     * ID that allows you to track, analyze, and show an aggregated overview and the performance of individual campaigns per sending channel.
     */
    public string $campaignReferenceId;
    /**
     * Correlation data included in the outbound message. If provided, it will be returned in the inbound message. Auto-generated if not set explicitly.
     */
    public string $correlationData {
        set {
            $this->assigning('correlationData', $value);
            $this->correlationData = $value;
        }
    }
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\DeliveryTimeWindow $deliveryTimeWindow;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\Platform $platform;
    /**
     * Defines if the message should be sent only to the end user's primary device (phone or tablet). Supported by Viber for message with content with text/image/document only (without buttons, extra text etc.) body type or template message.
     */
    public bool $primaryDevice;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\RegionalOptions $regional;
    /**
     * Defines if the message should be charged using session rate. Supported by Viber for content with text/image/document only (without buttons, extra text etc.) body type. For text/image only body types `sessionRate` won't be applied if parameter `primaryDevice` is set to true.
     */
    public bool $sessionRate;
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiTrafficType $trafficType;
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\TransliterationCode $transliteration;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\ValidityPeriod $validityPeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adaptationMode' => is_bool($value) ? $this->adaptationMode = $value : parent::assignMember($name, $value),
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'correlationData' => is_string($value) ? $this->correlationData = $value : parent::assignMember($name, $value),
            'deliveryTimeWindow' => $value instanceof \stdClass ? $this->deliveryTimeWindow = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\DeliveryTimeWindow($value) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\Platform($value) : parent::assignMember($name, $value),
            'primaryDevice' => is_bool($value) ? $this->primaryDevice = $value : parent::assignMember($name, $value),
            'regional' => $value instanceof \stdClass ? $this->regional = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\RegionalOptions($value) : parent::assignMember($name, $value),
            'sessionRate' => is_bool($value) ? $this->sessionRate = $value : parent::assignMember($name, $value),
            'trafficType' => is_string($value) ? $this->trafficType = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiTrafficType::from($value) : parent::assignMember($name, $value),
            'transliteration' => is_string($value) ? $this->transliteration = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\TransliterationCode::from($value) : parent::assignMember($name, $value),
            'validityPeriod' => $value instanceof \stdClass ? $this->validityPeriod = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\ValidityPeriod($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
