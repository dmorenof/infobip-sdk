<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * EmailStorage
 *
 * [Email storage options](https://www.infobip.com/docs/email/email-storage-and-retrieval) per message.
 */
final class EmailStorage extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Set to true to skip [active email storage](https://www.infobip.com/docs/email/email-storage-and-retrieval/active-email-storage) (short-term storage used for troubleshooting or support).
     *             If `false` or not set, the account-level setting is used.
     */
    public bool $skipActive;
    /**
     * Set to true to skip [passive email storage](https://www.infobip.com/docs/email/email-storage-and-retrieval/passive-email-storage) (long-term storage used for compliance, legal, or audit purposes).
     *             If `false` or not set, the account-level setting is used.
     */
    public bool $skipPassive;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'skipActive' => is_bool($value) ? $this->skipActive = $value : parent::assignMember($name, $value),
            'skipPassive' => is_bool($value) ? $this->skipPassive = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
