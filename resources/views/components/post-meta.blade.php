<div class="text-sm">
  Posted {{ $post->date->diffForHumans() }} by 
  <a class="no-underline text-indigo-500 hover:text-indigo-700 transition-colors duration-100" href="/authors/{{ $post->author }}">
    {{ $post->author_name }}
  </a>
</div>