<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotButtonAction
 */
final class ViberBotButtonAction extends \Dmorenof\SdkRuntime\DTO
{
    public string $actionBody;
    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotActionType $actionType;
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenMapLocation $openMapLocation;
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlSettings $openUrlSettings;
    public bool $silent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionBody' => is_string($value) ? $this->actionBody = $value : parent::assignMember($name, $value),
            'actionType' => is_string($value) ? $this->actionType = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotActionType::from($value) : parent::assignMember($name, $value),
            'openMapLocation' => $value instanceof \stdClass ? $this->openMapLocation = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenMapLocation($value) : parent::assignMember($name, $value),
            'openUrlSettings' => $value instanceof \stdClass ? $this->openUrlSettings = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlSettings($value) : parent::assignMember($name, $value),
            'silent' => is_bool($value) ? $this->silent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
