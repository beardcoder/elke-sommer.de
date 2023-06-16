@twillBlockTitle('Veranstaltungs Anmeldung')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input name="title" label="Title" />

<x-twill::browser module-name="pages" name="privacy" label="Datenschutz Seite" :max="1" />

<x-twill::wysiwyg name="success" label="Erfolgsnachricht" placeholder="Text" :toolbar-options="[
    'bold',
    'italic',
    ['list' => 'bullet'],
    ['list' => 'ordered'],
    ['script' => 'super'],
    ['script' => 'sub'],
    'link',
    'clean',
]" />
