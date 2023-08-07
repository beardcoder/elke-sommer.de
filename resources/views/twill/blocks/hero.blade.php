@twillBlockTitle('Hero')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
  name="title"
  label="Titel"
/>
<x-twill::input
  name="text"
  type="textarea"
  label="Text"
/>
<x-twill::browser
  name="link"
  module-name="pages"
  label="Link"
  :max="1"
/>

<x-twill::medias
  name="cover"
  label="Cover Bild"
/>
