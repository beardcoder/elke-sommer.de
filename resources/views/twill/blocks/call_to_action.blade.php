@twillBlockTitle('Call To Action')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input label="Title" name="title" />

<x-twill::input
    label="Text"
    name="text"
    type="textarea"
/>

<x-twill::browser
    :max="1"
    label="Seite"
    module-name="pages"
    name="linkPage"
/>
<x-twill::input label="Link Text" name="linkTitle" />
<x-twill::input
    label="Link Anker"
    name="linkAnchor"
    note="Darf nicht mit einem # beginnen"
    prefix="#"
/>
