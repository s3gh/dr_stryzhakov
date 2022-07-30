<?php include_once '../db.php'; ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dr S.Stryzhakov</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie-edge"/>
		<meta name="description" content="Site of the doctor Stanislav Stryzhakov - an operating obstetrician-gynecologist, gynecologist oncologist, ultrasound diagnostics doctor. Dotor successfully performs both minimally invasive and operations requiring a broader approach, performing surgical interventions of any complexity in gynecology. He has many years of experience in the treatment of such pathologies as: infertility, endometriosis, leiomyoma (fibroids) of the uterus, tumors and cysts of the uterine appendages, pathology of the uterus and endometrium, prolapse of the pelvic organs and urinary incontinence in women."/>
		<meta name="Keywords" content ="operating gynecologist, surgeon, gynecological oncologist, gynecologist, laparoscopy, uterine myoma, leiomyoma, endometriosis, prolapse, urinary incontinence, vaginal prolapse"/>
		<!-- Стили -->
		<link rel="stylesheet" href="../css/preloader.css"/>
		<link rel="stylesheet" href="../css/style.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet"/>
	</head>
	<body>
		<div class="preloader">
			<div class="preloader__row">
				<div class="preloader__item"></div>
				<div class="preloader__item"></div>
			</div>
		</div>
		<div class="wrapper">		
			<header class="head">
				<div id="top-block-1" class="top-block"></div>
				<div class="top-block-elements">
					<div id="top-block-1" class="top-block"></div>
					<div id="top-block-2" class="top-block"></div>
					<div id="top-block-scrl" class="top-block"></div>
					<div class="logo"></div>
					<!-- Иконки в шапке слева -->
					<div class="shapka-social">
						<a href="http://www.facebook.com/s3gh.sa/"></a><a href="https://www.youtube.com/channel/UCzyD3Y96LlZHQNkhl3pLzcw"></a><a href="https://www.instagram.com/omega_kiev_surgery/"></a><a href="contacts.html#anchor-contacts"></a><a href="mailto:doc@stryzhakov.com?subject=Запитання лікарю"></a><a href="#"></a>
					</div>
					<!-- почта и телефон -->
					<div class="s-mail"><a href="mailto:doc@stryzhakov.com?subject=Question to the doctor">doc@stryzhakov.com</a></div>
					<div class="contact-phone">Doctor's phone: +38 (066) 884-38-53<br>Make an appointment: +38 (044) 333-4-333</div>
					<!-- Языковая панель -->
					<nav class="lang-menu-main">
						<ul class="lang-menu">
							<li><a id="lang-menu-eng">EN</a>
								<ul id="lang-menu-main">
									<li><a id="lang-menu-ua" href="../review.php">UA</a></li>
									<li><a id="lang-menu-ru" href="../ru/review.php">RU</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<!-- Основное меню сайта -->
					<nav>
						<div id="menubtn">
							<div class="menubtn-ico">
								<span></span>
							</div>
						</div>
						<ul id="menu">
							<li><a href="index.html">Main</a></li>
							<li><a href="about.html">About doctor</a></li>
							<li><a href="events.html">Events</a></li>
							<li><a href="diseases.html">Diseases</a></li>
							<li><a href="operations.html">Surgery</a></li>
							<li><a href="review.php">Review</a></li>
							<li><a href="contacts.html">Contacts</a></li>
						</ul>
					</nav>
				</div>
				<div id="top-block-2" class="top-block"></div>
				<div id="top-block-scrl" class="top-block"></div>
				<div class="underheader" id="underheader"></div>
				<div class="underheader-fixed"></div>			
				<nav id="arrowup">
					<a class="arrow-up" href="#underheader"></a>
				</nav>
			</header>
			<main>
				<header class="headblock">
					<div class="head-logo" id="head-logo-20">
						<div class="head-logo-img" id="head-logo-img-review"></div>
						<div class="headblock-text" id="headblock-text-diseases">
							<h5>Reviews and wishes</h5>
						</div>
					</div>
				</header>
				<section class="subwrapper">
					<section class="main-section" id="main-section-full">
						<article class="post">
							<div class="sidebar-review">
								<div class="sticky-block menu-right auto-height" id="sticky-block">
									<a class="menu-right-cover flowing-scroll" href="#anchor-1-review">
										<h6>Give</h6>
										<div class="blue-circle border" id="circle-25"></div>
										<h6>feedback</h6>
									</a>
								</div>
							</div>
							<div class="sidebar-right-review">
								<div class="post-text b6">
									<h6 align="center">Interesting clinical cases</h6>
								</div>
								<div class="menu-right auto-height bb pr border-white">
									<a class="menu-right-cover" href="https://youtu.be/NDWIh6K_yzg">
										<p>Ectopic pregnancy</p>
										<div class="blue-circle border" style="background: url(../images/extrauterina.png) right center no-repeat; background-size: 100%;"></div>
										<p>and hydrosalpinx</p>
									</a>
								</div>
								<br>
								<div class="menu-right auto-height bs pr border-white">
									<a class="menu-right-cover" href="https://youtu.be/lCLItDQpOUw">
										<p>Abdominal</p>
										<div class="blue-circle border" id="circle-24"extrauterina.png></div>
										<p>pregnancy</p>
									</a>
								</div>
								<br>
								<div class="menu-right auto-height bb pr border-white">
									<a class="menu-right-cover" href="https://youtu.be/Sik3Tn1W508">
										<p>Uterine anomaly</p>
										<div class="blue-circle border"style="background: url(../images/20190802_143451.jpg) center center no-repeat; background-size: 113%;"></div>
										<p>uterus duplex</p>
									</a>
								</div>
							</div>
							<div class="post bw" id="post-review">
								<?php $result = mysqli_query($link, "SELECT * FROM `review` ORDER BY id DESC") ?> 

								<?php while($res = mysqli_fetch_assoc($result)) { ?>

								<div class="reviews">
									<div class="review_text">
									<b>Name:</b> <?= $res['username'] ?> | 
									<b>Date:</b> <?= date("d.m.y H:i", strtotime($res['date'])) ?> | 
									<b>Rating:</b>&nbsp;<span class="rating-result star-<?= $res['rating'] ?>"></span>
									<hr>
									<p><?= $res['message'] ?></p>
									</div>
								</div>

								<?php } ?>
								<a id="anchor-1-review" class="anchor-down"></a>
								<div class="reviews">
									<div class="rectangle-txt bw">
										<form method="post" action="../review-index.php" id="review">
											<div class="rating-area">
												<input type="radio" id="star-5" name="rating" value="5">
												<label for="star-5" title="Rating «5»"></label>	
												<input type="radio" id="star-4" name="rating" value="4">
												<label for="star-4" title="Rating «4»"></label>    
												<input type="radio" id="star-3" name="rating" value="3">
												<label for="star-3" title="Rating «3»"></label>  
												<input type="radio" id="star-2" name="rating" value="2">
												<label for="star-2" title="Rating «2»"></label>    
												<input type="radio" id="star-1" name="rating" value="1">
												<label for="star-1" title="Rating «1»"></label>
											</div>
											<br>
											<br>
											<input class="input" type="text" name="username" placeholder="Enter your name" required/><br>
											<input class="input" name="email" placeholder="Enter your email address (optional)" type="text"><br>
											<input type="date" name="date" hidden="true"/>
											<textarea class="input" name="message" rows="5" placeholder="Leave a review" required></textarea>
											<div class="g-recaptcha" data-sitekey="6Lc0J8oZAAAAALE1eKCY_rQ33PxPJSWC6wWZVBce"></div>
											<div id="recaptcha-check" class="recaptcha-check">please confirm that you are not a robot</div>
											<br>
											<input type="submit" name="add" id="btn-post" class="button-1 btn-dbl-w" value="Give feedback"/>
										</form>
									</div>
								</div>	
							</div>
						</article>
						<article class="post-text b6">
							<h6 align="center">Reviews submitted by patients at discharge</h6>
						</article>
						<article class="gallary" id="certificate">
							<div class="gallary-img" id="gallary-img">
								<a data-fancybox="gallery" href="../images/review/рисунок-(18).jpg"><img src="../images/review/min/рисунок-(18).jpg"></a>
								<a data-fancybox="gallery" href="../images/review/рисунок-(19).jpg"><img src="../images/review/min/рисунок-(19).jpg"></a>
								<a data-fancybox="gallery" href="../images/review/рисунок-(20).jpg"><img src="../images/review/min/рисунок-(20).jpg"></a>
								<a data-fancybox="gallery" href="../images/review/рисунок-(21).jpg"><img src="../images/review/min/рисунок-(21).jpg"></a>
								<a data-fancybox="gallery" href="../images/review/рисунок-(22).jpg"><img src="../images/review/min/рисунок-(22).jpg"></a>
								<a data-fancybox="gallery" href="../images/review/рисунок-(23).jpg"><img src="../images/review/min/рисунок-(23).jpg"></a>
								<a data-fancybox="gallery" href="../images/review/рисунок-(24).jpg"><img src="../images/review/min/рисунок-(24).jpg"></a>
						</article>
						<article class="post-text b6">
							<br>
						</article>
						<article class="post-table">
							<a class="diseases-l" href="index.html#rectangle-txt-back-form">
								<h6>ask the doctor</h6>
								<div class="blue-circle border" id="circle-14"></div>
								<h6>about your illness</h6>
							</a>
							<div class="diseases-c">
								<div class="blue-circle" id="circle-1"></div>
							</div>
							<a class="diseases-r" href="contacts.html#anchor-contacts">
								<h6>make</h6>
								<div class="blue-circle border" id="circle-15"></div>
								<h6>an appointment</h6>
							</a>
						</article>
					</section> <!-- main section -->
				</section> <!-- subwrapper -->
			</main>
			<footer>
				<div class="footer" id="foot">
					<div class="shapka-social">
						<a href="http://www.facebook.com/s3gh.sa/"></a><a href="https://www.youtube.com/channel/UCzyD3Y96LlZHQNkhl3pLzcw"></a><a href="https://www.instagram.com/omega_kiev_surgery/"></a><a href="contacts.html#anchor-contacts"></a><a href="mailto:doc@stryzhakov.com?subject=Запитання лікарю"></a><a href="tel:+380668843853"></a>
					</div>
				<p>© Dr. Stryzhakov Stanislav, <?php echo date('m\-Y') ?></p>
				</div>
			</footer>
		</div> <!-- wrapper -->	
		<script src="../js/jquery.min.js"></script>		
		<script src="../js/jquery.fancybox.min.js"></script>
		<script src="../js/script-review.js"></script>
		<script src="../js/script.js"></script>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</body>
</html>