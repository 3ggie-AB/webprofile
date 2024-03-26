<div class="card border-0 text-center" style="width: 10rem; margin:10px;">
  <a href="{{ $card_link ?? '$card_link' }}">
<img src="{{ $card_src ?? '$card_src' }}" class="card-img-top" alt="...">
<div class="card-body">
  <p class="card-text">{{ $card_text ?? '$card_text' }}</p>
</div>
</a>
</div>