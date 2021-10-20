@twillBlockTitle('Video')
@twillBlockIcon('b-video')
@twillBlockGroup('app')

@formField('input', [
    'name' => 'title',
    'label' => 'Titre',
    'maxlength' => 250,
    'note' => 'Titre',
    'placeholder' => ''
])



@formField('input', [
    'name' => 'video',
    'label' => 'URL',
    'maxlength' => 250,
    'note' => 'URL d’une vidéo Youtube, Vimeo ou Dailymotion',
    'placeholder' => ''
])
