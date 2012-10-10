<section class="product-camera-content txr cover">
	<div class="nav cover mt2">
		<a href="#">دوربین  </a>
		<a class="next-link" href="#"> ما</a>
	</div>
	<div class="content-pr cover">
		<nav class="content-pr-nav">
			<ul>
	            <li><a href="index-detail-product.php">مزایای	</a></li>
	        	<li class="current"><a href="./detail-product.php">گالری عکس	</a></li>
	            <li><a href="./detail-product-model.php"> مدل</a></li>
	    	</ul>
	    </nav>
        <div class="info cover"> 
            <div class="container">
                <div class="content-slide">
                <div class="gallery-product mh40 cover">
                    <div class="img-top"></div>
                    <div class="img-center">
                        <div class="slide"> 
                            <div class="train">
                                <?php
									$path="images/product/img-slide";
									$scan=scandir($path);
									foreach($scan as $img){
										$exp=explode('.',$img);
										$type=end($exp);
										if($type=='jpg'){
											echo "<div style=\"background-image:url('$path/$img');\"></div>";
										}
									}
                                ?>
                            </div>                                          
                       </div> 
                    </div>
                    <div class="img-bottom"></div>
                </div>
                <div class="gallery-nav">
                    <div class="prv"></div>
                    <div class="next"></div>
                </div>
                </div>
                <div class="gallery-thumbs ">
                     <ul class="button">
                        <?php
                            $image = 'images/product/img-slide/button';
                            $img = scandir($image);
                            foreach($img as $pic){
                                $exp = explode('.',$pic);
                                $type = end($exp);
                                if ($type == 'png'){
                                    echo "<li><img src='$image/$pic' /></li>";
                                }
                            }
                        ?> 
                    </ul>        
                </div> 
                <div class="footer-note txr">
						موجود در تنظیمات را انتخاب کنید. (2) ذکر شده عمر باتری در MobileMark 2007 ® تست حالت بهره وری با بی سیم بر اساس. تست ® MobileMark2007 موجود در www.bapco.com. رتبه عمر باتری، فقط برای مقاصد مقایسه است. عمر باتری واقعی متفاوت بوده و با توجه به مدل، پیکربندی، برنامه های کاربردی، تنظیمات مدیریت توان، شرایط عملیاتی، و ویژگی های مورد استفاده است. حداکثر ظرفیت باتری با گذشت زمان و استفاده کاهش می یابد. همه ارائه می دهد موضوع بدون اطلاع قبلی و یا تعهدی تغییر است و ممکن است در تمام مکان های خرده فروشی در دسترس می باشد. قیمت ذکر شده در کارخانه سازنده پیشنهاد قیمت خرده فروشی فراگیر مالیات بر ارزش افزوده ممکن است متفاوت باشد و از محل خرده فروشی است. برای قیمت گذاری و یا سایر خطاهای تایپی و یا photographical و یا حذفیات. عکسها ممکن است از پیشنهاد متفاوت است. مصرف کنندگان از حقوق قانونی تحت قانون ملی قابل اجرا حاکم بر فروش کالاهای مصرفی و این ضمانت نامه را رد نمی کند، محدود و یا تعلیق هر گونه حقوق از جمله قابل اجرا است. ERP پذیرش

                </div>
                <div class="bottom-bg"></div>
                </div>
              </div>
           </div> 

        </div>

    </section>
