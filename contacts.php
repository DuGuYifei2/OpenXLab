<?php include('header.php'); ?>
		<!-- CONTACTS-1
			============================================= -->
		<section id="contacts-1" class="pb-50 inner-page-hero contacts-section division">
			<div class="container">


				<!-- SECTION TITLE -->
				<div class="row justify-content-center">
					<div class="col-md-10 col-lg-9">
						<div class="section-title text-center mb-80">

							<!-- Title -->
							<h2 class="s-52 w-700">想要提前试用？联系我们吧</h2>

							<!-- Text -->
							<p class="p-lg">想要了解更过关于AiToB的信息？请联系我们，我们会尽快回复您的邮件。</p>


						</div>
					</div>
				</div>


				<!-- CONTACT FORM -->
				<div class="row justify-content-center">
					<div class="col-md-11 col-lg-10 col-xl-8">
						<div class="form-holder">
							<form name="contactform" id="contactForm" class="row contact-form" novalidate>
								<!-- Form Select -->
								<div class="col-md-12 input-subject">
									<p class="p-lg">这个问题是关于： </p>

									<select class="form-select subject" name="type" id="type"  aria-label="Default select example">
										<option selected value="">这个问题是关于...</option>
										<option value="申请注册/试用">申请注册/试用</option>
										<option value="其他">其他</option>
									</select>
								</div>

								<!-- Contact Form Input -->
								<div class="col-md-12 form-group">
									<p class="p-lg">您的姓名:</p>
									<input type="text" name="name" id="name" class="form-control name" placeholder="您的姓名*" required="required" data-validation-required-message="Please enter your name.">
									<p class="help-block text-danger"></p>
								</div>

								<div class="col-md-12 form-group">
									<p class="p-lg">您的邮件地址:</p>
									<input type="email" name="email" id="email" class="form-control email" placeholder="邮件地址*" required="required" data-validation-required-message="Please enter your email.">
									<p class="help-block text-danger"></p>
								</div>

								<div class="col-md-12 form-group">
									<p class="p-lg">详细解释您的问题：</p>
									<textarea class="form-control message" name="message" id="message" rows="6"
										placeholder="我的问题是..." required="required" data-validation-required-message="Please enter message."></textarea>
										<p class="help-block text-danger"></p>
								</div>

								<!-- Contact Form Button -->
								<div class="col-md-12 mt-15 form-btn text-right">
									<div id="success"></div>
									<button type="submit" id="sendMessageButton" class="btn btn--theme hover--theme submit">发送</button>
								</div>

								<!-- Contact Form Message -->
								<div class="col-lg-12 contact-form-msg">
									<span class="loading"></span>
								</div>

							</form>
						</div>
					</div>
				</div> <!-- END CONTACT FORM -->


			</div> <!-- End container -->
		</section> <!-- END CONTACTS-1 -->
<?php include('footer.php'); ?>
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>