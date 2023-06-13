<?php include 'header.php';?>

        <!-- Start Page Title Area Area -->
        <div class="page-title-area page-title-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Gallery</h2>
                            <!-- <p>Lorem ipsum dolor sit amet</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area Area -->



        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!------ Include the above in your HEAD tag ---------->
<style type="text/css">
.img-thumbnail {
    padding: 0;
    background-color: unset;
    border: none;
    border-radius: unset;
    width: 100%;
    height: auto;
    margin: 0;
}
.modal-content {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: transparent;
    background-clip: padding-box;
    border: unset;
    border-radius: unset;
    outline: 0;
}
.p0 {
    padding: 0;
}
</style>

        <!-- Gallery -->
        <section class="services-area ">
        <div class="container"style="padding-bottom: 150px; padding-top: 150px;">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 p0" data-toggle="modal" data-target="#modal">
              <a href="#lightbox" data-slide-to="0"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+1" class="img-thumbnail"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p0" data-toggle="modal" data-target="#modal">
              <a href="#lightbox" data-slide-to="1"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+2" class="img-thumbnail"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p0" data-toggle="modal" data-target="#modal">
              <a href="#lightbox" data-slide-to="2"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+3" class="img-thumbnail"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p0" data-toggle="modal" data-target="#modal">
              <a href="#lightbox" data-slide-to="3"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+4" class="img-thumbnail"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p0" data-toggle="modal" data-target="#modal">
              <a href="#lightbox" data-slide-to="4"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+5" class="img-thumbnail"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p0" data-toggle="modal" data-target="#modal">
              <a href="#lightbox" data-slide-to="5"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+6" class="img-thumbnail"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p0" data-toggle="modal" data-target="#modal">
              <a href="#lightbox" data-slide-to="6"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+7" class="img-thumbnail"></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p0" data-toggle="modal" data-target="#modal">
              <a href="#lightbox" data-slide-to="7"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+8" class="img-thumbnail"></a>
            </div>    
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">
                            <ol class="carousel-indicators">
                                <li data-target="#lightbox" data-slide-to="0"></li>
                                <li data-target="#lightbox" data-slide-to="1"></li>
                                <li data-target="#lightbox" data-slide-to="2"></li>
                                <li data-target="#lightbox" data-slide-to="3"></li>
                                <li data-target="#lightbox" data-slide-to="4"></li>
                                <li data-target="#lightbox" data-slide-to="5"></li>
                                <li data-target="#lightbox" data-slide-to="6"></li>
                                <li data-target="#lightbox" data-slide-to="7"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+1" class="w-100"
                                     alt=""></div>
                                <div class="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+2" class="w-100"
                                     alt=""></div>
                                <div class="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+3" class="w-100"
                                     alt=""></div>
                                <div class="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+4" class="w-100"
                                     alt=""></div>
                                <div class="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+5" class="w-100"
                                     alt=""></div>
                                <div class="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+6" class="w-100"
                                     alt=""></div>
                                <div class="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+7" class="w-100"
                                     alt=""></div>
                                <div class="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+8" class="w-100"
                                     alt=""></div>
                            </div>
                            <a class="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                            <a class="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>


<!-- Start Footer Area -->
<?php include 'footer.php';?>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>