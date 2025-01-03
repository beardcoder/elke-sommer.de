@twillBlockTitle('Hero')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input label="Titel" name="title" />
<x-twill::input
    label="Text"
    name="text"
    type="textarea"
/>
<x-twill::browser
    :max="1"
    label="Link"
    module-name="pages"
    name="link"
/>

<x-twill::medias label="Cover Bild" name="cover" />
