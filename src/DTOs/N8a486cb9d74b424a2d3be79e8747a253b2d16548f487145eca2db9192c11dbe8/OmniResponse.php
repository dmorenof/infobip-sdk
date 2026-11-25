<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a486cb9d74b424a2d3be79e8747a253b2d16548f487145eca2db9192c11dbe8;

/**
 * OmniResponse
 */
final class OmniResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
    'bulkId',
    'messages',
];

    /**
     * The ID which uniquely identifies the request. Bulk ID will be received only when you send a message to more than one destination address.
     */
    public string $bulkId;
    /**
     * Array of sent message objects, one object per every message.
     */
    public \InfobipSDK\Collections\N8a486cb9d74b424a2d3be79e8747a253b2d16548f487145eca2db9192c11dbe8\OmniResponse\MessagesCollection $messages;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\N8a486cb9d74b424a2d3be79e8747a253b2d16548f487145eca2db9192c11dbe8\OmniResponse\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\OmniResponseDetails::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
