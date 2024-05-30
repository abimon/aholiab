@extends('layouts.dash',['title'=>'Events'])
@section('dashboard')
<div class="container">
    <div class="row">
        @foreach ($events as $event)
        <div class="col-md-4 card p-2">
            <div class="d-flex justify-content-between {{$event->isDone?'bg-success text-light':'bg-warning text-dark'}}  rounded p-1">
                <div class=""><i class="fa fa-calendar"></i> {{date_format(date_create($event->from),'jS F')}} - {{date_format(date_create($event->to),'jS F Y')}}</div>
                <div class=""><i class="bi bi-geo-alt" aria-hidden="true"></i> {{$event->venue}}</div>
            </div>
            <div class="p-1">
                <?php echo html_entity_decode(mb_substr($event->report, 0, 300)); ?>...
                <div class="d-flex justify-content-between">
                <a href="{{route('event.edit',$event->id)}}">Edit...</a>
                    <a href="{{route('event.show',$event->id)}}">Read more ...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection