<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * WebhookReminderNotifApiDocRequestBody
 */
final class WebhookReminderNotifApiDocRequestBody extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of events provided in a single request.
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookReminderNotifApiDocRequestBody\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookReminderNotifApiDocRequestBody\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookReminderNotifApiDocResult::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
