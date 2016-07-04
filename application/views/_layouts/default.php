
<!--=Header=-->
<section class="header" id="header">

			<?php $this->load->view('_partials/navbar'); ?>
			<div class="header-description text-center">
				<div class="header-content wow bounce animated" style="visibility:visible; animation-name:bounce;">
                                    <div class="container">
                                        <div class="row-fluid">

                                            <div class="camera_wrap pattern_4 camera_emboss" id="camera_wrap_4">
                                                <div data-src="<?=  base_url('assets/images/slide1.png')?>">
                                                            <div class="camera_caption fadeFromTop">
                                                                    <h1>Ofrecemos servicios de ..<a href="#" class="sliderlink"><i class="icon-link"></i></a></h1>
                                                                    <span>
                                                                    Servicios Profesionales
                                                                    </span>
                                                            </div>
                                                    </div>
                                                    <div data-src="<?=  base_url('assets/images/slide2.jpg.png')?>">
                                                            <div class="camera_caption fadeFromRight">
                                                                    <h1>Servicios de ..<a href="#" class="sliderlink"><i class="icon-link"></i></a>
                                                                    </h1>
                                                                    <span>
                                                                    Consultoria en ..
                                                                    </span>
                                                            </div>
                                                    </div>
                                            </div>
                                            <div class="text-center">
                                                    <img src="img/sha.png" class="slidershadowcam" alt="">
                                            </div>
                                        </div>
                                       </div>
				</div>


			</div>
		<!--</div>
	</div>-->

<?php $this->load->view($inner_view); ?>

<footer class="custom-red text-center wow flip animated" style="visibility: visible; animation-name: flip;">
	<!--<div class="container">-->
		<?php if (ENVIRONMENT=='development'): ?>
			<p class="pull-right text-muted">
				<!--CI Bootstrap Version: <strong><?php //echo CI_BOOTSTRAP_VERSION; ?></strong>,
				CI Version: <strong><?php //echo CI_VERSION; ?></strong>,
				Elapsed Time: <strong>{elapsed_time}</strong> seconds,
				Memory Usage: <strong>{memory_usage}</strong>-->
			</p>
		<?php endif; ?>
		<p class="text-muted">&copy; <strong><?php echo date('Y'); ?></strong> All rights reserved. Borderless</p>
	<!--</div>-->
</footer>
