<h2>All Team Members</h2>

@foreach ($team as $member)
<li>
    <ul>
        <a href="/team/{{$member['id']}}">{{$member['name']}}</a>
        <p>{{$member['role']}}</p>
    </ul>
</li>
@endforeach