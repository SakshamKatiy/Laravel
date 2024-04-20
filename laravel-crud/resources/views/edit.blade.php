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
      <div class="container">
        <div class="row">
            <h1>edit page</h1>
            <form action="/create/{{$update->id}}/update" enctype="multipart/form-data" class="col-6" method="post">
              @method('put')
                @csrf
            <div class="form-group">
              <label for=""></label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id=""  placeholder="Enter Your Name" value="{{old('name',$update->name)}}">
            </div>
            <span class="text-danger">
            @error('name')
            {{$message}}
        
            @enderror
        </span>
            <div class="form-group">
              <label for=""></label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="desc" id=""  placeholder="Enter Decription" value="{{old('desc',$update->desc)}}">
            </div>
            <span class="text-danger">
                @error('desc')
                {{$message}}
            
                @enderror
            </span>
            <div class="form-group">
              <label for=""></label>
              <input type="file" class="form-control" name="img" id="" value="{{old('image',$update->image)}}" placeholder="">
            </div>
            <span class="text-danger">
                
            </span>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

<a href="/create">go to create page</a>

        {{-- <table class="table table-light">
            <tbody>
                <tr>
                    <td>Sno.</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Image</td>
                </tr>
            </tbody>
            @foreach($getData as $gets)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$gets->name}}</td>
                <td><img src="imageFolder/{{$gets->image}} " class="rounded-circle" alt=""></td>
                <td><a href="create/{{$gets->id}}/edit" class="btn btn-primary btn-sm">Edit</a></td>
                <td><a href="create/{{$gets->id}}" class="btn btn-dark btn-sm">Delete</a></td>
            </tr>
            @endforeach
        </table> --}}
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>