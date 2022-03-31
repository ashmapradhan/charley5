<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Work Request</title>
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
    }
    #inputArea{
        margin: auto;
        border: 3px solid #bebec0c2;
        padding: 30px;
        color: white;
        width: 90%;
        text-align: left;
        font-size: 25px;
    }
    textarea{
        height: 20%;
        width: 90%;
        
    }
    #buttons{
        text-align: left;
    }
    #botbut{
        text-align: center;
    }
</style>
    <body>
        <!-- action="jobform_dev.blade.php" -->
        <form action="/create"  method="POST">
            {{ csrf_field() }}
            <h1>New Work Request</h1>
           <div id="inputArea">
            Customer Name: <input type="text" name="Job_Name">&nbsp;&nbsp;&nbsp;
            <label for="employees">Assign a Foreman:</label>
                <select name="Employee">
                <option></option>
                    @foreach ($data as $row)
                    <option value="{{ $row->Employee_Name }}">{{ $row->Employee_Name }}</option>                        
                    @endforeach
            </select><br>
                Job Description:<br><textarea type="text" name="Description"></textarea><br>
                Required Materials:<br><textarea type="text" name="Materials"></textarea><br>
                Start Date:<input type="date" name="Start_Date">&nbsp;&nbsp;&nbsp;
                End Date:<input type="date" name="End_Date"><br>
                &nbsp;
                <div id="buttons">
                    <button type="submit" name="submit">Submit Request</button>&nbsp;&nbsp;&nbsp;
                    <button type="submit" value="curWrk" formaction="{{url('/workRequest') }}">Clear Form</button>
                </div>
           </div><br>
           <div id="botbut">
            <button type="submit" value="curWrk" formaction="{{url('/currentJobs') }}">View Requests</button>&nbsp;&nbsp;&nbsp;
            <button type="submit" formaction="{{ url('/dashboard') }}">Home</button>&nbsp;&nbsp;&nbsp;

        </div>
        </form>
    </body>
</html>