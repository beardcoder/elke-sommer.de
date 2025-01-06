<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use A17\Twill\Models\Contracts\TwillModelContract;
use App\Models\Linktree;
use App\Models\Page;
use App\Repositories\PageRepository;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\View\View;
use Spatie\SchemaOrg\DayOfWeek;
use Spatie\SchemaOrg\Schema;

class PageDisplayController extends Controller
{
    public function show(string $slug, PageRepository $pageRepository): View
    {
        $page = $pageRepository->forSlug($slug);

        if (!$page instanceof TwillModelContract) {
            abort(404);
        }

        SEOMeta::setTitle($page->title);
        SEOMeta::setCanonical($page->getFullUrl());
        if ($page->description) {
            SEOMeta::setDescription($page->description);
        }

        return view('site.page', [
            'item' => $page,
            'jsonLd' => $this->jsonLd(),
        ]);
    }

    public function home(): View
    {
        if (TwillAppSettings::get('homepage.homepage.page')->isNotEmpty()) {
            /** @var Page $page */
            $page = TwillAppSettings::get('homepage.homepage.page')->first();

            SEOMeta::setTitle($page->title);
            if ($page->description) {
                SEOMeta::setDescription($page->description);
            }

            if ($page->published) {
                return view('site.page', [
                    'item' => $page,
                    'jsonLd' => $this->jsonLd(),
                ]);
            }
        }

        abort(404);
    }

    public function linktree(): View
    {
        /** @var Page $page */
        $page = Linktree::all()[0];

        SEOMeta::setTitle($page->title);
        if ($page->description) {
            SEOMeta::setDescription($page->description);
        }

        if ($page) {
            return view('site.linktree', [
                'item' => $page,
                'jsonLd' => $this->jsonLd(),
            ]);
        }

        abort(404);
    }

    private function jsonLd()
    {

        if (!TwillAppSettings::get('structureddata.localBusiness.active')) {
            return '';
        }

        /** @var \Illuminate\Database\Eloquent\Collection $sameAsLinks */
        $sameAsLinks = TwillAppSettings::get('structureddata.sameAs.links');

        $business = Schema::healthAndBeautyBusiness()
            ->name(TwillAppSettings::get('structureddata.localBusiness.name'))
            ->url(TwillAppSettings::get('structureddata.localBusiness.url'))
            ->description(TwillAppSettings::get('structureddata.localBusiness.description'))
            ->telephone(TwillAppSettings::get('structureddata.localBusiness.telephone'))
            ->email(TwillAppSettings::get('structureddata.localBusiness.email'))
            ->logo(TwillAppSettings::get('structureddata.localBusiness.logo'))
            ->priceRange(TwillAppSettings::get('structureddata.localBusiness.priceRange'))
            ->image([TwillAppSettings::get('structureddata.localBusiness.image')])
            ->address(
                Schema::postalAddress()
                    ->streetAddress(TwillAppSettings::get('structureddata.postalAddress.streetAddress'))
                    ->addressLocality(TwillAppSettings::get('structureddata.postalAddress.addressLocality'))
                    ->postalCode(TwillAppSettings::get('structureddata.postalAddress.postalCode'))
                    ->addressCountry('DE')
            )
            ->geo(
                Schema::geoCoordinates()
                    ->latitude(TwillAppSettings::get('structureddata.geoCoordinates.latitude'))
                    ->longitude(TwillAppSettings::get('structureddata.geoCoordinates.longitude'))
            )
            ->openingHoursSpecification(
                Schema::openingHoursSpecification()
                    ->dayOfWeek([
                        DayOfWeek::Monday,
                        DayOfWeek::Thursday,
                        DayOfWeek::Wednesday,
                        DayOfWeek::Tuesday,
                        DayOfWeek::Friday,
                    ])
                    ->opens(TwillAppSettings::get('structureddata.openingHoursSpecification.opens'))
                    ->closes(TwillAppSettings::get('structureddata.openingHoursSpecification.closes'))
            )
            ->sameAs(array_map(static fn($link) => $link['content']['url'], $sameAsLinks->toArray()));

        return $business->toScript();
    }
}
