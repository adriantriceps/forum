@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>{{ $thread->title}}</h4></div>

                <div class="panel-body">
                    <article>
                        <div>
                            <h4>
                                {{ $thread->body }}
                            </h4>
                        </div>
                        <div class="body">

                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
