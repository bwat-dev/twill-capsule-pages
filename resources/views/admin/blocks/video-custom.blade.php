@twillBlockTitle('Video Custom')
@twillBlockIcon('b-video')
@twillBlockGroup('app')

@formField('input', [
    'name' => 'title',
    'label' => 'Titre',
    'maxlength' => 250,
    'note' => 'Titre',
    'placeholder' => ''
])

@formField('files', [
    'name' => 'video_custom',
    'label' => 'Video custom',
])
