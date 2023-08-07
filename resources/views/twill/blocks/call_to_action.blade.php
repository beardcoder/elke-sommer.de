@twillBlockTitle('Call To Action')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
  name="title"
  label="Title"
/>
<x-twill::input
  name="text"
  type="textarea"
  label="Text"
/>

<x-twill::browser
  name="linkPage"
  module-name="pages"
  label="Seite"
  :max="1"
/>

<x-twill::input
  name="linkTitle"
  label="Link url"
/>
