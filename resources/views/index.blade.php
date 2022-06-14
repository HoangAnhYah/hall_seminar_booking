@extends ('layouts.layout')
@section('title')
Create number page
@endsection
@section('body')
@if (count($cities)>0)
{{$i=1}}
<div>
    <div class="col-6 container">
        @foreach ($cities as $city)
        <tr>
            <th scope="row">
                {{$i++}}
            </th>
            <td>{{$city->Id_Member</td>
            <td>{{$city->Name_Member</td>
            <td>{{$city->Member_Contact}}</td>
            <td>{{$city->Member_Email</td>
        </tr>
        @endforeach
    </div>
</div>
@endif
@endsection