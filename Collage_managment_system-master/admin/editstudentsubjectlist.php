
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Collage managment system</title>
  

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- Custom styles for this template-->
 

</head>
<?php
  include 'session.php';
  include 'sidebar.php';
  include 'navbar.php';
  include 'connection.php';
  if(isset($_POST['done']))
  {
      $sem = $_POST['sem'];
      $dep = $_POST['field'];
  $sql = "SELECT `id`,`student_name` FROM `student_info` where sem='$sem' and department='$dep'";
  $result = mysqli_query($conn,$sql);
  }
?>
   
        <!-- End of Topbar -->

  


        <!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">student information</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
    </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            
          <th>Enrollment number</th>
        <th>name</th>
           <th>subject 1</th>
           <th>subject 2</th>
           <th>subject 3</th>
           <th>subject 4</th>
           <th>subject 5</th>
           <th>subject 6</th>
           
        
            <th>Edit</th>
          </tr>
        </thead>
        <tfoot>
        <tr>
            
        <th>Enrollment number</th>
        <th>name</th>
        <th>subject 1</th>
           <th>subject 2</th>
           <th>subject 3</th>
           <th>subject 4</th>
           <th>subject 5</th>
           <th>subject 6</th>
            <th>Edit</th>
          </tr>
        </tfoot>
        <tbody>
        <?php
        if(mysqli_num_rows($result)>0)
        {
          while($row = mysqli_fetch_array($result))
          {
              $id = $row['id'];
            $sql1 = "SELECT * FROM `student_subject` where id='$id' and field='$dep' and sem='$sem'";
            $result1 = mysqli_query($conn,$sql1);
            $row1=mysqli_fetch_array($result1);
            $num987=mysqli_num_rows($result1)
           
        ?>
        <?php
        if($num987>0)
        {
          ?>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['student_name'] ?></td>
            <td><?php $code= $row1['sub1'];
            
            $sql2="SELECT `id`, `subject_code`, `subject_name`, `elective`, `sem`, `field`, `fid` FROM `subject` WHERE field='$dep' and sem='$sem' and subject_code='$code'";
            $result2=mysqli_query($conn,$sql2);
            $row3=mysqli_fetch_array($result2);
            echo $row3['subject_name'];
            
            ?></td>
            <td><?php $code= $row1['sub2'] ;
             $sql2="SELECT `id`, `subject_code`, `subject_name`, `elective`, `sem`, `field`, `fid` FROM `subject` WHERE field='$dep' and sem='$sem' and subject_code='$code'";
             $result2=mysqli_query($conn,$sql2);
             $row3=mysqli_fetch_array($result2);
             echo $row3['subject_name'];
             ?></td>
            <td><?php $code= $row1['sub3'] ;
             $sql2="SELECT `id`, `subject_code`, `subject_name`, `elective`, `sem`, `field`, `fid` FROM `subject` WHERE field='$dep' and sem='$sem' and subject_code='$code'";
             $result2=mysqli_query($conn,$sql2);
             $row3=mysqli_fetch_array($result2);
             echo $row3['subject_name'];
             ?></td>
            <td><?php $code = $row1['sub4'] ;
             $sql2="SELECT `id`, `subject_code`, `subject_name`, `elective`, `sem`, `field`, `fid` FROM `subject` WHERE field='$dep' and sem='$sem' and subject_code='$code'";
             $result2=mysqli_query($conn,$sql2);
             $row3=mysqli_fetch_array($result2);
             echo $row3['subject_name'];
             ?></td>
            <td><?php $code= $row1['sub5'] ;
             $sql2="SELECT `id`, `subject_code`, `subject_name`, `elective`, `sem`, `field`, `fid` FROM `subject` WHERE field='$dep' and sem='$sem' and subject_code='$code'";
             $result2=mysqli_query($conn,$sql2);
             $row3=mysqli_fetch_array($result2);
             echo $row3['subject_name'];
             ?></td>
            <td><?php $code= $row1['sub6'];
             $sql2="SELECT `id`, `subject_code`, `subject_name`, `elective`, `sem`, `field`, `fid` FROM `subject` WHERE field='$dep' and sem='$sem' and subject_code='$code'";
             $result2=mysqli_query($conn,$sql2);
             $row3=mysqli_fetch_array($result2);
             echo $row3['subject_name'];
              ?></td>
           
            <td>
            <ul class="list-inline m-0">
            </li>
                                                <li class="list-inline-item">
                                                <form action="editstudentsubjectback.php" method="post"> 
                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>" class="homebutton" /> 
                                                <input type="hidden" name="sem" value="<?php echo $sem ?>" class="homebutton" /> 
                                                <input type="hidden" name="dep" value="<?php echo $dep ?>" class="homebutton" /> 
                                                    <button class="btn btn-success btn-sm rounded-0" type="submit"  name="edit" data-toggle="tooltip" data-placement="top" title="Edit">Edit</button>
                         </form>
                      </li>
                </ul>

  
          </tr>
          <?php
        }
        ?>
         <?php
         }
        }
      
        ?>
        </tbody>
      </table>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->

<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>

      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
   <!-- Page level plugins -->
   <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


</body>

</html>
