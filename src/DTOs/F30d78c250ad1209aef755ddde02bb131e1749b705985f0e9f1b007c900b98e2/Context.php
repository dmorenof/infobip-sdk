<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * Context
 *
 * Information about the message to which the end user responded.
 */
final class Context extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Phone number or Business Scoped User ID (BSUID) of the end user.
     */
    public string $from;
    /**
     * GroupId of the message to which the end user responded.
     */
    public string $groupId;
    /**
     * MessageId of the message to which the end user responded.
     */
    public string $id;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\ReferredProduct $referredProduct;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'groupId' => is_string($value) ? $this->groupId = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'referredProduct' => $value instanceof \stdClass ? $this->referredProduct = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\ReferredProduct($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
