@twillBlockTitle('Footer')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::browser label="Navigation" module-name="pages" max="3" name="pages" />

<x-twill::repeater type="social_link" name="social_links" label="Social Links" />
