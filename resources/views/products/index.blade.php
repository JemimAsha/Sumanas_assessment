@include('layouts.app')

<style type="text/css">
   

    :root {
        --font1: 'Heebo', sans-serif;
        --font2: 'Fira Sans Extra Condensed', sans-serif;
        --font3: 'Roboto', sans-serif;

        --btnbg: #ffcc00;
        --btnfontcolor: rgb(61, 61, 61);
        --btnfontcolorhover: rgb(255, 255, 255);
        --btnbghover: #ffc116;
        --btnactivefs: rgb(241, 195, 46);


        --label-index: #960796;
        --danger-index: #5bc257;
        /* PAGINATE */
        --link-color: #000;
        --link-color-hover: #fff;
        --bg-content-color: #ffcc00;

    }



    .card {
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        border: 0;
        border-radius: 1rem;
    }

    .card-img,
    .card-img-top {
        border-top-left-radius: calc(1rem - 1px);
        border-top-right-radius: calc(1rem - 1px);
    }


    .card h5 {
        overflow: hidden;
        height: 55px;
        font-weight: 300;
        font-size: 1rem;
    }

    .card h5 a {
        color: black;
        text-decoration: none;
    }

    .card-img-top {
        width: 100%;
        min-height: 250px;
        max-height: 250px;
        object-fit: contain;
        padding: 30px;
    }

    .card h2 {
        font-size: 1rem;
    }


    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
    }

    /* Centered text */
    .label-top {
        position: absolute;
        background-color: var(--label-index);
        color: #fff;
        top: 8px;
        right: 8px;
        padding: 5px 10px 5px 10px;
        font-size: .7rem;
        font-weight: 600;
        border-radius: 3px;
        text-transform: uppercase;
    }

    .top-right {
        position: absolute;
        top: 24px;
        left: 24px;

        width: 90px;
        height: 90px;
        border-radius: 50%;
        font-size: 1rem;
        font-weight: 900;
        background: #8bc34a;
        line-height: 90px;
        text-align: center;
        color: white;
    }

    .top-right span {
        display: inline-block;
        vertical-align: middle;
        /* line-height: normal; */
        /* padding: 0 25px; */
    }

    .aff-link {
        /* text-decoration: overline; */
        font-weight: 500;
    }

    .over-bg {
        background: rgba(53, 53, 53, 0.85);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(0.0px);
        -webkit-backdrop-filter: blur(0.0px);
        border-radius: 10px;
    }

    .bold-btn {

        font-size: 1rem;
        font-weight: 500;
        text-transform: uppercase;
        padding: 5px 50px 5px 50px;
    }

    .box .btn {
        font-size: 1.5rem;
    }

    @media (max-width: 1025px) {
        .btn {
            padding: 5px 40px 5px 40px;
        }
    }

    @media (max-width: 250px) {
        .btn {
            padding: 5px 30px 5px 30px;
        }
    }

    /* START BUTTON */
    .btn-warning {
        background: var(--btnbg);
        color: var(--btnfontcolor);
        fill: #ffffff;
        border: none;
        text-decoration: none;
        outline: 0;
        /* box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25); */
        border-radius: 100px;
    }

    .btn-warning:hover {
        background: var(--btnbghover);
        color: var(--btnfontcolorhover);
        /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
    }

    .btn-check:focus+.btn-warning,
    .btn-warning:focus {
        background: var(--btnbghover);
        color: var(--btnfontcolorhover);
        /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
    }

    .btn-warning:active:focus {
        box-shadow: 0 0 0 0.25rem var(--btnactivefs);
    }

    .btn-warning:active {
        background: var(--btnbghover);
        color: var(--btnfontcolorhover);
        /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
    }

    /* END BUTTON */

    .bg-success {
        font-size: 1rem;
        background-color: var(--btnbg) !important;
        color: var(--btnfontcolor) !important;
    }

    .bg-danger {
        font-size: 1rem;
    }


    .price-hp {
        font-size: 1rem;
        font-weight: 600;
        color: darkgray;
    }

    .amz-hp {
        font-size: .7rem;
        font-weight: 600;
        color: darkgray;
    }

    .fa-question-circle:before {
        /* content: "\f059"; */
        color: darkgray;
    }

    .fa-heart:before {
        color: crimson;
    }

    .fa-chevron-circle-right:before {
        color: darkgray;
    }
</style>


<div class="page-body">
    <div class="card">

        <div class=" card-body p-4">
            <ul class="nav nav-tabs listArchive mt-3" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#archived" role="tab"
                        aria-controls="archived" aria-selected="false">Detail View</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="home-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list"
                        aria-selected="true">List View</a>
                </li>

            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="container tab-pane fade show  mt-4" id="list" role="tabpanel" aria-labelledby="list-tab">
                    <table class="table" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>
                                    <div class="media profile-media">
                                        @if($product->image!=null)
                                        <img src="{{$product->image}}"
                                            style="width:35px;height:35px;object-fit:fill;border-radius: 50%;"
                                            alt="{{$product->image}}"
                                            onerror="this.onerror=null; this.src='{{url('/')}}/website/images/userProfile.png'">
                                        @else
                                        <img class="media-object img-thumbnail user-img rounded-circle admin_img3"
                                            alt="Not Available" src="{{url('/')}}/website/images/userProfile.png">
                                        @endif
                                    </div>
                                </td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->currency}} {{$product->price}}</td>
                                <td>
                                    <div class="d-flex">

                                        <a href="{{ route('products.show',['product'=>$product->code]) }}"
                                            class="btn btn-success btn-user float-right mb-3">Buy</a>
                                        <!--  -->
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="tab-pane fade mt-4 show active" id="archived" role="tabpanel"
                    aria-labelledby="archived-tab">

                    <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
                        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                            @foreach($products as $product)
                            <div class="col hp">
                                <div class="card h-100 shadow-sm">
                                    <a href="#">
                                        <img src="{{$product->image}}" />
                                    </a>

                                    <div class="label-top shadow-sm">
                                        <a class="text-white" href="#">{{$product->name}} </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="clearfix mb-3">
                                            <span
                                                class="float-start badge rounded-pill bg-success">{{$product->currency}} {{$product->price}}</span>

                                        </div>
                                        <h5 class="card-title">
                                            <a target="_blank" href="#">{{$product->description}}</a>
                                        </h5>

                                        <div class="d-flex">
                                            <a href="{{ route('products.show',['product'=>$product->code]) }}"
                                                class="btn btn-success btn-user float-right mb-3 green">Buy</a>
                                            <!--  -->
                                        </div>


                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                </div>


            </div>
        </div>
        <!-- other Pages Navigate -->

        <!-- Container-fluid Ends-->
    </div>
</div>

