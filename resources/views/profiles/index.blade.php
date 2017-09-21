@extends('layouts.app')

@section('content')

<div class="container">
  @foreach($threads as $thread)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">{{ $thread['fullname']}} published <a href="#{{ $thread['text-head-link'] }}">{{ $thread['text-head'] }}</a></div>

                <div class="panel-body">

                    <article>
                        <div>
                            <h4>

                            </h4>
                        </div>
                        <div class="body">
                            {{ $thread['text-body'] }}
                        </div>
                    </article>

                </div>
            </div>

        </div>
    </div>
    @endforeach
</div>
@endsection
