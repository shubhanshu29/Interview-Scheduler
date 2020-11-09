@extends('layouts.app')
    @section('content')
        <center>
        <h1>Update Meeting Details</h1><hr>
        {!! Form::open(['action' => ['InterviewsController@update', $interview->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group" style="width:1000px">
                {{Form::label('start_at', 'Start at')}}
                {{Form::text('start_at', $interview->start_at, ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD HH:MM:SS'])}}
            </div>
            <div class="form-group" style="width:1000px">
                {{Form::label('end_at', 'Ending Time')}}
                {{Form::text('end_at', $interview->end_at, ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD HH:MM:SS'])}}
            </div>
            <br>
            Select Participants(Atleast 2): 
            <br><br><br>
            @foreach($users as $user)
                <p>{{$user->name}} 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                    <input type="radio" name="<?php echo $user->id; ?>"  id="1st-choice-q<?php echo $user->id; ?>" value="1"/>Add to meeting
                    <input type="radio" name="<?php echo $user->id; ?>"  id="1st-choice-q<?php echo $user->id; ?>; ?>" value="0" checked/>Dont add to meeting
                </p>
             @endforeach
             <br>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            <a href= "/interviews/view"> {{Form::button('View all interviews', ['class'=>'btn btn-primary'])}}</a>
        {!! Form::close() !!}
        </center>
    @endsection
