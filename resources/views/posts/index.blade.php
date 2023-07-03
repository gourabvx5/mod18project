

@foreach($posts as $post)
    <div class="post">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        
        <h3>Categories:</h3>
        <ul>
            @foreach($post->categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
        </ul>
    </div>
@endforeach
