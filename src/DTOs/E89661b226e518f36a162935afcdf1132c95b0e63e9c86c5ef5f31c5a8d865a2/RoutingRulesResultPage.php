<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * RoutingRulesResultPage
 * Example: {"routes":[{"id":"467bbaad-3f50-4c27-9f24-0427aaec611f","priority":"URGENT","queueId":"448bf76d-0047-49a3-93a4-ea8722d6aeaa","queueName":"First Queue","enabled":true,"name":"First Rule","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00","order":1,"routeOnlyDuringWorkingHours":true,"isPrivate":false,"expression":{"$or":[{"$eq":{"message.channel":"WHATSAPP"}},{"$eq":{"message.channel":"LIVE_CHAT"}}]}},{"id":"467bbaad-3f50-4c27-9f24-0427baec611f","priority":"HIGH","queueId":"448bf76d-0047-49a3-93a4-ea8722d7aeab","queueName":"Second Queue","enabled":true,"name":"Second Rule","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00","order":2,"routeOnlyDuringWorkingHours":false,"isPrivate":false,"expression":{"$and":[{"$eq":{"message.channel":"TELEGRAM"}},{"$eq":{"customer.country":"Croatia"}}]}},{"id":"eb7bdb7d-7281-4107-8d7b-80efc8548a38","priority":"NORMAL","queueId":"39b52b7f-db13-4c47-9b6e-de2ba91df62g","queueName":"Third Queue","enabled":true,"name":"Third Rule","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00","order":3,"routeOnlyDuringWorkingHours":false,"isPrivate":false,"expression":{"$eq":{"message.channel":"VIBER"}}}],"pagination":{"totalItems":3,"page":0,"limit":999,"orderBy":"order:ASC"}}
 */
final class RoutingRulesResultPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\Pagination $pagination;
    public \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RoutingRulesResultPage\RoutesCollection $routes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pagination' => $value instanceof \stdClass ? $this->pagination = new \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\Pagination($value) : parent::assignMember($name, $value),
            'routes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->routes = new \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RoutingRulesResultPage\RoutesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\RuleApiResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
