@extends('app', ['page_title' => 'Lockdown Status'])

@section('content')
<?php
$data = [
    'test' => 'Working'
];
?>
<script type="text/javascript">
    var data = <?php echo json_encode($data); ?>;
</script>
{!! Html::script('js/mapdata.js') !!}
{!! Html::script('js/countrymap.js') !!}
<div id="map"></div>
@endsection