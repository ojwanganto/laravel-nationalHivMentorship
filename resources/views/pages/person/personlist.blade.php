@extends('formlistmaster')
@section('form-name', 'Registered Persons')
@section('form-design')
<div id="result">
    <table width="60%" class="matrix">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Cadre</th>
            <th>Facility</th>
        </tr>
        @foreach ($persons as $person)
        <tr>
            <td>{{$person->first_name}}</td>
            <td>{{$person->last_name}}</td>
            <td>{{$person->gender}}</td>
            <td>{{$person->cadre}}</td>
            <td>{{$person->facility}}</td>
        </tr>
        @endforeach
    </table>
</div>
@stop