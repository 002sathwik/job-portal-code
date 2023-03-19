<?php include 'header.php'?>

<!-- Page content -->
<div class="content">
    
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   POST JOB
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <?php
    include "connect.php"
     ?>
  <form action="process.php" method="post">
  <div class="mb-3">
    <label for="Company name" class="form-label">Company Name</label>
    <input type="text" class="form-control"  name="cname" >
  </div>
  <div class="mb-3">
    <label for="exampleInputposition" class="form-label">Position</label>
    <input type="text" class="form-control" name="position">
  </div>
  <div class="mb-3">
    <label for="Job Discripition" class="form-label">Job Dicription</label>
    <input type="text" class="form-control" name="jdesc">
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">Ctc</label>
    <input type="text" class="form-control"  name="ctc">
  </div>
 <button type="submit" class="btn btn-primary" name="create">Submit</button>
</form>
</div>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">COMPANY NAME</th>
      <th scope="col">POSITION</th>
      <th scope="col">JOB DISCRIPTION</th>
      <th scope="col">SKILLS</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
 </tbody>
   <?php 
   include ("connect.php");
   $sql ="SELECT *FROM  job";
   $result = mysqli_query($conn,$sql);

   while(   $row= mysqli_fetch_array($result)){
    ?>
    <tr>
      <td> <?php echo $row["id"] ?></td>
      <td> <?php echo $row["cname"] ?></td>
      <td> <?php echo $row["position"] ?></td>
      <td> <?php echo $row["jdesc"] ?></td>
      <td> <?php echo $row["skills"] ?></td>
      <td> <?php echo $row["ctc"] ?></td>
    </tr>
    <?php

   }

   ?>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>