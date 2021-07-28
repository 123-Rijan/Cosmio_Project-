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
            margin-left: 200px;
            margin-top: 200px;
            width: 70%;
            text-align: left;
            font-size: 60px;
        }

        input[type=textName],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 4px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            text-align: left;
            padding: 15px 100px;
            font-size: 40px;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            font-size: 40px;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h1 {
            color: grey;
            position: center;
            text-align: center;
            font-size: 100px;
            margin-bottom: -120px;
        }

        a {
            background-color: grey;
            border: none;
            border-radius: 20px;
            color: white;
            padding: 10px 30px;
            text-align: center;
            text-decoration: none;
            margin-top: -100px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <form method="Post" action="{{route('Employees_Update', [$Employees->ID])}}">
        @csrf
        <table id="Employees">
            <h1>Insert Company Details</h1>
            <tr>
                <td>ID</td>
                <td><input type="textName" name="ID" required Value="{{$Employees->ID}}"></td>
            </tr>
            <tr>
                <td>Company_Id</td>
                <td><input type="textName" name="Company_Id" required Value="{{$Employees->Company_Id}}"></td>
            </tr>
            <tr>
                <td>Frist_Name</td>
                <td><input type="textName" name="Frist_Name" required Value="{{$Employees->Frist_Name}}"></td>
            </tr>
            <tr>
                <td>Last_Name</td>
                <td><input type="textName" name="Last_Name" required Value="{{$Employees->Last_Name}}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="textName" name="Email" required Value="{{$Employees->Email}}"></td>
            </tr>
            <tr>
                <td>PNumber</td>
                <td><input type="textName" name="PNumber" required Value="{{$Employees->PNumber}}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="Submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>