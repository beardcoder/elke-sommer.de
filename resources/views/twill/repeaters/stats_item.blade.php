@twillBlockTitle('Stats Item')
@twillRepeaterTitle('Stats Element')
@twillRepeaterTrigger('Element hinzufügen')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input name="title" label="Title" />

<x-twill::wysiwyg name="text" label="Text" placeholder="Text" :toolbar-options="[
    'bold',
    'italic',
    ['list' => 'bullet'],
    ['list' => 'ordered'],
    ['script' => 'super'],
    ['script' => 'sub'],
    'link',
    'clean',
]" />
