<?php


namespace okapi\services\OCPL\paths\search\all;

use okapi\Okapi;
use okapi\OkapiRequest;
use okapi\services\OCPL\paths\search\GPSearchAssistant;

require_once('gp_searching.inc.php');

class WebService
{
    public static function options()
    {
        return array(
            'min_auth_level' => 1
        );
    }

    public static function call(OkapiRequest $request)
    {
        $search_assistant = new GPSearchAssistant($request);
        $search_assistant->prepare_common_search_params();
        $result = $search_assistant->get_common_search_result();
        return Okapi::formatted_response($request, $result);
    }
}
