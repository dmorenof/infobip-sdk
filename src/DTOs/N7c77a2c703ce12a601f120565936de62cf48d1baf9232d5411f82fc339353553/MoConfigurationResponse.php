<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * MoConfigurationResponse
 *
 * Response for configuring MO resource.
 */
final class MoConfigurationResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'configurationKey',
];

    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\UseAnswers $answers;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\AutoResponseActionV2Response $autoResponse;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\BlockListConfigurationResponse $blockListConfiguration;
    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ConfigurationType $channel;
    /**
     * The key of a stored configuration.
     * Example: "E9FCDCA496035F08EEA5933702EDF745"
     */
    public string $configurationKey;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\UseConversations $conversations;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoActionDocs $forwarding;
    /**
     * Configuration keyword.
     * Example: "STARTKW"
     */
    public string $keyword;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\PlatformDocs $platform;
    /**
     * Configuration username.
     * Example: "myusername"
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'answers' => $value instanceof \stdClass ? $this->answers = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\UseAnswers($value) : parent::assignMember($name, $value),
            'autoResponse' => $value instanceof \stdClass ? $this->autoResponse = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\AutoResponseActionV2Response($value) : parent::assignMember($name, $value),
            'blockListConfiguration' => $value instanceof \stdClass ? $this->blockListConfiguration = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\BlockListConfigurationResponse($value) : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ConfigurationType::from($value) : parent::assignMember($name, $value),
            'configurationKey' => is_string($value) ? $this->configurationKey = $value : parent::assignMember($name, $value),
            'conversations' => $value instanceof \stdClass ? $this->conversations = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\UseConversations($value) : parent::assignMember($name, $value),
            'keyword' => is_string($value) ? $this->keyword = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\PlatformDocs($value) : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
