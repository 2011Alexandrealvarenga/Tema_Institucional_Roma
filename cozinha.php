<?php /* Template name: cozinha */
 ?>
<?php get_header(); ?>

  <section class="banner-index-categoria">
    <div class="container">
      <div class="row d-flex justify-content-center">
        
          <h2 class="moveis">Cozinha</h2>
       
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">
          <div id="carouselBSWP" class="categoria carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            
              <?php 
                // args
                $my_args = array(
                  'post_type' => 'post',          
                  'category_name' => 'cozinha'
                );
         
                // query
                $my_query = new WP_Query ( $my_args );
              ?>

              <?php if( $my_query->have_posts()) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>



                <div class="carousel-item <?php $c++; if($c == 1) { echo ' active'; } ?>">
                  <a href="<?php the_permalink(); ?> ">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => '')) ?>
                  </a>
                  
                  <div class="carousel-caption d-md-block">
                    <h4>
                      <?php the_title(); ?>
                    </h4>
                  </div>
                </div>



              <?php endwhile; ?>
              <?php else : get_404_template();  endif; ?>

              
            
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
  <div class="container">
    <div class="row">
      <div class="col">

        <div class="conteudo-categoria">
          <h2>Confira algumas cozinhas que ja fizemos</h2>


          <?php 
            // args
            $my_args = array(
              'post_type' => 'post',          
              'category_name' => 'cozinha'
            );
     
            // query
            $my_query = new WP_Query ( $my_args );
          ?>

        
          



          <div class="conteudo">
            <?php if( $my_query->have_posts()) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
            <div class="item">
              <h5><?php the_title(); ?></h5>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
              </a>
            </div>

           <?php endwhile; ?>
           <?php else : get_404_template();  endif; ?> 
          </div>

        


        </div>
                

                     <!-- posts-->
        
      </div>
    </div>

  </div>
  

  <?php get_footer(); ?>