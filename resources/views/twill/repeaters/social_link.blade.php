@twillBlockTitle('Social Link')
@twillRepeaterTitle('Social Link')
@twillRepeaterTrigger('Link hinzufügen')
@twillBlockIcon('link')
@twillBlockGroup('app')

<x-twill::input
  name="title"
  label="Titel"
/>
<x-twill::input
  name="url"
  type="url"
  label="URL"
/>
