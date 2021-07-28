<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cosmio Tech</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <style>
        #Employees tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #Employees tr:hover {
            background-color: #ddd;
        }

        #Employees {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 70%;
            text-align: center;
            font-size: 25px;
            margin-left: auto;
            margin-right: auto;

        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        th {
            background-color: #04AA6D;
            color: white;
            padding: 10px 20px;
        }

        td {
            padding: 10px 20px;
        }

        a {
            background-color: #4CAF50;
            border: none;
            border-radius: 20px;
            color: white;
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        h1 {
            font-family: Geneva;
            font-size: 100px;
            text-align: center;
            color: #bfb3b2;
            margin-bottom: -65px;
        }
    </style>
</head>

<body>
    <h1>Cosmio</h1>
    <br><br><br><br>
    {{session('msg')}}
    <div class="flex-center position-ref full-height">

        <a href="home">HOME</a>
        <a href="Employees_Create">Add Employees</a>
        <br><br>

        <table id="Employees">
            <tr>

                <th>ID</th>
                <th>Company_Id</th>
                <th>Frist_Name</th>
                <th>Last_Name</th>
                <th>Email</th>
                <th>PNumber</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($EmployeesArr as $Employees)
            <tr>
                <td>{{$Employees->ID}}</td>
                <td>{{$Employees->Company_Id}}</td>
                <td>{{$Employees->Frist_Name}}</td>
                <td>{{$Employees->Last_Name}}</td>
                <td>{{$Employees->Email}}</td>
                <td>{{$Employees->PNumber}}</td>
                <td><a href="Employees_Edit/{{$Employees->ID}}">Edit</a></td>
                <td><a href="Employees_Delete/{{$Employees->ID}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>