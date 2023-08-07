@twillBlockTitle('Email')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
  name="receiver"
  label="Empfänger"
  :required="true"
/>
<x-twill::input
  name="receiver_name"
  label="Empfänger Name"
  :required="true"
/>
<x-twill::input
  name="success"
  label="Erfolgsnachricht"
  :required="true"
/>
