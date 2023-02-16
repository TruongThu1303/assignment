<?php get_header('', 'Chỉnh sửa sản phẩm') ?>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Chỉnh sửa sản phẩm</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Form thông tin sản phẩm mới</h3>
                </div>
                <!--begin::Form-->
                <form method="POST" action="">
                <div class="card-body">
                    <div class="row">
                        <div class="col col-12">
                            <div class="form-group">
                                <label>Tiêu đề sản phẩm</label>
                                <input type="text" name="title" class="form-control" placeholder="Nhập vào tiêu đề sản phẩm" value="<?php echo $production['title'] ?>" />
                            </div>
                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                              
                                <select name="category_id" >
                                    <!-- <option value="">Chọn danh mục</option> -->
                                    <?php 
                                    foreach ($categories as $category){
                                        if($production['category_id'] == $category['id']){
                                            echo '<option value="'.$category['id'].'" selected >'.$category['name'].'</option>';
                                        }
                                        else {
                                            echo '<option value="'.$category['id'].'"  >'.$category['name'].'</option>';
                                        }
                                    }


                                    ?>
                                    
                                </select>
                            <div class="form-group mb-1">
                                <label for="descriptionCategoryInput">Chi tiết sản phẩm</label>
                                <textarea name="description" id="kt-ckeditor-1" ><?php echo $production['description'] ?></textarea>
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Số lượng trong kho</label>
                                <input type="number" name="count" class="form-control" placeholder="Nhập vào số lượng" value="<?php echo $production['count'] ?>" />
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Giá cho mỗi sản phẩm</label>
                                <div class="input-group">
                                    <input type="text" name="price" class="form-control" placeholder="Giá cho mỗi sản phẩm" aria-describedby="basic-addon2" value="<?php echo $production['price'] ?>"/>
                                    <div class="input-group-append"><span class="input-group-text">VND</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-4 mt-3">
                            <div class="form-group">
                                <label>Trạng thái sản phẩm</label>
                                <select class="form-control select2" name="status" value="<?php echo $production['status'] ?>">
                                    <option value="1">Nháp</option>
                                    <option value="2">Công khai</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Lưu</button>
                        <a href="?role=admin&mod=production" class="btn btn-default">Quay về</a>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div><!--end::Entry-->
<?php get_footer() ?>