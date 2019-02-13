<ol>
@foreach ($pred as $p)
<li><a href='{{url("/predmets/{$p->id}")}}'>{{$p->nazpred}}</a>
        <span class="badge badge-info">{{$p->upisanostud}}</span>
</li>
@endforeach
</ol>