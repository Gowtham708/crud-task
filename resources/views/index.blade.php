<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container" style="padding-top: 1%;">
        <div class="card">
            <div class="card-body col-md-12">
                <h5 class="card-title">Add user</h5>
                <form action="{{ route('user.store') }}" method="post">
    @csrf
                <div class="row">
            
                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="First name" aria-label="first_name">
                    </div>
                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="last_name">
                    </div>
                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="Email" aria-label="email">
                    </div>
                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="Phone number" aria-label="phone_number">
                    </div>
                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="State" aria-label="state">
                    </div>
                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="Country" aria-label="country">
                    </div>

                    <div class="col" style="padding-top: 1%;">
                        <button style="float: right;" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                </div>
                </form>
            </div>
        
        </div>

        @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{ $message}}</p>
   </div>
   @endif

        <div class="card" style="margin-top: 5%;">
            <div class="card-body">
                <h5 class="card-title">Users</h5>
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First_name</th>
                    <th scope="col">Last_name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone_number</th>
                    <th scope="col">State</th>
                    <th scope="col">Country</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>{{ $user->state }}</td>
                    <td>{{ $user->country }}</td>
                    <td class="btn btn-success" style="margin-right:5%;" >Edit</td>
                    <td class="btn btn-success">Delete</td>
                    </tr>
                   @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>