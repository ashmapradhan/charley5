<!DOCTYPE html>
<html>
<head>
    <title>Submission Complete</title>
        <!-- CSS -->
        <style>
            *{
                box-sizing: border-box;
            }
            body{
                background: #030e42c2;
            }
            h1{
                color: white;
                text-align: center;
                padding: 20px 10px; 
            }
            table{
                margin: 20px auto;
                border: 3px solid #bebec0c2;
                padding: 10px;
                color: white;
                width: 90%;
            }
            table th, table td{
                padding:8px;
                border: #bebec0c2;
                text-align: left;
            }
            form{
                text-align: center;
            }
        </style>
</head>
<body>
    <h1>Work activated! Assigned foreman will be notified.</h1>
    <form method="POST">
        {{ csrf_field() }}
        <button type="submit" value="curWrk" formaction="{{url('/currentJobs') }}">View Requests</button>&nbsp;&nbsp;&nbsp;
        <button type="submit" value="workRequest" formaction="{{ URL('/workRequest') }}">New Request</button>&nbsp;&nbsp;&nbsp;
        </form>
</body>
</html>

