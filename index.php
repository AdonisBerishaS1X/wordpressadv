<?php get_header(); ?>

<main class="container">
    <h2>Hello Digital School Students</h2>
    <p>This is our custom WordPress theme.</p>
</main>
<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <h2><?php the_title(); ?></h2>

            <p>
                Posted on <?php the_date(); ?> 
                at <?php the_time(); ?> 
                in <?php the_category(', '); ?>
            </p>

            <?php the_content(); ?>

        </article>

    <?php endwhile; ?>

<?php endif; ?>



<div class="container">
    <h1 class="text-center text-primary">
        bootstrap is working
</h1>
<button class="btn btn-success p-2 m-2">Click Me</button>
</div>

<div class="container text-center">
  <div class="row">
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
  </div>
</div>

<?php get_sidebar('primary'); ?>
<?php get_footer(); ?>
