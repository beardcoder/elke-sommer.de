@twillBlockTitle('Text Image')
@twillBlockIcon('image-text')
@twillBlockGroup('app')

<x-twill::input
  name="title"
  label="Title"
/>

<x-twill::wysiwyg
  name="text"
  :toolbar-options="[
      ['header' => [3, 4, 5, 6, false]],
      'bold',
      'italic',
      'underline',
      'strike',
      'blockquote',
      'ordered',
      'bullet',
      'hr',
      'code',
      'link',
      'clean',
      'table'
  ]"
  label="Text"
/>

<x-twill::medias
  name="text_image"
  label="Bild"
/>

<x-twill::select
  name="position"
  label="Bild Position"
  default="right"
  :options="[['value' => 'right', 'label' => 'Rechts'], ['value' => 'left', 'label' => 'Links']]"
/>
