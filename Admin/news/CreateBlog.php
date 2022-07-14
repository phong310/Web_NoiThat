<?php require "../layout/header.php";?>

<div class="card">
    <div class="card-body card-block">
        <form action="CreateBlog_post.php" method="post" enctype="multipart/form-data" class="form-horizontal">
        
            <div class="row form-group" style="padding-top: 80px">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tiêu Đề</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="tieude" name="tieude" placeholder="Text" class="form-control">
                </div>
            </div>
           
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password-input" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="password-input" name="email" placeholder="email" class="form-control">
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password-input" class=" form-control-label">Mô tả</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="mota" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-multiple-input" class="form-control-label">ẢNH</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-multiple-input" name="anh" multiple="" class="form-control-file">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                <label for="select" class="form-control-label">TRẠNG THÁI</label>
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
        <a href="IndexBlog.php">
            <button class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> BACK
            </button>
        </a>
    </div>
    
</div>   
<?php require "../layout/fooder.php";?>
