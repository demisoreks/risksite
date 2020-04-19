@extends('app', ['page_title' => 'National Risk Profile'])

@section('content')
<script type="text/javascript">
    var states = <?php echo json_encode($states); ?>;
    var risk_rating = <?php echo json_encode($risk_rating); ?>;
    var risk_color = <?php echo json_encode($risk_color); ?>;
    var risk_color_h = <?php echo json_encode($risk_color_h); ?>;
</script>
{!! Html::script('js/mapdata1.js') !!}
{!! Html::script('js/countrymap.js') !!}
<div class="text-center" style="margin-bottom: 10px;">
    <i class="fas fa-circle" style="color: #FF0000;"></i> High &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fas fa-circle" style="color: #FF9900;"></i> Medium &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fas fa-circle" style="color: #00CC00;"></i> Low &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fas fa-circle" style="color: #88A4BC;"></i> Unknown 
</div>
<div id="map"></div>
@endsection