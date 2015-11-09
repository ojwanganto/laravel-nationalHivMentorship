@extends('formlistmaster')
@section('form-name', 'Indicators')
@section('inline-js')
<script type="text/javascript">

    $(document).ready(function(){
        var dataTable = $("#indicatorList").dataTable();
    });

</script>
@stop
@section('form-design')
<div id="result">
    <table id="indicatorList">
        <thead>
        <tr>
            <td><b>Number</b></td>
            <td><b>Indicator Name</b></td>
            <td><b>Description</b></td>
            
        </tr>
        </thead>
        <tbody>
        @foreach ($indicators as $indicator)
        <tr>
            <td>{{$indicator->indicator_id}}</td>
            <td>{{$indicator->name}}</td>
            <td>{{$indicator->description}}</td>
        @endforeach
        </tbody>
    </table>
</div>
@stop