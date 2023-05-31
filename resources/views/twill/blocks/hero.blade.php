@twillBlockTitle('Hero')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input name="title" label="Titel" />
<x-twill::input name="text" label="Text" type="textarea" />
<x-twill::browser module-name="pages" name="link" label="Link" :max="1" />

<x-twill::medias name="cover" label="Cover Bild" />
