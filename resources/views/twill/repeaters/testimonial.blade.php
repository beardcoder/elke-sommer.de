@twillRepeaterTitle('Rezension')
@twillRepeaterTrigger('Rezension hinzufügen')
@twillBlockIcon('b-quote')
@twillRepeaterGroup('app')
@twillRepeaterTitleField('name', ['hidePrefix' => true])

<x-twill::input
    :required="true"
    label="Name"
    name="name"
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
    label="Text"
    name="text"
    placeholder="Text"
/>
