@twillBlockTitle('Telegram Bot')
@twillBlockIcon('text')
@twillBlockGroup('app')

<x-twill::input
    :required="true"
    label="Chat ID"
    name="chat_id"
/>
<x-twill::input
    :required="true"
    label="API Key"
    name="api_key"
/>
