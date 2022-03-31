<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Current Work Requests</title>
</head>
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
        font-size: 20px;
        white-space: wrap;
        overflow: hidden;
    }
    form{
        text-align: center;
    }

</style>
    <body>
        <h1>Current Work Requests</h1>
        <form action='edit' method="POST">
            {{ csrf_field() }}
            <table>
                <tr>
                <th>Action</th>
                <th>Job ID</th>
                <th>Customer Name</th>
                <th>Assigned Foreman</th>
                <th>Description</th>
                <th>Materials</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                </tr>
                @foreach($data as $row)
                <tr>
                <td><button style = "background-color: #7fe97cc2;" type="submit" value={{ $row->Submission_Id }} name="activate">Activate</button><br>&nbsp;<button style = "background-color: red;" type="submit" value={{ $row->Submission_Id }} name="delete">Delete</button></td>
                <td>{{ $row->Submission_Id }}</td>
                <td>{{ $row->Job_Name }}</td>
                <td>{{ $row->Employee }}</td>
                <td>{{ $row->Description }}</td>
                <td>{{ $row->Materials }}</td>
                <td>{{ $row->Start_Date }}</td>
                <td>{{ $row->End_Date }}</td>          
                <td>{{ $row->Status }}</td>             
                @endforeach
                </tr>
            </table>
                <button type="submit" name="workRequest" formaction="{{ url('/workRequest') }}">New Request</button>&nbsp;&nbsp;&nbsp;
                <button type="submit" formaction="{{ url('/dashboard') }}">Home</button>&nbsp;&nbsp;&nbsp;        
            </form>
    </body>
</html>