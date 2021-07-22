{!! Form::open(['route' => 'posts.store']) !!}
    <div class="form-group">
        {!! Form::textarea('word', null, ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::textarea('japanese', null, ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}