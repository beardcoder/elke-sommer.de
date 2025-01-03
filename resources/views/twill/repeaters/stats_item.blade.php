@twillBlockTitle('Stats Item')
@twillRepeaterTitle('Stats Element')
@twillRepeaterTrigger('Element hinzufügen')
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
