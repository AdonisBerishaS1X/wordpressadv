<?php
/**
 *  The template for displaying 404 pages (not found)
 */

get_header();
?>



<div id="primary" class="content-area">

   <main id="main" class="site-main">

      <section class="error-404 not-found">
        
         <header class="page-header">
         <h1 class="page-title">Not Found</h1>
         </header>
         
         <div>
            <h2> Error 404 not found</h2>
            <p> it looks like nothing was found at this location, Maby try a search??</p>
            <?php get_search_form();?>
        </div>
 
       </section>

   </main>


</div>


<?php get_footer();?>