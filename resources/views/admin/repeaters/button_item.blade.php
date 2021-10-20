@twillBlockTitle('bouton')
@twillBlockIcon('text')
@twillBlockGroup('app')

@formField('input', [
'name' => 'title',
'label' => 'Titre du bouton',
'maxlength' => 250,
'note' => 'Titre',
'placeholder' => '',
'default' => ''
])

@formField('input', [
'name' => 'link',
'label' => 'Url libre',
'maxlength' => 250,
'note' => 'Lien externe commençant par http ou https ',
'placeholder' => '',
])

@formField('select', [
'name' => 'link_target',
'label' => 'Cible',
'default' => '_parent',
'options' => [
[
'value' => '_parent',
'label' => 'Dans la même fenêtre'
],
[
'value' => '_blank',
'label' => 'Dans un nouvel onglet'
],
]
])
