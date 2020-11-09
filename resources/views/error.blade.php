    @extends('layouts.app')

    @section('content')
        <center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Error in adding</div>
                
                <div class="card-body">
                    {{$message}}
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><hr>
    @endsection

