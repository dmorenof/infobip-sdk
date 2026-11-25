<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * QueueResultPage
 * Example: {"queues":[{"id":"a126beb1-f43b-422c-b298-295f65d31e82","name":"Queue 1","enabledAgentsCount":3,"enabledRoutesCount":2,"isAutoAssignmentEnabled":false,"stickyAgentTimeoutDays":10,"isStickyAutoAssignmentEnabled":true,"workingHoursId":null,"isPrivate":false,"createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00","deletedAt":null},{"id":"75af6f92-75a6-4364-b293-450281bd21be","name":"Queue 2","enabledAgentsCount":1,"enabledRoutesCount":4,"isAutoAssignmentEnabled":false,"stickyAgentTimeoutDays":null,"isStickyAutoAssignmentEnabled":false,"workingHoursId":null,"isPrivate":false,"createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00","deletedAt":null}],"pagination":{"totalItems":2,"page":0,"limit":10,"orderBy":"id:ASC"}}
 */
final class QueueResultPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\Pagination $pagination;
    public \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\QueueResultPage\QueuesCollection $queues;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pagination' => $value instanceof \stdClass ? $this->pagination = new \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\Pagination($value) : parent::assignMember($name, $value),
            'queues' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->queues = new \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\QueueResultPage\QueuesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\QueueApiModel::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
