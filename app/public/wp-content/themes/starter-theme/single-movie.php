<?php 

get_header();

$movie_language = get_field('movie_language');
$movie_description = get_field('movie_description');
$movie_release_date = get_field('movie_release_date');
$movie_author = get_the_terms(get_the_ID(), 'movie-author');
$movie_author_image = get_field('movie_author_image', 'movie-author_' . $movie_author[0]-> term_id);
$movie_author_biography = get_field('movie_author_biography', 'movie-author_' . $movie_author[0]-> term_id);

// print_r($book_language);
// print_r($book_description);
// print_r($movie_release_date);
// print_r($movie_author);
// print_r($movie_author_image);
// print_r($movie_author_biography);


?>

<h1><?php echo get_the_title(); ?></h1>

<div class="content">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>" alt="">
    <h2>Book Language: <?php echo $movie_language ?></h2>
    <div class="description">
        <?php echo $movie_description; ?>
    </div>
    <span>Movie Release Date: <?php echo $movie_release_date ?> </span>
    <h2>Movie Director is: <?php echo $movie_author[0]-> name ?></h2>
    <img src="<?php echo $movie_author_image ?>" alt="">
    <p>
        <?php echo $movie_author_biography; ?>
    </p>
</div>