@extends('base')

@section('content')

<!--begin::Card-->
<div class="card card-custom gutter-bs">
    <!--Begin::Header-->
    <div class="card-header card-header-tabs-line">
        <div class="card-toolbar">
            <h3 class="card-title">Ajouter un Produit</h3>
        </div>
    </div>
    <!--end::Header-->
    <!--Begin::Body-->
    <div class="card-body px-0">
        <div class="tab-content pt-5">
            <!--begin::Tab Content-->
            <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">

                <form class="form" action="/products" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 text-right col-form-label">Photo</label>
                        <div class="col-lg-9 col-xl-9">
                            <div class="image-input image-input-outline image-input-circle" id="kt_user_avatar" style="background-image: url(assets/media/users/blank.png)">
                                <div class="image-input-wrapper" style="background-image: url(assets/media/svg/avatars/007-boy-2.svg)"></div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="photo" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="profile_avatar_remove" />
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 text-right col-form-label">Product Name</label>
                        <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" type="text" name="product_name" value="Nick" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 text-right col-form-label">Quantity</label>
                        <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" type="number" name="qty" value="Bold" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 text-right col-form-label">Price</label>
                        <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" type="number" name="price" value="Loop Inc." />
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <button type="submit" class="btn btn-primary font-weight-bold mr-2" >Save</button>
                                <a href="/" type="button" class="btn btn-danger font-weight-bold">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--end::Tab Content-->
      </div>
    </div>
    <!--end::Body-->
</div>
@endsection

@section('script')
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/custom/education/student/profile.js"></script>
<!--end::Page Scripts-->
@endsection
