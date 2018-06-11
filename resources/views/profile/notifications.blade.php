@extends('layouts.app')

@section('content')


    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>


    @include('includes.pushy-panel')

    <!-- Page Heading
    ================================================== -->
        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1 class="page-heading__title"><i class="fa fa-bell fa-2x"></i></h1>
                        <h1 class="page-heading__title">Obavijesti</h1>
                        <ol class="page-heading__breadcrumb breadcrumb">
                            <li class="registracija-podnaslov">Pregled svih obavijesti</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <!-- Content
        ================================================== -->
        <div class="site-content">
            <div class="container">

                <div class="row">

                    <div class="col-md-12">
                        <div class="card card--has-table">
                            <div class="card__header">
                                <h4><i class="fa fa-bars"></i> Obavijesti</h4>
                            </div>
                            <div class="card__content">
                                <div class="table-responsive">
                                    <table class="table table-hover player-season-avg">
                                        <thead>
                                        <tr>
                                            <th class="player-season-avg__season"><i class="fa fa-tag"></i> ID</th>
                                            <th class="player-season-avg__season"><i class="fa fa-info-circle"></i> Ime i prezime</th>
                                            <th class="player-season-avg__season"><i class="fa fa-info-circle"></i> Klub</th>
                                            <th class="player-season-avg__season"><i class="fa fa-info-circle"></i> Tip</th>
                                            <th class="player-season-avg__season"><i class="fa fa-info-circle"></i> Pozicija</th>
                                            <th class="player-season-avg__min"><i class="fa fa-calendar-plus-o"></i> Objavljeno</th>
                                            <th class="player-season-avg__gg"><i class="fa fa-question-circle-o"></i> Status</th>
                                            <th class="player-season-avg__ts"><i class="fa fa-pencil-square-o"></i></th>
                                            <th class="player-season-avg__ts"><i class="fa fa-external-link"></i></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($notifys))
                                            @foreach($notifys as $notify)
                                                <tr>
                                                    <td class="player-season-avg__season">{{$notify->id}}</td>
                                                    <td class="player-season-avg__season">{{$notify->player_id ? ($notify->player->firstname . ' ' . $notify->player->lastname) : ($notify->staff->firstname . ' ' . $notify->staff->lastname)}}</td>
                                                    <th class="player-season-avg__season">{{$notify->club->name}}</th>
                                                    <td class="player-season-avg__season">{{$notify->player_id ? 'Zahtjev sportiste' : 'Zahtjev stručnog kadra'}}</td>
                                                    <td class="player-season-avg__season">{{$notify->player_id ? '-' : $notify->staff->profession->name}}</td>
                                                    <td class="player-season-avg__min">{{ \Carbon\Carbon::parse($notify->created_at)->format("d F, Y") }}</td>
                                                    <td class="player-season-avg__gg">{{$notify->approved ? 'ODOBRENO' : 'NA ČEKANJU'}}</td>
                                                    <td class="player-season-avg__ts">
                                                        <a href="{{ $notify->player_id ? url('clubs/'.$notify->club->id.'/approve/player/'. $notify->player->id . '/' . $notify->id) : url('clubs/'.$notify->club->id.'/approve/staff/'. $notify->staff->id . '/' . $notify->id) }}">
                                                            {{ !$notify->approved ? 'Odobri' : 'Vrati na čekanje' }}
                                                        </a>
                                                    </td>
                                                    <td class="player-season-avg__st"><a href="{{ $notify->player_id ? url('athletes/'.$notify->player->id) : url('staff/'.$notify->staff->id) }}">Pregledaj</a></td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <p class="text-center">Trenutno nemate obavijesti.</p>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            {{ $notifys->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content / End -->
@endsection
