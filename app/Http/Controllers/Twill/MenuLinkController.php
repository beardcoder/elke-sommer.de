<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\NestedModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Browser;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Listings\TableColumns;
use App\Models\Page;

class MenuLinkController extends BaseModuleController
{
    protected $moduleName = 'menuLinks';

    protected $showOnlyParentItemsInBrowsers = true;

    protected $nestedItemsDepth = 1;

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

    #[\Override]
    protected function setUpController(): void
    {
        $this->disablePermalink();
        $this->enableReorder();
    }

    #[\Override]
    protected function additionalIndexTableColumns(): TableColumns
    {
        return parent::additionalIndexTableColumns();
    }
}
