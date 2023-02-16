<?php get_header('', 'Danh mục sản phẩm') ?>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Chi tiết</h5>
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
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Danh sách chi tiết đơn hàng
                            <span class="d-block text-muted pt-2 font-size-sm">Danh sách chi tiết các đơn hàng có trên hệ thống</span>
                        </h3>
                    </div>
                    
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                            <tr>
                                <th title="Field #1">ID đơn hàng</th>
                                <th title="Field #2">Tên sản phẩm</th>
                                <th title="Field #3">Số lượng</th>
                                <th title="Field #4">Giá</th>
                                <th title="Field #5">Tổng cộng</th>
                                <th title="Field #6">Ngày đặt</th>
                                <th title="Field #7">Trạng thái</th>
                                <th title="Field #8"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($details as $detail) : ?>
                                <tr>
                                <td  class="px-3 text-[16px]"><?= $detail['id']?></td>
                                <td  class="px-3 text-[16px]"><?= $detail['name_product']?></td>
                                <td  class="px-3 text-[16px] "><?= $detail['quantity']?></td>
                                <td  class="px-3 text-[16px]"><?= $detail['price']?></td>
                                <td  class="px-3 text-[16px]"><?= $detail['total']?></td>
                                <td  class="px-3 text-[16px] "><?= date('d-m-Y', strtotime($detail['date']))?></td>
                                <td  class="px-3 text-[16px] "><?= $detail['status']==0?'Đang giao hàng':'Đã giao hàng'?></td>
                                <?php
                                    if($detail['status']==0):
                                ?>
                                    <td>
                                        <span style="overflow: visible; position: relative; width: 125px;">
                                            <a href="?role=admin&mod=cart&action=update&order_id=<?= $_GET['id'] ?>&id=<?php echo $detail['id'] ?>" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
                                            Xác nhận <span class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </a>
                                            
                                        </span>
                                    </td>
                                    <?php endif ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div><!--end::Entry-->
<?php get_footer() ?>