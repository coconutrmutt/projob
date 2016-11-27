<section id="mainContent">
  <div class="container-fluid">
    <div class="content_top">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider">
            <div class="slick_slider">
              <div class="single_iteam"><img src="images/nvidia_geforce_gtx580.png" alt="">
                <h2><a class="slider_tittle" href="admin"><!-- Fusce eu nulla semper porttitor felis sit amet --></a></h2>
              </div>
              <div class="single_iteam"><img src="images/DSC_0244.jpg" alt="">
                <h2><a class="slider_tittle" href="admin"><!-- Fusce eu nulla semper porttitor felis sit amet --></a></h2>
              </div>
              <div class="single_iteam"><img src="images/Dsc_0235.jpg" alt="">
                <h2><a class="slider_tittle" href="admin"><!-- Fusce eu nulla semper porttitor felis sit amet --></a></h2>
              </div>
              <div class="single_iteam"><img src="images/1.jpg" alt="">
                <h2><a class="slider_tittle" href="admin"><!-- Fusce eu nulla semper porttitor felis sit amet --></a></h2>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="content_top_right">
            <ul class="featured_nav wow fadeInDown">
              <li><img src="images/DSC_0244.jpg" alt="">
                <div class="title_caption"><a href="{{url('product')}}">Notebook i5</a></div>
              </li>
              <li><img src="images/Dsc_0235.jpg" alt="">
                <div class="title_caption"><a href="{{url('product')}}">Notebook i7</a></div>
              </li>
              <li><img src="images/nvidia_geforce_gtx580.png" alt="">
                <div class="title_caption"><a href="{{url('product')}}">nvidia_geforce_gtx580</a></div>
              </li>
              <li><img src="images/1.jpg" alt="">
                <div class="title_caption"><a href="{{url('product')}}"> radeon hd4670</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="content_middle">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="content_middle_leftbar">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">category1</a> </h2>
            <ul class="catg1_nav">
              <li>
                <div class="catgimg_container"> <a href="{{url('product')}}" class="catg1_img"><img alt="" src="images/1.jpg"></a></div>
                <div id="showRemain"></div>
                <center>ราคา:</center> 
                  <script type="text/javascript">  
                    function countDown(){  
                        var timeA = new Date();
                        var timeB = new Date("Febriaru 24,2017 00:00:01");
                        var timeDifference = timeB.getTime()-timeA.getTime();      
                        if(timeDifference>=0){  
                            timeDifference=timeDifference/1000;  
                            timeDifference=Math.floor(timeDifference);  
                            var wan=Math.floor(timeDifference/86400);  
                            var l_wan=timeDifference%86400;  
                            var hour=Math.floor(l_wan/3600);  
                            var l_hour=l_wan%3600;  
                            var minute=Math.floor(l_hour/60);  
                            var second=l_hour%60;  
                            var showPart=document.getElementById('showRemain');  
                            showPart.innerHTML="เหลือเวลา "+wan+" วัน "+hour+" ชั่วโมง "  
                            +minute+" นาที "+second+" วินาที";   
                                if(wan==0 && hour==0 && minute==0 && second==0){  
                                    clearInterval(iCountDown); // ยกเลิกการนับถอยหลังเมื่อครบ  
                                    // เพิ่มฟังก์ชันอื่นๆ ตามต้องการ  
                                }  
                        }  
                    }  

                    var iCountDown=setInterval("countDown()",1000);
                  </script>

                <h3><center><a class="btn btn-info" href="#">ประมูลสินค้า</a></center></h3>
              </li>

              <li>
                <div class="catgimg_container"> <a href="{{url('product')}}" class="catg1_img"><img alt="" src="images/292x150x2.jpg"></a></div>
                <h3 class="post_titile"><a href="{{url('product')}}">Vestibulum ut est augue, in varius</a></h3>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="content_middle_middle">
          <div class="slick_slider2">
            <div class="single_featured_slide"> <a href="{{url('product')}}"><img src="images/1.jpg" alt=""></a>
              <h2><a href="pages/single.html">Praesent vitae quam vitae arcu posuer 1</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
            </div>
            <div class="single_featured_slide"> <a href="{{url('product')}}"><img src="images/2.jpg" alt=""></a>
              <h2><a href="#">Praesent vitae quam vitae arcu posuer 2</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
            </div>
            <div class="single_featured_slide"> <a href="{{url('product')}}"><img src="images/3.jpg" alt=""></a>
              <h2><a href="#">Praesent vitae quam vitae arcu posuer 3</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulput...</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="content_middle_rightbar">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">category2</a> </h2>
            <ul class="catg1_nav">
              <li>
                <div class="catgimg_container"> <a href="{{url('product')}}" class="catg1_img"><img alt="" src="images/292x150x1.jpg"></a></div>
                <h3 class="post_titile"><a href="{{url('product')}}">Vestibulum ut est augue, in varius</a></h3>
              </li>
              <li>
                <div class="catgimg_container"> <a href="{{url('product')}}" class="catg1_img"><img alt="" src="images/292x150x2.jpg"></a></div>
                <h3 class="post_titile"><a href="{{url('product')}}">Vestibulum ut est augue, in varius</a></h3>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- tabbusiness !--> 
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Business</a> </h2>
            <div class="business_category_left wow fadeInDown">
              <ul class="fashion_catgnav">
                <li>
                  <div class="catgimg2_container"> <a href="{{url('product')}}"><img alt="" src="images/390x240x1.jpg"></a> </div>
                  <h2 class="catg_titile"><a href="pages/single.html">Aenean mollis metus sit amet ligula adipiscing</a></h2>
                  <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                  <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                </li>
              </ul>
            </div>
            <div class="business_category_right wow fadeInDown">
              <ul class="small_catg">
                <li>
                  <div class="media wow fadeInDown"> <a class="media-left" href="pages/single.html"><img src="images/112x112.jpg" alt=""></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="pages/single.html">Duis condimentum nunc pretium lobortis </a></h4>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="games_fashion_area">
            <div class="games_category">
              <div class="single_category">
                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Games</a> </h2>
                <ul class="fashion_catgnav wow fadeInDown">
                  <li>
                    <div class="catgimg2_container"> <a href="pages/single.html"><img alt="" src="images/390x240x1.jpg"></a> </div>
                    <h2 class="catg_titile"><a href="#">Aenean mollis metus sit amet ligula adipiscing</a></h2>
                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                  </li>
                </ul>
                <ul class="small_catg wow fadeInDown">
                  <li>
                    <div class="media"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="fashion_category">
              <div class="single_category">
                <div class="single_category wow fadeInDown">
                  <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Fashion</a> </h2>
                  <ul class="fashion_catgnav wow fadeInDown">
                    <li>
                      <div class="catgimg2_container"> <a href="#"><img alt="" src="images/390x240x1.jpg"></a> </div>
                      <h2 class="catg_titile"><a href="#">Aenean mollis metus sit amet ligula adipiscing</a></h2>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                    </li>
                  </ul>
                  <ul class="small_catg wow fadeInDown">
                    <li>
                      <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                          <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                          <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
          <div class="single_bottom_rightbar">
            <h2>Recent Post</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_bottom_rightbar">
            <ul role="tablist" class="nav nav-tabs custom-tabs">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Most Popular</a></li>
              <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">Recent Comment</a></li>
            </ul>
            <div class="tab-content">
              <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                <ul class="small_catg popular_catg wow fadeInDown">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div id="recentComent" class="tab-pane fade" role="tabpanel">
                <ul class="small_catg popular_catg">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_bottom_rightbar">
            <h2>Blog Archive</h2>
            <div class="blog_archive wow fadeInDown">
              <form action="#">
                <select>
                  <option value="">Blog Archive</option>
                  <option value="">October(20)</option>
                </select>
              </form>
            </div>
          </div>
          <div class="single_bottom_rightbar wow fadeInDown">
            <h2>Popular Lnks</h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Blog Home</a></li>
              <li><a href="#">Error Page</a></li>
              <li><a href="#">Social link</a></li>
              <li><a href="#">Login</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>