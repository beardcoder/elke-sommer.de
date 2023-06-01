@twillBlockTitle('Text')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::wysiwyg name="html" label="Text" placeholder="Text" :toolbar-options="[
    ['header' => [2, 3, 4, 5, 6, false]],
    'bold',
    'italic',
    ['list' => 'bullet'],
    ['list' => 'ordered'],
    ['script' => 'super'],
    ['script' => 'sub'],
    'link',
    'clean',
]" />
