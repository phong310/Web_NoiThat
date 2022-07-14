<?php
include "../layout/header.php";
?>
<div class="card">
    <div class="card-header"></div>
    <div class="card-body card-block">
        <form action="CreateSP_post.php" method="post" enctype="multipart/form-data" class="form-horizontal" style="padding-top:80px">
        
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">TÊN SẢN PHẨM</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="TENSP" name="TENSP" placeholder="Text" class="form-control" require>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">NGÀY SẢN XUẤT</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="email-input" name="NSX" placeholder="NSX" class="form-control" >
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password-input" class=" form-control-label">HẠN SỬ DỤNG</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" id="password-input" name="HSD" placeholder="HSD" class="form-control">
                    <small class="help-block form-text">Please enter a complex password</small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="disabled-input" class=" form-control-label">MÃ NHÀ CC</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="MNCC">
                    <?php
                        include "../core/Connect.php";
                        $query=mysqli_query($conn,"select * from NHACUNGCAP ");
                        while($value=mysqli_fetch_array($query))
                        {
                           echo' <option name="MNCC" value="'.$value['MANCC'].'">'.$value['TENNCC'].'</option>';
                        }
                    ?>
                </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="disabled-input" class=" form-control-label">SỐ LƯỢNG</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="disabled-input" name="SL" placeholder="Disabled"  class="form-control" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">MÔ TẢ</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="MOTA" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                <label for="select" class=" form-control-label">MÃ LOẠI SẢN PHẨM</label>
                </div>
                <div class="col-12 col-md-9">
                <select name="MLSP">
                    <?php
                        include "../core/Connect.php";
                        $query=mysqli_query($conn,"select * from LOAISP ");
                        while($value=mysqli_fetch_array($query))
                        {
                           echo' <option name="MLSP" value="'.$value['MALSP'].'">'.$value['TENLSP'].'</option>';
                        }
                    ?>
                </select>
                </div>
               
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">GIÁ NHẬP</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="disabled-input" name="GIANHAP" placeholder="Disabled"  class="form-control" required>
                </div>
               
            </div>
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">GIÁ BÁN</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="disabled-input" name="GIABAN" placeholder="Disabled"  class="form-control" required>
                </div>
               
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-multiple-input" class=" form-control-label">ẢNH</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-multiple-input" name="ANH" multiple="" class="form-control-file">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                <label for="select" class=" form-control-label">TRẠNG THÁI</label>
                </div>
                <div class="col-12 col-md-9">
                <select name="TT">
                    <option name="TT" value="TRUE">TRUE</option>
                    <option name="TT" value="FALSE">FALSE</option>
                </select>
                </div>
               
            </div>
            <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
        </form>
        <a href="IndexProduct.php">
            <button class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> BACK
            </button>
        </a>
    </div>
    
</div>    
<?php
    include_once "../layout/fooder.php";
?>