<!DOCTYPE html>
<html>
<head>
	<title>Portfolio website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!----hero Section start---->

	<div class="hero">
		<nav>
			<h2 class="logo">Portof<span>lio</span></h2>
			<ul>
				<div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    </ul>
                </div>
			</ul>
		</nav>

		<div class="content">
			<h4>Hello, my name is</h4>
			<h1>Sandy <span>Manuputty</span></h1>
			<h3>I'am a Web Developer.</h3>
            <button><a target="blank" href="cv.php">Download CV</button>
		</div>
	</div>

	<!----About section start---->
	<section class="about section " id="about">
		<div class="main">
			<img src="img/img1.jpg">
			<div class="about-text">
				<h2>About Me</h2>
				<h5>Developer <span>& Designer</span></h5>
				<p>Saya adalah seorang pelajar DiLP3i Collage Kupang DiBidang Teknik Informatika,
				Dan saya Lebih memfokuskan untuk mejadi seorang programer. </p>
			</div>
		</div>
	</section>

	<!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">75%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">60%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">60%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">MICROSOFT OFFICE</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/gambar1.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>
	<!------Contact Me------>
	<section class="contact section" id="contact">
	<div class="contact-me">
		<p>Jika Butuh Bantuan Bisa klik tombol dibawah ini</p>
		<a id="profile-link" href="https://wa.me/6287843007295">Whatsapp</a>
	</div>

	<!------footer start--------->
	<footer>
		<p>Sandy Manuputty</p>
		<p>Untuk Contoh pembuatan Website lainnya bisa kunjungi media sosial saya dibawah</p>
		<div class="social">
			<div>
                <a id="profile-link" href="https://www.facebook.com/sandy.claudio.77"><img src="img/fb.png" width="50px"></a>
            </div>
			<div>
                <a id="profile-link" href="https://www.instagram.com/_andymanuputty/"><img src="img/igig.jfif" width="90px"></a>
            </div>
		</div>
		<p class="end">CopyRight By SandyManuputty</p>
	</footer>
</body>
</html>