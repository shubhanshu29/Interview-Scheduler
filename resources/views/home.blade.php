<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>All interviews</title>


    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">All interviews</div>
                
                <div class="card-body">

                @foreach($interviews as $interview)
                    <p>Interview Id: {{$interview->id}}<br> 
                        Start Time: {{$interview->start_at}}<br>
                        End Time: {{$interview->end_at}}<br>
                        Participants(User ID): 
                        @foreach($users as $user)
                            @if($interview->$user==1)
                                {{$user}}
                            @endif
                        @endforeach
                        <br>
                        <a href="/interviews/view/{{$interview->id}}">
                        {{Form::button('Edit', ['class'=>'btn btn-primary'])}}
                    </a></p><br><br>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><hr>

@endsection
