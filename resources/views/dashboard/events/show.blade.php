@extends('layouts.dash',['title'=>($event->title)])
@section('dashboard')
<div class="container bg-light">
    <div class="d-flex justify-content-between p-2">
        <div class=""><i class="fa fa-calendar"></i> {{date_format(date_create($event->from),'jS F')}} - {{date_format(date_create($event->to),'jS F Y')}}</div>
        <div class=""><i class="bi bi-geo-alt" aria-hidden="true"></i> {{$event->venue}}</div>
    </div>
    <div  class="p-1">
        <?php echo html_entity_decode($event->report); ?>
    </div>
</div>
@endsection