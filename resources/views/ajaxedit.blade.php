<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Edit</title>

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <section>
        <form class="form" >
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}">
              </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" name="email" class="form-control" id="email" value="{{$data->email}}">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name="pwd" class="form-control" id="pwd" value="{{$data->pwd}}">
            </div>
            <button type="submit" name="submit" class="btn btn-info" id="update">Submit</button>
          </form>
    
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
       $('.form').submit(function(e){
        e.preventDefault();
        // method-1
        // var id=$("#myid").val()
        // var name=$("#name").val();
        // var email=$("#email").val();
        // var pwd=$("#pwd").val();
        // $('#update').on("click",function(){

        console.log("ok");

        $.ajax({
            url:"/update",
            // method-1
            // data:{
            //     id:id,
            //     name:name,
            //     email:email,
            //     pwd:pwd,
            // },

            // method-2
            data: $('.form').serialize(),

            success:function(response){
                console.log(response);
                // select();
            }
          });
        });
    // });
    </script>

</body>
</html>