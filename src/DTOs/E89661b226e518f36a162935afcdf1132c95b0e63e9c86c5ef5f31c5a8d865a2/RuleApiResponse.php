<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * RuleApiResponse
 */
final class RuleApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'order' => [
        'format' => 'int32',
    ],
];

    /**
     * Time stamp when rule is created.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Enabled is a boolean value (TRUE, FALSE), so the rule is engaged or avoided in the routing process. If not provided will be set to default.
     */
    public bool $enabled;
    /**
     * Query for logical validation of new messages. See [Routing](https://www.infobip.com/docs/conversations/supervisor-guide#queues-and-routing) for more info.
     */
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RuleApiResponse\ExpressionMap $expression;
    /**
     * Rule Id.
     */
    public string $id;
    /**
     * Is route private.
     */
    public bool $isPrivate;
    /**
     * Rule name, light description of expression logic.
     */
    public string $name;
    /**
     * Position in order of executing this rule for logical validation new message.
     * Format: int32
     */
    public int $order {
        set {
            $this->assigning('order', $value);
            $this->order = $value;
        }
    }
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationPriority $priority;
    /**
     * Queue Id is a destination queue where the new message will be assigned to.
     */
    public string $queueId;
    /**
     * Queue name.
     */
    public string $queueName;
    /**
     * When set to true, it indicates that the route should only be processed during designated working hours. [Set up working hours](https://www.infobip.com/docs/api/customer-engagement/conversations-api/create-working-hours)
     */
    public bool $routeOnlyDuringWorkingHours;
    /**
     * Time stamp when rule is last updated.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'isPrivate' => is_bool($value) ? $this->isPrivate = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'order' => is_int($value) ? $this->order = $value : parent::assignMember($name, $value),
            'priority' => is_string($value) ? $this->priority = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationPriority::from($value) : parent::assignMember($name, $value),
            'queueId' => is_string($value) ? $this->queueId = $value : parent::assignMember($name, $value),
            'queueName' => is_string($value) ? $this->queueName = $value : parent::assignMember($name, $value),
            'routeOnlyDuringWorkingHours' => is_bool($value) ? $this->routeOnlyDuringWorkingHours = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
