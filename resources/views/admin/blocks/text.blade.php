@twillBlockTitle('Texte')
@twillBlockIcon('b-text')
@twillBlockGroup('app')

@formField('wysiwyg', [
    'name' => 'text',
    'label' => 'Texte',
    //'maxlength' => 250,
    'note' => Config::get('twill.editor.note'),
    'placeholder' => Config::get('twill.editor.placeholder'),
    'toolbarOptions' => Config::get('twill.editor.default'),
    'editSource'  => Config::get('twill.editor.editSource')
])
