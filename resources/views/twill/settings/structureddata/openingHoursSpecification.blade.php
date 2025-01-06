@twillBlockTitle('Adresse')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::time-picker
    :required="true"
    :time24Hr="true"
    :allowInput="true"
    name="opens"
    label="Öffnet"
/>

<x-twill::time-picker
    :required="true"
    :time24Hr="true"
    :allowInput="true"
    name="closes"
    label="Schließt"
/>
