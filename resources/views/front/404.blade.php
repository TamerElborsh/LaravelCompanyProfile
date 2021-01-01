@section('pageTitle')
    - 404
@endsection
@include('front.layout.header')

<!-- Start Page Header area -->
@include('front.layout.pageHeader')

<!-- Start main content -->
<main>
    <!-- Start 404 Error -->
    <section id="mu-error">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-error-area">
                        <!-- Title -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mu-title">
                                    <h2>Oops! This page could not be found!</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start Contact Content -->
                        <div class="mu-error-content">
                            <div class="mu-error-text">
                                <div class="mu-backdrop">
                                    <p class="mu-text">404</p>
                                    <div class="mu-overlay"></div>
                                </div>
                            </div>

                            <!-- search form -->
                            <div class="mu-error-search">
                                <form class="mu-subscribe-form">
                                    <input placeholder="Write your e-mail here" type="email">
                                    <button class="mu-subscribe-btn">Search</button>
                                </form>
                            </div>

                            <a href="#" class="mu-back-to-home">Back to home <span class="fa fa-long-arrow-right"></span></a>

                        </div>
                        <!-- End 404 Error  Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End 404 Error  -->

</main>

<!-- End main content -->



<!-- Start footer -->
@include('front.layout.footer')
<!-- End footer -->
