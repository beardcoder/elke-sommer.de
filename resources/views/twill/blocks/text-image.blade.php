@twillBlockTitle('Text Image')
@twillBlockIcon('image-text')
@twillBlockGroup('app')

<x-twill::input label="Title" name="title" />

<x-twill::wysiwyg
    :toolbar-options="[
        ['header' => [2, 3, 4, 5, 6, false]],
        'bold',
        'italic',
        'underline',
        'strike',
        'blockquote',
        'ordered',
        'bullet',
        'hr',
        'code',
        'link',
        'clean',
        'table',
    ]"
    label="Text"
    name="text"
/>

<x-twill::medias label="Bild" name="text_image" />

<x-twill::select
    :options="[['value' => 'right', 'label' => 'Rechts'], ['value' => 'left', 'label' => 'Links']]"
    default="right"
    label="Bild Position"
    name="position"
/>
