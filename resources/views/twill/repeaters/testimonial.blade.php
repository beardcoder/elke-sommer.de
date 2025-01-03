@twillRepeaterTitle('Rezension')
@twillRepeaterTrigger('Rezension hinzufügen')
@twillBlockIcon('b-quote')
@twillRepeaterGroup('app')
@twillRepeaterTitleField('name', ['hidePrefix' => true])

<x-twill::input
    name="name"
    label="Name"
    :required="true"
/>

<x-twill::wysiwyg
    name="text"
    label="Text"
    placeholder="Text"
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
/>
