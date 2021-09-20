
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Produits</title>
  </head>
  <body>
      <!--begin::Container-->
    <div class="container">
        <!--begin::Profile Personal Information-->
        <div class="d-flex flex-row">

            <!--begin::Content-->
            <div class="flex-row-fluid ml-lg-8">
                <!--begin::Card-->
                <div class="card card-custom card-stretch">
                    <!--begin::Header-->
                    <div class="card-header py-3">
                        <div class="card-title align-items-start flex-column">
                            <h3 class="card-label font-weight-bolder text-dark">Informations Produits</h3>
                            <span class="text-muted font-weight-bold font-size-sm mt-1">Mettre à jour</span>
                        </div>
                        <!--begin::Form-->
                        <form class="form" action="/products/{{ $products->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
							@method('PATCH')
                            <div class="card-toolbar">
                                <button type="submit" class="btn btn-success mr-2">Modifier</button>
                                <a href="/" class="btn btn-danger">Annuler</a>
                            </div>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body">

                        <input type="hidden" name="id" value="">

                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Photo</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="file" name="photo" class="custom-file-input" id="inputGroupFile04"
                                    value="{{ $products->photo }}">
                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                @if ($products->photo)
                                    <img class="img-circle" src="{{ asset('uploads/products/' . $products->photo) }}"
                                    width="70px" height="70px">
                                @else
                                    <img src="{{ asset('uploads/products/user_100.png') }}"
                                    class="h-75 align-self-end" width="70px" height="70px" alt="" />
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Product Name</label>
                            <div class="col-lg-9 col-xl-9">
                                <input class="form-control form-control-lg form-control-solid" name="product_name"
                                    type="text" value="{{$products->product_name }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Qty</label>
                            <div class="col-lg-9 col-xl-9">
                                <input class="form-control form-control-lg form-control-solid" name="qty" type="number"
                                    value="{{ $products->qty}}" />
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Price</label>
                            <div class="col-lg-9 col-xl-9">
                                <div class="input-group input-group-lg input-group-solid">
                                    <input type="number" class="form-control form-control-lg form-control-solid" name="price"
                                        value="{{ $products->price }}" />
                                </div>
                            </div>
                        </div>





                    </div>
                    <!--end::Body-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Profile Personal Information-->
    </div>
    <!--end::Container-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
