@twillBlockTitle('Email')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
    :required="true"
    label="Empfänger"
    name="receiver"
/>
<x-twill::input
    :required="true"
    label="Empfänger Name"
    name="receiver_name"
/>
<x-twill::input
    :required="true"
    label="Erfolgsnachricht"
    name="success"
/>
