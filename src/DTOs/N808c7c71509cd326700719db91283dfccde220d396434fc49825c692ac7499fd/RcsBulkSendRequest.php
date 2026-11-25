<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N808c7c71509cd326700719db91283dfccde220d396434fc49825c692ac7499fd;

/**
 * RcsBulkSendRequest
 */
final class RcsBulkSendRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\N808c7c71509cd326700719db91283dfccde220d396434fc49825c692ac7499fd\RcsBulkSendRequest\MessagesCollection $messages;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\N808c7c71509cd326700719db91283dfccde220d396434fc49825c692ac7499fd\RcsBulkSendRequest\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\A09fd2f38320e8e77c07ff55b0f3c0f934582962897bb3b86f1a032582a1cc60\RcsSendRequest::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
