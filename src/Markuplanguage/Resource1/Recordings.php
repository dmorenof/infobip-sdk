<?php

declare(strict_types=1);

namespace InfobipSDK\Markuplanguage\Resource1;

final class Recordings extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /markuplanguage/1/recordings [operationId: delete-markup-recording] */
    /**
     * Delete recording
     *
     * This method allows deleting Calls Markup Language recordings based on markup recording ID.
     */
    public static function delete(\InfobipSDK\DeleteParams\Markuplanguage\Resource1\Recordings $params): \InfobipSDK\DTOs\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\MarkupLanguageRecordingApiResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Markuplanguage\Resource1\Recordings::class)->delete($params);
    }

    /** GET /markuplanguage/1/recordings [operationId: get-markup-recordings] */
    /**
     * Get recordings
     *
     * This method allows searching and filtering of Calls Markup Language recordings based on various properties.
     */
    public static function get(?\InfobipSDK\GetParams\Markuplanguage\Resource1\Recordings $params = null): \InfobipSDK\DTOs\Aa157138bc28697f89db8325cc3d3ce20c0f3c72c30b6831a5435f3f2d211cfe\CallsMarkupLanguageRecordingPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Markuplanguage\Resource1\Recordings::class)->get($params);
    }
}
