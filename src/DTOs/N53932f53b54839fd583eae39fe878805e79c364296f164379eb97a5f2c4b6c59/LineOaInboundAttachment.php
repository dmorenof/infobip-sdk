<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaInboundAttachment
 *
 * Inbound sticker attachment.
 */
final class LineOaInboundAttachment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'downloadId',
        'fileName',
    ];

    protected const array VALIDATION = [
        'downloadId' => [
            'minLength' => 1,
        ],
        'fileName' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Identifier used to download the inbound media.
     * Example: "2034072219640523072"
     */
    public string $downloadId {
        set {
            $this->assigning('downloadId', $value);
            $this->downloadId = $value;
        }
    }
    /**
     * Original file name of the inbound media.
     * Example: "image.jpg"
     */
    public string $fileName {
        set {
            $this->assigning('fileName', $value);
            $this->fileName = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'downloadId' => is_string($value) ? $this->downloadId = $value : parent::assignMember($name, $value),
            'fileName' => is_string($value) ? $this->fileName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
