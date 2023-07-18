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
							<h2 class="s-52 w-700">想要体验更多AiToB的产品？联系我们吧！</h2>

							<!-- Text -->
							<p class="p-lg">我们的AI产品经理会在24小时内联系您！</p>


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
									<p class="p-lg">您想要:</p>

									<select class="form-select subject" name="type" id="type"  aria-label="Default select example">
										<option selected value="">(请选择一个您的需求)</option>
										<option value="免费创建自己的AI助手">免费创建自己的AI助手</option>
										<option value="免费获取最新AI资讯">免费获取最新AI资讯</option>
										<option value="获得1个月免费的微信AI助手使用权限">获得1个月免费的微信AI助手使用权限</option>
										<option value="付费定制AI数字员工">付费定制AI数字员工</option>
										<option value="付费购买大语言模型AI客服">付费购买大语言模型AI客服</option>
										<option value="付费定制AI培训课程">付费定制AI培训课程</option>
										<option value="其他">其他</option>
									</select>
								</div>

								<!-- Contact Form Input -->
								<div class="col-md-12 form-group">
									<p class="p-lg">您的姓名:</p>
									<input type="text" name="name" id="name" class="form-control name" placeholder="*(您的姓名)" required="required" data-validation-required-message="Please enter your name.">
									<p class="help-block text-danger"></p>
								</div>

								<div class="col-md-12 form-group">
									<p class="p-lg">您的公司:</p>
									<input type="text" name="company" id="company" class="form-control name" placeholder="*(完整的公司全称会让我们第一时间为您提供AI服务)" required="required" data-validation-required-message="Please enter your company.">
									<p class="help-block text-danger"></p>
								</div>

								<div class="col-md-12 form-group">
									<p class="p-lg">您的邮件地址:</p>
									<input type="email" name="email" id="email" class="form-control email" placeholder="*(准确的邮箱可以确保我们能联系到您)" required="required" data-validation-required-message="Please enter your email.">
									<p class="help-block text-danger"></p>
								</div>

								<div class="col-md-12 form-group">
									<p class="p-lg">您的微信号:</p>
									<input type="text" name="wechat" id="wechat" class="form-control email" placeholder="(有效的微信号可以让我们最快速度联系您)">
									<p class="help-block text-danger"></p>
								</div>

								<div class="col-md-12 form-group">
									<p class="p-lg">其他您想讲的:</p>
									<textarea class="form-control message" name="message" id="message" rows="6"
										placeholder="*(更好的描述您的AI需求，会让我们更快速的提供帮助，您也可以联系我们右下角的AI助手了解我们更多的信息)" required="required" data-validation-required-message="Please enter message."></textarea>
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