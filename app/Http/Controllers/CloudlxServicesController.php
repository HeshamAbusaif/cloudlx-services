<?php
namespace App\Http\Controllers;

use App\Application\CloudlxServices\GetCloudlxServiceById;
use App\Application\CloudlxServices\GetCloudlxServicesList;
use App\Domain\CloudlxServices\CloudlxServicesFilter;
use App\Domain\Core\Order;
use App\Domain\Core\Pagination;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CloudlxServicesController extends Controller
{

    /**
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request)
    {
        $filter = new CloudlxServicesFilter();
        $order = (new Order)
            ->setField('createdAt')
            ->setDirection('DESC');
        $perPage = $request->get('perPage');
        $cloudlxServices = $this->dispatch(new GetCloudlxServicesList(
            $filter,
            new Pagination($request->get('page'), $perPage),
            $order
        ));
        return view('cloudlx-services.index', [
            'cloudlxServices' => $cloudlxServices
        ]);
    }





    /**
     * @param int $id
     *
     * @return View
     */
    public function viewService($id)
    {
        try {
            return view('cloudlx-services.view', [
                'cloudlxService' => $this->dispatch(new GetCloudlxServiceById($id))
            ]);
        } catch (CloudlxServiceNotFound $ex) {
            throw new NotFoundHttpException();
        }
    }


}
