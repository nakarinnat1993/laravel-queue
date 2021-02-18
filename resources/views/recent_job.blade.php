@extends('layouts.app')

@section('content')
    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Jobs</th>
            <th>Available</th>
            <th>Created</th>
            <th>Delete</th>
        </thead>
        <tbody>

            @foreach ($jobs as $key=>$job)
                <?php
                $jsonData = json_decode($job->payload);
                $jobName = explode("\\",$jsonData->displayName);
                // print_r($jobName);
                ?>
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $jobName[2] }}</td>
                    <td>{{ date("d M Y H:i",$job->available_at) }}</td>
                    <td>{{ date_format($job->created_at,"d M Y H:i") }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
