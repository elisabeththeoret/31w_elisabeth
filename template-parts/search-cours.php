<article class="liste__article__search">
	<figure class="search__figure">
		<img src="<?= the_field( 'image_mise_en_avant' ); ?>" alt="Image mise de l'avant pour le cours <?= the_field( 'nom_du_cours' ); ?>">
	</figure>

	<div class="search__texte">
		<h2><?= the_field( 'nom_du_cours' ); ?></h2>

		<div class="liste__infos">
			<span>Sigle du cours : <?= the_field( 'sigle_du_cours' ); ?></span>
			<span>Durée du cours : <?= the_field( 'duree_du_cours' ) ?>h</span>
		</div>

		<p><?= wp_trim_words( get_the_excerpt(), 20, " ..." ); ?></p>

		<a href="<?= get_the_permalink() ?>">En savoir plus</a>
	</div>
</article>
