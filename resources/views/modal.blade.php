<!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="gallery_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span class="modal-title" style="color: #7a6969;">
        </span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="{{ asset('/images/close_modal.png') }}" style="width:20%;height:20%;justify-content:flex-end;">
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="largeable_img">
                    <div id="carouselGalleryImage" class="carousel slide" data-interval="false"> <!--data-ride="carousel"-->

                      <!-- Indicators -->
                      <ul class="carousel-indicators">
                      </ul>

                      <!-- The slideshow -->
                      <div class="carousel-inner" style="text-align:center;">
                        <!--<center>
                          <img data-enlargeable src="#" class="gallery_show_img">
                        </center>-->
                      </div>

                      <!-- Left and right controls -->
                      <a class="carousel-control-prev carousel_prev" href="#carouselGalleryImage" data-slide="prev">
                        <img src="{{ asset('/images/left_arrow.png') }}">
                      </a>
                      <a class="carousel-control-next carousel_next" href="#carouselGalleryImage" data-slide="next">
                        <img src="{{ asset('/images/right_arrow.png') }}">
                      </a>

                  </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 gallery_opt">
                <div class="row content_gallery">
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <span class="gallery_desc">
        </span>
      </div>
    </div>
  </div>
</div>

<!-- Creates the bootstrap modal where the service will appear -->
<div class="modal fade" id="service_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span class="modal-title" style="color: #7a6969;">
        </span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="{{ asset('/images/close_modal.png') }}" style="width:20%;height:20%;justify-content:flex-end;">
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 service_popup_text">
              <p id="content_service"></p>
              <div id="demo" class="carousel slide" data-interval="false"> <!--data-ride="carousel"-->

                <!-- Indicators -->
                <ul class="carousel-indicators">
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev carousel_prev" href="#demo" data-slide="prev">
                  <img src="{{ asset('/images/left_arrow.png') }}">
                </a>
                <a class="carousel-control-next carousel_next" href="#demo" data-slide="next">
                  <img src="{{ asset('/images/right_arrow.png') }}">
                </a>

              </div>
            </div>
            <div class="col-md-6 col-sm-6 service_popup_img">
            picture
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Creates the bootstrap modal where the product will appear -->
<div class="modal fade product_modal" id="product_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span class="modal-title" style="color: #7a6969;">
        </span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="{{ asset('/images/close_modal.png') }}" style="width:20%;height:20%;justify-content:flex-end;">
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-sm-12 division_name">
              <!-- logo Glassmart -->
            </div>
            <div class="col-md-12 col-sm-12 division_desc">
              <!-- deskripsi Glassmart -->
            </div>
            <div class="col-md-12 col-sm-12 division_brand">

              <!-- Template Model A: Icon Image -->
              <div id="template_product_popup_image">
                <div class="row">
                  <!--div class="col-md-3 col-sm-3"><center>Glasstone</center></div>-->
                </div>
              </div>
              <!-- -->

            </div>
          </div>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>

<!-- Creates the bootstrap modal where the product Gallery type will appear -->
<div class="modal fade productGallery_modal" id="productGallery_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span class="modal-title" style="color: #7a6969;">
        </span>
        <i class="fa fa-arrow-left" aria-hidden="true" data-toggle="modal" data-target="#" data-dismiss="modal" data-backdrop="static" data-keyboard="false" aria-label="Close"></i>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="{{ asset('/images/close_modal.png') }}" style="width:20%;height:20%;justify-content:flex-end;">
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-md-10 col-sm-10 division_show">
              <!-- Image -->
              <div id="carouselProdukGalleryImage" class="carousel slide" data-interval="false"> <!--data-ride="carousel"-->

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                  </ul>

                  <!-- The slideshow -->
                  <div class="carousel-inner">
                  </div>

                  <!-- Left and right controls -->
                  <a class="carousel-control-prev carousel_prev" href="#carouselProdukGalleryImage" data-slide="prev">
                    <img src="{{ asset('/images/left_arrow.png') }}">
                  </a>
                  <a class="carousel-control-next carousel_next" href="#carouselProdukGalleryImage" data-slide="next">
                    <img src="{{ asset('/images/right_arrow.png') }}">
                  </a>

              </div>
            </div>
            <div class="col-md-2 col-sm-2 division_list">
              <!-- list Image -->
              <div class="row">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>

<!-- Creates the bootstrap modal where the product Gallery type 2 (more vertical) will appear -->
<div class="modal fade productGallery2_modal" id="productGallery2_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span class="modal-title" style="color: #7a6969;">
        </span>
        <i class="fa fa-arrow-left" aria-hidden="true" data-toggle="modal" data-target="#" data-dismiss="modal" data-backdrop="static" data-keyboard="false" aria-label="Close"></i>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="{{ asset('/images/close_modal.png') }}" style="width:20%;height:20%;justify-content:flex-end;">
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-md-10 col-sm-10 division_show">
              <!-- Image -->
              <div id="carouselProdukGallery2Image" class="carousel slide" data-interval="false"> <!--data-ride="carousel"-->

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                  </ul>

                  <!-- The slideshow -->
                  <div class="carousel-inner">
                  </div>

                  <!-- Left and right controls -->
                  <a class="carousel-control-prev carousel_prev" href="#carouselProdukGallery2Image" data-slide="prev">
                    <img src="{{ asset('/images/left_arrow.png') }}">
                  </a>
                  <a class="carousel-control-next carousel_next" href="#carouselProdukGallery2Image" data-slide="next">
                    <img src="{{ asset('/images/right_arrow.png') }}">
                  </a>

              </div>
            </div>
            <div class="col-md-2 col-sm-2 division_list">
              <!-- list Image -->
              <div class="row">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>

<!-- Creates the bootstrap modal where the sub menu option product will appear -->
<div class="modal fade" id="subOption_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span class="modal-title" style="color: #7a6969;">
        </span>
        <i class="fa fa-arrow-left" aria-hidden="true" data-toggle="modal" data-target="#" data-dismiss="modal" data-backdrop="static" data-keyboard="false" aria-label="Close"></i>
        <button type="button" class="close" data-toggle="modal" data-target="#" data-dismiss="modal" data-backdrop="static" data-keyboard="false" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-sm-12 division_name">
              <!-- logo Glassmart -->
            </div>
            <div class="col-md-12 col-sm-12 division_desc">
              <!-- deskripsi Glassmart -->
            </div>
            <br><br><br>
            <div class="col-md-12 col-sm-12 division_brand">

              <!-- Template Model B: Text -->
              <div id="template_product_popup_text">
                <center>
                  <div style="display:inline-flex;">
                      <span class="horizon solution_subOption-prev"><img src="{{ asset('/images/left_arrow.png') }}"></span>
                      <div class="container_subOption">
                          <div id="inside_box_subOption">
                              <!--div class="col-md-3 col-sm-3"><center>Glasstone</center></div>-->
                          </div>
                      </div>
                      <span class="horizon solution_subOption-next"><img src="{{ asset('/images/right_arrow.png') }}"></span>
                  </div>
                </center>
              </div>
              <!-- -->
              <br><br>
              <div id="template_submenu">
                <ul></ul>
              </div>

            </div>
          </div>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>

<!-- Creates the bootstrap modal where the DETAIL PRODUCT will appear -->
<div class="modal left fade" id="detailProduct_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <i class="fa fa-arrow-left" aria-hidden="true" data-toggle="modal" data-target="#" data-dismiss="modal" data-backdrop="static" data-keyboard="false" aria-label="Close"></i>
        <button type="button" class="close" data-toggle="modal" data-target="#" data-dismiss="modal" data-backdrop="static" data-keyboard="false" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <!-- Small Gallery -->
            <div class="row">
              <div class="col-md-12 col-sm-12 product_image_chosen">
                <div id="carouselProdukImage" class="carousel slide" data-interval="false"> <!--data-ride="carousel"-->

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                  </ul>

                  <!-- The slideshow -->
                  <div class="carousel-inner" style="text-align:center;">
                  </div>

                  <!-- Left and right controls -->
                  <a class="carousel-control-prev carousel_prev" href="#carouselProdukImage" data-slide="prev">
                    <img src="{{ asset('/images/left_arrow.png') }}">
                  </a>
                  <a class="carousel-control-next carousel_next" href="#carouselProdukImage" data-slide="next">
                    <img src="{{ asset('/images/right_arrow.png') }}">
                  </a>

                </div>
              </div>
              <div class="col-md-12 col-sm-12 product_gallery">
                <!-- product image gallery -->
                <div class="row">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="row" id="productDescRow">
              <div class="col-md-12 col-sm-12 product_desc">
                <!-- product description -->
              </div>
              <div class="col-md-12 col-sm-12 product_table">
                  <div class='largeable_img'>
                    <img class="zoomIn" src='#' style='height:50%;width:50%;'>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
      </div>

    </div>
  </div>
</div>