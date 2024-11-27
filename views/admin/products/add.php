
<?php include_once ROOT_DIR . "views/admin/header.php" ?>
<div class="conteiner">
    <form action="<?= ADMIN_URL . '?ctl=storesp'?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Tên sản phẩm</label>
            <input type="text" name="name" id="" class="form-control">
        
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Danh mục</label>
        <select name="category_id" id="" class="form-control">
            <?php foreach($categories as $cate):?>
                <option value="<?=$cate['id']?>">
                    <?=$cate['cate_name']?>
                </option>
                <?php endforeach?>
        </select>
            
        </div>
        <div class="mb-3">
            <label for="">Hình ảnh</label>
            <input type="file" name="image" id="" class="form-control">

        </div>
        <div class="mb-3">
            <label for="">Giá</label>
            <input type="number" step="0.1" name="price" id="" class="form-control">

        </div>
        <div class="mb-3">
            <label for="">Số lượng</label>
            <input type="number" name="quantity" id="" class="form-control">

        </div> 
        <div class="mb-3">
            <label for="">Trạng thái</label> <br>
            <input type="radio" name="status" value="1" checked id=""> Đang kinh doanh
            <input type="radio" name="status" value="0" id=""> Ngừng kinh doanh
        </div>
        <div class="mb-3">
            <label for="">Mô tả sản phẩm</label>
            <textarea name="description" class="form-control" rows="6"></textarea>
        </div>
        <div class="mb-3">
            <label for="">Noi dung</label>
            <textarea name="content" class="form-control" rows="8"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
    </form>
</div>
<?php include_once ROOT_DIR . "views/admin/footer.php" ?>