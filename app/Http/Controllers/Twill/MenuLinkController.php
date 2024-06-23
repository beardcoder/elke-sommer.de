<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Browser;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Listings\TableColumns;

class MenuLinkController extends BaseModuleController
{
    protected $moduleName = 'menuLinks';

    protected $showOnlyParentItemsInBrowsers = true;

    protected $nestedItemsDepth = 1;

    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    #[\Override]
    protected function setUpController(): void
    {
        $this->disablePermalink();
        $this->enableReorder();
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    #[\Override]
    public function getForm(TwillModelContract $twillModelContract): Form
    {
        $form = parent::getForm($twillModelContract);

        $form->add(
            Browser::make()
              ->name('page')
              ->modules([Page::class])
        );

        return $form;
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
    #[\Override]
    protected function additionalIndexTableColumns(): TableColumns
    {
        return parent::additionalIndexTableColumns();
    }
}
