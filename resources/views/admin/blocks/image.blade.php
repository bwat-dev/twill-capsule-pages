@twillBlockTitle('Image [une grande image]')
@twillBlockIcon('b-image')
@twillBlockGroup('app')

@formField('medias', [
    'name' => 'image',
    'label' => 'Image',
])

@formField('select', [
    'name' => 'display',
    'label' => 'Affichage',
    'unpack' => true,
    'default' => 'default',
    'options' => [
        [
            'value' => 'default',
            'label' => 'Libre'
        ],
        [
            'value' => 'large',
            'label' => 'Large'
        ]
    ]
])
