@twillBlockTitle('Social Link')
@twillRepeaterTitle('Social Link')
@twillRepeaterTrigger('Link hinzufügen')
@twillBlockIcon('link')
@twillBlockGroup('app')

<x-twill::input label="Titel" name="title" />
<x-twill::input
    label="URL"
    name="url"
    type="url"
/>
