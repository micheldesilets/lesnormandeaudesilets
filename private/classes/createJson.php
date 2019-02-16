<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2019-02-15
 * Time: 10:37
 */

class createJson
{
    private $arrayData;

    public function __construct($arrayData)
    {
        $this->arrayData = $arrayData;
    }

    public function createJson()
    {
  //      header("Content-Type: application/json");
        $json = json_encode($this->arrayData, JSON_PRETTY_PRINT |
            JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        if ($json === false) {
            // Avoid echo of empty string (which is invalid JSON), and
            // JSONify the error message instead:
            $json = json_encode(array("jsonError", json_last_error_msg()));
            if ($json === false) {
                // This should not happen, but we go all the way now:
                $json = '{"jsonError": "unknown"}';
            }
            // Set HTTP response status code to: 500 - Internal Server Error
            http_response_code(500);
        }
        return $json;
    }
}