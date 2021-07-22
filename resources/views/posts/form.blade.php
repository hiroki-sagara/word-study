{!! Form::open(['route' => 'posts.store']) !!}
    <div class="form-group">
        {!! Form::label('content', '単語:') !!}
        {!! Form::textarea('word', null, ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::label('content', '日本語訳:') !!}
        {!! Form::textarea('japanese', null, ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}