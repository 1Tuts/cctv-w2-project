<?php
	/*
		Template Name: Form Garantee
	*/

	get_template_part('/inc/header');
	?>
	<section class="formgarantee cover">
	
	<div class="top-pic mt5"></div>
	<div class="garantee-info cover">
		<p>مشخصات خود را در فرم زیر وارد کنید تا در اسرع وقت گارانتی محصول شما صادر گردد.</p>
		<div class="info mlra">
			<fieldset>
				<legend>فرم گارانتی</legend>
				<form id="formgarantee" action="<?php bloginfo('template_url'); ?>/sendmail.php" method="post" target='sendinfo'>
					<label><span>*</span> نام و نام خانوادگی:</label>
					<input type="text" name="name" id="name" placeholder="نام و نام خانوادگی خود را وارد نمایید."/><br />
					<label><span>*</span> ایمیل:</label> 
					<input type="text" name="email" id="email" placeholder="یک ایمیل معتبر وارد نمایید."/><br />
					<label><span>*</span> شماره فاکتور:</label>
					<input type="text" name="numberfactor" id="numberfactor" placeholder="شماره فاکتور خرید را وارد نمایید."/><br />
					<label><span>*</span> مدل:</label> 
					<input type="text" name="model" id="model" placeholder="مدل جنس خریده شده را وارد نمایید."/><br />
					<label ><span>*</span> شماره گارانتی:</label> 
					<input type="text" name="numbergarantee" id="numbergarantee" placeholder="شماره گارانتی خود را وارد نمایید."/><br />
					<label><span>*</span> تلفن:</label> 
					<input type="text" name="tell" id="tell" placeholder="شماره تلفن برای دسترسی سریع" /><br />
					<label> همراه:</label> 
					<input type="text" name="mobile" id="mobile" /><br />
					<label> تاریخ فاکتور:</label>
					<div class="data">
						<input class="searchdata" type="reset" value="جستجو" onclick="return showCalendar('datafactor', 'y-mm-dd');" />
						<input class="inputdata" type="text" name="datafactor" id="datafactor" />
					</div>
					<textarea name="txt" id="txt"  rows="15" placeholder="توضیحات . . ."></textarea> <br />
					<div class="btns">
						<input class="submit-buttons" type="submit" name="submit" value="ارسال اطلاعات" />
						<input class="submit-buttons" type="reset" name="resetgarantee" id="resetgarantee" value="دوباره" />
					</div>
				</form>
			<iframe id='sendinfo' name='sendinfo' src="" frameborder="0" scrolling="no"></iframe>
		</fieldset>
		</div>
	</div>
	<div class="bottom-pic"></div>
</section>
<?php
	get_template_part('/inc/footer');
?>