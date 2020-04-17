@extends('app', ['page_title' => 'State Information'])

@section('content')
<div class="row">
    <div class="col-md-6">
        <table class="table table-bordered table-hover table-striped" width="100%">
            <tr>
                <td width="50%">State Name</td>
                <td><strong>Lagos</strong></td>
            </tr>
            <tr>
                <td>Lockdown Status</td>
                <td><strong>Yes</strong></td>
            </tr>
            <tr>
                <td>Lockdown Policy</td>
                <td><a class="btn btn-primary btn-sm" href="#"><strong>Click Here</strong></a></td>
            </tr>
            <tr>
                <td>End of Lockdown</td>
                <td><strong>April 27, 2020</strong></td>
            </tr>
            <tr>
                <td>Risk Rating</td>
                <td class="text-danger"><strong>High</strong></td>
            </tr>
        </table>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-white text-primary">
                <strong>STATE INCIDENTS</strong>
            </div>
            <div class="card-body" style="height: 248px; overflow-y: scroll;">
                <p>
                    <a href="#">FG extends lockdown by another 14 days</a>
                </p>
                <p>
                    <a href="#">Global confirmed cases of COVID-19 reaches 2 million</a>
                </p>
                <p>
                    <a href="#">Security issues amidst the coronavirus lockdown</a>
                </p>
                <p>
                    <a href="#">Lockdown: Citizens appeal to FG for support</a>
                </p>
            </div>
        </div>
    </div>
</div>
<p align="justify">
    Lockdown info and any other details. Lockdown info and any other details. Lockdown info and any other details. Lockdown info and any other details. Lockdown info and any other details. Lockdown info and any other details. Lockdown info and any other details. Lockdown info and any other details. Lockdown info and any other details. 
</p>
@endsection