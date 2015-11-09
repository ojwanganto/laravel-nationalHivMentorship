@extends('formlistmaster')
@section('form-name', 'Registered Persons')
@section('inline-js')
<script type="text/javascript">

    $(document).ready(function(){
        var dataTable = $("#personList").dataTable();
    });

</script>
@stop
@section('form-design')
<div id="result">
    <table width="60%" id="personList">
        <thead>
        <tr>
            <td><b>First Name</b></td>
            <td><b>Last Name</b></td>
            <td><b>Gender</b></td>
            <td><b>Cadre</b></td>
            <td><b>Facility</b></td>
        </tr>
        </thead>
        <tbody>
        @foreach ($persons as $person)
        <tr>
            <td>{{$person->first_name}}</td>
            <td>{{$person->last_name}}</td>
            <td>{{$person->gender}}</td>
            <td>{{$person->cadre}}</td>
            <td>{{$person->facility}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop