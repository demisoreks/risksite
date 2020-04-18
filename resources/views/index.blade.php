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
<div id="map"></div>
@endsection