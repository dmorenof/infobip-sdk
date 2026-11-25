<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187;

/**
 * AgentResponseResultPage
 * Example: {"agents":[{"id":"9030551F327704A0F262995A1A4B4596","displayName":"Malcolm Young","status":"INVISIBLE","availability":"AWAY","role":"AGENT","enabled":true,"createdAt":"2019-05-10T07:45:23.777+0000","updatedAt":"2019-05-10T09:53:58.463+0000"},{"id":"97457D13B1FC79AF3C1A1096AE7E77AB","displayName":"Angus Young","status":"ACTIVE","availability":"BUSY","role":"SUPERVISOR","enabled":true,"createdAt":"2019-05-10T07:45:23.777+0000","updatedAt":"2019-05-10T09:53:58.463+0000"},{"id":"E83E787CF2613450157ADA3476171E3F","displayName":"Bon Scott","status":"INVISIBLE","availability":"BUSY","role":"AGENT","enabled":true,"createdAt":"2019-05-10T07:45:23.777+0000","updatedAt":"2019-05-10T09:53:58.463+0000"},{"id":"F66D67327326FCCB027BEAA916B94542","displayName":"Phil Rudd","status":"ACTIVE","availability":"ACTIVE","role":"AGENT","enabled":true,"createdAt":"2019-05-10T07:45:23.777+0000","updatedAt":"2019-05-10T09:53:58.463+0000"},{"id":"F66D67327326FCCB027BEAA916B94542","displayName":"Brian Johnson","status":"ACTIVE","availability":"BUSY","role":"AGENT","enabled":true,"createdAt":"2019-05-10T07:45:23.777+0000","updatedAt":"2019-05-10T09:53:58.463+0000"},{"id":"7E77AB97457D13B1FC79AF3C1A1096AE7E77AB","displayName":"Neil Young","status":"ACTIVE","availability":"ACTIVE","role":"AGENT","enabled":false,"createdAt":"2019-03-10T07:45:44.744+0000","updatedAt":"2019-03-10T09:33:58.374+0000"}],"pagination":{"totalItems":6,"page":0,"limit":10,"orderBy":"id:ASC"}}
 */
final class AgentResponseResultPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentResponseResultPage\AgentsCollection $agents;
    public \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\Pagination $pagination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agents' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->agents = new \InfobipSDK\Collections\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentResponseResultPage\AgentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\AgentResponse::class)) : parent::assignMember($name, $value),
            'pagination' => $value instanceof \stdClass ? $this->pagination = new \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\Pagination($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
