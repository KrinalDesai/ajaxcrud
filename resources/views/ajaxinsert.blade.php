<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Insert</title>

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <section id="section">
        <form action="#" method="GET" class="form">
            <button type="submit" name="submit" class="btn btn-default" id="submit"><a href="index"> Back</a></button>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name">
              </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name="pwd" class="form-control" id="pwd">
            </div>
            <button type="submit" name="submit" class="btn btn-default" id="submit">Submit</button>
            
          </form>
    
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
                <tr>
                    <td></td>
                </tr>
            </tbody>
          </table>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $('.form').submit(function(e){
        e.preventDefault();

        var name=$("#name").val();
        var email=$("#email").val();
        var pwd=$("#pwd").val();

        $.ajax({
            url:"{{route('ajaxinsert')}}",
            data:{
                name:name,
                email:email,
                pwd:pwd,
            },
            success:function(response){
                console.log(response);
                select();
            }
        });
    });

    function select()
    {
        $.ajax({
            url:"{{route('ajaxselect')}}",
            success:function(data)
            {
                console.log(data);
                $('.tbody').empty();
                $('.tbody').append(data);
            }
        });
    }

</script>
</body>
</html>