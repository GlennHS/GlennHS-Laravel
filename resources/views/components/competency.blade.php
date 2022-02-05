<div class="competency">
    <img src="{{ URL::asset($imageLink) }}" />
    <div class="card-content">
        <h4>{{ $name }}</h4>
        <h5>Skill:</h5>
        <span class="stars">{{ str_repeat("⭐", (int)$stars); }}</span>
        <h5>Years: {{ $years }}</h5>
    </div>
</div>