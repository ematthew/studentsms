<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="stylesheet" href="{{ asset('css/style.css') }}">

    <title>STUDENT MANAGEMENT SYSTEM</title>
  </head>
  <body>

    @include("navbar")

    <div class="row header-container  justify-content-center">
      <div class="header">
        <h1 class="text-center"> STUDENT MANAGEMENT SYSTEM </h1>
      </div>
    </div>

  <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
                 @if($layout == 'index')
          
              <section class="col-sm">
                           
              @include("studentslist")
              </section>
             <section class="col">
               
             </section>
          </div>
       </div>
      </div>

          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">

                    <div class="card mb-3">
                      <img src="https://www.ei-ie.org/img/Future-of-work-in-education.jpg?p=card" class="card-img-top" alt="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">use this place to update Student Record</h5>
                        <p class="card-text">kindly use this place to add all Student Record.</p>

                        <form action="{{url('/store')}}" method="post">
                @csrf
                  <div class="form-group">
                    <label>One</label>
                    <input name="one" type="text" class="form-control" placeholder="Enter your one Number here">
                  </div>
                   
                   <div class="form-group">
                    <label>First Name</label>
                    <input name="firstName" type="text" class="form-control" placeholder="Enter First Name here">
                  </div>

                  <div class="form-group">
                    <label>Second Name</label>
                    <input name="secondName" type="text" class="form-control" placeholder="Enter Second Name here">
                  </div>

                  <div class="form-group">
                    <label>Age</label>
                    <input name="age" type="text" class="form-control" placeholder="Enter Age here">
                  </div>

                  <div class="form-group">
                    <label>Speciality</label>
                    <input name="speciality" type="text" class="form-control" placeholder="Enter Speciality field of study here">
                  </div>
                  <br>

                  <input type="submit" class="btn btn-info" value="Save">
                  <input type="submit" class="btn btn-warning" value="Reset">
              </form>     
                        
                      </div>
                    </div>           
              </div>
            </div>
          </div>


          @elseif($layout == 'edit')
              <div class="container">
                <div class="row">
                  <section class="col">
                    @include("studentslist")
                  </section>
                  <section class="col">
                    
                    <form action="{{url('/update/'.$student->id)}}" method="post">
                @csrf
                  <div class="form-group">
                    <label>One</label>
                    <input value="{{ $student->one }}" name="one" type="text" class="form-control" placeholder="Enter your one Number here">
                  </div>
                   
                   <div class="form-group">
                    <label>First Name</label>
                    <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" placeholder="Enter First Name here">
                  </div>

                  <div class="form-group">
                    <label>Second Name</label>
                    <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control" placeholder="Enter Second Name here">
                  </div>

                  <div class="form-group">
                    <label>Age</label>
                    <input value="{{ $student->age }}" name="age" type="text" class="form-control" placeholder="Enter Age here">
                  </div>

                  <div class="form-group">
                    <label>Speciality</label>
                    <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Enter Speciality field of study here">
                  </div>
                  <br>

                  <input type="submit" class="btn btn-info" value="update">
                  <input type="submit" class="btn btn-warning" value="Reset">
              </form

                  </section>
                </div>
              </div>
      @endif
</div>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>