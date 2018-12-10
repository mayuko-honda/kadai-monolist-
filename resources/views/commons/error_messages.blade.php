@if（count（$ errors）> 0）
    @foreach（$ errors-> all（）は$ errorとして）
        <div class = "alert alert-warning"> {{$ error}} </ div>
    @endforeach
@endif