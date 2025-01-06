@twillBlockTitle('Adresse')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
    :required="true"
    label="Öffnet"
    name="opens"
/>

<x-twill::input
    :required="true"
    label="Schließt"
    name="closes"
/>
