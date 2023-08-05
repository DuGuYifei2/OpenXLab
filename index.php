<?php include('header.php'); ?>
<div id="input-box"
	style="display: none; justify-content: center; align-items: center; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000;">
	<div
		style="position: fixed; width: 400px; margin: auto; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); padding: 24px;">
		<h2 style="font-size: 24px; font-weight: bold; margin-bottom: 16px;">首次使用请完善信息</h2>
		<div style="margin-bottom: 16px;">
			<label for="name-input" style="font-weight: bold; margin-bottom: 8px; display: block;">姓名</label>
			<input id="name-input" type="text"
				style="width: 100%; border: 1px solid #ccc; border-radius: 4px; padding: 8px;" placeholder="请输入您的姓名">
			<p id="name-error" style="color: #f00; margin-top: 8px; display: none;">姓名不能为空或包含特殊字符</p>
		</div>
		<div style="margin-bottom: 16px;">
			<label for="email-input" style="font-weight: bold; margin-bottom: 8px; display: block;">邮箱</label>
			<input id="email-input" type="email"
				style="width: 100%; border: 1px solid #ccc; border-radius: 4px; padding: 8px;" placeholder="请输入您的邮箱">
			<p id="email-error" style="color: #f00; margin-top: 8px; display: none;">邮箱不能为空或格式不正确</p>
		</div>
		<div style="display: flex; justify-content: center;">
			<button id="submit-button"
				style="background-color: #007bff; color: #fff; font-weight: bold; padding: 8px 16px; border-radius: 4px; margin-right: 8px;">提交</button>
			<button id="close-button"
				style="background-color: #ccc; color: #333; font-weight: bold; padding: 8px 16px; border-radius: 4px;">关闭</button>
		</div>
	</div>
</div>
<!-- HERO-6
			============================================= -->
<section id="hero-6" class="hero-section">
	<div class="container">
		<div class="hero-6-wrapper r-16 ">
			<div class="row d-flex align-items-center">


				<!-- HERO TEXT -->
				<div class="col-md-6">
					<div class="hero-6-txt wow fadeInRight" style="text-align: center;">

						<!-- Title -->
						<h2 class="s-60 w-700">秒速创建<br>AI数字员工</h2>

						<!-- Text -->
						<p class="p-lg">你只需一步，即可训练专属于你的个性化AI助手<br>瞬间提高业务效率!
						</p>

						<!-- Button -->
						<a href="contacts.php" target="_parent" class="btn r-04 btn--theme hover--theme">即刻免费试用</a>
						<!-- <p class="p-sm btn-txt ico-15">
										<span class="flaticon-check"></span> No credit card needed, free 14-day trial
									</p> -->

					</div>
				</div> <!-- END HERO TEXT -->


				<!-- HERO IMAGE -->
				<div class="col-md-6">
					<div class="hero-6-img wow fadeInLeft">
						<img class="img-fluid" src="images/a4-2.png" alt="hero-image">
					</div>
				</div>


			</div> <!-- End row -->
		</div> <!-- End hero-6-wrapper -->
	</div> <!-- End container -->
</section> <!-- END HERO-6 -->



<!-- DIVIDER LINE -->
<hr class="divider">


<!-- FEATURES-2
			============================================= -->
<section id="features-2" class="pt-100 features-section division">
	<div class="container">


		<!-- SECTION TITLE -->
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-9">
				<div class="section-title mb-70">

					<!-- Title -->
					<h2 class="s-50 w-700">AiToB服务</h2>

				</div>
			</div>
		</div>


		<!-- FEATURES-2 WRAPPER -->
		<div class="fbox-wrapper text-center">
			<div class="row row-cols-1 row-cols-md-3">

				<!-- FEATURE BOX #2 -->
				<div class="col">
					<div class="fbox-2 fb-2 wow fadeInUp">

						<!-- Image -->
						<div class="fbox-img gr--whitesmoke h-175">
							<img class="img-fluid" src="images/f_01.png" alt="feature-image">
						</div>

						<!-- Text -->
						<div class="fbox-txt">
							<h6 class="s-22 w-700">AI数字员工计划</h6>
							<p>根据企业业务流程，定制化打造AI数字员工，提升工作效率。
							</p>
						</div>

					</div>
				</div> <!-- END FEATURE BOX #2 -->

				<!-- FEATURE BOX #1 -->
				<div class="col">
					<div class="fbox-2 fb-1 wow fadeInUp">

						<!-- Image -->
						<div class="fbox-img gr--whitesmoke h-175">
							<img class="img-fluid" src="images/newmedia.png" alt="feature-image">
						</div>

						<!-- Text -->
						<div class="fbox-txt">
							<h6 class="s-22 w-700">大语言模型AI客服</h6>
							<p>基于先进大语言模型，24/7随时随地，准确快速解答客户问询。
							</p>
						</div>

					</div>
				</div> <!-- END FEATURE BOX #1 -->



				<!-- FEATURE BOX #3 -->
				<div class="col">
					<div class="fbox-2 fb-3 wow fadeInUp">

						<!-- Image -->
						<div class="fbox-img gr--whitesmoke h-175">
							<img class="img-fluid" src="images/f_02.png" alt="feature-image">
						</div>

						<!-- Text -->
						<div class="fbox-txt">
							<h6 class="s-22 w-700">AI知识类服务</h6>
							<p>提供最前沿AI资讯，针对企业打造定制化AI升级课程。</p>
						</div>

					</div>
				</div> <!-- END FEATURE BOX #3 -->


			</div> <!-- End row -->
		</div> <!-- END FEATURES-2 WRAPPER -->


	</div> <!-- End container -->
</section> <!-- END FEATURES-2 -->

<!-- INTEGRATIONS-1
			============================================= -->
<section id="integrations-1" class="pt-100 integrations-section">
	<div class="container">

		<!-- SECTION TITLE -->
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="section-title">

					<!-- Title -->
					<h2 class="s-50 w-700" style="z-index: 100">AI工具助手体验</h2>

				</div>
			</div>
		</div>


		<!-- INTEGRATIONS-1 WRAPPER -->
		<div class="integrations-1-wrapper"
			style="display:flex; flex-direction:column; align-items:center; height: 700px">
			<iframe class="chat-iframe" id="chat-iframe-1"
				src="https://embed.aitob.ai/chatbot-iframe/OWxmMzF5elJNa3hmcEh5WkFxSEhaZz09"
				style="display: none;"></iframe>
			<iframe class="chat-iframe" id="chat-iframe-2"
				src="https://embed.aitob.ai/chatbot-iframe/eGxEQXl3WHUwSXlza01LSW5OWC9kQT09"
				style="display: none;"></iframe>
			<iframe class="chat-iframe" id="chat-iframe-3"
				src="https://embed.aitob.ai/chatbot-iframe/bzV4T0wyaDNlOFN0QkNLckxEeEJDQT09"
				style="display: none;"></iframe>
			<div class="slide-container" id="officer-cards">
				<div class="img-holder">
					<div class="card-1">
						<div class="employee-info">
							<div class="employee-image" id="employee-image-1"></div>
							<div class="employee-text">
								<div>姓名: Jessica</div>
								<div>职位: HR</div>
								<div>职能: 撰写英文JD</div>
							</div>
							<button id="chat-btn-1" class="start-chat-btn" onclick="startChat(1)">Chat</button>
						</div>
					</div>
				</div>

				<div class="img-holder">
					<div class="card-2">
						<div class="employee-info">
							<div class="employee-image" id="employee-image-2"></div>
							<div class="employee-text">
								<div>姓名: John Doe</div>
								<div>职位: 专业翻译</div>
								<div>职能: 可以将任意语言翻译为英文</div>
							</div>
							<button id="chat-btn-2" class="start-chat-btn" onclick="startChat(2)">Chat</button>
						</div>
					</div>
				</div>

				<div class="img-holder">
					<div class="card-3">
						<div class="employee-info">
							<div class="employee-image" id="employee-image-3"></div>
							<div class="employee-text">
								<div>姓名: Rebecca</div>
								<div>职位: 文案编辑</div>
								<div>职能: 小红书营销助手</div>
							</div>
							<button id="chat-btn-3" class="start-chat-btn" onclick="startChat(3)">Chat</button>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- END INTEGRATIONS-1 WRAPPER -->


	</div> <!-- End container -->
</section> <!-- END INTEGRATIONS-1 -->

<section id="integrations-1" class="pt-100 integrations-section">
	<div class="container">

		<!-- SECTION TITLE -->
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="section-title">

					<!-- Title -->
					<h2 class="s-50 w-700" style="z-index: 100">AI翻译工具体验</h2>

				</div>
			</div>
		</div>

		<div class="tool-container">
			<div class="title">选择文件</div>
			<div class="subtitle">请上传你要翻译的中文或者其他语言的文件，我们会翻译成英文文档，目前只支持 .docx 文件。</div>
			<div class="file-input">
				<div style="display: flex; flex-direction: row;vertical-align: bottom;">
					<label for="file" class="file-label">点击按钮上传文件</label>
					&nbsp;&nbsp;&nbsp;
					<div class="clear-button" id="clear-button" style="display: none;"><i class="fa fa-times"></i></div>
				</div>
				<input type="file" name="file" id="tran_file" accept=".docx" style="display:none;">
				<button class="file-button" id="file-button">浏览您的计算机</button>
				<button class="translate-button" id="tran_but" onclick="translateConvert()">翻译</button>
				<a href="#" class="download-button" id="download-button" download="output.docx"
					onclick="downloadButtonClick()">翻译完成，点击下载</a>
			</div>
		</div>
		<script>
			function showInput() {
				let inputBox = document.getElementById('input-box');
				inputBox.style.display = 'flex';
			}
			function closeInput() {
				let inputBox = document.getElementById('input-box');
				inputBox.style.display = 'none';
			}

			const getIP = async () => {
				let response = await fetch('https://api.ipify.org?format=json');
				let data = await response.json();
				return data.ip;
			}

			let downloadButton = document.getElementById('download-button');
			let fileInput = document.getElementById('tran_file');
			let fileButton = document.getElementById('file-button');
			let translateButton = document.getElementById('tran_but');
			let clearButton = document.getElementById('clear-button');

			function downloadButtonClick() {
				downloadButton.style.display = 'none';
				translateButton.href = '#';
				fileInput.value = '';
				const fileLabel = document.querySelector('.file-label');
				fileLabel.textContent = '点击按钮上传文件';
				translateButton.style.display = 'none';
				fileButton.style.display = 'block';
				clearButton.style.display = 'none';
			}
			function sendTranslationFile(file) {
				//translateButton.style.display = 'none';
				translateButton.innerHTML = '<i class="fa fa-spinner fa-spin"></i> 正在翻译...';
				let formData = new FormData();
				formData.append('file', file);
				let namemail = localStorage.getItem('trtk');
				formData.append('name', namemail.split(':')[0]);
				formData.append('email', namemail.split(':')[1]);

				(async function () {
					let ip = await getIP();
					formData.append('ip', ip);

					fetch('https://translate.aitob.ai/api/translator/convert', {
						method: 'POST',
						body: formData,
						keepalive: true,
						headers: {
							'Access-Control-Allow-Origin': 'https://aitob.ai',
							'Access-Control-Allow-Credentials': true,
						}
					})
						.then(function (response) {
							if (response.ok) {
								let header = response.headers.get('Content-Type');
								return response.blob();
							} else if (response == 403) {
								alert('由于请求过多，受资源限制，您的每日翻译次数已经用完，请明天再来或者联系我们获取更多翻译次数！');
								translateButton.style.display = 'none';
								translateButton.innerHTML = "翻译";
								fileInput.value = '';
								const fileLabel = document.querySelector('.file-label');
								fileLabel.textContent = '点击按钮上传文件';
								fileButton.style.display = 'block';
								clearButton.style.display = 'none';
							} else {
								console.log('An error occurred when convert word file!');
								translateButton.style.display = 'none';
								translateButton.innerHTML = "翻译";
								fileInput.value = '';
								const fileLabel = document.querySelector('.file-label');
								fileLabel.textContent = '点击按钮上传文件';
								fileButton.style.display = 'block';
								clearButton.style.display = 'none';
							}
						})
						.then(function (blob) {
							let blobUrl = URL.createObjectURL(blob);
							translateButton.style.display = 'none';
							translateButton.innerHTML = "翻译";
							downloadButton.href = blobUrl;
							downloadButton.style.display = 'block';
						})
						.catch(function (error) {
							console.log('An error occurred when convert word file!');
						});
				})();
			}
			function translateConvert() {
				let file = document.getElementById('tran_file').files[0];
				if (file) {
					if (localStorage.getItem('trtk') == null) {
						showInput();
						let nameInput = document.getElementById('name-input');
						let emailInput = document.getElementById('email-input');
						let nameError = document.getElementById('name-error');
						let emailError = document.getElementById('email-error');
						let submitButton = document.getElementById('submit-button');
						submitButton.addEventListener('click', function () {
							let name = nameInput.value.trim();
							let email = emailInput.value.trim();
							if (name === '' || /[^a-zA-Z0-9_\u4e00-\u9fa5]/.test(name)) {
								nameError.style.display = 'block';
								return;
							} else {
								nameError.style.display = 'none';
							}
							if (email === '' || !/^[^\s@:]+@[^\s@]+\.[^\s@]+$/.test(email)) {
								emailError.style.display = 'block';
								return;
							} else {
								emailError.style.display = 'none';
							}
							closeInput();
							localStorage.setItem('trtk', name + ':' + email);
							sendTranslationFile(file);
						});
						return;
					}
					sendTranslationFile(file);
				}
			}

			fileButton.addEventListener('click', () => {
				fileInput.click();
			});

			fileInput.addEventListener('change', () => {
				if (fileInput.files.length > 0) {
					const fileName = fileInput.files[0].name;
					const fileLabel = document.querySelector('.file-label');
					fileLabel.textContent = fileName;
					translateButton.style.display = 'block';
					fileButton.style.display = 'none';
					clearButton.style.display = 'block';
				}
			});

			clearButton.addEventListener('click', () => {
				fileInput.value = '';
				const fileLabel = document.querySelector('.file-label');
				fileLabel.textContent = '点击按钮上传文件';
				translateButton.style.display = 'none';
				fileButton.style.display = 'block';
				clearButton.style.display = 'none';
			});
		</script>
	</div>
</section>

<!-- DIVIDER LINE -->
<br>
<hr class="divider" id="aidigit">
<br>
<br>
<br>
<!-- FEATURES-13
		============================================= -->
<div class="section-title mb-20" style="margin-bottom:-60px;">

	<!-- Title -->
	<h2 class="s-46 w-700">AI数字员工计划
	</h2>
</div>
<section id="features-13" class="shape--bg shape--white-500 pt-100 features-section division">

	<div class="container">

		<div class="row d-flex align-items-center">
			<!-- FEATURES-13 WRAPPER -->
			<div class="col-md-7 order-last order-md-2">
				<div class="fbox-13-wrapper wow fadeInRight">
					<div class="row">
						<div class="col-md-6">
							<!-- FEATURE BOX #1 -->
							<div id="fb-12-1" class="fbox-12 bg--white-100 block-shadow r-12 mb-30">
								<!-- Icon -->
								<div class="fbox-ico ico-55">
									<div class="shape-ico color--theme">
										<!-- Vector Icon -->
										<span class="flaticon-graphics"></span>
										<!-- Shape -->
										<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
												transform="translate(100 100)" />
										</svg>
									</div>
								</div> <!-- End Icon -->
								<!-- Text -->
								<div class="fbox-txt">
									<h5 class="s-20 w-700">AI升级方案评估</h5>
									<p>对企业的现有业务和技术进行全面评估，分析企业可以利用的AI工具并输出可行性报告。</p>
								</div>
							</div>
							<!-- FEATURE BOX #2 -->
							<div id="fb-12-2" class="fbox-12 bg--white-100 block-shadow r-12">
								<!-- Icon -->
								<div class="fbox-ico ico-55">
									<div class="shape-ico color--theme">
										<!-- Vector Icon -->
										<span class="flaticon-idea"></span>
										<!-- Shape -->
										<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
												transform="translate(100 100)" />
										</svg>
									</div>
								</div> <!-- End Icon -->
								<!-- Text -->
								<div class="fbox-txt">
									<h5 class="s-20 w-700">AI数据知识库构建</h5>
									<p>梳理企业内部业务培训文档和知识信息，帮助企业构建匹配大语言模型的AI数据知识库。</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<!-- FEATURE BOX #3 -->
							<div id="fb-12-3" class="fbox-12 bg--white-100 block-shadow r-12 mb-30">
								<!-- Icon -->
								<div class="fbox-ico ico-55">
									<div class="shape-ico color--theme">
										<!-- Vector Icon -->
										<span class="flaticon-graphic"></span>
										<!-- Shape -->
										<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
												transform="translate(100 100)" />
										</svg>
									</div>
								</div> <!-- End Icon -->
								<!-- Text -->
								<div class="fbox-txt">
									<h5 class="s-20 w-700">AI数字员工定制</h5>
									<p>拆解企业业务流程，借助AI生图，AI生文，AI生成策略等能力，定制企业专属的AI数字员工。</p>
								</div>
							</div>
							<!-- FEATURE BOX #4 -->
							<div id="fb-12-4" class="fbox-12 bg--white-100 block-shadow r-12">
								<!-- Icon -->
								<div class="fbox-ico ico-55">
									<div class="shape-ico color--theme">
										<!-- Vector Icon -->
										<span class="flaticon-search-engine-1"></span>
										<!-- Shape -->
										<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
												transform="translate(100 100)" />
										</svg>
									</div>
								</div> <!-- End Icon -->
								<!-- Text -->
								<div class="fbox-txt">
									<h5 class="s-20 w-700">定制化或私有部署</h5>
									<p>我司针对企业特定需求会借助最新的AutoGPT及RPA控制算法打造更为复杂的AI数字员工团队。</p>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- END FEATURES-13 WRAPPER -->
			<!-- TEXT BLOCK -->
			<div class="col-md-5 order-first order-md-2">
				<div class="txt-block left-column wow fadeInLeft"
					style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
					<h5>案例：AI数字招聘专员</h5>
					<!-- TEXT BLOCK -->
					<div>
						<div class="txt-block right-column wow fadeInLeft">


							<!-- CONTENT BOX #1 -->
							<div class="cbox-2 process-step">

								<!-- Icon -->
								<div class="ico-wrap">
									<div class="cbox-2-ico bg--theme color--white">1</div>
									<span class="cbox-2-line"></span>
								</div>

								<!-- Text -->
								<div class="cbox-2-txt">
									<h5 class="s-22 w-700">AI自动化Mapping</h5>
									<p>针对企业对竞争对手的Mapping需求，AI招聘专员可自动搜索、总结、统计招聘网站上的数据信息，并导出表格。
									</p>
								</div>

							</div> <!-- END CONTENT BOX #1 -->


							<!-- CONTENT BOX #2 -->
							<div class="cbox-2 process-step">

								<!-- Icon -->
								<div class="ico-wrap">
									<div class="cbox-2-ico bg--theme color--white">2</div>
									<span class="cbox-2-line"></span>
								</div>

								<!-- Text -->
								<div class="cbox-2-txt">
									<h5 class="s-22 w-700">AI自主招聘</h5>
									<p>AI招聘专员可以根据公司要求完成自主招聘，包括生成招聘策略，在招聘网站和候选人开展对话并完成面试邀约等工作。
									</p>
								</div>

							</div> <!-- END CONTENT BOX #2 -->


							<!-- CONTENT BOX #3 -->
							<div class="cbox-2 process-step">

								<!-- Icon -->
								<div class="ico-wrap">
									<div class="cbox-2-ico bg--theme color--white">3</div>
								</div>

								<!-- Text -->
								<div class="cbox-2-txt">
									<h5 class="s-22 w-700">AI人选匹配筛选</h5>
									<p class="mb-0">对于主动投递的人选，AI招聘专员将自动匹配岗位要求，对人选进行排序，判断其是否匹配并提供推荐理由。
									</p>
								</div>

							</div> <!-- END CONTENT BOX #3 -->


						</div>
					</div> <!-- END TEXT BLOCK -->

				</div>
			</div> <!-- END TEXT BLOCK -->
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- END FEATURES-13 -->

<!-- TEXT CONTENT
			============================================= -->
<section id="lnk-1" class="pt-100 ct-02 content-section division">
	<div class="container">


		<!-- SECTION TITLE -->
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-9">
				<div class="section-title mb-20">

					<!-- Title -->
					<h2 class="s-46 w-700">大语言模型AI客服
					</h2>

				</div>
			</div>
		</div>


		<!-- SECTION CONTENT (ROW) -->
		<div class="row d-flex align-items-center">


			<!-- IMAGE BLOCK -->
			<div class="col-md-6">
				<div class="img-block left-column wow fadeInRight">
					<img class="img-fluid" src="images/img-06.png" alt="content-image">
				</div>
			</div>


			<!-- TEXT BLOCK -->
			<div class="col-md-6" style="padding-left: 50px; padding-right: 45px">
				<div class="txt-block right-column wow fadeInLeft">

					<!-- TEXT BOX -->
					<div class="txt-box">

						<!-- Title -->
						<h5 class="s-22 w-700">多语言交互</h5>

						<!-- Text -->
						<p>全球化服务，智能多语言对话，无障碍通讯。
						</p>

					</div> <!-- END TEXT BOX -->


					<!-- TEXT BOX -->
					<div class="txt-box mb-0">

						<!-- Title -->
						<h5 class="s-22 w-700">一键多渠道</h5>

						<!-- Text -->
						<p>快速接入网页，微信，社交媒体等多平台，无缝覆盖。
						</p>

					</div> <!-- END TEXT BOX -->
					<div class="txt-box mb-0">

						<!-- Title -->
						<h5 class="s-22 w-700">个性化部署</h5>

						<!-- Text -->
						<p>快速定制，满足独特需求，灵活适应。
						</p>

					</div> <!-- END TEXT BOX -->
					<div class="txt-box mb-0">

						<!-- Title -->
						<h5 class="s-22 w-700">销售引导与CRM</h5>

						<!-- Text -->
						<p>主动引导销售，优化客户管理，提升业绩。
						</p>

					</div> <!-- END TEXT BOX -->

				</div>
			</div> <!-- END TEXT BLOCK -->


		</div> <!-- END SECTION CONTENT (ROW) -->


	</div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->

<!-- TEXT CONTENT
			============================================= -->
<section id="lnk-3" class="pt-100 ct-01 content-section division">
	<div class="container">

		<!-- SECTION TITLE -->
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-9">
				<div class="section-title mb-20">

					<!-- Title -->
					<h2 class="s-46 w-700">AI知识类服务
					</h2>

				</div>
			</div>
		</div>
		<!-- SECTION CONTENT (ROW) -->
		<div class="row d-flex align-items-center">


			<!-- TEXT BLOCK -->
			<div class="col-md-6 order-last order-md-2">
				<div class="txt-block left-column wow fadeInRight" style="margin-left: 40px; margin-right: 40px;">
					<!-- List -->
					<ul class="simple-list">
						<li class="list-item">
							<p class="s-22-pc">AI知识类服务提供从基础到深度的AI学习资源。<br><br>
							</p>
						</li>
						<li class="list-item">
							<p class="s-22-pc">免费AI资讯和定期线下分享会紧跟AI行业动态。<br><br>
							</p>
						</li>
						<li class="list-item">
							<p class="s-22-pc">由AI专家亲自授课的线上/线下付费专业课程。<br><br>
							</p>
						</li>
						<li class="list-item">
							<p class="s-22-pc">帮助您和您的企业深化AI知识，提升实践能力。
							</p>
						</li>
					</ul>
				</div>
			</div> <!-- END TEXT BLOCK -->


			<!-- IMAGE BLOCK -->
			<div class="col-md-6 order-first order-md-2">
				<div class="img-block right-column wow fadeInLeft">
					<img class="img-fluid" src="images/img-10.png" alt="content-image">
				</div>
			</div>


		</div> <!-- END SECTION CONTENT (ROW) -->


	</div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->

<!-- TEXT CONTENT
			============================================= -->
<section id="about-us" class="pt-50 ct-02 content-section division">
	<div class="container">
		<div class="row d-flex align-items-center">


			<!-- IMAGE BLOCK -->
			<div class="col-md-6">
				<div class="img-block left-column wow fadeInRight">
					<img class="img-fluid" src="images/img-07.png" alt="content-image">
				</div>
			</div>


			<!-- TEXT BLOCK -->
			<div class="col-md-6">
				<div class="txt-block right-column wow fadeInLeft"
					style="display: flex; justify-content: center; align-items: center; flex-direction: column;">

					<!-- Title -->
					<h2 class="s-46 w-700">团队介绍</h2>

					<!-- Text -->
					<p>AiToB是一家专注于AI能力升级的咨询公司，我们提供设计和引入AI数字员工的解决方案，以推动企业效率和自动化水平的提升。
						<br>
						<br>
						我们的创始团队，源自上海交大，于2016年开发出首个应用于跨境咨询的AI助手，这一创新性的项目获得了上海交大的投资。
						<br>
						<br>
						我们的核心目标是帮助企业在AI时代构建属于自己的数字员工团队，以此充分挖掘和释放人工智能的潜力。AiToB将陪伴您一同步入AI的未来，实现工作效率的显著提升。
					</p>

				</div>
			</div> <!-- END TEXT BLOCK -->


		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- END TEXT CONTENT -->
<?php include('footer.php'); ?>