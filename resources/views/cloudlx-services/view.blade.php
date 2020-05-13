@extends('layouts.master')

@section('title', 'View CLoudlx Service Detail')

@section('pagetitle')
    <h1 class="page-title">
        View CLoudlx Service Details
    </h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet-body">
                <table class="table table-bordered table-striped table-condensed flip-content table-hover">
                    <thead class="flip-content">
                    <tr class="active">
                        <th >
                            service name
                        </th>
                        <th >
                            service status
                        </th>
                        <th >
                            pricing_model
                        </th>
                        <th  class="text-center"  style="width: 135px;">
                            type
                        </th>
                        <th  class="text-center"  style="width: 155px;">
                            bandwidth
                        </th>
                        <th  class="text-center"  style="width: 155px;">
                            vlan
                        </th>
                        <th  class="text-center"  style="width: 155px;">
                            created
                        </th>
                        <th  class="text-center"  style="width: 155px;">
                            expires
                        </th>
                        <th  class="text-center"  style="width: 155px;">
                            port
                        </th>

                        <th ></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ $cloudlxService->name }}
                            </td>
                            <td>
                                {{ $cloudlxService->status }}
                            </td>
                            <td class="text-center">
                                {{ $cloudlxService->pricing_model }}
                            </td>
                            <td class="text-center">
                                {{ $cloudlxService->type }}
                            </td>
                            <td>
                                {{ $cloudlxService->bandwidth }}
                            </td>
                            <td>
                                {{ $cloudlxService->vlan }}
                            </td>
                            <td>
                                {{ $cloudlxService->created }}
                            </td>
                            <td>
                                {{ $cloudlxService->expires }}
                            </td>
                            <td>
                                {{ $cloudlxService->port->name }}
                            </td>


                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
@endsection
