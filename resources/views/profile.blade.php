@extends('app', ['page_title' => 'National Risk Profile'])

@section('content')
<?php
$data = [
    'test' => 'Working'
];
?>
<script type="text/javascript">
    var data = <?php echo json_encode($data); ?>;
</script>
{!! Html::script('js/mapdata1.js') !!}
{!! Html::script('js/countrymap.js') !!}
<div id="map"></div>
@endsection