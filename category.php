<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاهی</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>


<div class="panel width1020" dir="rtl" style="text-align: right; margin-top: 10px;">
    <div class="partie_gauche element">
      <div>فروشگاهی</div>
      <ul>
        <li><a href="index.php"><i class="fa fa-shopping-basket pl-2"></i><span>ایجاد فروشگاه جدید</span></a></li>
        <li class="active"><a href="category.php"><i class="fa fa-list-alt pl-2"></i><span>دسته بندی ها</span></a></li>
        <li><a href=""><i class="fa fa-file-excel pl-2"></i><span>خروجی</t></span></a></li>
    </div>
    <div class="boxdetails">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <button type="button" class="btn btn-primary float-left mb-1" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-plus-circle"></i> جدید
            </button>


            <table class="table table-hover" >
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">نام دسته بندی</th>
                  <th scope="col"></th>
                  <th scope="col">کد پستی</th>
                  <th scope="col text-center">عملیات</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>فروشگاه یک</td>
                  <td>انجام شد</td>
                  <td>156416516555</td>
                  <td>
                    <a href=""><i class="fa fa-edit fa-2x"></i></a>
                    <a href=""><i class="fa fa-trash fa-2x mr-2"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>فروشگاه دو</td>
                  <td>انجام شد</td>
                  <td>156416516555</td>
                  <td>
                    <a href=""><i class="fa fa-edit fa-2x"></i></a>
                    <a href=""><i class="fa fa-trash fa-2x mr-2"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>فروشگاه سه</td>
                  <td>انجام شد</td>
                  <td>156416516555</td>
                  <td>
                    <a href=""><i class="fa fa-edit fa-2x"></i></a>
                    <a href=""><i class="fa fa-trash fa-2x mr-2"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>

    </div>
  </div>
  <div id="re"></div>


  <?php


$serverName = "localhost";
$userName = "phpmyadmin";
$password = "qaz123";
$dbName = "gardeshgari";

$name = $_POST['name'];

$conn = new mysqli($serverName, $userName, $password, $dbName);

if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}

$sql = "INSERT INTO register(name) VALUES('$name')";


$conn->query($sql);
?>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" dir="rtl">
    <div class="modal-dialog" role="document">
      <div class="modal-content text-right">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="exampleModalLabel">فروشگاه جدید</h5>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">نام فروشگاه</label>
                <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="نام فروشگاه">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">تاریخ تماس</label>
                <input type="text" name="family" class="form-control" id="inputPassword4" placeholder="تاریخ تماس">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">ارسال محموله</label>
                <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="ارسال محموله">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">دریافت</label>
                <input type="number" name="name" class="form-control" id="inputPassword4" placeholder="دریافت">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">مبلغ</label>
                <input type="number" name="name" class="form-control" id="inputPassword4" placeholder="مبلغ">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">کد پستی</label>
                <input type="number" name="name" class="form-control" id="inputPassword4" placeholder="کد پستی">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">شماره تماس</label>
                <input type="number" name="name" class="form-control" id="inputPassword4" placeholder="شماره تماس">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">ارسال فاکتور</label>
                <input type="checkbox" name="name" class="form-control" id="inputPassword4" placeholder="ارسال فاکتور">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">دریافت وجه</label>
                <input type="checkbox" name="name" class="form-control" id="inputPassword4" placeholder="دریافت وجه">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">آدرس</label>
              <textarea class="form-control" name="name" id="inputAddress" placeholder="آدرس"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">ثبت</button>
          </form>
        </div>
      </div>
    </div>
  </div>







  <script src="js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

</body>

</html>