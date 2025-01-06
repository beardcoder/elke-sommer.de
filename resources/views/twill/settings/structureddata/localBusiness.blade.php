@twillBlockTitle('Local Business')
@twillBlockIcon('text')
@twillBlockGroup('app')


<x-twill::checkbox label="Aktivieren" name="active" />

<x-twill::input
    :required="true"
    label="Name"
    name="name"
/>

<x-twill::input
    :required="true"
    label="URL"
    name="url"
/>

<x-twill::input
    :required="true"
    label="Beschreibung"
    name="description"
/>

<x-twill::input
    :required="true"
    label="Telefon"
    name="telephone"
/>

<x-twill::input
    :required="true"
    label="E-Mail"
    name="email"
/>

<x-twill::input
    :required="true"
    label="URL zum Logo"
    name="logo"
/>

<x-twill::input
    :required="true"
    label="Bild"
    name="image"
/>

<x-twill::input
    :required="true"
    label="Price Range"
    name="priceRange"
/>
