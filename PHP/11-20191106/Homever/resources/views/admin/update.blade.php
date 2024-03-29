<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="Header container-fluid border-bottom">
        <div class="row ">
            <div class="col-md-12 ">
                <h1 class="text-center">Merry Christmast</h1>
            </div>
        </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form class="w-50 m-auto" action="{{route('admin.update',$user->id)}}" method="POST" >
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" name="_method" value="PUT">
              <div class="form-group">
                <label for="">Nhập tên cần sửa</label>
                <input type="text" name="name" value="{{$user->name}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="">Nhập email cần sửa</label>
                <input type="email" class="form-control" name="email" value="{{$user->email}}" aria-describedby="emailHelpId" placeholder="">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>