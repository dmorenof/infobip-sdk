<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1;

/**
 * SssV2
 *
 * The list of the results for this page.
 */
final class SssV2 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'sendingStrategyId',
        'useGeolocatedSender',
        'useStickySender',
    ];

    /**
     * Channel for which the Sending Strategy is created. Supported channels: SMS, MMS, RCS. If left empty, Sending Strategy will be applied to all supported channels.
     * Example: "SMS"
     */
    public string $channel;
    /**
     * Country code, in two-letter ISO standard, of the country the messages are terminating to for which the Sending Strategy will be used. If left empty, Sending Strategy will attempt to be used for all the countries where you have senders provisioned.
     * Example: "US"
     */
    public string $destinationCountryCode;
    public \InfobipSDK\DTOs\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\Platform $platform;
    /**
     * Priorities of the senders that can be defined in case there is more than one sender for a destination country.
     */
    public \InfobipSDK\Collections\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\SssRequestV2\PrioritiesCollection $priorities;
    /**
     * Id of the Sending strategy.
     * Example: "78D8394AC3EG0460B4CF0E723FC31B49"
     */
    public string $sendingStrategyId;
    /**
     * If true, the sender will be selected from the list of senders based on the nearest local area code. Supported for US and CA for now.
     * Example: false
     */
    public bool $useGeolocatedSender;
    /**
     * If true, the same sender will be used for any subsequent interactions with the end user (inside one country).
     * Example: false
     */
    public bool $useStickySender;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = $value : parent::assignMember($name, $value),
            'destinationCountryCode' => is_string($value) ? $this->destinationCountryCode = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\Platform($value) : parent::assignMember($name, $value),
            'priorities' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->priorities = new \InfobipSDK\Collections\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\SssRequestV2\PrioritiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N5929f45c31f06c29ab1bc6e26caa01575484225e5ef99a2512bee829b646f1c1\Priority::class)) : parent::assignMember($name, $value),
            'sendingStrategyId' => is_string($value) ? $this->sendingStrategyId = $value : parent::assignMember($name, $value),
            'useGeolocatedSender' => is_bool($value) ? $this->useGeolocatedSender = $value : parent::assignMember($name, $value),
            'useStickySender' => is_bool($value) ? $this->useStickySender = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
