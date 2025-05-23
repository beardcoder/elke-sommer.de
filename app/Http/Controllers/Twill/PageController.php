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

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
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

    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    #[\Override]
    protected function setUpController(): void
    {
        $this->setPermalinkBase('');
        $this->withoutLanguageInPermalink();
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
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
