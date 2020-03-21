<?php
    //error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
    // $host = "localhost";
    // $user = "root";
    // $pass = "";
    // $db = "dumbways15";
    // $conn = mysqli_connect($host,$user,$pass,$db);
           error_reporting(E_ALL ^ E_NOTICE);                   
?>
<h1>CUSTOMER</h1>
<form role="form" method="POST" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label>Nama Customer</label>
                                            <input class="form-control" name="name">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Masukkan email</label>
                                            <input class="form-control" name="email">
                                        
                                        </div>
                                         <div class="form-group">
                                            <label>Masukkan alamat</label>
                                            <input class="form-control" name="address">
                                            
                                        
                                        <input type="submit" class="btn btn-default" value="simpan" name="submit">
                                    </form>

<?php
error_reporting(E_ALL ^ E_NOTICE);
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$submit = $_POST['submit'];
if($submit){
    $sql =  "INSERT INTO customer(name, email address) VALUES ('$name','$email','$address')";
    $query = mysqli_query($conn, $sql);
    echo "<script>alert('berhasil');</script>";
    }
   

?>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
         <th>id</th>
         <th>Name</th>
         <th>Email</th>
         <th>Address</th>
         <th>Aksi</th>

     </tr>
 </thead>
    <tbody>
       <?php 
    $conn = mysqli_connect('localhost','root','','dumbways15');
    $cari = "select * from customer order by id";
    $hasil_cari = mysqli_query($conn, $cari);
    while($data=mysqli_fetch_row($hasil_cari)){
        ?>
      
        <tr>
            <td><?php echo $data[0]; ?></td>
            <td><?php echo $data[1]; ?></td>
            <td><?php echo $data[2]; ?></td>
            <td><?php echo $data[3]; ?></td>
            <td> <?php 
                $conn = mysqli_connect('localhost','root','','dumbways15');
                $yang_dihapus = $_GET['id'];
                $sql="DELETE FROM `customer` WHERE id = '$yang_dihapus'";
                $query=mysqli_query($conn,$sql);
            ?>"data-toggle='tooltip' data-placement='top' title='hapus'><i class="fa fa-trash-o fa-fw"></i></a>
        </td>
        </tr>
        <?php
    }
    ?>
         </tbody>
</table>
<br>
<h1>BRAND</h1>
<form role="form" method="POST" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label>Nama Brand</label>
                                            <input class="form-control" name="name">
                                           
                                        </div>
                                       
                                        <input type="submit" class="btn btn-default" value="simpan" name="submit">
                                    </form>

<?php
error_reporting(E_ALL ^ E_NOTICE);
$name = $_POST['name'];

$submit = $_POST['submit'];
if($submit){
    $sql =  "INSERT INTO brand(name) VALUES ('$name')";
    $query = mysqli_query($conn, $sql);
    echo "<script>alert('berhasil');</script>";
    }
   

?>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
         <th>id</th>
         <th>Name</th>
         <th>Aksi</th>
     </tr>
 </thead>
    <tbody>
       <?php 
    $conn = mysqli_connect('localhost','root','','dumbways15');
    $cari = "select * from brand order by id";
    $hasil_cari = mysqli_query($conn, $cari);
    while($data=mysqli_fetch_row($hasil_cari)){
        ?>
      
        <tr>
            <td><?php echo $data[0]; ?></td>
            <td><?php echo $data[1]; ?></td>
            <td> <?php
                $conn = mysqli_connect('localhost','root','','dumbways15');
                $yang_dihapus = $_GET['id'];
                $sql="DELETE FROM brand WHERE id = $yang_dihapus ";
                $query=mysqli_query($conn,$sql);
            ?>"data-toggle='tooltip' data-placement='top' title='hapus'><i class="fa fa-trash-o fa-fw"></i></a>
        </td>

        </tr>
        <?php
    }
    ?>
         </tbody>
</table>
<h1>CARS</h1>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
         <th>id</th>
         <th>Name</th>
         <th>Brand</th>
         <th>Image</th>
         <th>Color</th>
         <th>Description</th>
         <th>Create Time</th>
         <th>Update Time</th>
         <th>Stock</th>
     </tr>
 </thead>
    <tbody>
       <?php 
    $conn = mysqli_connect('localhost','root','','dumbways15');
    $cari = "select * from cars order by id";
    $hasil_cari = mysqli_query($conn, $cari);
    while($data=mysqli_fetch_row($hasil_cari)){
        ?>
      
        <tr>
            <td><?php echo $data[0]; ?></td>
            <td><?php echo $data[1]; ?></td>
            <td><?php echo $data[2]; ?></td>
            <td><?php echo $data[3]; ?></td>
            <td><?php echo $data[4]; ?></td>
            <td><?php echo $data[5]; ?></td>
            <td><?php echo $data[6]; ?></td>
            <td><?php echo $data[7]; ?></td>
            <td><?php echo $data[8]; ?></td>
        </tr>
        <?php
    }
    ?>
         </tbody>
</table>
