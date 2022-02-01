<div class="competency">
    <img src="{{ URL::asset($image_link) }}" />
    <div class="card-content">
        <h4>{{$name}}</h4>
        <h5>Skill:</h5>
        <span class="stars">{{"⭐" * $stars}}</span>
        <h5>Years: {{ $years }}</h5>
    </div>
</div>