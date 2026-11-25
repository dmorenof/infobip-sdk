<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * CreateRuleApiRequest
 * Example: [{"priority":"URGENT","queueId":"448bf76d-0047-49a3-93a4-ea8722d6aeaa","enabled":true,"name":"First Rule","routeOnlyDuringWorkingHours":true,"expression":{"$or":[{"$eq":{"message.channel":"WHATSAPP"}},{"$eq":{"message.channel":"LIVE_CHAT"}}]}},{"priority":"HIGH","queueId":"448bf76d-0047-49a3-93a4-ea8722d7aeab","enabled":true,"name":"Second Rule","routeOnlyDuringWorkingHours":false,"expression":{"$and":[{"$eq":{"message.channel":"TELEGRAM"}},{"$eq":{"customer.country":"Croatia"}}]}},{"priority":"NORMAL","queueId":"39b52b7f-db13-4c47-9b6e-de2ba91df62g","queueName":"Third Queue","enabled":true,"name":"Third Rule","routeOnlyDuringWorkingHours":false,"expression":{"$eq":{"message.channel":"VIBER"}}}]
 */
final class CreateRuleApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'expression',
        'queueId',
    ];

    protected const array VALIDATION = [
        'expression' => [
            'minProperties' => 1,
        ],
        'name' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'queueId' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
    ];

    /**
     * Enabled is a boolean value (TRUE, FALSE), so the rule is engaged or avoided in the routing process. If not provided will be set to default.
     */
    public bool $enabled;
    /**
     * Query for logical validation of new messages. See [Routing](https://www.infobip.com/docs/conversations/supervisor-guide#queues-and-routing) for more info.
     */
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\CreateRuleApiRequest\ExpressionMap $expression {
        set {
            $this->assigning('expression', $value);
            $this->expression = $value;
        }
    }
    /**
     * Rule name, light description of expression logic.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationPriority $priority;
    /**
     * Queue Id is a destination queue where the new message will be assigned to.
     */
    public string $queueId {
        set {
            $this->assigning('queueId', $value);
            $this->queueId = $value;
        }
    }
    /**
     * When set to true, it indicates that the route should only be processed during designated working hours. [Set up working hours](https://www.infobip.com/docs/api/customer-engagement/conversations-api/create-working-hours)
     */
    public bool $routeOnlyDuringWorkingHours;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'priority' => is_string($value) ? $this->priority = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ConversationPriority::from($value) : parent::assignMember($name, $value),
            'queueId' => is_string($value) ? $this->queueId = $value : parent::assignMember($name, $value),
            'routeOnlyDuringWorkingHours' => is_bool($value) ? $this->routeOnlyDuringWorkingHours = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
