<?php include "../koneksi/koneksi.php";?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

    <title>Bootstrap Login Form</title>
  </head>
  <body>
    <section>
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-12 col-sm-8 col-md-6 m-auto">
            <div class="card border-0 shadow">
              <div class="card-body text-center">
                <!-- <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg> -->
                <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
                <?php 
                    if(!isset($_POST['submit'])){

                ?>
                <form method="post" action="" enctype="multipart/form-data">
                    <input type="hidden" name="id" class="form-control my-4 py-2"/>
                    <input type="email" name="email" class="form-control my-4 py-2" placeholder="Email" required/>
                    <input type="text" name="username" class="form-control my-4 py-2" placeholder="Username" required/>
                    <input type="password" name="password"  class="form-control my-4 py-2" placeholder="Password" required/>
                    <div class="text-center mt-3">
                        <button type="submit" name="submit" class="btn btn-primary">Register</button>
                        <a href="login.php" class="nav-link">Go Back</a>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        
    </script>

        <?php 
            }else{
                $id = $_POST["id"];
                $email = $_POST["email"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $level = "tamu";
            
                $insertRegister = "INSERT INTO users VALUE ('$id', '$email', '$username', '$password', '$level')";
                $queryRegister = mysqli_query($koneksi, $insertRegister);

                if($queryRegister){
                    echo "<script>alert('Berhasil Register !') </script>";
                    echo "<script type='text/javascript'>window.location = 'login.php'</script>";
                }else{
                    echo "<script>alert('Gagal Register !')</script>";
                    echo "<script type='text/javascript'>window.location = 'login.php'</script>";
                }

            }
        ?>
  </body>
</html>
