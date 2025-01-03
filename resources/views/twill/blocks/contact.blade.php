@twillBlockTitle('Kontakt')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input label="Title" name="title" />

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
    label="Text"
    name="text"
    placeholder="Text"
/>

<x-twill::medias label="Bild" name="form" />
<x-twill::browser
    :max="1"
    label="Datenschutz Seite"
    module-name="pages"
    name="privacy"
/>
<x-twill::input label="Button Text" name="button" />
