<section class="product-camera-content txr cover">
	<div class="nav cover mt2">
		<a class="next-link" href="#"> حساب من</a>
	</div>
	<div class="content-pr cover">
        <div class="img-top"></div>
        <div class="info left cover">
        	<div class="content-sign-in">
	            <div class="right w11">
	            	<h1>به ایسر ID خوش آمدید</h1>
                    <?php
						if( have_posts() ) {
							the_post(); 
					?>	
					<p><?php the_content(); ?></p>
					<?php
						}
					?>
	            </div>
                
                <div class="mr12">
                	<h1>ورود به سیستم</h1>
                    <P>در حال حاضر ID ایسر داشته باشد؟ ثبت نام را به حساب خود را در زیر وارد نمایید.</P>
                    <form action="" method="post" name="sign-in" id="frmsign-in" class="frmsign-in right">
                    	<input type="text"     name="email"  id="email" size="40px" placeholder="ایمیل" />
                        <input type="password" name="pas"    id="pas"   size="40px" placeholder="رمز"  />
                        <input type="submit"   name="submit" value="ورود به سیستم" />
                        <a href="http://127.0.0.1/wp-cctv/wordpress/ایجاد-کاربر-جدید/"><input type="button"   name="submit" value="ایجاد حساب جدید" /></a>
                    </form>
                </div>
            </div>
            <div class="bottom-bg"></div>
        </div>
    </div>
</section>
