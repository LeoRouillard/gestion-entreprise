<table>
    <th>
        <td>ID</td>
        <td>Slug</td>
        <td>Email</td>
    </th>
    @foreach($organisation as $org)
    <tr>
        <td>{{$org->id}}</td>
        <td>{{$org->slug}}</td>
        <td>{{$org->email}}</td>
    </tr>
    @endforeach
</table>