<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187;

/**
 * BotResultPage
 * Example: {"bots":[{"id":"309BB921757DEAC9BE79EC6259B31C8A","webhookUrl":"www.webhookurl.com/link1","displayName":"My Whatsapp Bot","channel":"WHATSAPP","destination":"447492263897","messagePersistencePolicy":"PERSIST_ALL","enabled":true,"sessionTimeoutInSec":120},{"id":"6988D4642270FD8EF9EA833DCD972BB1","webhookUrl":"www.webhookurl.com/link2","displayName":"My Secret Bot","channel":"WHATSAPP","destination":"447492263899","messagePersistencePolicy":"PERSIST_NONE","enabled":true,"sessionTimeoutInSec":120}],"pagination":{"totalItems":2,"page":0,"limit":10,"orderBy":"id:ASC"}}
 */
final class BotResultPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\BotResultPage\BotsCollection $bots;
    public \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\Pagination $pagination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bots' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->bots = new \InfobipSDK\Collections\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\BotResultPage\BotsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\BotApiModel::class)) : parent::assignMember($name, $value),
            'pagination' => $value instanceof \stdClass ? $this->pagination = new \InfobipSDK\DTOs\N59fee77911b10cc32daa4aa3591d8ca0b6f5fe540a80b499aee90c38ff11a187\Pagination($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
