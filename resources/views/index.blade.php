<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Data</title>

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    

    <section class="content">
        <div class="container">
            <button class="btn btn-primary" id="back"><a href="ajaxinsert">Add Data</a> </button>
            <table class="table mt-3 table-light">
                <thead class="table-dark">
                    <tr>
                        <td>No.</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Password</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody class="tbody">
                    @foreach ($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->pwd}}</td>
                        <td>
                            <a href="/edit1/{{$d->id}}" class="btn btn-info" id="edit">Edit</a>
                            <a href="/delete/{{$d->id}}" class="btn btn-danger" id="delete">Delete</a>
                        </td>
                    </tr>   
                    @endforeach    
                </tbody>
              </table>  
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            console.log("ok");

            $("#back").click(function(){
                $("html, body").load("ajaxinsert");
            });

            $('#edit').on("click",function(){
                $("")

            $.ajax({
                url:"{{route('edit')}}",
    
                success:function(response){
                    console.log(response);
                }
            });
        });
    });
    </script>

</body>
</html>