<?php
include "../layout/header.php";
?>
<div class="card">
    <div class="card-header">
        
    </div>
    <div class="card-body card-block" style="padding-top: 80px">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="disabled-input" class=" form-control-label">MÃ SẢN PHẨM</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="MASP">
                    <?php
                        include "../core/Connect.php";
                        $query=mysqli_query($conn,"select * from SANPHAM ");
                        while($value=mysqli_fetch_array($query))
                        {
                           echo' <option name="MSP" value="'.$value['MASP'].'">'.$value['MASP'].'</option>';
                        }
                    ?>
                </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-multiple-input" class=" form-control-label">Chọn file để upload:
      <!-- (Cỡ lớn nhất mà PHP đang cấu hình cho phép upload là <?php=ini_get('upload_max_filesize')?>)</label> -->

                </div>
                <div class="col-12 col-md-9">
                <input name="ANH[]" type="file" multiple="multiple" />
                </div>
            </div>
           
            <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm" name ="add">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
        </form>
        <a href="../products/Home.php">
            <button class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> BACK
            </button>
        </a>
    </div>
    
</div>    
<?php
include "../core/Connect.php";
if(isset($_POST['MASP']))
{
$MASP=$_POST['MASP'];
if (($_SERVER['REQUEST_METHOD'] === 'POST') &&
    (isset($_FILES['ANH']))) {

    $files = $_FILES['ANH'];

        $names      = $files['name'];
        $types      = $files['type'];
        $tmp_names  = $files['tmp_name'];
        $errors     = $files['error'];
        $sizes      = $files['size'];


        $numitems = count($names);
        $numfiles = 0;
        for ($i = 0; $i < $numitems; $i ++) {
            //Kiểm tra file thứ $i trong mảng file, up thành công không
            if ($errors[$i] == 0)
            {
                $numfiles++;
                $Part=$MASP.$names[$i] ;
                $target_dir    = "../../Client/img_sp/img_con/";
                move_uploaded_file($tmp_names[$i],$target_dir .$Part );

            }
        }
        echo "Tổng số file upload: " .$numfiles;
        $sql ="Insert into imgcon (id_sp,img1,img2,img3)values('$MASP','".$MASP.$names[0]."','".$MASP.$names[1]."','".$MASP.$names[2]."')";
        if ($conn->query($sql) === TRUE) {
            echo "Thêm  thành công";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
         
        // Ngắt kết nối
        $conn->close();
    }
}
?>
<?php
include "../layout/fooder.php"
?>