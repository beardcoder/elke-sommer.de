@twillBlockTitle('Rezensionen')
@twillBlockIcon('slideshow')
@twillBlockGroup('app')

<x-twill::input name="title" label="Titel" />

<x-twill::input name="description" label="Beschreibung" />

<x-twill::repeater type="testimonial" />
