<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d9d2bd3ef6.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <x-admin_nav/>
    <h1 class="text-center mb-5">Meal List</h1>
    <div class="table-responsive">
      <table class="table">
        @if(Auth::user()->roleid==1)
          <th>Meal</th>
          <th>Category</th>
          <th>Action</th>
          @foreach($meals as $meal)
          <tr>
            <td>{{$meal['meal_type']}}</td>
            <td>{{$meal['cat_name']}}</td>
            <td>
              <a href="/updatemeal?meal={{$meal['id']}}"><button type="button" name="button" class="btn btn-primary">Update</button></a>
              <a href="/deletemeal?meal={{$meal['id']}}"><button type="button" name="button" class="btn btn-danger">Delete</button></a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
      <a href="/addmeal"><button type="submit" name="button" class="btn btn-primary">Add Meal</button></a>
      @else
      <th>Meal</th>
      <th>Category</th>
      @foreach($meals as $meal)
      <tr>
        <td>{{$meal['meal_type']}}</td>
        <td>{{$meal['cat_name']}}</td>
      </tr>
      @endforeach
    </table>
  </div>
  <a href="/mealselection"><button type="submit" name="button" class="btn btn-primary">Select Meal</button></a>
  @endif
  </body>
</html>
