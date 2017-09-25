@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>

                <div class="panel-body">
                  @foreach($threads as $thread)
                    <article>
                        <div>
                            <h4>
                                {{ $thread['title'] }}
                            </h4>
                        </div>
                        <div class="body">
                            {{ $thread['body'] }}
                        </div>
                    </article>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
          <div class="panel panel-default">
              <div class="panel-body">
                  <article>
                      <div>
                          <h3>
                              Nafn:
                          </h3>
                          <p>Adrian Krzysztof Czaplinski</p>
                      </div>
                      <div class="body">
                        <h3>Netfang:</h3>
                          <p>adrian@adrianchamp.com</p>
                        <h3>Fjöldi þráða: 14</h3>
                      </div>
                  </article>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
