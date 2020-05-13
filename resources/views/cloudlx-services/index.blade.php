@extends('layouts.master')

@section('title', 'Cloudlx Services')

@section('styles')
    <style>
        form {
            display: inline-block
        }
    </style>
@endsection

@section('pagetitle')
    <h1 class="page-title">
        Cloudlx Services
    </h1>
@endsection

@section('content')
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>
                Cloudlx Services
            </div>
        </div>
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
                            Service Details
                        </th>
                        <th ></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($cloudlxServices->services as $cloudlxService)
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
                        <td class="text-center">
                            <a class="btn btn-default"
                             href="{{ route('cloudlx-services.view', $cloudlxService->id) }}"
                             type="submit"
                             title="Edit">
                                <i class="fa fa-eye"></i>
                             </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('partials.total_pagination', [
     'entities' => (array) $cloudlxServices->services,
        'requestParams' => [
           'search',
           'page',
           'perPage',
        ]
     ])

@endsection
