@twillBlockTitle('Veranstaltungs Anmeldung')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input label="Title" name="title" />

<x-twill::browser
    :max="1"
    label="Datenschutz Seite"
    module-name="pages"
    name="privacy"
/>

<x-twill::wysiwyg
    :toolbar-options="[
        'bold',
        'italic',
        ['list' => 'bullet'],
        ['list' => 'ordered'],
        ['script' => 'super'],
        ['script' => 'sub'],
        'link',
        'clean',
    ]"
    label="Erfolgsnachricht"
    name="success"
    placeholder="Text"
/>
