<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * CarouselContainer
 */
final class CarouselContainer extends \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\LineNotificationContainer
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'contents' => [
        'minItems' => 1,
        'maxItems' => 12,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Bubbles contained within the carousel, browsed by scrolling sideways.
     */
    public \InfobipSDK\Collections\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\CarouselContainer\ContentsCollection $contents {
        set {
            $this->assigning('contents', $value);
            $this->contents = $value;
        }
    }

}
