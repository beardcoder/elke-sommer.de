@twillBlockTitle('Footer')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::browser
    label="Navigation"
    max="3"
    module-name="pages"
    name="pages"
/>

<x-twill::repeater
    label="Social Links"
    name="social_links"
    type="social_link"
/>
