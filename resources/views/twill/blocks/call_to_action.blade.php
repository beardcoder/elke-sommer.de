@twillBlockTitle('Call To Action')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input name="title" label="Title" />
<x-twill::input name="text" label="Text" type="textarea" />

<x-twill::browser module-name="pages" name="linkPage" label="Seite" :max="1" />

<x-twill::input name="linkTitle" label="Link url" />
