@if(count($errors) > 0)
    <div class="row">
    <div class="col-md-12">
            {{--{{ dd($errors) }}--}}
            <ul>
                @foreach( $errors->all() as $error)
                    <li class="text-danger">
                        <h4>
                            {{ $error }}
                        </h4>
                    </li>
                @endforeach
            </ul>
    </div>
</div>
@endif

@if(Session::has('messeage'))
    <div class="row">
    <div class="col-md-6 col-md-offset-3 label-success">
                <h5 class="text-center  succcess-message-text">
                    {{ Session::get('messeage') }}
                </h5>
    </div>
    </div>
@endif

