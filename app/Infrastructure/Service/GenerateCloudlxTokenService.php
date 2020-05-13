<?php

namespace App\Infrastructure\Service;

use App\Domain\Core\CloudlxTokenService;
use GuzzleHttp\Client as GuzzleHttp;

class GenerateCloudlxTokenService implements CloudlxTokenService
{
    /**
     * @var GuzzleHttp
     */
    private $guzzleHttp;

    /**
     * CloudlxRequestService constructor.
     *
     * @param GuzzleHttp $guzzleHttp
     */
    public function __construct(GuzzleHttp $guzzleHttp)
    {
        $this->guzzleHttp = $guzzleHttp;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        $response = $this->guzzleHttp
            ->request('POST', env('CLOUDLX_URL').'/api/oauth2/access-token', [
                'headers' =>
                    [
                        'Accept' => 'application/json',
                        'Accept-Language' => 'en_US',
                        'Content-Type' => 'application/x-www-form-urlencoded',
                    ],
                'form_params' => [
                    "grant_type"     => "client_credentials",
                    "client_id"     => env('CLOUDLX_CLIENT_ID'),
                    "client_secret"     => env('CLOUDLX_CLIENT_SECRET'),
                ]
            ]);
        return json_decode($response->getBody()->getContents());
    }


    public function refreshToken()
    {
        //       to be implemented
    }

}
