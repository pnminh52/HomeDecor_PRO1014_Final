
<?php include_once ROOT_DIR . "views/admin/header.php" ?>
<div class="container">
<?php if(isset($_SESSION['message']) && $_SESSION['message'] != ''): ?>
        <div class="mt-3 mb-3 alert alert-success">
            <?= $_SESSION['message'] ?>
        </div>
        <?php unset($_SESSION['message']); // Xóa thông báo sau khi hiển thị ?>
    <?php endif; ?>
    <form action="<?= ADMIN_URL . '?ctl=updatesp'?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Tên sản phẩm</label>
            <input type="text" name="name" value="<?= $product['name']?>" id="" class="form-control">
        
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Danh mục</label>
        <select name="category_id" id="" class="form-control">
            <?php foreach($categories as $cate):?>
                <option value="<?=$cate['id']?>"
                <?=$cate['id']==$product['category_id'] ? 'selected':''?>>
                   
                    <?=$cate['cate_name']?>
                </option>
                <?php endforeach?>
        </select>
            
        </div>
        <div class="mb-3">
            <label for="">Hình ảnh</label>
            <img src="<?= ROOT_URL . "/productimages/" . $product['image']?>" width="90" alt="">
           <input type="hidden" name="image" value="<?=$product['image']?>" >
            <input type="file" name="image" id="" class="form-control">

        </div>
        <div class="mb-3">
            <label for="">Giá</label>
            <input type="number" name="price" step="0.1" value="<?=$product['price']?>" class="form-control">

        </div>
       
        <div class="mb-3">
            <label for="">Số lượng</label>
            <input type="number" name="quantity" value="<?=$product['quantity']?>" min="0"  class="form-control">

        </div> 
        <div class="mb-3">
            <label for="">Trạng thái</label> <br>
            <input type="radio" name="status" value="1" <?=$product['status'] ? 'checked':''?> checked id=""> Đang kinh doanh
            <input type="radio" name="status" value="0" <?=$product['status'] ==0 ? 'checked':''?>> Ngừng kinh doanh
        </div>
        <div class="mb-3">
            <label for="">Mô tả sản phẩm</label>
            <textarea name="description" class="form-control" rows="6"><?=$product['description']?></textarea>
        </div>
        <div class="mb-3">
            <label for="">Noi dung</label>
            <textarea name="content" class="form-control" rows="8"><?=$product['content']?></textarea>
        </div>
        <input type="hidden" name="id" value="<?=$product['id']?>">
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>
<?php include_once ROOT_DIR . "views/admin/footer.php" ?>