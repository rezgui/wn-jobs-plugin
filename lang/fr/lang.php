<?php

return [
    'plugin' => [
      'name' => 'Jobs',
      'description' => 'Gestion des postes vacants et les offres d\'emploi'
    ],
    'models' => [
        'job' => [
            'title' => 'Titre',
            'function' => 'Fonction',
            'description' => 'Description',
            'published' => 'Publier',
            'published_at' => 'Publier le',
            'cover' => 'Cover',
            'avatar' => 'Profile Image',
            'button_text' => 'Button Text',
            'button_url' => 'Button URL'
        ]
    ],
    'components' => [
        'jobList' => [
            'name' => 'List d\'emplois',
            'description' => 'Liste toutes les offres d’emploi.'
        ]
    ],
    'forms' => [
        'new_job' => 'Créer une nouvelle offre de travail',
        'back_to_overview' => 'Retour à l\'aperçu',
        'delete_selected' => 'Supprimer la sélection',
        'delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer les offres de travail sélectionnés ?',
        'reorder' => 'Réorganiser les offres de travail',
    ]
];





