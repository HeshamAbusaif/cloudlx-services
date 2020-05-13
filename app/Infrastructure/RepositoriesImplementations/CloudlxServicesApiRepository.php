<?php
namespace App\Infrastructure\RepositoriesImplementations;

use App\Domain\CloudlxServices\CloudlxServicesFilter;
use App\Domain\Core\Order;
use App\Domain\CloudlxServices\CloudlxServicesRepository;
use App\Domain\Core\Pagination;
use App\Infrastructure\Service\GenerateCloudlxTokenService;
use GuzzleHttp\Client as GuzzleHttp;

final class CloudlxServicesApiRepository implements CloudlxServicesRepository
{
    /**
     * @var GenerateCloudlxTokenService
     */
    private $generateCloudlxTokenService;

    /**
     * @var GuzzleHttp
     */
    private $guzzleHttp;

    /**
     * CloudlxServicesApiRepository constructor.
     * @param GenerateCloudlxTokenService $generateCloudlxTokenService
     * @param GuzzleHttp $guzzleHttp
     */
    public function __construct(GenerateCloudlxTokenService $generateCloudlxTokenService, GuzzleHttp $guzzleHttp)
    {
        $this->generateCloudlxTokenService = $generateCloudlxTokenService;
        $this->guzzleHttp = $guzzleHttp;
    }

    /**
     * @param CloudlxServicesFilter $cloudlxServicesFilter
     * @param Pagination|null $pagination
     * @param Order $cloudlxServicesOrder
     * @return \App\Domain\CloudlxServices\CloudlxServices[]|\Illuminate\Pagination\LengthAwarePaginator
     */
    public function all(CloudlxServicesFilter $cloudlxServicesFilter, $pagination = null, Order $cloudlxServicesOrder = null)
    {

        try {
            $token = $this->generateCloudlxTokenService->getToken();
            $cloudlsServices = $this->guzzleHttp
                        ->request('GET', env('CLOUDLX_URL').'/api/services', [
                            'headers' => [
                                'Authorization'     => $token->access_token
                            ]
                        ]);
            return json_decode($cloudlsServices->getBody()->getContents());

        } catch (GuzzleHttp\Exception\ClientException $e) {
             $response = $e->getResponse();
             $responseBodyAsString = $response->getBody()->getContents();
        }
    }

    /**
     * @param int $cloudlxServiceId
     * @throws CloudlxServiceNotFound
     */
    public function byId($cloudlxServiceId)
    {
        try {
            $token = $this->generateCloudlxTokenService->getToken();
            $cloudlsService = $this->guzzleHttp
                ->request('GET', env('CLOUDLX_URL').'/api/services/'.$cloudlxServiceId.'/service', [
                    'headers' => [
                        'Authorization'     => $token->access_token
                    ]
                ]);
            return json_decode($cloudlsService->getBody());

        } catch (GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
        }
    }
}
