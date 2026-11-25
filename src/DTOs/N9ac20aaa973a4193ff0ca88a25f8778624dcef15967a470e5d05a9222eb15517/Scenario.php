<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9ac20aaa973a4193ff0ca88a25f8778624dcef15967a470e5d05a9222eb15517;

/**
 * Scenario
 */
final class Scenario extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'default' => 'default_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'default_' => 'default',
    ];

    protected const array READ_ONLY_FIELDS = [
        'key',
    ];

    /**
     * Indicates if created scenario should be set as a default.
     */
    public bool $default_;
    /**
     * Sender used in OMNI scenario’s step for sending message.
     */
    public \InfobipSDK\Collections\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02\CreateOrUpdateScenarioRequest\FlowCollection $flow;
    /**
     * Key used to uniquely identify OMNI scenario.
     * Format: int64
     */
    public int $key;
    /**
     * OMNI scenario name.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default' => is_bool($value) ? $this->default_ = $value : parent::assignMember($name, $value),
            'flow' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->flow = new \InfobipSDK\Collections\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02\CreateOrUpdateScenarioRequest\FlowCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Step::class)) : parent::assignMember($name, $value),
            'key' => is_int($value) ? $this->key = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
