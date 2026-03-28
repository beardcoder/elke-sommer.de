<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fieldset;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;

class PageController extends BaseModuleController
{
    protected $moduleName = 'pages';

    #[\Override]
    public function getForm(TwillModelContract $twillModelContract): Form
    {
        $form = parent::getForm($twillModelContract);

        $form->add(
            Input::make()
                ->name('description')
                ->label('Description')
        );
        $form->addFieldset(
            Fieldset::make()
                ->id('content')
                ->title('Inhalt')
                ->fields([BlockEditor::make()])
        );

        return $form;
    }

    #[\Override]
    protected function setUpController(): void
    {
        $this->setPermalinkBase('');
        $this->withoutLanguageInPermalink();
    }

    #[\Override]
    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()
                ->field('description')
                ->title('Description')
        );

        return $table;
    }
}
