@extends('layouts.home')
@section('content')
<div class="container apptone">
    <div class="apptone-section-1">
        <div class="row   justify-content-center ">
            <div class="col col-md-6 apptone-form">
                <div class="title">
                    <h3>ابحث عن المفقود، حدد المنطقة التي فقد فيها لبحث ادق.

                    </h3>
                </div>
                <div class=" search mb-3">
                    <input class="form-control"  placeholder="  عن ماذا تبحث ؟" />
                </div>
                <div class="mb-3 search">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            اين ؟
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col col-md-6 apptone-bk ">
                <img src="/images/bk.svg" alt="bk">
            </div>
        </div>
    </div>
</div>
@endsection