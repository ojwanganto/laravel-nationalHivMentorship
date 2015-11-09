@extends('formlistmaster')
@section('form-name', 'Sessions')
@section('inline-js')
<script type="text/javascript">

    $(document).ready(function(){
        var dataTable = $("#sessionList").dataTable();
    });

</script>
@stop
@section('form-design')
<div id="result">
    <table id="sessionList" width='60%'>
        <thead>
        <tr>
            <td><b>Date</b></td>
            <td><b>Session Type</b></td>
            <td><b>Mentor</b></td>
            <td><b>Mentee</b></td>
            <td><b>Facility</b></td> 
            <td><b>Action</b></td> 
        </tr>
        </thead>
        <tbody>
        @foreach ($mSessions as $ms)
            <tr>
                <td>{{$ms->created_at}}</td>
                <td>{{$ms->sessionTool->name}}</td>
                <td>{{$ms->mentor->person->first_name}} {{$ms->mentor->person->last_name}}</td>
                <td>{{$ms->mentee->person->first_name}} {{$ms->mentee->person->last_name}}</td>
                <td>{{$ms->facility}}</td>
                <td><a href="session/{{$ms->session_id}}">View Tool</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop