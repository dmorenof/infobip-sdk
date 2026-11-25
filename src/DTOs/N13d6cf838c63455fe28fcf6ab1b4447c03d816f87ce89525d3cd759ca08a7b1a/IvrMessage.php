<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * IvrMessage
 *
 * Array of IVR messages to be sent, one object per every message.
 */
final class IvrMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destinations',
        'scenarioId',
    ];

    protected const array VALIDATION = [
        'callTimeout' => [
            'format' => 'int32',
        ],
        'destinations' => [
            'minItems' => 1,
        ],
        'notifyContentVersion' => [
            'format' => 'int32',
        ],
        'pause' => [
            'format' => 'int32',
        ],
        'ringTimeout' => [
            'format' => 'int32',
        ],
        'validityPeriod' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Maximum possible duration of the call to be set, shown in seconds.
     * Format: int32
     */
    public int $callTimeout {
        set {
            $this->assigning('callTimeout', $value);
            $this->callTimeout = $value;
        }
    }
    /**
     * Additional client's data that will be sent on the notifyUrl. The maximum value is 200 characters.
     */
    public string $callbackData;
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DeliveryTimeWindow $deliveryTimeWindow;
    /**
     * Array of message destination addresses. Maximum number of destination addresses is 20k.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\IvrMessage\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    /**
     * Numeric sender ID length should be between 3 and 14 characters.
     */
    public string $from;
    /**
     * Preferred Delivery report content type. Can be `application/json` or `application/xml`.
     */
    public string $notifyContentType;
    /**
     * Specifies the version of the report model to be sent. Can be `1` ([deprecated version 1](#programmable-communications/voice/receive-voice-delivery-reports-deprecated)) or `2` ([current version 2](#programmable-communications/voice/receive-voice-delivery-reports)). The default is version 2.
     * Format: int32
     */
    public int $notifyContentVersion {
        set {
            $this->assigning('notifyContentVersion', $value);
            $this->notifyContentVersion = $value;
        }
    }
    /**
     * The URL on your callback server on which the Delivery report will be sent.
     */
    public string $notifyUrl;
    /**
     * The parameters that should be passed to the scenario on execution.
     */
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\IvrMessage\ParametersMap $parameters;
    /**
     * Indicating period of time in seconds between end user answering the call and message starting to be played. Minimal value is `0` and maximum value is `10` seconds. Default value is `0`.
     * Format: int32
     */
    public int $pause {
        set {
            $this->assigning('pause', $value);
            $this->pause = $value;
        }
    }
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Retry $retry;
    /**
     * Ringing duration, unless there are no operator limitations. Default value is `45`. Note: There are no limitations on the Voice platform regarding this value, however, most of the operators have their own ring timeout limitations and it is advisable to keep the ringTimeout value up to `45` seconds.
     * Format: int32
     */
    public int $ringTimeout {
        set {
            $this->assigning('ringTimeout', $value);
            $this->ringTimeout = $value;
        }
    }
    /**
     * Scenario key.
     */
    public string $scenarioId;
    /**
     * Used for scheduled Voice messages (message not to be sent immediately, but at scheduled time).
     * Format: date-time
     */
    public string $sendAt;
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SendingSpeed $sendingSpeed;
    /**
     * The message validity period shown in minutes. When the period expires, it will not be allowed for the message to be sent. A validity period longer than 48h is not supported (in this case, it will be automatically set to 48h).
     * Format: int32
     */
    public int $validityPeriod {
        set {
            $this->assigning('validityPeriod', $value);
            $this->validityPeriod = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callTimeout' => is_int($value) ? $this->callTimeout = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'deliveryTimeWindow' => $value instanceof \stdClass ? $this->deliveryTimeWindow = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DeliveryTimeWindow($value) : parent::assignMember($name, $value),
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->destinations = new \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\IvrMessage\DestinationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Destination::class)) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'notifyContentType' => is_string($value) ? $this->notifyContentType = $value : parent::assignMember($name, $value),
            'notifyContentVersion' => is_int($value) ? $this->notifyContentVersion = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'pause' => is_int($value) ? $this->pause = $value : parent::assignMember($name, $value),
            'retry' => $value instanceof \stdClass ? $this->retry = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Retry($value) : parent::assignMember($name, $value),
            'ringTimeout' => is_int($value) ? $this->ringTimeout = $value : parent::assignMember($name, $value),
            'scenarioId' => is_string($value) ? $this->scenarioId = $value : parent::assignMember($name, $value),
            'sendAt' => is_string($value) ? $this->sendAt = $value : parent::assignMember($name, $value),
            'sendingSpeed' => $value instanceof \stdClass ? $this->sendingSpeed = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SendingSpeed($value) : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
