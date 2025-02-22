@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row separate">
    <div class="col-md-12 col-lg-12 col-sm-12">

      <h3>{{ $song->name}}</h3>
        <p class="italic">
        by {{ $song->artist->name}}</p>

        <p class=>
        Key: {{ $song->key }}
      </p>
        <p>
        Capo: {{ $song->capo}}</p>

      <div class="panel panel-default">
            <!-- <div class="panel-heading">Required Information:</div> -->
                <div class="panel-body">

                  <p class="lead">
                    <pre class="standardize">

                      {{ $song->chords}}
                      </pre>
                  </p>

                </div>
      </div>
    </div>
  </div>





@endsection
