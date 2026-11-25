<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * PushData
 *
 * Push-specific data used if the message is sent through a Push channel.
 */
final class PushData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'deviceSubscriptions' => [
            'uniqueItems' => true,
        ],
        'personSubscriptions' => [
            'uniqueItems' => true,
        ],
        'validityPeriod' => [
            'format' => 'int32',
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'customPayload',
        'deviceSubscriptions',
        'includeNotificationsDisabledDevices',
        'personSubscriptions',
        'targetOnlyPrimaryDevices',
        'text',
        'validityPeriod',
    ];

    /**
     * Additional custom data delivered with the Push message.
     */
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\PushData\CustomPayloadMap $customPayload;
    /**
     * Key set of custom attributes on device for additional filtering.
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $deviceSubscriptions {
        set {
            $this->assigning('deviceSubscriptions', $value);
            $this->deviceSubscriptions = $value;
        }
    }
    /**
     * Flag which shows if devices with disabled notifications are included.
     */
    public bool $includeNotificationsDisabledDevices;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\NotificationOptions $notificationOptions;
    /**
     * Key set of custom attributes on person for additional filtering.
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $personSubscriptions {
        set {
            $this->assigning('personSubscriptions', $value);
            $this->personSubscriptions = $value;
        }
    }
    /**
     * Set to true to only send messages to push devices which are marked as primary devices. By default, messages will be sent to all targeted devices, including both primary and non-primary.
     */
    public bool $targetOnlyPrimaryDevices;
    /**
     * Text of the message that will be sent.
     */
    public string $text;
    /**
     * The message validity period. Unless specified differently in validityPeriodTimeUnit, it is expressed in minutes. When the period expires, the message will be automatically sent using the next OMNI step. Validity period longer than 48h is not supported (in this case, it will be automatically set to 48h). Additionally, period should be longer than 30 seconds.
     * Format: int32
     */
    public int $validityPeriod {
        set {
            $this->assigning('validityPeriod', $value);
            $this->validityPeriod = $value;
        }
    }
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\TimeUnit $validityPeriodTimeUnit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deviceSubscriptions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->deviceSubscriptions = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'includeNotificationsDisabledDevices' => is_bool($value) ? $this->includeNotificationsDisabledDevices = $value : parent::assignMember($name, $value),
            'notificationOptions' => $value instanceof \stdClass ? $this->notificationOptions = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\NotificationOptions($value) : parent::assignMember($name, $value),
            'personSubscriptions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->personSubscriptions = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'targetOnlyPrimaryDevices' => is_bool($value) ? $this->targetOnlyPrimaryDevices = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'validityPeriod' => is_int($value) ? $this->validityPeriod = $value : parent::assignMember($name, $value),
            'validityPeriodTimeUnit' => is_string($value) ? $this->validityPeriodTimeUnit = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\TimeUnit::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
