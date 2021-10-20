@twillBlockTitle('Fichier à télécharger')
@twillBlockIcon('text')
@twillBlockGroup('app')

@formField('input', [
    'name' => 'title',
    'label' => 'Titre',
    'maxlength' => 250,
    'note' => 'Titre',
    'placeholder' => ''
])


@formField('files', [
    'name' => 'file',
    'label' => 'Fichier',
])

