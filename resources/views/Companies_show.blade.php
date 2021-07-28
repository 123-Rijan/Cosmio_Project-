<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cosmio Tech</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <style>
        #Company tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #Company tr:hover {
            background-color: #ddd;
        }

        #Company {
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

        th
         {
            background-color: #04AA6D;
            color: white;
            padding: 10px 20px;
        }
        td{
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
    <h1>Cosmio Tech</h1>
    <br><br> <br><br>
    <br><br> <br><br>
    {{session('msg')}}
    <div class="flex-center position-ref full-height">

        <a href="home">HOME</a>
        <a href="Companies_Create">Add Company</a>
        <table id="Company">
            <br><br> <br><br>
            <tr>
                <th>Company ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Website</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
            @foreach($CompaniesArr as $Companies)
            <tr>
                <td>{{$Companies->id}}</td>
                <td>{{$Companies->Name}}</td>
                <td>{{$Companies->Email}}</td>
                <td><img src="Logo/{{$Companies->logo}}" width="10px" height="20px"></td>
                <td>{{$Companies->Website}}</td>
                <td><a href="Companies_Edit/{{$Companies->id}}">Edit</a></td>
                <td><a href="Companies_Delete/{{$Companies->id}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>