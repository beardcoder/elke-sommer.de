@twillBlockTitle('Kontakt')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
  name="title"
  label="Title"
/>

<x-twill::wysiwyg
  name="text"
  label="Text"
  placeholder="Text"
  :toolbar-options="[
      'bold',
      'italic',
      ['list' => 'bullet'],
      ['list' => 'ordered'],
      ['script' => 'super'],
      ['script' => 'sub'],
      'link',
      'clean'
  ]"
/>

<x-twill::medias
  name="form"
  label="Bild"
/>
<x-twill::browser
  name="privacy"
  module-name="pages"
  label="Datenschutz Seite"
  :max="1"
/>
<x-twill::input
  name="button"
  label="Button Text"
/>
