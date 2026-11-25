<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotOpenUrlSettings
 */
final class ViberBotOpenUrlSettings extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'actionPredefinedUrl' => [
        'minLength' => 1,
        'maxLength' => 2147483647,
    ],
    'customTitle' => [
        'minLength' => 0,
        'maxLength' => 15,
    ],
];

    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlSettingsActionButton $actionButton;
    public string $actionPredefinedUrl {
        set {
            $this->assigning('actionPredefinedUrl', $value);
            $this->actionPredefinedUrl = $value;
        }
    }
    public string $actionReplyData;
    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlSettingsMode $browserDisplayMode;
    public string $customTitle {
        set {
            $this->assigning('customTitle', $value);
            $this->customTitle = $value;
        }
    }
    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlSettingsFooterType $footerType;
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlSettingsMediaPlayer $mediaPlayer;
    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlMediaType $openUrlMediaType;
    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlType $openUrlType;
    public \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlSettingsTitleType $titleType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionButton' => is_string($value) ? $this->actionButton = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlSettingsActionButton::from($value) : parent::assignMember($name, $value),
            'actionPredefinedUrl' => is_string($value) ? $this->actionPredefinedUrl = $value : parent::assignMember($name, $value),
            'actionReplyData' => is_string($value) ? $this->actionReplyData = $value : parent::assignMember($name, $value),
            'browserDisplayMode' => is_string($value) ? $this->browserDisplayMode = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlSettingsMode::from($value) : parent::assignMember($name, $value),
            'customTitle' => is_string($value) ? $this->customTitle = $value : parent::assignMember($name, $value),
            'footerType' => is_string($value) ? $this->footerType = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlSettingsFooterType::from($value) : parent::assignMember($name, $value),
            'mediaPlayer' => $value instanceof \stdClass ? $this->mediaPlayer = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlSettingsMediaPlayer($value) : parent::assignMember($name, $value),
            'openUrlMediaType' => is_string($value) ? $this->openUrlMediaType = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlMediaType::from($value) : parent::assignMember($name, $value),
            'openUrlType' => is_string($value) ? $this->openUrlType = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlType::from($value) : parent::assignMember($name, $value),
            'titleType' => is_string($value) ? $this->titleType = \InfobipSDK\Enums\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\ViberBotOpenUrlSettingsTitleType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
