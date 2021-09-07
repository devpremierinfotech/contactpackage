<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   {{ csrf_field() }}
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>DevPremier/contact Package</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-body">
                  <h1>Contact Page</h1>
                  <form action="{{url('/contact')}}" method="post">
                     @csrf
                     <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" name="phone" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="">Query</label>
                        <textarea name="query" id="" cols="30" rows="4" class="form-control"></textarea>
                     </div>
                     <input type="submit" value="Submit" class="btn btn-primary mt-1 ">
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html>