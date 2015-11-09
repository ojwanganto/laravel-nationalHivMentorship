@extends('formlistmaster')
@section('form-name', 'Sessions')
@section('form-design')
<div id="result">
    <table id="sessionList" width='60%'>
        <tr>
            <td><b>Date</b></td>
            <td><b>Session Type</b></td>
            <td><b>Mentor</b></td>
            <td><b>Mentee</b></td>
            <td><b>Facility</b></td>
        </tr>
        <tr>
            <td>{{$mentorshipSession->created_at}}</td>
            <td>{{$mentorshipSession->sessionTool->name}}</td>
            <td>{{$mentorshipSession->mentor->person->first_name}} {{$mentorshipSession->mentor->person->last_name}}</td>
            <td>{{$mentorshipSession->mentee->person->first_name}} {{$mentorshipSession->mentee->person->last_name}}</td>
            <td>{{$mentorshipSession->facility}}</td>
        </tr>
        <tr><td colspan="5">&nbsp;</td></tr>
    </table>
    <table title="Session Score">
        <tr>
            <td>Indicator</td>
            <td>Score</td>
            <td>Comment</td>
        </tr>
        @foreach ($mentorshipSession->sessionScore as $ss)
            <tr>
                <td>{{$ss->indicator_id}}</td>
                <td>{{$ss->score}}</td>
                <td>{{$ss->comment}}</td>
            </tr>
        @endforeach
    </table>
</div>
@stop