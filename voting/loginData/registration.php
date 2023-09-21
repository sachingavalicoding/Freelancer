<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system Register Accountt</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1 class="text-info text-center p-2"> Voting System </h1>
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <form action="../server/register.php" class="col-xl-6" method="POST">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Student registration form</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline ">
                      <input type="text" id="form3Example1m" name="username" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">UserName</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline ">
                      <input type="tel" id="form3Example1n" name="phoneno" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Phone no </label>
                    </div>
                  </div>
                </div>

                

                <div class="form-outline  mb-4">
                  <input type="email" name="email" id="form3Example8" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Email</label>
                </div>
                <div class="form-outline  mb-4">
                  <input type="password" name="password" id="form3Example8" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Password</label>
                </div>

                

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select class="select" name="std">
                      <option value="1">Select </option>
                      <option value="2">Group</option>
                      <option value="3">Voter</option>
                    </select>

                  </div>
                  
                </div>

                <div class="form-outline px-3 mb-4">
                  <input type="date" name="dob" id="form3Example9" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example9">DOB</label>
                </div>

                <div class="form-outline px-3 mb-4">
                  <input type="number" name="prnNumber" id="form3Example90" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example90">PRN Number</label>
                </div>

                <div class="form-outline px-3 mb-4">
                  <input type="text" name="course" id="form3Example99" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Course</label>
                </div>

              <!--   <div class="form-outline px-3 mb-4">
                  <input type="text" id="form3Example97" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example97">Roll No </label>
                </div> -->

                <div class="d-flex justify-content-end pt-3">
                  <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2 "> Register </button>
                </div>
                <div>
                    <p> Already have an account ? <a href="../index.php" class="text-dark" >Login Here </a></p>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>