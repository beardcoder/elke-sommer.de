@twillBlockTitle('Rezensionen')
@twillBlockIcon('slideshow')
@twillBlockGroup('app')

<x-twill::input label="Titel" name="title" />

<x-twill::input label="Beschreibung" name="description" />

<x-twill::repeater type="testimonial" />
