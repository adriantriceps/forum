@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
  <h1>Adrian Krzyszof Czaplinski <small>Member for 3 weeks</small></h1>
  <hr>

    <div class="row">

        <div class="col-md-8 ">

          @foreach($threads as $thread)
            <div class="panel panel-default">

                <div class="panel-heading">{{ $thread['fullname']}} published <a href="#{{ $thread['text-head-link'] }}">{{ $thread['text-head'] }}</a></div>

                <div class="panel-body">

                    <article>

                        <div class="body">
                            {{ $thread['text-body'] }}
                        </div>
                    </article>

                </div>
            </div>
            @endforeach
        </div>

        <div class="col-md-4 ">


            <div class="panel panel-default">
                <div class="panel-body">

                    <article>
                        <div>
                            <h4>
                              Name
                            </h4>
                        </div>
                        <div class="body">
                          <p>Adrian Krzysztof Czaplinski</p>
                        </div>

                        <div>
                            <h4>
                              Netfang
                            </h4>
                        </div>
                        <div class="body">
                          <p>addicool@cooladdi.club</p>
                        </div>
                        <div>
                            <h4>
                              Fjöldi Þráða:14
                            </h4>
                        </div>
                    </article>

                </div>
            </div>

        </div>

    </div>




    </div>
    </div>
</div>
@endsection
