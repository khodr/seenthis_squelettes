<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de https://trad.spip.net/tradlang_module/seenthis?lang_cible=fr_tu
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// Z
	'Z' => 'ZZzZZzzz',

	// A
	'accueil' => 'Accueil',
	'annuler' => 'Annuler',
	'aucun_message' => 'Aucun message',
	'auteur_block' => 'Bloquer @people@',
	'auteur_block_you' => 'Cet auteur t’a bloqué. Tu ne peux pas commenter ses messages.', # MODIF
	'auteur_ne_plus_block' => 'Débloquer @people@',
	'auteur_ne_plus_suivre' => 'Ne plus suivre @people@',
	'auteur_vous_block' => 'Tu as bloqué @people@',
	'auteur_vous_suivez' => 'Tu suis @people@',
	'auteurs_vous_suivez' => 'Les auteurs que tu suis', # MODIF

	// B
	'beta_publique' => '<strong>Seenthis est en beta publique.</strong><br>Tu peux t’inscrire et participer, merci pour ta patience et ta bonne volonté durant cette phase.',
	'bookmarklet_descriptif' => 'Pour l’utiliser : lorsque tu visites la page d’un article que tu souhaites référencer, sélectionne l’extrait du texte à citer, et clique sur ton bookmarklet. Ton interface Seenthis s’ouvre alors, et ton message est pré-rempli avec le titre de la page, l’URL et la citation.',
	'bookmarklet_titre' => 'Fais glisser ce bookmarklet dans ta barre de favoris :',

	// C
	'changement_email_existe' => 'Cette adresse email est déjà utilisée par un autre compte',
	'changement_email_informer' => '@login@ a indiqué une nouvelle adresse d’email : "@new@" (en remplacement de "@old@")',
	'changement_email_subject' => 'Nouvelle adresse email pour @login@',

	// E
	'ecrire_commentaire' => 'Écrire un commentaire',
	'effacer' => 'effacer',
	'envoyer' => 'Envoyer (maj+retour)',

	// F
	'favori' => 'partager',
	'flux_desactive_texte' => 'Bonjour @nom@,
L’import automatique de ton flux RSS/ATOM a été désactivé car cela fait un moment que tu ne t’es pas connecté au site.
Tu peux le réactiver depuis ta page de préférences, en supprimant l’étoile ajoutée au début de son adresse ou en cliquant sur le lien suivant @url@',
	'flux_desactive_titre' => 'Import de ton flux désactivé sur @nom_site@',

	// I
	'insecable_typo' => ' ',
	'intitule_connexion' => 'connexion',

	// L
	'logout' => 'se déconnecter',

	// M
	'me_suggerer_contacts' => 'Me suggérer des contacts',
	'message_inscription' => '<strong>Inscription gratuite et immédiate</strong><br>Dès l’enregistrement, ton mot de passe t’est expédié par email.',
	'message_suggerer' => '				<strong>Nouveau sur Seenthis ? Tu devrais commencer par suivre des auteurs.</strong>
				<p>Clique sur le bouton « Me suggérer des contacts » ci-contre, et 
				visite les pages des auteurs proposés. Si un auteur t’intéresse, suive-le en cliquant, 
				en haut de page, sur « Suivre cet auteur ».
				Puis reviens sur cette page, recommence l’opération, les propositions s’affineront au fur et
				à mesure de ta propre sélection d’auteurs.</p>
				<p>Ce message disparaîtra lorsque tu suivras cinq auteurs. 
				Rends-toi ensuite  sur l’onglet « @auteurs » pour obtenir des suggestions d’auteurs.</p>', # MODIF
	'modifier' => 'modifier',
	'montrer_messages' => 'montrer les @total@ messages',

	// N
	'notif_me_nouveau' => '@nom_auteur@ a posté un nouveau billet',
	'notif_me_reponse' => '@nom_auteur@ a répondu à un de ses billets',
	'notif_me_reponse_a' => '@nom_auteur@ a répondu à un billet de @nom_auteur_init@',
	'notif_message_footer' => '
---------
Pour ne plus recevoir d’alertes de @seenthis@,
tu peux régler tes préférences dans ton profil
@url@

',
	'notif_partage_texte' => 'Bonjour @nom_dest@,

@nom_aut_partage (@@login_aut_partage@) a partagé un de tes billets sur @seenthis@.', # MODIF
	'notif_partage_titre' => '@nom_aut_partage@ (@@login_aut_partage@) a partagé un de tes billets sur @seenthis@.',
	'notif_suivremoi_texte' => 'Bonjour @nom_dest@,

@nom_aut@ (@@login_aut@) vous suit sur @seenthis@.',
	'notif_suivremoi_titre' => '@nom_aut@ (@@login_aut@) te suit sur @seenthis@.',

	// P
	'pave_accueil' => 'Du <strong>short-blogging</strong> sans limite de caractères. De la <strong>recommandation de liens</strong>. Des <strong>automatismes</strong> pour rédiger facilement tes messages. Des <strong>forums</strong> sous chaque billet. De la <strong>veille d’actualité</strong>. Une <strong>thématisation</strong> avancée.',
	'people' => 'auteurs', # MODIF
	'profil' => 'préférences',
	'profil_alerte_conversations' => '<b>conversations</b> / quelqu’un répond à un billet auquel j’ai moi-même répondu',
	'profil_alerte_dubien' => '<b>un ami qui vous veut du bien</b> / quelqu’un me suit', # MODIF
	'profil_alerte_mes_billets' => '<b>mes billets</b> / recevoir une copie de mes propres messages',
	'profil_alerte_nolife' => '<b>nolife</b> / un auteur que je suis répond à n’importe quel billet', # MODIF
	'profil_alerte_nouveaux_billets' => '<b>nouveaux billets</b> / un nouveau billet est posté par un auteur que je suis', # MODIF
	'profil_alerte_partage' => '<b>partage</b> / quelqu’un a partagé un de mes billets',
	'profil_alerte_reponse_partage' => '<b>réponses à un partage</b> / quelqu’un répond à un billet que j’ai partagé',
	'profil_alerte_reponses' => '<b>réponses à mes billets</b> / quelqu’un répond à un de mes billets',
	'profil_alerte_tag_suivi' => '<b>tag suivi</b> / un nouveau billet contient un tag que je suis',
	'profil_alertes' => 'Alertes',
	'profil_copyleft' => 'Copyright, copyleft',
	'profil_copyright_classique' => 'Pas de licence spécifique (droits d’auteur par défaut)',
	'profil_couleur' => 'Ta couleur',
	'profil_entete' => 'Bandeau supérieur (960 pixels de large)',
	'profil_fond' => 'Image de fond (1600px x 1200px au maximum)',
	'profil_graphisme' => 'Ton graphisme',
	'profil_identite' => 'Identité',
	'profil_langue' => 'Ma langue',
	'profil_licence' => 'Licence de tes messages',
	'profil_liens_partage_fb' => 'Afficher les boutons de partage vers Facebook',
	'profil_liens_partage_tw' => 'Afficher les boutons de partage vers Twitter',
	'profil_logo' => 'Logo de l’auteur (carré)', # MODIF
	'profil_mexpedier' => 'M’expédier un courrier<br> électronique quand...',
	'profil_partage' => 'Partage',
	'profil_rss' => 'Importer automatiquement un flux d’articles au format ATOM ou RSS',

	// R
	'raccourci_bold' => '*<b>gras</b>*',
	'raccourci_italic' => '_<i>italique</i>_',
	'raccourci_quote' => '❝citation❞ (maj+tab)',
	'raccourci_strike' => '-<del>barré</del>-',

	// S
	'slogan_lien' => 'Inscris-toi, c’est gratuit et rapide !',
	'slogan_texte' => '<strong>Participe à la discussion !</strong> Sur Seenthis, tu peux référencer des articles, les commenter, écrire des billets, discuter avec tes amis, suivre les auteurs qui t’intéressent...', # MODIF
	'suggestions' => 'Suggestions :',
	'suivre_people' => 'Suivre @people@',
	'suivre_url' => 'Suivre ce site',
	'suivre_url_stop' => 'Ne plus suivre ce site',
	'suivre_url_you' => 'Tu suis ce site',
	'supprimer_mon_profil' => 'Supprimer mon profil',
	'supprimer_mon_profil_au_revoir' => 'Suppression en cours… au revoir !',
	'supprimer_mon_profil_irreversible' => 'Supprimer mon profil (irréversible)',
	'supprimer_mon_profil_login' => 'Saisis ton login pour confirmer la demande',
	'supprimer_veuillez_saisir' => 'Vérifies ton login',

	// T
	'tags' => 'thèmes',
	'theme_automatiquement' => 'Ce <b>thème</b> a été généré <b>automatiquement</b>.',
	'theme_manuellement' => 'Ce <b>thème</b> est attribué <b>manuellement</b> par les auteurs des messages.', # MODIF
	'themes_automatiques' => 'thèmes automatiques',
	'themes_vous_suivez' => 'Les thèmes que tu suis',
	'tous_les_messages_de' => 'Tous les messages de @people@',
	'traduire_avec_google' => 'traduire',

	// U
	'urls' => 'sites',
	'urls_vous_suivez' => 'Les sites que tu suis',

	// V
	'votre_message' => 'Ton message',
	'votre_message_public' => 'Ton message public à ',
	'vous_connaissez' => 'Tu connaispeut-être :',
	'vous_suivent' => 'abonnés',
	'vous_suivez' => 'abonnements'
);
