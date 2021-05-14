<?php get_header(); ?>
<div class="container">
  <div class="linha">
    <div class="col">
      <div class="single">
        <div class="conteudo">
          <h2>Galeria de Imagens</h2>
          <div class="conteudo-item">

            
          <?php if(have_posts()) : while (have_posts()) : the_post();?>
            <div class="item">
              <?php the_content(); ?>
              
            </div>

           <?php endwhile; ?>
            <?php else : get_404_template(); endif;?> 

          </div>
          
        </div>
      </div>
    </div>
    
  </div>

</div>

  
<?php get_footer(); ?>