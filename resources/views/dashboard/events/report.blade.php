@extends('layouts.dash',['title'=>'Report'])
@section('dashboard')
<div class="container">
    <div class="">
        <form action="{{route('event.update',1)}}" method="post">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="row mb-2">
                    <div class="col-md-6 mb-2">
                        <div class="form-floating">
                            <select class="form-select" name="event_id" id="" required>
                                <option value="">--------Select Event--------</option>
                                @foreach ($events as $event)
                                <option value="{{$event->id}}">{{$event->title}}</option>
                                @endforeach
                            </select>
                            <label for="">Title</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-floating">
                            <input type="date" name="to" id="" class="form-control">
                            <label for="">Culmination Date</label>
                        </div>
                    </div>
                </div>
                <textarea name="report" id="editor1" cols="30" rows="10"></textarea>
                <div class="modal-footer">
                    <button class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection