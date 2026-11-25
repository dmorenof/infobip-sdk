<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * BackgroundBlurSettingsApiModel
 *
 * Configuration for the background display while the agent is on a call. <a href="https://www.infobip.com/docs/conversations/calls#background-options-for-video-calls-agent-guide" target="_blank">More info</a>.
 */
final class BackgroundBlurSettingsApiModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'mode',
];

    public \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\BackgroundFileMetadataApiModel $fileMetadata;
    public \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\VideoFilterModeApiModel $mode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileMetadata' => $value instanceof \stdClass ? $this->fileMetadata = new \InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\BackgroundFileMetadataApiModel($value) : parent::assignMember($name, $value),
            'mode' => is_string($value) ? $this->mode = \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\VideoFilterModeApiModel::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
