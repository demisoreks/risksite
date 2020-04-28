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
                <td class="@if ($state->risk_rating == 'High') text-danger @elseif ($state->risk_rating == 'Medium') text-warning @elseif ($state->risk_rating == 'Low') text-success @endif">
                    <strong>{{ $state->risk_rating }}</strong>
                </td>
            </tr>
            <tr>
                <td>COVID-19 Cases</td>
                <td><strong>{{ number_format($state->covid_count, 0) }} Confirmed</strong></td>
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
                <strong>STATE INCIDENTS</strong>
            </div>
            <div class="card-body" style="height: 357px; overflow-y: scroll;">
                <div id="incidents" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $count = 0; ?>
                        @foreach ($incidents as $incident)
                        <div class="carousel-item @if ($count == 0) active @endif text-center">
                            <p class="text-danger">{{ $incident->type }}</p>
                            <h5 class="text-info">{{ $incident->title }}</h5>
                            <p>
                                {{ $incident->state }} State<br />{{ Carbon\Carbon::parse($incident->incident_date)->format('l, F j, Y') }}
                            </p>
                            <p>{{ $incident->info }}</p>
                        </div>
                        <?php $count ++; ?>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#incidents" role="button" data-slide="prev" style="align-items: flex-start; font-weight: bold;">
                        <span class="carousel-control-prev-icon text-danger" aria-hidden="true">&lt;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#incidents" role="button" data-slide="next" style="align-items: flex-start; font-weight: bold;">
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
@if ($state->risk_rating)
<h4>Travel Advisory</h4>
@if ($state->risk_rating == "High")
<p align="justify"><strong>Do Not Travel:</strong> This is the highest advisory level due to greater likelihood of life-threatening risks. During an emergency, Armada Halogen advises that citizens and non-citizen who consider traveling to the state consult the Armada Halogen for services to reduce the risk and mitigate further hazard to life and property. Conditions in any state may change at any time.</p>
@elseif ($state->risk_rating == "Medium")
<p align="justify"><strong>Exercise Increased Caution:</strong> Be aware of heightened or serious risks to safety and security. Armada Halogen provides additional advice for travelers in these areas in the Travel Advisory. Conditions in any state may change at any time.</p>
@elseif ($state->risk_rating == "Low")
<p align="justify"><strong>Exercise Normal Precautions:</strong> This is the lowest advisory level for safety and security risk. There is some risk for any international travel or local travel. Conditions in other state/countries may differ from those in the Nigeria and may change at any time.</p>
@endif
<p align="justify">For more information, visit <a target="_blank" href="https://armadahalogen.com/">Armada Halogen</a>.</p>
@endif
<h4>Incident Statistics (Last 7 Days)</h4>
<div class="row">
    <div class="col-md-6">
        {!! $date_chart->container() !!}
        {!! $date_chart->script() !!}
    </div>
    <div class="col-md-6">
        {!! $type_chart->container() !!}
        {!! $type_chart->script() !!}
    </div>
</div>
@endsection