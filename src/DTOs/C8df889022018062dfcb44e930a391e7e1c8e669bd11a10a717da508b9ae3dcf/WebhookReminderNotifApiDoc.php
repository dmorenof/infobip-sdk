<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * WebhookReminderNotifApiDoc
 *
 * Object containing event data.
 */
final class WebhookReminderNotifApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'daysUntilRejection',
    'id',
    'status',
    'type',
];

    protected const array VALIDATION = [
    'daysUntilRejection' => [
        'format' => 'int32',
    ],
];

    /**
     * Number of days remaining before the resource request is automatically rejected due to inactivity.
     * Format: int32
     */
    public int $daysUntilRejection {
        set {
            $this->assigning('daysUntilRejection', $value);
            $this->daysUntilRejection = $value;
        }
    }
    /**
     * ID of the resource request.
     */
    public string $id;
    /**
     * Status of the resource request.
     */
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookReminderNotifApiDoc\StatusEnum $status;
    /**
     * Type of resource.
     */
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookReminderNotifApiDoc\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'daysUntilRejection' => is_int($value) ? $this->daysUntilRejection = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookReminderNotifApiDoc\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\WebhookReminderNotifApiDoc\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
