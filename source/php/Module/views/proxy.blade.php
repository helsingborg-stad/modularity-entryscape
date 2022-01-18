@php
 ob_start();
@endphp
@include("dataset.datasetView")
@php
ob_end_flush();
$content = ob_get_contents();

preg_replace( "/\r|\n/", "", $content); 
@endphp