<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fieldset;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\InlineRepeater;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;

class LinktreeController extends BaseModuleController
{
    protected $moduleName = 'linktrees';

    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->disablePermalink();
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->addFieldset(
            Fieldset::make()
              ->title('Persönlich')
              ->fields([
                Medias::make()
                  ->name('avatar')
                  ->label('Avatar')
                  ->max(1),
                Input::make()
                  ->name('name')
                  ->label('Name'),
                Input::make()
                  ->name('description')
                  ->label('Bescheibung')
                  ->type('textarea'),
              ])
        );

        $form->addFieldset(
            Fieldset::make()
              ->title('Kontakt')
              ->fields([
                Input::make()
                  ->name('phone')
                  ->label('Telefonnummer'),
                Input::make()
                  ->name('email')
                  ->label('E-Mail')
                  ->type('email'),
                Input::make()
                  ->name('whatsapp')
                  ->label('Whatsapp')
                  ->type('url'),
              ])
        );
        $form->addFieldset(
            Fieldset::make()
              ->title('Links')
              ->fields([
                InlineRepeater::make()
                  ->name('links')
                  ->fields([
                    Input::make()
                      ->name('title')
                      ->label('Titel'),
                    Input::make()
                      ->name('url')
                      ->type('url'),
                  ]),
              ])
        );

        return $form;
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
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
