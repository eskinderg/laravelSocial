

@if(Session::has('flash_message'))

    <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="trye">&times;</button>

        {{Session::get('flash_message')}}

    </div>

@endif
