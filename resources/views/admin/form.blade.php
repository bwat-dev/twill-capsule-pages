@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'subtitle',
        'label' => 'Sous-titre',
        'maxlength' => 100
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
        'note' => Config::get('twill.editor.note'),
        'placeholder' => Config::get('twill.editor.placeholder'),
        'toolbarOptions' => Config::get('twill.editor.default'),
        'editSource'  => Config::get('twill.editor.editSource')
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Image',
    ])

    @formField('block_editor', [
        'blocks' => ['title-block', 'text', 'text-image', 'image', 'gallery', 'video', 'buttons', 'files']
    ])

@stop
