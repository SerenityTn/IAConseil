{!! Form::open(['method' => 'POST', 'route' => 'admin.messages.respond', 'class' => '']) !!}

    <legend>{{ $message->sujet }}</legend>
    <p>{{ $message->contenu }}</p>

    <hr/>

    <div class="form-group{{ $errors->has('response') ? ' has-error' : '' }}">
        {!! Form::hidden('nom', '{{ $user->nom }}') !!}
        {!! Form::hidden('email', '{{ $user->email }}') !!}
        {!! Form::label('response', 'Répondre à ce message') !!}
        {!! Form::textarea('response', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('response') }}</small>
    </div>

    {!! Form::submit("Envoyer", ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
