@twillBlockTitle('Geo Coordinates')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
    :required="true"
    label="Latitude"
    name="latitude"
/>

<x-twill::input
    :required="true"
    label="Longitude"
    name="longitude"
/>
