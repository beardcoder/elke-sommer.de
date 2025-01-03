@twillBlockTitle('Text')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::wysiwyg
    :toolbar-options="[
        ['header' => [2, 3, 4, 5, 6, false]],
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
    name="html"
    placeholder="Text"
/>
