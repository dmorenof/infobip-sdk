<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * UrlButtonApiData
 */
final class UrlButtonApiData extends \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ButtonApiData
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'example' => [
        'pattern' => '^(ftp|http|https)://(www\\.)?(([-a-z0-9@:%._+~#=]{1,4096}\\.([a-z]{1,63})(\\b|_))|(\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}))(:\\d{2,5})?([-a-z0-9()@:%_+,.~!#?&/=\'*;$]+)?',
    ],
    'text' => [
        'minLength' => 0,
        'maxLength' => 25,
    ],
    'url' => [
        'minLength' => 1,
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'destinationUrl',
];

    protected const array WRITE_ONLY_FIELDS = [
    'example',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Url of button's destination. Available only if custom domain is present.
     */
    public string $destinationUrl;
    /**
     * An example of a URL a user could use. Should be a valid URL that starts with `https://` or `http://`. Cannot contain placeholders.
     */
    public string $example {
        set {
            $this->assigning('example', $value);
            $this->example = $value;
        }
    }
    /**
     * Button text.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }
    /**
     * URL to which the end-user will be directed when hitting the button. URL is expected to start with `https://` or `http://`. Can be static or dynamic. For dynamic URL registration, add a placeholder {{1}} at the end of the link. Example: `https://www.infobip.com/{{1}}`.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destinationUrl' => is_string($value) ? $this->destinationUrl = $value : parent::assignMember($name, $value),
            'example' => is_string($value) ? $this->example = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
