@extends('layouts.application')

@section('content')

   <div id="fullpage">
	    <div class="section">
	        <div class="container text-center">
                <img src="{{ asset('images/logo/logo.png') }}" class="img-fluid index-logo" alt="Jon Williams">
	        </div>
	    </div>
	</div>

    <script type="text/javascript" src="{{ asset('js/fullpage.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scrolloverflow.js') }}"></script>
    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', {
            sectionsColor: ['whitesmoke'],
            scrollOverflow: true
        });
    </script>

@endsection