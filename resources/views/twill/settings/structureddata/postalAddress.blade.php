@twillBlockTitle('Adresse')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
    :required="true"
    label="Straße"
    name="streetAddress"
/>

<x-twill::input
    :required="true"
    label="Ort"
    name="addressLocality"
/>

<x-twill::input
    :required="true"
    label="PLZ"
    name="postalCode"
/>
