 <div class="post-preview">
      <a href="{{ url('post', $post->slug) }}">
         <h2 class="post-title">
              {{$post->title}}
        </h2>
         <h3 class="post-subtitle">
             {{$post->excerpt}}
         </h3>
    </a>
    <p class="post-meta">Posted by <a href="#">{{$post->author->name}}</a> {{ $post->created_at->format('M d Y')}}</p>
</div>