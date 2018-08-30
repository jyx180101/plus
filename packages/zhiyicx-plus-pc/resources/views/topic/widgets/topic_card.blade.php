<div class="w-topic-card">
    <div class="bg"
    @if($topic['logo'] ?? false)
    style='background-image: url({{ url("/api/v2/files/{$topic['logo']}") }});'
    @endif
    ></div>
    <a class="mask" href='{{ route("pc:topicDetail", ["topic_id" => $topic["id"]]) }}'>
        <div class="decor"><h2>{{$topic['name']}}</h2></div>
    </a>
</div>
