<?php get_header(); ?>
  <section class="banner-index">
    <div class="banner-index-img">
      <div class="container">
        <div class="row d-flex justify-content-center">
            <h2 class="moveis">Móveis Planejados</h2>
        </div>
        <div class="row d-flex justify-content-center">
            <div id="carouselBSWP" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                
                  <?php 
                  // args
                  $my_args_banner = array(
                    'post_type' => 'banners',
                    'posts_per_page' => 6,
                  );

                  // query
                  $my_query_banner = new WP_Query ( $my_args_banner );
                  ?>

                  <?php if( $my_query_banner->have_posts()) : 
                    $banner = $banners[0];
                    $c = 0;
                    while( $my_query_banner->have_posts() ) : 
                    $my_query_banner->the_post(); 
                  ?>

                    <div class="carousel-item <?php $c++; if($c == 1) { echo ' active'; } ?>">                                       
                      <?php the_post_thumbnail('post-thumbnail', array('class' => '')) ?>
                      <div class="carousel-caption d-md-block">
                        <h4>
                          <?php the_title(); ?>
                        </h4>
                      </div>
                    </div>

                  <?php endwhile; endif; ?>

                  <?php wp_reset_query(); ?>
                
                </div>

                <a class="carousel-control-prev" href="#carouselBSWP" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  <span class="sr-only">Anterior</span>
                </a>

                <a class="carousel-control-next" href="#carouselBSWP" role="button" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                  <span class="sr-only">Próximo</span>
                </a>
              
              </div>
        </div>

      </div>
    </div>
      
  </section>

  <section class="ambiente">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="titulo" data-aos="fade-right">
            <h3 >Confira Alguns Ambientes que nós ja fizemos</h3>
          </div>
          <div class="conteudo">
            <div class="item">
              <img class="img-responsive imagem-ambiente" src="https://romadesigndeinteriores.com/wp-content/uploads/2020/07/104268058_2837003926425507_2662865373827992188_o.jpg" alt="">
              <a href="https://romadesigndeinteriores.com/cozinha/ ">
               <h5>Cozinha</h5>
              </a>
            </div>
            <div class="item">
              <img class="img-responsive imagem-ambiente" src="https://romadesigndeinteriores.com/wp-content/uploads/2020/07/quarto.jpg" alt="">
              <a href="https://romadesigndeinteriores.com/quarto/">
               <h5>Quarto</h5>
              </a>
            </div>


            <div class="item">
              <img class="img-responsive imagem-ambiente" src="https://romadesigndeinteriores.com/wp-content/uploads/2020/07/sala.jpg" alt="">
              <a href="https://romadesigndeinteriores.com/sala/">
               <h5>Sala</h5>
              </a>
            </div>
            <div class="item">
              <img class="img-responsive imagem-ambiente" src="https://romadesigndeinteriores.com/wp-content/uploads/2020/07/banheiro.jpg" alt="">
              <a href="https://romadesigndeinteriores.com/banheiro/">
               <h5>Banheiro</h5>
              </a>
            </div>
            <div class="item">
              <img class="img-responsive imagem-ambiente" src="https://romadesigndeinteriores.com/wp-content/uploads/2020/07/Capturar-800-800.png" alt="">
              <a href="https://romadesigndeinteriores.com/a-servico/">
               <h5>Àrea de Serviço</h5>
              </a>
            </div>

            <div class="item">
              <img class="img-responsive imagem-ambiente" src="https://romadesigndeinteriores.com/wp-content/uploads/2020/07/promocao.jpg" alt="">
              <a href="https://romadesigndeinteriores.com/p-promocao/">
               <h5>Promoção</h5>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="material">
    <div class="container">

       <div class="row d-flex justify-content-center" data-aos="fade-right">
         <h3>Qualidade do material comprovada. <br> Garantia de 02 anos!</h3>
       </div>

      <div class="row">
        <div class="col">
          
          <div class="conteudo">
            <div class="item">
              <h5>Madeira MDF 18 mm</h5>
            </div>
            <div class="item">              
              <h5>Fundo das gavetas e dos móveis com MDF de 6 mm</h5>
            </div>
            <div class="item">
              <h5>Dobradiças com amortecedor</h5>
            </div>
            <div class="item">
              <h5>Corrediças reforçadas com rolamento</h5>
            </div>
            
            
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="enviar-projeto">
    <div class="container">
      <div class="row">
        <div class="col d-flex justify-content-center">
          <div class="conteudo-todo">
            <div class="fazemos">
              <h5>Fazemos o projeto de acordo com o seu ambiente,<br> Ajustamos e entedemos o que você precisa!</h5>
              <h4>Clique no link Abaixo e envie sua planta, <br> fazemos projeto em 3D sem compromisso!</h4>        

            </div>
            <div class="conteudo" data-aos="fade-right">
             
              <div class="item-zap">

                <a href="https://api.whatsapp.com/send?phone=5511977773042&text=Ol%C3%A1%20Roma,%20visitei%20o%20seu%20site%20e%20gostaria%20de%20saber%20mais%20informa%C3%A7%C3%B5es." class="float" target="_blank">
                  <i class="icon-whatsapp img-zap"></i>
                </a> 

              </div> 
 

            </div>
          </div>
          
        </div>
      </div>
    </div>
      
  </section>

  <section class="contato-2">
    <div class="parallax-contato-img">
      <div class="container">
        <div class="row content-contato">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6  pt-2">
            <div class="contato-dados">
              <div class="dizeres">
                <h4>Entre em contato e solicite um orçamento.</h4>
                
              </div>

              <div class="icone-telefone">
                <i class="icon-phone">                
                </i>
                <div class="num-telefone">
                  <p>(11) 97777-3042</p>
                </div>

              </div>

              <div class="indique">
                <h5>Indique e ganhe desconto!</h5>
              </div>
              

            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 pt-2">
            <div class="contato-mapa">
              
              <div class="mapa">
                <iframe class="img-fluid cont-mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457.5915721975766!2d-46.27554081994463!3d-23.43402553779563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7e906af704a9%3A0xa9d525d7c57ec92!2sR.%20Servid%C3%A3o%20-%20Jardim%20Josely%2C%20Itaquaquecetuba%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1592338450475!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
  </section>
  
  <section class="video">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <h3 data-aos="fade-right">Confira Alguns videos de nosso produtos</h3>
      </div>
      <div class="row mb-5 mt-2">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 d-flex justify-content-center">
          <iframe class="img-fluid " src="https://www.youtube.com/embed/jbxejHqbzJE" allowfullscreen></iframe>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 d-flex justify-content-center">
          <iframe class="img-fluid " src="https://www.youtube.com/embed/gssGcgaIxIg" allowfullscreen></iframe>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 d-flex justify-content-center">
          <iframe class="img-fluid " src="https://www.youtube.com/embed/IbSco1nJ8Mk" allowfullscreen></iframe>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 d-flex justify-content-center">
          <iframe class="img-fluid " src="https://www.youtube.com/embed/JdZz7i46YOc" allowfullscreen></iframe>
        </div>
      </div>
      
    </div>
    
  </section>

  

  
  <?php get_footer(); ?>