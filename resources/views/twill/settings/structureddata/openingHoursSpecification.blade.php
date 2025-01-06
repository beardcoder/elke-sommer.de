@twillBlockTitle('Adresse')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::time-picker
    :required="true"
    :time24Hr="true"
    name="opens"
    label="Öffnet"
/>

<x-twill::time-picker
    :required="true"
    :time24Hr="true"
    name="closes"
    label="Schließt"
/>
