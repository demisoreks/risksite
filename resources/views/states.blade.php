@extends('app', ['page_title' => 'State Information'])

@section('content')
<div class="row">
    <div class="col-md-6">
        <table class="table table-bordered table-hover table-striped" width="100%">
            <tr>
                <td width="50%">State Name</td>
                <td><strong>{{ $state->name }}</strong></td>
            </tr>
            <tr>
                <td>Lockdown Status</td>
                <td><strong>@if ($state->lockdown_status == 'Total' || $state->lockdown_status == 'Partial') Yes @else No @endif</strong></td>
            </tr>
            <tr>
                <td>Lockdown Policy</td>
                <td><a class="btn btn-primary btn-sm" href="{{ $state->lockdown_policy }}" target="_blank"><strong>Click Here</strong></a></td>
            </tr>
            <tr>
                <td>End of Lockdown</td>
                <td><strong>@if ($state->lockdown_end) {{ Carbon\Carbon::parse($state->lockdown_end)->format('l, F j, Y') }} @endif</strong></td>
            </tr>
            <tr>
                <td>Risk Rating</td>
                <td class="@if ($state->risk_rating == 'High') text-danger @elseif ($state->risk_rating == 'Moderate') text-warning @elseif ($state->risk_rating == 'Low') text-success @endif">
                    <strong>{{ $state->risk_rating }}</strong>
                </td>
            </tr>
            <tr>
                <td>Emergency Numbers</td>
                <td><strong>{{ $state->emergency }}</strong></td>
            </tr>
        </table>
    </div>
    <div class="col-md-6" style="margin-bottom: 20px;">
        <div class="card">
            <div class="card-header bg-white text-primary">
                <strong>STATE INCIDENTS (Sample content)</strong>
            </div>
            <div class="card-body" style="height: 302px; overflow-y: scroll;">
                <div id="incidents" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active text-center">
                            <p class="text-danger">Armed Robbery</p>
                            <h5 class="text-info">Armed bandits in Lagos</h5>
                            <p>
                                Lagos State<br />Saturday, April 11, 2020
                            </p>
                            <p>Hoodlums attack Agege, Ogba and Iju areas of Lagos. Residents fight back.</p>
                        </div>
                        <div class="carousel-item text-center">
                            <p class="text-danger">Incident Category</p>
                            <h5 class="text-info">Title of incident</h5>
                            <p>
                                Lagos State<br />Saturday, April 11, 2020
                            </p>
                            <p>Some information about the incident. Some information about the incident. Some information about the incident.</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#incidents" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon text-danger" aria-hidden="true">&lt;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#incidents" role="button" data-slide="next">
                        <span class="carousel-control-next-icon text-danger" aria-hidden="true">&gt;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<p align="justify">
    {{ $state->info }}
</p>
@endsection