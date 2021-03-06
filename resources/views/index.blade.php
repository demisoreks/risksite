@extends('app', ['page_title' => 'Lockdown Status'])

@section('content')
<script type="text/javascript">
    var states = <?php echo json_encode($states); ?>;
    var lockdown_status = <?php echo json_encode($lockdown_status); ?>;
    var lockdown_color = <?php echo json_encode($lockdown_color); ?>;
    var lockdown_color_h = <?php echo json_encode($lockdown_color_h); ?>;
</script>
{!! Html::script('js/mapdata.js') !!}
{!! Html::script('js/countrymap.js') !!}
<div class="text-center" style="margin-bottom: 10px;">
    <i class="fas fa-circle" style="color: #FF0000;"></i> Lockdown ({{ $total_count }}) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!--<i class="fas fa-circle" style="color: #FFA6A6;"></i> Partial &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
    <i class="fas fa-circle" style="color: #88A4BC;"></i> No Lockdown ({{ $none_count }})
</div>
<div class="row">
    <div class="col-md-12">
        <div id="map"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-hover table-striped" width="100%">
            @if (count($lockdown_states) > 0)
            <tr>
                <td>Lockdown</td>
                <td>{{ implode(", ", $lockdown_states) }}</td>
            </tr>
            @endif
            @if (count($no_lockdown_states) > 0)
            <tr>
                <td>No Lockdown</td>
                <td>{{ implode(", ", $no_lockdown_states) }}</td>
            </tr>
            @endif
        </table>
    </div>
</div>
@endsection