@extends('formlistmaster')
@section('form-name', 'Available Indicators')
@section('form-design')
<div id="result">
    <table width="60%" class="matrix">
        <tr>
            <th>Indicator Name</th>
            <th colspan="2">Description</th>
            <th>Number</th>
        </tr>
        @foreach ($indicators as $indicator)
        <tr>
            <td>{{$indicator->name}}</td>
            <td colspan="2">{{$indicator->description}}</td>
            <td>{{$indicator->indicator_number}}</td>
        </tr>
        @endforeach
    </table>
</div>
@stop