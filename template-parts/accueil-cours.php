<article class="grille__article">

	<h2><?= the_field("nom_du_cours"); ?></h2>
	
	<div class="grille__infos">
		<small><?= the_field("sigle_du_cours"); ?></small>
		<small><?= the_field("duree_du_cours"); ?> h</small>
	</div>

	<p><?= wp_trim_words( get_the_excerpt(), 20, " ..." ); ?></p>
	<a href="<?= get_the_permalink(); ?>">En savoir plus</a>

</article>
