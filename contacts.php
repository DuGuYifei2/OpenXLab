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
							<form name="contactform" class="row contact-form">

								<!-- Form Select -->
								<div class="col-md-12 input-subject">
									<p class="p-lg">这个问题是关于： </p>
									<span>选择一个主题，以便我们知道将您的请求发送给谁：</span>
									<select class="form-select subject" aria-label="Default select example">
										<option selected>这个问题是关于...</option>
										<option>申请注册/试用</option>
										<option>其他</option>
									</select>
								</div>

								<!-- Contact Form Input -->
								<div class="col-md-12">
									<p class="p-lg">您的姓名: </p>
									<span>请输入您的真实姓名: </span>
									<input type="text" name="name" class="form-control name" placeholder="您的姓名*">
								</div>

								<div class="col-md-12">
									<p class="p-lg">您的邮件地址: </p>
									<span>请仔细检查您的电子邮件地址是否准确</span>
									<input type="text" name="email" class="form-control email" placeholder="邮件地址*">
								</div>

								<div class="col-md-12">
									<p class="p-lg">详细解释您的问题：</p>
									<span>您想要如何使用我们的产品或是您使用期间遇到的问题</span>
									<textarea class="form-control message" name="message" rows="6"
										placeholder="我的问题是..."></textarea>
								</div>

								<!-- Contact Form Button -->
								<div class="col-md-12 mt-15 form-btn text-right">
									<button type="submit" class="btn btn--theme hover--theme submit">发送</button>
								</div>

								<div class="contact-form-notice">
									<p class="p-sm">我们致力于保护您的隐私。AiToB使用您提供给我们的信息与您联系，了解我们的相关内容、产品和服务。
										您可以随时取消订阅这些通信。有关更多信息，请查看我们的 <a href="privacy.html">隐私策略</a>.
									</p>
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