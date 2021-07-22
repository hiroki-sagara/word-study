@if (count($posts) > 0)
    <ul class="list-unstyled">
        @foreach ($posts as $post)
            <div>
                {{-- 投稿内容 --}}
                <table class="table table-bordered" id='table'>
                    <tr>
                        <th>単語</th>
                        <td>{{ $post->word }}</td>
                    </tr>
                    <tr>
                        <th>日本語訳</th>
                        <td>{{ $post->japanese }}</td>
                    </tr>
                </table>
                <div class='destroy'>
                    @if (Auth::id() == $post->user_id)
                        {{-- 投稿削除ボタンのフォーム --}}
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                            {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $posts->links() }}
@endif