@twillBlockTitle('Texte + Image')
@twillBlockIcon('b-text-img')
@twillBlockGroup('app')

@formField('input', [
    'name' => 'title',
    'label' => 'Titre',
    'maxlength' => 250,
    'note' => 'Titre',
    'placeholder' => ''
])

@formField('wysiwyg', [
    'name' => 'text',
    'label' => 'Texte',
    //'maxlength' => 250,
    'required' => true,
    'note' => Config::get('twill.editor.note'),
    'placeholder' => Config::get('twill.editor.placeholder'),
    'toolbarOptions' => Config::get('twill.editor.default'),
    'editSource'  => Config::get('twill.editor.editSource'),
])

@formField('medias', [
    'name' => 'image_with_text',
    'label' => 'Image',
])

@formField('select', [
    'name' => 'display',
    'label' => 'Affichage',
    'unpack' => true,
    'default' => 'image-left',
    'options' => [
        [
            'value' => 'image-left',
            'label' => 'Image à gauche'
        ],
        [
            'value' => 'image-right',
            'label' => 'Image à droite'
        ]
    ]
])


