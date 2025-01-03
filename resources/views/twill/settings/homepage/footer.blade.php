@twillBlockTitle('Footer')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::browser
    name="pages"
    label="Navigation"
    module-name="pages"
    max="3"
/>

<x-twill::repeater
    name="social_links"
    type="social_link"
    label="Social Links"
/>
