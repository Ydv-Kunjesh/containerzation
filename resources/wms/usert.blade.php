<!doctype html>
<html lang="en">

<head>
  <title>Donar's detail</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/table.css">

</head>

<body>
  <header>
    
  </header>
  <main>
<div class="container">
    <div class="row">
      <div class="col-10">
        <h1>Doner's Detail</h1>
    <table style='width:100% ' class='table table-striped'>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Mobile no</th>
                <th>Donation</th>
                <th>Address</th>
                <th>Massage</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($data as $a)
    <tr>
    <td>{{$a['id']}} </td>

        <td>{{$a['name']}} </td>
        <td>{{$a['email']}}</td>
        <td>{{$a['donation']}}</td>
        <td>{{$a['address']}}</td>
        <td>{{$a['created_at']}} </td>

        <td><a href={{"delete/".$a['id']}} style='background-color:red;color:black;font-weight:bold; border-radius:30px;padding:3px 6px;' onclick='myFunction()'>delete</a></td>
        <td><a href={{"edit/".$a['id']}} style='background-color:gray;color:black;font-weight:bold; border-radius:30px;padding:3px 6px;' onclick='mFunction()'>Update</a></td>


    </tr>
    @endforeach
    </table>
    </div></div>
</div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>