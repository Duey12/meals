  <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/d9d2bd3ef6.js" crossorigin="anonymous"></script>
      <link rel="shortcut icon" href="/heartlogo.jpg" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
      </head>
      <body style="background-color:#A9A9A9">
        <x-admin_nav/>
        <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-white text-black" style="border-radius: 1rem;">
              <form class="" action="/addmeal" method="post">
                @csrf
              <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                  <h2 class="fw-bold mb-2 text-uppercase">Add Meal</h2>
                  <div class="form-outline form-white mb-4">
                    <input type="text" class="form-control form-control-lg" name="meal">
                    <label class="form-label" for="meal">Meal Name</label>
                  </div>
                  <div class="form-outline form-white mb-4">
                    <select class="form-control form-control-lg" name="cat">
                      <option value=""></option>
                      @foreach($category as $categories)
                      <option value="{{$categories['id']}}">{{$categories['cat_name']}}</option>
                      @endforeach
                    </select>
                    <label class="form-label" for="cat">Category</label>
                  </div>
                  <button class="btn btn-outline-dark btn-lg px-5" type="submit">Add Meal </button>
                </div>
            </div>
          </div>
        </form>
      </div>
      </div>
    </section>
      </body>
    </html>

  </body>
</html>
