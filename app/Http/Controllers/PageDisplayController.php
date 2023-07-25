<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Models\Linktree;
use App\Repositories\PageRepository;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\View\View;

class PageDisplayController extends Controller
{
    public function show(string $slug, PageRepository $pageRepository): View
    {
        $page = $pageRepository->forSlug($slug);

        if (!$page) {
            abort(404);
        }

        SEOMeta::setTitle($page->title);
        if($page->description) {
            SEOMeta::setDescription($page->description);
        }

        return view('site.page', ['item' => $page]);
    }

    public function home(): View
    {
        if (TwillAppSettings::get('homepage.homepage.page')->isNotEmpty()) {
            /** @var \App\Models\Page $page */
            $page = TwillAppSettings::get('homepage.homepage.page')->first();

            SEOMeta::setTitle($page->title);
            if($page->description) {
                SEOMeta::setDescription($page->description);
            }
            if ($page->published) {
                return view('site.page', ['item' => $page]);
            }
        }

        abort(404);
    }

    public function linktree(): View
    {
        /** @var \App\Models\Page $page */
        $linktree = Linktree::all()[0];

        SEOMeta::setTitle($linktree->title);
        if($linktree->description) {
            SEOMeta::setDescription($page->description);
        }
        if ($linktree) {
            return view('site.linktree', ['item' => $linktree]);
        }

        abort(404);
    }
}
