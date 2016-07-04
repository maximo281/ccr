</section>
<section class="service" id="service">
   
	<div class="wrapper">
		<div class="container">
			<h2 class="section-title wow bounceInRight custom-white animated" style="visibility:visible;animated-name:bounceInRight;">Nuestros Servicios</h2>
			<div class="row-fluid">
				<ul class="ca-menu">

					<?php foreach ($services as $row):?>
                                    <li class="span3">
                                        <a href="#">
                                            <div class="grey-box-icon">
                                                <div class="icon-box-top grey-box-icon-pos">
                                                    <i class="fontawesome-icon medium circle-white center <?=$row['icon']?>"></i>

                                                </div>
                                                <div class="ca-content">
                                                    <h2 class="ca-main"><?= $row['titleServ']?></h2>
                                                    <h3 class="ca-sub"><?= $row['descServ']?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                        <?php endforeach;?>
				</ul>
			</div>
		</div>
		<div class="container-fluid">

		</div>
	</div>
</section>
<section class="works" id="works">
    <div class="wrapper">
        <div class="container">
            <h2 class="section-title wow bounceInRight custom-white animated" style="visibility:visible;animation-name:bounceInRight">Nuestros aliados </h2>
            <div id="filters" class="button-group">
                <button class="filters-button wow bounceInLeft _active animated" data-filter="*" data-wow-delay="0.0s" style="visibility: visible; animation-delay: 0s; animation-name: bounceInLeft;">Todos</button>
                <button class="filters-button wow bounceInLeft animated" data-filter=".applications" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInLeft;">Empresas 01</button>
                <button class="filters-button wow bounceInLeft animated" data-filter=".illustration" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceInLeft;">Empresas 02</button>
                <button class="filters-button wow bounceInLeft animated" data-filter=".logo" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInLeft;">Empresas 03</button>

            </div>
        </div>
        <div id="works_container">
            <?php foreach ($works as $roww):?>
            <div class="works-single-item <?=$roww['class']?>">
                <img src="<?=  base_url('assets/images/'.$roww['img'])?>" class="works-item" alt="">
                <div class="works-single-item-hover text-center" >
                    <div class="works-icons">
                        <a href="#">
                            <i class="custom-icon fa fa-link"></i>
                        </a>
                        <a href="<?=  base_url('assets/images/'.$roww['img'])?>" class="portafolio-item" data-lightbox-gallery="our-works-item-view">
                            <i class="custom-icon fa fa-search"></i>
                        </a>
                    </div>
                    <div class="works-icons-content">Ver Pantalla Completa</div>
                </div>
            </div>
            <?php endforeach;?>
        </div><!--End works_container-->
    </div>
</section>
<section class="team" id="team">
    <div class="container">
        <div class="wrapper">
            <h2 class="section-title block-title wow bounceInright animated custom-black animated" style="visibility:visible; animation-name: bounceInRight;">Nuestro Equipo de Trabajo</h2>
            <div class="row">
               
                <?php 
                    foreach ($meet as $rowm):
                ?>
                 <div class="col-sm-4">
                    <div class="meet-item-bg wow pulse text-center animated" style="visibility:visible; animation-name: pulse;">
                        <div class="meet-item text-center">
                            <div class="meet-single-item wow bounceInDown" style="visibility:visible; animation-name: bounceInDown;">
                                <img alt="Meet" src="<?=base_url('assets/images'.$rowm['image'])?>">
                                 
                                  <div class="meet-icons">
                                    <a href="#">
                                        <i class="custom-icon fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="custom-icon fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="custom-icon fa fa-google-plus"></i>
                                    </a>
                                    <a href="#">
                                        <i class="custom-icon fa fa-linkedin"></i>
                                    </a>
                                 </div>      
                           
                              <div class="meet-item-content custom-white wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
                                <h6 class="meet-item-name"><?=$rowm['name']?></h6>
                                <p class="meet-item-sub custom-black"><?=$rowm['cargo']?></p>
                                <p class="meet-item-about"> <?=$rowm['descripcion']?> </p>
                            </div>
                        </div>
                    </div>
                </div>
                 </div>
                <?php endforeach;?>
            </div>
        </div> 
    </div>
</section>
<section class="contact" id="contact">
    <div class="contact-content">
        <div class="wrapper">
            <div class="container">
                <h2 class="section-title wow bounceInRight custom-black animated" style="visibility:visible; animation-name: bounceInRight;">Contactanos</h2>
            
                <div class="row">
                    <div class="col-sm-6">
                        <p class="address wow pulse animated" style="visibility:visible; animation-name: pulse;">
                            Direccion Calle -3 colona <br>
                            <strong>Telefonos:</strong> 000-444-222-555<br>
                            <strong>E-mail :</strong>ejemplo@email.com<br>
                            <strong>Web :</strong>
                        </p>
                        <ul class="social-icons2 text-center">
                                <li class="wow fadeInLeft facebook animated animated" style="visibility: visible; animation-name: fadeInLeft;">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                
                                <li class="wow fadeInLeft linkedin animated animated" style="visibility: visible; animation-name: fadeInLeft;">
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li class="wow fadeInRight googleplus animated animated" style="visibility: visible; animation-name: fadeInRight;">
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                               
                            </ul>  
                    </div>
                    <div class="col-sm-6 ">
                        <form id="contact-form" class="_form-inline row" action="<?=  base_url('contacto')?>" method="post" name="contact">
                                    <div class="form-group custom-form-group col-sm-6">
                                    <label id="name" class="sr-only" for="name">
                                    <span class="required" aria-required="true">*</span>
                                    Nombre
                                    </label>
                                    <input id="name" class="form-control custom-form-control wow bounceInLeft" type="text" required="" placeholder="Escribe tu Nombre" name="name" aria-required="true" style="visibility: visible; animation-name: bounceInLeft;">
                                    </div>
                                    <div class="form-group custom-form-group col-sm-6">
                                    <label id="email" class="sr-only" for="email">
                                    <span class="required" aria-required="true">*</span>
                                    E-mail
                                    </label>
                                    <input id="email" class="form-control custom-form-control wow bounceInRight" type="email" required="" placeholder="Email" name="email" aria-required="true" style="visibility: visible; animation-name: bounceInRight;">
                                    </div>
                                    <div class="form-group custom-form-group col-sm-12">
                                    <label class="sr-only" for="text-massage">
                                    <span class="required" aria-required="true">*</span>
                                    Mensaje
                                    </label>
                                    <textarea id="text-massage" class="form-control custom-form-control wow bounceInUp" required="" placeholder="Escribenos Tu Mensaje" rows="3" name="text-massage" aria-required="true" style="visibility: visible; animation-name: bounceInUp;"></textarea>
                                    </div>
                                    <button id="submit" class="pull-right btn btn-default submit-button custom-white wow bounceInLeft" value="Send" name="submit" type="submit" style="visibility: visible; animation-name: bounceInLeft;">Enviar</button>
                             </form>
                        
                        <div id="success">
                        <span>
                            <p>Su mensaje fue enviado correctamente! nos pondremos en contacto en breve.</p>
                        </span>
                        </div>
                        <div id="error">
                        <span>
                            <p>Algo salió mal , prueba a actualizar y llenar el formulario de nuevo.</p>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>    
        </div>
        
    </div>
</section>
